<?php

class SpecialGlobalBlock extends SpecialPage {
	public $mAddress, $mReason, $mExpiry, $mAnonOnly, $mModifyForm, $mExpirySelection,
		$mReasonList, $mModify;

	function __construct() {
		parent::__construct( 'GlobalBlock', 'globalblock' );
	}

	function execute( $par ) {
		$this->setHeaders();

		$this->loadParameters( $par );

		$out = $this->getOutput();
		$out->setPageTitle( $this->msg( 'globalblocking-block' ) );
		$out->setSubtitle( GlobalBlocking::buildSubtitleLinks( 'GlobalBlock' ) );
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

		if ( GlobalBlocking::getGlobalBlockId( $this->mAddress ) ) {
			$this->mModifyForm = true;
		}

		if ( $this->mModifyForm ) {
			$dbr = GlobalBlocking::getGlobalBlockingSlave();
			$block = $dbr->selectRow(
				'globalblocks',
				'*',
				array( 'gb_address' => $this->mAddress ),
				__METHOD__
			);
			if ( $block ) {
				if ( $block->gb_expiry == 'infinity' ) {
					$this->mExpirySelection = 'indefinite';
				} else {
					$this->mExpiry = wfTimestamp( TS_ISO_8601, $block->gb_expiry );
				}
				$this->mAnonOnly = $block->gb_anon_only;
				$this->mReason = $block->gb_reason;
			}
		}

		$errorstr = null;

		if ( is_array( $errors ) && count( $errors ) > 0 ) {
			$errorstr = $this->formatErrors( $errors );
		}

		$this->form( $errorstr );
	}

	function formatErrors( $errors ) {
		$errorstr = '';
		foreach ( $errors as $error ) {
			if ( is_array( $error ) ) {
				$msg = array_shift( $error );
			} else {
				$msg = $error;
				$error = array();
			}
			$errorstr .= Xml::tags( 'li', null, $this->msg( $msg, $error )->parse() );

			// Special case
			if ( $msg == 'globalblocking-block-alreadyblocked' ) {
				$this->mModifyForm = true;
			}
		}

		$errorstr = Xml::tags( 'ul', null, $errorstr );
		$header = $this->msg( 'globalblocking-block-errors' )->numParams( count( $errors ) )->parseAsBlock();
		$errorstr = "$header\n$errorstr";

		$errorstr = Xml::tags( 'div', array( 'class' => 'error' ), $errorstr );

		return $errorstr;
	}

	function loadParameters( $par ) {
		$request = $this->getRequest();

		$this->mAddress = trim( $request->getText( 'wpAddress' ) );
		if ( !$this->mAddress ) {
			$this->mAddress = $par;
		}

		$this->mReason = $request->getText( 'wpReason' );
		$this->mReasonList = $request->getText( 'wpBlockReasonList' );
		$this->mExpiry = $this->mExpirySelection = $request->getText( 'wpExpiry' );
		if ( $this->mExpiry == 'other' ) {
			$this->mExpiry = $request->getText( 'wpExpiryOther' );
		}
		$this->mAnonOnly = $request->getBool( 'wpAnonOnly' );
		$this->mModify = $request->getBool( 'wpModify' );
		$this->mModifyForm = $request->getCheck( 'modify' );
	}

	function trySubmit() {
		$options = array();

		if ( $this->mAnonOnly ) {
			$options[] = 'anon-only';
		}
		if ( $this->mModify ) {
			$options[] = 'modify';
		}

		$out = $this->getOutput();
		$reasonstr = $this->mReasonList;
		if ( $reasonstr != 'other' && $this->mReason != '' ) {
			// Entry from drop down menu + additional comment
			$reasonstr .= $this->msg( 'colon-separator' )->inContentLanguage()->text() .
				$this->mReason;
		} elseif ( $reasonstr == 'other' ) {
			$reasonstr = $this->mReason;
		}

		$errors = GlobalBlocking::block( $this->mAddress, $reasonstr, $this->mExpiry, $options );

		if ( count( $errors ) ) {
			return $errors;
		}

		if ( $this->mModify ) {
			$textMessage = 'globalblocking-modify-success';
			$subMessage = 'globalblocking-modify-successsub';
		} else {
			$textMessage = 'globalblocking-block-success';
			$subMessage = 'globalblocking-block-successsub';
		}

		$out->addWikitext( $this->msg( $textMessage, $this->mAddress )->text() );
		$out->setSubtitle( $this->msg( $subMessage ) );

		$link = Linker::link(
			SpecialPage::getTitleFor( 'GlobalBlockList' ),
			$this->msg( 'globalblocking-return' )->escaped()
		);
		$out->addHTML( $link );

		return array();
	}

