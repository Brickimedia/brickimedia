<?php 

$wgLogTypes[] = 'chat';

$wgLogActionsHandlers['chat/*'] = 'LogFormatter';
/* Or if you want catch-all, do
$wgLogActionsHandlers['foo/*'] = 'LogFormatter';
 * Or if you need some extra logic, you can write your own formatter and do
$wgLogActionsHandlers['foo/*'] = 'FooLogFormatter';
 * See https://svn.wikimedia.org/doc/classLogFormatter.html
 */

$dir = dirname(__FILE__) . '/';

$wgExtensionCredits['validextensionclass'][] = array(
	'path' => __FILE__,
	'name' => 'ChatLogger',
	'author' =>'[[meta:User:UltrasonicNXT (Brickimedia)|Adam Carter]]', 
	//'url' => 'https://www.mediawiki.org/wiki/Extension:Example', 
	'description' => 'Logs phpFreeChat to Special:Log/chat',
	'version'  => 1.0,
);

$wgExtensionFunctions[] = 'chatLoggerMain';

function chatLoggerMain() {
	global $dir;
	require_once($dir . 'ChatLogger.body.php');
}

$wgExtensionMessagesFiles['MyExtension'] = $dir . 'ChatLogger.i18n.php';