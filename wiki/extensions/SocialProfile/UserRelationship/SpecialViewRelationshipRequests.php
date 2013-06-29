<?php
/**
 * A special page for viewing open relationship requests for the current
 * logged-in user
 *
 * @file
 * @ingroup Extensions
 * @author David Pean <david.pean@gmail.com>
 * @copyright Copyright © 2007, Wikia Inc.
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

class SpecialViewRelationshipRequests extends SpecialPage {

	/**
	 * Constructor
	 */
	public function __construct() {
		parent::__construct( 'ViewRelationshipRequests' );
	}

	/**
	 * Show the special page
	 *
	 * @param $params Mixed: parameter(s) passed to the page or null
	 */
	public function execute( $params ) {
		global $wgUser, $wgOut, $wgRequest, $wgUserRelationshipScripts;

		/**
		 * Redirect Non-logged in users to Login Page
		 * It will automatically return them to the ViewRelationshipRequests page
		 */
		if ( !$wgUser->isLoggedIn() ) {
			$wgOut->setPageTitle( wfMsg( 'ur-error-page-title' ) );
			$login = SpecialPage::getTitleFor( 'Userlogin' );
			$wgOut->redirect(
				$login->getFullURL( 'returnto=Special:ViewRelationshipRequests' )
			);
			return false;
		}

		$wgOut->addScriptFile( $wgUserRelationshipScripts . '/UserRelationship.js' );
		$wgOut->addExtensionStyle( $wgUserRelationshipScripts . '/UserRelationship.css' );

		$rel = new UserRelationship( $wgUser->getName() );
		$friend_request_count = $rel->getOpenRequestCount( $wgUser->getID(), 1 );
		$foe_request_count = $rel->getOpenRequestCount( $wgUser->getID(), 2 );

		if ( $wgRequest->wasPosted() && $_SESSION['alreadysubmitted'] == false ) {
			$_SESSION['alreadysubmitted'] = true;
			$rel->addRelationshipRequest(
				$this->user_name_to,
				$this->relationship_type,
				$_POST['message']
			);
			$out = '<br /><span class="title">' .
				wfMsg( 'ur-already-submitted' ) .
				'</span><br /><br />';
			$wgOut->addHTML( $out );
		} else {
			$_SESSION['alreadysubmitted'] = false;
			$output = '';

			$wgOut->setPageTitle( wfMsg( 'ur-requests-title' ) );
			$requests = $rel->getRequestList( 0 );

			if ( $requests ) {
				foreach ( $requests as $request ) {
					$user_from = Title::makeTitle( NS_USER, $request['user_name_from'] );
					$avatar = new wAvatar( $request['user_id_from'], 'l' );
					$avatar_img = $avatar->getAvatarURL();

					if ( $request['type'] == 'Foe' ) {
						$msg = wfMsg(
							'ur-requests-message-foe',
							$user_from->escapeFullURL(),
							$request['user_name_from']
						);
					} else {
						$msg = wfMsg(
							'ur-requests-message-friend',
							$user_from->escapeFullURL(),
							$request['user_name_from']
						);
					}

					$message = $wgOut->parse( trim( $request['message'] ), false );

					$output .= "<div class=\"relationship-action black-text\" id=\"request_action_{$request['id']}\">
					  	{$avatar_img}" . $msg;
					if ( $request['message'] ) {
						$output .= '<div class="relationship-message">' . $message . '</div>';
					}
					$output .= '<div class="cleared"></div>
						<div class="relationship-buttons">
							<input type="button" class="site-button" value="' . wfMsg( 'ur-accept' ) . '" onclick="javascript:requestResponse(1,' . $request['id'] . ')" />
							<input type="button" class="site-button" value="' . wfMsg( 'ur-reject' ) . '" onclick="javascript:requestResponse(-1,' . $request['id'] . ')" />
						</div>
					</div>';
				}
			} else {
				$inviteLink = SpecialPage::getTitleFor( 'InviteContacts' );
				$output = wfMsg( 'ur-no-requests-message', $inviteLink->escapeFullURL() );
			}
			$wgOut->addHTML( $output );
		}
	}
}
