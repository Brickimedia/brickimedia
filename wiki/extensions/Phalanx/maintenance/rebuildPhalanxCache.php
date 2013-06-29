<?php
/**
 * A maintenance script to rebuild Phalanx's cache. Rebuilding the cache
 * during regular HTTP requests has become too resource-consuming.
 *
 * @file
 * @ingroup Maintenance
 * @author Michał Roszka (Mix) <michal@wikia-inc.com>
 */

include( 'Phalanx.class.php' );
include( 'PhalanxHelper.class.php' );

/**
 * Set the correct include path for PHP so that we can run this script from
 * $IP/extensions/Phalanx/maintenance and we don't need to move this file to
 * $IP/maintenance/.
 */
ini_set( 'include_path', __DIR__ . '/../../../maintenance' );

require_once( 'Maintenance.php' );

class RebuildPhalanxCache extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->mDescription = 'Rebuild Phalanx\'s cache';
	}

	public function execute() {
		global $wgMemc;

		// Phalanx caches its blocks by the type and by the language.
		// Let's get supported types and languages.
		$types = array_keys( Phalanx::$typeNames );
		$languages = array_keys( PhalanxHelper::getSupportedLanguages() );

		// Walk through all types...
		foreach ( $types as $type ) {
			// ... and languages.
			foreach ( $languages as $language ) {
				// Purge the cache.
				$wgMemc->delete( "phalanx:{$type}:{$language}" );
				// Fill the cache with the current data from DB_MASTER.
				Phalanx::getFromFilter( $type, $language, true );
			}
			// Touch.
			Phalanx::setLastUpdate();
		}
	}
}

$maintClass = 'RebuildPhalanxCache';
require_once( DO_MAINTENANCE );
