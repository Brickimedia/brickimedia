<?php

class SpecialPhalanx extends SpecialPage {

	public $mDefaultExpire;

	/**
	 * Constructor -- set up the new special page
	 */
	public function __construct() {
		$this->mDefaultExpire = '1 year';
		parent::__construct( 'Phalanx', 'phalanx' /* restriction */ );
	}

	/**
	 * Show the special page
	 *
	 * @param $par Mixed: parameter passed to the special page or null
	 */
	public function execute( $par ) {
		wfProfileIn( __METHOD__ );

		$out = $this->getOutput();
		$user = $this->getUser();

		// Check restrictions
		if ( !$this->userCanExecute( $user ) ) {
			$this->displayRestrictionError();
			return;
		}

		// Can't use the special page if database is locked...
		if ( wfReadOnly() ) {
			$out->readOnlyPage();
			return;
		}

		// No access for blocked users
		if ( $user->isBlocked() ) {
			$out->blockedPage();
			return;
		}

		// Set the page title, robot policies, etc.
		$this->setHeaders();

		// Add CSS & JS
		$out->addModuleStyles( 'ext.phalanx' );
		$out->addModuleScripts( 'ext.phalanx' );

		require_once( 'templates/phalanx.tmpl.php' );
		$template = new PhalanxTemplate();

		$pager = new PhalanxPager();

		$listing = $pager->getNavigationBar();
		$listing .= $pager->getBody();
		$listing .= $pager->getNavigationBar();

		$data = $this->prefillForm();

		$template->set( 'action', $this->getTitle()->getFullURL() );
		$template->set( 'default_expire', $this->mDefaultExpire );
		$template->set( 'expiries', Phalanx::getExpireValues() );
		$template->set( 'listing', $listing );
		$template->set( 'data', $data );
		$template->set( 'showEmail', $user->isAllowed( 'phalanxemailblock' ) );

		$out->addTemplate( $template );

		wfProfileOut( __METHOD__ );
	}

	function prefillForm() {
		$request = $this->getRequest();

		$data = array();

		$id = $request->getInt( 'id' );
		if ( $id ) {
			$data = Phalanx::getFromId( $id );
			$data['type'] = Phalanx::getTypeNames( $data['type'] );
			$data['checkBlocker'] = '';
			$data['typeFilter'] = array();
		} else {
			$data['type'] = array_fill_keys( $request->getArray( 'type', array() ), true );
			$data['checkBlocker'] = $request->getText( 'wpPhalanxCheckBlocker', '' );
			$data['typeFilter'] = array_fill_keys( $request->getArray( 'wpPhalanxTypeFilter', array() ), true );
		}

		$data['checkId'] = ( $id ? $id : null );

		$data['text'] = $request->getText( 'ip' );
		$data['text'] = $request->getText( 'target', $data['text'] );
		$data['text'] = $request->getText( 'text', $data['text'] );

		$data['text'] = self::decodeValue( $data['text'] );

		$data['case'] = $request->getCheck( 'case' );
		$data['regex'] = $request->getCheck( 'regex' );
		$data['exact'] = $request->getCheck( 'exact' );

		$data['expire'] = $request->getText( 'expire', $this->mDefaultExpire );

		$data['lang'] = $request->getText( 'lang', 'all' );

		$data['reason'] = self::decodeValue( $request->getText( 'reason' ) );

		// test form input
		$data['test'] = self::decodeValue( $request->getText( 'test' ) );

		return $data;
	}

	static function decodeValue( $input ) {
		return htmlspecialchars( str_replace( '_', ' ', urldecode( $input ) ) );
	}

}

class PhalanxPager extends ReverseChronologicalPager {
	public function __construct() {
		$request = $this->getRequest();

		parent::__construct();
		$this->mDb = wfGetDB( DB_SLAVE );

		$this->mSearchText = $request->getText( 'wpPhalanxCheckBlocker', null );
		$this->mSearchFilter = $request->getArray( 'wpPhalanxTypeFilter' );
		$this->mSearchId = $request->getInt( 'id' );
	}

	function getQueryInfo() {
		$query['tables'] = 'phalanx';
		$query['fields'] = '*';

		if ( $this->mSearchId ) {
			$query['conds'][] = "p_id = {$this->mSearchId}";
		} else {
			if ( !empty( $this->mSearchText ) ) {
				$query['conds'][] = '(p_text LIKE "%' . $this->mDb->escapeLike( $this->mSearchText ) . '%")';
			}

			if ( !empty( $this->mSearchFilter ) ) {
				$typemask = 0;
				foreach ( $this->mSearchFilter as $type ) {
					$typemask |= $type;
				}
				$query['conds'][] = "p_type & $typemask <> 0";
			}
		}

		return $query;
	}

	function getIndexField() {
		return 'p_timestamp';
	}

	function getStartBody() {
		return '<ul>';
	}

	function getEndBody() {
		return '</ul>';
	}

	function formatRow( $row ) {
		$lang = $this->getLanguage();

		// hide e-mail filters
		if ( $row->p_type & Phalanx::TYPE_EMAIL && !$this->getUser()->isAllowed( 'phalanxemailblock' ) ) {
			return '';
		}

		$author = User::newFromId( $row->p_author_id );
		$authorName = $author->getName();

		// uses escapeFullURL() for XHTML compliance (encoded ampersands)
		$phalanxUrl = SpecialPage::getTitleFor( 'Phalanx' )->escapeFullURL( array( 'id' => $row->p_id ) );
		$statsUrl = SpecialPage::getTitleFor( 'PhalanxStats', $row->p_id )->getFullURL();

		$html = '<li id="phalanx-block-' . $row->p_id . '">';

		$html .= '<b>' . htmlspecialchars( $row->p_text ) . '</b> (' ;

		$list = array(
			( $row->p_regex ? $this->msg( 'phalanx-list-regex' )->text() :
				$this->msg( 'phalanx-plain-text' )->text() )
		);
		if ( $row->p_case ) {
			$list[] = $this->msg( 'phalanx-format-case' )->text();
		}
		if ( $row->p_exact ) {
			$list[] = $this->msg( 'phalanx-format-exact' )->text();
		}
		$html .= $lang->commaList( $list );

		$html .= ') ';

		// control links
		$html .= " &bull; <a class=\"unblock\" href=\"{$phalanxUrl}\">" .
			$this->msg( 'phalanx-link-unblock' )->text() . '</a>';
		$html .= " &bull; <a class=\"modify\" href=\"{$phalanxUrl}\">" .
			$this->msg( 'phalanx-link-modify' )->text() . '</a>';
		$html .= " &bull; <a class=\"stats\" href=\"{$statsUrl}\">" .
			$this->msg( 'phalanx-link-stats' )->text() . '</a>';

		// types
		$html .= '<br /> ' . $this->msg( 'phalanx-display-row-blocks',
			implode( ', ', Phalanx::getTypeNames( $row->p_type ) ) )->text();

		$html .= ' &bull; ' . $this->msg(
			'phalanx-display-row-created',
			$authorName,
			$lang->timeanddate( $row->p_timestamp )
		)->parse();

		$html .= '</li>';

		return $html;
	}
}
