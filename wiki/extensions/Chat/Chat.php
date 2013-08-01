<?php
# This extension is obsolete and was succeeded by MediaWikiChat

# set to false to deny access to anonymous users
define('CHAT_ALLOW_ANONYMOUS_USERS', true);
 
# message shown when denying anonymous users. Change if you want a 
# different message. WikiText ok..
define('CHAT_DENY_ACCESS_MESSAGE', 'You must [[Special:UserLogin|login]] 
to use Brickimedia chatrooms');

$wgAllowAnonUsers = CHAT_ALLOW_ANONYMOUS_USERS;
$wgDenyAccessMessage = CHAT_DENY_ACCESS_MESSAGE;

# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
        echo <<<EOT
To install my extension, put the following line in LocalSettings.php:
require_once( "\$IP/extensions/Chat/Chat.php" );
EOT;
        exit( 1 );
}
 
$wgExtensionCredits[ 'specialpage' ][] = array(
        'path' => __FILE__,
        'name' => 'Chat',
        'author' => '[[User:George (Brickimedia)|George Barnick]]',
        'url' => 'https://www.mediawiki.org/wiki/User:GeorgeBarnick',
        'descriptionmsg' => 'chat-desc',
        'version' => '2.6.2',
);
 
$wgAutoloadClasses[ 'SpecialChat' ] = __DIR__ . '/SpecialChat.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'Chat' ] = __DIR__ . '/Chat.i18n.php'; # Location of a messages file (Tell MediaWiki to load this file)
$wgExtensionMessagesFiles[ 'ChatAlias' ] = __DIR__ . '/Chat.alias.php'; # Location of an aliases file (Tell MediaWiki to load this file)
$wgSpecialPages[ 'Chat' ] = 'SpecialChat'; # Tell MediaWiki about the new special page and its class name