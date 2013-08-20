<?php

$wgSitename         = "Brickimedia Meta";
$wgMetaNamespace    = "Brickimedia";
$wgLogo             = "http://meta.brickimedia.org/skins/common/images/common-logo.png";
$wgFavicon          = "http://www.brickimedia.org/favicon.ico";

$wgLanguageCode = "en";
$wgDefaultSkin = 'deepsea';

$wgGroupPermissions['board']['read'] = true;
$wgGroupPermissions['board']['edit'] = true;
$wgGroupPermissions['board']['userrights-interwiki'] = true;
$wgGroupPermissions['board']['userrights'] = true;
$wgGroupPermissions['board']['boardedit'] = true;
$wgGroupPermissions['board']['userrights-global'] = true;
$wgGroupPermissions['sysadmin']['userrights-global'] = true;
$wgGroupPermissions['sysadmin']['userrights-interwiki'] = true;
$wgGroupPermissions['sysadmin']['userrights'] = true;

$wgGroupPermissions['boardedit']['boardedit'] = true;

$wgGroupPermissions['sysop']['globalblock'] = true;
$wgGroupPermissions['sysop']['globalunblock'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify'] = true;
$wgGroupPermissions['sysop']['abusefilter-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['sysop']['abusefilter-revert'] = true;
$wgGroupPermissions['sysop']['abusefilter-view-private'] = true;
$wgGroupPermissions['sysop']['abusefilter-log-private'] = true;
$wgGroupPermissions['janitor']['globalblock'] = true;
$wgGroupPermissions['janitor']['globalunblock'] = true;
$wgGroupPermissions['janitor']['abusefilter-modify'] = true;
$wgGroupPermissions['janitor']['abusefilter-private'] = true;
$wgGroupPermissions['janitor']['abusefilter-modify-restricted'] = true;
$wgGroupPermissions['janitor']['abusefilter-revert'] = true;
$wgGroupPermissions['janitor']['abusefilter-view-private'] = true;
$wgGroupPermissions['janitor']['abusefilter-log-private'] = true;
$wgGroupPermissions['janitor']['userrights-interwiki'] = true;
$wgAddGroups['janitor'] = array( 'bot' );
$wgRemoveGroups['janitor'] = array( 'bot' );

$wgLocalDatabases = array( 'brickimedia_en', 'brickimedia_customs', 'brickimedia_lmbw', 'brickimedia_dev', 'brickimedia_stories', 'brickimedia_cuusoo' );

$wgExtraNamespaces[104] = "Board";
$wgNamespaceProtection[104] = array( 'boardedit' ); //permission "editfoo" required to edit the foo namespace
$wgNamespacesWithSubpages[104] = true;            //subpages enabled for the foo namespace

//uploading
$wgEnableUploads = true;

#SocialProfile
require_once( "$IP/extensions/SocialProfile/SocialProfile.php" );
//$wgGroupPermissions['giftadmin']['managegifts'] = true;
require_once( "$IP/extensions/SocialProfile/UserStats/EditCount.php" ); // Necessary edit counter
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
        'Brickimedian' => 0,
);
$wgUserProfileDisplay['stats'] = true;


#global file descriptors
require_once("$IP/extensions/GlobalUsage/GlobalUsage.php");

#multi upload
require_once("$IP/extensions/MultiUpload/MultiUpload.php");

# Donate
require_once("$IP/extensions/Donate/Donate.php");

# ChatLogger
#require_once("$IP/extensions/ChatLogger/ChatLogger.php");

#images
#$wgShowSQLErrors = true;
require_once("$IP/extensions/UnimportedImages2/UnimportedImages.php");