<?php
class SpecialChat extends SpecialPage {
        function __construct() {
                parent::__construct( 'Chat' );
        }
	
 
        function execute( $par ) {
				if (  !$this->userCanExecute( $this->getUser() )  ) {
                	$this->displayRestrictionError();
                	return;
      			}
                $request = $this->getRequest();
                $output = $this->getOutput();
                $this->setHeaders();
 
                # Get request data from, e.g.
                $param = $request->getText( 'param' );
 
                # Do stuff
                # ...
				$wikitext = '{{#ifexist: MediaWiki:Chat-notice|{{MediaWiki:Chat-notice}}<br />|}}<htmltag tagname="iframe" src="http://dev.brickimedia.org/cometchat/modules/chatrooms/index.php?basedata=null" width="100%" height="600px" style="border:1px solid #888888;"></htmltag>';
                $output->addWikiText( $wikitext );
//				$wikitext = '{{#ifexist: MediaWiki:Chat-notice|{{MediaWiki:Chat-notice}}<br />|}}<htmltag tagname="iframe" src="http://dev.brickimedia.org/chat/cometchat1/modules/chatrooms/index.php" width="100%" height="600px" style="border:1px solid #888888;"></htmltag>';
//
				$output->addWikiText( $wikitext );
				function __construct() {
        				parent::__construct( 'Chat', 'chat' );
				}		
        }
}