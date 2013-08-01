<?php

class SpecialEmailCapture extends SpecialPage {
	public function __construct() {
		parent::__construct( 'EmailCapture', 'emailcapture' );
	}

	public function execute( $par ) {
		$this->setHeaders();

		$code = $this->getRequest()->getVal( 'verify' );
		if ( $code !== null ) {
			$dbw = wfGetDB( DB_MASTER );
			$row = $dbw->selectRow(
				'email_capture',
				array( 'ec_verified' ),
				array( 'ec_code' => $code ),
				__METHOD__
			);
			if ( $row && !$row->ec_verified ) {
				$dbw->update(
					'email_capture',
					array( 'ec_verified' => 1 ),
					array( 'ec_code' => $code ),
					__METHOD__
				);
				if ( $dbw->affectedRows() ) {
					$this->getOutput()->addWikiMsg( 'emailcapture-success' );
				} else {
					$this->getOutput()->addWikiMsg( 'emailcapture-failure' );
				}
			} elseif ( $row && $row->ec_verified ) {
				$this->getOutput()->addWikiMsg( 'emailcapture-already-confirmed' );
			} else {
				$this->getOutput()->addWikiMsg( 'emailcapture-invalid-code' );
			}
		} else {
			// Show simple form for submitting verification code
			$o = Html::openElement( 'form', array(
				'action' => $this->getTitle()->getFullUrl(),
				'method' => 'post'
			) );
			$o .= Html::element( 'p', array(), $this->msg( 'emailcapture-instructions' )->text() );
			$o .= Html::openElement( 'blockquote' );
			$o .= Html::element( 'label', array( 'for' => 'emailcapture-verify' ),
				$this->msg( 'emailcapture-verify' )->text() ) . ' ';
			$o .= Html::input( 'verify', '', 'text',
				array( 'id' => 'emailcapture-verify', 'size' => 32 ) ) . ' ';
			$o .= Html::input( 'submit', $this->msg( 'emailcapture-submit' )->text(), 'submit' );
			$o .= Html::closeElement( 'blockquote' );
			$o .= Html::closeElement( 'form' );
			$this->getOutput()->addHtml( $o );
		}
	}
}
