<?php     
/**
* AWC`s Mediawiki Forum Extension
* 
* License: <br />
* Another Web Compnay (AWC) 
* 
* All of Another Web Company's (AWC) MediaWiki Extensions are licensed under<br />
* Creative Commons Attribution-Share Alike 3.0 United States License<br />
* http://creativecommons.org/licenses/by-sa/3.0/us/
* 
* All of AWC's MediaWiki extension's can be freely-distribute, 
*  no profit of any kind is allowed to be made off of or because of the extension itself, this includes Donations.
* 
* All of AWC's MediaWiki extension's can be edited or modified and freely-distribute <br />
*  but these changes must be made public and viewable noting the changes are not original AWC code. <br />
*  A link to http://anotherwebcom.com must be visable in the source code 
*  along with being visable in render code for the public to see.
* 
* You are not allowed to remove the Another Web Company's (AWC) logo, link or name from any source code or rendered code.<br /> 
* You are not allowed to create your own code which will remove or hide Another Web Company's (AWC) logo, link or name.
* 
* This License can and will be change with-out notice. 
* 
* All of Another Web Company's (AWC) software/code/programs are distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
* 
* 4/2008 Another Web Compnay (AWC)<br />
* The above text must stay intact and not edited in any way.
* 
* @filepath /extensions/awc/forums/awc_forum.php
* @package awcsForum
* @author Another Web Company
* @license http://wiki.anotherwebcom.com/AWC%27s_MediaWiki_Scripts_License
* @link http://wiki.anotherwebcom.com/Category:AWC's_MediaWiki_Forum_Extension
*
*	=	Version Control Info	=
* SVN  Revision: $Revision: 528 $
* Last Modified: $Date: 2011-01-05 01:16:48 -0500 (Wed, 05 Jan 2011) $
* 
*/

if ( !defined( 'MEDIAWIKI' ) ) die();

/** Current Forum Version */
define('awcs_forum_ver', '2.5.12');

/** Forum DIR */
define('awc_dir', dirname(__FILE__) . '/');

$awcExtensionPath = explode('/extensions/', awc_dir);
if(!isset($awcExtensionPath[1])) $awcExtensionPath = explode('\extensions\\', awc_dir);

define('awcForumPath', '/extensions/' . $awcExtensionPath[1]);

/**
*   config.php holds settings for the forums poll, menu, forum and other tags and info
*/
include(awc_dir . 'config/config.php');

/**
* need to load the perm.php (permission file) all the time
* so the Group Permission show up in the Wiki Sysops 'User rights management'
* so Sysops can control members Groups for the forums.
*/
require(awc_dir . "config/perm.php");




if ( defined( 'MW_SUPPORTS_PARSERFIRSTCALLINIT' ) ) {
        $wgHooks['ParserFirstCallInit'][] = 'AWCforum';
} else {
        $wgExtensionFunctions[] = 'AWCforum';
}

$wgAutoloadClasses['AWCforum'] = awc_dir . 'SpecialPage.php';
$wgSpecialPages['AWCforum'] = 'AWCforum';

$wgExtensionMessagesFiles['AWCforum_menu'] = awc_dir.'languages/menu.i18n.php';
$wgExtensionMessagesFiles['AWCforum_whoes_here'] = awc_dir.'languages/whos_here.i18n.php'; 
$wgExtensionMessagesFiles['AWCforum_genral_forum'] = awc_dir.'languages/general.i18n.php';
$wgExtensionMessagesFiles['AWCforum_forum_tag'] = awc_dir.'languages/forum_tag.i18n.php';
$wgExtensionMessagesFiles['AWCforum_poll_tag'] = awc_dir.'languages/poll_tag.i18n.php';

if (file_exists(awc_dir . 'languages/pm_info.i18n.php')) {
	$wgExtensionMessagesFiles['AWC_FORUMS_ContentBox_PM'] = awc_dir.'languages/pm_info.i18n.php';
}


    /**
    *  Search dbase for members name name while PMing
    * 
    * @uses AjaxResponse
    * @since Version 2.5.8
    */
require_once(awc_dir . "ajax.php");


