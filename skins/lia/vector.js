/**
 * Vector-specific scripts
 */
jQuery( function ( $ ) {
	$( 'div.vectorMenu' ).each( function () {
		var $el = $( this );
		$el.find( 'h5:first a:first' )
			// For accessibility, show the menu when the hidden link in the menu is clicked (bug 24298)
			.click( function ( e ) {
				$el.find( '.menu:first' ).toggleClass( 'menuForceShow' );
				e.preventDefault();
			} )
			// When the hidden link has focus, also set a class that will change the arrow icon
			.focus( function () {
				$el.addClass( 'vectorMenuFocus' );
			} )
			.blur( function () {
				$el.removeClass( 'vectorMenuFocus' );
			} );
	} );
} );

/*Button Group Scripts - by ShermanTheMythran*/
$('.edit-button-group .drop').on('click', function() {
	if ( $(this).parent('.edit-button-group').hasClass('active') ) {
		$(this).children('.menu').slideUp('slow',function() {
			$(this).parents('.edit-button-group').removeClass('active');
		});
	}
	else {
		$(this).parents('.edit-button-group').addClass('active');
		$(this).children('.menu').slideDown('slow');
	}
});
$('.edit-button-group li').unwrap();
$('.edit-button-group .menu ul').remove();
$('#swapTabs').toggle(function() {
	$('#p-views, #p-cactions, #p-namespaces').show();
	$('.edit-button-group').hide();
	$.cookies.set('swapTabs', 'tabs'); },
	function() {
		$('#p-views, #p-cactions, #p-namespaces').hide();
		$('.edit-button-group').show();
		$.cookies.del('swapTabs');
	}
);
var $cookie = $.cookies.get('swapTabs');
if ($cookie == 'tabs') {
	$('#swapTabs').click();
}