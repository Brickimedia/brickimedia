$(document).ready(function () {
    $('#toolbar .toggle').click(function () {
        if ($('#toolbar').is($('.collapsed'))) {
            $('#toolbar .notice').show();
            $('#toolbar').animate({ height: 'auto' }, 500, easeOutQuad, function () {
                $(this).removeClass('collapsed').addClass('expanded');
            });
        }
        else if ($('#toolbar').is($('.expanded'))) {
            $('#toolbar .notice').hide();
            $('#toolbar').animate({ height: '30px' }, 500, easeOutQuad, function () {
                $(this).removeClass('expanded').addClass('collapsed');
            });
        }
    });
});