<?php
/* RANDOMWIKI by George Barnick
** Developed for Brickimedia
** http://www.brickimedia.org
** ----------------------------
** Automatically redirects the
** user to a random wiki on the
** Brickimedia network
** ----------------------------
** LATEST UPDATE
** Prevent redirect to the same
** wiki the user accesses the
** special page from.
*/
class SpecialRandomWiki extends SpecialPage {
        function __construct() {
                parent::__construct( 'RandomWiki' );
        }
 
        function execute( $par ) {
                $request = $this->getRequest();
                $output = $this->getOutput();
                $this->setHeaders();
 
                # Get request data from, e.g.
                $param = $request->getText( 'param' );
 
                # Do stuff
                # ...
                if ( $_SERVER["HTTP_HOST"] == "en.brickimedia.org" ) {
					$urls = array(
						"customs.brickimedia.org", 
						"meta.brickimedia.org",
						"lmbw.brickimedia.org",
						"stories.brickimedia.org"
					);
				} else if ( $_SERVER["HTTP_HOST"] == "customs.brickimedia.org" ) {
					$urls = array(
						"en.brickimedia.org",
						"meta.brickimedia.org",
						"lmbw.brickimedia.org",
						"stories.brickimedia.org"
					);
				} else if ( $_SERVER["HTTP_HOST"] == "meta.brickimedia.org" ) {
					$urls = array(
						"en.brickimedia.org",
						"customs.brickimedia.org",
						"lmbw.brickimedia.org",
						"stories.brickimedia.org"
					);
				} else if ( $_SERVER["HTTP_HOST"] == "lmbw.brickimedia.org" ) {
					$urls = array(
						"en.brickimedia.org",
						"customs.brickimedia.org",
						"meta.brickimedia.org",
						"stories.brickimedia.org"
					);
				} else if ( $_SERVER["HTTP_HOST"] == "stories.brickimedia.org" ) {
					$urls = array(
						"en.brickimedia.org",
						"customs.brickimedia.org",
						"meta.brickimedia.org",
						"lmbw.brickimedia.org"
					);
				}
				$url = $urls[array_rand($urls)]; 
				header("Location: http://$url");
	}
}