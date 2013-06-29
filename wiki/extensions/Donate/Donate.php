<?php
# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
        echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/Donate/Donate.php" );
EOT;
        exit( 1 );
}
 
$wgExtensionCredits[ 'specialpage' ][] = array(
        'path' => __FILE__,
        'name' => 'Donate',
        'author' => '[[User:George (Brickimedia)|George Barnick]]',
        'url' => 'https://www.mediawiki.org/wiki/User:GeorgeBarnick',
        'descriptionmsg' => 'donate-desc',
        'version' => '2.3.1',
);
 
$wgAutoloadClasses[ 'SpecialDonate' ] = __DIR__ . '/SpecialDonate.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'Donate' ] = __DIR__ . '/Donate.i18n.php'; # Location of a messages file (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'DonateAlias' ] = __DIR__ . '/Donate.alias.php'; # Location of an aliases file (Tell MediaWiki to load this file)
$wgSpecialPages[ 'Donate' ] = 'SpecialDonate'; # Tell MediaWiki about the new special page and its class name