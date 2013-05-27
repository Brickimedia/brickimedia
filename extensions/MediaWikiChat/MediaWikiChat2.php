<?php 

# Alert the user that this is not a valid access point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	exit( 1 );
}

$wgExtensionCredits[ 'specialpage' ][] = array(
		'path' => __FILE__,
		'name' => 'MediaWikiChat',
		'author' => 'Adam Carter/UltrasonicNXT',
		'url' => '',
		'descriptionmsg' => 'chat-desc',
		'version' => '0.0.0',
);

$wgAutoloadClasses[ 'SpecialChat' ] = __DIR__ . '/SpecialChat.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)
$wgAutoloadClasses[ 'MediaWikiChat' ] = __DIR__ . '/MediaWikiChatClass.php'; # Location of the SpecialMyExtension class (Tell MediaWiki to load this file)

$wgExtensionMessagesFiles[ 'MediaWikiChat' ] = __DIR__ . '/MediaWikiChat.i18n.php'; # Location of a messages file (Tell MediaWiki to load this file)

$wgSpecialPages[ 'Chat' ] = 'SpecialChat'; # Tell MediaWiki about the new special page and its class name


$wgLogTypes[] = 'chat';
$wgLogActionsHandlers['chat/send'] = 'LogFormatter';

$wgAjaxExportList[] = 'MediaWikiChat::getOnline';
$wgAjaxExportList[] = 'MediaWikiChat::getNew';
$wgAjaxExportList[] = 'MediaWikiChat::sendMessage';


$mwChatResourceTemplate = array(
		'localBasePath' => dirname( __FILE__ ),
		'remoteExtPath' => 'MediaWikiChat',
		'group' => 'ext.mwchat',
);
$wgResourceModules['ext.mwchat'] = $mwChatResourceTemplate + array(
		'scripts' => array(
				'MediaWikiChat.js',
		),
		'styles' => array(
				//'ajaxpoll.css',
		),
		'dependencies' => array(
		)
);