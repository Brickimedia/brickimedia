/*globals jQuery */
/*
 * Vector-specific scripts
 */

jQuery(function($) {
	
	$('div.vectorMenu').each(function () {
		var self = this;
		$('h5:first a:first', this)
			// For accessibility, show the menu when the hidden link in the menu is clicked (bug 24298)
			.click(function (e) {
				$('.menu:first', self).toggleClass('menuForceShow');
				e.preventDefault();
			})
			// When the hidden link has focus, also set a class that will change the arrow icon
			.focus(function () {
				$(self).addClass('vectorMenuFocus');
			})
			.blur(function () {
				$( self ).removeClass('vectorMenuFocus');
			});
	});
	
	$(".ad").click(function () { $(this).hide(); });
	$(".ad2").click(function () { $(this).hide(); });

	toggle = false;

	$("#expander").click(function () {
		$("#mw-panel").removeClass();
		if (!toggle) {
			console.log("opening");
	    	$("#mw-panel").animate({left: 0}, 1000, function(){
	    		$("#mw-panel").addClass('open');
	    	});
	    	toggle = !toggle;
	    } else {
	    	console.log("closing");
	    	$("#mw-panel").animate({left: -160}, 1000, function(){
	    		$("#mw-panel").addClass('closed');
	    	});
	    	toggle = !toggle;
	    }/* else {
	    	console.log("no cond fulfilled");
	    	$("#mw-panel").addClass('closed');
	    }*/
	});
	
	function decideIt(elem){
		console.log("deciding");
		console.log(elem.is(":hover"));
		if(elem.is(":hover")){
			console.log("yes");
			elem.children().last().fadeIn(150);
		}
		console.log("no");
	}

	
	$("#p-media ul li:not(.not-link)").hover(function(){
		var t = $(this);
		setTimeout(function(){
			decideIt(t);
		},1000);
	}, function(){
		$(this).children().last().fadeOut(150);
	});
	
	
	$("div#simpleSearch input").focusin(function(){
		$("div#simpleSearch").toggleClass("expand");
	});
	$("div#simpleSearch input").focusout(function(){
		$("div#simpleSearch").toggleClass("expand");
	});
	
	
	
});
