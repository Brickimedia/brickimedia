<?php

class SpecialGlobalBlockStatus extends SpecialPage {
	public $mAddress, $mReason;

	function __construct() {
		parent::__construct( 'GlobalBlockStatus', 'globalblock-whitelist' );
	}

	function execute( $par ) {
		$this->setHeaders();

		$this->loadParameters();

		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'globalblocking-whitelist' ) );
		$out->setSubtitle( GlobalBlocking::buildSubtitleLinks( 'GlobalBlockStatus' ) );
		$out->setRobotPolicy( "noindex,nofollow" );
		$out->setArticleRelated( false );
		$out->enableClientCache( false );

		if ( !$this->userCanExecute( $this->getUser() ) ) {
			$this->displayRestrictionError();
			return;
		}

		global $wgApplyGlobalBlocks;
		if ( !$wgApplyGlobalBlocks ) {
			$out->addWikiMsg( 'globalblocking-whitelist-notapplied' );
			return;
		}

		$errors = '';

		$request = $this->getRequest();
		if ( $request->wasPosted() && $this->getUser()->matchEditToken( $request->getVal( 'wpEditToken' ) ) ) {
			// They want to submit. Let's have a look.
			$errors = $this->trySubmit();
			if ( !$errors ) {
				// Success!
				return;
			}
		}

		$errorstr = '';

		if ( is_array( $errors ) && count( $errors ) > 0 ) {
			foreach ( $errors as $error ) {
				if ( is_array( $error ) ) {
					$msg = array_shift( $error );
				} else {
					$msg = $error;
					$error = array();
				}
				$errorstr .= Xml::tags( 'li', null, $this->msg( $msg, $error )->parse() );
			}

			$errorstr = $this->msg( 'globalblocking-whitelist-errors' )
				->numParams( count( $errors ) )->parseAsBlock() .
				Xml::tags( 'ul', array( 'class' => 'error' ), $errorstr );

			$errorstr = Xml::tags( 'div', array( 'class' => 'error' ), $errorstr );
		}

		$this->form( $errorstr );
	}

	function loadParameters() {
		$request = $this->getRequest();
		$ip = trim( $request->getText( 'address' ) );
		$this->mAddress = ( $ip !== '' || $request->wasPosted() )
			? IP::sanitizeRange( $ip )
			: '';
		$this->mReason = $request->getText( 'wpReason' );
		$this->mWhitelistStatus = $request->getCheck( 'wpWhitelistStatus' );
		$this->mEditToken = $request->getText( 'wpEditToken' );

		if ( $this->mAddress ) {
			$this->mCurrentStatus = ( GlobalBlocking::getWhitelistInfoByIP( $this->mAddress ) !== false );

			if ( !$request->wasPosted() ) {
				$this->mWhitelistStatus = $this->mCurrentStatus;
			}
		} else {
			$this->mCurrentStatus = true;
		}
	}

	function trySubmit() {
		$ip = $this->mAddress;

		// Is it blocked?
		if ( !( $id = GlobalBlocking::getGlobalBlockId( $ip ) ) ) {
			return array( array( 'globalblocking-notblocked', $ip ) );
		}

		$new_status = $this->mWhitelistStatus;
		$cur_status = $this->mCurrentStatus;

		// Already whitelisted.
		if ( $cur_status == $new_status ) {
			return array( 'globalblocking-whitelist-nochange' );
		}

		$dbw = wfGetDB( DB_MASTER );

		$out = $this->getOutput();
		if ( $new_status == true ) {
			$gdbr = GlobalBlocking::getGlobalBlockingSlave();

			// Find the expiry of the block. This is important so that we can store it in the
			// global_block_whitelist table, which allows us to purge it when the block has expired.
			$expiry = $gdbr->selectField( 'globalblocks', 'gb_expiry', array( 'gb_id' => $id ), __METHOD__ );

			$row = array(
				'gbw_by' => $this->getUser()->getId(),
				'gbw_by_text' => $this->getUser()->getName(),
				'gbw_reason' => $this->mReason,
				'gbw_address' => $ip,
				'gbw_expiry' => $expiry,
				'gbw_id' => $id
			);
			$dbw->replace( 'global_block_whitelist', array( 'gbw_id' ), $row, __METHOD__ );

			$page = new LogPage( 'gblblock' );
			$page->addEntry( 'whitelist', Title::makeTitleSafe( NS_USER, $ip ), $this->mReason );

			$out->addWikiMsg( 'globalblocking-whitelist-whitelisted', $ip, $id );
		} else {
			// Delete the row from the database
			$dbw->delete( 'global_block_whitelist', array( 'gbw_id' => $id ), __METHOD__ );

			$page = new LogPage( 'gblblock' );
			$page->addEntry( 'dwhitelist', Title::makeTitleSafe( NS_USER, $ip ), $this->mReason );
			$out->addWikiMsg( 'globalblocking-whitelist-dewhitelisted', $ip, $id );
		}

		$link = Linker::linkKnown(
			SpecialPage::getTitleFor( 'GlobalBlockList' ),
			$this->msg( 'globalblocking-return' )->escaped()
		);
		$out->addHTML( $link );

		$out->setSubtitle( $this->msg( 'globalblocking-whitelist-successsub' ) );

		return array();
	}

	function form( $error ) {
		$out = $this->getOutput();
		$out->addWikiMsg( 'globalblocking-whitelist-intro' );

		$out->addHTML( $error );

		$form = '';
		$form .= Xml::openElement( 'fieldset' ) . Xml::element( 'legend', null, $this->msg( 'globalblocking-whitelist-legend' )->text() );
		$form .= Xml::openElement( 'form', array( 'method' => 'post', 'action' => $this->getTitle()->getFullURL(), 'name' => 'globalblock-whitelist' ) );

		$form .= Html::hidden( 'title', $this->getTitle()->getPrefixedText() );
		$form .= Html::hidden( 'action', 'whitelist' );

		$fields = array();

		// uses ipaddress msg
		$fields['globalblocking-ipaddress'] = Xml::input( 'address', 45, $this->mAddress );
		$fields['globalblocking-whitelist-reason'] = Xml::input( 'wpReason', 45, $this->mReason );
		$fields['globalblocking-whitelist-status'] = Xml::checkLabel(
			$this->msg( 'globalblocking-whitelist-statuslabel' )->text(),
			'wpWhitelistStatus',
			'wpWhitelistStatus',
			$this->mCurrentStatus
		);

		$form .= Xml::buildForm( $fields, 'globalblocking-whitelist-submit' );

		$form .= Html::hidden( 'wpEditToken', $this->getUser()->getEditToken() );

		$form .= Xml::closeElement( 'form' );
		$form .= Xml::closeElement( 'fieldset' );

		$out->addHTML( $form );
	}
}
