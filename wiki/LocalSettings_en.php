<?php

//$wgReadOnly = "Sorry, content is currently being imported. Any actions that will modify the database have been disabled";
$wgSitename      = "Brickipedia";
$wgMetaNamespace = "Brickipedia";

$wgDBprefix         = "";
$wgLogo             = "http://meta.brickimedia.org/images/a/ab/Brickipedia-Wiki-Logo.png";
$wgFavicon          = "$wgScriptPath/images/favicons/favicon.ico";

$wgLanguageCode = "en";
$wgDefaultSkin = 'refreshed';
$wgGroupPermissions['*']['edit'] = true;
$wgGroupPermissions['user']['upload'] = false;
$wgGroupPermissions['sysop']['upload'] = true;
$wgGroupPermissions['sysadmin']['upload'] = true;
$wgGroupPermissions['*']['createtalk'] = true;
$wgGroupPermissions['*']['createpage'] = true;

// ArticleRatings
$defaultRatingsJSONPath = "ratings_en_0.json";
$ratingsJSONPaths = array(
	0 => 'ratings_en_0.json'
);
require_once("$IP/extensions/are/ArticleRatings.php");

// User groups
$wgAddGroups['bureaucrat'] = array( 'sysop', 'bot', 'patroller', 'bureaucrat', 'reviewer' );
$wgRemoveGroups['bureaucrat'] = array( 'sysop', 'bot', 'patroller', 'bureaucrat', 'reviewer' );
$wgAddGroups['reviewer'][] = 'reviewer'; //Allow QCG and RQM users to add other members to that group
$wgRemoveGroups['sysop'][] = 'newsreporter'; //Allow QCG and RQM users to remove other members to that group

#News namespace
define("NS_NEWS", 2000);
$wgExtraNamespaces[NS_NEWS] = "Brickipedia_News";
$wgNamespaceProtection[NS_NEWS] = array( 'editnews' );
$wgGroupPermissions['*']['editnews'] = false;
$wgGroupPermissions['user']['editnews'] = false;
$wgGroupPermissions['autoconfirmed']['editnews'] = false;
$wgGroupPermissions['newsreporter']['editnews'] = true;
$wgGroupPermissions['sysop']['editnews'] = true;
$wgAddGroups['sysop'][] = 'newsreporter';
$wgRemoveGroups['sysop'][] = 'newsreporter';

//Semantic MediaWiki -- Do not touch unless you know what you are doing.
$smwgNamespaceIndex = 100;

include_once( "$IP/extensions/SemanticMediaWiki/SemanticMediaWiki.php" );
enableSemantics('en.brickimedia.org');

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
			      NS_NEWS => true,
);

#Namespace subpages
$wgNamespacesWithSubpages[NS_PROJECT] = true;

define("NS_CUSTOM", 116);
$wgExtraNamespaces[NS_CUSTOM] = "Custom";

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
$wgNamespacesForEditPoints = array( 0, 4, 1004, 1006 ); // Array of namespaces that can earn you points.
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

#Review and inventory namespace
define("NS_REVIEW", 118);
define("NS_REVIEW_TALK", 119);
$wgExtraNamespaces[NS_REVIEW] = "Review";
$wgExtraNamespaces[NS_REVIEW_TALK] = "Review_talk";
$wgNamespacesWithSubpages[NS_REVIEW] = true;            //subpages enabled for the review namespace
$wgGroupPermissions['*']['editreview'] = false;
$wgGroupPermissions['autoconfirmed']['editreview'] = true;
$wgGroupPermissions['sysop']['editreview'] = true;
$wgContentNamespaces[] = 118;                           //track namespace in Special:Statistics

define("NS_INVENTORY", 114);
define("NS_INVENTORY_TALK", 115);
$wgExtraNamespaces[NS_INVENTORY] = "Inventory";
$wgExtraNamespaces[NS_INVENTORY_TALK] = "Inventory_talk";
$wgNamespacesWithSubpages[NS_REVIEW] = true;            //subpages enabled for the review namespace
$wgContentNamespaces[] = 114;

#for {{colourbox}}
require_once("$IP/extensions/ImageMap/ImageMap.php");

/* Change the main page url used in things like the logo to a url of another page on the wiki */
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'lfChangeMainPageURL';
function lfChangeMainPageURL( $sk, &$tpl ) {
        $tpl->data['nav_urls']['mainpage']['href'] = Title::newFromText('LEGO Wiki')->getLocalURL();
        return true;
}

#trusted
$wgRestrictionLevels[] = 'trusted';
$wgGroupPermissions['sysop']['trusted'] = true;
$wgGroupPermissions['patroller']['trusted'] = true;

#Namespace Aliases (LC)
$wgNamespaceAliases = array(
        'BP' => NS_PROJECT,
    );
	
#Verbatim
require_once("$IP/extensions/Verbatim/verbatim.php");

# Article Ratings
global $bmMobile;
if( !$bmMobile ){
	require_once( "$IP/extensions/UserDailyContribs/UserDailyContribs.php" );
	require_once( "$IP/extensions/ClickTracking/ClickTracking.php" );
	require_once( "$IP/extensions/EmailCapture/EmailCapture.php" );
	require_once( "$IP/extensions/ArticleFeedback/ArticleFeedback.php" );
 
	$wgArticleFeedbackLotteryOdds = 100; // Will turn on the voting on all pages
	$wgArticleFeedbackDashboard = true;
}

#beta test group
$wgGroupPermissions['betatest']['read'] = true; //allow beta testers to read

require_once( "$IP/extensions/WikiArticleFeeds/WikiArticleFeeds.php" );
