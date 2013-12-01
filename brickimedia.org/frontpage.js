var pageURL = document.URL;
var splitVal = pageURL.split("#");
var pageDisplay = splitVal[1];
window.onload=function() {
$( '.header-link' ).on('click', function(event) {
    event.preventDefault();
    var target = "#" + $(this).data('target');
    $('html, body').animate({
        scrollTop: ($(target).offset().top - 100)
    }, 1000);
});
}

/* START GOOGLE ANALYTICS CODE */
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-38958899-1']);      // Ask George or Adrian for access to Google Analytics
_gaq.push(['_trackPageview']);
(function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
/* END GOOGLE ANALYTICS CODE */
