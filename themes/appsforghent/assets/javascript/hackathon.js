$(function() {
  
  // Smooth scrolling to anchors
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 75
        }, 1000);
        return false;
      }
    }
  });
  
  /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $('.nav-links').children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        if($(window).width() > 767) {
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top - 75; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass('active');
                } else {
                    $("a[href='" + theID + "']").removeClass('active');
                }
            }

            if(windowPos + windowHeight == docHeight) {
                if (!$('nav li:last-child a').hasClass('active')) {
                    var navActiveCurrent = $('.active').attr('href');
                    $("a[href='" + navActiveCurrent + "']").removeClass('active');
                    $('nav li:last-child a').addClass('active');
                }
            }
        }    
    });
    
    /**
     * Initialise slideshow
     */
    
    $('.pgwSlider').pgwSlider({
        displayList: false,
        autoSlide: false, 
        touchControls: true,
        displayControls: true
    });
  
});