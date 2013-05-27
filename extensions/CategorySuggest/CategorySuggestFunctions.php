<?php
/* CategorySuggest Mediawiki Extension
 *
 * @author Andreas Rindler (mediawiki at jenandi dot com)
 * @credits Jared Milbank, Leon Weber <leon.weber@leonweber.de>, Manuel Schneider <manuel.schneider@wikimedia.ch>, Daniel Friesen http://wiki-tools.com, Adam Franco <afranco@middlebury.edu>
 * @licence GNU General Public Licence 2.0 or later
 * @description Adds input box to edit and upload page which allows users to assign categories to the article. When a user starts typing the name of a category, the extension queries the database to find categories that match the user input."
 *
*/

if( !defined( 'MEDIAWIKI' ) ) {
	echo( "This file is an extension to the MediaWiki software and cannot be used standalone.\n" );
	die();
}

/*************************************************************************************/
## Entry point for the hook and main worker function for editing the page:
function fnCategorySuggestShowHook( $m_isUpload = false, &$m_pageObj ) {
global $wgOut, $wgParser;
	global $wgTitle;
	global $wgScriptPath;

	# Check if page is subpage once to save method calls later:
	$m_isSubpage = $wgTitle->isSubpage();

	# Get ALL categories from wiki:
//		$m_allCats = fnAjaxSuggestGetAllCategories();
	# Load system messages:
	fnCategorySuggestMessageHook();
	# Get the right member variables, depending on if we're on an upload form or not:
	if( !$m_isUpload ) {
		# Extract all categorylinks from PAGE:
		$m_pageCats = fnCategorySuggestGetPageCategories( $m_pageObj );
		# Never ever use editFormTextTop here as it resides outside the <form> so we will never get contents
		$m_place = 'editFormTextAfterWarn';
		# Print the localised title for the select box:
		$m_textBefore = '<b>'. wfMsg( 'categorysuggest-title' ) . '</b>:';
	} else	{
		# No need to get categories:
		$m_pageCats = array();
		
		# Place output at the right place:
		$m_place = 'uploadFormTextAfterSummary';
	}
		
	#ADD JAVASCRIPT
	$m_pageObj->$m_place .= "<script type=\"text/javascript\" src=\"" . $wgScriptPath . "/extensions/CategorySuggest/CategorySuggest.js\"></script>\n";
		
	#ADD EXISTING CATEGORIES TO INPUT BOX 
	$arrExistingCats = array();
	$arrExistingCats = $m_pageCats;
 		
	#ADD INPUT BOX FOR USERS TO ENTER CATEGORIES
	$m_pageObj->$m_place .= "<div id='categoryselectmaster'\"><b>" .wfMsg( 'categorysuggest-title' )."</b><br>\n";
	$m_pageObj->$m_place .= wfMsg( 'categorysuggest-subtitle' ). "<br>\n" .wfMsg( 'categorysuggest-boxlabel' );
	$catList = str_replace("_"," ",implode(";", $arrExistingCats));
	if (!empty($catList))
		$catList .= ';';
	$m_pageObj->$m_place .= "<input onkeyup='sendRequest(this.value);' onkeydown='return checkSelect(this,event)' autocomplete='off' type='text' name='txtSelectedCategories' id='txtSelectedCategories' maxlength='200' size='105' value='".$catList."'/>\n";
	$m_pageObj->$m_place .=  '<br><div id="searchResults"></div>';
		
	//End DIV
	$m_pageObj->$m_place .= "<br></div><br>\n"; //category select master
	
	return true;
}

/*************************************************************************************/
## Entry point for the hook and main worker function for saving the page:
function fnCategorySuggestSaveHook( $m_isUpload, &$m_pageObj ) {
	global $wgContLang;
	global $wgOut;
	
	# Get localised namespace string:
	$m_catString = $wgContLang->getNsText( NS_CATEGORY );
	# Get some distance from the rest of the content:
	$m_text = "\n";
	
	# Assign all selected category entries:
	$strSelectedCats = $_POST['txtSelectedCategories'];

	#CHECK IF USER HAS SELECTED ANY CATEGORIES
	if(strlen($strSelectedCats)>1){
		$arrSelectedCats = array();
		$arrSelectedCats = explode(";",$_POST['txtSelectedCategories']);
	
	 	foreach( $arrSelectedCats as $m_cat ) {
	 	 	if(strlen($m_cat)>0){
				$m_text .= "\n[[$m_catString:" . mysql_escape_string(trim($m_cat)) . "]]";
			}
		}
		# If it is an upload we have to call a different method:
		if ( $m_isUpload ) {
			$m_pageObj->mUploadDescription .= $m_text;
		} else{
			$m_pageObj->textbox1 .= $m_text;
		}		
	}
	
	# Return to the let MediaWiki do the rest of the work:
	return true;
}

