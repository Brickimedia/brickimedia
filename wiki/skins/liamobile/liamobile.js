importScript('MediaWiki:Cookies.js');

/*Button Group Scripts - by ShermanTheMythran*/
$(document).ready(function() {
$('.vectorMenu').hover( function() { $('.menu ul').slideDown(); }, function() { $('.menu ul').slideUp(); } );
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
	$('#right-navigation').slideUp('fast',function() {
		$('#p-views, #p-cactions').show();
		$('.navCover').css('width','100%');
		$('#right-navigation').css('height','40px');
                $('#p-search form').css('margin-top','0.5em');
		$('#left-navigation, #right-navigation').slideDown('fast',function() {
                        $('#content').css('border-top-left-radius','0px'); }); });
	$('.edit-button-group, .button.talk').fadeOut();
	$.cookies.set('swapTabs', 'tabs'); },
	function() {
		$('#left-navigation, #right-navigation').slideUp('fast',function() {
			$('#p-views, #p-cactions').hide();
			$('.navCover').css('width','50%');
			$('#right-navigation').css('height','30px');
                        $('#p-search form').css('margin-top','0.2em');
			$('#right-navigation').slideDown('fast',function() {
                                $('#content').css('border-top-left-radius','15px'); }); });
		$('.edit-button-group, .button.talk').fadeIn();
		$.cookies.del('swapTabs');
	}
);
$('.button.talk a').unwrap();
if (wgNamespaceNumber%2 == 0) {
	$('.button.talk a[accesskey="c"], .button.talk a[accesskey="a"]').hide();
}
else {
	$('.button.talk a[accesskey="t"]').hide();
}
});
$(document).ready(function() {
	if ($.cookies.get('swapTabs') == 'tabs') {
		$('#swapTabs').click();
	}
});

/*Mobile arrows - by Seaside98*/
$('.mobile-nav-arrow, .nav-drop').toggle(function(){ 
	$(this).addClass('drop-hover').next('ul').show().parent().addClass('button-hover'); }, 
	function(){ $(this).removeClass('drop-hover').next('ul').hide().parent().removeClass('button-hover'); });
