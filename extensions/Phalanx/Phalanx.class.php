<?php

class Phalanx {

	const TYPE_CONTENT = 1;
	const TYPE_SUMMARY = 2;
	const TYPE_TITLE = 4;
	const TYPE_USER = 8;
	const TYPE_ANSWERS_QUESTION_TITLE = 16;
	const TYPE_ANSWERS_RECENT_QUESTIONS = 32;
	const TYPE_WIKI_CREATION = 64;
	const TYPE_COOKIE = 128;
	const TYPE_EMAIL = 256;
	const LAST_UPDATE_KEY = 'phalanx:last-update';

	public static $typeNames = array(
		1 => 'content',
		2 => 'summary',
		4 => 'title',
		8 => 'user',
		16 => 'answers-question-title',
		32 => 'answers-recent-questions',
		64 => 'wiki-creation',
		128 => 'cookie',
		256 => 'email'
	);

	public static $moduleData = array();

	/**
	 * Get the values for the expiry select dropdown.
	 * @return Array
	 */
	public static function getExpireValues() {
		$expiry_values = explode( ',', wfMessage( 'phalanx-expire-durations' )->plain() );
		$expiry_text = array(
			'1 hour',
			'2 hours',
			'4 hours',
			'6 hours',
			'1 day',
			'3 days',
			'1 week',
			'2 weeks',
			'1 month',
			'3 months',
			'6 months',
			'1 year',
			'infinite'
		);

		return array_combine( $expiry_text, $expiry_values );
	}

	/**
	 * Get last filter change date
	 */
	public static function getLastUpdate() {
		global $wgMemc, $wgPhalanxDatabase, $wgPhalanxDatabasePrefix;
		return $wgMemc->get( wfForeignMemcKey( $wgPhalanxDatabase, $wgPhalanxDatabasePrefix, self::LAST_UPDATE_KEY ) );
	}

	/**
	 * Set the last changed date for a filter
	 */
	public static function setLastUpdate() {
		global $wgMemc, $wgPhalanxDatabase, $wgPhalanxDatabasePrefix;
		return $wgMemc->set( wfForeignMemcKey( $wgPhalanxDatabase, $wgPhalanxDatabasePrefix, self::LAST_UPDATE_KEY ), wfTimestampNow() );
	}

	/**
	 * @param $typemask bit mask of types
	 * @return Array of strings with human-readable names
	 */
	public static function getTypeNames( $typemask ) {
		$types = array();

		// iterate for each module for which block is saved
		for ( $bit = $typemask&1, $type=1; $typemask; $typemask>>=1, $bit = $typemask&1, $type<<=1 ) {
			if ( !$bit ) {
				// skip unused modules
				continue;
			}
			$types[$type] = self::$typeNames[$type];
		}

		return $types;
	}

	/**
	 * @param $moduleId
	 * @param $lang String: language code, like 'en' or 'all' for all languages
	 * @param $master Boolean: use master DB connection? Defaults to false.
	 */
	public static function getFromFilter( $moduleId, $lang = null, $master = false ) {
		global $wgMemc;
		wfProfileIn( __METHOD__ );

		$timestampNow = wfTimestampNow();
		$key = 'phalanx:' . $moduleId . ':' . ( $lang ? $lang : 'all' );
		$sLang = $lang ? $lang : 'all';

		if ( isset( self::$moduleData[$moduleId][$sLang] ) ) {
			$blocksData = self::$moduleData[$moduleId][$sLang];
		} else {
			$blocksData = $wgMemc->get( $key );
		}

		// cache miss (or we have expired blocks in cache), get from DB
		if (
			empty( $blocksData ) ||
			(
				!is_null( $blocksData['closestExpire'] ) &&
				$blocksData['closestExpire'] < $timestampNow &&
				$blocksData['closestExpire']
			)
		)
		{
			$blocks = $cond = array();
			$closestTimestamp = 0;
			$dbr = wfGetDB( $master ? DB_MASTER : DB_SLAVE );

			if ( !empty( $moduleId ) && is_numeric( $moduleId ) ) {
				$cond[] = "p_type & $moduleId = $moduleId";
			}
			if ( !empty( $lang ) && Language::isValidCode( $lang ) ) {
				$cond[] = "(p_lang = '$lang' OR p_lang IS NULL)";
			} else {
				$cond[] = 'p_lang IS NULL';
			}

			$res = $dbr->select(
				'phalanx',
				'*',
				$cond,
				__METHOD__
			);

			while ( $row = $res->fetchObject() ) {
				if ( $timestampNow > $row->p_expire && !is_null( $row->p_expire ) ) {
					continue; // skip expired
				}
				// use p_id as array key for easier deletion from cache
				$blocks[$row->p_id] = array(
					'id' => $row->p_id,
					'author_id' => $row->p_author_id,
					'text' => $row->p_text,
					'type' => $row->p_type,
					'timestamp' => $row->p_timestamp,
					'expire' => $row->p_expire,
					'exact' => $row->p_exact,
					'regex' => $row->p_regex,
					'case' => $row->p_case,
					'reason' => $row->p_reason,
					'lang' => $row->p_lang
				);
				if ( !is_null( $row->p_expire ) && $closestTimestamp > $row->p_expire || !$closestTimestamp ) {
					$closestTimestamp = $row->p_expire;
				}
			}

			$blocksData['blocks'] = $blocks;
			$blocksData['closestExpire'] = $closestTimestamp;
			$wgMemc->set( $key, $blocksData );
		}
		self::$moduleData[$moduleId] = $blocksData;

		wfProfileOut( __METHOD__ );
		return $blocksData['blocks'];
	}

