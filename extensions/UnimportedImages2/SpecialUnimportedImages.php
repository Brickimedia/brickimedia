<?php

$dir = dirname(__FILE__) . '/';
		
class SpecialUnimportedImages extends QueryPage {
	function __construct() {
		parent::__construct('UnimportedImages');
	}
        
	function getQueryInfo() {
		global $wgRequest;
		
		$dbw = wfGetDB( DB_MASTER );
		$res = $dbw -> select(
			'image',
			array( 'img_name')
		);
		/*$res = $dbr->select(
        'category',                                   // $table
        array( 'cat_title', 'cat_pages' ),            // $vars (columns of the table)
        'cat_pages > 0',                              // $conds
        __METHOD__,                                   // $fname = 'Database::select',
        array( 'ORDER BY' => 'cat_title ASC' )        // $options = array()
);*/
		$s = '(';
		foreach( $res as $row ){
			$name = str_replace( '"', '`', $row -> img_name );
			$s .= '"' . $name . '", ';
		}
		$s = substr($s, 0, -2);
		$s .= ')';
		
		$where = array();
		$where['page.page_namespace'] = 6;
		$where[1] = 'page_title NOT IN ' . $s;
		
		if( $wgRequest -> getVal('onlyext') ){
			$where[2] = "page_title LIKE '%.__%'";
		}
		
		return array (
			'tables' => array( 'page' ),
			'fields' => array( 'namespace' => 'page.page_namespace',
				'title' => 'page.page_title',
				'value' => 'page.page_title' ),
			'conds' => $where
		);
	}
/*
	function preprocessResults( $db, $res ) {
		foreach ( $res as $row ) {
			$res2 = $db -> select(
				'tables' => array( 'image' ),
				'fields' => array ( 'image_name' ),
				'conds' => array ( 'image_name' => $row -> title );
			);
			
			if( $res2 ){
				
			}
		}
	}*/
	
	function getOrderFields() {
		return array( 'title' );
	}
	
	function sortDescending() {
		return false;
	}
	
	function getPageHeader() {
		/*global $wgRequest;
  		
  		$formbody = '';
  		
  		$formhead = '<fieldset><legend>List pages by rating</legend><form action="" method="get">';
  		
  		$formfoot = '<input type="submit" /></form></fieldset>';
        	
        $ratings = RatingData::getAllRatings();
  			
		foreach($ratings as $data){  
			$rating = new RatingData($data);
        		
			$label = $rating -> getAboutLink();
			$pic = $rating -> getImage();
			
			if($wgRequest -> getVal($data) == 'true'){
				$checked = ' checked="checked"';
			} else {
				$checked = '';
			}
			
			$input = '<input type="checkbox" value="true" name="' . $data . '"' . $checked . ' /> ';
  			$formbody .= $input . $pic . $label . '<br />';
		}
  			
  		//return $formhead . $formbody . $formfoot;
  		return '';*/
	}

	function formatResult($skin, $page) {
		global $wgArticlePath;
		
		$url = str_replace('$1', "File:" . $page -> title, $wgArticlePath);
		$data = "<a href='$url'>File:" . $page -> title . "</a>";// . " <a href=\"http://lego.wikia.com/wiki/File:" . $page -> title . "\">on wikia</a>";
		
		return $data;
	}
}

?>