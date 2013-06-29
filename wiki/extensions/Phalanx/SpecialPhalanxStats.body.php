<?php

class PhalanxStats extends UnlistedSpecialPage {

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		parent::__construct( 'PhalanxStats', 'phalanx' );
	}

	/**
	 * Show the special page
	 *
	 * @param $par Mixed: parameter passed to the special page or null
	 */
	public function execute( $par ) {
		$out = $this->getOutput();
		$user = $this->getUser();
		$request = $this->getRequest();

		// Check restrictions
		if ( !$this->userCanExecute( $user ) ) {
			$this->displayRestrictionError();
			return;
		}

		// No access for blocked users
		if ( $user->isBlocked() ) {
			$out->blockedPage();
			return;
		}

		if ( empty( $par ) ) {
			$par = $request->getInt( 'blockId' );
		}

		// Set the page title, robot policies, etc.
		$this->setHeaders();

		// Add CSS
		$out->addModuleStyles( 'ext.phalanx' );

		$wikiId = $request->getInt( 'wikiId' );

		// show block ID or blocks for wiki
		if ( strpos( $par, 'wiki' ) !== false ) {
			list( , $par ) = explode( '/', $par );
			$show = 'blockWiki';
		} elseif ( $wikiId ) { // GET requests via the form
			$show = 'blockWiki';
			$par = $wikiId;
		} else { // fallback
			$show = 'blockId';
		}

		// give up if no block ID is given
		if ( empty( $par ) ) {
			$this->showForms();
			return true;
		}

		if ( $show == 'blockId' ) {
			$this->blockStats( $par );
		} else {
			$this->blockWiki( $par );
		}
	}

	private function blockStats( $par ) {
		$lang = $this->getLanguage();
		$out = $this->getOutput();
		$user = $this->getUser();

		// We have a valid ID, change the title to use it
		$out->setPageTitle( $this->msg( 'phalanxstats' )->text() . ' #' . $par );

		$block = array();
		$block = Phalanx::getFromId( intval( $par ) );

		if ( empty( $block ) ) {
			$out->addWikiMsg( 'phalanx-stats-block-notfound', $par );
			return true;
		}

		$yes = $this->msg( 'phalanx-yes' )->text();
		$no = $this->msg( 'phalanx-no' )->text();
		// process block data for display
		$data = array();
		$data['id'] = $block['id'];
		$data['author_id'] = User::newFromId( $block['author_id'] )->getName();
		$data['type'] = implode( ', ', Phalanx::getTypeNames( $block['type'] ) );

		$data['timestamp'] = $lang->timeanddate( $block['timestamp'] );
		if ( $block['expire'] == null ) {
			$data['expire'] = $this->msg( 'infiniteblock' )->text();
		} else {
			$data['expire'] = $lang->timeanddate( $block['expire'] );
		}
		$data['regex'] = $block['regex'] ? $yes : $no;
		$data['case'] = $block['case'] ? $yes : $no;
		$data['exact'] = $block['exact'] ? $yes : $no;
		$data['lang'] = empty( $block['lang'] ) ? '*' : $block['lang'];

		// Pull these out of the array, so they don't get used in the top rows
		if ( $block['type'] & Phalanx::TYPE_EMAIL && !$user->isAllowed( 'phalanxemailblock' ) ) {
			// hide e-mail from non-privileged users
			$data2['text'] = $this->msg( 'phalanx-email-filter-hidden' );
		} else {
			$data2['text'] = $block['text'];
		}
		$data2['reason'] = $block['reason'];

		$headers = array(
			$this->msg( 'phalanx-stats-table-id' )->text(),
			$this->msg( 'phalanx-stats-table-user' )->text(),
			$this->msg( 'phalanx-stats-table-type' )->text(),
			$this->msg( 'phalanx-stats-table-create' )->text(),
			$this->msg( 'phalanx-stats-table-expire' )->text(),
			$this->msg( 'phalanx-stats-table-regex' )->text(),
			$this->msg( 'phalanx-stats-table-case' )->text(),
			$this->msg( 'phalanx-stats-table-exact' )->text(),
			$this->msg( 'phalanx-stats-table-language' )->text(),
		);

		$html = '';

		$tableAttribs = array(
			'border' => 1,
			'class' => 'wikitable',
			'style' => 'font-family: monospace;',
		);

		// Use magic to build it
		$table = Xml::buildTable( array( $data ), $tableAttribs, $headers );
		// Rip off bottom
		$table = str_replace( '</table>', '', $table );
		// Add some stuff
		$table .= '<tr><th>' . $this->msg( 'phalanx-stats-table-text' )->text() .
			'</th><td colspan="8">' . htmlspecialchars( $data2['text'] ) .
			'</td></tr>';
		$table .= '<tr><th>' . $this->msg( 'phalanx-stats-table-reason' )->text() .
			"</th><td colspan=\"8\">{$data2['reason']}</td></tr>";
		// Seal it back up
		$table .= '</table>';

		$html .= $table . "\n";

		$phalanxURL = SpecialPage::getTitleFor( 'Phalanx' )->getFullURL( array( 'id' => $block['id'] ) );
		$html .= " &bull; <a class=\"modify\" href=\"{$phalanxURL}\">" .
			$this->msg( 'phalanx-link-modify' )->text() . "</a><br />\n";
		$html .= "<br />\n";
		$out->addHTML( $html );

		$pager = new PhalanxStatsPager( $par );

		$html = '';
		$html .= $pager->getNavigationBar();
		$html .= $pager->getBody();
		$html .= $pager->getNavigationBar();

		$out->addHTML( $html );
	}

	private function blockWiki( $par ) {
		$out = $this->getOutput();

		if ( !is_numeric( $par ) ) {
			return false;
		}
		$url = self::getFSD( $par );
		$sitename = self::getSitename( $par );

		// We have a valid ID, change the title to use it
		$out->setPageTitle( $this->msg( 'phalanxstats' )->text() . ': ' . $url );

		// process block data for display
		$data['wiki_id'] = $par;
		$data['sitename'] = $sitename;
		$data['url'] = $url;
		//$data['last_timestamp'] = $this->getLanguage()->timeanddate( $oWiki->city_last_timestamp );

		$html = '';

		$headers = array(
			$this->msg( 'phalanx-stats-table-wiki-id' )->text(),
			$this->msg( 'phalanx-stats-table-wiki-name' )->text(),
			$this->msg( 'phalanx-stats-table-wiki-url' )->text(),
			//$this->msg( 'phalanx-stats-table-wiki-last-edited' )->text(),
		);

		$tableAttribs = array(
			'border' => 1,
			'class' => 'wikitable',
			'style' => 'font-family: monospace;',
		);

		// Use magic to build it
		$table = Xml::buildTable( array( $data ), $tableAttribs, $headers );
		$html .= $table . "<br />\n";

		$out->addHTML( $html );

		$pager = new PhalanxWikiStatsPager( $par );

		$html = '';
		$html .= $pager->getNavigationBar();
		$html .= $pager->getBody();
		$html .= $pager->getNavigationBar();

		$out->addHTML( $html );
	}

	/**
	 * Fetch the full subdomain for the wiki with ID number $wikiID
	 *
	 * @param $wikiID Integer: wiki ID number
	 * @return array
	 */
	private static function getFSD( $wikiID ) {
		$dbr = wfGetDB( DB_SLAVE );

		return $dbr->selectField(
			'wiki_settings',
			'ws_value',
			array(
				'ws_setting' => 'wgWikiFullSubdomain',
				'ws_wiki' => $wikiID
			),
			__METHOD__
		);
	}

	/**
	 * Fetch the sitename for the wiki with ID number $wikiID
	 *
	 * @param $wikiID Integer: wiki ID number
	 * @return array
	 */
	private static function getSitename( $wikiID ) {
		$dbr = wfGetDB( DB_SLAVE );

		return $dbr->selectField(
			'wiki_settings',
			'ws_value',
			array(
				'ws_setting' => 'wgSitename',
				'ws_wiki' => $wikiID
			),
			__METHOD__
		);
	}

	/**
	 * Show "Recent triggers of a block" and "Recent blocks on a wiki" forms
	 * if no parameters were passed
	 */
	private function showForms() {
		$out = $this->getOutput();

		$statsURL = SpecialPage::getTitleFor( 'PhalanxStats' )->getFullURL();

		$formParam = array( 'method' => 'get', 'action' => $statsURL );

		$loadBtn = $this->msg( 'phalanx-stats-load-btn' )->text();

		$content = '';
		$content .= Xml::openElement( 'form', $formParam ) . "\n";
		$content .= $this->msg( 'phalanx-stats-id',
			Xml::input( 'blockId', 5, '', array() )
		)->text();
		$content .= Xml::submitButton( $loadBtn ) . "\n";
		$content .= Xml::closeElement( 'form' ) . "\n";
		$content .= $this->msg( 'phalanx-stats-example' )->text() . "\n<ul>\n";
		$content .= '<li>' . SpecialPage::getTitleFor( 'PhalanxStats', '123456' )->getFullURL() . "</li>\n";
		$content .= '<li>' . SpecialPage::getTitleFor( 'PhalanxStats' )->getFullURL( array( 'blockId' => '123456' ) ) . "</li>\n";
		$content .= "</ul>\n";

		$out->addHTML( Xml::fieldset( $this->msg( 'phalanx-stats-recent-triggers' )->text(), $content, array() ) );

		$formParam = array( 'method' => 'get', 'action' => $statsURL );

		$content = '';
		$content .= Xml::openElement( 'form', $formParam ) . "\n";
		$content .= $this->msg( 'phalanx-stats-id', Xml::input( 'wikiId', 5, '', array() ) )->text();
		$content .= Xml::submitButton( $loadBtn ) . "\n";
		$content .= Xml::closeElement( 'form' ) . "\n";
		$content .= $this->msg( 'phalanx-stats-example' )->text() . "\n<ul>\n";
		$content .= '<li>' . SpecialPage::getTitleFor( 'PhalanxStats', 'wiki/123456' )->getFullURL() . "</li>\n";
		$content .= "</ul>\n";

		$out->addHTML( Xml::fieldset( $this->msg( 'phalanx-stats-recent-blocks' )->text(), $content, array() ) );

		return;
	}
}

