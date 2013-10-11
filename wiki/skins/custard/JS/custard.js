/**************************************\
|---Custard Skin  JavaScript Scripts---|
|--Written for use on Brickimedia.org--|
\**************************************/
$(document).ready(function () {

    var slow = 500;
    var easing = 'linear';

    $('#taskbar .toggle').funcToggle('click', function () {
        $('#taskbar').stop(true, true).animate({ marginBottom: -($('#taskbar').height()) }, slow, easing);
    }, function () {
        $('#taskbar').stop(true, true).animate({ marginBottom: -30 }, slow, easing);
    });

    $('#actions .watch').not('.disabled').children('a').bind('click', function () {
        $('#actions .watch').toggleClass('watching');
    });

    $(window).on('load', function () {
        $('#temp .loader').fadeOut(slow, easing);
    });

    $('#temp .tag').funcToggle('click', function () {
        $('#temp .info').stop(true, true).slideToggle(slow, easing);
    });

});
