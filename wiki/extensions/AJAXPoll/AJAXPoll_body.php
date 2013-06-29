<?php
/**
 * AJAX Poll class
 * Created by Dariusz Siedlecki, based on the work by Eric David.
 * Licensed under the GFDL.
 *
 * @file
 * @ingroup Extensions
 * @author Dariusz Siedlecki <datrio@gmail.com>
 * @author Jack Phoenix <jack@countervandalism.net>
 * @author Thomas Gries
 * @maintainer Thomas Gries
 * @link http://www.mediawiki.org/wiki/Extension:AJAX_Poll Documentation
 */

class AJAXPoll {

	/**
	* Register <poll> tag with the parser
	*
	* @param $parser Object: instance of Parser (not necessarily $wgParser)
	* @return Boolean: true
	*/
	static function onParserInit( $parser ) {
		global $wgOut;
		$parser->setHook( 'poll', array( __CLASS__, 'AJAXPollRender' ) );
		$wgOut->addModules( 'ext.ajaxpoll' );
		return true;
	}

	# The callback function for converting the input text to HTML output
	static function AJAXPollRender( $input, $params = array(), Parser $parser ) {
		global $wgUser, $wgOut, $wgTitle, $wgScriptPath, $wgUseAjax;

		$parser->disableCache();
		$parser->addTrackingCategory( 'ajaxpoll-tracking-category' );

		if ( $wgUser->getName() == '' ) {
			$user = wfGetIP();
		} else {
			$user = $wgUser->getName();
		}

		// ID of the poll
		$id = strtoupper( md5( $input ) );

		$par = new Parser();
		$input = $par->parse( $input, $wgTitle, $wgOut->parserOptions() );
		$input = trim( strip_tags( $input->getText() ) );
		$lines = explode( "\n", trim( $input ) );

		// compatibility for non-ajax requests - just in case
		if ( !$wgUseAjax ) {
			$responseId = "ajaxpoll-post-id";
			$responseAnswer = "ajaxpoll-post-answer-$id";
		
			if ( isset( $_POST[$responseId] ) && isset( $_POST[$responseAnswer] ) && $_POST[$responseId] == $id ) {
				AJAXPoll::submitVote( $id, intval( $_POST[$responseAnswer] ) );
			}
		}
		
		$dbw = wfGetDB( DB_MASTER );
		$dbw->begin( __METHOD__ );

		/**
		* Register poll in the database
		*/

		$row = $dbw->selectRow(
			array( 'ajaxpoll_info' ),
			array( 'COUNT(poll_id) AS count' ),
			array( 'poll_id' => $id ),
			__METHOD__
		);

		if( empty( $row->count ) ) {
			$dbw->insert(
				'ajaxpoll_info',
				array(
					'poll_id' => $id,
					'poll_txt' => $input,
					'poll_date' => wfTimestampNow(),
				),
				__METHOD__
			);
		}
		$dbw->commit( __METHOD__ );

		switch( $lines[0] ) {
			case 'STATS':
				$retVal = AJAXPoll::buildStats( $id, $user );
				break;
			default:
				$retVal = '
<div id="ajaxpoll-container-' . $id . '">' . AJAXPoll::buildHTML( $id, $user, $lines ) . '</div>';
				break;
		}
		return $retVal;
	}

	private static function buildStats( $id, $user ) {

		$dbr = wfGetDB( DB_SLAVE );

		$res = $dbr->select(
			'ajaxpoll_vote',
			array(
				'COUNT(*)',
				'COUNT(DISTINCT poll_id)',
				'COUNT(DISTINCT poll_user)',
				'TIMEDIFF(NOW(), MAX(poll_date))'
			),
			array(),
			__METHOD__
		);
		$tab = $dbr->fetchRow( $res );

		$clock = explode( ':', $tab[3] );

		if ( $clock[0] == '00' && $clock[1] == '00' ) {
			$x = $clock[2];
			$y = 'second';
		} elseif( $clock[0] == '00' ) {
			$x = $clock[1];
			$y = 'minute';
		} else {
			if ( $clock[0] < 24 ) {
				$x = $clock[0];
				$y = 'hour';
			} else {
				$x = floor( $hr / 24 );
				$y = 'day';
			}
		}

		$clockago = $x . ' ' . $y . ( $x > 1 ? 's' : '' );

		$res = $dbr->select(
			'ajaxpoll_vote',
			'COUNT(*)',
			array( 'DATE_SUB(CURDATE(), INTERVAL 2 DAY) <= poll_date' ),
			__METHOD__
		);
		$tab2 = $dbr->fetchRow( $res );

		return "There are $tab[1] polls and $tab[0] votes given by $tab[2] different people.<br />
			The last vote has been given $clockago ago.<br/>
			During the last 48 hours, $tab2[0] votes have been given.";
	}

