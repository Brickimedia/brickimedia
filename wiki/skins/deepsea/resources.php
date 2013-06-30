<?php/*
$big = "$IP/skins/deepsea/big.css";
$small = "$IP/skins/deepsea/small.css";
if($_GET['usemobile'] == 'true'){
	$mobile = true;
}
if($mobile) {
	$flexiblestylesheet = $small;
} else {
	$flexiblestylesheet = $big;
}
*/
global $wgUser;
//$user = $wgUser->getName();
//$globalcss = "meta.brickimedia.org/index.php/User:$user/global.css";
$wgResourceModules['skins.deepsea'] = array(
    'styles' => array(
        "$IP/skins/common/commonElements.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonContent.css" => array( 'media' => 'screen' ),
        "$IP/skins/common/commonInterface.css" => array( 'media' => 'screen' ),
        "$IP/skins/deepsea/screen.css" => array( 'media' => 'screen' ),
        //"$flexiblestylesheet" => array( 'media' => 'screen' ),
        "$IP/skins/deepsea/big.css" => array( 'media' => 'only screen and (min-width: 800px), only screen and (min-device-width: 800px)' ),
        "$IP/skins/deepsea/small.css" => array( 'media' => 'only screen and (max-width: 800px), only screen and (max-device-width: 800px)' ),
        "$IP/skins/deepsea/interactive.css" => array( 'media' => 'screen' ),
    	"$IP/skins/common/forums.css" => array( 'media' => 'screen' ),
    	//"$globalcss" => array( 'media' => 'screen' )
    	"$IP/skins/deepsea/projects/$bmProject.css" => array( 'media' => 'screen' )
    ),
    'scripts' => array(
    	"$IP/skins/deepsea/deepsea.js",
    	"$IP/skins/common/foes.js"
    ),
    'remoteBasePath' => $GLOBALS['wgStylePath'],
    'localBasePath' => $GLOBALS['wgStyleDirectory']
);