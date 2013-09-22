<?php
/**
 * Vector
 *
 * @todo document
 * @file
 * @ingroup Skins
 */

if( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

//Ads - from Ajr
require_once(dirname(__FILE__) . '/common/headers.php');

//Testing resources.php here
$wgResourceModules['skins.quartz'] = array(
	'styles' => array(
		"skins/common/commonElements.css" => array( 'media' => 'screen' ),
		"skins/common/commonContent.css" => array( 'media' => 'screen' ),
		"skins/common/commonInterface.css" => array( 'media' => 'screen' ),
		"skins/quartz/screen.css" => array( 'media' => 'screen' ),
		"skins/quartz/player/citrine.css" => array( 'media' => 'screen' )
	),
	'scripts' => array(
		"resources/jquery.effects/jquery.effects.core.js",
		"resources/jquery.effects/jquery.effects.drop.js",
		"skins/quartz/quartz.js",
		"skins/common/foes.js",
		"skins/quartz/player/jquery.jplayer.min.js",
		"skins/quartz/player/jplayer.playlist.min.js",
		"skins/quartz/player/player.js"
	),
	'remoteBasePath' => $GLOBALS['wgStylePath'],
	'localBasePath' => $GLOBALS['wgStyleDirectory']
);

#require_once( "$IP/extensions/Verbatim/verbatim.php" );

/**
 * SkinTemplate class for Vector skin
 * @ingroup Skins
 */
class SkinQuartz extends SkinTemplate {

	var $skinname = 'quartz', $stylename = 'quartz',
		$template = 'QuartzTemplate', $useHeadElement = true;

	/**
	 * Initializes output page and sets up skin-specific parameters
	 * @param $out OutputPage object to initialize
	 */
	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;

		parent::initPage( $out );

		// Append CSS which includes IE only behavior fixes for hover support -
		// this is better than including this in a CSS fille since it doesn't
		// wait for the CSS file to load before fetching the HTC file.
		$min = $this->getRequest()->getFuzzyBool( 'debug' ) ? '' : '.min';
		$out->addHeadItem( 'csshover',
			'<!--[if lt IE 7]><style type="text/css">body{behavior:url("' .
				htmlspecialchars( $wgLocalStylePath ) .
				"/{$this->stylename}/csshover{$min}.htc\")}</style><![endif]-->"
		);
		$out->addModuleScripts( 'skins.quartz' );
		$out->addStyle('quartz/quartz.css', 'screen');

		//from Ultrasonic
		addTopElements($out);
	}

	/**
	 * Load skin and user CSS files in the correct order
	 * fixes bug 22916
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( 'skins.quartz' );
	}
}

/**
 * QuickTemplate class for Vector skin
 * @ingroup Skins
 */
class QuartzTemplate extends BaseTemplate {

	/* Functions */

	/**
	 * Outputs the entire contents of the (X)HTML page
	 */
	public function execute() {
		//also from Ultrasonic
		addBottomElements($this);

		global $wgVectorUseIconWatch;

		// Build additional attributes for navigation urls
		$nav = $this->data['content_navigation'];

		if ( $wgVectorUseIconWatch ) {
			$mode = $this->getSkin()->getTitle()->userIsWatching() ? 'unwatch' : 'watch';
			if ( isset( $nav['actions'][$mode] ) ) {
				$nav['views'][$mode] = $nav['actions'][$mode];
				$nav['views'][$mode]['class'] = rtrim( 'icon ' . $nav['views'][$mode]['class'], ' ' );
				$nav['views'][$mode]['primary'] = true;
				unset( $nav['actions'][$mode] );
			}
		}

		$xmlID = '';
		foreach ( $nav as $section => $links ) {
			foreach ( $links as $key => $link ) {
				if ( $section == 'views' && !( isset( $link['primary'] ) && $link['primary'] ) ) {
					$link['class'] = rtrim( 'collapsible ' . $link['class'], ' ' );
				}

				$xmlID = isset( $link['id'] ) ? $link['id'] : 'ca-' . $xmlID;
				$nav[$section][$key]['attributes'] =
					' id="' . Sanitizer::escapeId( $xmlID ) . '"';
				if ( $link['class'] ) {
					$nav[$section][$key]['attributes'] .=
						' class="' . htmlspecialchars( $link['class'] ) . '"';
					unset( $nav[$section][$key]['class'] );
				}
				if ( isset( $link['tooltiponly'] ) && $link['tooltiponly'] ) {
					$nav[$section][$key]['key'] =
						Linker::tooltip( $xmlID );
				} else {
					$nav[$section][$key]['key'] =
						Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs( $xmlID ) );
				}
			}
		}
		$this->data['namespace_urls'] = $nav['namespaces'];
		$this->data['view_urls'] = $nav['views'];
		$this->data['action_urls'] = $nav['actions'];
		$this->data['variant_urls'] = $nav['variants'];

		// Reverse horizontally rendered navigation elements
		if ( $this->data['rtl'] ) {
			$this->data['view_urls'] =
				array_reverse( $this->data['view_urls'] );
			$this->data['namespace_urls'] =
				array_reverse( $this->data['namespace_urls'] );
			$this->data['personal_urls'] =
				array_reverse( $this->data['personal_urls'] );
		}
		// Output HTML Page
		$this->html( 'headelement' );
?>
		<!-- header -->
		<div id="mw-head" class="noprint">
			<div id="p-interwiki">
				<a href="http://stories.brickimedia.org">Stories</a>
				<ul class="menu">
					<li>
						<a href="http://meta.brickimedia.org">Meta</a>
						<ul class="submenu">
							<li>
								<a href="http://meta.brickimedia.org/wiki/Special:RecentChanges">Recent Changes</a>
							</li>
							<li>
								<a href="http://meta.brickimedia.org/wiki/Special:Mytalk">My Talk</a>
							</li>
							<li>
								<a href="http://meta.brickimedia.org/wiki/Forum:Index">Forums</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://en.brickimedia.org">Brickipedia</a>
						<ul class="submenu">
							<li>
								<a href="http://en.brickimedia.org/wiki/Special:RecentChanges">Recent Changes</a>
							</li>
							<li>
								<a href="http://en.brickimedia.org/wiki/Special:Mytalk">My Talk</a>
							</li>
							<li>
								<a href="http://en.brickimedia.org/wiki/Forum:Index">Forums</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://customs.brickimedia.org">Customs</a>
						<ul class="submenu">
							<li>
								<a href="http://customs.brickimedia.org/wiki/Special:RecentChanges">Recent Changes</a>
							</li>
							<li>
								<a href="http://customs.brickimedia.org/wiki/Special:Mytalk">My Talk</a>
							</li>
							<li>
								<a href="http://customs.brickimedia.org/wiki/Forum:Index">Forums</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="http://cuusoo.brickimedia.org">CUUSOO Wiki</a>
						<ul class="submenu">
							<li>
								<a href="http://cuusoo.brickimedia.org/wiki/Special:RecentChanges">Recent Changes</a>
							</li>
							<li>
								<a href="http://cuusoo.brickimedia.org/wiki/Special:Mytalk">My Talk</a>
							</li>
							<li>
								<a href="http://cuusoo.brickimedia.org/wiki/Forum:Index">Forums</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<?php $this->renderNavigation( 'PERSONAL' ); ?>
			<?php if ( $this->data['sitenotice'] ): ?>
			<!-- sitenotice -->
			<div id="siteNotice"><?php $this->html( 'sitenotice' ) ?></div>
			<!-- /sitenotice -->
			<?php endif; ?>
			<div id="p-handle"></div>
		</div>
		<!-- /header -->
		<!-- content -->
		<div id="content" class="mw-body">
			<a id="top"></a>
			<!-- panel -->
			<div id="mw-panel" class="noprint">
				<div id="left-navigation" class="navigation">
					<div class="ribbon left"></div>
					<ul class="tier-1">
						<li class="tier-1-item">
							<a>Administration</a>
							<span class="return" style="display:none;">›</span>
							<ul class="tier-2">
								<li class="tier-2-item"><a href="/wiki/LEGO_Stories_Wiki:Administrative_Policy">Administrative&nbsp;Policy</a></li>
								<li class="tier-2-item"><a href="/wiki/LEGO_Stories_Wiki:Staff">Staff&nbsp;Members</a></li>
								<li class="tier-2-item"><a href="/wiki/LEGO_Stories_Wiki:Request_Rights">Request&nbsp;User&nbsp;Rights</a></li>
								<li class="tier-2-item">
									<a href="/wiki/Portal:Help">Help&nbsp;Portal</a>
									<ul class="tier-3">
										<li class="tier-3-item"><a href="/wiki/Help:Syntax">Syntax</a></li>
										<li class="tier-3-item"><a href="/wiki/Help:Writing">Writing</a></li>
										<li class="tier-3-item"><a href="/wiki/Help:Emoticons">Emoticons</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="tier-1-item">
							<a>Community</a>
							<span class="return" style="display:none;">›</span>
							<ul class="tier-2">
								<li class="tier-2-item"><a href="/wiki/LEGO_Stories_Wiki:Community_Policy">Community&nbsp;Policy</a></li>
								<li class="tier-2-item"><a href="/wiki/LEGO_Stories_Wiki:Chat_Policy">Chat&nbsp;Policy</a></li>
								<li class="tier-2-item">
									<a href="/wiki/Portal:Community">Community&nbsp;Portal</a>
									<ul class="tier-3">
										<li class="tier-3-item"><a href="/wiki/Portal:LEGO_Universe">LEGO&nbsp;Universe&nbsp;Portal</a></li>
										<li class="tier-3-item"><a href="/wiki/Portal:Ninjago">Ninjago&nbsp;Portal</a></li>
									</ul>
								</li>
								<li class="tier-2-item"><a href="/wiki/Portal:Adoption">Adoption&nbsp;Portal</a></li>
							</ul>
						</li>
						<li class="tier-1-item">
							<a>Content</a>
							<span class="return" style="display:none;">›</span>
						</li>
					</ul>
				</div>
				<!-- logo -->
				<div id="p-logo">
					<a style="background-image: url(<?php $this->text( 'logopath' ) ?>);" href="<?php echo htmlspecialchars( $this->data['nav_urls']['mainpage']['href'] ) ?>" <?php echo Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs( 'p-logo' ) ) ?>></a>
				</div>
				<!-- /logo -->
				<div id="right-navigation" class="navigation">
					<div class="ribbon right"></div>
					<div id="namespaces">
						<?php $this->renderNavigation( array( 'NAMESPACES', 'VARIANTS' ) ); ?>
					</div>
					<div id="actions">
						<?php $this->renderNavigation( array( 'VIEWS', 'ACTIONS' ) ); ?> 
					</div>
					<div id="search">
						<?php $this->renderNavigation( array( 'SEARCH' ) ); ?>
					</div>
				</div>
			</div>
			<!-- /panel -->
			<div id="mw-js-message" style="display:none;"<?php $this->html( 'userlangattributes' ) ?>></div>
			<!-- firstHeading -->
			<h1 id="firstHeading" class="firstHeading">
				<span dir="auto"><?php $this->html( 'title' ) ?></span>
			</h1>
			<!-- /firstHeading -->
			<!-- bodyContent -->
			<div id="bodyContent">
				<?php if ( $this->data['isarticle'] ): ?>
				<!-- tagline -->
				<div id="siteSub"><?php $this->msg( 'tagline' ) ?></div>
				<!-- /tagline -->
				<?php endif; ?>
				<!-- subtitle -->
				<div id="contentSub"<?php $this->html( 'userlangattributes' ) ?>><?php $this->html( 'subtitle' ) ?></div>
				<!-- /subtitle -->
				<?php if ( $this->data['undelete'] ): ?>
				<!-- undelete -->
				<div id="contentSub2"><?php $this->html( 'undelete' ) ?></div>
				<!-- /undelete -->
				<?php endif; ?>
				<?php if( $this->data['newtalk'] ): ?>
				<!-- newtalk -->
				<div class="usermessage"><?php $this->html( 'newtalk' )  ?></div>
				<!-- /newtalk -->
				<?php endif; ?>
				<?php if ( $this->data['showjumplinks'] ): ?>
				<!-- jumpto -->
				<div id="jump-to-nav" class="mw-jump">
					<?php $this->msg( 'jumpto' ) ?> <a href="#mw-head"><?php $this->msg( 'jumptonavigation' ) ?></a>,
					<a href="#p-search"><?php $this->msg( 'jumptosearch' ) ?></a>
				</div>
				<!-- /jumpto -->
				<?php endif; ?>
				<!-- bodycontent -->
				<?php $this->html( 'bodycontent' ) ?>
				<!-- /bodycontent -->
				<?php if ( $this->data['printfooter'] ): ?>
				<!-- printfooter -->
				<div class="printfooter">
				<?php $this->html( 'printfooter' ); ?>
				</div>
				<!-- /printfooter -->
				<?php endif; ?>
				<?php if ( $this->data['catlinks'] ): ?>
				<!-- catlinks -->
				<?php $this->html( 'catlinks' ); ?>
				<!-- /catlinks -->
				<?php endif; ?>
				<?php if ( $this->data['dataAfterContent'] ): ?>
				<!-- dataAfterContent -->
				<?php $this->html( 'dataAfterContent' ); ?>
				<!-- /dataAfterContent -->
				<?php endif; ?>
				<div class="visualClear"></div>
				<!-- debughtml -->
				<?php $this->html( 'debughtml' ); ?>
				<!-- /debughtml -->
			</div>
			<!-- /bodyContent -->
		</div>
		<!-- /content -->
		<div id="p-utilities">
			<span>Utilities</span>
			<ul class="menu">
				<li><a href="/wiki/Special:RecentChanges">Recent Changes</a></li>
				<li><a href="/wiki/Special:Random">Random Page</a></li>
				<li><a href="/wiki/Special:RandomWiki">Random Wiki</a></li>
				<li><a href="/wiki/Special:NewFiles">New Files</a></li>
				<li><a href="/wiki/Special:ViewRelationshipRequests">Friend Requests</a></li>
				<li><a href="/wiki/Special:UserBoard">Messages</a></li>
				<li><a href="/wiki/Special:TopUsers">Leaderboard</a></li>
				<li><a href="/wiki/Special:ArticlesHome">Blog Homepage</a></li>
				<li><a href="/wiki/Special:CreateBlogPost">Create Blog Post</a></li>
				<li><a href="/wiki/Special:Chat">Chat</a></li>
			</ul>
		</div>
		<!-- footer -->
		<div id="footer"<?php $this->html( 'userlangattributes' ) ?>>
			<?php foreach( $this->getFooterLinks() as $category => $links ): ?>
				<ul id="footer-<?php echo $category ?>">
					<?php foreach( $links as $link ): ?>
						<li id="footer-<?php echo $category ?>-<?php echo $link ?>"><?php $this->html( $link ) ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endforeach; ?>
			<?php $footericons = $this->getFooterIcons("icononly");
			if ( count( $footericons ) > 0 ): ?>
				<ul id="footer-icons" class="noprint">
<?php			foreach ( $footericons as $blockName => $footerIcons ): ?>
					<li id="footer-<?php echo htmlspecialchars( $blockName ); ?>ico">
<?php				foreach ( $footerIcons as $icon ): ?>
						<?php echo $this->getSkin()->makeFooterIcon( $icon ); ?>

<?php				endforeach; ?>
					</li>
<?php			endforeach; ?>
				</ul>
			<?php endif; ?>
			<div style="clear:both"></div>
		</div>
		<!-- /footer -->
		<?php $this->printTrail(); ?>

	</body>
</html>
<?php
	}

	/**
	 * Render a series of portals
	 *
	 * @param $portals array
	 */
	private function renderPortals( $portals ) {
		// Force the rendering of the following portals
		if ( !isset( $portals['SEARCH'] ) ) {
			$portals['SEARCH'] = true;
		}
		if ( !isset( $portals['TOOLBOX'] ) ) {
			$portals['TOOLBOX'] = true;
		}
		if ( !isset( $portals['LANGUAGES'] ) ) {
			$portals['LANGUAGES'] = true;
		}
		// Render portals
		foreach ( $portals as $name => $content ) {
			if ( $content === false )
				continue;

			echo "\n<!-- {$name} -->\n";
			switch( $name ) {
				case 'SEARCH':
					break;
				case 'TOOLBOX':
					$this->renderPortal( 'tb', $this->getToolbox(), 'toolbox', 'SkinTemplateToolboxEnd' );
					break;
				case 'LANGUAGES':
					if ( $this->data['language_urls'] ) {
						$this->renderPortal( 'lang', $this->data['language_urls'], 'otherlanguages' );
					}
					break;
				default:
					$this->renderPortal( $name, $content );
				break;
			}
			echo "\n<!-- /{$name} -->\n";
		}
	}

	private function renderPortal( $name, $content, $msg = null, $hook = null ) {
		if ( $msg === null ) {
			$msg = $name;
		}
		?>
<div class="portal" id='<?php echo Sanitizer::escapeId( "p-$name" ) ?>'<?php echo Linker::tooltip( 'p-' . $name ) ?>>
	<h5<?php $this->html( 'userlangattributes' ) ?>><?php $msgObj = wfMessage( $msg ); echo htmlspecialchars( $msgObj->exists() ? $msgObj->text() : $msg ); ?></h5>
	<div class="body">
<?php
		if ( is_array( $content ) ): ?>
		<ul>
<?php
			foreach( $content as $key => $val ): ?>
			<?php echo $this->makeListItem( $key, $val ); ?>

<?php
			endforeach;
			if ( $hook !== null ) {
				wfRunHooks( $hook, array( &$this, true ) );
			}
			?>
		</ul>
<?php
		else: ?>
		<?php echo $content; /* Allow raw HTML block to be defined by extensions */ ?>
<?php
		endif; ?>
	</div>
</div>
<?php
	}

	/**
	 * Render one or more navigations elements by name, automatically reveresed
	 * when UI is in RTL mode
	 *
	 * @param $elements array
	 */
	private function renderNavigation( $elements ) {
		global $wgVectorUseSimpleSearch;

		// If only one element was given, wrap it in an array, allowing more
		// flexible arguments
		if ( !is_array( $elements ) ) {
			$elements = array( $elements );
		// If there's a series of elements, reverse them when in RTL mode
		} elseif ( $this->data['rtl'] ) {
			$elements = array_reverse( $elements );
		}
		// Render elements
		foreach ( $elements as $name => $element ) {
			echo "\n<!-- {$name} -->\n";
			switch ( $element ) {
				case 'NAMESPACES':
?>
<div id="p-namespaces" class="vectorTabs<?php if ( count( $this->data['namespace_urls'] ) == 0 ) echo ' emptyPortlet'; ?>">
	<h5><?php $this->msg( 'namespaces' ) ?></h5>
	<ul<?php $this->html( 'userlangattributes' ) ?>>
		<?php foreach ( $this->data['namespace_urls'] as $link ): ?>
			<li <?php echo $link['attributes'] ?>><span><a href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><?php echo htmlspecialchars( $link['text'] ) ?></a></span></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php
				break;
				case 'VARIANTS':
?>
<div id="p-variants" class="vectorMenu<?php if ( count( $this->data['variant_urls'] ) == 0 ) echo ' emptyPortlet'; ?>">
	<h4>
	<?php foreach ( $this->data['variant_urls'] as $link ): ?>
		<?php if ( stripos( $link['attributes'], 'selected' ) !== false ): ?>
			<?php echo htmlspecialchars( $link['text'] ) ?>
		<?php endif; ?>
	<?php endforeach; ?>
	</h4>
	<h5><span><?php $this->msg( 'variants' ) ?></span><a href="#"></a></h5>
	<div class="menu">
		<ul<?php $this->html( 'userlangattributes' ) ?>>
			<?php foreach ( $this->data['variant_urls'] as $link ): ?>
				<li<?php echo $link['attributes'] ?>><a href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><?php echo htmlspecialchars( $link['text'] ) ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php
				break;
				case 'VIEWS':
?>
<div id="p-views" class="vectorTabs<?php if ( count( $this->data['view_urls'] ) == 0 ) { echo ' emptyPortlet'; } ?>">
	<h5><?php $this->msg('views') ?></h5>
	<ul<?php $this->html('userlangattributes') ?>>
		<?php foreach ( $this->data['view_urls'] as $link ): ?>
			<li<?php echo $link['attributes'] ?>><span><a href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><?php
				// $link['text'] can be undefined - bug 27764
				if ( array_key_exists( 'text', $link ) ) {
					echo array_key_exists( 'img', $link ) ?  '<img src="' . $link['img'] . '" alt="' . $link['text'] . '" />' : htmlspecialchars( $link['text'] );
				}
				?></a></span></li>
		<?php endforeach; ?>
	</ul>
</div>
<?php
				break;
				case 'ACTIONS':
?>
<div id="p-cactions" class="vectorMenu<?php if ( count( $this->data['action_urls'] ) == 0 ) echo ' emptyPortlet'; ?>">
	<h5><span><?php $this->msg( 'actions' ) ?></span><a href="#"></a></h5>
	<div class="menu">
		<ul<?php $this->html( 'userlangattributes' ) ?>>
			<?php foreach ( $this->data['action_urls'] as $link ): ?>
				<li<?php echo $link['attributes'] ?>><a href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><?php echo htmlspecialchars( $link['text'] ) ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
<?php
				break;
				case 'PERSONAL':
?>
<div id="p-personal" class="<?php if ( count( $this->data['personal_urls'] ) == 0 ) echo ' emptyPortlet'; ?>">
	<h5><?php $this->msg( 'personaltools' ) ?></h5>
	<ul<?php $this->html( 'userlangattributes' ) ?>>
<?php			foreach( $this->getPersonalTools() as $key => $item ) { ?>
		<?php echo $this->makeListItem( $key, $item ); ?>

<?php			} ?>
	</ul>
</div>
<?php
				break;
				case 'SEARCH':
?>
<div id="p-search">
	<h5<?php $this->html( 'userlangattributes' ) ?>><label for="searchInput"><?php $this->msg( 'search' ) ?></label></h5>
	<form action="<?php $this->text( 'wgScript' ) ?>" id="searchform">
		<?php if ( $wgVectorUseSimpleSearch && $this->getSkin()->getUser()->getOption( 'vector-simplesearch' ) ): ?>
		<div id="simpleSearch">
			<?php if ( $this->data['rtl'] ): ?>
			<?php echo $this->makeSearchButton( 'image', array( 'id' => 'searchButton', 'src' => $this->getSkin()->getSkinStylePath( 'images/search-rtl.png' ) ) ); ?>
			<?php endif; ?>
			<?php echo $this->makeSearchInput( array( 'id' => 'searchInput', 'type' => 'text' ) ); ?>
			<?php if ( !$this->data['rtl'] ): ?>
			<?php echo $this->makeSearchButton( 'image', array( 'id' => 'searchButton', 'src' => $this->getSkin()->getSkinStylePath( 'images/search-ltr.png' ) ) ); ?>
			<?php endif; ?>
		<?php else: ?>
		<div>
			<?php echo $this->makeSearchInput( array( 'id' => 'searchInput' ) ); ?>
			<?php echo $this->makeSearchButton( 'go', array( 'id' => 'searchGoButton', 'class' => 'searchButton' ) ); ?>
			<?php echo $this->makeSearchButton( 'fulltext', array( 'id' => 'mw-searchButton', 'class' => 'searchButton' ) ); ?>
		<?php endif; ?>
			<input type='hidden' name="title" value="<?php $this->text( 'searchtitle' ) ?>"/>
		</div>
	</form>
</div>
<?php

				break;
			}
			echo "\n<!-- /{$name} -->\n";
		}
	}
}