	public static function submitVote( $id, $answer ) {
		global $wgUser,$wgOut;
		// echo "id: $id ans $answer<br/>";

		$dbw = wfGetDB( DB_MASTER );

		if ( $wgUser->getName() == '' ) {
			$user = wfGetIP();
		} else {
			$user = $wgUser->getName();
		}

		if ( !$wgUser->isAllowed( 'ajaxpoll-vote' ) || $wgUser->isAllowed( 'bot' ) ) {
			return AJAXPoll::buildHTML( $id, $user );
		}

		if ( $answer != 0 ) {

			$answer = ++$answer;

			$q = $dbw->select(
				'ajaxpoll_vote',
				'COUNT(*) AS count',
				array(
					'poll_id' => $id,
					'poll_user' => $user
				),
				__METHOD__
			);
			$row = $dbw->fetchRow( $q );

			if ( $row['count'] > 0 ) {

				$updateQuery = $dbw->update(
					'ajaxpoll_vote',
					array(
						'poll_answer' => $answer,
						'poll_date' => wfTimestampNow()
					),
					array(
						'poll_id' => $id,
						'poll_user' => $user,
					),
					__METHOD__
				);
				$dbw->commit();
				$pollContainerText = ( $updateQuery ) ? 'ajaxpoll-vote-update' : 'ajaxpoll-vote-error';

			} else {

				$insertQuery = $dbw->insert(
					'ajaxpoll_vote',
					array(
						'poll_id' => $id,
						'poll_user' => $user,
						'poll_ip' => wfGetIP(),
						'poll_answer' => $answer,
						'poll_date' => wfTimestampNow()
					),
					__METHOD__
				);
				$dbw->commit();
				$pollContainerText = ( $insertQuery ) ? 'ajaxpoll-vote-add' : 'ajaxpoll-vote-error';

			}
		
		} else { // revoking a vote

			$deleteQuery = $dbw->delete(
				'ajaxpoll_vote',
				array(
					'poll_id' => $id,
					'poll_user' => $user,
				),
				__METHOD__
			);
			$dbw->commit();
			$pollContainerText = ( $deleteQuery ) ? 'ajaxpoll-vote-revoked' : 'ajaxpoll-vote-error';

		}

		return AJAXPoll::buildHTML( $id, $user, '', $pollContainerText );

	}

