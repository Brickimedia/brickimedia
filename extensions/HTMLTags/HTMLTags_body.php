<?php
/**
 * Main code for the HTML Tags extension
 *
 * @file
 * @ingroup HTML Tags
 */

class HTMLTags {

	public static function register( &$parser ) {
		// Register the hook with the parser
		$parser->setHook( 'htmltag', array( 'HTMLTags', 'render' ) );
		// Continue
		return true;
	}

	/**
	 * Handle the <htmltag> tag.
	 */
	public static function render( $input, $args, $parser, $frame ) {
		global $wgHTMLTagsAttributes;

		if ( !array_key_exists( 'tagname', $args ) ) {
			return wfMessage( 'htmltags-notagname' )->text();
		}

		$tagName = $args['tagname'];

		if ( !array_key_exists( $tagName, $wgHTMLTagsAttributes ) ) {
			return wfMessage( 'htmltags-unsupportedtag', $tagName )->escaped();
		}

		$input = $parser->replaceVariables( $input, $frame );

		$attributes = array();
		foreach ( $args as $key => $value ) {
			if ( $key == 'tagname' ) { continue; }
			if ( in_array( $key, $wgHTMLTagsAttributes[$tagName] ) ) {
				$value = $parser->replaceVariables( $value, $frame );
				$attributes[$key] = $value;
			}
		} 

		// The use of Html::element() should prevent any attempt
		// at JavaScript injection.
		$text = Html::element( $tagName, $attributes, $input );
		return $text;
	}

}
