<?php

$wgSitename      = "LEGO Stories Wiki";
$wgMetaNamespace = "LEGO Stories Wiki";

$wgLogo             = "http://meta.brickimedia.org/images/e/ec/Lswlogo.png";

$wgLanguageCode = "en";

#Skin stuff
require_once( "$IP/skins/quartz/resources.php" );
$wgDefaultSkin = 'quartz';
$wgSkipSkins = array("lia", "standard");


//uploads
$wgEnableUploads  = false; //DO NOT CHANGE!! Please tell NXT if you need to upload directly onto a project.
$wgUploadNavigationUrl = "http://meta.brickimedia.org/wiki/Special:Upload";
$wgUploadMissingFileUrl= "http://meta.brickimedia.org/wiki/Special:Upload";

#SocialProfile
require_once("$IP/extensions/SocialProfile/SocialProfile.php");
require_once("$IP/extensions/SocialProfile/UserStats/EditCount.php"); // Necessary edit counter
$wgUserStatsPointValues['edit'] = 5; // Points awarded on a mainspace edit
$wgUserStatsPointValues['vote'] = 1; // Points awarded for voting for an article
$wgUserStatsPointValues['comment'] = 2; // Points awarded for leaving a comment
$wgUserStatsPointValues['comment_plus'] = 2; // Points awarded if your comment gets a thumbs up
$wgUserStatsPointValues['comment_ignored'] = 0; // Points awarded if another user ignores your comments
$wgUserStatsPointValues['opinions_created'] = 4; // Points awarded for writing a blog article
$wgUserStatsPointValues['opinions_pub'] = 10; // Points awarded for having that article hit the "Blogs" page
$wgUserStatsPointValues['referral_complete'] = 0; // Points awarded for recruiting a new user
$wgUserStatsPointValues['friend'] = 1; // Points awarded for adding a friend
$wgUserStatsPointValues['foe'] = 0; // Points awarded for adding a foe
$wgUserStatsPointValues['gift_rec'] = 10; // Points awarded for receiving a gift
$wgUserStatsPointValues['gift_sent'] = 0; // Points awarded for giving a gift
$wgUserStatsPointValues['points_winner_weekly'] = 20; // Points awarded for having the most points for a week
$wgUserStatsPointValues['points_winner_monthly'] = 50; // Points awarded for having the most points for a month
$wgUserStatsPointValues['user_image'] = 5; // Points awarded for adding your first avatar
$wgUserStatsPointValues['poll_vote'] = 1; // Points awarded for taking a poll
$wgUserStatsPointValues['quiz_points'] = 1; // Points awarded for answering a quiz question
$wgUserStatsPointValues['quiz_created'] = 0; // Points awarded for creating a quiz question
$wgNamespacesForEditPoints = array( 0, 4 ); // Array of namespaces that can earn you points. Use numerical keys. 0 is mainspace, 4 is project
// The actual user level definitions -- key is simple: 'Level name' => points needed
$wgUserLevels = array(
        'Bookkeeper' => 1000,
        'Wordsmith' => 1100,
        'Reader' => 1250,
        'Skimmer' => 1500,
        'Scribbler' => 2000,
        'Scribe' => 3500,
        'Poet' => 6000,
        'Dramatist' => 8500,
        'Editor' => 11000,
        'Essayist' => 13500,
        'Journalist' => 16000,
        'Author' => 18500,
        'Novelist' => 21000,
        'Critic' => 26000,
        'Master Writer' => 31000,
);
$wgUserProfileDisplay['stats'] = true;

#Custom namespaces
define("NS_PORTAL", 300);
define("NS_PORTAL_TALK", 301);
$wgExtraNamespaces[NS_PORTAL] = "Portal";
$wgExtraNamespaces[NS_PORTAL_TALK] = "Portal_talk";
$wgNamespacesWithSubpages[NS_PORTAL] = true;            //subpages enabled for the review namespace
$wgGroupPermissions['*']['edit'] = true;
//$wgGroupPermissions['autoconfirmed']['editreview'] = true;
//$wgGroupPermissions['sysop']['editreview'] = true;
//$wgContentNamespaces[] = 500;                           //track namespace in Special:Statistics

$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['*']['createtalk'] = false;
$wgGroupPermissions['*']['createpage'] = false;
$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;
$wgGroupPermissions['sysadmin']['createaccount'] = true;

#global file descriptors
$wgGlobalUsageDatabase = 'brickimedia_meta';
require_once("$IP/extensions/GlobalUsage/GlobalUsage.php");