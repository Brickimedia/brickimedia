console.log('The script is loading, so something else is wrong.');

/**************************************\
|---Custard Skin  JavaScript Scripts---|
|--Written for use on Brickimedia.org--|
\**************************************/
$(document).ready(function () {

    $('#taskbar .toggle').funcToggle('click', function () {
        $('#taskbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideDown(250, 'linear');
            }
        });
    }, function () {
        $('#taskbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideUp(250, 'linear');
            }
        });
    });

});