define("NS_AWC_FORUM", 121707);
$wgExtraNamespaces[NS_AWC_FORUM] = "Forum";
$wgNamespacesToBeSearchedDefault[NS_AWC_FORUM] = true;
$wgContentNamespaces[] = NS_AWC_FORUM;
$wgDefaultUserOptions['searchNs'. NS_AWC_FORUM] = 1;



/* @TODO find a way around this !!
 * In order to make Menus and PM info dynamic
 * We must turn off Wikis Cacheing system
 * If pages are Cache, then dynamic content will not be updated
 */
if(show_whos_here_in_WIKI 
	|| awcs_forum_use_poll
	|| (defined('awcs_forum_show_pm_personal_bar') && awcs_forum_show_pm_personal_bar)
	|| (defined('awcs_forum_show_pm_under_article_name') && awcs_forum_show_pm_under_article_name)
	)
{   
	global $wgCachePages, $wgParserCacheType, $wgUseFileCache;
    $wgCachePages = false;
    $wgParserCacheType = false;
    $wgUseFileCache = false;
}



$wgHooks['ArticleViewHeader'][] = 'AWC_FORUMS_ArticleViewHeader';

function AWCforum() {
	global $wgHooks,$wgCachePages, $wgParserCacheType;
	
        $wgHooks['EditPage::showEditForm:fields'][] = 'AWC_FORUM_showEditForm';
        $wgHooks['ArticleSaveComplete'][] = 'AWC_FORUM_ArticleSaveComplete';
        $wgHooks['UserLogout'][] = 'AWC_FORUM_UserLogout';
        
		
        
        if(!defined('awcsf_wiki_url')){
            global $wgServer, $wgArticlePath;
            define('awcsf_wiki_url', $wgServer . str_replace('$1', '', $wgArticlePath) );
            if(defined('awcs_forum_special_prefix')){
            	define('awc_url', awcsf_wiki_url . awcs_forum_special_prefix . ':AWCforum/' );
            } else{
            	define('awc_url', awcsf_wiki_url . "Special:AWCforum/" );
            }
            
        }
        
        
         if(show_whos_here_in_WIKI){   
           $wgHooks['BeforePageDisplay'][] = 'AWC_FORUMS_BeforePageDisplay_Menu_WhoesHere';
         }
        	
         
         if(awcs_forum_nav_bar){   
           # global $wgEnableSidebarCache;
            // Menu will not update corrertly if this is anabled...
           # $wgEnableSidebarCache = false;
           	require_once(awc_dir . "includes/menu.php");
      		$menu = new awcs_forum_menu_cls();
			$wgHooks['SkinBuildSidebar'][] = array($menu, 'AWC_FORUMS_NavBarUrls');
         }
         
         
         /* Display PM info in Personal Wiki Menu */
         if((defined('awcs_forum_show_pm_personal_bar') && awcs_forum_show_pm_personal_bar)){
         	
         	global $wgUser;
           	if($wgUser->isLoggedIn()){ 
           		
	         	require_once(awc_dir . "includes/pm_alerts.php");
	         	
	         	/* check in case not defined */
	         	if(!defined('awcs_forum_pm_position_personal_bar')){
	         		define('awcs_forum_pm_position_personal_bar', 6);
	         	}
	         	
	      		$awcs_forum_pm_alerts_cls = new awcs_forum_pm_alerts();
				$wgHooks['PersonalUrls'][] = array($awcs_forum_pm_alerts_cls, 'personalWikiMenu');
				
           	}
           	
         }
         
         
         
         /* Display PM info under article name */
         if((defined('awcs_forum_show_pm_under_article_name') && awcs_forum_show_pm_under_article_name)){
         	
         	if(!isset($wgUser)){
         		global $wgUser;
         	}
         	
           	if($wgUser->isLoggedIn()){ 
           		
	      		if(!isset($awcs_forum_pm_alerts_cls)){
	      			require_once(awc_dir . "includes/pm_alerts.php");
	      			$awcs_forum_pm_alerts_cls = new awcs_forum_pm_alerts();
	      		}
				$wgHooks['BeforePageDisplay'][] = array($awcs_forum_pm_alerts_cls, 'underWikiArticleName');
				
           	}
           	
         }
         
         if(isset($awcs_forum_pm_alerts_cls)){
         	unset($awcs_forum_pm_alerts_cls);
         }
         
         if(isset($menu)){
         	unset($menu);
         }
         
         global $wgParser;
         $wgParser->setHook( "forum_info", "awc_forum_display_info" );
         $wgParser->setHook( "forum_poll", "awc_forum_poll_display" );
    
    return true;
}

    /**
    *  Remove user from forums-session table
    * 
    * @since Version 2.5.x
    */
