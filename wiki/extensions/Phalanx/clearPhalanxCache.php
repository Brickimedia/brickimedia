<?php
/**
 * Maintenance script to clear Phalanx-related entries from memcached.
 *
 * @file
 * @ingroup Maintenance
 */

include( 'Phalanx.class.php' );

/**
 * Set the correct include path for PHP so that we can run this script from
 * $IP/extensions/Phalanx/ and we don't need to move this file to $IP/maintenance/.
 */
ini_set( 'include_path', __DIR__ . '/../../maintenance' );

require_once( 'Maintenance.php' );

class ClearPhalanxCache extends Maintenance {
	public function __construct() {
		parent::__construct();
		$this->mDescription = 'Clear Phalanx-related cache entries from memcached';
	}

	public function execute() {
		global $wgMemc;

		$supportedLanguages = PhalanxHelper::getSupportedLanguages();
		foreach ( Phalanx::$typeNames as $module => $modName ) {
			foreach ( $supportedLanguages as $lang => $langName ) {
				$key = 'phalanx:' . $module . ':' . $lang;

				$this->output( "Deleting $key..." );

				if ( $wgMemc->delete( $key ) ) {
					$this->output( ' SUCCESS' );
				} else {
					$this->output( ' FAILED' );
				}

				$this->output( "\n" );
			}
		}
		$this->output( "\nDONE\n" );
	}
}

$maintClass = 'ClearPhalanxCache';
require_once( DO_MAINTENANCE );
