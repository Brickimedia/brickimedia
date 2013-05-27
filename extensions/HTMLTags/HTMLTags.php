<?php
/**
 * HTML Tags extension
 *
 * @file
 * @ingroup Extensions
 *
 * This is the main include file for the HTML Tags extension for
 * MediaWiki.
 *
 * Usage: Add the following line in LocalSettings.php:
 * require_once( "$IP/extensions/HTMLTags/HTMLTags.php" );
 *
 * @version 0.1
 */

// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */

// Credits
$wgExtensionCredits['parserhook'][] = array(
	'path'			=> __FILE__,
	'name'			=> 'HTML Tags',
	'author'		=> 'Yaron Koren',
	'version'		=> '0.1',
	'url'			=> 'http://www.mediawiki.org/wiki/Extension:HTML_Tags',
	'descriptionmsg'	=> 'htmltags-desc',
);

// Shortcut to this extension directory
$wgHTMLTagsDir = dirname( __FILE__ ) . '/';

// Internationalization
$wgExtensionMessagesFiles['HTMLTags'] = $wgHTMLTagsDir . 'HTMLTags.i18n.php';

// Register classes
$wgAutoloadClasses['HTMLTags'] = $wgHTMLTagsDir . 'HTMLTags_body.php';

// Register parser hook
$wgHooks['ParserFirstCallInit'][] = 'HTMLTags::register';

// Settings
$wgHTMLTagsAttributes = array();
