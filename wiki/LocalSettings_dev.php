<?php

//$wgReadOnly = "Sorry, setup is currently being done. Any actions that will modify the database have been disabled";
$wgSitename      = "Brickimedia Development";
$wgMetaNamespace = "Development";

$wgDBprefix         = "";
$wgLogo             = "http://meta.brickimedia.org/images/thumb/d/df/BrickiCustomsLogo.png/160px-BrickiCustomsLogo.png";
$wgFavicon          = "http://www.brickimedia.org/favicon.ico";

$wgLanguageCode = "en";

//uploads
$wgEnableUploads  = false; //DO NOT CHANGE!! Please tell NXT if you need to upload directly onto a project.

//forums
require_once("$IP/extensions/WikiForum/WikiForum.php");

#$wgMediaWikiAuthAPIURL = 'http://lego.wikia.com/api.php';
#$wgMediaWikiAuthPrefsURL = 'http://lego.wikia.com/wiki/Special:Preferences';
#require_once("$IP/extensions/MediaWikiAuth/MediaWikiAuth.php");
#$wgAuth = new MediaWikiAuthPlugin();

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
        'Newcomer' => 0,
        'Beginner' => 500,
        'Novice' => 1000,
        'Amateur' => 1500,
        'Thinking With Bricks' => 2000,
        'Bricktastic' => 2500,
        'Building Bigger' => 5000,
        'Brick Master' => 7500,
        'Master Builder' => 10000,
        'LEGO Wizard' => 12500,
        'Outstanding Brickimedian' => 15000,
        'Honorable Brickimedian' => 20000,
        'Legendary Brickimedian' => 25000,
);
$wgUserProfileDisplay['stats'] = true;

#GlobalNewUsers
require_once("$IP/extensions/GlobalNewUsers/GlobalNewUsers.php");

$wgShowSQLErrors = true;


require_once("$IP/extensions/WhosGloballyOnline/WhosGloballyOnline.php");

require_once("$IP/extensions/MediaWikiChat/MediaWikiChat.php");

$wgDebugLogFile = '/var/log/mw.log';
$wgGroupPermissions['bureaucrat']['userrights'] = true;