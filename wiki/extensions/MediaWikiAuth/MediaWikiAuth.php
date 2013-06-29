<?php
/**
 * MediaWikiAuth extension -- imports logins from an external MediaWiki instance
 * Requires Snoopy.class.php.
 *
 * @file
 * @ingroup Extensions
 * @version 0.7.1
 * @author Laurence "GreenReaper" Parry
 * @author Jack Phoenix
 * @author Kim Schoonover
 * @author Ryan Schmidt
 * @copyright © 2009-2010 Laurence "GreenReaper" Parry
 * @copyright © 2010-2013 Jack Phoenix, Ryan Schmidt
 * @copyright © 2012-2013 Kim Schoonover
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:MediaWikiAuth Documentation
 */
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License along
# with this program; if not, write to the Free Software Foundation, Inc.,
# 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
# http://www.gnu.org/copyleft/gpl.html

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point.\n" );
}

# Extension credits
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'MediaWikiAuth',
	'author' => array( 'Laurence Parry', 'Jack Phoenix', 'Kim Schoonover', 'Ryan Schmidt' ),
	'version' => '0.7.1',
	'url' => 'https://www.mediawiki.org/wiki/Extension:MediaWikiAuth',
	'description' => 'Authenticates against and imports logins from an external MediaWiki instance',
);

# Stuff
$wgExtensionMessagesFiles['MediaWikiAuth'] = dirname( __FILE__ ) . '/MediaWikiAuth.i18n.php';

class MediaWikiAuthPlugin extends AuthPlugin {
	private $snoopy;
	private $old_user_id;
	private $old_user_name;
	#private $old_user_rev_cnt;
	#private $old_user_singlegroup;

	function userExists( $username ) {
		# Check against a table of existing names to import
		$dbr = wfGetDB( DB_SLAVE );

		# If this table doesn't exist, we can't check this way
		if ( $dbr->tableExists( 'user' ) ) {
			$res = $dbr->select(
				'user',
				array( 'user_id' ),
				array( 'user_name' => $username ),
				__METHOD__
			);
			$row = $dbr->fetchObject( $res );
			if ( $row ) {
				$this->old_user_id = $row->user_id;
				return true;
			}
		}
		# Just say they exist for now, the authenticate() check will provide an appropriate
		# error message if the user does not exist on the remote wiki
		return true;
	}

	/**
	 * This will be called if the user did not exist locally and userExists returned true
	 * Using &$errormsg requires a patch, otherwise it'll always be "bad password"
	 * See Extension:MediaWikiAuth for this patch
	 *
	 * @param $username Mixed: username
	 * @param $password Mixed: password to the above username
	 * @param $errormsg Mixed: error message or null
	 */
	function authenticate( $username, $password, &$errormsg = null ) {
		$dbr = wfGetDB( DB_SLAVE );

		# If the user exists locally, fall back to local auth
		if ( $dbr->tableExists( 'user' ) ) {
			$res = $dbr->select(
				'user',
				array( 'user_id' ),
				array( 'user_name' => $username ),
				__METHOD__
			);
			$row = $dbr->fetchObject( $res );
			if ( $row ) {
				$this->old_user_id = $row->user_id;
				return false;
			}
		}
		global $wgMediaWikiAuthAPIURL;

		# This is loaded here so it isn't loaded needlessly
		if ( !class_exists( 'Snoopy', false ) ) {
			require_once( dirname( __FILE__ ) . '/Snoopy.class.php' );
		}
		$this->snoopy = new Snoopy();
		$this->snoopy->agent = 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0)';

