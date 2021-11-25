$(document).ready(function() {
    $('h1').click(function() {
        $(this).css('background-color', 'red')
    });

    $('.test').waypoint(function(direction) {
        if(direction == 'down') {
            $('main').addClass('redcolor');
        } else {
            $('main').removeClass('redcolor');
        }
    });
});