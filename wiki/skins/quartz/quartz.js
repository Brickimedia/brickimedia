jQuery(function($) {

	$(function() {
		jQuery.extend( jQuery.easing, {
			easeOutElastic: function (x, t, b, c, d) {
		var s=1.70158;var p=0;var a=c;
		if (t==0) return b;  if ((t/=d)==1) return b+c;  if (!p) p=d*.3;
		if (a < Math.abs(c)) { a=c; var s=p/4; }
		else var s = p/(2*Math.PI) * Math.asin (c/a);
		return a*Math.pow(2,-10*t) * Math.sin( (t*d-s)*(2*Math.PI)/p ) + c + b;
			}
		});
	});
	$('#p-personal ul').before( $('#pt-userpage, #pt-login') );
	$('#pt-userpage > a, #pt-login > a').unwrap();
	$('#p-personal ul').addClass('menu');
	$('#p-handle').toggle(function() {
		$('#mw-head').animate({top: '-1em'}, 1000, 'easeOutElastic'); },
		function() {
			$('#mw-head').animate({top: '-3em'}, 1000, 'easeOutElastic');
		}
	);
	$('#p-personal .menu, #p-interwiki .menu').each(function() {
		if ( $(this).find('li').length == 0 ) {
			$(this).hide();
		} }
	);
	$('#p-personal, #p-interwiki').hover(function() {
		$(this).find('.menu').stop(false, true).animate({top: '-8em'}, 1000, 'easeOutElastic'); },
		function() {
			$(this).find('.menu').stop(false, true).animate({top: '-30em'}, 1000, 'easeOutElastic');
		}
	);
	$('#p-interwiki .submenu').css('padding-left', $('#p-interwiki .menu').width() + 128 );
	$('#p-interwiki .menu > li').hover(function() {
		$(this).find('.submenu').stop(false, true).animate({left: '-8em'}, 1000, 'easeOutElastic'); },
		function() {
			$(this).find('.submenu').stop(false, true).animate({left: '-30em'}, 1000, 'easeOutElastic');
		}
	);
	$('#p-utilities').hover(function() {
		$(this).find('.menu').stop(false, true).animate({bottom: '-8em'}, 1000, 'easeOutElastic'); },
		function() {
			$(this).find('.menu').stop(false, true).animate({bottom: '-30em'}, 1000, 'easeOutElastic');
		}
	);
	$('.tier-1-item > a').on('click', function() {
		$(this).next('span').add( $(this).parent('li').siblings('li') ).not( $(this).parent() ).add( $(this) ).fadeToggle();
		$(this).siblings('.tier-2').show('drop', {direction: 'right'}); }
	);
	$('.return').on('click', function() {
		$(this).add( $(this).parent('li').siblings('li') ).not( $(this).parent() ).add( $(this).prev('a') ).fadeToggle();
		$(this).siblings('.tier-2').hide('drop', {direction: 'right'}); }
	);
	$('.tier-2-item').hover(function() {
		$(this).find('.tier-3').stop(false, true).show('drop', {direction: 'right'}); },
		function() {
			$(this).find('.tier-3').stop(false, true).hide('drop', {direction: 'right'});
		}
	);
	$('.tier-3').parent().addClass('parent');
	$('#p-cactions li').wrapInner('<span />').appendTo('#p-views ul');
	$('#right-navigation .selected a').removeAttr('href').removeAttr('title');
	$('#namespaces h4, #namespaces h5, #actions h4, #actions h5, #p-cactions, #p-personal h5, #search h4, #search h5').remove();
	$('#namespaces').mouseenter(function() {
		$('.ribbon.right').stop(false, true).animate({top: '0em'}, 500, 'easeOutElastic'); }
	);
	$('#actions').mouseenter(function() {
		$('.ribbon.right').stop(false, true).animate({top: '1.5em'}, 500, 'easeOutElastic'); }
	);
	$('#namespaces, #actions').mouseleave(function() {
		$('.ribbon.right').stop(false, true).animate({width: '0px'}, 500, 'easeOutElastic'); }
	);
	var curDis = 0;
	var curEl;
	function setRibbon() {
		if ( $('#namespaces').is(':hover') ) {
			curDis += $('#namespaces li').eq( curEl ).width();
		}
		if ( $('#actions').is(':hover') ) {
			curDis += $('#actions li').eq( curEl ).width();
		}
		curDis += 8;
		if ( curEl != 0 ) {
			curEl--;
			setRibbon();
		}
		else {
			curDis += 4;
			$('.ribbon.right').stop(false, true).animate({width: curDis}, 500, 'easeOutElastic');
			curDis = 0;
		}
	}
	$('#namespaces li, #actions li').mouseenter(function() {
		curEl = $(this).index();
		setRibbon();
	});
	$('#simpleSearch').append( $('.suggestions') );
	var ribTop;
	var ribWidth;
	$('.tier-2-item.parent').hover(function() {
		ribTop = $(this).index() * 16.5;
		ribWidth = $(this).width() + 24;
		$('.ribbon.left').css('top', ribTop).stop(false, true).animate({width: ribWidth }, 500, 'easeOutElastic'); },
		function() {
			$('.ribbon.left').stop(false, true).animate({width: '0px'}, 500, 'easeOutElastic');
		}
	);
	$('#content').css('min-height', $(window).height() - $('#footer').height() - 96 );
	$('#firstHeading span').text(wgTitle);
	var wgNamespace = $('#p-namespaces li:first-child a').text();
	if (wgNamespace != "Page") {
		if (wgNamespaceNumber == 302 || wgNamespaceNumber == 304) {
			$('#firstHeading').append('<div class="subHeading">' + wgNamespace + ' story</div>');
		}
		else if (wgNamespaceNumber == -1) {
			$('#firstHeading').append('<div class="subHeading">' + wgNamespace + '</div>');
		}
		else {
			$('#firstHeading').append('<div class="subHeading">' + wgNamespace + ' page</div>');
		}
	}
});