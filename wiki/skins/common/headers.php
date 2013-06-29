<?php 	
function addTopElements($out){
	$googlecode = "
		<script type=\"text/javascript\">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-38958899-1']);
			_gaq.push(['_setDomainName', 'brickimedia.org']);
			_gaq.push(['_trackPageview']);
			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>";
	$out->addScript($googlecode);
	
/*
	global $wgRequest, $wgUser, $bmProject;

	$nospecial = $out -> getTitle() != 'Special:Chat';
	$noedit = $wgRequest -> getVal( 'action' ) != 'edit';
	$loggedin = $wgUser -> isLoggedIn();

	if( $nospecial && $noedit && $loggedin ){
		$cometlink = '<link type="text/css" href="/cometchat/cometchatcss.php?project=' . $bmProject . '" rel="stylesheet" charset="utf-8">';
		
		if( false ){
			$out -> addHeadItem( 'cometcss', $cometlink );
		} 
	}*/
}

function addBottomElements($inst){
/*
	global $wgRequest, $wgUser, $bmProject;

	$nospecial = $inst -> getSkin() -> getTitle() != 'Special:Chat';
	$noedit = $wgRequest -> getVal( 'action' ) != 'edit';
	$loggedin = $wgUser -> isLoggedIn();

	if( $nospecial && $noedit && $loggedin ){
		$cometscript = '<script type="text/javascript" src="/cometchat/cometchatjs.php?project=' . $bmProject . '" charset="utf-8"></script>';
	
		if( false ){
			//echo "here?";
			$inst -> data['bottomscripts'] .= $cometscript;
			//echo $inst -> data['bottomscripts'];
		}

	}*/
}
