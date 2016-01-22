$(window).load(function() {
    $('#homeAlt').hide();
    header();
    $(window).scroll(header);
});

var header = function() {
    if($(window).width() >= 900) { 
        if($(document).scrollTop() > 0) {
            $('nav').css({'background-color': 'white'});
            $('.nav').removeClass('nav').addClass('nav-low');
            $('#home').hide();
            $('#homeAlt').show();
           // $('#left a').html('<img src="' + window.location.host + '/themes/appsforghent/assets/images/logo-black.png" alt="Logo Open Belgium 2016" />');
        } else {
            $('nav').css({'background-color': 'transparent'});
            $('.nav-low').removeClass('nav-low').addClass('nav');
            $('#home').show();
            $('#homeAlt').hide();
           // $('#left a').html('<img src="' + window.location.host + '/themes/appsforghent/assets/images/logo.png" alt="Logo Open Belgium 2016" />');
        }
    }
}