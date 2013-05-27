<?php

/**
 **********************************************************
 * Name:     PlayerPointer
 * Desc:     AddOn for MediawikiPlayer which creates video pointer links
 *
 * @version: 0.1.0
 *
 * @author:  Anner van Hardenbroek (dwlnetnl@users.sourceforge.net)
 *				 Andrew Fitzgerald (contact@swiftlytilting.com)
 *           
 * License:  GNU GPL
 *
 ***********************************************************
 */

// using $wgScriptPath so head em off at the pass
if ( !defined( 'MEDIAWIKI' ) ) {
    echo "Not a valid entry point";
    exit( 1 );
}

class PlayerPointer implements MediawikiPlayerAddOn
{

	static function setup(&$wgParser)
	{	
		$wgParser->setHook('videopointer', array(__CLASS__, 'render'));
		$wgParser->setHook('audiopointer', array(__CLASS__, 'render'));
		return true;
	}
	
	static function render($input, $args, $parser, $frame = null) 	{
		if (is_numeric($input)) {
			$time = (int)$input;
			
			if ($time > 60) {
				$text = sprintf('%02d:%02d:%02d', round($input/3600, 0), round($input/60, 0), $input % 60);
			} else {
				$text = sprintf('00:00:%02d', $input % 60);
			}
		} else if (preg_match('/(((\d{1,2}):)?(\d{1,2}):)?(\d{1,2})/', $input, $matches) > 0) {
			$time = $matches[2]*3600 + $matches[4]*60 + $matches[5];
			$text = sprintf('%02d:%02d:%02d', $matches[2], $matches[4], $matches[5]);
		} else {
			return '[<i>no valid media pointer</i>]';
		}

		$currentId = "MWPlayer-" 
			. (array_key_exists('id', $args)
				? $args['id']
				: MediawikiPlayer::getId());
						
		$currentId = Xml::encodeJsVar($currentId);	
		$time = Xml::encodeJsVar($time);
		
		$code = "[<a href='#' onClick='"
			. "jwplayer($currentId).pause(true).onPlay("
			. "function(){jwplayer($currentId).onPlay().seek({$time})}"
			. ").play(true); return false;"
			. "'>$text</a>]";
			
		return $code;
	}
	
}