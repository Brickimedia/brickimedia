<?php
header("Location: /");
switch ($_GET['site']) {
	case "en":
		header( 'Location: http://en.brickimedia.org/wiki/Special:Search/' . ($_GET['search']) ) ;
		break;
	case "meta":
		header( 'Location: http://meta.brickimedia.org/wiki/Special:Search/' . ($_GET['search']) ) ;
		break;
	case "customs":
		header( 'Location: http://customs.brickimedia.org/wiki/Special:Search/' . ($_GET['search']) ) ;
		break;
	case "stories":
		header( 'Location: http://stories.brickimedia.org/wiki/Special:Search/' . ($_GET['search']) ) ;
		break;
	case "cuusoo":
		header( 'Location: http://en.brickimedia.org/wiki/Special:Search/' . ($_GET['search']) ) ;
		break;
	default:
		exit(0);
}