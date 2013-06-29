<?php
/**
 * Phalanx extension -- integrated spam control mechanism
 *
 * @file
 * @ingroup Extensions
 * @version 1.3 (r57731)
 * @author Bartek Łapiński <bartek@wikia-inc.com>
 * @author Łukasz Garczewski <tor@wikia-inc.com>
 * @author Maciej Błaszkowski <marooned@wikia-inc.com>
 * @author Maciej Brencz <macbre@wikia-inc.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0 or later
 * @link https://www.mediawiki.org/wiki/Extension:Phalanx Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This is not a valid entry point.' );
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['antispam'][] = array(
	'path' => __FILE__,
	'name' => 'Phalanx',
	'version' => '1.3',
	'author' => array(
		'Maciej Błaszkowski', 'Maciej Brencz', 'Łukasz Garczewski',
		'Bartek Łapiński', 'Jack Phoenix'
	),

	'descriptionmsg' => 'phalanx-desc',
	'url' => 'https://www.mediawiki.org/wiki/Extension:Phalanx',
);

// Name of the database where Phalanx's database tables are
// Used in memcache keys and whatnot
// Set this to $wgSharedDB if you're running a wiki farm
$wgPhalanxDatabase = false;

// Database prefix of the DB where Phalanx's database tables are
// Used in memcache keys and whatnot
// Set this to $wgSharedPrefix if you're running a wiki farm and that variable
// is set
$wgPhalanxDatabasePrefix = false;

// users immune to Phalanx
$wgAvailableRights[] = 'phalanxexempt';
$wgGroupPermissions['sysop']['phalanxexempt'] = true;


// New user right, required to use the special pages
$wgAvailableRights[] = 'phalanx';
$wgGroupPermissions['*']['phalanx'] = false;
$wgGroupPermissions['sysop']['phalanx'] = true;
$wgGroupPermissions['sysadmin']['phalanx'] = true;

// user right required to view blocked e-mail addresses
$wgAvailableRights[] = 'phalanxemailblock';
$wgGroupPermissions['sysop']['phalanxemailblock'] = true;
$wgGroupPermissions['sysadmin']['phalanxemailblock'] = true;

// ResourceLoader support for MediaWiki 1.17+
$wgResourceModules['ext.phalanx'] = array(
	'styles' => 'css/Phalanx.css',
	'scripts' => 'js/Phalanx.js',
	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Phalanx',
	'position' => 'top' // available since r85616
);

// Autoload classes
$dir = __DIR__ . '/';

$wgAutoloadClasses['Phalanx'] = $dir . 'Phalanx.class.php';

$wgAutoloadClasses['UserBlock'] = $dir . 'blocks/UserBlock.class.php';
//$wgAutoloadClasses['UserCookieBlock'] = $dir . 'blocks/UserCookieBlock.class.php';
$wgAutoloadClasses['ContentBlock'] = $dir . 'blocks/ContentBlock.class.php';
$wgAutoloadClasses['TitleBlock'] = $dir . 'blocks/TitleBlock.class.php';
#$wgAutoloadClasses['QuestionTitleBlock'] = $dir . 'blocks/QuestionTitleBlock.class.php';
#$wgAutoloadClasses['RecentQuestionsBlock'] = $dir . 'blocks/RecentQuestionsBlock.class.php';
#$wgAutoloadClasses['WikiCreationBlock'] = $dir . 'blocks/WikiCreationBlock.class.php';

$wgExtensionMessagesFiles['Phalanx'] = $dir . 'Phalanx.i18n.php';

// Set up the new special pages
$wgAutoloadClasses['SpecialPhalanx'] = $dir . 'SpecialPhalanx.body.php';
$wgAutoloadClasses['PhalanxStats'] = $dir . 'SpecialPhalanxStats.body.php';
$wgAutoloadClasses['PhalanxHelper'] = $dir . 'PhalanxHelper.class.php';
$wgAutoloadClasses['PhalanxAjax'] = $dir . 'PhalanxAjax.class.php';

$wgSpecialPages['Phalanx'] = 'SpecialPhalanx';
$wgSpecialPages['PhalanxStats'] = 'PhalanxStats';

$wgSpecialPageGroups['Phalanx'] = 'pagetools';

// New log to track Phalanx rule additions, changes and deletions
$wgLogTypes[]                       = 'phalanx';
$wgLogNames['phalanx']              = 'phalanx-rule-log-name';
$wgLogHeaders['phalanx']            = 'phalanx-rule-log-header';
$wgLogRestrictions['phalanx']       = 'phalanx';
$wgLogActions['phalanx/add']        = 'phalanx-rule-log-add';
$wgLogActions['phalanx/edit']       = 'phalanx-rule-log-edit';
$wgLogActions['phalanx/delete']     = 'phalanx-rule-log-delete';

// Blocked e-mail addresses go to a separate log
$wgLogTypes[]                       = 'phalanxemail';
$wgLogNames['phalanxemail']         = 'phalanx-email-rule-log-name';
$wgLogHeaders['phalanxemail']       = 'phalanx-email-rule-log-header';
$wgLogRestrictions['phalanxemail']  = 'phalanxemailblock';
$wgLogActions['phalanxemail/add']   = 'phalanx-rule-log-add';
$wgLogActions['phalanxemail/edit']  = 'phalanx-rule-log-edit';
$wgLogActions['phalanxemail/delete'] = 'phalanx-rule-log-delete';

$wgExtensionFunctions[] = 'efPhalanxInit';

// Initialize extension
// The hook calls are inside a function so that they won't be initialized for
// users with 'phalanxexempt' user right.
function efPhalanxInit() {
	global $wgUser, $wgHooks, $wgPhalanxDisableContent;

	// this needs to be initialized for UI-level checks to work
	// former RegexBlock (TYPE_USER)
	$wgHooks['GetBlockedStatus'][] = 'UserBlock::blockCheck';
	//$wgHooks['GetBlockedStatus'][] = 'UserCookieBlock::blockCheck';

	// don't bother initializing hooks if user is immune to Phalanx
	if ( $wgUser->isAllowed( 'phalanxexempt' ) ) {
		wfDebugLog( 'Phalanx', "user has 'phalanxexempt' right - no block will be applied" );
		return;
	}

	// allow for per wiki disable the content checks
	if ( empty( $wgPhalanxDisableContent ) ) {
		// former SpamRegex (TYPE_SUMMARY and TYPE_CONTENT)
		$wgHooks['EditFilter'][] = 'ContentBlock::onEditFilter';
		$wgHooks['AbortMove'][] = 'ContentBlock::onAbortMove';
		#$wgHooks['ProblemReportsContentCheck'][] = 'ContentBlock::genericContentCheck';
	}

	// former TitleBlackList (TYPE_TITLE)
	$wgHooks['SpecialMovepageBeforeMove'][] = 'TitleBlock::beforeMove';
	$wgHooks['EditFilter'][] = 'TitleBlock::listCallback';
	/*
	$wgHooks['ApiCreateMultiplePagesBeforeCreation'][] = 'TitleBlock::newWikiBuilder';
	$wgHooks['CreateDefaultQuestionPageFilter'][] = 'TitleBlock::genericTitleCheck';
	$wgHooks['CreatePageTitleCheck'][] = 'TitleBlock::genericTitleCheck';

	// former BadWords list (TYPE_ANSWERS_QUESTION_TITLE)
	$wgHooks['CreateDefaultQuestionPageFilter'][] = 'QuestionTitleBlock::badWordsTest';

	// former FilterWords list (TYPE_ANSWERS_RECENT_QUESTIONS)
	$wgHooks['DefaultQuestion::filterWordsTest'][] = 'RecentQuestionsBlock::filterWordsTest';

	// former TextRegex (TYPE_WIKI_CREATION)
	$wgHooks['AutoCreateWiki::checkBadWords'][] = 'WikiCreationBlock::isAllowedText';
	*/

	// RT#93196 - prevent use of user2user email
	$wgHooks['UserCanSendEmail'][] = 'UserBlock::onUserCanSendEmail';

	// fb#5311 - prevent a phalanx blocked name from being created.
	$wgHooks['AbortNewAccount'][] = 'UserBlock::onAbortNewAccount';
	/* custom Wikia hook
	$wgHooks['cxValidateUserName'][] = 'UserBlock::onValidateUserName';
	*/
}

