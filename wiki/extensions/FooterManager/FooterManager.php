<?php
/**
 * FooterManager extension
 *
 * @file
 * @ingroup Extensions
 *
 * This file contains the main include file for the FooterManager extension of
 * MediaWiki.
 *
 * Usage: Add the following line in LocalSettings.php:
 * require_once( "$IP/extensions/FooterManager/FooterManager.php" );
 *
 * @author Simon Litt <slsoft@bk.ru>
 * @copyright Copyright © 2011, Simon Litt
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @version 0.0.1
 
 //TODO: popular analytic systems simplified configuration by id
 //TODO: custom footer links 
 //TODO: footer links and icons order
 */

// Check environment
if ( !defined( 'MEDIAWIKI' ) ) {
	echo( "This is an extension to the MediaWiki package and cannot be run standalone.\n" );
	die( -1 );
}

/* Configuration */
$wgFooterShowPoweredbyMwIcon = true;
$wgFooterManagerLinks = array();
//$wgFooterManagerCustomLinks = array(); //todo
$wgFooterManagerDefBannersBlock='analyticsystems';
// Credits
$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'version'        => '0.0.1',
	'name'           => 'FooterManager',
	'author'         => array( 'Simon Litt' ),
	'url'            => 'http://www.mediawiki.org/wiki/Extension:FooterManager',
	'description'    => 'Allow configure footer icons, footer links and website banners(often analytic systems).',
	'descriptionmsg' => 'footermanager-desc',
);

// Shortcut to this extension directory
$dir = dirname( __FILE__ ) . '/';

// Internationalization
$wgExtensionMessagesFiles['FooterManager'] = $dir . 'FooterManager.i18n.php';

// Register auto load for the special page class
$wgAutoloadClasses['FooterManagerHooks'] = $dir . 'FooterManager.hooks.php';
$wgAutoloadClasses['FooterManager'] = $dir . 'FooterManager.classes.php';

// Register parser hook
$wgHooks['BeforePageDisplay'][] = 'FooterManagerHooks::configureIconsAndBanners';
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'FooterManagerHooks::configureLinks';

