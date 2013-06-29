<?php

$dbr = wfGetDB( DB_SLAVE );

$chatmod = $dbr -> addQuotes( 'chatmod' );//WAS NO COLON HERE

$res = $dbr -> select(
		'user_groups',
		'ug_user',
		'ug_group = ' . $chatmod
);

global $bmProject;

$filestring = "\n\$mods['" . $bmProject . "'] = array(";

foreach( $res as $row ){
	$id = strval($row -> ug_user) . ', ';
	$filestring .= $id;
}

$filestring .= ');';

$file = file("/var/www/wiki/chat/cometchat1/modules/chatrooms/mods.php");
$newLines = array();

foreach ($file as $line) {
	if( substr( $line, 7, 2 ) != substr( $bmProject, 0, 2 )) {
		if( $line != "\n"){
			$newLines[] = chop($line);
		}
	}
}

$newLines[] = $filestring;
$newFile = implode("\n", $newLines);

file_put_contents("/var/www/wiki/chat/cometchat1/modules/chatrooms/mods.php", $newFile);

