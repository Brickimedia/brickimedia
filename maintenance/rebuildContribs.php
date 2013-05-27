<?php 

require_once( dirname( __FILE__ ) . "/Maintenance.php" );

class RebuildContribs extends Maintenance {
	
	public function execute() {
		
		$dbr = wfGetDB( DB_SLAVE );
		$dbw = wfGetDB( DB_MASTER );
		
		$res = $dbr -> select(
			'user',
			'user_name',
			'',
			__METHOD__,
			'DISTINCT'
		);
		
		foreach( $res as $row ){
		
			$user = User::newFromName( $row -> user_name );
			$username = $row -> user_name;
			$id = $user -> getId();
			//echo "strval";
			
			//echo strval($username);

			//echo "dc";
			
			echo "Doing contribs for " . strval($username) . "\n";

			//echo "update";
		
			$update = $dbw -> update(
				'revision',
				array(
					'rev_user' => $id
				),
				array(
					'rev_user_text' => $username
				)
			);
		}
	}
}

$maintClass = 'RebuildContribs';
if( defined('RUN_MAINTENANCE_IF_MAIN') ) {
	require_once( RUN_MAINTENANCE_IF_MAIN );
} else {
	require_once( DO_MAINTENANCE ); # Make this work on versions before 1.17
}