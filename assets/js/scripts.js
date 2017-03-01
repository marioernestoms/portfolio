jQuery(function($) {'use strict';
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    });

    //jQuery for page scrolling feature - requires jQuery Easing plugin

    $("nav a").click( function() {
        var link = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(link).offset().top
        }, 600 );
    });

    //Function parallax to move intro figure
    $(document).ready(function () {
        $('.slider').mousemove(function (e) {
            parallax(e, this, 1);
        });
        function parallax( e, target ) {
            var layer_coeff = 10;
            
            var cursorX = ( 
                $( window ).width() - target.offsetWidth
            ) / 2 - ( e.pageX - ( $( window ).width() / 2 ) ) / layer_coeff;
            
            var cursorY = ( 
                $( window ).height() - target.offsetHeight ) / 2 - 
                    ( e.pageY - ( $( window ).height() / 2 ) ) / layer_coeff;
            $( target ).offset({ 
                top: cursorY ,left : cursorX 
            });
        };
    });
    // Progress Bar
    $.each($('div.progress-bar'),function(){
        $(this).css('width', $(this).attr('data-transition')+'%');
    });

    //Flexslider
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        animationSpeed: 800,
      });
    });
});