class PhalanxStatsPager extends ReverseChronologicalPager {
	public function __construct( $id ) {
		parent::__construct();
		$this->mDb = wfGetDB( DB_SLAVE );

		$this->mBlockId = (int) $id;
		$this->mDefaultQuery['blockId'] = (int) $id;
	}

	function getQueryInfo() {
		$query['tables'] = 'phalanx_stats';
		$query['fields'] = '*';
		$query['conds'] = array(
			'ps_blocker_id' => $this->mBlockId,
		);

		return $query;
	}

	function getPagingQueries() {
		$queries = parent::getPagingQueries();

		foreach ( $queries as $type => $query ) {
			$query[$type]['blockId'] = $this->mBlockId;
			$queries[$type] = $query;
		}

		return $queries;
	}

	function getIndexField() {
		return 'ps_timestamp';
	}

	function getStartBody() {
		return '<ul id="phalanx-block-' . $this->mBlockId . '-stats">';
	}

	function getEndBody() {
		return '</ul>';
	}

	function formatRow( $row ) {
		$type = implode( Phalanx::getTypeNames( $row->ps_blocker_type ) );
		$username = $row->ps_blocked_user;
		$timestamp = $this->getLanguage()->timeanddate( $row->ps_timestamp );
		$wikiNumber = $row->ps_wiki_id;
		$url = self::getFSD( $wikiNumber );

		$html = '<li>' . $this->msg(
			'phalanx-stats-entry',
			$type, $username, $url, $timestamp
		)->parse() . '</li>';

		return $html;
	}