	/**
	 * @param $blockerId Integer
	 * @return Array or false
	 */
	public static function getFromId( $blockerId ) {
		wfProfileIn( __METHOD__ );

		$dbr = wfGetDB( DB_SLAVE );

		// rarely used (only for edit and remove?), no memcached here
		$row = $dbr->selectRow(
			'phalanx',
			'*',
			array( 'p_id' => intval( $blockerId ) ),
			__METHOD__
		);

		if ( is_object( $row ) ) {
			$block = array(
				'id' => $row->p_id,
				'author_id' => $row->p_author_id,
				'text' => $row->p_text,
				'type' => $row->p_type,
				'timestamp' => $row->p_timestamp,
				'expire' => $row->p_expire,
				'exact' => $row->p_exact,
				'regex' => $row->p_regex,
				'case' => $row->p_case,
				'reason' => $row->p_reason,
				'lang' => $row->p_lang,
			);

			wfProfileOut( __METHOD__ );
			return $block;
		} else {
			wfProfileOut( __METHOD__ );
			return false;
		}
	}

	/**
	 * Counts statistics for blocks
	 *
	 * @param $blockerId Integer: unique block identifier
	 * @param $type Integer: unique block type identifier
	 * @todo use a message queue for this
	 */
	public static function addStats( $blockerId, $type ) {
		global $wgUser;

		wfProfileIn( __METHOD__ );

		if ( wfReadOnly() ) {
			wfProfileOut( __METHOD__ );
			return;
		}

		// hack to not count testFilters hits,
		// otherwise phalanxexempt users will *not* get here
		if ( $wgUser->isAllowed( 'phalanxexempt' ) ) {
			return;
		}

		$fields = array(
			'ps_blocker_id' => $blockerId,
			'ps_blocker_type' => $type,
			'ps_timestamp' => wfTimestampNow(),
			'ps_blocked_user' => $wgUser->getName(),
			'ps_wiki_id' => Phalanx::getWikiId()
		);

		$dbw = wfGetDB( DB_MASTER );
		$dbw->insert( 'phalanx_stats', $fields, __METHOD__ );

		wfProfileOut( __METHOD__ );
	}

	/**
	 * Test if provided text is blocked.
	 *
	 * @param $text String: string to be tested against filter
	 * @param $blockData Array: block data (text, params, id)
	 * @param $writeStats Boolean: should we write statistics? Defaults to true
	 *
	 * @return Array with 'blocked' key containing boolean status
	 */
	static function isBlocked( $text, $blockData, $writeStats = true ) {
		wfProfileIn( __METHOD__ );
		$result = array( 'blocked' => false, 'msg' => '' );
		$blockText = $blockData['text'];

		if ( $blockData['regex'] ) {
			// escape slashes uses as regex delimiter
			$blockText = str_replace( '/', '\/', preg_replace( '|\\\*/|', '/', $blockText ) );
			if ( $blockData['exact'] ) {
				// add beginning and end anchor only once (user might added it already)
				if ( strpos( $blockText, '^' ) !== 0 ) {
					$blockText = '^' . $blockText;
				}
				if ( substr( $blockText, -1 ) != '$' ) {
					$blockText .= '$';
				}
			}
			$blockText = "/$blockText/";
			if ( !$blockData['case'] ) {
				$blockText .= 'i';
			}
			// QuickFix™ for bad regexes
			// @todo FIXME: validate regexes on save/edit
			wfSuppressWarnings();
			$matched = preg_match( $blockText, $text, $matches );
			if ( $matched === false ) {
				wfDebugLog( 'Phalanx', __METHOD__ . ": bad regex found: $blockText" );
			}
			wfRestoreWarnings();
			if ( $matched ) {
				if ( $writeStats ) {
					self::addStats( $blockData['id'], $blockData['type'] );
				}
				$result['blocked'] = true;
				$result['msg'] = $matches[0];
			}
		} else { // plain text
			if ( !$blockData['case'] ) {
				$text = strtolower( $text );
				$blockText = strtolower( $blockText );
			}
			if ( $blockData['exact'] ) {
				if ( $text == $blockText ) {
					if ( $writeStats ) {
						self::addStats( $blockData['id'], $blockData['type'] );
					}
					$result['blocked'] = true;
					$result['msg'] = $blockData['text']; // original case
				}
			} else {
				if ( !empty( $blockText ) && strpos( $text, $blockText ) !== false ) {
					if ( $writeStats ) {
						self::addStats( $blockData['id'], $blockData['type'] );
					}
					$result['blocked'] = true;
					$result['msg'] = $blockData['text']; // original case
				}
			}
		}
		wfProfileOut( __METHOD__ );
		return $result;
	}

	/**
	 * Gets the current wiki's id from the wiki_settings table
	 *
	 * @return Integer: wiki ID number (or 0 if something went wrong)
	 */
	public static function getWikiId() {
		global $wgDBname;
		$dbr = wfGetDB( DB_SLAVE );
		return $dbr->selectField(
			'wiki_settings',
			'ws_wiki',
			array(
				'ws_setting' => 'wgDBname',
				'ws_value' => $wgDBname
			),
			__METHOD__
		);
	}

	public static function clearCache( $moduleId, $lang ) {
		$sLang = $lang ? $lang : 'all';
		unset( self::$moduleData[$moduleId][$sLang] );
	}

}
