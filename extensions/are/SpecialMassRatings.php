<?php

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['RatingData'] = $dir . 'RatingDataClass.php';
		
class SpecialMassRatings extends QueryPage {
	function __construct() {
		parent::__construct('MassRatings');
	}
        
	function getQueryInfo() {
		global $wgRequest;
		 		
  		$where = '';
  		$selectedRatings = array();
        	
        $ratings = RatingData::getAllRatings();
  			
		foreach($ratings as $data){
			
			if($wgRequest -> getVal($data) == 'true'){
				$selectedRatings[] = $data;
			}
  		}
  		
  		if( $selectedRatings ){
  			$where = array ( 'ratings_rating' => $selectedRatings );
  		} else {
  			$where = array();
  		}
  		
		return array (
			'tables' => array ( 'ratings' ),
			'fields' => array ( 'namespace' => 'ratings_namespace',
					'title' => 'ratings_title',
					'value' => 'ratings_rating' ),
			'conds' => $where
		);
	}
	
	function getOrderFields() {
		return array( 'ratings_title' );
	}
	
	function sortDescending() {
		return false;
	}
	
	function getPageHeader() {
		global $wgRequest;
  		
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
  			
  		return $formhead . $formbody . $formfoot;
	}

	function formatResult($skin, $page) {
		global $wgOut, $wgArticlePath, $wgRequest;
  		
  		$formbody = '';
  		
  		$formhead = '<fieldset><legend>List pages by rating</legend><form action="" method="get">';
  		
  		$formfoot = '<input type="submit" /></form></fieldset>';
  		
  		$wgOut -> addHTML($wgRequest -> getVal('rating'));
        	
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
  					
  			$formbody = $formbody . $input . $pic . $label . '<br />';
  		}
  		
		if(empty($page -> value)){
			$string = '* No rating - [[' . $page -> title . ']]';
			
			$wgOut -> addWikiText($string);
		} else {
			$rating = new RatingData($page -> value);
				
			$pic = $rating -> getImageWT();
				
			$label = $rating -> getAboutLinkWT();
			
			$string = '* ' . $pic . $label . ' - [[' . $page -> title . ']]';
			
			$wgOut -> addWikiText($string);
		}
	}
 
	function execute2($page) {
		global $wgOut, $wgArticlePath, $wgRequest;
  		
  		$formbody = '';
  		
  		$formhead = '<fieldset><legend>List pages by rating</legend><form action="" method="get">';
  		
  		$formfoot = '<input type="submit" /></form></fieldset>';
  		
  		$wgOut -> addHTML($wgRequest -> getVal('rating'));
  		
  		$where = '';
        	
        	$dbr = wfGetDB(DB_SLAVE);
        	
        	$ratings = RatingData::getAllRatings();
  			
		foreach($ratings as $data){  
			$rating = new RatingData($data);
        		
			$label = $rating -> getAboutLink();
			$pic = $rating -> getImage();
        		
			$quotes = $dbr -> addQuotes($data);
			
			if($wgRequest -> getVal($data) == 'true'){
				$checked = ' checked="checked"';
				$where = $where . 'page_rating = ' . $quotes . ' OR ';
			} else {
				$checked = '';
			}
			
			$input = '<input type="checkbox" value="true" name="' . $data . '"' . $checked . ' /> ';
  					
  			$formbody = $formbody . $input . $pic . $label . '<br />';
  		}
  		
  		$wgOut -> addHTML($formhead . $formbody . $formfoot);
        	
        	$where = substr($where, 0, -4);
  		
        	$res = $dbr -> select(
        		'ratings',
        		array('ratings_rating', 'ratings_title'),
        		$where
		);
		
		foreach($res as $page){
			if(empty($page -> ratings_rating)){
				$string = '* No rating - [[' . $page -> ratings_title . ']]';
			
				$wgOut -> addWikiText($string);
			} else {
				$rating = new RatingData($page -> ratings_rating);
				
				$pic = $rating -> getImageWT();
				
				$label = $rating -> getAboutLinkWT();
			
				$string = '* ' . $pic . $label . ' - [[' . $page -> ratings_title . ']]';
			
				$wgOut -> addWikiText($string);
			}
		}
	}
}

?>