<?php
/**
 * PhalanxHelper
 *
 * CRUD helper functions
 * AJAX handlers
 * Testing auxiliary functions
 */
class PhalanxHelper {

	/**
	 * @param $data Array: associative array?
	 * @return Array
	 */
	public static function convertDataToDB( $data ) {
		$db_data = array();
		foreach ( $data as $key => $field ) {
			$db_data['p_' . $key] = $field;
		}

		return $db_data;
	}

	/**
	 * Update
	 *
	 * @return Boolean: true on success, false on failure
	 */
	public static function update( $data, $updateCache = false ) {
		global $wgMemc;
		$result = false;
		wfProfileIn( __METHOD__ );

		// Get data before update - we need it for cache update
		$oldData = Phalanx::getFromId( $data['id'] );

		$dbw = wfGetDB( DB_MASTER );
		$dbw->update(
			'phalanx',
			self::convertDataToDB( $data ),
			array( 'p_id' => $data['id'] ),
			__METHOD__
		);

		if ( $dbw->affectedRows() ) {
			$result = true;

			$dbw->commit();

			// update cache
			if ( $updateCache ) {
				self::updateCache( $oldData, $data );
			}
			self::logEdit( $oldData, $data );
		}

		wfProfileOut( __METHOD__ );
		return $result;
	}

	/**
	 * Save
	 *
	 * @return Boolean: true on success, false on failure
	 */
	public static function save( $data, $updateCache = true ) {
		global $wgMemc;
		$result = false;
		wfProfileIn( __METHOD__ );

		$dbw = wfGetDB( DB_MASTER );
		$dbw->insert(
			'phalanx',
			self::convertDataToDB( $data ),
			__METHOD__
		);

		if ( $dbw->affectedRows() ) {
			$data['id'] = $result = $dbw->insertId();

			$dbw->commit();

			// update cache
			if ( $updateCache ) {
				self::updateCache( null, $data );
			}
			self::logAdd( $data );
		}

		wfProfileOut( __METHOD__ );
		return $result;
	}

	/**
	 * AJAX creation/update
	 */
	public static function setBlock() {
		global $wgRequest, $wgUser;

		wfProfileOut( __METHOD__ );

		$id = $wgRequest->getVal( 'id', false ); // only set for update
		$filter = $wgRequest->getText( 'wpPhalanxFilter' );
		$regex = $wgRequest->getCheck( 'wpPhalanxFormatRegex' ) ? 1 : 0;
		$exact = $wgRequest->getCheck( 'wpPhalanxFormatExact' ) ? 1 : 0;
		$case = $wgRequest->getCheck( 'wpPhalanxFormatCase' ) ? 1 : 0;
		$expiry = $wgRequest->getText( 'wpPhalanxExpire' );
		$types = $wgRequest->getArray( 'wpPhalanxType' );
		$reason = $wgRequest->getText( 'wpPhalanxReason' );
		$lang = $wgRequest->getVal( 'wpPhalanxLanguages', null );

		$typemask = 0;
		foreach ( $types as $type ) {
			$typemask |= $type;
		}

		// validation
		if ( empty( $filter ) || empty( $typemask ) ) {
			wfProfileOut( __METHOD__ );
			return array(
				'error' => true,
				'text' => wfMessage( 'phalanx-block-failure' )->text()
			);
		}

		if ( $lang == 'all' ) {
			$lang = null;
		}

		if ( $expiry != 'infinite' ) {
			$expire = strtotime( $expiry );
			if ( $expire < 0 || $expire === false ) {
				wfProfileOut( __METHOD__ );
				return false;
			}
			$expire = wfTimestamp( TS_MW, $expire );
		} else {
			$expire = null;
		}

		$data = array(
			'text' => $filter,
			'exact' => $exact,
			'case' => $case,
			'regex' => $regex,
			'timestamp' => wfTimestampNow(),
			'expire' => $expire,
			'author_id' => $wgUser->getId(),
			'reason' => $reason,
			'lang' => $lang,
			'type' => $typemask
		);

		if ( !$id ) {
			$status = PhalanxHelper::save( $data );
			$reason = $status ? wfMessage( 'phalanx-block-success' )->text() : wfMessage( 'phalanx-block-failure' )->text();
		} else {
			$data['id'] = $id;
			$status = PhalanxHelper::update( $data );
			$reason = $status ? wfMessage( 'phalanx-modify-success' )->text() : wfMessage( 'phalanx-block-failure' )->text();
		}

		wfProfileOut( __METHOD__ );
		return array(
			'error' => !$status,
			'text'  => $reason
		);
	}

