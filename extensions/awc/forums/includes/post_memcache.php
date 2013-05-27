<?PHP
/**
* 
*	=	Version Control Info	=
* SVN  Revision: $Revision: 503 $
* Last Modified: $Date: 2011-01-02 22:22:09 -0500 (Sun, 02 Jan 2011) $
* 
*/

if ( !defined( 'MEDIAWIKI' ) ) die();

class awcs_memcache{
	
	#private $avatarGuest ;
	#private $avatarGuest;
	
	public $name;
	public $m_id = 0;
	public $m_posts = 0 ;
	public $m_topics = 0 ;
	public $m_sig = '';
	public $m_adv_size;
	public $m_adv;
	public $m_advw;
	public $m_advh;
	public $edit_count = 0 ;
	public $group;
	public $member_title;
	
    function __construct(){
    	
    	#$this->avatarGuest = $this->wgScriptPath . '/extensions/awc/forums/images/avatars/avatar_guest.gif';
    }
    
    public function getGuest($cf_AvatraSize){
    global $wgScriptPath;
    	
    	self::SetAvatra($cf_AvatraSize, $wgScriptPath . awcForumPath . 'images/avatars/avatar_guest.gif');
    
    	return $this;
    
    }
    
    
    private function SetAvatra($size, $path){
 		$AvatraSize = explode('x', $size);
        $this->m_adv = $path;
        $this->m_advw = $AvatraSize[0];
        $this->m_advh = $AvatraSize[1];
    }
	
	
}