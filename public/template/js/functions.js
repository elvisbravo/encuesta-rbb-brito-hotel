(function($) {
    "use strict";

    $(window).on("load", function() {
        // Fade out loader
        $('[data-loader="circle-side"]').fadeOut();
        
        // Delay and fade out preloader
        $('#preloader').delay(350).fadeOut('slow');
        
        // Set body overflow to visible after preloader
        $('body').delay(350).css({ 'overflow': 'visible' });
    });

    // Form validation
    $('form#wrapped').on('submit', function() {
        var form = $(this);
        form.validate();
        
        if (form.valid()) {
            $('#loader_form').fadeIn();
        }
    });

    // Nice select styling
    $('.styled-select select').niceSelect();

    // Password toggle
    $('#password1, #password2').hidePassword({
        toggle: { className: 'my-toggle' }
    });

    // Budget slider
    $('input[type="range"]').rangeslider({
        polyfill: false,
        onInit: function() {
            this.$element = $(".budget_slider span").val(this.$element.val());
        },
        onSlide: function(position, value) {
            this.$element.val(value);
        }
    });

    // Smooth scrolling for mobile buttons
    $('a[href^="#"].mobile_btn').on('click', function(e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 400, 'swing', function() {
            window.location.hash = target;
        });
    });

    // Navigation menu handling
    var $nav_overlay = $('.cd-overlay-nav'),
        $nav_content = $('.cd-overlay-content'),
        $primary_nav = $('.cd-primary-nav'),
        $nav_trigger = $('.cd-nav-trigger');

    navInit();
    $(window).on('resize', function() {
        window.requestAnimationFrame(navInit);
    });

    $nav_trigger.on('click', function() {
        if (!$nav_trigger.hasClass('close-nav')) {
            $nav_trigger.addClass('close-nav');
            $nav_overlay.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1
            }, 500, 'easeInCubic', function() {
                $primary_nav.addClass('fade-in');
            });
        } else {
            $nav_trigger.removeClass('close-nav');
            $nav_content.children('span').velocity({
                translateZ: 0,
                scaleX: 1,
                scaleY: 1
            }, 500, 'easeInCubic', function() {
                $primary_nav.removeClass('fade-in');
                $nav_overlay.children('span').velocity({
                    translateZ: 0,
                    scaleX: 0,
                    scaleY: 0
                }, 0);
                $nav_content.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function() {
                    $nav_content.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0
                    }, 0, function() {
                        $nav_content.removeClass('is-hidden');
                    });
                });

                if ($('output').hasClass('no-csstransitions')) {
                    $nav_content.children('span').velocity({
                        translateZ: 0,
                        scaleX: 0,
                        scaleY: 0
                    }, 0, function() {
                        $nav_content.removeClass('is-hidden');
                    });
                }
            });
        }
    });

    function navInit() {
        // Calculate overlay size based on window dimensions
        var overlayHeight = Math.sqrt(Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2)) * 2;
        
        $nav_overlay.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0
        }, 50).velocity({
            height: overlayHeight + 'px',
            width: overlayHeight + 'px',
            top: -(overlayHeight / 2) + 'px',
            left: -(overlayHeight / 2) + 'px'
        }, 0);
        
        $nav_content.children('span').velocity({
            scaleX: 0,
            scaleY: 0,
            translateZ: 0
        }, 50).velocity({
            height: overlayHeight + 'px',
            width: overlayHeight + 'px',
            top: -(overlayHeight / 2) + 'px',
            left: -(overlayHeight / 2) + 'px'
        }, 0);
    }
})(window.jQuery);