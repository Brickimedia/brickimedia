<?php

class GlobalUsageImagePageHooks {
	private static $queryCache = array();

	/**
	 * Get an executed query for use on image pages
	 *
	 * @param Title $title File to query for
	 * @return GlobalUsageQuery Query object, already executed
	 */
	private static function getImagePageQuery( $title ) {
		$name = $title->getDBkey();
		if ( !isset( self::$queryCache[$name] ) ) {
			$query = new GlobalUsageQuery( $title );
			$query->filterLocal();
			$query->execute();

			self::$queryCache[$name] = $query;

			// Limit cache size to 100
			if ( count( self::$queryCache ) > 100 ) {
				array_shift( self::$queryCache );
			}
		}

		return self::$queryCache[$name];
	}

	/**
	 * Show a global usage section on the image page
	 *
	 * @param $imagePage ImagePage
	 * @param string $html HTML to add to the image page as global usage section
	 * @return bool
	 */
	public static function onImagePageAfterImageLinks( $imagePage, &$html ) {
		if ( !self::hasResults( $imagePage ) ) {
			return true;
		}

		$context = $imagePage->getContext();
		$title = $imagePage->getFile()->getTitle();
		$targetName = $title->getText();

		$query = self::getImagePageQuery( $title );

		$guHtml = '';
		foreach ( $query->getSingleImageResult() as $wiki => $result ) {
			$wikiName = WikiMap::getWikiName( $wiki );
			$escWikiName = Sanitizer::escapeClass( $wikiName );
			$guHtml .= "<li class='mw-gu-onwiki-$escWikiName'>" . $context->msg(
				'globalusage-on-wiki',
				$targetName, $escWikiName )->parse() . "\n<ul>";
			foreach ( $result as $item ) { //NXT
				$thing = SpecialGlobalUsage::formatItem( $item );
				$url = "http://$wikiCodeName.brickimedia.org/wiki/$thing";
  				
				$guHtml .= "<li><a name=\"test\" href=\"$url\">$thing</a></li>\n";
				
			}
			$guHtml .= "</ul></li>\n";
		}

		if ( $guHtml ) {
			$html .= '<h2 id="globalusage">' . $context->msg( 'globalusage' )->escaped() . "</h2>\n"
				. '<div id="mw-imagepage-section-globalusage">'
				. $context->msg( 'globalusage-of-file' )->parseAsBlock()
				. "<ul>\n" . $guHtml . "</ul>\n";
			if ( $query->hasMore() ) {
				$html .= $context->msg( 'globalusage-more', $targetName )->parseAsBlock();
			}
			$html .= '</div>';
		}

		return true;
	}

	/**
	 * Show a link to the global image links in the TOC if there are any results available.
	 * @param $imagePage ImagePage
	 * @param $toc array
	 * @return bool
	 */
	public static function onImagePageShowTOC( $imagePage, &$toc ) {
		if ( self::hasResults( $imagePage ) ) {
			# Insert a link after the 3rd entry in the TOC
			array_splice( $toc, 3, 0, '<li><a href="#globalusage">'
				. $imagePage->getContext()->msg( 'globalusage' )->escaped() . '</a></li>' );
		}
		return true;
	}

	/**
	 * Check whether there are results for an image page. Checks whether the
	 * file exists and is not local.
	 *
	 * @param $imagePage ImagePage
	 * @return bool
	 */
	protected static function hasResults( $imagePage ) {
		# Don't display links if the target file does not exist
		$file = $imagePage->getFile();
		if ( !$file->exists() ) {
			return false;
		}

		# Don't show global usage if the file is local.
		# Do show it however if the current repo is the shared repo. The way 
		# we detect this is a bit hacky and less than ideal. See bug 23136 for
		# a discussion.
		global $wgGlobalUsageDatabase;
		$dbr = wfGetDB( DB_SLAVE );
		if ( $file->getRepoName() == 'local'
			&& $dbr->getDBname() != $wgGlobalUsageDatabase
		) {
			return false;
		}

		$query = self::getImagePageQuery( $imagePage->getFile()->getTitle() );
		return (bool)$query->getResult();
	}
}