		# The user should exist remotely. Let's try to login.
		$login_vars = array(
			'action' => 'login',
			'lgname' => $username,
			'lgpassword' => $password,
			'format' => 'php'
		);
		do {
			$this->snoopy->submit( $wgMediaWikiAuthAPIURL, $login_vars );

			# Did we get in? Look for result: 'Success'
			$results = unserialize( $this->snoopy->results );
			wfDebugLog( 'MediaWikiAuth', 'Login result:' . print_r( $results, true ) );
			$errormsg = wfMsg( 'mwa-error-unknown' );
			if ( isset( $results['login'] ) ) {
				$login = $results['login'];
				# This ignores the NoName option as it will be filtered out before now
				switch ( $login['result'] ) {
					case 'Success':
						# Set cookies from the successful login
						$this->snoopy->setcookies();

						# Did we not have an ID from earlier? Use the one we're given now
						if ( !isset( $this->old_user_id ) ) {
							$this->old_user_id = $login['lguserid'];
							# Check if ID already exists and handle
							$dbr = wfGetDB( DB_SLAVE );
							$localUser = $dbr->select(
								'user',
								'user_name',
								array( 'user_id' => $this->old_user_id ),
								__METHOD__
							);
							if( $dbr->fetchObject( $localUser ) ) {
								$resid = (int)$dbr->selectField(
									'user',
									'user_id',
									array(),
									__METHOD__,
									array( 'ORDER BY' => 'user_id desc' )
								);
								$this->old_user_id = $resid + 1;
							}
						}
						$this->old_user_name = $login['lgusername'];
						return true;

					case 'NotExists':
						global $wgUser;
						if( $wgUser->isAllowed( 'createaccount' ) ) {
							$errormsg = wfMsgWikiHtml( 'nosuchuser', htmlspecialchars( $username ) );
						} else {
							$errormsg = wfMsg( 'nosuchusershort', htmlspecialchars( $username ) );
						}
						break;

					case 'NeedToken':
						# Set cookies and break out to resubmit
						$this->snoopy->setcookies();
						$login_vars['lgtoken'] = $login['token'];
						break;

					case 'WrongToken':
						$errormsg = wfMsg( 'mwa-error-wrong-token' );
						break;

					case 'EmptyPass':
						$errormsg = wfMsg( 'wrongpasswordempty' );
						break;

					case 'WrongPass':
					case 'WrongPluginPass':
						$errormsg = wfMsg( 'wrongpassword' );
						break;

					case 'CreateBlocked':
						$errormsg = wfMsg( 'mwa-autocreate-blocked' );
						break;

					case 'Throttled':
						$errormsg = wfMsg( 'login-throttled' );
						break;

					case 'ResetPass':
						$errormsg = wfMsg( 'mwa-resetpass' );
						break;
				}
				if ( isset( $login['wait'] ) ) {
					$errormsg .= ' ' . wfMsg( 'mwa-wait', $login['wait'] );
				}
			}
		} while ( isset( $results['login'] ) && $login['result'] == 'NeedToken' );

