<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
  * @subpackage yp-solution
 * @since yp-solution 1.0
 */

?>

		
		<!-- FOOTER
	    ================================================== -->	
		<section class="section black_bg footer-bottom">	
			<div class="fottoer_last">
				<div class="fottoer_last_1">
					<ul class="hfe-nav-menu">
						<li class=""><a href="#" class="hfe-menu-item">Privacy</a></li>
						<li class=""><a href="#" class="hfe-menu-item">Cookie</a></li>
					</ul>
					<p>© 2022 Yellow Pixel Solutions Ltd</p>
				</div>	
				<div class="fottoer_last_2">
					<div class="one_colun">
						<img src="<?php bloginfo('template_url'); ?>/images/Adobe_Solution_Partner_Bronze1.png" alt="" loading="lazy">
					</div>
					<div class="one_colun">
						<img src="<?php bloginfo('template_url'); ?>/images/shopify-partner-logo1.png" alt="" loading="lazy">
					</div>
					<div class="one_colun last_colun">
						<ul class="sl-nav-menu">
						<li class=""><a href="#" class="sl-menu-item">IG</a></li>
						<li class=""><a href="#" class="sl-menu-item">TW</a></li>
						<li class=""><a href="#" class="sl-menu-item">FB</a></li>
						<li class=""><a href="#" class="sl-menu-item">LN</a></li>
					</ul>
					</div>
				</div>
			</div>
		</section>

	</main>	
		<div class="scroll-to-top">&#xf106;</div>
	

</div><!-- #page -->

	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/start.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<!-- <script type="text/javascript" src="<?php // bloginfo('template_url'); ?>/js/app.js"></script>  -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/gsap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.animsition.min.js"></script>

<!-- Animation
================================================== -->
<script type="text/javascript">
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
			//"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
			//The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

			overlay               :   false,

			overlayClass          :   'animsition-overlay-slide',
			overlayParentElement  :   'body'
		  });
		});
	})(jQuery);
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.hidescroll.min.js"></script>
<script type="text/javascript">
	$('.header-top').hidescroll();
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scrollReveal.js"></script>
<script type="text/javascript">
(function($) { "use strict";
      window.scrollReveal = new scrollReveal();
})(jQuery);
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script type="text/javascript">
	(function($) { "use strict";
				jQuery(document).ready(function() {

				});
	})(jQuery);
	 $("#owl-blockquotes").owlCarousel({

		navigation: true,
		pagination:false,
		slideSpeed : 300,
		autoPlay : false,
		singleItem:true

	 });
	 $("#owl-blockquotes2").owlCarousel({

      navigation: true,
      pagination:false,
      slideSpeed : 300,
      autoPlay : false,
      singleItem:true

    });
</script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/styleswitcher.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom-corporate-home-2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

<!-- Cursor
================================================== -->
<script type="text/javascript" charset="utf-8" async defer>
	var cursor = jQuery('.cursor'),
  follower = jQuery(".cursor-follower");

  var posX = 0,
      posY = 0;

  var mouseX = 0,
      mouseY = 0;

  TweenMax.to({}, 0.016, {
    repeat: -1,
    onRepeat: function() {
      posX += (mouseX - posX) / 9;
      posY += (mouseY - posY) / 9;

      TweenMax.set(follower, {
          css: {
          left: posX - 12,
          top: posY - 12
          }
      });

      TweenMax.set(cursor, {
          css: {
          left: mouseX,
          top: mouseY
          }
      });
    }
  });

  jQuery(document).on("mousemove", function(e) {
      mouseX = e.clientX;
      mouseY = e.clientY;
  });
  // yellow circle
  jQuery("a").on("mouseenter", function() {
      cursor.addClass("active");
      follower.addClass("active");
  });
  jQuery("a").on("mouseleave", function() {
      cursor.removeClass("active");
      follower.removeClass("active");
  });
    jQuery('.logo-slider-left-move').slick({
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

    jQuery('.logo-slider-right-move').slick({
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
</script>


<script type="text/javascript" charset="utf-8" async defer>
	$(window).scroll(function () {
    if($(window).scrollTop() <= 600) {
         $('.c-Navigation').removeClass('is-visible');
    }
    if ($(window).scrollTop() > 600) {
        $('.c-Navigation').removeClass('header-top-fixed-bot');
        $('.c-Navigation').addClass('is-visible');
    }
    if($(window).scrollTop() <= 0) {
      $('.header_toggle_menu').removeClass('is-active');
    }
    // if ($(window).scrollTop() > 2201) {
    //     $('.phone-container').removeClass('phone-container-fixed');
    //     $('.phone-container').addClass('phone-container-fixed-bot');
    // }
	});
	$(document).ready(function() {
		$(".c-Navigation-burger").click(function(){
		  $(".header_toggle_menu").toggleClass("is-active");
		  $("html").toggleClass("oveflow-hide");
		});
	});
</script>
<!-- End Document
================================================== -->

<?php wp_footer(); ?>

</body>
</html>
