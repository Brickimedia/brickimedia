<?PHP
/**
* Nav menu file...
* @filepath /extensions/awc/includes/menu.php
* @package awcsForum
* @author Another Web Company
* @license http://wiki.anotherwebcom.com/AWC%27s_MediaWiki_Scripts_License
* @link http://wiki.anotherwebcom.com/Category:AWC's_MediaWiki_Forum_Extension
* 
*	=	Version Control Info	=
* SVN  Revision: $Revision: 503 $
* Last Modified: $Date: 2011-01-02 22:22:09 -0500 (Sun, 02 Jan 2011) $
* 
*/

if ( !defined( 'MEDIAWIKI' ) ) die();


class awcs_forum_menu_cls{

	public function AWC_FORUMS_NavBarUrls($skin, &$bar){
	global $awcUser, $wgUser;
	    
		awcs_forum_wfLoadExtensionMessages( 'AWCforum_menu' );
		
		$passedBar = $bar;
		
		require_once(awc_dir . "includes/gen_class.php");
        require_once(awc_dir . "includes/funcs.php");
        
        $awcf_forum_menu_title = wfMsg('awcf_forum_menu');
        
        if(!$wgUser->isLoggedIn()){
					
        	$bar_awc_forum[$awcf_forum_menu_title][] = 
						array(
							'text'   => wfMsg('awcf_forum'),
							'href'  => awc_url,
							'id'     => 'n-awc-forum-urls',
							'active' => false
						);
						
			$bar_awc_forum[$awcf_forum_menu_title][] = 
						array(
							'text'   => wfMsg('awcf_search'),
							'href'   => awc_url.'search',
							'id'     => 'n-awc-forum-urls',
							'active' => false
						);
						
			$bar_awc_forum[$awcf_forum_menu_title][] = 
						array(
							'text'   => wfMsg('awcf_todays_posts'),
							'href'   => awc_url.'search/todate',
							'id'     => 'n-awc-forum-urls',
							'active' => false
						);
						
        } else {
        
        	/* @TODO */
          	if(empty($awcUser) OR $awcUser->has_mem_info == false) {
				#$awcUser = new awcs_forum_user();
				#$awcUser->get_mem_forum_options(); // set 
			}
			
			
			$user_title = '0' ;
			if(isset($awcUser->m_pmunread )){
				
				$user_title = '('. $awcUser->m_pmunread . ')' ; 
				
				if(isset($awcUser->m_pmpop) AND isset($awcUser->m_pmoptions['m_pmpop']) ){
					if($awcUser->m_pmpop == '1' AND $awcUser->m_pmoptions['m_pmpop'] == '1'){								   
						global $wgOut, $wgTitle;  
						if( $wgTitle->mDbkeyform!= 'AWCforum') $wgOut->addHTML('<script type= "text/javascript">  alert("'.wfMsg('awcf__newpm').'"); </script>');
					}
				}
				
				
			}
			
			$user_title .= ' ' . wfMsg('awcf_unreadpms'); 
        
       		$mOps = (isset($awcUser->m_menu_options)) ? $awcUser->m_menu_options : null ;
            
       		/* @TODO give Admin contol here */
       		if(!is_array($mOps) OR !isset($mOps) OR empty($mOps)){
						$mOps['forum'] = true ;
						$mOps['search'] = true ; 
						$mOps['today'] = true ; 
       					$mOps['pms'] = true ;
						$mOps['recent'] = true ; 
						$mOps['mythreads'] = true ; 
						$mOps['myposts'] = true ; 
						$mOps['subemail'] = true ; 
						$mOps['sublist'] = true ;
             }
             
             $mOpsBarInfo['forum'] = 		array('href' => '', 'text' => wfMsg('awcf_forum'));
             $mOpsBarInfo['search'] = 		array('href' => 'search', 'text' => wfMsg('awcf_search'));
             $mOpsBarInfo['today'] = 		array('href' => 'search/todate', 'text' => wfMsg('awcf_todays_posts'));
             $mOpsBarInfo['pms'] = 			array('href' => 'member_options/pminbox', 'text' => $user_title);
             $mOpsBarInfo['recent'] = 		array('href' => 'search/recent', 'text' => wfMsg('awcf_recent'));
             $mOpsBarInfo['mythreads'] = 	array('href' => 'search/memtopics/'.$wgUser->mName.'/'.$wgUser->mId, 'text' => wfMsg('awcf_my_threads'));
             $mOpsBarInfo['myposts'] = 		array('href' => 'search/memposts/'.$wgUser->mName.'/'.$wgUser->mId, 'text' => wfMsg('awcf_my_posts'));
             $mOpsBarInfo['subemail'] =		array('href' => 'member_options/threadsubscribe_email', 'text' => wfMsg('awcf_sub_email'));
             $mOpsBarInfo['sublist'] = 		array('href' => 'member_options/threadsubscribe_list', 'text' => wfMsg('awcf_sub_list'));
			
             wfRunHooks('awcsforum_pm_alert', array($awcUser, &$mOpsBarInfo['pms'], &$bar ) );
            # ksort($mOps);
             
             foreach($mOpsBarInfo as $k => $arr){
             	
             	if($mOps[$k]){
						$bar_awc_forum[$awcf_forum_menu_title][] = 
								array(
									'text'   => $arr['text'],
									'href'   => awc_url . $arr['href'],
									'id'     => 'n-awc-forum-urls',
									'active' => false
								);
             		}
             		
             }
             
             
                    
        }
						
					
		if(is_array($bar_awc_forum)){
		
		   if(array_key_exists('awc_forum_menu_tag', $bar )){
		   		
		   		$passedBar = $bar;
		   		$bar = null;
		   		
		   		foreach($passedBar as $k => $bla){
		   			
		   			if($k == 'awc_forum_menu_tag'){
		   				
		   				foreach($bar_awc_forum as $a){
		   					 $bar[$awcf_forum_menu_title] = $a;
		   				}
		   				
		   				/* Add any extra submenus Admin may have added via ** submenu */
		   				foreach($passedBar['awc_forum_menu_tag'] as $k2 => $bla2){
		   					$bar[$awcf_forum_menu_title][] = $bla2;
		   				}
		   				
		   			} else {
		   				$bar[$k] = $bla;
		   			}
		   		}
		   		
             } elseif(awcs_forum_nav_bar_top) {
               $bar = array_merge($bar_awc_forum,$bar);
             } else {     
               $bar = array_merge($bar,$bar_awc_forum);
          }
               
		}
		
		#awc_pdie($bar);
		return true;
	
	}
	
	
	
	public function forumMenu(){
	
	
	
	
	}
	
	
	
	
	
	
	
	
	
}