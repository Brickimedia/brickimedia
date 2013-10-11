<?php
/**
 * Custard skin
 *
 * @file
 * @ingroup Skins
 * @author  Christopher Lazzaro <maestro35@outlook.com>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 * @version 1.0
 */

if ( !defined('MEDIAWIKI') ) {
    die( -1 );
}

$wgValidSkinNames['custard'] = 'Custard';
//$wgAutoloadClasses['SkinCustard'] = dirname(__FILE__).'/Custard.skin.php';
//$wgExtensionMessagesFiles['Custard'] = dirname(__FILE__).'/Custard.i18n.php';

global $IP;

$wgResourceModules['skins.custard'] = array(
    'styles' => array(
        "$IP/skins/custard/CSS/custard.css" => array( 'media' => 'screen' ),
    ),
    'scripts' => array(
        "$IP/resources/jquery/jquery.funcToggle.js",
        "$IP/skins/custard/JS/custard.js",
    ),
    'remoteBasePath' => $GLOBALS['wgStylePath'],
    'localBasePath' => $GLOBALS['wgStyleDirectory'],
    'position' => 'top'
);

/**
 * New tab-generation function
 *
function generateTab($href, $text)
{
    echo '<li><a href="'.$href.'">'.$text.'</a><span class="invert"></span></li>';
}

function isWatchable()
{
    if (!$wgTitle -> isWatchable()) {
        echo "disabled";
    }
}

function isWatching()
{
    if ($wgTitle -> userIsWatching($this->data["title"])) {
        echo "class='watching'";
    }
}*/

/**
 * Skin file for skin My Skin.
 *
 * @file
 * @ingroup Skins
 */

/**
 * SkinTemplate class for Custard skin
 *
 * @ingroup Skins
 */
class SkinCustard extends SkinTemplate
{
    var $skinname = 'custard', $stylename = 'custard', $template = 'CustardTemplate', $useHeadElement = true;
    /**
     *
     * @param $out OutputPage object
     */
    function setupSkinUserCss(OutputPage $out)
    {
        parent::setupSkinUserCss($out);
        $out->addModuleStyles("skins.custard");     // ResourceModules styles
        $out->addModuleScripts("skins.custard");    // ResourceModules scripts
    }

}

/**
 * BaseTemplate class for My Skin skin
 *
 * @ingroup Skins
 */
