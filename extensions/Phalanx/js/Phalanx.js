var Phalanx = {};
Phalanx.mode = 'add';
Phalanx.addMsg = jQuery( '#wpPhalanxSubmit' ).attr( 'value' );
Phalanx.editMsg = '';
Phalanx.blockId = 0;

Phalanx.ajax = function( method, data, callback ) {
	jQuery.post(
		wgServer + wgScript + '?action=ajax&rs=PhalanxAjax&method=' + method,
		data, callback, 'json'
	);
};

Phalanx.getSingleBlockData = function( e ) {
	if ( e ) {
		e.preventDefault();
	}

	// go to primary tab, just in case
	Phalanx.selectTab( 'phalanx-main-tab' );

	// scroll to form
	window.scrollTo( 0, 0 );

	var placeholder = jQuery( '#phalanx-check-results' );
	var id = jQuery( e.target ).attr( 'href' ).split( 'id=' ).pop();

	Phalanx.ajax( 'getOneBlock', { id: id }, function( response ) {
		if ( !response.error ) {
			Phalanx.loadBlockData( response );
		} else {
			placeholder.html( 'error' );
		}
	} );
	return false;
};

Phalanx.removeSingleBlock = function( e ) {
	if ( e ) {
		e.preventDefault();
	}

	// go to primary tab, just in case
	Phalanx.selectTab( 'phalanx-main-tab' );

	var placeholder = jQuery( '#phalanx-feedback-msg' );
	var id = jQuery( e.target ).attr( 'href' ).split( 'id=' ).pop();

	Phalanx.ajax( 'removeSingleBlock', { id: id }, function( response ) {
		if ( !response.error ) {
			placeholder.html( response.text );
			window.location.reload();
		} else {
			placeholder.html( 'error' );
		}
	} );
	return false;
};

Phalanx.loadBlockData = function( response ) {
	var mesg = jQuery( '#phalanx-feedback-msg' );
	jQuery( '#phalanx-block' )[0].reset();
	mesg.html( response.text );

	Phalanx.blockId = response.data.id;
	// fill form
	// decodeURIComponent() is needed not to die horribly when a regex contains a single quote
	jQuery( '#wpPhalanxFilter' ).attr( 'value', decodeURIComponent( response.data.text ) );
	if ( response.data.regex == 1 ) {
		jQuery( '#wpPhalanxFormatRegex' ).attr( 'checked', 'checked' );
	}
	if ( response.data['case'] == 1 ) { // case is a reserved word in JS
		jQuery( '#wpPhalanxFormatCase' ).attr( 'checked', 'checked' );
	}
	if ( response.data.exact == 1 ) {
		jQuery( '#wpPhalanxFormatExact' ).attr( 'checked', 'checked' );
	}
	// todo for timestamp - show current, give option for 'don't change', then all normal ones
	var type = response.data.type;

	if ( response.data.expire === null ) {
		jQuery( '#wpPhalanxExpire' ).attr( 'value', 'infinite' );
		jQuery( '#phalanx-expire-old' ).html( 'Infinite' );
	} else {
		jQuery( '#phalanx-expire-old' ).html( response.time );
	}

	if ( type & 1 ) {
		jQuery( '#wpPhalanxTypeContent' ).attr( 'checked', 'checked' );
	}
	if ( type & 2 ) {
		jQuery( '#wpPhalanxTypeSummary' ).attr( 'checked', 'checked' );
	}
	if ( type & 4 ) {
		jQuery( '#wpPhalanxTypeTitle' ).attr( 'checked', 'checked' );
	}
	if ( type & 8 ) {
		jQuery( '#wpPhalanxTypeUser' ).attr( 'checked', 'checked' );
	}
	if ( type & 16 ) {
		jQuery( '#wpPhalanxTypeQuestion' ).attr( 'checked', 'checked' );
	}
	if ( type & 32 ) {
		jQuery( '#wpPhalanxTypeFilterWords' ).attr( 'checked', 'checked' );
	}
	if ( type & 64 ) {
		jQuery( '#wpPhalanxTypeCreation' ).attr( 'checked', 'checked' );
	}
	if ( type & 256  ) {
		jQuery( '#wpPhalanxTypeEmail' ).attr( 'checked', 'checked' );
	}

	if ( Phalanx.mode == 'add' ) {
		Phalanx.mode = 'edit';
		if ( Phalanx.editMsg === '' ) {
			Phalanx.editMsg = response.button;
		}
		jQuery( '#wpPhalanxSubmit' ).attr( 'value', Phalanx.editMsg );
	}

	if ( response.data.reason !== '' ) {
		jQuery( '#wpPhalanxReason' ).attr( 'value', response.data.reason );
	}

	if ( response.data.lang !== null ) {
		jQuery( '#wpPhalanxLanguages' ).attr( 'value', response.data.lang );
	}

};

