<?php

# Enabled Extensions. Most extensions are enabled by including the base extension file here
# but check specific extension documentation for more details
# The following extensions were automatically enabled.
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/Nuke/Nuke.php" );
$wgAllowSlowParserFunctions = true;
$wgPFStringLengthLimit = 10000;
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
$wgPFEnableStringFunctions = true;
require_once( "$IP/extensions/Renameuser/Renameuser.php" );
require_once( "$IP/extensions/Vector/Vector.php" );
require_once( "$IP/extensions/GlobalUserrights/GlobalUserrights.php" );
require_once( "$IP/extensions/Interwiki/Interwiki.php" );
require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/GlobalBlocking/GlobalBlocking.php" );
require_once( "$IP/extensions/globaluserrights.php" );
require_once( "$IP/extensions/EditUser/EditUser.php" );

// Uploads
$wgEnableUploads = true;

// Stop those spammers!
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
//...without reCAPTCHA. --southerner
//require_once("$IP/extensions/ConfirmEdit/Asirra.php");
//$wgCaptchaClass = 'Asirra';
require_once( "$IP/extensions/ConfirmEdit/QuestyCaptcha.php" );
$wgCaptchaClass = 'QuestyCaptcha';
$arr = array (
        "What is Brickimedia about?" => "LEGO",
        'Please write the magic word, "energy", here:' => 'energy',
        'Type the code word, 329, here:' => '329',
        'What is half of 6?' => '3',
        'Write the number 4 in letters:' => 'four',
);
foreach ( $arr as $key => $value ) {
        $wgCaptchaQuestions[] = array( 'question' => $key, 'answer' => $value );
}
$wgGroupPermissions['autoconfirmed']['skipcaptcha'] = true;
$wgGroupPermissions['bot']['skipcaptcha'] = true;
$wgGroupPermissions['sysadmin']['skipcatcha'] = true;
$wgCaptchaTriggers['edit']          = true;

// Short URLs
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

// WikiEditor
require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
$wgDefaultUserOptions['usebetatoolbar'] = 1;
$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
$wgDefaultUserOptions['wikieditor-preview'] = 1;
$wgDefaultUserOptions['wikieditor-publish'] = 0;

// Vector Skin
require_once( "$IP/extensions/Vector/Vector.php" );
$wgVectorUseSimpleSearch = true;

// DISPLAYTITLE
$wgRestrictDisplayTitle = false;

// Cite
require_once( "$IP/extensions/Cite/Cite.php" );
require_once( "$IP/extensions/Cite/SpecialCite.php" );
$wgCiteEnablePopups = true;                             // Pop-up citations

// Brickimedia Footer Icon
$wgFooterIcons['brickimedia']['brickimedia'] = array(
	"src" => "http://www.brickimedia.org/img/brickimedia-tag.png",
	"url" => "http://www.brickimedia.org",
	"alt" => "Brickimedia",
	"height" => "31",
	"width" => "88"
);

// Terms of Use link in footer
$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'lfTOULink';
function lfTOULink( $sk, &$tpl ) {
        $tpl->set( 'termsofuse', $sk->footerLink( 'termsofuse', 'termsofusepage' ) );
        $tpl->data['footerlinks']['places'][] = 'termsofuse';
        return true;
}
$wgExtensionMessagesFiles['TermsOfUse'] = dirname( __FILE__ ) . '/extensions/i18n/TermsOfUse.i18n.php';

// Messages
$wgExtensionMessagesFiles['defaultMessages'] = dirname( __FILE__ ) . '/extensions/i18n/defaultMessages.i18n.php';
$wgExtensionMessagesFiles['UserGroups'] = dirname( __FILE__ ) . '/extensions/i18n/UserGroups.i18n.php';

// Autoconfirmed
$wgAutoConfirmAge = 86400*3;
$wgAutoConfirmCount = 5;

// More extensions
require_once( "$IP/extensions/videoflash.php" );// Allows in-page embedding of videos from many sources. http://www.mediawiki.org/wiki/Extension:VideoFlash
require_once( "$IP/extensions/BlogPage/Blog.php" );
require_once( "$IP/extensions/VoteNY/Vote.php" );
require_once( "$IP/extensions/Comments/Comment.php" );
require_once( "$IP/extensions/ProtectSite/ProtectSite.php" );
require_once( "$IP/extensions/DPLForum/DPLforum.php" );
require_once( "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php" );
require_once ( "$IP/extensions/CheckUser/CheckUser.php" );
require_once( "$IP/extensions/Editcount/Editcount.php" );
require_once( "$IP/extensions/AJAXPoll/AJAXPoll.php" );
require_once( "$IP/extensions/UserMerge/UserMerge.php" );
#require_once( "$IP/extensions/LookupUser/LookupUser.php" );
require_once( "$IP/extensions/MediawikiPlayer/MediawikiPlayer.php" );
require_once( "$IP/extensions/InputBox/InputBox.php" );
require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );

