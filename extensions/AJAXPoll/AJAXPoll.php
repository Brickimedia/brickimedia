<?php
/**
 * AJAX Poll extension for MediaWiki
 * Created by Dariusz Siedlecki, based on the work by Eric David.
 * Licensed under the GFDL.
 *
 * <poll>
 * [Option]
 * Question
 * Answer 1
 * Answer 2
 * Answer ...
 * Answer n
 * </poll>
 *
 * @file
 * @ingroup Extensions
 * @author Dariusz Siedlecki <datrio@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @author Thomas Gries
 * @maintainer Thomas Gries
 * @version 1.78
 * @link http://www.mediawiki.org/wiki/Extension:AJAX_Poll Documentation
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point.\n" );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
	'path' => __FILE__,
	'name' => 'AJAX Poll',
	'version' => '1.79 20130101',
	'author' => array( 'Dariusz Siedlecki', 'Jack Phoenix', 'Thomas Gries' ),
	'descriptionmsg' => 'ajaxpoll-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:AJAX_Poll',
);

// Internationalization + AJAX function
$dir = dirname( __FILE__ );
$wgExtensionMessagesFiles['AJAXPoll'] = $dir . '/AJAXPoll.i18n.php';
$wgAutoloadClasses['AJAXPoll'] = $dir . '/AJAXPoll_body.php';
$wgAjaxExportList[] = 'AJAXPoll::submitVote';
$wgHooks['ParserFirstCallInit'][] = 'AJAXPoll::onParserInit';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'AJAXPoll::onLoadExtensionSchemaUpdates';

$myResourceTemplate = array(
	'localBasePath' => dirname( __FILE__ ) . "/resources",
	'remoteExtPath' => 'AJAXPoll/resources',
	'group' => 'ext.ajaxpoll',
);
$wgResourceModules['ext.ajaxpoll'] = $myResourceTemplate + array(
	'scripts' => array(
		'ajaxpoll.js',
	),
	'styles' => array(
		'ajaxpoll.css',
	),
	'dependencies' => array(
	)
);

# new user rights
$wgAvailableRights[] = 'ajaxpoll-vote';

# if you want to allow only users to vote, use the following code lines
# in your LocalSettings.php after calling the AJAXPoll extension:
# $wgGroupPermissions['*']['ajaxpoll-vote'] = false;
# $wgGroupPermissions['user']['ajaxpoll-vote'] = true;
