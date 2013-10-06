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
 */
function generateTab($href, $text)
{
    echo '<li><a href="'.$href.'">'.$text.'</a><span class="invert"></span></li>';
}

/**
 * Skin file for skin My Skin.
 *
 * @file
 * @ingroup Skins
 */

/**
 * SkinTemplate class for My Skin skin
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
        // Suppress warnings to prevent notices about missing indexes in $this->data
        wfSuppressWarnings();
        $this->html('headelement'); ?>
		<?php if ($this->data['username'] == 'ShermanTheMythran' || $this->data['username'] == 'SirComputer' || $this->data['username'] == 'ToaMeiko') { //temp whitelisting - until skin is properly functional ?>
        <div id="taskbar">
            <div class="toggle">
                <span class="text">≡</span>
                <span class="invert"></span>
            </div>
            <div id="mw-js-message" class="message notice" style="display:none;"></div>
            <?php if ( $this->data['sitenotice'] ) { ?>
                <div id="site-notice" class="notice">
                    <?php $this->html('sitenotice'); ?>
                </div>
            <?php } ?>
            <?php if ( $this->data['newtalk'] ) { ?>
            <div id="new-talk" class="message notice">
                <?php $this->html('newtalk'); ?>
            </div>
            <?php } ?>
            <div id="actions">
                <div class="navigation module medium">Links</div>
                <div class="search module wide">Search</div>
                <div class="follow module narrow">Follow</div>
                <div class="level module medium">Level</div>
                <div class="chat module medium">Chat</div>
                <div class="user module medium">User</div>
                <div class="preferences module narrow">
                    <?php echo "<object data='$IP/skins/custard/Images/gear.svg' type='image/svg+xml' class='gear'></object>"; ?>
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
                        global $wgTitle;
                        global $wgUser;
                        $isEditable = $wgTitle -> userCan('edit');
                        generateTab('#read', 'Read');
                        if ($isEditable)
                        {
                            if ($wgUser -> isAllowed('edit')) {
                                generateTab('#edit', 'Edit');
                            }
                            else {
                                generateTab('#edit', 'View Source');
                            }
                            generateTab('#history', 'History');
                            if ($wgUser -> isAllowed('move')) {
                                generateTab('#move', 'Rename');
                            }
                            if ($wgUser -> isAllowed('delete')) {
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
                        if ($canTalk == 1) {
                            generateTab('#talk', 'Talk');
                        }
                        if ($getNamespace == 0) {
                            generateTab('#page', 'Page');
                        }
                        else {
                            generateTab('#page', $getNsText.' Page');
                        }
                    ?>
                </ul>
            </div>
            <h1 id="header">
                <?php $this->html('title'); ?>
            </h1>
            <?php if ( $this->data['subtitle'] ) { ?>
                <div class="sub-header">
                    <?php $this->html('subtitle'); ?>
                </div>
            <?php } ?>
            <?php if ( $this->data['undelete'] ) { ?>
                <div id="sub-header">
                    <?php $this->html('undelete'); ?>
                </div>
            <?php } ?>
            <div id="content">
                <?php $this->html('bodytext') ?>
            </div>
            <?php $this->html('catlinks'); ?>
            <?php $this->printTrail(); ?>
        </div>
        <?php }
        else { ?>
            <div id="temp"><div class="loader">
                <?php echo "<img src='$IP/skins/custard/Images/loading.gif' />" ?>
            </div></div>
        <?php
        }?>
        </body>
        </html>
	    <?php wfRestoreWarnings();
    }
} ?>