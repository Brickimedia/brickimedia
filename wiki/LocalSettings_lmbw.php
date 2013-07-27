<?php

//$wgReadOnly = "Sorry, setup is currently being done. Any actions that will modify the database have been disabled";
$wgSitename      = "Lego Message Boards Wiki";
$wgMetaNamespace = "Lego Message Boards Wiki";

$wgDBprefix         = "";
$wgLogo             = "http://meta.brickimedia.org/images/d/d8/LMBW-Wiki-Logo.png";
## Favicon
$wgFavicon = "http://lmbw.brickimedia.org/lmbw-favicon.ico";

$wgLanguageCode = "en";

require_once("$IP/skins/lia.php");
$wgDefaultSkin = 'lia';

$wgEnableUploads  = true;

$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['*']['createtalk'] = false;
$wgGroupPermissions['*']['createpage'] = false;

//uploading
$wgEnableUploads = false;
$wgUploadNavigationUrl = "http://meta.brickimedia.org/wiki/Special:Upload";
$wgUploadMissingFileUrl= "http://meta.brickimedia.org/wiki/Special:Upload";

#SocialProfile
require_once("$IP/extensions/SocialProfile/SocialProfile.php");
require_once("$IP/extensions/SocialProfile/UserStats/EditCount.php"); // Necessary edit counter
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 1; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 5; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 10; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 1; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 10; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 0; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 0; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0, 4 ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
        'Caveman' => 0,
        'Pharaoh' => 500,
        'Spartan Warrior' => 1000,
        'Gladiator' => 2000,
        'Roman Soldier' => 3000,
        'Minotaur' => 4000,
        'Viking' => 5000,
        'Samurai Warrior' => 7500,
        'Knight' => 10000,
        'Highland Battler' => 12500,
        'Forestman' => 15000,
        'Ninja' => 17500,
        'Aztec Warrior' => 20000,
		'Conquistador' => 25000,
		'Jester' => 30000,
);
$wgUserProfileDisplay['stats'] = true;

#MobileDetect
require_once("$IP/extensions/MobileDetect/MobileDetect.php");
$mobile = mobiledetect();
if ($mobile == false) $wgDefaultSkin = "lia"; # If not Mobile
//if ($mobile == true) $wgDefaultSkin = "mobile"; # If is Mobile

#global file descriptors
$wgGlobalUsageDatabase = 'brickimedia_meta';
require_once("$IP/extensions/GlobalUsage/GlobalUsage.php");

#SMW
$smwgNamespacesWithSemanticLinks = array(
		NS_MAIN => true,
		NS_TALK => false,
		NS_USER => true,
		NS_USER_TALK => false,
		NS_PROJECT => true,
		NS_PROJECT_TALK => false,
		NS_IMAGE => true,
		NS_IMAGE_TALK => false,
		NS_MEDIAWIKI => false,
		NS_MEDIAWIKI_TALK => false,
		NS_TEMPLATE => false,
		NS_TEMPLATE_TALK => false,
		NS_HELP => true,
		NS_HELP_TALK => false,
		NS_CATEGORY => true,
		NS_CATEGORY_TALK => false,
		'SMW_NS_PROPERTY' => true,
		'SMW_NS_PROPERTY_TALK' => false,
		'SMW_NS_TYPE' => true,
		'SMW_NS_TYPE_TALK' => false,
		'SMW_NS_CONCEPT' => true,
		'SMW_NS_CONCEPT_TALK' => false,
);
include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
enableSemantics('en.brickimedia.org');