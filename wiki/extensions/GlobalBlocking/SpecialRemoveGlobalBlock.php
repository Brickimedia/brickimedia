<?php

class SpecialRemoveGlobalBlock extends SpecialPage {
	public $mAddress, $mReason;

	function __construct() {
		parent::__construct( 'RemoveGlobalBlock', 'globalunblock' );
	}

	function execute( $par ) {
		$this->setHeaders();

		$this->loadParameters();

		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'globalblocking-unblock' ) );
		$out->setSubtitle( GlobalBlocking::buildSubtitleLinks( 'RemoveGlobalBlock' ) );
		$out->setRobotPolicy( "noindex,nofollow" );
		$out->setArticleRelated( false );
		$out->enableClientCache( false );

		if ( !$this->userCanExecute( $this->getUser() ) ) {
			$this->displayRestrictionError();
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

		$out->addWikiMsg( 'globalblocking-unblock-intro' );

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

			$errorstr = Xml::tags( 'ul', array( 'class' => 'error' ), $errorstr );
			$errorstr = $this->msg( 'globalblocking-unblock-errors' )->numParams( count( $errors ) )->parseAsBlock() . $errorstr;
			$errorstr = Xml::tags( 'div', array( 'class' => 'error' ), $errorstr );
			$out->addHTML( $errorstr );
		}

		$this->form();
	}

	function loadParameters() {
		$this->mUnblockIP = trim( $this->getRequest()->getText( 'address' ) );
		$this->mReason = $this->getRequest()->getText( 'wpReason' );
		$this->mEditToken = $this->getRequest()->getText( 'wpEditToken' );
	}

	function trySubmit() {
		$errors = array();
		$ip = $this->mUnblockIP;
		if ( !IP::isIPAddress( $ip ) && strlen( $ip ) ) {
			$errors[] = array( 'globalblocking-unblock-ipinvalid', $ip );
			$ip = '';
		}

		if ( ( $id = GlobalBlocking::getGlobalBlockId( $ip ) ) == 0 ) {
			$errors[] = array( 'globalblocking-notblocked', $ip );
		}

		if ( count( $errors ) > 0 ) {
			return $errors;
		}

		$out = $this->getOutput();
		$dbw = GlobalBlocking::getGlobalBlockingMaster();
		$dbw->delete( 'globalblocks', array( 'gb_id' => $id ), __METHOD__ );

		$page = new LogPage( 'gblblock' );
		$page->addEntry( 'gunblock', Title::makeTitleSafe( NS_USER, $ip ), $this->mReason );

		$successmsg = $this->msg( 'globalblocking-unblock-unblocked', $ip, $id )->parseAsBlock();
		$out->addHTML( $successmsg );

		$link = Linker::linkKnown(
			SpecialPage::getTitleFor( 'GlobalBlockList' ),
			$this->msg( 'globalblocking-return' )->escaped()
		);
		$out->addHTML( $link );

		$out->setSubtitle( $this->msg( 'globalblocking-unblock-successsub' ) );

		return array();
	}

	function form() {
		global $wgScript;

		$form = '';

		$form .= Xml::openElement( 'fieldset' ) . Xml::element( 'legend', null, $this->msg( 'globalblocking-unblock-legend' )->text() );
		$form .= Xml::openElement( 'form', array( 'method' => 'post', 'action' => $wgScript, 'name' => 'globalblock-unblock' ) );

		$form .= Html::hidden( 'title', $this->getTitle()->getPrefixedText() );
		$form .= Html::hidden( 'action', 'unblock' );

		$fields = array();

		$fields['globalblocking-ipaddress'] = Xml::input( 'address', 45, $this->mUnblockIP );
		$fields['globalblocking-unblock-reason'] = Xml::input( 'wpReason', 45, $this->mReason );

		$form .= Xml::buildForm( $fields, 'globalblocking-unblock-submit' );

		$form .= Html::hidden( 'wpEditToken', $this->getUser()->getEditToken() );

		$form .= Xml::closeElement( 'form' );
		$form .= Xml::closeElement( 'fieldset' );

		$this->getOutput()->addHTML( $form );
	}
}
