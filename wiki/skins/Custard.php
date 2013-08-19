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

$wgExtensionCredits['skin'][] = array(
    'path' => __FILE__,     // File name for the extension itself, required for getting the revision number from SVN - string, adding in 1.15
    'name' => "Custard",
    'description' => "Clean and modern skin originally developed for Brickimedia.org",
    'version' => 0.1,
    'author' => "Christopher Lazzaro", 
    'url' => "",            // URL of extension (usually instructions) - string
);

$wgValidSkinNames['custard'] = 'Custard';
//$wgAutoloadClasses['SkinCustard'] = dirname(__FILE__).'/Custard.skin.php';
//$wgExtensionMessagesFiles['Custard'] = dirname(__FILE__).'/Custard.i18n.php';

$wgResourceModules['skins.custard'] = array(
        'styles' => array(
                'custard/CSS/custard.css' => array( 'media' => 'screen' ),
        ),
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);

?>

<?php

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
                    <a href="#pedia">Pedia
                        <div>
                            <span class="invert"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mid">
                <a href="#main">Brickimedia</a>
            </div>
            <div class="right">
                <div class="shell">
                    <a href="#lmbw">LMBW
                        <div>
                            <span class="invert"></span>
                        </div>
                    </a>
                    <a href="#stories">Stories</a>
                </div>
            </div>
        </div>
				
        <div id="page">
            <div class="tabs"></div>
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
            </div>
            <?php $this->printTrail(); ?>
        </div>
        </body>
        </html>
	    <?php wfRestoreWarnings();
    }
} ?>