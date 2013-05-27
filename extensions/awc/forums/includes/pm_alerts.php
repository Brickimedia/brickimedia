<?PHP
/**
* Pm Alert file...
* @filepath /extensions/awc/includes/pm_alerts.php
* 
* 
*	=	Version Control Info	=
* SVN  Revision: $Revision: 503 $
* Last Modified: $Date: 2011-01-02 22:22:09 -0500 (Sun, 02 Jan 2011) $
* 
*/

if ( !defined( 'MEDIAWIKI' ) ) die();

class awcs_forum_pm_alerts{
	
	
     function __construct(){
        require_once(awc_dir . "includes/gen_class.php");
        require_once(awc_dir . "includes/funcs.php"); 
     }
        
        
	/* This function was created by:
	 * Bernhard Eisele (aka Freggern) http://www.freggers-wiki.de/
	 * as a forum extension, which worked its way into the forum as of version 2.5.12
	 * http://wiki.anotherwebcom.com/PM_info_in_wiki's_personal-bar
	 * 
	 * Thanks Freggern
	 */
	public function personalWikiMenu(&$personal_urls, &$wgTitle){
	global $awcUser,$awcsf_forums_personalurls_pm;
		
			if($awcsf_forums_personalurls_pm == 'yes') return true ;//Fix SocialProfil
    		$awcsf_forums_personalurls_pm = 'yes';
			
			awcs_forum_wfLoadExtensionMessages( 'AWCforum_menu' ); // Language File
          	
            if(!isset($awcUser)) $awcUser = new awcs_forum_user();	
			$awcUser->get_mem_forum_options();	
			
			if ($awcUser->m_pmunread == 0){ //Set PN Number and make text big or not
				$awc_forum_pm = 0;
				$awc_forum_active = false;
			}else{
				$awc_forum_pm = $awcUser->m_pmunread;
				$awc_forum_active = true;
			}
					
			$awc_forum_addone_personal_urls[] = array( //Array for Personal Url
				'text' => '(' . $awc_forum_pm . ') ' . wfMsg('awcf_unreadpms') ,
				'href' => ''.awc_url.'member_options/pminbox',
				'class' => 'awc_forum_personalurls_pm',
				'active' => $awc_forum_active
			);
			
			wfRunHooks('awcsforum_pm_alert', array($awcUser, &$awc_forum_addone_personal_urls, &$personal_urls ) );
			array_splice($personal_urls, awcs_forum_pm_position_personal_bar -1, 0, $awc_forum_addone_personal_urls); //Add the array in the list
		
	
	return true;
	
	}
	
	
	
	/* This function was created by:
	 * Bernhard Eisele (aka Freggern) http://www.freggers-wiki.de/
	 * as a forum extension, which worked its way into the forum as of version 2.5.12
	 * http://wiki.anotherwebcom.com/PM_info_down_under_article_name
	 * 
	 * Thanks Freggern
	 */
	public function underWikiArticleName(&$out){
    global $awcUser,$awcsf_forums_contentbox_pm;
    
    
    	if(!isset($awcUser)) $awcUser = new awcs_forum_user();
    	
	    if ($awcUser->m_pmunread == 0){
	    	return true;
	    }
	    
	    if($awcsf_forums_contentbox_pm == 'yes') return true ;//Fix SocialProfil && this can call more then one times
	    $awcsf_forums_contentbox_pm = 'yes';
	    

					
				if (file_exists(awc_dir . 'languages/pm_info.i18n.php')) {
			    	
					wfLoadExtensionMessages( 'AWC_FORUMS_ContentBox_PM' ); // Language File import
					$messagefield = wfMsg('messagefield');
					$messagefields = wfMsg('messagefields');
					
				} else {
					
					awcs_forum_wfLoadExtensionMessages( 'AWCforum_menu' ); // Language File
				    $messagefield = '(#PM#) ' . wfMsg('awcf_unreadpms') ;
					$messagefields = '(#PM#) ' . wfMsg('awcf_unreadpms') ;
					
				}
	            
	                      
	                
	            $awcUser->get_mem_forum_options(); 
	               
	            if ($awcUser->m_pmunread == 1){
	                    $messagetext = $messagefield;
	            }else{
	                    $messagetext = $messagefields;
	            }
	                
	             $messagetext = str_replace('#PM#', $awcUser->m_pmunread, $messagetext); #Replace the PM holder from the language file
	 
	             $pmOut = '<div class="usermessage">
	                            <a href="'.awc_url.'member_options/pminbox">'.$messagetext.'</a>
	                        </div>';
	             
	 			wfRunHooks('awcsforum_pm_alert', array($awcUser, &$pmOut, &$out ) );
	 			
	            $out->mBodytext = $pmOut . $out->mBodytext;      
	    
	    return true;
	
	}
	
	
	
}