	/**
	 * Get the block with ID = $id.
	 *
	 * @param $id Integer: block ID number
	 * @return Array
	 */
	public static function getOneBlock( $id ) {
		global $wgLang;

		$data = Phalanx::getFromId( $id );
		if ( empty( $data ) ) {
			return array( 'error' => true );
		}

		$time = $wgLang->timeanddate( wfTimestamp( TS_MW, $data['timestamp'] ), true );

		return array(
			'data' => $data,
			'error' => false,
			'time' => $time,
			'button' => wfMessage( 'phalanx-edit-block' )->text(),
			'text' => wfMessage( 'phalanx-modify-warning', $data['id'] )->parse()
		);
	}

	/**
	 * Remove a single block with the specified ID number.
	 * @return Array
	 */
	public static function removeSingleBlock() {
		global $wgRequest;
		$id = $wgRequest->getInt( 'id' );
		return array(
			'error' => self::removeFilter( $id ),
			'text' => wfMessage( 'phalanx-unblock-message', $id )->text()
		);
	}

	public static function removeFilter( $blockId, $updateCache = true ) {
		global $wgMemc;
		wfProfileIn( __METHOD__ );

		// todo this will need to be changed

		// get data before deletion - we need it for cache update
		$data = Phalanx::getFromId( $blockId );

		$dbw = wfGetDB( DB_MASTER );
		$dbw->delete(
			'phalanx',
			array( 'p_id' => intval( $blockId ) ),
			__METHOD__
		);

		if ( !$dbw->affectedRows() ) {
			wfProfileOut( __METHOD__ );
			return array( 'error' => true );
		}

		$dbw->commit();

		// update cache
		if ( $updateCache ) {
			self::updateCache( $data, null );
		}
		self::logDelete( $data );

		$result = array(
			'error' => false,
			'text' => wfMessage( 'phalanx-unblock-message', $data['id'] )->text(),
		);

		wfProfileOut( __METHOD__ );
		return $result;
	}

	/**
	 * Updates Phalanx rules cache after one changing one rule (add, modify or delete)
	 *
	 * @param $oldData mixed Old rule data or null if adding a rule
	 * @param $newData mixed New rule data or null if removing a rule
	 */
	public static function updateCache( $oldData, $newData ) {
		global $wgMemc;

		$allLanguages = array_keys( self::getSupportedLanguages() );
		if ( array_search( 'all', $allLanguages ) ) {
			array_unshift( $allLanguages, 'all' );
		}

		$list = array();

		// Find where the rule was removed from?
		if ( $oldData ) {
			$lang = $oldData['lang'] ? $oldData['lang'] : null;
			$langs = $lang ? array( $lang ) : $allLanguages;
			$type = $oldData['type'];
			for ( $i = 1; $type>0; $i<<=1, $type>>=1 ) {
				if ( $type & 1 ) {
					foreach ( $langs as $l ) {
						$list[$i][$l]['remove'] = true;
					}
				}
			}
		}

		// Find where the rule will be added to?
		if ( $newData ) {
			$lang = $newData['lang'] ? $newData['lang'] : null;
			$langs = $lang ? array( $lang ) : $allLanguages;
			$type = $newData['type'];
			for ( $i = 1; $type>0; $i<<=1, $type>>=1 ) {
				if ( $type & 1 ) {
					foreach ( $langs as $l ) {
						$list[$i][$l]['save'] = true;
					}
				}
			}
		}

		$id = intval( $oldData ? $oldData['id'] : $newData['id'] );

		// Iterate through each affected cache case and update
		foreach ( $list as $moduleId => $list2 ) {
			foreach ( $list2 as $lang => $props ) {
				if ( empty( $lang ) || $lang == 'all' ) {
					$lang = null;
				}

				$remove = !empty( $props['remove'] );
				$save = !empty( $props['save'] );

				$sLang = $lang ? $lang : 'all';
				$key = 'phalanx:' . $moduleId . ':' . $sLang;
				Phalanx::clearCache( $moduleId, $sLang ); // clear local cache
				$blocksData = $wgMemc->get( $key );

				if ( empty( $blocksData ) ) {
					Phalanx::getFromFilter( $moduleId, $lang, true /* use master to avoid lag - change was a moment ago */);
				} else {
					if ( $remove && !$save ) {
						unset( $blocksData['blocks'][$id] ); // remove block
					} elseif ( $save ) {
						$blocksData['blocks'][$id] = $newData; // add or overwrite block
					}
					$wgMemc->set( $key, $blocksData );
				}
				// This is related to Wikia's includes/wikia/MemcacheSync.class.php
				//unset( $wgMemc->_dupe_cache[$key] );
			}
		}

		Phalanx::setLastUpdate();
	}

