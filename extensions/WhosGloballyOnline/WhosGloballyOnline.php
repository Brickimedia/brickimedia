<?php
/**
 * WhosOnline extension - creates a list of logged-in users & anons currently online
 * The list can be viewed at Special:WhosOnline
 *
 * @file
 * @ingroup Extensions
 * @author Adam Carter
 * @author Maciej Brencz <macbre(at)-spam-wikia.com> - minor fixes and improvements
 * @author ChekMate Security Group - original code
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is not a valid entry point.' );
}

// Extension credits that show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'WhosGloballyOnline',
	'version' => '1.3.1',
	'author' => 'Adam Carter, adapted from Maciej Brencz',
	'descriptionmsg' => 'whosgloballyonline-desc',
	'url' => '',
);

// Showing anonymous users' IP addresses can be a security threat!
$wgWhosOnlineShowAnons = false;

// Set up the special page
$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['SpecialWhosGloballyOnline'] = $dir . 'WhosGloballyOnlineSpecialPage.php';
$wgExtensionMessagesFiles['WhosGloballyOnline'] = $dir . 'WhosGloballyOnline.i18n.php';
$wgSpecialPages['WhosGloballyOnline'] = 'SpecialWhosGloballyOnline';

