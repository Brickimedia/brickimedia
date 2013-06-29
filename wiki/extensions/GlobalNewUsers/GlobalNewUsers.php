<?php 

$dir = dirname(__FILE__) . '/';

require_once( $dir . 'GlobalNewUsers.logtolocal.php' );

if( $bmProject == 'meta' ){
	require_once( $dir . 'GlobalNewUsers.logtometa.php' );
}

$wgExtensionCredits['validextensionclass'][] = array(
	'path' => __FILE__,
	'name' => 'GlobalNewUsers',
	'author' =>'[[meta:User:UltrasonicNXT (Brickimedia)|Adam Carter]]', 
	//'url' => 'https://www.mediawiki.org/wiki/Extension:Example', 
	'description' => 'Logs users created on all projects to a meta-only log',
	'version'  => 1.0,
);

$wgExtensionMessagesFiles['MyExtension'] = $dir . 'GlobalNewUsers.i18n.php';
