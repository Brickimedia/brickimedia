<?php
# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
        echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/RandomWiki/RandomWiki.php" );
EOT;
        exit( 1 );
}
 
$wgExtensionCredits[ 'specialpage' ][] = array(
        'path' => __FILE__,
        'name' => 'RandomWiki',
        'author' => '[[User:George (Brickimedia)|George Barnick]]',
        'url' => 'https://www.mediawiki.org/wiki/User:GeorgeBarnick',
        'descriptionmsg' => 'randomwiki-desc',
        'version' => '2.1.3',
);
 
$wgAutoloadClasses[ 'SpecialRandomWiki' ] = __DIR__ . '/SpecialRandomWiki.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'RandomWiki' ] = __DIR__ . '/RandomWiki.i18n.php'; # Location of a messages file (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'RandomWikiAlias' ] = __DIR__ . '/RandomWiki.alias.php'; # Location of an aliases file (Tell MediaWiki to load this file)
$wgSpecialPages[ 'RandomWiki' ] = 'SpecialRandomWiki'; # Tell MediaWiki about the new special page and its class name