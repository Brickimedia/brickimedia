<?php
/**
 * Special page to show global file usage. Also contains hook functions for
 * showing usage on an image page.
 */

class SpecialGlobalUsage extends SpecialPage {
	/**
	 * @var Title
	 */
	protected $target;

	/**
	 * @var bool
	 */
	protected $filterLocal;

	public function __construct() {
		parent::__construct( 'GlobalUsage' );
	}

	/**
	 * Entry point
	 * @param $par String
	 */
	public function execute( $par ) {
		$target = $par ? $par : $this->getRequest()->getVal( 'target' );
		$this->target = Title::makeTitleSafe( NS_FILE, $target );

		$this->filterLocal = $this->getRequest()->getCheck( 'filterlocal' );

		$this->setHeaders();

		$this->showForm();

		if ( is_null( $this->target ) ) {
			$this->getOutput()->setPageTitle( $this->msg( 'globalusage' ) );
			return;
		}

		$this->getOutput()->setPageTitle( $this->msg( 'globalusage-for', $this->target->getPrefixedText() ) );

		$this->showResult();
	}

	/**
	 * Shows the search form
	 */
	private function showForm() {
		global $wgScript;

		/* Build form */
		$html = Xml::openElement( 'form', array( 'action' => $wgScript ) ) . "\n";
		// Name of SpecialPage
		$html .= Html::hidden( 'title', $this->getTitle()->getPrefixedText() ) . "\n";
		// Limit
		$html .= Html::hidden( 'limit', $this->getRequest()->getInt( 'limit', 50 ) );
		// Input box with target prefilled if available
		$formContent = "\t" . Xml::input( 'target', 40, is_null( $this->target ) ? ''
			: $this->target->getText() )
			// Submit button
			. "\n\t" . Xml::element( 'input', array(
			'type' => 'submit',
			'value' => $this->msg( 'globalusage-ok' )->text()
		) )
			// Filter local checkbox
			. "\n\t<p>" . Xml::checkLabel( $this->msg( 'globalusage-filterlocal' )->text(),
			'filterlocal', 'mw-filterlocal', $this->filterLocal ) . '</p>';

		if ( !is_null( $this->target ) && wfFindFile( $this->target ) ) {
			// Show the image if it exists
			$html .= Linker::makeThumbLinkObj(
				$this->target,
				wfFindFile( $this->target ),
				/* $label */ $this->target->getPrefixedText(),
				/* $alt */ '', /* $align */ $this->getLanguage()->alignEnd(),
				/* $handlerParams */ array(), /* $framed */ false,
				/* $manualThumb */ false
			);
		}

		// Wrap the entire form in a nice fieldset
		$html .= Xml::fieldSet( $this->msg( 'globalusage-text' )->text(), $formContent ) . "\n</form>";

		$this->getOutput()->addHtml( $html );
	}

	/**
	 * Creates as queryer and executes it based on $this->getRequest()
	 */
	private function showResult() {
		$query = new GlobalUsageQuery( $this->target );
		$request = $this->getRequest();

		// Extract params from $request.
		if ( $request->getText( 'from' ) ) {
			$query->setOffset( $request->getText( 'from' ) );
		} elseif ( $request->getText( 'to' ) ) {
			$query->setOffset( $request->getText( 'to' ), true );
		}
		$query->setLimit( $request->getInt( 'limit', 50 ) );
		$query->filterLocal( $this->filterLocal );

		// Perform query
		$query->execute();

		// Don't show form element if there is no data
		if ( $query->count() == 0 ) {
			$this->getOutput()->addWikiMsg( 'globalusage-no-results', $this->target->getPrefixedText() );
			return;
		}

		$navbar = $this->getNavBar( $query );
		$targetName = $this->target->getText();
		$out = $this->getOutput();

		// Top navbar
		$out->addHtml( $navbar );

		$out->addHtml( '<div id="mw-globalusage-result">' );
		foreach ( $query->getSingleImageResult() as $wiki => $result ) {
			$out->addHtml(
				'<h2>' . $this->msg(
					'globalusage-on-wiki',
					$targetName, WikiMap::getWikiName( $wiki ) )->parse()
					. "</h2><ul>\n" );
			foreach ( $result as $item ) {
				$out->addHtml( "\t<li>" . self::formatItem( $item ) . "</li>\n" );
			}
			$out->addHtml( "</ul>\n" );
		}
		$out->addHtml( '</div>' );

		// Bottom navbar
		$out->addHtml( $navbar );
	}

