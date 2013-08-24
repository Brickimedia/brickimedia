<?php
$wgResourceModules['skins.quartz'] = array(
    'styles' => array(
        "$IP/skins/common/commonElements.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonContent.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonInterface.css" => array( 'media' => 'screen' ),
        "$IP/skins/quartz/screen.css" => array( 'media' => 'screen' ),		"$IP/skins/quartz/player/citrine.css" => array( 'media' => 'screen' )
    ),
    'scripts' => array(		"$IP/resources/jquery.effects/jquery.effects.core.js",		"$IP/resources/jquery.effects/jquery.effects.drop.js",
    	"$IP/skins/quartz/quartz.js",
    	"$IP/skins/common/foes.js",		"$IP/skins/quartz/player/jquery.jplayer.min.js",		"$IP/skins/quartz/player/jplayer.playlist.min.js",		"$IP/skins/quartz/player/player.js"
    ),
    'remoteBasePath' => $GLOBALS['wgStylePath'],
    'localBasePath' => $GLOBALS['wgStyleDirectory']
);require_once( "$IP/extensions/Verbatim/verbatim.php" );?>