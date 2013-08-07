<?php
/**
 * @file
 * @ingroup Extensions
 * @author Maciej Brencz <macbre(at)-spam-wikia.com>
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

class SpecialWhosGloballyOnline extends SpecialPage {
	function __construct() {
		parent::__construct( 'WhosGloballyOnline' );
	}

	function execute( $par ) {
		$out = $this->getOutput();
		$this->setHeaders();
		
		$users = array();
		$dbs = array( 'meta',
			/*'dev',
			'en',
			'customs',
			'stories',
			'lmbw',*/
		);
		
		foreach( $dbs as $db ){
			$dbr = wfGetDB( DB_SLAVE, $db );
			
			$res = $dbr -> select(
				'online',
				array( 'username', 'timestamp' ),
				'userid != 0'
			);
			
			foreach( $res as $row ){
				
				$users[$row->username][$db] = $row->timestamp;
			}
		}
		
		$text = '';
		
		global $bmProjectsData, $bmProjectsDataHidden;
		
		$projectsData = array_merge($bmProjectsData, $bmProjectsDataHidden);
		
		foreach( $users as $username => $data ){
			
			$wikis = array();
			var_dump( $data );
			
			foreach( $data as $wiki => $time ){

				$wikis[] = $projectsData[ substr( $wiki, 12) ]['name'];
			}
			$wikis = implode( $wikis, ', ' );
			
			$write = "* [[User_talk:$username|$username]] ($wikis)\n";
			$text .= $write;
			
		}

		$out -> addWikiText( $text );
	}
}