// Skins
//LS_global MUST be before deepsea is included!
require_once( "$IP/skins/DeepSea/DeepSea.php" );
#require_once( "$IP/skins/monaco/monaco.php" );
$wgSkipSkins = array( 'liamobile' );

//User skin files
$wgAllowUserCss = true;
$wgAllowUserJs = true;

// Force enhanced rc
$wgDefaultUserOptions['usenewrc'] = 1;

// For the forums //turn off caching?
$wgShowExceptionDetails = true;

// WikiForum
require_once( "$IP/extensions/WikiForum/WikiForum.php" );
$wgWikiForumAllowAnonymous = false; //disabled because of spam

// OggHandler
//require( "$IP/extensions/OggHandler/OggHandler.php" );
//$wgFFmpegLocation = '/usr/bin/ffmpeg';
//$wgOggThumbLocation = '/usr/local/bin/oggThumb';

// Upload by url/external images
$wgAllowCopyUploads = true;
$wgCopyUploadsFromSpecialUpload = true;
$wgAllowExternalImages = true;

// HTML (feel free to disable; testing still)
include_once("$IP/extensions/HTMLTags/HTMLTags.php");
$wgHTMLTagsAttributes['iframe'] = array( 'src', 'width', 'height', 'style' );
$wgHTMLTagsAttributes['form'] = array( 'action', 'method' );
$wgHTMLTagsAttributes['input'] = array( 'type', 'name', 'value', 'src', 'border', 'alt' );
$wgHTMLTagsAttributes['img'] = array( 'alt', 'border', 'src', 'width', 'height' );

// SMW Factbox
$smwgShowFactbox = 'SMW_FACTBOX_NONEMPTY';

// Special:RandomWiki
//require_once("$IP/extensions/RandomWiki/RandomWiki.php");
//require_once ('extensions/FooterManager/FooterManager.php');

// EveryXLoad (hooks for scripts that don't need to run every pageload
//require_once("$IP/extensions/EveryXLoad/EveryXLoad.php");

// WhosOnline
//require_once("$IP/extensions/WhosOnline/WhosOnline.php");
//$wgWhosOnlineShowAnons = true;
//$wgSpecialPageGroups['WhosOnline'] = 'users';

$wgExtraNamespaces[500] = "User_blog";
//$wgExtraNamespaces[501] = "User_block_comment";
//$wgExtraNamespaces[700] = "Top_10_list";
//$wgExtraNamespaces[701] = "Top_10_list_talk";
//$wgExtraNamespaces[2000] = "Board";
//$wgExtraNamespaces[2001] = "Board_Thread";
//$wgExtraNamespaces[2002] = "Topic";

//AjaxLogin
/*require_once("$IP/extensions/AjaxLogin/AjaxLogin.php");
$wgEnableAjaxLogin = array(
        'monobook' => true,
        'vector' => true,
		'deepsea' => true,
);*/

// Render pdfs
require_once( "$IP/extensions/PdfHandler/PdfHandler.php" );
$wgPdfProcessor = 'gs';
$wgPdfPostProcessor = 'convert';
$wgPdfInfo = 'pdfinfo';

// More extensions
require_once( "$IP/extensions/GlobalUsage/GlobalUsage.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
	$gcwikis = array( 'meta', 'en', 'customs', 'cuusoo', 'stories', 'dev' );
require_once( "$IP/extensions/GlobalContribs/GlobalContribs.php" );
require_once( "$IP/extensions/MediaWikiChat/MediaWikiChat.php" );
	$gaAccount = "UA-38958899-1";
require_once( "$IP/extensions/googleAnalytics/googleAnalytics.php" );
require_once( "$IP/extensions/NumberOfComments/NumberOfComments.php" );
	$wgGlobalCssJsUrl = 'http://meta.brickimedia.org/index.php';
require_once( "$IP/extensions/GlobalCssJs/GlobalCssJs.php" );

//Global new talk page message alerts
require_once( "$IP/extensions/NewTalkGlobal/NewTalkGlobal.php" );
$newTalkGlobalDatabases = array(
		"meta" => array(
				"db" => "meta",
				"url" => "http://meta.$bmServerBase/wiki/"
		),
		"en" => array(
				"db" => "en",
				"url" => "http://en.$bmServerBase/wiki/"
		),
		"customs" => array(
				"db" => "customs",
				"url" => "http://customs.$bmServerBase/wiki/"
		),
		"cuusoo" => array(
				"db" => "cuusoo",
				"url" => "http://cuusoo.$bmServerBase/wiki/"
		),
		"stories" => array(
				"db" => "stories",
				"url" => "http://stories.$bmServerBase/wiki/"
		),
		"admin" => array(
				"db" => "admin",
				"url" => "http://admin.$bmServerBase/wiki/"
		),
		"dev" => array(
				"db" => "dev",
				"url" => "http://dev.$bmServerBase/wiki/"
		)
);

