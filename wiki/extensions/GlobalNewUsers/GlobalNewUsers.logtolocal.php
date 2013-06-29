<?php 

function globalNewUsersNewUser( $user, $byEmail ){
	global $bmProject;
	$username = $user -> getName();
	
    $logpath = "/var/www/wiki/extensions/GlobalNewUsers/log";
    $log = file_get_contents($logpath);
    $log .= "$username#$bmProject\n";
    file_put_contents($logpath, $log);
    
    return true;
}

$wgHooks['AddNewAccount'][] = 'globalNewUsersNewUser';