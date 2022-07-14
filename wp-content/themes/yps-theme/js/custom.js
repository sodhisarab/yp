(function($) { "use strict";
    $(document).ready(function() {


        $(".animsition").animsition({

            inClass               :   'zoom-in-sm',
            outClass              :   'zoom-out-sm',
            inDuration            :    1500,
            outDuration           :    800,
            linkElement           :   '.animsition-link',
            // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
            loading               :    true,
            loadingParentElement  :   'body', //animsition wrapper element
            loadingClass          :   'animsition-loading',
            unSupportCss          : [ 'animation-duration',
                '-webkit-animation-duration',
                '-o-animation-duration'
            ],
            overlay               :   false,

            overlayClass          :   'animsition-overlay-slide',
            overlayParentElement  :   'body'
        });
    });
    if ($(".logo-slider-left-move")[0]){
        $('.logo-slider-left-move').slick({
            infinite: true,
            dots: false,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 7000,
            pauseOnHover: false,
            cssEase: 'linear'
        });
    }
    if ($(".logo-slider-right-move")[0]){
        $('.logo-slider-right-move').slick({
            infinite: true,
            dots: false,
            arrows: false,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 7000,
            pauseOnHover: false,
            cssEase: 'linear',
            rtl: true
        });
    }

    $('.header-top').hidescroll();

    window.scrollReveal = new scrollReveal();


    var offset = 450;
    var duration = 500;
    $(window).scroll(function() {
        if ($(this).scrollTop() > offset) {
            $('.scroll-to-top').fadeIn(duration);
        } else {
            $('.scroll-to-top').fadeOut(duration);
        }
    });

    $('.scroll-to-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, duration);
        return false;
    })

})(jQuery);