	/**
	 * Helper to format a specific item
	 * @param $item array
	 * @return String
	 */
	public static function formatItem( $item ) {
		if ( !$item['namespace'] ) {
			$page = $item['title'];
		} else {
			$page = "{$item['namespace']}:{$item['title']}";
		}

		$link = WikiMap::makeForeignLink( $item['wiki'], $page,
			str_replace( '_', ' ', $page ) );
		// Return only the title if no link can be constructed
		return $link === false ? $page : $link;
	}

	/**
	 * Helper function to create the navbar, stolen from wfViewPrevNext
	 *
	 * @param $query GlobalUsageQuery An executed GlobalUsageQuery object
	 * @return string Navbar HTML
	 */
	protected function getNavBar( $query ) {
		$target = $this->target->getText();
		$limit = $query->getLimit();

		# Find out which strings are for the prev and which for the next links
		$offset = $query->getOffsetString();
		$continue = $query->getContinueString();
		if ( $query->isReversed() ) {
			$from = $offset;
			$to = $continue;
		} else {
			$from = $continue;
			$to = $offset;
		}

		# Get prev/next link display text
		$prev = $this->msg( 'prevn' )->numParams( $limit )->escaped();
		$next = $this->msg( 'nextn' )->numParams( $limit )->escaped();
		# Get prev/next link title text
		$pTitle = $this->msg( 'prevn-title' )->numParams( $limit )->escaped();
		$nTitle = $this->msg( 'nextn-title' )->numParams( $limit )->escaped();

		# Fetch the title object
		$title = $this->getTitle();

		# Make 'previous' link
		if ( $to ) {
			$attr = array( 'title' => $pTitle, 'class' => 'mw-prevlink' );
			$q = array( 'limit' => $limit, 'to' => $to, 'target' => $target );
			if ( $this->filterLocal ) {
				$q['filterlocal'] = '1';
			}
			$plink = Linker::link( $title, $prev, $attr, $q );
		} else {
			$plink = $prev;
		}

		# Make 'next' link
		if ( $from ) {
			$attr = array( 'title' => $nTitle, 'class' => 'mw-nextlink' );
			$q = array( 'limit' => $limit, 'from' => $from, 'target' => $target );
			if ( $this->filterLocal ) {
				$q['filterlocal'] = '1';
			}
			$nlink = Linker::link( $title, $next, $attr, $q );
		} else {
			$nlink = $next;
		}

		# Make links to set number of items per page
		$numLinks = array();
		$lang = $this->getLanguage();
		foreach ( array( 20, 50, 100, 250, 500 ) as $num ) {
			$fmtLimit = $lang->formatNum( $num );

			$q = array( 'offset' => $offset, 'limit' => $num, 'target' => $target );
			if ( $this->filterLocal ) {
				$q['filterlocal'] = '1';
			}
			$lTitle = $this->msg( 'shown-title' )->numParams( $num )->escaped();
			$attr = array( 'title' => $lTitle, 'class' => 'mw-numlink' );

			$numLinks[] = Linker::link( $title, $fmtLimit, $attr, $q );
		}
		$nums = $lang->pipeList( $numLinks );

		return $this->msg( 'viewprevnext' )->rawParams( $plink, $nlink, $nums )->escaped();
	}
}
