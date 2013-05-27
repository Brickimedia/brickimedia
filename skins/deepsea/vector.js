/*
 * Vector-specific scripts
 */
	
jQuery( function( $ ) {
	
	$( 'div.vectorMenu' ).each( function() {
		var self = this;
		$( 'h5:first a:first', this )
			// For accessibility, show the menu when the hidden link in the menu is clicked (bug 24298)
			.click( function( e ) {
				$( '.menu:first', self ).toggleClass( 'menuForceShow' );
				e.preventDefault();
			})
			// When the hidden link has focus, also set a class that will change the arrow icon
			.focus( function() {
				$( self ).addClass( 'vectorMenuFocus' );
			})
			.blur( function() {
				$( self ).removeClass( 'vectorMenuFocus' );
			});
	});
	
	$(".ad").click(function(){$(this).hide();});
	$(".ad2").click(function(){$(this).hide();});


	$("#expander").click(function(){
		$(this).toggleClass('open closed');
		
	    if ($(this).hasClass('open')){
			console.log("opening");
	    	$("#mw-panel").animate({left: 0}, 1000);
	    } else {
			console.log("closing");
	    	$("#mw-panel").animate({left: -160}, 1000);
		}   
	});
	
});