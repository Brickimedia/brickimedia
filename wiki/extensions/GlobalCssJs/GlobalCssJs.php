<?php
/**
* Global CSS/JS loader by Ryan Schmidt
* Put global site CSS/JS in the "central" wiki's MediaWiki:Global.css and MediaWiki:Global.js respectively
* Put global user CSS/JS in the "central" wiki's User:Yourname/global.css and User:Yourname/global.js respectively
* See http://www.mediawiki.org/wiki/Extension:GlobalCssJs
*/
 
if(!defined('MEDIAWIKI')) {
    echo("This is an extension to the MediaWiki software and cannot be used standalone");
    die(1);
}
 
$wgExtensionCredits['other'][] = array(
	'name' => 'Global CSS/JS',
	'author' => 'Ryan Schmidt',
	'version' => '2.0.1',
	'url' => 'http://www.mediawiki.org/wiki/Extension:GlobalCssJs',
	'description' => 'Allows global CSS and JS on a "central" wiki to be loaded for all wikis in the farm',
);

$wgExtensionMessagesFiles[] = __DIR__ . '/GlobalCssJs.i18n.php';

$wgHooks['BeforePageDisplay'][] = 'wfGlobalCssJs';
$wgHooks['GetPreferences'][] = 'globalCssJsPrefHook';

function wfGlobalCssJs(&$out) {
    global $wgGlobalCssJsUrl, $wgUser, $wgAllowUserCss, $wgAllowUserJs, $wgJsMimeType, $wgUseSiteCss, $wgUseSiteJs;
    if( !isset($wgGlobalCssJsUrl) || !$wgUser->isLoggedIn() )
            return true;
    $name = urlencode($wgUser->getName());
    $url = $wgGlobalCssJsUrl; // just makes the lines shorter, nothing more.
    
    if($wgUseSiteCss)
        $out->addScript('<style type="text/css">/*<![CDATA[*/ @import "' . $url . '?title=MediaWiki:Global.css&action=raw&ctype=text/css";/*]]>*/</style>' . "\n");
    if($wgUseSiteJs)
        $out->addScript('<script type="' . $wgJsMimeType . '" src="' . $url . '?title=MediaWiki:Global.js&action=raw&ctype=' . $wgJsMimeType . '&dontcountme=s"></script>' . "\n");
    if($wgAllowUserCss)
        $out->addScript('<style type="text/css">/*<![CDATA[*/ @import "' . $url . '?title=User:' . $name . '/global.css&action=raw&ctype=text/css"; /*]]>*/</style>' . "\n");
    if($wgAllowUserJs)
        $out->addScript('<script type="' . $wgJsMimeType . '" src="' . $url . '?title=User:' . $name . '/global.js&action=raw&ctype=' . $wgJsMimeType . '&dontcountme=s"></script>' . "\n");
    return true;
}
 
function globalCssJsPrefHook( $user, &$preferences ) {
	global $wgGlobalCssJsUrl, $wgUser, $wgAllowUserCss, $wgAllowUserJs;
	
    $name = urlencode($wgUser->getName());
	
    $list = array();
	if ( $wgAllowUserCss ) {
		$attrs = array( 'href' => "$wgGlobalCssJsUrl?title=User:$name/global.css" );
		$list[] = HTML::element( 'a', array(), wfMessage( 'prefs-global-css' )->escaped() );
	}
	if ( $wgAllowUserJs ) {
		$attrs = array( 'href' => "$wgGlobalCssJsUrl?title=User:$name/global.js" );
		$list[] = HTML::element( 'a', array(), wfMessage( 'prefs-global-js' )->escaped() );
	}
	
	if( count( $list ) ) {
		$string = implode(
			wfMessage( 'pipe-separator' )->escaped(),
			$list
		);
		$preferences['globalcssjs'] = array(
			'type' => 'info',
			'raw' => true,
			'label-message' => 'prefs-global-css-js', // a system message
			'section' => 'rendering/skin',
			'default' => $string
		);
	}
 
	return true;
}