function AWC_FORUM_UserLogout(&$user){

    $dbw = &wfGetDB( DB_MASTER );
    $awc_f_sessions = $dbw->tableName('awc_f_sessions');    
    $sql = "SELECT ses_id FROM $awc_f_sessions LIMIT 1";
        $dbw->ignoreErrors(true);
            if($res = $dbw->query($sql)){
                $dbw->delete( 'awc_f_sessions', array( 'ses_name' => $user->mName), '');
            } 
        $dbw->ignoreErrors(false);
        
    if(isset($_SESSION['awc_startTime'])) unset($_SESSION['awc_startTime']);
        
  return true;
}

    /**
    *  Check article for forum-form-input-fields
    *  Used when an article is edited from forum thread
    * 
    * @since Version 2.5.x
    */
function AWC_FORUM_ArticleSaveComplete(){
global $wgRequest, $wgTitle, $awc__url;

    $pID = $wgRequest->getVal('awc_redirect') ;
    $mem_namespace = $wgRequest->getVal('awc_mem_redirect') ;
    $wpStarttime = $wgRequest->getVal('wpStarttime') ;
   
   
    if($pID != '' && $wpStarttime != ''){
        
        if($mem_namespace){
             die(header('Location: ' . $awc__url . "mem_profile/" . $mem_namespace . '/' . $pID )); 
        }
                                     
        $dbr = &wfGetDB( DB_SLAVE ); 
        $awc_f_posts = $dbr->tableName( 'awc_f_posts' );
        $res = $dbr->query("SELECT p.p_threadid, p.p_forumid FROM $awc_f_posts p WHERE p.p_id=$pID");
        $r = $dbr->fetchRow( $res );
            $tID = $r['p_threadid'];
           # $fID = $r['forum_id'];
        $dbr->freeResult( $res );
        
        
        die(header('Location: ' . $awc__url . "st/id" . $tID ));
        
    }
    
return true;

}

    /**
    *  Create forum-form-input-fields
    *  Used when an article is edited from forum thread
    * 
    * @uses AjaxResponse
    * @since Version 2.5.x
    */
function AWC_FORUM_showEditForm(&$q, &$out){
global $wgRequest;

   $out->addHTML("<input type='hidden' value='".$wgRequest->getVal('awc_redirect')."' name=\"awc_redirect\" />");
   $out->addHTML("<input type='hidden' value='".$wgRequest->getVal('awc_mem_redirect')."' name=\"awc_mem_redirect\" />");
   
    return true;
}



