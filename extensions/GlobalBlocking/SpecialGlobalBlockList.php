<?php

class SpecialGlobalBlockList extends SpecialPage {
	public $mSearchIP, $mSearch;

	function __construct() {
		parent::__construct( 'GlobalBlockList' );
	}

	function execute( $par ) {
		$out = $this->getOutput();
		$this->setHeaders();
		$ip = isset( $par ) ? $par : $this->getRequest()->getText( 'ip' );
		$this->loadParameters( $ip );

		$out->setPageTitle( $this->msg( 'globalblocking-list' ) );
		$out->setSubtitle( GlobalBlocking::buildSubtitleLinks( 'GlobalBlockList' ) );
		$out->setRobotPolicy( "noindex,nofollow" );
		$out->setArticleRelated( false );
		$out->enableClientCache( false );

		$this->showList();
	}

	function showList() {
		global $wgScript;
		$errors = array();

		// Validate search IP
		$ip = $this->mSearchIP;
		if ( !IP::isIPAddress( $ip ) && strlen( $ip ) ) {
			$errors[] = array( 'globalblocking-list-ipinvalid', $ip );
			$ip = '';
		}

		$out = $this->getOutput();
		$out->addWikiMsg( 'globalblocking-list-intro' );

		// Build the search form
		$searchForm = '';
		$searchForm .= Xml::openElement( 'fieldset' ) .
			Xml::element( 'legend', null, $this->msg( 'globalblocking-search-legend' )->text() );
		$searchForm .= Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript, 'name' => 'globalblocklist-search' ) );
		$searchForm .= Html::hidden( 'title', SpecialPage::getTitleFor( 'GlobalBlockList' )->getPrefixedText() );

		if ( is_array( $errors ) && count( $errors ) > 0 ) {
			$errorstr = '';

			foreach ( $errors as $error ) {
				if ( is_array( $error ) ) {
					$msg = array_shift( $error );
				} else {
					$msg = $error;
					$error = array();
				}

				$errorstr .= Xml::tags( 'li', null, $this->msg( $msg, $error )->parse() );
			}

			$out->addWikiMsg( 'globalblocking-unblock-errors', count( $errors ) );
			$out->addHTML( Xml::tags( 'ul', array( 'class' => 'error' ), $errorstr ) );
		}

		$fields = array();
		$fields['globalblocking-search-ip'] = Xml::input( 'ip', 45, $ip );
		$searchForm .= Xml::buildForm( $fields, 'globalblocking-search-submit' );

		$searchForm .= Xml::closeElement( 'form' ) . Xml::closeElement( 'fieldset' );
		$out->addHTML( $searchForm );

		// Build a list of blocks.
		$conds = array();

		if ( strlen( $ip ) ) {
			list ( $range_start, $range_end ) = IP::parseRange( $ip );

			if ( $range_start != $range_end ) {
				// They searched for a range. Match that exact range only
				$conds = array( 'gb_address' => $ip );
			} else {
				// They searched for an IP. Match any range covering that IP
				$hex_ip = IP::toHex( $ip );
				$ip_pattern = substr( $hex_ip, 0, 4 ) . '%'; // Don't bother checking blocks out of this /16.

				$dbr = wfGetDB( DB_SLAVE );

				$conds = array( 'gb_range_end>=' . $dbr->addQuotes( $hex_ip ), // This block in the given range.
					'gb_range_start<=' . $dbr->addQuotes( $hex_ip ),
					'gb_range_start like ' . $dbr->addQuotes( $ip_pattern ),
					'gb_expiry>' . $dbr->addQuotes( $dbr->timestamp( wfTimestampNow() ) ) );
			}
		}

		$pager = new GlobalBlockListPager( $this, $conds );
		$body = $pager->getBody();
		if ( $body != '' ) {
			$out->addHTML( $pager->getNavigationBar() .
				Html::rawElement( 'ul', array(), $body ) .
				$pager->getNavigationBar() );
		} else {
			$out->wrapWikiMsg(
				"<div class='mw-globalblocking-noresults'>\n$1</div>\n",
				array( 'globalblocking-list-noresults' )
			);
		}
	}

	function loadParameters( $ip ) {
		$ip = trim( $ip );
		$this->mSearchIP = ( $ip !== '' )
			? IP::sanitizeRange( $ip )
			: '';
	}
}

