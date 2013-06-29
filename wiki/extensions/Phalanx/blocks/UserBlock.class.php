<?php
/**
 * UserBlock
 *
 * This filter blocks a user (exactly the same as a local MediaWiki block),
 * if the user's name matches one of the blacklisted phrases or IPs.
 *
 * @date 2012-08-09
 */

class UserBlock {
	const TYPE = Phalanx::TYPE_USER;
	const CACHE_KEY = 'user-status';

	/**
	 * This function will return false if user is blocked.
	 * The reason why it was written in such way is below when you look at
	 * method UserBlock::onUserCanSendEmail().
	 */
	public static function blockCheck( &$user ) {
		global $wgUser, $wgMemc, $wgRequest;
		wfProfileIn( __METHOD__ );

		$ret = true;
		$text = $user->getName();
		// RT#42011: RegexBlock records strange results
		// don't write stats for other user than visiting user
		$isCurrentUser = $text == $wgUser->getName();

		// check cache first before proceeding
		$cachedState = self::getBlockFromCache( $user, $isCurrentUser );
		if ( !is_null( $cachedState ) ) {
			wfProfileOut( __METHOD__ );
			return $cachedState;
		}
		$blocksData = Phalanx::getFromFilter( self::TYPE );

		if ( !empty( $blocksData ) && !empty( $text ) ) {
			if ( $user->isAnon() ) {
				$ret = self::blockCheckInternal( $user, $blocksData, $text, true, $isCurrentUser );
			} else {
				$ret = self::blockCheckInternal( $user, $blocksData, $text, false, $isCurrentUser );
				// do not check IP for current user when checking block status of different user
				if ( $ret && $isCurrentUser ) {
					// if the user name was not blocked, check for an IP block
					$ret = self::blockCheckInternal( $user, $blocksData, $wgRequest->getIP(), true, $isCurrentUser );
				}
			}
		}

		// populate cache if not done before
		if ( $ret ) {
			$cachedState = array(
				'timestamp' => wfTimestampNow(),
				'block' => false,
				'return' => $ret,
			);
			$wgMemc->set( self::getCacheKey( $user ), $cachedState );
		}

		wfProfileOut( __METHOD__ );
		return $ret;
	}

	private static function blockCheckInternal( &$user, $blocksData, $text, $isBlockIP = false, $writeStats = true ) {
		global $wgMemc;
		wfProfileIn( __METHOD__ );

		foreach ( $blocksData as $blockData ) {
			if ( $isBlockIP && !User::isIP( $blockData['text'] ) ) {
				continue;
			}

			$result = Phalanx::isBlocked( $text, $blockData, $writeStats );

			if ( $result['blocked'] ) {
				self::setUserData( $user, $blockData, $text, $isBlockIP );

				$cachedState = array(
					'timestamp' => wfTimestampNow(),
					'block' => $blockData,
					'return' => false,
				);
				$wgMemc->set( self::getCacheKey( $user ), $cachedState );

				wfProfileOut( __METHOD__ );
				return false;
			}
		}

		wfProfileOut( __METHOD__ );
		return true;
	}

	private static function getCacheKey( $user ) {
		global $wgPhalanxDatabase, $wgPhalanxDatabasePrefix;
		// Wikia version uses the custom global function wfSharedMemcKey here
		return wfForeignMemcKey( $wgPhalanxDatabase, $wgPhalanxDatabasePrefix, 'phalanx', self::CACHE_KEY, $user->getTitleKey() );
	}

	protected static function getBlockFromCache( $user, $isCurrentUser ) {
		global $wgMemc;

		wfProfileIn( __METHOD__ );

		$cacheKey = self::getCacheKey( $user );

		$cachedState = $wgMemc->get( $cacheKey );

		if ( !empty( $cachedState ) && $cachedState['timestamp'] > (int) Phalanx::getLastUpdate() ) {
			if ( !$cachedState['return'] && $isCurrentUser ) {
				self::setUserData( $user, $cachedState['block'], '', $user->isAnon() );
			}

			// added to make User::isBlockedGlobally() work for this instance of User class
			$user->mBlockedGlobally = !$cachedState['return'];

			wfProfileOut( __METHOD__ );

			return $cachedState['return'];
		}

		wfProfileOut( __METHOD__ );
		return null;
	}

