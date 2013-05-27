<?php

$dir = dirname(__FILE__) . '/';

$wgAutoloadClasses['RatingData'] = $dir . 'RatingDataClass.php';

class SpecialChangeRating extends SpecialPage {
	function __construct() {
		parent::__construct('ChangeRating', 'changeRating');
	}
 
	function execute($page) {
		global $wgRequest, $wgOut, $wgUser, $wgArticlePath;
 
		$this -> setHeaders();
       
		$bool = $wgUser -> isAllowed('changeRating');

		if ($bool) {
			$title = Title::newFromText($page);
			
			if(is_null($title)){
				$wgOut -> addWikiText("No pagename was given. The page should be specified in the URL.");
				
			} elseif(!$title -> exists()){
				$wgOut -> addWikiText("Sorry, the page '" . $page . "' does not exist.");
				
			} else {
            	$wgOut -> addWikiText('< Back to [[' . $page . ']].');
  			
	        	$dbr = wfGetDB(DB_SLAVE);
        
       			$pageq = $dbr -> addQuotes($page);
       			$ns = $title -> getNamespace();
			
				$ratingto = $wgRequest -> getVal('ratingTo');
				
				if(!is_null($ratingto)){
					$ratingto = substr($ratingto, 0, 2);
				
					$dbw = wfGetDB(DB_MASTER);
        
        			$res = $dbw -> update(
        				'ratings',
        				array('ratings_rating' => $ratingto,
        					'ratings_namespace' => $ns ),
        				array('ratings_title = ' . $pageq)
					);
					
					$reason = $wgRequest -> getVal('reason');					
					$wgOut -> addWikiText("Rating changed successfully.");
					
					$url = str_replace('$1', $page, $wgArticlePath);
					
					$rating = new RatingData($ratingto);
					$ratingname = $rating -> getAttr('name');
					
					$logEntry = new ManualLogEntry('ratings', 'change');
					$logEntry -> setPerformer($wgUser);
					$logEntry -> setTarget(Title::newFromText(strval($page)));
					$logEntry -> setParameters(array(
						'4::rating' => $ratingname
					));
					if(!is_null($reason)){
						$logEntry -> setComment($reason);
					}
					
					$logid = $logEntry -> insert();
					$logEntry -> publish($logid);
				}				
				
				$head = "<p>What would you like to change " . $page . "'s rating to?</p><form name='change-rating' action='' method='GET'>";
				$foot = 'Reason: <input type="text" name="reason" size="50" /><br /><input type="submit" value="Submit" /></form>​';
				$body = '';
        
        		$res = $dbr -> select(
        			'ratings',
        			array('ratings_rating', 'ratings_title'),
        			'ratings_title = ' . $pageq
				);
				$row = $res -> fetchRow();
				$field = $row['ratings_rating'];
  				
  				$ratings = RatingData::getAllRatings();
  			
  				foreach($ratings as $data){ 
  					$rating = new RatingData($data);
  							
  					if($data == $field){
  						$checked = ' checked="checked"';
  					} else {
  						$checked = '';
  					}
	
  					$label = $rating -> getAboutLink();
  						
					$pic = $rating -> getImage();
					
					$radio = '<input type="radio" name="ratingTo" value="' . $data . '"' . $checked . '" /> ';
  					
  					$body = $body . $radio . $pic . $label . '<br />';
  				}
			
				$html = $head . $body . $foot;
                		$wgOut -> addHTML($html);
                	}
		} else {
                	$wgOut -> addWikiText('Sorry, this page is restricted to "rating-changer" users.');
		}
        }
}

?>