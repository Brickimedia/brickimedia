<?php
/* categorysuggest Mediawiki Extension
 *
 * @author Andreas Rindler (mediawiki at jenandi dot com)
 * @credits Jared Milbank, Leon Weber <leon.weber@leonweber.de>, Manuel Schneider <manuel.schneider@wikimedia.ch>, Daniel Friesen http://wiki-tools.com, Adam Franco <afranco@middlebury.edu>
 * @licence GNU General Public Licence 2.0 or later
 * @description Adds input box to edit and upload page which allows users to assign categories to the article. When a user starts typing the name of a category, the extension queries the database to find categories that match the user input."
 *
*/

//CONFIGURE WITH YOUR LOCAL CREDENTIALS
mysql_connect("localhost", "root", "insfarsit");
mysql_select_db("wiki");
$wgPrefix = ''; //MediaWiki database prefix you selected during install


if(isset($_GET['q'])) {
    $searchString = mysql_real_escape_string($_GET['q']);
    if($searchString != NULL) {
        $sql = mysql_query("SELECT DISTINCT cl_to as cats FROM ".$wgPrefix ."categorylinks WHERE cl_to LIKE '".$searchString."%'");
        $suggestStrings=array();
        while($row = mysql_fetch_assoc($sql)) {
                array_push($suggestStrings,$row['cats']);
        }
        echo implode(";",$suggestStrings);
        
        //free up result set
        mysql_free_result($sql);
    }
}

?>