$("#hamburger-menu-logo").click(function(event) {
    event.preventDefault();
    window.scrollTo(0, 0);
    $('#hamburger-menu').css({'display': 'block'});
});

$("#quit").click(function() {
    event.preventDefault();
    $('#hamburger-menu').css({'display': 'none'});
});