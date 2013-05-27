<?PHP
/**
* Config file...
* @filepath /extensions/awc/config/config.php
* @package awcsForum
* @author Another Web Company
* @license http://wiki.anotherwebcom.com/AWC%27s_MediaWiki_Scripts_License
* @link http://wiki.anotherwebcom.com/Category:AWC's_MediaWiki_Forum_Extension
* 
*	=	Version Control Info	=
* SVN  Revision: $Revision: 502 $
* Last Modified: $Date: 2011-01-02 22:13:00 -0500 (Sun, 02 Jan 2011) $
* 
*/

if ( !defined( 'MEDIAWIKI' ) ) die();

/*  Set your languages Special page prefix */
define('awcs_forum_special_prefix', 'Special');


/*
 This controls your forums Default Language
 Change the 'en' to what you need.
 Make sure you create a new language sheet in yout AdminCP before you change this.
*/
define('awcs_forum_lang_default', 'en');

/*
If you have problems with thread titles being displayed incorrectly in different languages 
other then English, change the false value to true and it should correct every thing. 
Please try this before you go and start to change things.
*/ 
define('awcs_forum_convert_latin', false);


// Display the Forums Navagation menu automaticly in your Wiki's 'MediaWiki:Sidebar'
//  place * awc_forum_menu_tag in your 'MediaWiki:Sidebar' and the forums menu will appear there...
/* Example:
 
* navigation
** mainpage|mainpage-description
** portal-url|portal
** currentevents-url|currentevents
** recentchanges-url|recentchanges
** randompage-url|randompage
** helppage|help
* awc_forum_menu_tag   <------------------
* SEARCH
* TOOLBOX
* LANGUAGES

http://wiki.anotherwebcom.com/awc_forum_menu_tag */
define('awcs_forum_nav_bar', true);

// Place Forum Menu at the top of your current menu or at the bottom
define('awcs_forum_nav_bar_top', true); // true = top, false = bottom


/* Display the "Whos Here" at the bottom of your Wiki
Note: there is also an Admin setting to control this display in the Forum
*/
define('show_whos_here_in_WIKI', true);

// Enable the use of the Poll Tag
// http://wiki.anotherwebcom.com/Poll_Tag
define('awcs_forum_use_poll', true);



/*PM info in personal-bar Config*/
// http://wiki.anotherwebcom.com/Forum_config.php_'awcs_forum_show_pm_personal_bar'
define('awcs_forum_show_pm_personal_bar', true); //Show PM Link in Personal bar (true = show, false = not show)
define('awcs_forum_pm_position_personal_bar', 6); //Number of position in the Personal bar (counting from the left)


/*PM info down under article name Config*/
// http://wiki.anotherwebcom.com/Forum_config.php_'awcs_forum_show_pm_under_article_name'
define('awcs_forum_show_pm_under_article_name', true); //Shows PM info down under article name.