	/**
	 * Fetch the full subdomain for the wiki with ID number $wikiID
	 *
	 * @param $wikiID Integer: wiki ID number
	 * @return array
	 */
	private static function getFSD( $wikiID ) {
		$dbr = wfGetDB( DB_SLAVE );

		return $dbr->selectField(
			'wiki_settings',
			'ws_value',
			array(
				'ws_setting' => 'wgWikiFullSubdomain',
				'ws_wiki' => $wikiID
			),
			__METHOD__
		);
	}
}

class PhalanxWikiStatsPager extends ReverseChronologicalPager {
	public function __construct( $id ) {
		parent::__construct();
		$this->mDb = wfGetDB( DB_SLAVE );

		$this->mWikiId = (int) $id;
		$this->mTitle = SpecialPage::getTitleFor( 'Phalanx' );
		$this->mTitleStats = SpecialPage::getTitleFor( 'PhalanxStats' );
	}

	function getQueryInfo() {
		$query['tables'] = 'phalanx_stats';
		$query['fields'] = '*';
		$query['conds'] = array(
			'ps_wiki_id' => $this->mWikiId,
		);

		return $query;
	}

	function getPagingQueries() {
		$queries = parent::getPagingQueries();

		foreach ( $queries as $type => $query ) {
			if ( $query === false ) {
				continue;
			}
			$query['wikiId'] = $this->mWikiId;
			$queries[$type] = $query;
		}

		return $queries;
	}

	function getIndexField() {
		return 'ps_timestamp';
	}

	function getStartBody() {
		return '<ul id="phalanx-block-wiki-' . $this->mWikiId . '-stats">';
	}

	function getEndBody() {
		return '</ul>';
	}

	function formatRow( $row ) {
		$type = implode( Phalanx::getTypeNames( $row->ps_blocker_type ) );

		$username = $row->ps_blocked_user;

		$timestamp = $this->getLanguage()->timeanddate( $row->ps_timestamp );

		$blockId = (int) $row->ps_blocker_id;

		// block
		$phalanxURL = Linker::link(
			$this->mTitle,
			$blockId,
			array(),
			array( 'id' => $blockId )
		);

		// stats
		$statsURL = Linker::link(
			$this->mTitleStats,
			$this->msg( 'phalanx-link-stats' )->escaped(),
			array(),
			array( 'blockId' => $blockId )
		);

		$html = '<li>';
		$html .= wfMessage(
			'phalanx-stats-row-per-wiki'
		)->rawParams(
			$type,
			$username,
			$phalanxURL,
			$timestamp,
			$statsURL
		)->parse();
		$html .= '</li>';

		return $html;
	}
}
