<?php 

require_once( dirname( __FILE__ ) . "/Maintenance.php" );
 
class FixRedirects extends Maintenance {
	
	public function __construct() {
    	parent::__construct();

    	$this -> addOption( 'limit', 'Limit', false, true);
    	$this -> addOption( 'offset', 'Offset', false, true);
        }
	
	public function execute() {

		$dbr = wfGetDB( DB_SLAVE );
        //$dbw = wfGetDB( DB_MASTER );
        
		$limit = $this -> getOption( 'limit', 20 );
		$offset = $this -> getOption( 'offset', 0 );
        	
        $revs = $dbr -> select(
        	'revision',
        	array( 'rev_id', 'rev_text_id'),
        	array(),
			'',
			__METHOD__,
			array(
				'LIMIT' => $limit,
				'OFFSET' => $offset
			)
        );
        
        foreach( $revs as $row ){
        	$rev_id = $row -> rev_id;
        	$rev_text_id = $row -> rev_text_id;
        	
        	$texts = $dbr -> select(
        		'text',
        		'old_text',
        		"old_id = $rev_id"
        	);
        	
        	$text = $texts -> fetchObject() -> old_text;
        	
        	echo $text;
        }
	}
}
 
$maintClass = 'FixRedirects';
if( defined('RUN_MAINTENANCE_IF_MAIN') ) {
  require_once( RUN_MAINTENANCE_IF_MAIN );
} else {
  require_once( DO_MAINTENANCE ); # Make this work on versions before 1.17
}