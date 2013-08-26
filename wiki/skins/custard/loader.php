<?php

/*
 * From http://www.queness.com/post/328/a-simple-ajax-driven-website-with-jqueryphp
*/

//Get the page parameter from the url
switch($_GET['action'])  {

    case 'view' : $page = 'view';
        break;
    case 'edit' : $page = 'edit';
        break;
    case 'history' : $page = 'history';
        break;
    case 'move' : $page = 'move';
        break;
    case 'delete' : $page = 'delete';
        break;

}

echo $page;

?>