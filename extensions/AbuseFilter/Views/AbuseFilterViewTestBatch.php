<?php

class AbuseFilterViewTestBatch extends AbuseFilterView {
	// Hard-coded for now.
	static $mChangeLimit = 100;

	function show() {
		$out = $this->getOutput();

		AbuseFilter::disableConditionLimit();

		if ( !$this->getUser()->isAllowed( 'abusefilter-modify' ) ) {
			$out->addWikiMsg( 'abusefilter-mustbeeditor' );
			return;
		}

		$this->loadParameters();

		$out->setPageTitle( $this->msg( 'abusefilter-test' ) );
		$out->addWikiMsg( 'abusefilter-test-intro', self::$mChangeLimit );

		$output = '';
		$output .= AbuseFilter::buildEditBox( $this->mFilter, 'wpTestFilter' ) . "\n";
		$output .=
			Xml::inputLabel(
				$this->msg( 'abusefilter-test-load-filter' )->text(),
				'wpInsertFilter',
				'mw-abusefilter-load-filter',
				10,
				''
			) .
			'&#160;' .
			Xml::element(
				'input',
				array(
					'type' => 'button',
					'value' => $this->msg( 'abusefilter-test-load' )->text(),
					'id' => 'mw-abusefilter-load'
				)
			);
		$output = Xml::tags( 'div', array( 'id' => 'mw-abusefilter-test-editor' ), $output );

 		$output .= Xml::tags( 'p', null, Xml::checkLabel(
				 $this->msg( 'abusefilter-test-shownegative' )->text(),
				 'wpShowNegative', 'wpShowNegative', $this->mShowNegative )
		 );

		// Selectory stuff
		$selectFields = array();
		$selectFields['abusefilter-test-user'] = Xml::input( 'wpTestUser', 45, $this->mTestUser );
		$selectFields['abusefilter-test-period-start'] =
			Xml::input( 'wpTestPeriodStart', 45, $this->mTestPeriodStart );
		$selectFields['abusefilter-test-period-end'] =
			Xml::input( 'wpTestPeriodEnd', 45, $this->mTestPeriodEnd );
		$selectFields['abusefilter-test-page'] =
			Xml::input( 'wpTestPage', 45, $this->mTestPage );

		$output .= Xml::buildForm( $selectFields, 'abusefilter-test-submit' );

		$output .= Html::hidden( 'title', $this->getTitle( 'test' )->getPrefixedText() );
		$output = Xml::tags( 'form',
			array(
				'action' => $this->getTitle( 'test' )->getLocalURL(),
				'method' => 'post'
			),
			$output
		);

		$output = Xml::fieldset( $this->msg( 'abusefilter-test-legend' )->text(), $output );

		$out->addHTML( $output );

		if ( $this->getRequest()->wasPosted() ) {
			$this->doTest();
		}
	}

	function doTest() {
		// Quick syntax check.
		$out = $this->getOutput();
		$result = AbuseFilter::checkSyntax( $this->mFilter );
		if ( $result !== true ) {
			$out->addWikiMsg( 'abusefilter-test-syntaxerr' );
			return;
		}
		$dbr = wfGetDB( DB_SLAVE );

		$conds = array( 'rc_user_text' => $this->mTestUser );

		if ( $this->mTestPeriodStart ) {
			$conds[] = 'rc_timestamp >= ' .
				$dbr->addQuotes( $dbr->timestamp( strtotime( $this->mTestPeriodStart ) ) );
		}
		if ( $this->mTestPeriodEnd ) {
			$conds[] = 'rc_timestamp <= ' .
				$dbr->addQuotes( $dbr->timestamp( strtotime( $this->mTestPeriodEnd ) ) );
		}
		if ( $this->mTestPage ) {
			$title = Title::newFromText( $this->mTestPage );
			$conds['rc_namespace'] = $title->getNamespace();
			$conds['rc_title'] = $title->getDBkey();
		}

		// Get our ChangesList
		$changesList = new AbuseFilterChangesList( $this->getSkin() );
		$output = $changesList->beginRecentChangesList();

		$res = $dbr->select(
			'recentchanges',
			'*',
			array_filter( $conds ),
			__METHOD__,
			array( 'LIMIT' => self::$mChangeLimit, 'ORDER BY' => 'rc_timestamp desc' )
		);

		$counter = 1;

		foreach( $res as $row ) {
			$vars = AbuseFilter::getVarsFromRCRow( $row );

			if ( !$vars ) {
				continue;
			}

			$result = AbuseFilter::checkConditions( $this->mFilter, $vars );

			if ( $result || $this->mShowNegative ) {
				// Stash result in RC item
				$rc = RecentChange::newFromRow( $row );
				$rc->examineParams['testfilter'] = $this->mFilter;
				$rc->filterResult = $result;
				$rc->counter = $counter++;
				$output .= $changesList->recentChangesLine( $rc, false );
			}
		}

		$output .= $changesList->endRecentChangesList();

		$out->addHTML( $output );
	}

	function loadParameters() {
		$request = $this->getRequest();

		$this->mFilter = $request->getText( 'wpTestFilter' );
		$this->mShowNegative = $request->getBool( 'wpShowNegative' );
		$testUsername = $request->getText( 'wpTestUser' );
		$this->mTestPeriodEnd = $request->getText( 'wpTestPeriodEnd' );
		$this->mTestPeriodStart = $request->getText( 'wpTestPeriodStart' );
		$this->mTestPage = $request->getText( 'wpTestPage' );

		if ( !$this->mFilter
			&& count( $this->mParams ) > 1
			&& is_numeric( $this->mParams[1] ) )
		{
			$dbr = wfGetDB( DB_SLAVE );
			$this->mFilter = $dbr->selectField( 'abuse_filter',
				'af_pattern',
				array( 'af_id' => $this->mParams[1] ),
				__METHOD__
			);
		}

		// Normalise username
		$userTitle = Title::newFromText( $testUsername );

		if ( $userTitle && $userTitle->getNamespace() == NS_USER ) {
			$this->mTestUser = $userTitle->getText(); // Allow User:Blah syntax.
		} elseif ( $userTitle ) {
			// Not sure of the value of prefixedText over text, but no need to munge unnecessarily.
			$this->mTestUser = $userTitle->getPrefixedText();
		} else {
			$this->mTestUser = null; // No user specified.
		}
	}
}
