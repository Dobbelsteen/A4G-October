$(function() { 
    /**
     * Toggle Navigation for mobile
     */
    
    $('#nav-toggle').on('click', function(ev) {
        ev.preventDefault();
        $('.nav-mobile-links').slideToggle();
        $('#nav-toggle').toggleClass('nav-toggle-expanded');
        return false;
    });
  
});