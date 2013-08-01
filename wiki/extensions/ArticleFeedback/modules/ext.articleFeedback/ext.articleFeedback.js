/*
 * Script for Article Feedback Extension
 */
( function( $, mw ) {

/*
 * Tracking disabled by Ori Livneh <ori@wikimedia.org> on 19-Sept-2012, as data
 * is no longer needed or wanted.
 *
 *
 *  // Only track users who have been assigned to the tracking group
 *  var tracked = 'track' === mw.user.bucket(
 *  	'ext.articleFeedback-tracking', mw.config.get( 'wgArticleFeedbackTracking' )
 *  );
 *
 */
var tracked = false;

/**
 * Prefixes a key for cookies or events, with extension and version information
 * 
 * @param event String: Name of event to prefix
 * @return String: Prefixed event name
 */
function prefix( key ) {
	var version = mw.config.get( 'wgArticleFeedbackTracking' ).version || 0;
	return 'ext.articleFeedback@' + version + '-' + key;
}

/**
 * Checks if a pitch is currently muted
 * 
 * @param pitch String: Name of pitch to check
 * @return Boolean: Whether the pitch is muted
 */
function isPitchVisible( pitch ) {
	return true;
	// Disabled per Dario
	//return $.cookie( prefix( 'pitches-' + pitch ) ) != 'hide';
}

/**
 * Ensures a pitch will be muted for a given duration of time
 * 
 * @param pitch String: Name of pitch to mute
 * @param durration Integer: Number of days to mute the pitch for
 */
function mutePitch( pitch, duration ) {
	// Disabled per Dario
	//$.cookie( prefix( 'pitches-' + pitch ), 'hide', { 'expires': duration, 'path': '/' } );
}

// This sets up possible behaviors after someone completes Article Feedback.
var config = {
	'ratings': mw.config.get( 'wgArticleFeedbackRatingTypesFlipped' ),
	'pitches': {
		'join': {
			'weight': 0,
			'condition': function() {
				return isPitchVisible( 'join' ) && mw.user.anonymous();
			},
			'action': function() {
				// Mute for 1 day
				mutePitch( 'join', 1 );
				// Go to account creation page
				// Track the click through an API redirect
				window.location = $.articleFeedback.fn.trackActionURL(
					mw.config.get( 'wgScript' ) + '?' + $.param( {
						'title': 'Special:UserLogin',
						'type': 'signup',
						'returnto': mw.config.get( 'wgPageName' )
					} ), 'pitch-join-accept-signup' );
				return false;
			},
			'title': 'articlefeedback-pitch-thanks',
			'message': 'articlefeedback-pitch-join-message',
			'body': 'articlefeedback-pitch-join-body',
			'accept': 'articlefeedback-pitch-join-accept',
			'reject': 'articlefeedback-pitch-reject',
			// Special alternative action for going to login page
			'altAccept': 'articlefeedback-pitch-join-login',
			'altAction': function() {
				// Mute for 1 day
				mutePitch( 'join', 1 );
				// Go to login page
				// Track the click through an API redirect
				window.location = $.articleFeedback.fn.trackActionURL(
					mw.config.get( 'wgScript' ) + '?' + $.param( {
						'title': 'Special:UserLogin',
						'returnto': mw.config.get( 'wgPageName' )
					} ), 'pitch-join-accept-login' );
				return false;
			}
		},
		'edit': {
			'weight': 1,
			'condition': function() {
				// An empty restrictions array means anyone can edit
				var restrictions =  mw.config.get( 'wgRestrictionEdit', [] );
				if ( restrictions.length ) {
					var groups =  mw.config.get( 'wgUserGroups' );
					// Verify that each restriction exists in the user's groups
					for ( var i = 0; i < restrictions.length; i++ ) {
						if ( $.inArray( restrictions[i], groups ) < 0 ) {
							return false;
						}
					}
				}
				return isPitchVisible( 'edit' );
			},
			'action': function() {
				// Setup edit page link
				var params = {
					'title': mw.config.get( 'wgPageName' ),
					'action': 'edit'
				};
				if ( tracked ) {
					// Keep track of tracked users' edits
					params.clicktrackingsession = $.cookie( 'clicktracking-session' );
					params.clicktrackingevent = prefix( 'pitch-edit-save' );
				}
				// Track the click through an API redirect (automatically bypasses if !tracked)
				window.location = $.articleFeedback.fn.trackActionURL(
					mw.config.get( 'wgScript' ) + '?' + $.param( params ), 'pitch-edit-accept'
				);
				return false;
			},
			'title': 'articlefeedback-pitch-thanks',
			'message': 'articlefeedback-pitch-edit-message',
			'body': 'articlefeedback-pitch-edit-body',
			'accept': 'articlefeedback-pitch-edit-accept',
			'reject': 'articlefeedback-pitch-reject'
		}
	}
};

/* Load at the bottom of the article */
var $aftDiv = $( '<div id="mw-articlefeedback"></div>' ).articleFeedback( config );

// Put on bottom of article before #catlinks (if it exists)
// Except in legacy skins, which have #catlinks above the article but inside content-div.
var legacyskins = [ 'standard', 'cologneblue', 'nostalgia' ];
if ( $( '#catlinks' ).length && $.inArray( mw.config.get( 'skin' ), legacyskins ) < 0 ) {
	$aftDiv.insertBefore( '#catlinks' );
} else {
	// CologneBlue, Nostalgia, ...
	mw.util.$content.append( $aftDiv );
}

/* Add link so users can navigate to the feedback tool from the toolbox */
var $tbAft = $( '<li id="t-articlefeedback"><a href="#mw-articlefeedback"></a></li>' )
	.find( 'a' )
		.text( mw.msg( 'articlefeedback-form-switch-label' ) )
		.click( function() {
			// Click tracking
			// Temporarily disabled per Dario's request --Roan
			//$.articleFeedback.fn.trackClick( 'toolbox-link' );
			// Get the image, set the count and an interval.
			var $box = $( '#mw-articlefeedback' );
			var count = 0;
			var interval = setInterval( function() {
				// Animate the opacity over .2 seconds
				$box.animate( { 'opacity': 0.5 }, 100, function() {
					// When finished, animate it back to solid.
					$box.animate( { 'opacity': 1.0 }, 100 );
				} );
				// Clear the interval once we've reached 3.
				if ( ++count >= 3 ) {
					clearInterval( interval );
				}
			}, 200 );
			return true;
		} )
		.end();
$( '#p-tb' ).find( 'ul' ).append( $tbAft );

} )( jQuery, mediaWiki );
