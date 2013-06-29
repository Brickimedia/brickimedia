<?php 

function go(){
	require_once(dirname(__FILE__) . '/ChatMods.body.php');
}

$wgExtensionFunctions[] = 'go';

$wgGroupPermissions['chatmod']['chatmod'] = true;
$wgGroupPermissions['sysop']['chatmod'] = true;

function onUserRights( $user, $add, $remove ){
	
	require_once(dirname(__FILE__) . '/ChatMods.body.php');
	
	return true;
}

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'ChatMods',
	'author' =>'[[m:User:UltrasonicNXT (Brickimedia)|Adam Carter]]',  
	'description' => 'Links MW users in group chatmod with CometChat mods.',
	'version'  => 1.0,
);