	function form( $error ) {
		global $wgScript;

		$form = '';
		$out = $this->getOutput();

		// Introduction
		if ( $this->mModifyForm ) {
			$out->addWikiMsg( 'globalblocking-modify-intro' );
		} else {
			$out->addWikiMsg( 'globalblocking-block-intro' );
		}

		// Add errors
		$out->addHTML( $error );

		$form .= Xml::fieldset( $this->msg( 'globalblocking-block-legend' )->text() );
		$form .= Xml::openElement(
			'form',
			array(
				'method' => 'post',
				'action' => $wgScript,
				'name' => 'uluser',
				'id' => 'mw-globalblock-form' )
		);
		$form .= Html::hidden( 'title', SpecialPage::getTitleFor( 'GlobalBlock' )->getPrefixedText() );

		$fields = array();

		// Who to block
		$fields['globalblocking-ipaddress'] = Xml::input(
			'wpAddress',
			45,
			$this->mAddress,
			array( 'id' => 'mw-globalblock-address' )
		);

		// How long to block them for
		$dropdown = wfMessage( 'globalblocking-expiry-options' );
		if ( $dropdown->isDisabled() ) {
			// 'globalblocking-expiry-options' is empty, try the message from core
			$dropdown = wfMessage( 'ipboptions' );
			if ( $dropdown->isDisabled() ) {
				// 'ipboptions' is empty too. Do not show a dropdown
				// Do not assume that 'ipboptions' exists forever, therefore check too
				$dropdown = false;
			}
		}

		if ( $dropdown === false ) {
			$fields['globalblocking-block-expiry'] = Xml::input(
				'wpExpiry',
				45,
				$this->mExpiry,
				array( 'id' => 'mw-globalblock-expiry' )
			);
		} else {
			$fields['globalblocking-block-expiry'] = $this->buildExpirySelector(
				'wpExpiry',
				'mw-globalblock-expiry-selector',
				$this->mExpirySelection,
				$dropdown->inContentLanguage()->plain()
			);
			$fields['globalblocking-block-expiry-otherfield'] =
				Xml::input(
					'wpExpiryOther',
					45,
					$this->mExpiry == $this->mExpirySelection ? '' : $this->mExpiry,
					array( 'id' => 'mw-globalblock-expiry-selector-other' )
				);
		}

		// Why to block them
		$fields['globalblocking-block-reason'] = Xml::listDropDown(
			'wpBlockReasonList',
			$this->msg( 'globalblocking-block-reason-dropdown' )->inContentLanguage()->text(),
			$this->msg( 'globalblocking-block-reasonotherlist' )->inContentLanguage()->text(),
			$this->mReasonList,
			'mw-globalblock-reasonlist'
		);

		$fields['globalblocking-block-otherreason'] = Xml::input(
			'wpReason',
			45,
			$this->mReason,
			array( 'id' => 'mw-globalblock-reason' )
		);

		// Block all users, or just anonymous ones
		$fields['globalblocking-block-options'] = Xml::checkLabel(
			$this->msg( 'globalblocking-ipbanononly' )->text(),
			'wpAnonOnly',
			'mw-globalblock-anon-only',
			$this->mAnonOnly
		);

		// Build a form.
		$submitMsg = $this->mModifyForm
			? 'globalblocking-modify-submit' : 'globalblocking-block-submit';
		$form .= Xml::buildForm( $fields, $submitMsg );

		$form .= Html::hidden( 'wpEditToken', $this->getUser()->getEditToken() );
		if ( $this->mModifyForm ) {
			$form .= Html::hidden( 'wpModify', 1 );
		}

		$form .= Xml::closeElement( 'form' );
		$form .= Xml::closeElement( 'fieldset' );

		# @todo FIXME: make this actually use HTMLForm, instead of just its JavaScript
		$out->addModules( 'mediawiki.htmlform' );

		$out->addHTML( $form );

		// Show loglist of previous blocks
		if ( $this->mAddress ) {
			$title = Title::makeTitleSafe( NS_USER, $this->mAddress );
			LogEventsList::showLogExtract(
				$out,
				'gblblock',
				$title->getPrefixedText(),
				'',
				array(
					'lim' => 10,
					'msgKey' => 'globalblocking-showlog',
					'showIfEmpty' => false
				)
			);
		}
	}

	function buildExpirySelector( $name, $id = null, $selected = null, $expiryOptions = null ) {
		$selector = '';

		if ( $id == null ) {
			$id = $name;
		}

		if ( $selected == null ) {
			$selected = 'other';
		}

		$attribs = array(
			'id' => $id,
			'name' => $name,
			'class' => 'mw-htmlform-select-or-other'
		); # @todo FIXME: make this actually use HTMLForm

		$selector .= Xml::openElement( 'select', $attribs );

		foreach ( explode( ',', $expiryOptions ) as $option ) {
			if ( strpos( $option, ":" ) === false ) {
				$option = "$option:$option";
			}
			list( $show, $value ) = explode( ":", $option );

			$show = htmlspecialchars( $show );
			$value = htmlspecialchars( $value );
			$selector .= Xml::option( $show, $value, $value == $selected );
		}

		$selector .= Xml::option(
			$this->msg( 'globalblocking-block-expiry-other' )->text(),
			'other',
			'other' == $selected
		);

		$selector .= Xml::closeElement( 'select' );

		return $selector;
	}
}
