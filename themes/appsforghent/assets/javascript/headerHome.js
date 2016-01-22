$(window).load(function() {
    $(window).scroll(header);
    header();
});

var header = function() {
    if($(window).width() >= 900) {
        if($(document).scrollTop() >= $(window).height()) {
            $('nav').css({'position': 'fixed', 'background-color': 'white'});
            $('.nav').removeClass('nav').addClass('nav-low');
        } else {
            $('nav').css({'position': 'relative', 'background-color': 'transparent'});
            $('.nav-low').removeClass('nav-low').addClass('nav');
        }
    }
}