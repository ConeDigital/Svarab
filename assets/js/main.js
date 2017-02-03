//= include ./src/example/file.js

jQuery(document).ready( function($) {


    // Hide Header on on scroll down
    var didScroll;
    var lastST = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        // Make sure they scroll more than delta
        if(Math.abs(lastST - st) <= delta){
            //console.log(lastST);
            //console.log(st);

            return;
        }

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastST && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastST = st;
    }

    $('.question').on('click', function() {
        $(this).siblings('.answer').slideToggle('fast');
        $(this).children('.material-icons').toggleClass('rotate');
    });
});
