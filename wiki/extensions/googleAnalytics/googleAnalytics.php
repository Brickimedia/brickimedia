<?php
if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This file is a MediaWiki extension, it is not a valid entry point' );
}

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'Google Analytics Integration',
	'version'        => '2.0.2',
	'author'         => 'Tim Laqua',
	'descriptionmsg' => 'googleanalytics-desc',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:Google_Analytics_Integration',
);

$wgExtensionMessagesFiles['googleAnalytics'] = dirname(__FILE__) . '/googleAnalytics.i18n.php';

$wgHooks['SkinAfterBottomScripts'][]  = 'efGoogleAnalyticsHookText';
$wgHooks['ParserAfterTidy'][] = 'efGoogleAnalyticsASAC';

$wgGoogleAnalyticsAccount = $gaAccount;
$wgGoogleAnalyticsIgnoreSysops = false;
$wgGoogleAnalyticsIgnoreBots = true;
$wgGoogleAnalyticsAddASAC = false;

function efGoogleAnalyticsASAC( &$parser, &$text ) {
	global $wgOut, $wgGoogleAnalyticsAccount, $wgGoogleAnalyticsAddASAC;

	if( !empty($wgGoogleAnalyticsAccount) && $wgGoogleAnalyticsAddASAC ) {
		$wgOut->addScript('<script type="text/javascript">window.google_analytics_uacct = "' . $wgGoogleAnalyticsAccount . '";</script>');
	}

	return true;
}

function efGoogleAnalyticsHookText( $skin, &$text='' ) {
	$text .= efAddGoogleAnalytics();
	return true;
}

function efAddGoogleAnalytics() {
	global $wgGoogleAnalyticsAccount, $wgGoogleAnalyticsIgnoreSysops, $wgGoogleAnalyticsIgnoreBots, $wgUser;
	if ( $wgUser->isAllowed( 'bot' ) && $wgGoogleAnalyticsIgnoreBots ) {
		return "\n<!-- Google Analytics tracking is disabled for bots -->";
	}

	if ( $wgUser->isAllowed( 'protect' ) && $wgGoogleAnalyticsIgnoreSysops ) {
		return "\n<!-- Google Analytics tracking is disabled for users with 'protect' rights (I.E. sysops) -->";
	}

	if ( $wgGoogleAnalyticsAccount === '' ) {
		return "\n<!-- Set \$wgGoogleAnalyticsAccount to your account # provided by Google Analytics. -->";
	}

	return <<<HTML
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '{$wgGoogleAnalyticsAccount}']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
HTML;
}

///Alias for efAddGoogleAnalytics - backwards compatibility.
function addGoogleAnalytics() { return efAddGoogleAnalytics(); }
