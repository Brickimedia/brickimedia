<?php 
class AreHooks {
	public static function onTitleMoveComplete(Title $title, Title $newtitle, User $user, $oldid, $newid) {
				$dbr = wfGetDB(DB_SLAVE);
		$old = $dbr -> addQuotes($title);
		$new = $dbr -> addQuotes($newtitle);
		$res = $dbr -> select(
			'ratings',
			'ratings_rating',
			'ratings_title = ' . $old
		);
		$no = $res -> numRows();
		$row = $res -> fetchRow();
		$rating = $row['ratings_rating'];
		if ($no != 0) {
			$dbw = wfGetDB(DB_MASTER);
			$res = $dbw -> update(
				'ratings',
				array('ratings_rating' => $rating),
				array('ratings_title = ' . $new)
			);
		}
		return true;
	}

	function addRatingTab( $content_actions ) { 
		unset( $content_actions['talk'] ); // only this to remove an action

		$maintitle = Title::newFromText('Special:ChangeRating');
		
        $main_action['main'] = array(
        	'class' => false, // or 'selected', // if the tab should be highlighted
        	'text' => 'rating', // what the tab says
        	'href' => $maintitle->getFullURL() // where it links to
        );
        $content_actions = array_merge( $main_action, $content_actions ); // add a new action
       
        return true;
	}
	
}
