<?php
/**
 * CookieBlock module
 *
 * Blocks user based on browser cookie, interacts with and depends on the
 * AccountCreationTracker extension.
 *
 * @file
 * @author Łukasz Garczewski <tor@wikia-inc.com>
 * @date 2011-12-13
 */

class UserCookieBlock extends UserBlock {
	const TYPE = Phalanx::TYPE_COOKIE;
	const CACHE_KEY = 'user-cookie-status';

	public static function blockCheck( &$user ) {
		global $wgUser, $wgMemc;
		wfProfileIn( __METHOD__ );

		// dependency -- if this doesn't exist, quit early
		if ( !class_exists( 'AccountCreationTracker' ) ) {
			wfProfileOut( __METHOD__ );
			return true;
		}

		// we don't block anons with this filter
		if ( $user->isAnon() ) {
			wfProfileOut( __METHOD__ );
			return true;
		}

		$ret = true;

		// RT#42011: RegexBlock records strange results
		// don't write stats for other user than visiting user
		$isCurrentUser = $user->getName() == $wgUser->getName();

		// check cache first before proceeding
		$cachedState = self::getBlockFromCache( $user, $isCurrentUser );
		if ( !is_null( $cachedState ) ) {
			wfProfileOut( __METHOD__ );
			return $cachedState;
		}

		$hashes = AccountCreationTracker::getHashesByUser( $user );

		$blocksData = Phalanx::getFromFilter( self::TYPE );

		if ( !empty( $blocksData ) && !empty( $hashes ) ) {
			foreach ( $hashes as $hash ) {
				$ret = self::blockCheckInternal( $user, $blocksData, $text, false, $isCurrentUser );
				if ( !$ret ) {
					// only check until we get first blocking match
					break;
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
			$wgMemc->set( $cacheKey, $cachedState );
		}

		wfProfileOut( __METHOD__ );
		return $ret;
	}
}
