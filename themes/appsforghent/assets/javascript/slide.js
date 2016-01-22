$( "#arrow-down a" ).click(function() {
    $( "html, body" ).animate({
        scrollTop: $('.content').offset().top
    }, 500, function() {
        //animation is done
    });
});