class CustardTemplate extends BaseTemplate
{
    /**
     * Outputs the entire contents of the page
     */
    public function execute()
    {
        global $wgTitle;
        global $wgUser;

        function generateTab($href, $text)
        {
            echo '<li><a href="'.$href.'">'.$text.'</a><span class="invert"></span></li>';
        }

        /*function checkWatch($href, $scope)
        {
            if ($wgTitle -> isWatchable()) {
                if ($wgTitle -> userIsWatching($this->data["title"]) && $scope == 'selector') {
                    echo "watching";
                } else if ($wgTitle -> userIsWatching($this->data["title"]) && $scope == 'action') {
                    echo " href='?action=unwatch'";
                } else if (!$wgTitle -> userIsWatching($this->data["title"]) && $scope == 'action') {
                    echo " href='?action=watch'";
                }
            } else {
                if ($scope == 'selector') {
                    echo "disabled";
                }
            }
        }*/

        // Suppress warnings to prevent notices about missing indexes in $this->data
        wfSuppressWarnings();
        $this->html('headelement'); ?>
		<?php
        if ( $this->data['username'] == 'ShermanTheMythran' || $this->data['username'] == 'SirComputer' || $this->data['username'] == 'ToaMeiko' ) { //temp whitelisting - until skin is properly functional ?>
            <div id="taskbar">
                <div class="toggle">
                    <span class="text">≡</span>
                    <span class="invert"></span>
                </div>
                <div id="mw-js-message" class="message notice" style="display:none;"></div>
                <?php
            if ( $this->data['sitenotice'] ) { ?>
                    <div id="site-notice" class="notice">
                        <?php $this->html('sitenotice'); ?>
                    </div>
                <?php
            } ?>
                <?php
            if ( $this->data['newtalk'] ) { ?>
                <div id="new-talk" class="message notice">
                    <?php $this->html('newtalk'); ?>
                </div>
                <?php
            } ?>
                <div id="actions">
                    <div class="user module medium">User</div>
                    <div class="navigation module medium">Links</div>
                    <div class="search module wide">Search</div>
                    <div class="level module medium">Level</div>
                    <div class="chat module medium">Chat</div>
                    <div class="watch module narrow <?php
            if ($wgTitle -> isWatchable()) {
                if ($wgTitle -> userIsWatching($this->data["title"])) {
                    echo "watching";
                }
            } else {
                echo "disabled";
            } ?>" title="Watch">
                        <a<?php
            if ($wgTitle -> isWatchable()) {
                if ($wgTitle -> userIsWatching($this->data["title"])) {
                    echo " href='?action=unwatch'";
                } else {
                    echo " href='?action=watch'";
                }
            } ?>>
                            <svg class="eye" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                <!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->
                                <g>
                                    <path fill="none" stroke="#BBB" stroke-width="2" stroke-dasharray="null" d="m1.55,10c0,-0.00331 3.78149,-4.35 8.45,-4.35c4.66851,0 8.450001,4.34669 8.450001,4.35c0,0.00331 -3.78149,4.35 -8.450001,4.35c-4.66851,0 -8.45,-4.34669 -8.45,-4.35z" id="svg_1"/>
                                    <circle fill="#BBB" stroke="#3d9ec8" stroke-dasharray="null" cx="10" cy="10" r="2.5" id="svg_2"/>
                                </g>
                            </svg>
                            <!--[if lte IE 8]>
                                <?php echo "<object data='$IP/skins/custard/Images/eye.svg' type='image/svg+xml' class='eye'></object>"; ?>
                            <![endif]-->
                        </a>
                    </div>
                    <div class="preferences module narrow">
                        <a href="/wiki/Special:Preferences" title="Preferences">
                            <svg class="gear" width="20" height="20" xmlns="http://www.w3.org/2000/svg">
                                <!-- Created with SVG-edit - http://svg-edit.googlecode.com/ -->
                                <g>
                                    <g id="svg_13">
                                        <ellipse stroke="#bbbbbb" fill-opacity="0" ry="5" rx="5" id="svg_17" cy="10" cx="10" stroke-width="4" fill="#000000"/>
                                        <g id="svg_3">
                                            <circle stroke="#bbbbbb" id="svg_30" r="1" cy="3.5" cx="10" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle stroke="#bbbbbb" id="svg_32" r="1" cy="10" cx="16.5" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle stroke="#bbbbbb" id="svg_33" r="1" cy="10" cx="3.5" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle stroke="#bbbbbb" id="svg_34" r="1" cy="16.5" cx="10" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                        </g>
                                        <g id="svg_8" transform="rotate(45 10 10)">
                                            <circle id="svg_9" stroke="#bbbbbb" r="1" cy="3.5" cx="10" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle id="svg_10" stroke="#bbbbbb" r="1" cy="10" cx="16.5" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle id="svg_11" stroke="#bbbbbb" r="1" cy="10" cx="3.5" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                            <circle id="svg_12" stroke="#bbbbbb" r="1" cy="16.5" cx="10" fill-opacity="0" stroke-dasharray="null" stroke-width="2.5" fill="none"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <!--[if lte IE 8]>
                                <?php echo "<object data='$IP/skins/custard/Images/gear.svg' type='image/svg+xml' class='gear'></object>"; ?>
                            <![endif]-->
                        </a>
                    </div>
                </div>
            </div>

            <div id="interwiki">
                <div class="left">
                    <div class="shell">
                        <a href="#meta">Meta</a>
                        <a href="#pedia">Pedia</a>
                        <a href="#customs">Customs
                            <div><span class="invert"></span></div>
                        </a>
                    </div>
                </div>
                <div class="mid">
                    <a href="#main">Brickimedia</a>
                </div>
                <div class="right">
                    <div class="shell">
                        <a href="#stories">Stories
                            <div><span class="invert"></span></div>
                        </a>
                        <a href="#cuusoo">CUUSOO</a>
                        <a href="#dev">Dev</a>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
				
            <div id="page">
                <div id="tabs">
                    <ul class="top">
                        <?php
                            $isEditable = $wgTitle -> userCan('edit');
                            generateTab('#read', 'Read');
            if ( $isEditable ) {
                if ( $wgUser -> isAllowed('edit') ) {
                    generateTab('#edit', 'Edit');
                } else {
                    generateTab('#edit', 'View Source');
                }
                    generateTab('#history', 'History');
                if ( $wgUser -> isAllowed('move') ) {
                    generateTab('#move', 'Rename');
                }
                if ( $wgUser -> isAllowed('delete') ) {
                    generateTab('#delete', 'Delete');
                }
            }
                        ?>
                    </ul>
                    <ul class="left">
                        <?php
                        $canTalk = $wgTitle -> canTalk();
                        $getNsText = $wgTitle -> getNsText();
                        $getNamespace = $wgTitle -> getNamespace();
            if ( $canTalk == 1 ) {
                generateTab('#talk', 'Talk');
            }
            if ( $getNamespace == 0 ) {
                generateTab('#page', 'Page');
            } else {
                generateTab('#page', $getNsText.' Page');
            }
                        ?>
                    </ul>
                </div>
                <h1 id="header">
                    <?php $this->html('title'); ?>
                </h1>
                <?php
            if ( $this->data['subtitle'] ) { ?>
                    <div class="sub-header">
                        <?php $this->html('subtitle'); ?>
                    </div>
                <?php 
            }
            if ( $this->data['undelete'] ) { ?>
                    <div id="sub-header">
                        <?php $this->html('undelete'); ?>
                    </div>
                    <?php
            } ?>
                    <div id="content">
                        <?php $this->html('bodytext') ?>
                    </div>
                <?php $this->html('catlinks');
                $this->printTrail(); ?>
            </div>
        <?php
        } else {
<div id="temp">
    <div class="loader">
        <div class="wrap">
            <?php
                echo "<img src='$IP/skins/custard/Images/loading.gif?action=purge' /><br/>p&nbsp;l&nbsp;e&nbsp;a&nbsp;s&nbsp;e&nbsp;&nbsp;&nbsp;w&nbsp;a&nbsp;i&nbsp;t&nbsp;.&nbsp;.&nbsp;.";
            ?>
        </div>
    </div>
    <div class="infobar">
        <div class="tag">not yet, but soon...</div>
        <div class="info">
            <h2>What is Custard?</h2>
            <p>Custard is a wiki skin designed exclusively for Brickimedia, aiming to make the wiki experience as simple, clean, and streamlined as possible.</p>
            <h2>Why is it called that?</h2>
            <p>The name needed to reflect the style and feel of the concept, and the best way to do that seemed to be to choose something that was very smooth and creamy.</p>
            <h2>Who is making the skin?</h2>
            <p>Development of the skin is headed by maestro35 (aka ShermanTheMythran), but feedback from others is always welcome!</p>
            <h2>How can I view the skin?</h2>
            <p>Currently, it is whitelisted (only a select few can see it), because it is generally unstable; however, it will open to a closed beta group in the near future, in which stage it will remain until it is ready for release. Stay tuned to find out how to apply for closed beta!</p>
            <h2>What makes it so special?</h2>
            <p>Custard is being designed to feel like a contained system, meaning it will seem like an app unto itself. As conceptualized, the interface will be minimalistic, navigation will be efficient, and you will be able to access anything from anywhere at any time.</p>
            <h2>When will I be able to see it?</h2>
            <p>There are currently no set dates for stages of development, but you can keep tabs on the <a href="https://github.com/Brickimedia/brickimedia/blob/master/wiki/skins/custard/todo.txt">ToDo list</a>. Major updates will also be posted here.</p>
            <br/>
            <i>If you have any further incquiries concerning Custard, you can always leave a message on <a href="http://meta.brickimedia.org/wiki/User_talk:ShermanTheMythran">my talk page</a>. Thanks! ~Sherm</i>
            <br/>
            <div class="return">
                <a href="http://meta.brickimedia.org/wiki/Main_Page?useskin=refreshed">return to Meta</a>
            </div>
        </div>
    </div>
</div>
        } ?>
        </body>
        </html>
	    <?php wfRestoreWarnings();
    }
} ?>