/**
* Trigged when Wiki displays a page
* Displays Forum Menu and Who's Here
* 
* @uses awcs_forum_user
* @uses awcs_forum_wfLoadExtensionMessages
* @uses awcs_forum_stats
* @uses get_stats
* @uses awcs_forums_whos_here_skin_wiki
* @uses doUpdate
* @todo find out why this is being called multi-times by other extensions... http://wiki.anotherwebcom.com/Special:AWCforum/sp/id4778
* 
*/
function AWC_FORUMS_BeforePageDisplay_Menu_WhoesHere(&$out) {        
global $awcsf_menu_whoeshere_beforepagedisplay ;

        // find out why this is being called multi-times by other extensions...
        // http://wiki.anotherwebcom.com/Special:AWCforum/sp/id4778
        if($awcsf_menu_whoeshere_beforepagedisplay == 'yes') return true ;
        $awcsf_menu_whoeshere_beforepagedisplay = 'yes';
        
        
        if(awcs_forum_nav_bar OR show_whos_here_in_WIKI){
            global $awcUser, $wgUser;
            
            require_once(awc_dir . "includes/gen_class.php");
            require_once(awc_dir . "includes/funcs.php");
            
            if(!isset($awcUser)) $awcUser = new awcs_forum_user();
        }
       
      	if(awcs_forum_nav_bar){
          
      		#require_once(awc_dir . "includes/menu.php");
      		
      		#$menu = new awcs_forum_menu_cls();
      		#$menu->wikiNavMenu($wgUser, $awcUser);

    	}
    
    
    if(show_whos_here_in_WIKI == false) return true;

    global $wgTitle;
    if($wgTitle->mDbkeyform == 'AWCforum'){
        return true;
    }
      
    awcs_forum_wfLoadExtensionMessages( 'AWCforum_whoes_here' );   
    
    global $WhoWhere, $ForumStat;

    //$WhoWhere = null;
     
    $WhoWhere['type'] =  'wiki' ;
    $WhoWhere['where'] = $wgTitle->mTextform ;
    
    if($wgTitle->mNamespace == '-1'){
            $WhoWhere['type'] =  'wiki' ;
            $WhoWhere['where']  = "Special:{$WhoWhere['where']}";
    }elseif($wgTitle->mNamespace != '0'){
            global $wgCanonicalNamespaceNames;
            $WhoWhere['type'] =  'wiki' ;
            $WhoWhere['where'] = $wgCanonicalNamespaceNames[$wgTitle->mNamespace] . ":{$WhoWhere['where']}";   
    }
    
    $awcUser->mName = $wgUser->mName ;
    $awcUser->mId = $wgUser->mId ;

    // require_once(awc_dir . "includes/gen_class.php");
    // require_once(awc_dir . "includes/funcs.php");
     
     
      // need this to update the MaxUsers at once
    if(!isset($ForumStat)){
        $ForumStat = new awcs_forum_stats();
        $ForumStat->get_stats();
    }
     $WhoWhere['type'] =  'wiki' ;
     $WhoWhere['where'] = $WhoWhere['where'] ;
     
   
    global $whos_here;
    if(!isset($whos_here)) $whos_here = new awcs_forum_whos_here();
    
    if(isset($whos_here->installed) AND $whos_here->installed == true){
        $whos_here->load_ses($WhoWhere);
        $out->mBodytext .= '<br /><br /><br />' . awcs_forums_whos_here_skin_wiki($whos_here->whos_here) ;
    }
    $ForumStat->doUpdate(); 
        
  return true;
}


function awcs_forums_whos_here_skin_wiki($info){
global $wgOut, $awcs_forum_config, $awcsf_wiki_css_set; 

            
            if($awcsf_wiki_css_set != 'yes'){
                
                    if(!isset($awcs_forum_config)){
                        $awcs_forum_config = new awcs_forum_config();  // gen_class.php
                        $awcs_forum_config->get_config();
                    }
                    
                    if(!isset($awcs_forum_config->cf_css_default) OR $awcs_forum_config->cf_css_default == '') return ;

           
                    $dbr = &wfGetDB( DB_SLAVE );
                    $awc_f_theme_css = $dbr->tableName( 'awc_f_theme_css' ); 
                    
                    /*
                    $res = $dbr->select( 'awc_f_theme_css', 
                                        array( 'css_code, css_att' ), 
                                        "css_thmn_id = {$awcs_forum_config->cf_css_default} AND css_att IN ('.whos_here_row', '.whos_here', '.whos_here_header', '.pagejumps_PostOnForumPage') OR css_section = 'css_poll'",
                                        array(__METHOD__),
                                        array('OFFSET' => 0 , 'LIMIT' => 25)
                                       );
                                       
                                      */
                    $sql = "SELECT css_code, css_att
                                FROM $awc_f_theme_css
                                WHERE css_thmn_id = $awcs_forum_config->cf_css_default AND
                                css_att IN ('.whos_here_row', '.whos_here', '.whos_here_header', '.pagejumps_PostOnForumPage') OR
                                css_section = 'css_poll' LIMIT 25";
                    # die();
                   //  awc_pdie($sql);           
                    $css = '<style type="text/css">';
                    $res = $dbr->query($sql);    
                    while ($r = $dbr->fetchObject( $res )) {
                        $css .= "$r->css_att {\n $r->css_code \n} \n";
                    }
                    $css .= "\n .nothing {font-size: 0%;
                                margin: .0em;
                                border: 0;
                                margin: 0;
                                padding: 0;
                                width: 0;}\n";
                    $css .= "</style>\n";
                 //   awc_pdie($css);
                    $wgOut->addScript($css);
                    
                    $awcsf_wiki_css_set = 'yes';
            }
   
        $names = $info['names'];
        $names = substr($names, 0, -2);
            
        $html = '<br /><table class="whos_here" width="100%" cellpadding="0" cellspacing="0">';
        $html .= '<tr>
                        <td width="100%" class="whos_here_header">
                        <a href="'.awc_url.'whoshere">'.wfMsg('word_forum_stats_whos_here').'</a>  
                        &nbsp; '. wfMsg('members') . ' ' . $info['mems'] . '
                        &nbsp; '. wfMsg('guests') . ' ' . $info['guests']. '
                        &nbsp; '.wfMsg('bots').'  ' .  $info['bots'] . '
                        </td>
         </tr>';
        
        $html .= '<tr>';
        $html .= '<td class="whos_here_row"> &nbsp;  '. $names .' </td>';
        $html .= '</tr>';
        
        $html .= '</table>';

      return $html ;
}

