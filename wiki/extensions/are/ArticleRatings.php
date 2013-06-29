<?php

# Not an entry point
if(!defined('MEDIAWIKI')) {
	die('This file is a MediaWiki extension, it is not a valid entry point');
}

# Define stuff
$dir = dirname(__FILE__) . '/';
global $ratingsJSONPaths;
global $defaultRatingsJSONPath;

function areDoPaths(){
	global $wgTitle;
	global $dir;
	global $defaultRatingsJSONPath;
	global $ratingsJSONPaths;
	$dir = dirname(__FILE__) . '/';
	
	$ns = $wgTitle -> getNamespace();
	if( in_array($ns, $ratingsJSONPaths) ){
		$finalJSONPath = $dir . $ratingsJSONPaths[$ns];
	} else {
		$finalJSONPath = $dir . $defaultRatingsJSONPath;
	}
	return $finalJSONPath;
}

# Check tables and stuff
function areAddColumn(){
	$dbw = wfGetDB(DB_MASTER);
	$q = $dbw -> tableName('ratings');
	$success = $dbw -> query(
		'CREATE TABLE ' . $q . '
		(
		ratings_title varchar(255),
		ratings_rating tinytext,
		ratings_namespace int
		)',
		__METHOD__,
		true
	);
}
//$wgExtensionFunctions[] = 'areAddColumn';

# Load Hooks
$wgAutoloadClasses['AreHooks'] = $dir . 'Hooks.php';
$wgHooks['SkinTemplateContentActions'][] = 'AreHooks::addRatingTab';
$wgHooks['TitleMoveComplete'][] = 'AreHooks::onTitleMoveComplete';


# Set up <rating />
$wgHooks['ParserFirstCallInit'][] = 'wfRatingParserInit';

include($dir . "RatingTag.php");
 
function wfRatingParserInit(Parser $parser) {
        $parser->setHook('rating', 'wfRatingRender');
        return true;
}

# Credits
$wgExtensionCredits['other'][] = array(
        'path' => __FILE__,
        'name' => 'ArticleRating',
        'author' => '[[meta:User:UltrasonicNXT (Brickimedia)|Adam Carter]]',
        'url' => 'https://www.mediawiki.org/wiki/Extension:ArticleRatings',
        'descriptionmsg' => 'ratings-desc',
        'version' => '1.3',
);

# Special:SpecialPages
$wgSpecialPageGroups['ChangeRating'] = 'other';
$wgSpecialPageGroups['MassRatings'] = 'other';

# Set up Special:ChangeRating 
$wgAutoloadClasses['SpecialChangeRating'] = $dir . 'SpecialChangeRating.php';
$wgSpecialPages['ChangeRating'] = 'SpecialChangeRating';

# Set up Special:MassRatings
$wgAutoloadClasses['SpecialMassRatings'] = $dir . 'SpecialMassRatings.php';
$wgSpecialPages['MassRatings'] = 'SpecialMassRatings';

#i18n
$wgExtensionMessagesFiles['ArticleRatings'] = $dir . 'ArticleRatings.i18n.php';

#Logs
$wgLogTypes[] = 'ratings';
$wgLogActionsHandlers['ratings/*'] = 'LogFormatter';

?>