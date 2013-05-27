<?php

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['RatingData'] = $dir . 'RatingDataClass.php';

function wfRatingRender($input, array $args, Parser $parser, PPFrame $frame) {
	global $wgUser, $wgArticlePath;

    $message = '';
	if (isset( $args['page'] )){
    	$page = $args['page'];
		$message = '<span class="mw-rating-rating-for">Rating for "' . $pagearg . '"</span>: ';
	} else {
		$page = $parser -> getTitle();
	}
    
    if( isset($args['initial-rating']) ){
    	$initrating = $args['initial-rating'];
    }
    
	$title = Title::newFromText(strval($page));
			
	if(!$title -> exists()){
		return 'The page "' . $page . '" may not exist';
	}
	
    $dbr = wfGetDB(DB_SLAVE);
    
    $page = str_replace(' ', '_', $page);
    $ns = $title -> getNamespace();
    $pageq = $dbr -> addQuotes($page);
        
    $res = $dbr -> select(
    	'ratings',
    	array('ratings_rating', 'ratings_title'),
    	'ratings_title = ' . $pageq . ' AND ratings_namespace = ' . $ns
	);
	
	$row = $res -> fetchRow();
	
	if(!$row){ //create rating
		$ratings = RatingData::getAllRatings();
		
		if(isset($args['initial-rating']) && in_array($initrating, $ratings)){
			$userating = $initrating;
			//echo 'sucess';
		} else {
			$userating = 'un';
			//echo 'failiure';
		}
		
		$dbw = wfGetDB(DB_MASTER);
        
        $dbw -> insert(
        	'ratings',
        	array('ratings_rating' => $userating,
        		'ratings_title' => $page,
        		'ratings_namespace' => $ns
        	)
		);
		$field = 'un';
	} else {
		$field = $row['ratings_rating'];
	}
	
	$rating = new RatingData($field);
	
  	$label = $rating -> getAboutLink();
	
	$url = str_replace('$1', 'Special:ChangeRating/' . $page, $wgArticlePath);
	
	$link = '';
	if($wgUser -> isAllowed('changeRating')){
		$link = '<a class="mw-rating-change-link" href="' . $url . '">change</a>';
	}
	
	$pic = $rating -> getImage();
	
	$box = "<div class=\"mw-rating-tag\">" . $message . $pic . $label . ' ' . $link . "</div>";
	
	return $box;
        	
}
?>