/*************************************************************************************/
## Entry point for the CSS:
function fnCategorySuggestOutputHook( &$m_pageObj, $m_parserOutput ) {
	global $wgScriptPath;

	# Register CSS file for input box:
	$m_pageObj->addLink(
		array(
			'rel'	=> 'stylesheet',
			'type'	=> 'text/css',
			'href'	=> $wgScriptPath . '/extensions/CategorySuggest/CategorySuggest.css'
		)
	);

	return true;
}

/*************************************************************************************/
## Entry point for localised messages:
function fnCategorySuggestMessageHook() {
	global $wgLang;
	global $wgMessageCache;
	
	# Initialize array of all messages:
	$messages=array();
	# Load default messages (english):
	include( 'i18n/CategorySuggest.i18n.php' );
	# Load localised messages:
	if( file_exists( dirname( __FILE__ ) . '/i18n/CategorySuggest.i18n.' . $wgLang->getCode() . '.php' ) ) { // avoid warnings
		include( 'i18n/CategorySuggest.i18n.' . $wgLang->getCode() . '.php' );
	}
	# Put messages into message cache:
	$wgMessageCache->addMessages( $messages );
	
	return true;
}

/*************************************************************************************/
## Returns an array with the categories the articles is in.
## Also removes them from the text the user views in the editbox.
function fnCategorySuggestGetPageCategories( $m_pageObj ) {
global $wgOut;

	# Get page contents:
	$m_pageText = $m_pageObj->textbox1;

$arrAllCats = Array();
$regulartext ='';
$nowikitext = '';
$cleanedtext ='';
$finaltext = '';
	# Check linewise for category links:

	$arrBlocks1 = explode( "<nowiki>", $m_pageText );
	$regulartext = $arrBlocks1[0];

	$cleanedtext = fnCategorySuggestStripCats($regulartext,$arrAllCats);
	
	$finaltext .= $cleanedtext;
	//$finaltext .= '<nowiki>' . $nowikitext;
	
	for($i=1; $i<count($arrBlocks1); $i++){
		$arrBlocks2 = explode( "</nowiki>", $arrBlocks1[$i] );
		//ignore cats here
		$nowikitext = $arrBlocks2[0];
		//add to final text
		$finaltext .= '<nowiki>' . $nowikitext . '</nowiki> ';
		
		//strip cats here
		$regulartext = $arrBlocks2[1];
		$cleanedtext = fnAjaxSuggestStripCats($regulartext,$arrAllCats);
		$finaltext .= $cleanedtext;
	}

	//Place cleaned text back into the text box:
	$m_pageObj->textbox1 = trim( $finaltext );
	
	return $arrAllCats;
	
}

function fnCategorySuggestStripCats($texttostrip, &$catsintext){
	global $wgContLang, $wgOut;

	# Get localised namespace string:
	$m_catString = strtolower( $wgContLang->getNsText( NS_CATEGORY ) );
	# The regular expression to find the category links:
	$m_pattern = "\[\[({$m_catString}|category):([\d\w\s]*)\]\]";
	$m_replace = "$2";
	# The container to store all found category links:
	$m_catLinks = array ();
	# The container to store the processed text:
	$m_cleanText = '';


	# Check linewise for category links:
	foreach( explode( "\n", $texttostrip ) as $m_textLine ) {
		# Filter line through pattern and store the result:
        $m_cleanText .= trim( preg_replace( "/{$m_pattern}/i", "", $m_textLine ) ) . "\n";

		# Check if we have found a category, else proceed with next line:
        if( preg_match_all( "/{$m_pattern}/i", $m_textLine,$catsintext2,PREG_SET_ORDER) ){
			 foreach( $catsintext2 as $local_cat => $m_prefix ) {
				//Set first letter to upper case to match MediaWiki standard
				$strFirstLetter = substr($m_prefix[2], 0,1);
				strtoupper($strFirstLetter);
				$newString = strtoupper($strFirstLetter) . substr($m_prefix[2], 1);
				array_push($catsintext,$newString);
					 			
	 		}
			# Get the category link from the original text and store it in our list:
			preg_replace( "/.*{$m_pattern}/i", $m_replace, $m_textLine,-1,$intNumber );
		}
		
	}

	return $m_cleanText;	
	
}

?>