Phalanx.postForm = function( e ) {
	if ( e ) {
		e.preventDefault();
	}

	var form = jQuery( '#phalanx-block' );
	var postfix = '';
	if ( form.length > 0 ) {
		if ( Phalanx.mode == 'edit' ) {
			postfix = '&id=' + Phalanx.blockId;
		}

		Phalanx.ajax( 'setBlock', form.serialize() + postfix, function( response ) {
			Phalanx.postFormCallback( response );

			// reload the page when block is added
			document.location.reload();
		} );
	}
};

Phalanx.postFormCallback = function( response ) {
	var mesg = jQuery( '#phalanx-feedback-msg' );

	mesg.html( response.text );
	if ( response.error ) {
		mesg.addClass( 'error' );
	} else {
		mesg.removeClass( 'error' );
	}
};

Phalanx.postTestForm = function( e ) {
	e.preventDefault();

	var blockText = jQuery.trim( jQuery( '#phalanx-block-text' ).val() );
	if ( blockText !== '' ) {
		Phalanx.ajax( 'testBlock', { text: blockText }, Phalanx.postTestFormCallback );
	} else {
		// TODO: add i18n
		//jQuery.showModal( 'Phalanx', 'Provide some text!' );
		alert( 'Provide some text!' );
	}
};

Phalanx.postTestFormCallback = function( response ) {
	jQuery( '#phalanx-block-test-result' ).html( response );
};

Phalanx.selectTab = function( tab ) {
	jQuery( '#phalanx-nav-area' ).find( 'li' ).removeClass( 'selected' );
	var tabId = jQuery( '#' + tab ).addClass( 'selected' ).attr( 'id' );
	jQuery( '#phalanx-content-area' ).children().hide();
	jQuery( '#' + tabId + '-content' ).show();
};

Phalanx.displayInfo = function( e ) {
	var helpId = '#phalanx-help-' + jQuery( this ).prev( 'input' ).attr( 'value' );
	jQuery( helpId ).show();
};

Phalanx.hideInfo = function( e ) {
	var helpId = '#phalanx-help-' + jQuery( this ).prev( 'input' ).attr( 'value' );
	jQuery( helpId ).hide();
};

// Load when the DOM is ready
jQuery( function() {
	jQuery( '#phalanx-block' ).bind( 'submit', Phalanx.postForm );
	var placeholder = jQuery( '#phalanx-check-results' );
	placeholder.delegate( 'a.modify', 'click', Phalanx.getSingleBlockData );
	placeholder.delegate( 'a.unblock', 'click', Phalanx.removeSingleBlock );

	var testArea = jQuery( '#phalanx-block-test-result' );
	testArea.delegate( 'a.modify', 'click', Phalanx.getSingleBlockData );
	testArea.delegate( 'a.unblock', 'click', Phalanx.removeSingleBlock );

	// add bindings to tabs
	jQuery( '#phalanx-nav-area' ).find( 'a' ).bind( 'click', function( e ) {
		e.preventDefault();
		Phalanx.selectTab( jQuery( this ).blur().parent().attr( 'id' ) );
	} );

	jQuery( '#phalanx-block-test' ).bind( 'submit', Phalanx.postTestForm );

	// help tooltips
	jQuery( '#phalanx-block-types' ).find( 'label' ).hover( Phalanx.displayInfo, Phalanx.hideInfo );

	// select proper tab if id is passed via hash
	if ( window.location.hash !== '' ) {
		var id = 'phalanx-' + window.location.hash.substr( 1 ) + '-tab';
		var hash = jQuery( '#' + id );
		if ( hash.length ) {
			Phalanx.selectTab( id );
		}
	}
} );
