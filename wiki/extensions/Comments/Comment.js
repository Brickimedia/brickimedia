/**
 * JavaScript for the Comments extension.
 * Rewritten by Jack Phoenix <jack@countervandalism.net> to be more
 * object-oriented.
 *
 * @file
 * @date 29 August 2012
 */
var Comment = {
	submitted: 0,
	isBusy: false,
	timer: '', // has to have an initial value...
	updateDelay: 7000,
	LatestCommentID: '',
	CurLatestCommentID: '',
	pause: 0,

	/**
	 * When a comment's author is ignored, "Show Comment" link will be
	 * presented to the user.
	 * If the user clicks on it, this function is called to show the hidden
	 * comment.
	 */
	show: function( id ) {
		jQuery( '#ignore-' + id ).hide( 100 );
		jQuery( '#comment-' + id ).show( 500 );
	},

	/**
	 * This function is called whenever a user clicks on the "block" image to
	 * block another user's comments.
	 *
	 * @param user_name String: name of the user whose comments we want to block
	 * @param user_id Integer: user ID number of the user whose comments we
	 *                         want to block
	 * @param c_id Integer: comment ID number
	 */
	blockUser: function( user_name, user_id, c_id ) {
		var message;
		if( !user_name ) {
			message = mw.msg( 'comments-block-warning-anon' );
		} else {
			message = mw.msg( 'comments-block-warning-user', user_name );
		}
		if( confirm( message ) ) {
			sajax_request_type = 'POST';
			sajax_do_call( 'wfCommentBlock', [ c_id, user_id ], function( response ) {
				alert( response.responseText );
				window.location.href = window.location;
			});
		}
	},

	/**
	 * This function is called whenever a user clicks on the "Delete Comment"
	 * link to delete a comment.
	 *
	 * @param c_id Integer: comment ID number
	 */
	deleteComment: function( c_id ) {
		var pageId = document.commentform.pid.value;
		if( confirm( mw.msg( 'comments-delete-warning' ) ) ) {
			sajax_request_type = 'POST';
			sajax_do_call( 'wfDeleteComment', [ pageId, c_id ], function( response ) {
				window.location.href = window.location;
			});
		}
	},

	/**
	 * Vote for a comment.
	 * Formerly called "cv"
	 *
	 * @param cid Integer: comment ID number
	 * @param vt Integer: vote value
	 * @param vg
	 */
	vote: function( cid, vt, vg ) {
		sajax_request_type = 'POST';
		sajax_do_call(
			'wfCommentVote',
			[ cid, vt, ( ( vg ) ? vg : 0 ), document.commentform.pid.value ],
			function( response ) {
				document.getElementById( 'Comment' + cid ).innerHTML = response.responseText;
				var imgpath = wgScriptPath + '/extensions/Comments/images/';
				if(vt == 1){
					$( '#CommentBtn' + cid + ' a[data-vote-type=1] img' ).attr('src', imgpath+'up-voted.png' )
						.attr({'data-vote-value': 1});
					$( '#CommentBtn' + cid + ' a[data-vote-type=-1] img' ).attr('src', imgpath+'down-unvoted.png' )
						.attr({'data-vote-value': 0});
				} else if(vt == -1) {
					$( '#CommentBtn' + cid + ' a[data-vote-type=-1] img' ).attr('src', imgpath+'down-voted.png' )
						.attr({'data-vote-value': -1});
					$( '#CommentBtn' + cid + ' a[data-vote-type=1] img' ).attr('src', imgpath+'up-unvoted.png' )
						.attr({'data-vote-value': 0});
				} else {
					$( '#CommentBtn' + cid + ' a[data-vote-type=1] img' ).attr('src', imgpath+'up-unvoted.png' )
						.attr({'data-vote-value': 0});
					$( '#CommentBtn' + cid + ' a[data-vote-type=-1] img' ).attr('src', imgpath+'down-unvoted.png' )
						.attr({'data-vote-value': 0});
				}
			}
		);
	},

	/**
	 * This is ugly but we have to use this because AJAX function wfCommentList
	 * doesn't work...thanks, Parser.php
	 *
	 * @param pid Integer: page ID
	 * @param ord Sorting order
	 * @param end
	 */
	viewComments: function( pid, ord, end ) {
		document.getElementById( 'allcomments' ).innerHTML = mw.msg( 'comments-loading' ) + '<br /><br />';
		var x = sajax_init_object();
		var url = wgServer + wgScriptPath +
			'/index.php?title=Special:CommentListGet&pid=' + pid + '&ord=' +
			ord;

		x.open( 'get', url, true );

		x.onreadystatechange = function() {
			if( x.readyState != 4 ) {
				return;
			}

			document.getElementById( 'allcomments' ).innerHTML = x.responseText;
			Comment.submitted = 0;
			if( end ) {
				window.location.hash = 'end';
			}
		};

		x.send( null );
	},

	/**
	 * Submit a new comment.
	 */
	submit: function() {
		if( Comment.submitted === 0 ) {
			Comment.submitted = 1;

			var pidVal = document.commentform.pid.value;
			var parentId;
			if ( !document.commentform.comment_parent_id.value ) {
				parentId = 0;
			} else {
				parentId = document.commentform.comment_parent_id.value;
			}
			var commentText = document.commentform.comment_text.value;

			sajax_request_type = 'POST';
			sajax_do_call(
				'wfCommentSubmit',
				[ pidVal, parentId, commentText ],
				function( response ) {
					document.commentform.comment_text.value = '';
					Comment.viewComments( document.commentform.pid.value, 0, 1 );
				}
			);
			Comment.cancelReply();
		}
	},

	/**
	 * Toggle comment auto-refreshing on or off
	 *
	 * @param status
	 */
	toggleLiveComments: function( status ) {
		if( status ) {
			Comment.pause = 0;
		} else {
			Comment.pause = 1;
		}
		var msg;
		if ( status ) {
			msg = mw.msg( 'comments-auto-refresher-pause' );
		} else {
			msg = mw.msg( 'comments-auto-refresher-enable' );
		}

		jQuery( 'div#spy a' ).click( function() {
			Comment.toggleLiveComments( ( status ) ? 0 : 1 );
		} ).css( 'font-size', '10px' ).text( msg );

		if( !Comment.pause ) {
			Comment.LatestCommentID = document.commentform.lastcommentid.value;
			Comment.timer = setTimeout(
				function() { Comment.checkUpdate(); },
				Comment.updateDelay
			);
		}
	},

	checkUpdate: function() {
		if( Comment.isBusy ) {
			return;
		}
		var pid = document.commentform.pid.value;
		sajax_do_call( 'wfCommentLatestID', [ pid ], function( response ) {
			Comment.updateResults( response );
		});
		Comment.isBusy = true;
		return false;
	},

	updateResults: function( response ) {
		if( !response || response.readyState != 4 ) {
			return;
		}

		if( response.status == 200 ) {
			// Get last new ID
			Comment.CurLatestCommentID = response.responseText;
			if( Comment.CurLatestCommentID != Comment.LatestCommentID ) {
				Comment.viewComments( document.commentform.pid.value, 0, 1 );
				Comment.LatestCommentID = Comment.CurLatestCommentID;
			}
		}

		Comment.isBusy = false;
		if( !Comment.pause ) {
			clearTimeout( Comment.timer );
			Comment.timer = setTimeout(
				function() { Comment.checkUpdate(); },
				Comment.updateDelay
			);
		}
	},

	/**
	 * Show the "reply to user X" form
	 *
	 * @param parentId Integer
	 * @param poster String: name of the person whom we're replying to
	 */
	reply: function( parentId, poster ) {
		jQuery( '#replyto' ).text(
			mw.msg( 'comments-reply-to' ) + ' ' + poster + ' ('
		);
		jQuery( '<a>', {
			href: 'javascript:void(0);',
			'class': 'comments-cancel-reply-link',
			click: function() {
				// Calling Comments.cancelReply(); here, like in the original
				// code, does not work for some reason so we have to duplicate
				// its functionality here. Ah well, it's only two lines.
				document.getElementById( 'replyto' ).innerHTML = '';
				document.commentform.comment_parent_id.value = '';
			},
			text: mw.msg( 'comments-cancel-reply' )
		} ).appendTo( '#replyto' );
		jQuery( '#replyto' ).append( ') <br />' );

		document.commentform.comment_parent_id.value = parentId;
	},

	cancelReply: function() {
		document.getElementById( 'replyto' ).innerHTML = '';
		document.commentform.comment_parent_id.value = '';
	}
};

