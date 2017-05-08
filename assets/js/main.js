//= include ./src/example/file.js

jQuery(document).ready( function($) {

    $(window).load(function () {
        $('.load-overlay').fadeOut('slow');
    });

    //Open and close mobile menu
    $('.hamburger').on('click', function(){
        closeOpen($(this));
    });
    $('.closeHamburger').on('click', function(){
        closeOpen($(this));
    });
    function closeOpen (a){

        if(a.hasClass('is-active')){
            $(".menu-section").removeClass('visible-menu');
            a.removeClass('is-active');
            $("html, body").css({
                height: 'auto',
                overflow: 'visible'
            });
            $('.hamburger').removeClass('is-active');

        }
        else{
            a.addClass('is-active');
            $(".menu-section").addClass('visible-menu');
            $("html, body").css({
                height: '100%',
                overflow: 'hidden',
                position: 'relative'
            });
            $('.closeHamburger').addClass('is-active');

        }
    }
    $('.menu-item-has-children').on('click', function (e) {
        if ($(window).width() < 900){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset();
            var x = e.pageX - pOffset.left;
            if(pWidth - 50 > x) {
                //$(this).text('left');
                //alert('left');
            }
            else {
                //alert('right');
                e.preventDefault();
                $(this).toggleClass('sub-open');
            }
        }

    });

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

    $('.header-button .a-button').on('click', function(event) {
        event.preventDefault();
        $('.dark-overlay').fadeIn('fast');
        $('.contact-menu').css("transform", "translateX(100%)" );
    });
    $('.dark-overlay, .close-c-menu').on('click', function() {
        $('.dark-overlay').fadeOut('fast');
        $('.contact-menu').css("transform", "translateX(200%)" );
    });


    //All swipers
    var swiper = new Swiper('.review-swiper', {
        slidesPerView: 2, //1000px => 1
        spaceBetween: 80,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        autoplay: 8000,
        grabCursor: true,
        autoplayDisableOnInteraction: false,
        breakpoints: {
            // when window width is <= 320px
            1100: {
                spaceBetween: 30
            },
            1000: {
                spaceBetween: 10,
                slidesPerView: 1
            },
        }
    });
});
