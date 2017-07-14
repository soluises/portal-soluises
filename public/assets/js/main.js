/* ================================================
----------------- Bold Main.js ------------- */
(function ($) {
	"use strict";
	var Bold = {
		initialised: false,
		mobile: false,
		container : $('#portfolio-item-container'),
		blogContainer : $('#blog-item-container'),
		init: function () {

			if(!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}

			// Call Bold Functions
			this.pageLoadAnim();
			this.checkMobile();
			this.menuHover();
			this.mobileMenuDropdownFix();
			this.menuOnClick();
			this.stickyHeader();
			this.headerSearch();
			this.sideMenu();
			this.sideMenuScrollbar();
			this.sideMenuToggle();
			this.productZoom();
			this.scrollToTop();
			this.twitterFeed();
			this.flickerFeed();
			this.progressBars();
			this.circleProgress();
			this.scrollAnimations();
			this.tooltip();
			this.popover();
			this.fitVids();
			this.wordRotater();

			/* Call function if Swiper slider/carousel is included */
			if ( typeof Swiper === 'function' ) {
				this.carousels();
			}

			// Call after carousel to make it work without a problem
			this.countTo();

			/* Call function if noUiSlider plugin is included */
			if (typeof noUiSlider === "object") {
				this.filterSliders();	
			}

			/* Call function if Light Gallery plugin is included */
			if ( $.fn.lightGallery) {
				this.lightBox();
			}

			var self = this;
			/* Imagesloaded plugin included in isotope.pkgd.min.js */
			/* Portfolio isotope + Blog masonry with images loaded plugin */
			if ( typeof imagesLoaded === 'function' ) {
				self.container.imagesLoaded(function () {
					self.isotopeActivate();
					// recall for plugin support
					self.isotopeFilter();
				});

				self.blogContainer.imagesLoaded(function () {
					self.blogMasonry();
				});
			}

			// Init Parallax
			this.parallax();
		},
		checkMobile: function () {
			/* Mobile Detect*/
			if ( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test( navigator.userAgent ) ) {
				this.mobile = true;
			} else {
				this.mobile = false;
			}
		},
		pageLoadAnim: function() {
			// Page Loader Animation
			if ($('#page-loader').length) {
				$('#page-loader').delay(700).fadeOut(800, function () {
					$(this).remove();
				});
			}
		},
		menuHover: function () {
			if (typeof Modernizr === "object" && Modernizr.mq('only all and (min-width: 768px)') && !Modernizr.touchevents) {
				if ($.fn.hoverIntent) {
					$('.header').find('.navbar-nav').not('.nav-overlay').hoverIntent({
						over: function() {
							var  $this = $(this);

							$this.addClass('open');
							if($this.find('ul, div').length) {
								$this.find('.dropdown-toggle').addClass('disabled');
							}
						},
						out: function() {
							var  $this = $(this);

							$this.removeClass('open');
							if($this.hasClass('open')) {
								$this.find('.dropdown-toggle').removeClass('disabled');
							}
						},
						selector: 'li',
						timeout: 100,
						interval: 40
					});
				}
			}
		},
		mobileMenuDropdownFix : function () {
			if ( typeof Modernizr === "object" && (Modernizr.mq('only all and (max-width: 767px)') || Modernizr.touchevents) ) {
				$('.navbar-nav').not('.nav-overlay').find('.dropdown-toggle').on('click', function (e) {
					var parent = $(this).closest('li');
	                // close all the siblings and their children
	                parent.siblings().removeClass('open').find('li').removeClass('open');
	                // open which one is clicked
	                parent.toggleClass('open');

	                // prevent
	                e.preventDefault();
	                e.stopPropagation();
				});
			}
		},
		menuOnClick: function() {
			var self = this;
			// Menu on click scroll animation for onepages
			$('.onepage-nav').find('a').on('click', function (e) {
				var target = $(this).attr('href');
				if ( target.indexOf('#') === -1 || !$(target).length ) {
					return;
				}

				var elem = $(target),
					targetPos = elem.offset().top;

				$('html, body').animate({
		            'scrollTop': targetPos
		        }, 1200);
		        e.preventDefault();
			});
		},
		stickyHeader: function () {
			// Sticky header - calls if sticky-header class is added to the header
			if ( $('.sticky-header').length && $(window).width() >= 992 ) {
				var sticky = new Waypoint.Sticky({
					element: $('.sticky-header')[0],
					stuckClass: 'fixed',
					offset: -400
				});
			}
		},
		headerSearch: function() {
			// Toggle Header Search Form
			$('.header-search-toggle').on('click', function(e) {
				$('.header-search-form').toggleClass('open');
				e.preventDefault();
			});
		},
		sideMenu: function () {
			if ($.fn.metisMenu) {
				$('.side-menu').metisMenu();
			}
		},
		sideMenuScrollbar: function () {
			/* Side Menu Custom scrollbar */
			if ($.fn.niceScroll) {
				$('.header-inside').niceScroll({
					zindex: 9999,
					autohidemode: true,
					background: 'rgba(0,0,0, 0.03)' ,
					cursorcolor: '#b7b7b7',
					cursorwidth: '5px',
					cursorborder: '1px solid transparent',
					cursorborderradius: '4px'
				});
			}
		},
		sideMenuToggle: function () {
			// Overlay Menu Show/Hide via .nav-open class
			$('.sidemenu-toggle').on('click', function (e) {
				$('.header-inside').toggleClass('open');
				e.preventDefault();
			});
		},
		parallax: function () {
			// Parallax init function for not mobile browsers
			if (!this.mobile && typeof skrollr === "object") {
				skrollr.init({
					forceHeight: false
				});
			}
		},
		carousels: function () {
			// Carousels - Sliders with Swiper Plugin

			// Featured-entry-carousels - index.html etc...
			new Swiper ('.latest-news-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 4,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 2
					},
					1200: {
						slidesPerView: 3
					}
				}
		    });

		    // Testimonials box Carousel - index.html etc...
		    new Swiper ('.testimonials-box-carousel-small', {
				loop: false,
				autoplay: 18000,
				spaceBetween: 25,
				slidesPerView : 2,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					}
				}
		    });

		    // clients carousel small - index.html etc...
		    new Swiper ('.clients-carousel-small', {
				loop: false,
				autoplay: 18000,
				spaceBetween: 25,
				slidesPerView : 3,
				slidesPerColumn: 2,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 2
					}
				}
		    });

		    // Latest news Carousel small - index2.html etc...
		    new Swiper ('.latest-news-carousel-small', {
				loop: false,
				autoplay: 18000,
				spaceBetween: 25,
				slidesPerView : 2,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					}
				}
		    });

		    // Testimonials box Carousel - index2.html etc...
		    new Swiper ('.testimonials-box-carousel-small', {
				loop: false,
				autoplay: 18000,
				spaceBetween: 25,
				slidesPerView : 2,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					}
				}
		    });

		    // Protfolio Carousel Scrollbar - index3.html etc...
		    new Swiper ('.portfolio-carousel-scrollbar', {
				loop: false,
				autoplay: 18000,
				spaceBetween: 30,
				slidesPerView : 4,
				slidesPerColumn: 2,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				scrollbar: '.swiper-scrollbar',
				scrollbarHide: false,
				scrollbarDraggable: true,
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2
					},
					992: {
						slidesPerView: 3
					}
				}
		    });

		    // Testimonials Carousel Scrollbar - index3.html etc...
		    new Swiper ('.testimonials-carousel-scrollbar', {
				loop: false,
				autoplay: 20000,
				spaceBetween: 30,
				slidesPerView : 4,
				slidesPerColumn: 2,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				scrollbar: '.swiper-scrollbar',
				scrollbarHide: false,
				scrollbarDraggable: true,
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2
					},
					992: {
						slidesPerView: 3
					}
				}
		    });

		    // Latest News Carousel Scrollbar - index3.html etc...
		    new Swiper ('.latest-news-carousel-scrollbar', {
				loop: false,
				autoplay: 22000,
				spaceBetween: 30,
				slidesPerView : 4,
				slidesPerColumn: 2,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				scrollbar: '.swiper-scrollbar',
				scrollbarHide: false,
				scrollbarDraggable: true,
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2
					},
					992: {
						slidesPerView: 3
					}
				}
		    });

		    // Testimonials box Carousel - index6.html etc...
		    new Swiper ('.testimonials-box-carousel-fullnav-3col', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 3,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 2
					}
				}
		    });

		    // Featured-entry-carousels-3col - index6.html etc...
			new Swiper ('.latest-news-carousel-3col', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 3,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 2
					}
				}
		    });


		    // Portfolio Fullwidth Carousel - index8.html etc...
		    new Swiper ('.portfolio-fullwidth-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 5,
				slidesPerColumn: 2,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 3
					},
					992: {
						slidesPerView: 3
					},
					1600: {
						slidesPerView: 4
					}
				}
		    });

		    // Portfolio Fullwidth Carousel 1row - index9.html etc...
		    new Swiper ('.portfolio-fullwidth-carousel-1row', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 5,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 3
					},
					992: {
						slidesPerView: 3
					},
					1600: {
						slidesPerView: 4
					}
				}
		    });

			// Featured-entry-carousels - index-blog.html etc...
			new Swiper ('.featured-entry-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 4,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 2
					},
					1200: {
						slidesPerView: 3
					}
				}
		    });

		    // Featured-entry-carousels - index-blog2.html etc...
			new Swiper ('.featured-entry-slider', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 1,
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				pagination: '.swiper-pagination',
				paginationClickable: true
		    });


			// About Testimonials Sync Slider/Carousel
			var testyContent = new Swiper ('.testimonials-content-slider', {
				autoplay: 18000,
				spaceBetween: 10
		    });

		    var tesyThumbs = new Swiper ('.testimonials-thumbs-carousel', {
				spaceBetween: 10,
				centeredSlides: true,
				slidesPerView : 5,
				touchRatio: 0.2,
				slideToClickedSlide: true,
				breakpoints: {
					480: {
						slidesPerView: 3
					}
				}
		    });

			testyContent.params.control = tesyThumbs;
			tesyThumbs.params.control = testyContent;


			// Team Carousel 4columns - about2.html etc...
			new Swiper ('.team-carousel-4col', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 4,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 25
					}
				}
		    });


			// Clients Carousel - about2.html etc...
		    new Swiper ('.clients-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 7,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 2
					},
					768: {
						slidesPerView: 3
					},
					992: {
						slidesPerView: 4
					},
					1200: {
						slidesPerView: 5
					},
					1600: {
						slidesPerView: 6
					}
				}
		    });

		    // Team Carousel - about3.html etc...
			new Swiper ('.team-carousel-fullnav', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 4,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 25
					}
				}
		    });

		    // Testimonials Slider - about3.html etc...
			new Swiper ('.testimonials-slider', {
				loop: false,
				autoplay: 18000,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true
		    });

		    // Clients Carousel - about3.html etc...
		    new Swiper ('.clients-carousel-fullnav', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 0,
				slidesPerView : 7,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 2
					},
					768: {
						slidesPerView: 3
					},
					992: {
						slidesPerView: 4
					},
					1200: {
						slidesPerView: 5
					},
					1600: {
						slidesPerView: 6
					}
				}
		    });

		    // Testimonials box Carousel - serices3.html etc...
		    new Swiper ('.testimonials-box-carousel-fullnav', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 5,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					},
					992: {
						slidesPerView: 2
					},
					1200: {
						slidesPerView: 3
					},
					1440: {
						slidesPerView: 4
					}
				}
		    });

		    // related-products-carousel - compare.html etc...
			new Swiper ('.related-products-carousel-fullnav', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 4,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 25
					}
				}
		    });

		    // Product Gallery Carousel - product.html etc...
		    new Swiper ('.product-gallery', {
				loop: false,
				spaceBetween: 0,
				slidesPerView : 6,
				pagination: '.swiper-pagination',
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 3
					},
					768: {
						slidesPerView: 4
					},
					992: {
						slidesPerView: 5
					},
					1200: {
						slidesPerView: 4
					},
					1500: {
						slidesPerView: 5
					}
				}
		    });

			// Related Posts Carousel - single.html etc...
			new Swiper ('.related-posts-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 2,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					600: {
						slidesPerView: 1
					}
				}
		    });

		    // Single Portfolio Gallery - single-portfolio-gallery.html...
			var portfolioGallery = new Swiper ('.single-portfolio-gallery', {
				autoplay: 18000,
				spaceBetween: 10
		    });

		    var portfolioGalleryThumbs = new Swiper ('.single-portfolio-gallery-thumbs', {
				spaceBetween: 0,
				centeredSlides: true,
				slidesPerView : 5,
				touchRatio: 0.2,
				slideToClickedSlide: true,
				breakpoints: {
					480: {
						slidesPerView: 2
					},
					768: {
						slidesPerView: 3
					},
					992: {
						slidesPerView: 4
					}
				}
		    });

			portfolioGallery.params.control = portfolioGalleryThumbs;
			portfolioGalleryThumbs.params.control = portfolioGallery;

		    // Related Portfolio Carousel - single-portfolio.html etc...
			new Swiper ('.related-portfolio-carousel', {
				loop: false,
				autoplay: 15000,
				spaceBetween: 30,
				slidesPerView : 4,
				pagination: '.swiper-pagination',
				paginationClickable: true,
				breakpoints: {
					480: {
						slidesPerView: 1
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 20
					}
				}
		    });
		},
		tooltip: function () {
			// Bootstrap Tooltip
			if ( $.fn.tooltip ) {
				$('[data-toggle="tooltip"]').tooltip();
			}
		},
		popover: function () {
			// Bootstrap Popover
			if ( $.fn.popover ) {
				$('[data-toggle="popover"]').popover({
					trigger: 'focus'
				});
			}
		},
		scrollBtnAppear: function () {
	        if ( $(window).scrollTop() >= 400 ) {
	            $('#scroll-top').addClass('fixed');
	        } else {
	            $('#scroll-top').removeClass('fixed');
	        }
		},
		scrollToTop: function () {
			$('#scroll-top').on('click', function (e) {
		        $('html, body').animate({
			            'scrollTop': 0
		        }, 1200);
				e.preventDefault();
			});
		},
		lightBox: function () {
			/* Lightbox for portfolio items and videso and etc.. */
			$('.popup-gallery').lightGallery({
				selector: '.zoom-btn',
				thumbnail:true,
				exThumbImage: 'data-thumb',
				thumbWidth: 70,
				thumbContHeight: 68
			});

			// custom Lightbox for a.custom-link tag about3.html etc...
			$('.custom-gallery').lightGallery({
				selector: '.custom-link',
				thumbnail:true,
				exThumbImage: 'data-thumb',
				thumbWidth: 70,
				thumbContHeight: 68
			});
		},
		productZoom: function () {
			var self = this;
			// Product page zoom plugin settings
			if ($.fn.elevateZoom) {
				$('#product-zoom').elevateZoom({
					responsive: true,
					zoomType: 'inner', // lens or window can be used - options already set below
					borderColour: '#e1e1e1',
					zoomWindowPosition: 1,
					zoomWindowOffetx: 30,
					cursor: "crosshair", //
					zoomWindowFadeIn: 400,
					zoomWindowFadeOut: 250,
					lensBorderSize: 3, // lens border size
					lensOpacity: 1,
					lensColour: 'rgba(255, 255, 255, 0.5)', // lens color
					lensShape : "square", // circle lens shape can be uses
					lensSize : 200,
					scrollZoom : true
				});

				/* swap images for zoom on click event */
				$('.product-gallery').find('a').on('click', function (e) {
					var ez = $('#product-zoom').data('elevateZoom'),
						smallImg = $(this).data('image'),
						bigImg = $(this).data('zoom-image');

						ez.swaptheimage(smallImg, bigImg);
					e.preventDefault();
				});
			}
		},
		progressBars: function () {
			var self = this;
			// Calculate and Animate Progress 
			$('.progress-animate').waypoint( function (direction) {
				var $this =  $(this.element),
					progressVal = $this.data('width');

				$this.css({ 'width' : progressVal + '%'}, 400);
			}, {
				offset: '80%',
				triggerOnce: true 
			});
		},
		circleProgress: function() {
			// Circle Progress Bars
			if ( $.fn.easyPieChart ) {
				$('.circle-progress').easyPieChart({
					easing: 'easeOutBounce',
					trackColor: '#c2c8ca',
					barColor: function() {
						var barColor = '#673AB7';
						if ($(this.el).hasClass('custom2')) {
							barColor = '#E91E63';
						} else if ($(this.el).hasClass('dark')) {
							barColor = '#181818';
						} else if ($(this.el).hasClass('white')) {
							barColor = '#fff';
						}
						return barColor;
					},
					scaleColor: false,
					lineCap: 'square',
					lineWidth: '8',
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});

				// Animate
				$('.circle-progress-animate').waypoint( function (direction) {
					$(this.element).easyPieChart({
						easing: 'easeOutBounce',
						trackColor: '#c2c8ca',
						barColor: function() {
							var barColor = '#673AB7';
							if ($(this.el).hasClass('custom2')) {
								barColor = '#E91E63';
							} else if ($(this.el).hasClass('dark')) {
								barColor = '#181818';
							} else if ($(this.el).hasClass('white')) {
								barColor = '#fff';
							}
							return barColor;
						},
						scaleColor: false,
						lineCap: 'square',
						lineWidth: '8',
						onStep: function(from, to, percent) {
							$(this.el).find('.percent').text(Math.round(percent));
						}
					});
				}, {
					offset: '80%',
					triggerOnce: true 
				});
			}
		},
		countTo: function () {
			// CountTo plugin used count animations for homepages
			if ( $.fn.countTo ) {
				if ($.fn.waypoint) {
					$('.count').waypoint( function () {
						$(this.element).countTo();
					}, {
						offset: '80%',
						triggerOnce: true 
					});
				} else {
					$('.count').countTo();
				}	
			} else { 
				// fallback if count plugin doesn't included
				// Get the data-to value and add it to element
				$('.count').each(function () {
					var $this = $(this),
						countValue = $this.data('to');
						$this.text(countValue);
				});
			}
		},
		scrollAnimations: function () {
			/* Wowy Plugin */
			if ( typeof WOW === 'function' ) {
				new WOW({
					boxClass:     'wow',      // default
					animateClass: 'animated', // default
					offset:       0          // default
				}).init();
			}
		},
		twitterFeed: function () {
			/* Twitter feed for user*/
			if ( $.fn.tweet && $('.twitter-feed-widget').length ) {
			    $('.twitter-feed-widget').tweet({
			        modpath: './assets/js/twitter/',
			        avatar_size: '',
					count: 2,
					query: 'wrapbootstrap', // change query with username if you want to display search results
					loading_text:  'searching twitter...',
			        join_text: '',
			        retweets: false,
			        template: '<div class="twitter-icon"><i class="fa fa-twitter"></i></div><div class="tweet-content">{text}{time}</div>'
			        /* etc... */
			    });
			}
		},
		flickerFeed: function () {
			/* Flickr feed plugin  */
			// credits https://www.flickr.com/photos/smanography/
			if ( $.fn.jflickrfeed ) {
				$('.flickr-widget-list').jflickrfeed({
					limit: 12,
					qstrings: {
						id: '56502208@N00' // change with you flickr id
					},
					itemTemplate: '<li>' + '<a href="{{image}}" target="_blank" title="{{title}}">' + '<img src="{{image_s}}" alt="{{title}}" />' + '</a>' + '</li>'
				});
			}
		},
		filterSliders:function () {
			// Slider For category pages / filter price
			var priceSlider  = document.getElementById('price-slider');

			// Check if #price-slider elem is exists if not return
			// to prevent error logs
			if (priceSlider == null) return;

			noUiSlider.create(priceSlider, {
				start: [ 100, 900 ],
				connect: true,
				step: 50,
				range: {
					'min': 0,
					'max': 1000
				}
			});

			this.sliderText(priceSlider, '$');
		},
		sliderText: function(slider, currency) {
			// add slider values as a text 
			// check for currency too
			var currencyVar = (currency) ? '$' : null,
				divHandles = slider.getElementsByClassName('noUi-handle'),
				divs = [];

			// Add divs to the slider handles.
			for ( var i = 0; i < divHandles.length; i++ ){
				divs[i] = document.createElement('div');
				divHandles[i].appendChild(divs[i]);
			}

			// When the slider changes, write the value to the tooltips.
			slider.noUiSlider.on('update', function( values, handle ){
				divs[handle].innerHTML = ( currencyVar) ? (currencyVar + values[handle]) : Math.round(values[handle]);
			});
		},
		isotopeActivate: function() {
			// Trigger for isotope plugin
			if ( $.fn.isotope ) {
				var container = this.container,
					layoutMode = container.data('layoutmode');

				container.isotope({
                	itemSelector: '.portfolio-item',
                	layoutMode: (layoutMode) ? layoutMode : 'masonry'
            	});
			}
		},
		isotopeReinit: function () {
			// Recall for isotope plugin
			if ( $.fn.isotope ) {
				this.container.isotope('destroy');
				this.isotopeActivate();
			}
		},
		isotopeFilter: function () {
			// Isotope plugin filter handle
			var self = this,
				filtersContainer = $('#portfolio-filter, #nav-portfolio-filter');

			filtersContainer.find('a').on('click', function(e) {
				var $this = $(this),
					selector = $this.attr('data-filter');

				filtersContainer.find('.active').removeClass('active');

				// And filter now
				self.container.isotope({
					filter: selector,
					transitionDuration: '0.8s'
				});
				
				$this.closest('li').addClass('active');
				e.preventDefault();
			});
		},
		blogMasonry: function() {
			// Trigger for isotope plugin
			if ( $.fn.isotope ) {
				var blogContainer = this.blogContainer;

				blogContainer.isotope({
                	itemSelector: '.entry-grid',
                	layoutMode: 'masonry'
            	});
			}
		},
		fitVids: function () {
			// Make iframe videos responsive
			if ( $.fn.fitVids ) {
				 $('body').fitVids();
			}
		},
		wordRotater: function() {
			if ($.fn.Morphext) {
				$('.word-rotate').each(function() {
					var rotateAnim = $(this).attr('data-anim'),
						speed = $(this).attr('data-speed');

					$(this).Morphext({
						animation: rotateAnim,
						speed: speed
					});
				});
			}
		}
	};

	// Ready Event
	$(document).ready(function () {
		// Init our app
		Bold.init();
	});

	// Load Event
	$(window).on('load', function() {
		Bold.scrollBtnAppear();
	});

	// Scroll Event
	$(window).on('scroll', function () {
		Bold.scrollBtnAppear();
	});
	
})(jQuery);