// Shamelessly stolen from SpecialIpblocklist.php
class GlobalBlockListPager extends ReverseChronologicalPager {
	public $mForm, $mConds;

	function __construct( $form, $conds = array() ) {
		$this->mForm = $form;
		$this->mConds = $conds;
		parent::__construct();
		$this->mDb = GlobalBlocking::getGlobalBlockingSlave();
	}

	function formatRow( $row ) {
		## Setup
		$timestamp = $row->gb_timestamp;
		$expiry = $this->getLanguage()->formatExpiry( $row->gb_expiry, TS_MW );
		$options = array();

		if ( $expiry == 'infinity' ) {
			$options[] = $this->msg( 'infiniteblock' )->parse();
		} else {
			$options[] = $this->msg(
				'expiringblock',
				$this->getLanguage()->date( $expiry ),
				$this->getLanguage()->time( $expiry )
			)->parse();
		}

		# Check for whitelisting.
		$wlinfo = GlobalBlocking::getWhitelistInfo( $row->gb_id );
		if ( $wlinfo ) {
			$options[] = $this->msg(
				'globalblocking-list-whitelisted',
				User::whois( $wlinfo['user'] ), $wlinfo['reason']
			)->text();
		}

		$timestamp = $this->getLanguage()->timeanddate( wfTimestamp( TS_MW, $timestamp ), true );

		if ( $row->gb_anon_only ) {
			$options[] = $this->msg( 'globalblocking-list-anononly' )->text();
		}

		## Do afterthoughts (comment, links for admins)
		$info = array();

		if ( $this->getUser()->isAllowed( 'globalunblock' ) ) {
			$unblockTitle = SpecialPage::getTitleFor( "RemoveGlobalBlock" );
			$info[] = Linker::link( $unblockTitle,
				$this->msg( 'globalblocking-list-unblock' )->parse(),
				array(),
				array( 'address' => $row->gb_address )
			);
		}

		global $wgApplyGlobalBlocks;
		if ( $this->getUser()->isAllowed( 'globalblock-whitelist' ) && $wgApplyGlobalBlocks ) {
			$whitelistTitle = SpecialPage::getTitleFor( "GlobalBlockStatus" );
			$info[] = Linker::link( $whitelistTitle,
				$this->msg( 'globalblocking-list-whitelist' )->parse(),
				array(),
				array( 'address' => $row->gb_address )
			);
		}

		if ( $this->getUser()->isAllowed( 'globalblock' ) ) {
			$reblockTitle = SpecialPage::getTitleFor( 'GlobalBlock' );
			$msg = $this->msg( 'globalblocking-list-modify' )->parse();
			$info[] = Linker::link(
				$reblockTitle,
				$msg,
				array(),
				array( 'wpAddress' => $row->gb_address, 'modify' => 1 )
			);
		}

		## Userpage link / Info on originating wiki
		$display_wiki = GlobalBlocking::getWikiName( $row->gb_by_wiki );
		$user_display = GlobalBlocking::maybeLinkUserpage( $row->gb_by_wiki, $row->gb_by );
		$infoItems = count( $info ) ?
			$this->msg( 'parentheses', $this->getLanguage()->pipeList( $info ) )->text() :
			'';

		## Put it all together.
		return Html::rawElement( 'li', array(),
			$this->msg( 'globalblocking-list-blockitem',
				$timestamp,
				$user_display,
				$display_wiki,
				$row->gb_address,
				$this->getLanguage()->commaList( $options )
			)->parse() . ' ' .
				Linker::commentBlock( $row->gb_reason ) . ' ' .
				$infoItems
		);
	}

	function getQueryInfo() {
		$conds = $this->mConds;
		$conds[] = 'gb_expiry>' . $this->mDb->addQuotes( $this->mDb->timestamp() );
		return array(
			'tables' => 'globalblocks',
			'fields' => '*',
			'conds' => $conds,
		);
	}

	function getIndexField() {
		return 'gb_timestamp';
	}
}