// AJAX dispatcher
$wgAjaxExportList[] = 'PhalanxAjax';
function PhalanxAjax() {
	global $wgUser, $wgRequest;

	wfProfileIn( __METHOD__ );

	$method = $wgRequest->getVal( 'method', false );

	// check permissions
	if ( !$wgUser->isAllowed( 'phalanx' ) ) {
		$data = array( 'error' => 1, 'text' => wfMessage( 'badaccess' )->text() );
	} elseif ( method_exists( 'PhalanxAjax', $method ) ) { // call selected method
		$data = PhalanxAjax::$method();
	} else {
		$data = false;
	}

	// return as JSON
	$json = json_encode( $data );
	$response = new AjaxResponse( $json );
	$response->setContentType( 'application/json; charset=utf-8' );

	wfProfileOut( __METHOD__ );
	return $response;
}

// Hooked function
#$wgHooks['ContributionsToolLinks'][] = 'wfLoadPhalanxLink';

/**
 * Add a link to Special:Phalanx from Special:Contributions/USERNAME if the
 * user has the 'phalanx' permission
 *
 * @param $id Integer: user ID
 * @param $nt Title: user page title
 * @param $links Array: tool links
 * @return Boolean: true
 */
function wfLoadPhalanxLink( $id, $nt, &$links ) {
	global $wgUser;
	if ( $wgUser->isAllowed( 'phalanx' ) ) {
		$links[] = Linker::linkKnown(
			// @see http://trac.wikia-code.com/changeset/29887
			SpecialPage::getTitleFor( 'Phalanx' ),// Title::newFromText( 's:Special:Phalanx' ),
			'PhalanxBlock', // @todo i18n
			wfArrayToCGI( array(
				'type' => '8',
				'target' => $nt->getText(),
				'wpPhalanxCheckBlocker' => $nt->getText()
			) )
		);
	}
	return true;
}
