<?php

/**
 * Custard skin
 *
 * @file
 * @ingroup Skins
 * @author Christopher Lazzaro (maestro35@outlook.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

$wgExtensionCredits[$type][] = array(
        'path' => __FILE__,     // File name for the extension itself, required for getting the revision number from SVN - string, adding in 1.15
        'name' => "Custard",
        'description' => "Clean and modern skin originally developed for Brickimedia.org",
        'version' => 0.1,
        'author' => "Christopher Lazzaro", 
        'url' => "",            // URL of extension (usually instructions) - string
);

$wgValidSkinNames['custard'] = 'Custard';
$wgAutoloadClasses['SkinCustard'] = dirname(__FILE__).'/Custard.skin.php';
$wgExtensionMessagesFiles['Custard'] = dirname(__FILE__).'/Custard.i18n.php';

$wgResourceModules['skins.custard'] = array(
        'styles' => array(
                'custard.css' => array( 'media' => 'screen' ),
        ),
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

?>