		# Login failed! Display a message
		return false;
	}

	/**
	 * We do want to auto-create local accounts when a remote account exists.
	 */
	function autoCreate() {
		return true;
	}

	function initUser( &$user, $autocreate = false ) {
		global $wgMediaWikiAuthAPIURL, $wgMediaWikiAuthPrefsURL;

		# If autocreate is true (if it isn't, something's very wrong),
		# import preferences, and remove from our local table of names to be imported
		# $this->snoopy should still be active and logged in at this point
		if ( $autocreate && !$user->isAnon() && $this->old_user_id ) {
			# Save user settings
			# $user->saveSettings();

			$dbw = wfGetDB( DB_MASTER );
			# Set old revisions with the old username to the new userID
			# (might have been imported with 0, or a temp ID)
			$dbw->update(
				'revision',
				array( 'rev_user' => $this->old_user_id ),
				array( 'rev_user_text' => $this->old_user_name ),
				__METHOD__
			);
			$dbw->update(
				'logging',
				array( 'log_user' => $this->old_user_id ),
				array( 'log_user_text' => $this->old_user_name ),
				__METHOD__
			);

			# Get correct edit count
			$dbr = wfGetDB( DB_SLAVE );
			$count = $dbr->selectField(
				'revision',
				'COUNT(rev_user)',
				array( 'rev_user' => $this->old_user_id ),
				__METHOD__
			);

			# Set real user editcount, email, and ID
			$dbw->update(
				'user',
				array(
					'user_editcount' => $count,
					'user_email' => $user->mEmail,
					'user_id' => $this->old_user_id
				),
				array( 'user_name' => $user->mName ),
				__METHOD__
			);
			$user->mId = $this->old_user_id;
			$user->mFrom = 'id';

			# Get account creation date
			$account_vars = array(
				'action' => 'query',
				'list' => 'users',
				'ususers' => $user->mName,
				'usprop' => 'registration',
				'format' => 'php'
			);
			$this->snoopy->submit( $wgMediaWikiAuthAPIURL, $account_vars );
			# Remove formatting from API timestamp; database expects a plain number
			$results = str_replace(
				array( ':', 'T', 'Z', '-' ),
				'',
				unserialize( $this->snoopy->results )['query']['users'][0]['registration']
			);
			# Bogus time? Missing dates default to the current timestamp; fall back to first edit
			if ( substr( $results, 0, 8 ) == gmdate( 'Ymd', time() ) ) {
				$res = $dbr->select(
					'revision',
					array( 'rev_timestamp' ),
					array( 'rev_user' => $this->old_user_id ),
					__METHOD__,
					array( 'ORDER BY' => 'rev_timestamp ASC', 'LIMIT' => 1 )
				);
				if( $res->numRows() ) {
					$results = $dbr->fetchObject( $res )->rev_timestamp;
				}
			}
			if( is_numeric( $results ) ) {
				$dbw->update(
					'user',
					array( 'user_registration' => $results ),
					array( 'user_id' => $this->old_user_id ),
					__METHOD__
				);
			}

			# Get watchlist
			# FIXME Bad things may happen with large watchlists. Also need option to not try.
			$watchlist_vars = array(
				'action' => 'query',
				'list' => 'watchlistraw',
				'wrlimit' => '500',
				'format' => 'php'
			);
			$more = true;
			$wrcontinue = null;
			do {
				if ( $wrcontinue === null ) {
					unset( $watchlist_vars['wrcontinue'] );
				} else {
					$watchlist_vars['wrcontinue'] = $wrcontinue;
				}
				$this->snoopy->submit( $wgMediaWikiAuthAPIURL, $watchlist_vars );
				$results = unserialize( $this->snoopy->results );

				if ( empty( $results['watchlistraw'] ) ) {
					break;
				}
				foreach ( $results['watchlistraw'] as $wrEntry ) {
					# Insert the damn thing if it's not a talkpage
					# For some reason the query returns talkpages too.
					if ( $wrEntry['ns'] % 2 == 0 ) {
						$watchTitle = Title::newFromText( $wrEntry['title'] );
						if( $watchTitle instanceOf Title ) {
							$user->addWatch( $watchTitle );
						} else {
							wfDebugLog( 'MediaWikiAuth', 'Could not form Title object for ' . $wrEntry['title'] );
						}
					}
					if ( isset( $results['query-continue'] ) ) {
						$wrcontinue = $results['query-continue']['watchlistraw']['wrcontinue'];
					} else {
						$wrcontinue = null;
					}
					$more = !( $wrcontinue === null );
				}
			} while ( $more );

			# Get user preferences
			$prefs_vars = array(
				'action' => 'query',
				'meta' => 'userinfo',
				'uiprop' => 'options',
				'format' => 'php'
			);

			$this->snoopy->submit( $wgMediaWikiAuthAPIURL, $prefs_vars );
			$results = unserialize( $this->snoopy->results );
			if (
				isset( $results['query'] ) &&
				isset( $results['query']['userinfo'] ) &&
				isset( $results['query']['userinfo']['options'] )
			) {
				$options = $results['query']['userinfo']['options'];
				# Don't need some options
				$ignoredOptions = array(
					'widgets', 'showAds', 'theme',
					'disableeditingtips', 'edit-similar',
					'skinoverwrite', 'htmlemails', 'marketing',
					'notifyhonorifics', 'notifychallenge',
					'notifygift', 'notifyfriendsrequest',
					'blackbirdenroll', 'marketingallowed',
					'disablecategorysuggest', 'myhomedisableredirect',
					'avatar', 'widescreeneditingtips',
					'disablelinksuggest', 'watchlistdigestclear',
					'hidefollowedpages', 'enotiffollowedpages',
					'enotiffollowedminoredits', 'myhomedefaultview',
					'disablecategoryselect'
				);
				foreach ( $ignoredOptions as $optName ) {
					if ( isset( $options[$optName] ) ) {
						unset( $options[$optName] );
					}
				}
				$user->mOptions = array_merge( $user->mOptions, $options );
			}

			# Scraping stuff; there really should be api queries for this...
			# Older versions had the user append ?uselang=en; remove that since we'll do that ourselves here.
			$wgMediaWikiAuthPrefsURL = str_replace( array( '?uselang=en', '&uselang=en' ), '', $wgMediaWikiAuthPrefsURL );

			if ( strpos( $wgMediaWikiAuthPrefsURL, '?' ) ) {
				$this->snoopy->fetch( $wgMediaWikiAuthPrefsURL . '&uselang=qqx' );
			} else {
				$this->snoopy->fetch( $wgMediaWikiAuthPrefsURL . '?uselang=qqx' );
			}
			$result = $this->snoopy->results;

			# wpRealName = 1.15 and older, wprealname = 1.16+
			if ( preg_match( '^.*wp(R|r)eal(N|n)ame.*value="(.*?)".*^', $result, $matches ) ) {
				$user->setRealName( stripslashes( html_entity_decode( $matches[3], ENT_QUOTES, 'UTF-8' ) ) );
			}
			# wpUserEmail = 1.15 and older, wpemailaddress = 1.16+
			if ( preg_match( '^.*(wpUserEmail|wpemailaddress).*value="(.*?)".*^', $result, $matches ) ) {
				$user->mEmail = stripslashes( html_entity_decode( $matches[2], ENT_QUOTES, 'UTF-8' ) );
				wfRunHooks( 'UserSetEmail', array( $this, &$this->mEmail ) );
				# We assume the target server knows what it is doing.
				if (
					strpos( $result, '(emailauthenticated: ' )
					|| strpos( $result, '(usersignup-user-pref-emailauthenticated)' ) # Wikia
				) {
					$user->confirmEmail();
				} else {
					$user->sendConfirmationMail();
				}
			}

			# Because updating the user object manually doesn't seem to work
			$dbw->update(
				'user',
				array(
					'user_real_name' => $user->mRealName,
					'user_email' => $user->mEmail,
					'user_id' => $this->old_user_id
				),
				array( 'user_id' => $user->mId ),
				__METHOD__
			);
			# May need to set last message date so they don't get old messages
		}

		if ( isset( $this->snoopy ) ) {
			# Logout once we're finished
			$logout_vars = array( 'action' => 'logout' );
			$this->snoopy->submit( $wgMediaWikiAuthAPIURL, $logout_vars );
		}
		return true;
	}
}