	/**
	 * moved from RegexBlockCore.php
	 *
	 * @param $user Object: User object who is being blocked
	 * @param $blockData Array: array of block data (who blocked, why, etc.)
	 * It looks like this:
	 * array(
	 * [id] => // block ID
	 * [author_id] => // user ID of the person who blocked
	 * [text] => // user name or IP that is being blocked
	 * [type] => // internal Phalanx type of the block; an integer
	 * [timestamp] => // timestamp when this block was created, i.e. 20120112142808
	 * [expire] => // expiration timestamp, i.e. 20130112142808
	 * [exact] => // exact match (1) or not (0)?
	 * [regex] => // is this regex (1) or not (0)?
	 * [case] => // case-sensitive (1) or not (0)?
	 * [reason] => // block reason supplied by the blocked
	 * [lang] => // empty if it's "all languages"
	 * )
	 * @param $address Mixed: IP address or user name [unused]
	 * @param $isBlockIP Boolean: if true, user's block is based on IP. Default
	 *						is false.
	 */
	private static function setUserData( &$user, $blockData, $address, $isBlockIP = false ) {
		wfProfileIn( __METHOD__ );

		$user->mBlockedby = $blockData['author_id'];

		// added to make User::isBlockedGlobally()
		// work for this instance of User class
		$user->mBlockedGlobally = true;

		if ( $blockData['reason'] ) {
			// a reason was given
			$reason = $blockData['reason'];
			if ( $blockData['exact'] ) {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-withreason-exact', $reason )->parse();
			} elseif ( $isBlockIP ) {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-withreason-ip', $reason )->parse();
			} else {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-withreason-similar', $reason )->parse();
			}
		} else {
			// no reason in block data, so use preexisting no-param worded versions
			if ( $blockData['exact'] ) {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-reason-exact' )->parse();
			} elseif ( $isBlockIP ) {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-reason-ip' )->parse();
			} else {
				$user->mBlockreason = wfMessage( 'phalanx-user-block-reason-similar' )->parse();
			}
		}

		// set expiry information
		if ( $user->isBlockedGlobally() ) {
			$user->mBlock = new Block(
				$blockData['text'],/* user or IP who is being blocked */
				false, /* user -- whatever that means, but unused in Block's construct func */
				$blockData['author_id'], /* UID of the blocker */
				$user->mBlockreason, /* reason for the block, if any was given */
				$blockData['timestamp'],
				0, /* auto -- this value is the default */
				is_null( $blockData['expire'] ) ? 'infinity' : $blockData['expire'],
				0, /* anonOnly -- this value is the default */
				( ( $isBlockIP ) ? 1 : 0 ), /* prevent account creation */
				1, /* enable autoblock? */
				0, /* hide name? */
				1, /* block email? */
				0 /* allow usage of user talk page? Yeah, I didn't think so either. */
			);
		}
		// Can't do this, it's protected --> will cause a fatal.
		//$user->mBlock->mId = $blockData['id'];

		wfProfileOut( __METHOD__ );
	}

	/**
	 * Hook handler -- prevent user-to-user e-mail by blocked users and from
	 * blocked e-mail addresses.
	 *
	 * @param $user User
	 * @param $canSend Mixed: boolean false if the user is phalanxed, or an
	 *                        array if their e-mail address is phalanxed
	 * @return Boolean: true
	 */
	public static function onUserCanSendEmail( &$user, &$canSend ) {
		$canSend = self::blockCheck( $user );
		if ( $canSend === true ) { // passed the first check, user is not blocked
			// Check if e-mail is blocked
			// this code is lazily copypasted from onAbortNewAccount below and
			// altered a bit (the if address is blocked loop) for this specific
			// hook
			$emailBlocksData = Phalanx::getFromFilter( Phalanx::TYPE_EMAIL );
			$userEmail = $user->getEmail();
			if ( $userEmail !== '' ) {
				foreach ( $emailBlocksData as $emailBlockData ) {
					$result = Phalanx::isBlocked( $userEmail, $emailBlockData, true );
					if ( $result['blocked'] ) {
						// "Borrowed" from SpamBlacklist's SpamBlacklistHooks::userCanSendEmail()
						// page title, error message, ???
						$canSend = array( 'phalanx-blacklisted-email', 'phalanx-blacklisted-email-text', null );
						return false;
					}
				}
			}
		}
		return true;
	}

	/**
	 * Checks if user just being created is not blocked
	 *
	 * @param $user User
	 * @param $name String
	 * @param $validate String
	 * @return Boolean: false if it's blocked, true if it's not
	 */
	public static function onAbortNewAccount( $user, &$abortError ) {
		$text = $user->getName();
		$blocksData = Phalanx::getFromFilter( self::TYPE );
		$state = self::blockCheckInternal( $user, $blocksData, $text, false, true );
		if ( !$state ) {
			$abortError = wfMessage( 'phalanx-user-block-new-account' )->text();
			return false;
		}
		// Check if e-mail is blocked
		$emailBlocksData = Phalanx::getFromFilter( Phalanx::TYPE_EMAIL );
		$userEmail = $user->getEmail();
		if ( $userEmail !== '' ) {
			foreach ( $emailBlocksData as $emailBlockData ) {
				$result = Phalanx::isBlocked( $userEmail, $emailBlockData, true );
				if ( $result['blocked'] ) {
					$abortError = wfMessage( 'phalanx-user-block-new-account' )->text();
					return false;
				}
			}
		}
		return true;
	}

	/**
	 * Checks if user name is not blocked
	 *
	 * @param $userName String
	 * @param $abortError String [OUTPUT]
	 * @return Boolean: false if it's blocked, true if it's not
	 */
	public static function onValidateUserName( $userName, &$abortError ) {
		$user = User::newFromName( $userName );
		$message = '';
		if ( !$user || !self::onAbortNewAccount( $user, $message ) ) {
			$abortError = wfMessage( 'phalanx-user-block-new-account' )->text();
			return false;
		}
		return true;
	}
}