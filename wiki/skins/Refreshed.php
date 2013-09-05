<?php
require_once( dirname( dirname( __FILE__ ) ) . '/includes/SkinTemplate.php');

//FORCE TOC
$wgHooks['InternalParseBeforeLinks'][] = 'ForceTocOnEveryPage_renderForceToc';
function ForceTocOnEveryPage_renderForceToc( &$parser, &$text ) {
	global $mediaWiki;
	if( !isset($mediaWiki) ) return true;
	if( $parser->getTitle()->getNamespace() != 0 ) return true;
	if( $parser->getTitle()->equals(Title::newMainPage()) ) return true;
	$text .= "__FORCETOC__";
	return true;
}
$wgExtensionCredits['parserhook'][] = array(
		'name' => 'ForceTocOnEveryPage',
		'version' => '1.0.4',
		'description' => 'Force TOC On Every Page Extension',
		'author' => '[http://www.jmkim.com Jmkim dot com]',
		'url' => 'https://www.mediawiki.org/wiki/Extension:ForceTocOnEveryPage'
);

global $IP;

$wgResourceModules['skins.refreshed'] = array(
		'styles' => array(
				//"$IP/skins/common/commonElements.css" => array( 'media' => 'screen' ),
				"$IP/skins/common/commonContent.css" => array( 'media' => 'screen' ),
				//"$IP/skins/common/commonInterface.css" => array( 'media' => 'screen' ),
				"$IP/skins/refreshed/main.css" => array( 'media' => 'screen' ),
		),
		'scripts' => array(
				"$IP/skins/refreshed/refreshed.js",
				//"$IP/skins/common/foes.js"
		),
		'remoteBasePath' => $GLOBALS['wgStylePath'],
		'localBasePath' => $GLOBALS['wgStyleDirectory']
);



// inherit main code from SkinTemplate, set the CSS and template filter
class SkinRefreshed extends SkinTemplate {
	var $useHeadElement = true;

	function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$this->skinname  = 'refreshed';
		$this->stylename = 'refreshed';
		$this->template  = 'RefreshedTemplate';

		//$out->addModules( 'skins.refrehsed' );
		$out->addModuleScripts( 'skins.refreshed' );

		//$out->addScriptFile( "../refreshed/refreshed.js" );
		//$out->addScriptFile( "http://adams-site.x10.mx/nxtest/load.php?debug=false&lang=en&modules=skins.refreshed&only=scripts&skin=deepsea&*" );
	}
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		// Append to the default screen common & print styles...
		//$out->addStyle( 'refreshed/main.css', 'screen' );

		$out->addModuleStyles( 'skins.refreshed' );
	}
}

class RefreshedTemplate extends BaseTemplate {

	public function execute() {
		global $wgRequest, $refreshedTOC;

		$skin = $this->data['skin'];

		// suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();

		$this->html( 'headelement' );

		//TOC processing
		$allHTML = $this -> data['bodycontent'];
		$parts = explode( '<table id="toc"', $allHTML, 2 );
		$HTMLbefore = $parts[0];
		$restHTML = $parts[1];
		$parts = explode( '</table>', $restHTML, 2 );
		$toc = $parts[0];
		$HTMLafter = $parts[1];
		$this -> data['bodytext'] = $HTMLbefore . $HTMLafter;

		$tocparts = explode( "<ul>", $toc, 2 );
		$tocHTML = $tocparts[1];
		//$tocHTML = preg_replace( '|<li class="toclevel-[0-9] tocsection-[0-9]+">(.+)<\/li>|', '$1', $tocHTML );
		//echo "<!--";
		//echo preg_match_all( '/<li(.+?)>(.+?)<\/li>/s', $tocHTML, $matches);
		//print_r( $matches );
		//echo "-->";
		
		//Title processing
		$myTitle = $this->data['titletext'];
		$myTitle = str_replace( '/', '<wbr>/<wbr>', $myTitle );
?>

	<div id="header">
		<div id="userinfo">
			<a href='javascript:;'>
				<?php global $wgUser, $wgArticlePath;
					echo "<span>$wgUser</span>";
				?>
			</a>
			<ul class="headermenu" style="display:none;">
				<?php 
					foreach( $this->getPersonalTools() as $key => $tool ){
						foreach ( $tool['links'] as $linkKey => $link ) {
							echo $this->makeLink( $linkKey, $link, $options );
						}
					}
				?>
			</ul>
			<img class="avatar" />
			<?php //var_dump( $this->getPersonalTools() ); ?>
		</div>
		<div id="siteinfo">
			<a href='javascript:;'>
				<?php  echo "<img src='$IP/skins/refreshed/brickimedia.png' />" ?>
			</a>
			<ul class="headermenu" style="display:none;">
				<a href='http://meta.brickimedia.org'>
					<?php  echo "<img src='$IP/skins/refreshed/brickimedia.png' />" ?>
				</a>
				<a href='http://en.brickimedia.org'>
					<?php  echo "<img src='$IP/skins/refreshed/brickipediaINK.png' />" ?>
				</a>
				<a href='http://customs.brickimedia.org'>
					<?php  echo "<img src='$IP/skins/refreshed/customsINK.png' />" ?>
				</a>
				<a href='http://stories.brickimedia.org'>
					<?php  echo "<img src='$IP/skins/refreshed/LSWRefreshedLogo.png' />" ?>
				</a>
				<a href='http://cuusoo.brickimedia.org'>
					<?php  echo "<img src='$IP/skins/refreshed/cuusooink.png' />" ?>
				</a>
			</ul>
		</div>
		<div id="search">
			<form action="/index.php" method="GET">
				<input type="text" name="search" placeholder="search" />
			</form>
		</div>
	</div>
	<div id="fullwrapper">
		<div id="leftbar">
			<div id="leftbar-top">
				<div id="maintitle2">
					<?php echo $myTitle; ?>
				</div>
				<div id="pagelinks">
					<?php foreach ( $this->data['content_actions'] as $action ){
				 		echo "<a class='" . $action['class'] . "' " .
				 			"id='" . $action['id'] . "' " .
				 			"href='" . htmlspecialchars( $action['href'] ) . "'>" . 
				 			htmlspecialchars( $action['text'] ) . "</a>";
					} ?>
				</div>
			</div>
			<div id="leftbar-bottom">
				<div id="refreshed-toc">
					<div id="toc-box"></div>
					<?php echo $tocHTML; ?>
				</div>
			</div>
		</div>
		<div id="contentwrapper">
			<div id="content">
				<?php $this->html('bodytext') ?>
			</div>
		</div>
		<div id="rightbar">
			<div id="rightbar-top">
				<div id="siteactions">
					<?php foreach ( $this->data['sidebar']['top'] as $action ){
				 		echo "<a id='" . $action['id'] . "' " .
				 			"href='" . htmlspecialchars( $action['href'] ) . "'>" . 
				 			htmlspecialchars( $action['text'] ) . "</a>";
					} ?>
				</div>
			</div>
			<div id="rightbar-bottom">
				<div id="sitelinks">
					<?php foreach ( $this->data['sidebar']['bottom'] as $action ){
				 		echo "<a id='" . $action['id'] . "' " .
				 			"href='" . htmlspecialchars( $action['href'] ) . "'>" . 
				 			htmlspecialchars( $action['text'] ) . "</a>";
					} ?>
				</div>
			</div>
		</div>
	</div>
	<div style="display:none;"> <?php //var_dump( $this ); ?> </div>
	<?php $this->html('bottomscripts');;?>
		
		
		
<?php 		
	}
}