	private static function buildHTML( $id, $user, $lines = '', $extra_from_ajax = '' ) {
		global $wgTitle, $wgUser, $wgLang, $wgUseAjax;

		$dbr = wfGetDB( DB_SLAVE );

		$q = $dbr->select(
			'ajaxpoll_info',
			array( 'poll_txt', 'poll_date' ),
			array( 'poll_id' => $id ),
			__METHOD__
		);
		$row = $dbr->fetchRow( $q );

		if ( empty( $lines ) ) {
			$lines = explode( "\n", trim( $row['poll_txt'] ) );
		}

		$start_date = $row['poll_date'];

		$q = $dbr->select(
			'ajaxpoll_vote',
			array( 'poll_answer', 'COUNT(*)' ),
			array( 'poll_id' => $id ),
			__METHOD__,
			array( 'GROUP BY' => 'poll_answer' )
		);

		$poll_result = array();

		while ( $row = $q->fetchRow() ) {
			$poll_result[$row[0]] = $row[1];
		}

		$amountOfVotes = array_sum( $poll_result );

		// Did we vote?
		$q = $dbr->select(
			'ajaxpoll_vote',
			array( 'poll_answer', 'poll_date' ),
			array(
				'poll_id' => $id,
				'poll_user' => $user
			),
			__METHOD__
		);

		if ( $row = $dbr->fetchRow( $q ) ) {
			$ourLastVoteDate = wfMsg(
				'ajaxpoll-your-vote',
				$lines[$row[0] - 1],
				$wgLang->timeanddate( wfTimestamp( TS_MW, $row[1] ), true /* adjust? */ )
			);
		}

		if ( is_object( $wgTitle ) ) {
			if( !empty( $extra_from_ajax ) ) {
				$attributes = ' style="display:block;"';
				$ajaxMessage = wfMsg( $extra_from_ajax );
			} else {
				$attributes = ' style="display:none;"';
				$ajaxMessage = '';
			}
			// HTML output has to be on one line thanks to a MediaWiki bug
			// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=1319
			$ret = '<script>var useAjax='. ( !empty($wgUseAjax) ? "true" : "false" ) . ';</script>
<div id="ajaxpoll-id-' . $id . '" class="ajaxpoll">
<div id="ajaxpoll-ajax-' . $id . '" class="ajaxpoll-ajax"' . $attributes . '>' . $ajaxMessage . '</div>
<div class="ajaxpoll-question">' . strip_tags( $lines[0] ) . '</div>';

			// Different message depending on if the user has already voted or not, or is entitled to vote

			$canRevoke = false;

			if ( $wgUser->isAllowed( 'ajaxpoll-vote' ) ) {
				if ( isset( $row[0] ) ) {
					$message = $ourLastVoteDate;
					$canRevoke = true;
					$lines[] = wfMsg( 'ajaxpoll-revoke-vote' );
				} else {
					$message = wfMsg( 'ajaxpoll-no-vote' );
				}
			} else {
				$message = wfMsg( 'ajaxpoll-vote-permission' );
			}
			
			$ret .= '<div class="ajaxpoll-misc">' . $message . '
</div>';

			$ret .= '<form method="post" action="' . $wgTitle->getLocalURL() .
				'" id="ajaxpoll-answer-id-' . $id . '"><input type="hidden" name="ajaxpoll-post-id" value="' . $id . '" />';

			for ( $i = 1; $i < count( $lines ); $i++ ) {

				$vote = !( $canRevoke && ( $i == count( $lines ) - 1 ) );

				// answers are counted from 1 ... n
				// last answer is pseudo-answer for "I want to revoke vote"
				// and becomes answer number 0

				$answer = ( $vote ) ? $i : 0;
				$xid = $id . "-" . $answer;

				if ( $amountOfVotes == 0 ) {
					$percent = 0;
				} else {
					$percent = $wgLang->formatNum( round( ( isset( $poll_result[$i + 1] ) ? $poll_result[$i + 1] : 0 ) * 100 / $amountOfVotes, 2 ) );
				}

				$our = ( isset( $row[0] ) && ( $row[0] - 1 == $i ) );

				// If AJAX is enabled, as it is by default in modern MWs, we can
				// just use sajax library function here for that AJAX-y feel.
				// If not, we'll have to submit the form old-school way...

				if ( $wgUser->isAllowed( 'ajaxpoll-vote' ) ) {

					// HTML output has to be on one line thanks to a MediaWiki bug
					// @see https://bugzilla.wikimedia.org/show_bug.cgi?id=1319

					if ( $vote ) {
						$ret .= "
<div id='ajaxpoll-answer-$xid' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name'><label for='ajaxpoll-post-answer-$xid'><input type='radio' id='ajaxpoll-post-answer-$xid' name='ajaxpoll-post-answer-$id' value='" . $answer . "' " . ( $our ? 'checked=true ' : '' ) . "/>" . strip_tags( $lines[$i] ) .
"</label></div><div class='ajaxpoll-answer-vote" . ( $our ? ' ajaxpoll-our-vote' : '' ) ."'><span title='" . wfMsg( 'ajaxpoll-percent-votes', sprintf( $percent ) ) . "'>" . ( ( isset( $poll_result ) && !empty( $poll_result[$i + 1] ) ) ? $poll_result[$i + 1] : 0 ) . "</span><div style='width: " . $percent . "%;" . ( $percent == 0 ? ' border:0;' : '' ) . "'></div></div>
</div>
";
					} else {
						$ret .= "
<div id='ajaxpoll-answer-$xid' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name ajaxpoll-answer-name-revoke'><label for='ajaxpoll-post-answer-$xid'><input type='radio' id='ajaxpoll-post-answer-$xid' name='ajaxpoll-post-answer-$id' value='" . $answer . "' " . ( $our ? 'checked=true ' : '' ) . "/>" . strip_tags( $lines[$i] ) .
"</label></div>
</div>
";
					}

				} else {

					$ret .= "
<div id='ajaxpoll-answer-" . $xid . "' class='ajaxpoll-answer' poll='$id' answer='$answer'><div class='ajaxpoll-answer-name'><label for='ajaxpoll-post-answer-" . $xid . "' onclick='$(\"#ajaxpoll-ajax-" . $xid . "\").html(\"" . wfMsg( 'ajaxpoll-vote-permission' ) . "\").css(\"display\",\"block\");'><input disabled='disabled' type='radio' id='ajaxpoll-post-answer-" . $xid . "' name='ajaxpoll-post-answer-" . $id . "' value='" . $answer . "'/>" . strip_tags( $lines[$i] ) .
"</label></div><div class='ajaxpoll-answer-vote" . ( $our ? ' ajaxpoll-our-vote' : '' ) ."'><span title='" . wfMsg( 'ajaxpoll-percent-votes', sprintf( $percent ) ) . "'>" . ( ( isset( $poll_result ) && !empty( $poll_result[$i + 1] ) ) ? $poll_result[$i + 1] : 0 ) . "</span><div style='width: " . $percent . "%;" . ( $percent == 0 ? ' border:0;' : '' ) . "'></div></div>
</div>
";
				}

			}

			$ret .= '</form>';

			// Display information about the poll (creation date, amount of votes)
			$pollSummary = wfMsgExt(
				'ajaxpoll-info',
				'parsemag', // parse PLURAL
				$amountOfVotes, // amount of votes
				$wgLang->timeanddate( wfTimestamp( TS_MW, $start_date ), true /* adjust? */ )
			);

			$ret .= '<div id="ajaxpoll-info-' . $id . '" class="ajaxpoll-info">' . $pollSummary . '<div class="ajaxpoll-id-info">poll-id ' . $id . '</div></div></div>';
		} else {
			$ret = '';
		}

		return $ret;
	}

