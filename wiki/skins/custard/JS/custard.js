console.log('The script is loading, so something else is wrong.');

/**************************************\
|---Custard Skin  JavaScript Scripts---|
|--Written for use on Brickimedia.org--|
\**************************************/
$(document).ready(function () {

    $('#toolbar .toggle').funcToggle('click', function () {
        $('#toolbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideDown(500, 'linear');
            }
        });
    }, function () {
        $('#toolbar .notice').each(function () {
            if ($(this).text().length > 0) {
                $(this).slideUp(500, 'linear');
            }
        });
    });

});