function awc_forum_poll_display($input, $argv ) {
     
static $forum_tag = null;

    if($forum_tag == null){
        require_once(awc_dir . 'includes/forum_tags.php');
    }
    
    $forum_tag = new awcs_forum_info_tag();
    $poll = $forum_tag->poll($input, $argv);
    #die($poll);
    return  $poll ;
     
}

function awc_forum_display_info($input, $argv ) {

static $forum_tag = null;

    if($forum_tag == null){
        require_once(awc_dir . 'includes/forum_tags.php');
    }
    
    $forum_tag = new awcs_forum_info_tag();
    return $forum_tag->forum_tag($input, $argv);
    

}

function AWC_FORUMS_POLL_DECODE_BeforePageDisplay(&$out) { 
    $out->mBodytext = preg_replace('/'."@POLL@".'([0-9a-zA-Z\\+\\/]+=*)'."@POLL@".'/e', 'base64_decode("$1")',  $out->mBodytext );   
  return true;
}

/**
 * 
 * Used for redirect of Search results, "Add post text to Wiki's dBase"...
 * @changeVer 2.5.8 Edited function call, removed ...
 */
function AWC_FORUMS_ArticleViewHeader(&$article){

    if($article->mTitle->mNamespace == NS_AWC_FORUM){
            global $wgServer, $wgArticlePath;
            $awcsf_wiki_url = $wgServer . str_replace('$1', '', $wgArticlePath);
           # die($awcsf_wiki_url . $article->mTitle->mUrlform);
            die(header('Location: ' . $awcsf_wiki_url . $article->mTitle->mUrlform ));
    }
    
    return true;
}





function awcs_forum_wfLoadExtensionMessages( $extensionName ) {
/* Idea taking form:
http://www.mediawiki.org/wiki/Extension_talk:Renameuser#Call_to_undefined_function_wfLoadExtensionMessages.28.29

	To make AWC's Forum Extension lang files compatable with old wiki vers...
*/

global $wgVersion;
  if(version_compare($wgVersion, '1.11.0', '>=')){
  		wfLoadExtensionMessages($extensionName);
  return true;	
  }


global $wgExtensionMessagesFiles;
global $wgMessageCache;

       require( $wgExtensionMessagesFiles[$extensionName]); # adapt the path if necessary
                foreach ( $messages as $lang => $langMessages ) {
                        $wgMessageCache->addMessages( $langMessages, $lang );
                }
        return true;

}


$wgExtensionCredits['specialpage'][] = array(
        'name' => 'AWC`s MediaWiki Forum',
        'version' => awcs_forum_ver ,
        'author' => 'Another Web Company',
        'url' => 'http://wiki.anotherwebcom.com/Category:AWC%27s_MediaWiki_Forum_Extension',
        'description' => 'Integrated Forum for your Wiki.'
);