	public static function onLoadExtensionSchemaUpdates( $updater = null ) {
		if ( $updater === null ) {
			// no < 1.17 support
		} else {
			// >= 1.17 support
			$db = $updater->getDB();

			if ( $db->tableExists( 'poll_info' ) ) {
				# poll_info.poll_title field was dropped in AJAXPoll version 1.72
				$updater->dropExtensionField( 
					'poll_info',
					'poll_title',
					dirname( __FILE__ ) . '/patches/drop-field--poll_info-poll_title.sql' 
				);
				$updater->addExtensionTable(
					'ajaxpoll_info',
					dirname( __FILE__ ) . '/patches/rename-table--poll_info.sql' 
				);
			} else {
				$updater->addExtensionTable(
					'ajaxpoll_info',
					dirname( __FILE__ ) . '/patches/create-table--ajaxpoll_info.sql' 
				);
			}

			if ( $db->tableExists( 'poll_vote' ) ) {
				$updater->addExtensionTable(
					'ajaxpoll_vote',
					dirname( __FILE__ ) . '/patches/rename-table--poll_vote.sql' 
				);
			} else {
				$updater->addExtensionTable(
					'ajaxpoll_vote',
					dirname( __FILE__ ) . '/patches/create-table--ajaxpoll_vote.sql' 
				);
			}

		}

		return true;
	}

} /* class AJAXPoll */
