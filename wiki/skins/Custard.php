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

$wgResourceModules['skins.custard'] = array(
        'styles' => array(
            'custard/CSS/custard.css' => array( 'media' => 'screen' ),
        ),
        'scripts' => array(
            //'custard/JS/EventHelpers.js',
            //'custard/JS/cssQuery-p.js',
            //'custard/JS/jcoglan-com-sylvester.js',
            //'custard/JS/cssSandpaper.js',
            //'custard/JS/history.js',
            'custard/JS/custard.js',
        ),
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

/**
 * New tab-generation function
 */
function generateTab($href, $text, $action, $target)
{
    if ($action == $target)
    {
        echo '<li><a href="'.$href.'" class="active">'.$text.'</a><span class="invert"></span></li>';
    }
    else {
        echo '<li><a href="'.$href.'">'.$text.'</a><span class="invert"></span></li>';
    }
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
        $out->addModuleStyles("skins.custard");
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
				
        <div id="toolbar">
            <div class="toggle">
                <span class="text">≡</span>
                <span class="invert"></span>
            </div>
            <div id="mw-js-message" class="message" style="display:none;"></div>
            <?php if ( $this->data['sitenotice'] ) { ?>
                <div id="site-notice">
                    <?php $this->html('sitenotice'); ?>
                </div>
            <?php } ?>
            <?php if ( $this->data['newtalk'] ) { ?>
            <div id="new-talk" class="message">
                <?php $this->html('newtalk'); ?>
            </div>
            <?php } ?>
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
                        global $wgActions;
                        $actionName = $wgActions -> getName();
                        $isEditable = $wgTitle -> userCan('edit');
                        $this -> generateTab('#read', 'Read');
                        if ($isEditable)
                        {
                            if ($wgUser -> isAllowed('edit')) {
                                $this -> generateTab('#edit', 'Edit', 'edit', $actionName);
                            }
                            else {
                                $this -> generateTab('#edit', 'View Source', 'edit', $actionName);
                            }
                            generateTab('#history', 'History', 'history', $actionName);
                            if ($wgUser -> isAllowed('move')) {
                                $this -> generateTab('#move', 'Rename', 'move', $actionName);
                            }
                            if ($wgUser -> isAllowed('delete')) {
                                $this -> generateTab('#delete', 'Delete', 'delete', $actionName);
                            }
                        }
                    ?>
                </ul>
                <?php
                    echo $wgActions->getActionName().'<br/>'.$wgActions->getClass().'<br/>'.$wgActions->getContext().'<br/>'.$wgActions->getDescription().'<br/>'.$wgActions->getLang().'<br/>'.$wgActions->getLanguage().'<br/>'.$wgActions->getName().'<br/>'.$wgActions->getOutput().'<br/>'.$wgActions->getPageTitle().'<br/>'.$wgActions->getRequest().'<br/>'.$wgActions->getRestriction().'<br/>'.$wgActions->getSkin().'<br/>'.$wgActions->getTitle().'<br/>'.$wgActions->getUser();
                ?>
                <ul class="left">
                    <?php
                        $canTalk = $wgTitle -> canTalk();
                        $getNsText = $wgTitle -> getNsText();
                        $getNamespace = $wgTitle -> getNamespace();
                        if ($canTalk == 1) {
                            $this -> generateTab('#talk', 'Talk');
                        }
                        if ($getNamespace == 0) {
                            $this -> generateTab('#page', 'Page');
                        }
                        else {
                            $this -> generateTab('#page', $getNsText.' Page');
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
        </body>
        </html>
	    <?php wfRestoreWarnings();
    }
} ?>