	/**
	 * Performs a test of all available filters and returns matching filters
	 *
	 * @param $text String: string to match
	 * @return String with HTML to display via AJAX
	 */
	public static function testBlock( $text ) {
		$data = array();
		$output = '';

		$modules = Phalanx::$typeNames;

		foreach ( $modules as $module => $name ) {
			$filters = Phalanx::getFromFilter( $module );
			$data[$module] = array();

			if ( empty( $filters ) ) {
				continue;
			}

			foreach ( $filters as $filter ) {
				$result = Phalanx::isBlocked( $text, $filter );
				if ( $result['blocked'] == true ) {
					$data[$module][] = $filter;
				}
			}

			if ( !empty( $data[$module] ) ) {
				$output .= Xml::element( 'h2', null, $name );

				$output .= Xml::openElement( 'ul' );

				$unblockLink = wfMessage( 'phalanx-link-unblock' )->plain();
				$modifyLink = wfMessage( 'phalanx-link-modify' )->plain();
				$statsLink = wfMessage( 'phalanx-link-stats' )->plain();

				foreach ( $data[$module] as $match ) {
					// uses escapeFullURL() for XHTML compliance (encoded ampersands)
					$phalanxUrl = SpecialPage::getTitleFor( 'Phalanx' )->escapeFullURL( array( 'id' => $match['id'] ) );
					$statsUrl = SpecialPage::getTitleFor( 'PhalanxStats', $match['id'] )->getFullURL();

					$line = htmlspecialchars( $match['text'] ) . ' &bull; ' .
						Xml::element( 'a', array( 'href' => $phalanxUrl, 'class' => 'unblock' ), $unblockLink ) . ' &bull; ' .
						Xml::element( 'a', array( 'href' => $phalanxUrl, 'class' => 'modify' ), $modifyLink ) . ' &bull; ' .
						Xml::element( 'a', array( 'href' => $statsUrl ), $statsLink );
					$output .= Xml::tags( 'li', null, $line );
				}

				$output .= Xml::closeElement( 'ul' );
			}
		}

		if ( empty( $output ) ) {
			$output = wfMessage( 'phalanx-no-matches' )->text();
		}

		return $output;
	}

	public static function logAdd( $data ) {
		self::logUniversal( 'add', $data );
	}

	public static function logEdit( $old, $data ) {
		self::logUniversal( 'edit', $data );
	}

	public static function logDelete( $data ) {
		self::logUniversal( 'delete', $data );
	}

	public static function logUniversal( $action, $data ) {
		$title = SpecialPage::getTitleFor( 'PhalanxStats', $data['id'] );
		$types = implode( ',', Phalanx::getTypeNames( $data['type'] ) );

		if ( $data['type'] & Phalanx::TYPE_EMAIL ) {
			$logType = 'phalanxemail';
		} else {
			$logType = 'phalanx';
		}

		$log = new LogPage( $logType );
		$log->addEntry(
			$action,
			$title,
			wfMessage(
				'phalanx-rule-log-details',
				$data['text'],
				$types,
				$data['reason']
			)->inContentLanguage()->parse()
		);
		// Workaround lack of automatic commit in AJAX requests
		$dbw = wfGetDB( DB_MASTER );
		$dbw->commit();
	}

	/**
	 * Get languages supported by Phalanx.
	 * This replaces the old $wgPhalanxSupportedLanguages global, which was
	 * awfully hacky.
	 *
	 * @return Array: array( 'langcode' => 'langcode - Local language name' )
	 */
	public static function getSupportedLanguages() {
		$allArray = array( 'all' => wfMessage( 'phalanx-all-languages' )->text() );

		// Support all languages that MediaWiki supports in Phalanx UI
		// Code lifted from Preferences::profilePreferences -- because
		// Language::getLanguageNames() does not show the language codes and
		// not everyone is i18n-savvy...
		$languages = Language::getLanguageNames();
		ksort( $languages );

		$options = array();
		foreach ( $languages as $code => $name ) {
			$display = wfBCP47( $code ) . ' - ' . $name;
			$options[$code] = $display; // reversed this
		}

		$supportedLanguages = array_merge( $allArray, $options );
		return $supportedLanguages;
	}
}
