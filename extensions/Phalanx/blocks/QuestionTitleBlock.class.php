<?php
/**
 * This filter blocks a question (page) from being created,
 * if its title matches any of the blacklisted phrases.
 *
 * Note: only works on Answers-type wikis
 */

class QuestionTitleBlock {
	public static function badWordsTest( $title ) {
		global $wgLanguageCode;
		wfProfileIn( __METHOD__ );

		if ( !( $title instanceof Title ) ) {
			wfProfileOut( __METHOD__ );
			return true;
		}

		$text = preg_replace( '/[^\PP]+/', '', $title->getText() );
		$text = preg_replace( '/\s+/', ' ', $text );

		$blocksData = Phalanx::getFromFilter( Phalanx::TYPE_ANSWERS_QUESTION_TITLE, $wgLanguageCode );

		foreach ( $blocksData as $blockData ) {
			$result = Phalanx::isBlocked( $text, $blockData );
			if ( $result['blocked'] ) {
				wfDebugLog( 'Phalanx', __METHOD__ . ": block '{$result['msg']}' blocked '$text'." );
				wfProfileOut( __METHOD__ );
				return false;
			}
		}

		wfProfileOut( __METHOD__ );
		return true;
	}
}
