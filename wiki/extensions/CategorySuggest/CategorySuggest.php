<?php
/* CategorySuggest Mediawiki Extension
 *
 * @author Andreas Rindler (mediawiki at jenandi dot com)
 * @credits Jared Milbank, Leon Weber <leon.weber@leonweber.de>, Manuel Schneider <manuel.schneider@wikimedia.ch>, Daniel Friesen http://wiki-tools.com, Adam Franco <afranco@middlebury.edu>
 * @licence GNU General Public Licence 2.0 or later
 * @description Adds input box to edit and upload page which allows users to assign categories to the article. When a user starts typing the name of a category, the extension queries the database to find categories that match the user input."
 *
*/

## Abort if not used within Mediawiki
if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die();
}
## Abort if AJAX is not enabled
if ( !$wgUseAjax ) {
	trigger_error( 'CategorySuggest: please enable $wgUseAjax.', E_USER_WARNING );
	return;
}

## Globals
#
#  these can be set in local settings.php _after_ including this function
#
# $wgCategorySuggestjs, $wgCategorySuggestcss - paths to script and css files if needed to be moved elsewhere
# $wgCategorySuggestNumToSend  - max number of suggestions to send to browser - not implemented
# $wgCategorySuggestUnaddedWarning - not implemented
# $wgCategorySuggestCloud : cloud - use cloud ; anything else - list
#
$wgCategorySuggestjs = $wgScriptPath . '/extensions/CategorySuggest/CategorySuggest.js' ;
$wgCategorySuggestcss = $wgScriptPath . '/extensions/CategorySuggest/CategorySuggest.css';
$wgCategorySuggestNumToSend = '50';
$wgCategorySuggestUnaddedWarning = 'True';
$wgCategorySuggestCloud = 'list';

## Register extension setup hook and credits:
$wgExtensionFunctions[]	= 'fnCategorySuggest';
$wgExtensionCredits['parserhook'][] = array(
	'name'		=> 'CategorySuggest (version 1.1)',
	'author'	=> 'Andreas Rindler <mediawiki at jenandi dot com',
	'url'		=> 'http://www.mediawiki.org/wiki/Extension:CategorySuggest',
	'description'	=> 'Adds a Google Suggest-like category input box/typeahead functionality to the edit page.'
);
$wgExtensionMessagesFiles['CategorySuggest'] = dirname(__FILE__) . '/CategorySuggest.i18n.php';


## register Ajax function to be called from Javascript file
$wgAjaxExportList[] = 'fnCategorySuggestAjax';

## Entry point for Ajax, registered in $wgAjaxExportList; returns all cats starting with $query
function fnCategorySuggestAjax( $query ) {
	if(isset($query) && $query != NULL) {
		$searchString = mysql_real_escape_string($query);
		# % and _ are not escaped so do it here
		$searchString = str_replace( '%' , '\%' , $searchString );
		$searchString = str_replace( '_' , '\_' , $searchString );
		$searchString = str_replace( '|' , '%' , $searchString );
		$searchString = strtoupper($searchString);
		$dbr =& wfGetDB( DB_SLAVE );
		$categorylinks = $dbr->tableName('categorylinks');
		$page          = $dbr->tableName('page');
		$sql =
			"SELECT DISTINCT\n".
			"    cl_to AS cats\n".
			"  FROM $categorylinks\n".
			"  WHERE\n".
			"    UCASE(cl_to) LIKE UCASE('".$searchString."%')\n";
		$res = $dbr->query( $sql );
		$suggestStrings = array();
		for ( $i=0 ; $row = $dbr->fetchObject( $res )  ; $i++ ) {
			array_push($suggestStrings,$row->cats);
## Optional enhancement: Cutoff and rollover at max number of suggestions
## implement cutoff and rollover here
#			if ($i > 10) {
#				array_push($suggestStrings,'More...');
#				break;
#			}
		}
	        $text = implode("<",$suggestStrings);
		$dbr->freeResult( $res );
	}
	if ( !isset($text) || $text == NULL ) {
		$text = '<';
	}
	$response = new AjaxResponse($text);
	return $response;
}

## Set Hook:
function fnCategorySuggest() {
	global $wgHooks;
	
	## Showing the boxes
	# Hook when starting editing:
	$wgHooks['EditPage::showEditForm:initial'][] = array( 'fnCategorySuggestShowHook', false );
	# Hook for the upload page:
	$wgHooks['UploadForm:initial'][] = array( 'fnCategorySuggestShowHook', true );

	## Saving the data
	# Hook when saving page:
	$wgHooks['EditPage::attemptSave'][] = array( 'fnCategorySuggestSaveHook', false );
	# Hook when saving the upload:
	$wgHooks['UploadForm:BeforeProcessing'][] = array( 'fnCategorySuggestSaveHook', true );

	## Infrastructure
	# Hook our own CSS:
	$wgHooks['OutputPageParserOutput'][] = 'fnCategorySuggestOutputHook';
	# Hook up local messages:
	$wgHooks['LoadAllMessages'][] = 'fnCategorySuggestMessageHook';
}

## Load the file containing the hook functions:
require_once( 'CategorySuggest.body.php' );
?>