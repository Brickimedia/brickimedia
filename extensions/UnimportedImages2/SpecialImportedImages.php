<?php

$dir = dirname(__FILE__) . '/';
		
class SpecialImportedImages extends QueryPage {
	
	function __construct() {
		parent::__construct('ImportedImages');
	}
	
	function getQueryInfo() {
		
		$dbw = wfGetDB( DB_MASTER );
		$res = $dbw -> select(
			'image',
			array( 'img_name')
		);
		
		$s = '(';
		foreach( $res as $row ){
			$s .= '"' . $row -> img_name . '", ';
		}
		$s = substr($s, 0, -2);
		$s .= ')';
		
		return array (
			'tables' => array( 'page' ),
			'fields' => array( 'namespace' => 'page.page_namespace',
				'title' => 'page.page_title',
				'value' => 'page.page_title' ),
			'conds' => array( 'page.page_namespace' => 6,
				 1 => 'page_title IN ' . $s )
		);
	}
	
	function sortDescending() {
		return false;
	}
	
	function getOrderFields() {
		return array( 'title' );
	}

	function formatResult($skin, $page) {
		global $wgArticlePath;
		
		$url = str_replace('$1', "File:" . $page -> title, $wgArticlePath);
		$data = "<a href='$url'>File:" . $page -> title . "</a>";
		
		return $data;
	}
}

?>