jQuery( document ).ready( function() {
	// "Sort by X" feature
	jQuery( 'select[name="TheOrder"]' ).change( function() {
		Comment.viewComments(
			mw.config.get( 'wgArticleId' ), // or we could use jQuery( 'input[name="pid"]' ).val(), too
			jQuery( this ).val()
		);
	} );

	// Comment auto-refresher
	jQuery( 'div#spy a' ).click( function() {
		Comment.toggleLiveComments( 1 );
	} );

	// Voting links
	jQuery( 'a#comment-vote-link' ).click( function() {
		var that = jQuery( this );
		var vote = that.data( 'vote-type' );
		if( that.children().data( 'vote-value' ) == 1 || that.children().data( 'vote-value' ) == -1 ){
			vote = 0;
			console.log("vote = 0");
		}
		Comment.vote(
			that.data( 'comment-id' ),
			vote,
			that.data( 'voting' )
		);
	} );

	// "Block this user" links
	jQuery( 'a.comments-block-user' ).each( function( index ) {
		var that = jQuery( this );
		that.click( function() {
			Comment.blockUser(
				that.data( 'comments-safe-username' ),
				that.data( 'comments-user-id' ),
				that.data( 'comments-comment-id' )
			);
		} );
	} );

	// "Delete Comment" links
	jQuery( 'a.comment-delete-link' ).each( function( index ) {
		var that = jQuery( this );
		that.click( function() {
			Comment.deleteComment(
				that.data( 'comment-id' )
			);
		} );
	} );

	// "Show this hidden comment" -- comments made by people on the user's
	// personal block list
	jQuery( 'div.c-ignored-links a' ).each( function( index ) {
		var that = jQuery( this );
		that.click( function() {
			Comment.show( that.data( 'comment-id' ) );
		} );
	} );

	// Reply links
	jQuery( 'a.comments-reply-to' ).each( function( index ) {
		var that = jQuery( this );
		that.bind( 'click', function() {
			Comment.reply(
				that.data( 'comment-id' ),
				that.data( 'comments-safe-username' )
			);
		} );
	} );

	// Handle clicks on the submit button (previously this was an onclick attr)
	jQuery( 'div.c-form-button input[type="button"]' ).click( function() {
		Comment.submit();
	} );
} );