(function($) {

	jQuery(document).ready(function($) {

		function updateClip() {
			var title = $('.fp-section.active .back');
			var img = $('.fp-section.active .img img');
			if (title && img) {
				var diff = img.offset().left - title.offset().left;
				title.css('clip-path', 'inset(0 0 0 ' + diff.toFixed() +'px)');				
			}
		}

		// Loading
		$( "#T_shaped" ).bind('mouseenter',function() {
			TweenLite.to($("polygon#red"), 1, { x:-4, y:-4, scale:1.1, opacity:0.8, ease: Power4.easeOut });
			TweenLite.to($("polygon#green"), 1, {x:-6, scale:1.1, opacity:1, ease: Power4.easeOut });
			TweenLite.to($("polygon#blue"), 1, {x:-2, y:-2, scale:1.1, opacity:1, ease: Power4.easeOut });
			TweenLite.to($("polygon#black"), 1, {x:3, opacity:0.8, ease: Power4.easeOut});
		}).bind('mouseleave',function() {
			TweenLite.to($("polygon#red"), 0.3, { opacity:0, ease: Power0.easeOut });
			TweenLite.to($("polygon#green"), 0.3, {opacity:0, ease: Power0.easeOut});
			TweenLite.to($("polygon#blue"), 0.3, {opacity:0, ease: Power0.easeOut });
			TweenLite.to($("polygon#black"), 0.7, {x:0, y:0, opacity:1, ease: Power4.easeOut});
		});

		// sharethis button
		if ( $("#share-this").length ) {
			$.material.ripples("#share-this");
			$( "#share-this").click(function() {
				$(this).next().animate({width: 'toggle'});
			});
		}


		// FullPage home
		if ( $(".photography").length ) {	
			$('.intro').hide();
			$('.loading').hide().delay(700).fadeIn();
			$('.subliminal').fadeIn(300).delay(700).fadeOut(500);
			$('.T-landing').fadeIn(500);
			$('#wall article').addClass('placed');
			setInterval(updateClip,100);
		// Case Studies
		} else if ($('body').hasClass('page-template-page-case-studies')) {
			$('#case-studies').fullpage({
					autoScrolling: false,
					keyboardScrolling : true,
					fixedElements: '.single-footer',
					fitToSection: false,
					responsiveWidth: 768,
					responsiveHeight: 0,
					verticalCentered: false,
				afterRender: function(){
					$('#loader').delay(800).fadeOut(300);
					$('.loading').hide().delay(700).fadeIn();
					$('.T-landing').fadeIn(500);
				},
				afterLoad: function (anchorLink, index){
					$( "section.active .inner" ).addClass('show');
					$( "section.active .featured-title" ).addClass('show-title');
				}
			});
		// About
	 	} else if ($('body').hasClass('page-template-page-about-me')) {
			TweenLite.set("#top, #bottom", {visibility:"visible"});
			var tl = new TimelineMax();
			tl.timeScale(2);
			tl.from("#bottom", 1, {
				drawSVG:0,
				stroke:"black",
				ease: Power4.easeIn
			})
			.from("#top", 1, {
				drawSVG:"50% 50%",
				stroke:"black",
				ease: Power1.easeOut
			});
			$(window).load(function() {
				$('#loader').delay(700).fadeOut(300);
				$("header").addClass('white');
				$('footer').addClass('off');
			});
		} else {
			TweenLite.set("#top, #bottom", {visibility:"visible"});
			var tl2 = new TimelineMax();
			tl2.timeScale(2);
			tl2.from("#bottom", 1, {
				drawSVG:0,
				stroke:"black",
				ease: Power4.easeIn
			})
			.from("#top", 1, {
				drawSVG:"50% 50%",
				stroke:"black",
				ease: Power1.easeOut
			});
			$(window).load(function() {
				$('#loader').delay(500).fadeOut(300);
				$('#wall article').addClass('placed');
			});
		}

		// single
		if ($("#single").length){
			// Share popups
			var $buttons = $('.social-sharing'),
					$shareLinks = $buttons.find('a');
			$shareLinks.on('click', function(e) {
				var el = $(this),
						popup = el.attr('class').replace('-','_'),
						link = el.attr('href'),
						w = 700,
						h = 400;
				// Set popup sizes
				switch (popup) {
					case 'share_twitter':
						h = 300;
						break;
				}
				if (popup) {
						e.preventDefault();
						window.open(link, popup, 'width=' + w + ', height=' + h);
				}
			});
			// FullPage Single
			$('#single-content').fullpage({
				verticalCentered: false,
				autoScrolling: false,
				keyboardScrolling : true,
				fixedElements: '.single-footer',
				fitToSection: false,
				responsiveWidth: 768,
				responsiveHeight: 0,
				afterRender: function(){
					$('#loader').delay(800).fadeOut(300);
					$( "section.active .inner" ).delay(100).animate({"opacity":"1"},1000);
					$('.video-section').each(function() {
						var i = $(this).index() + 1;
						videojs("vid-"+i, {
							"controls": true,
							"autoplay": false,
							"preload" : "none",
		        });
					});
				},
				afterLoad: function (anchorLink, index){
					$( "section.active .inner" ).addClass('show');
					if ($('.video-section').hasClass('active') ) {
					videojs("vid-"+index).ready(function(){
								this.play();
							});
						}
						var headerColor = $('#full-bg').data('color');
						if ($('#full-bg').hasClass('active') ) {
								$("header, footer, #arrow-up").addClass(headerColor);
							} else {
								$("header, footer, #arrow-up").removeClass(headerColor);
							}
				}
			});

			// Footer Single
			$(window).scroll(function() {
			   if($(window).scrollTop() + $(window).height() == $(document).height()) {
					 $('#arrow-up').addClass('up');
					 $("footer").addClass("white");
					 $( ".single-footer" ).addClass('show');
			    } else if ($('#full-bg').hasClass('active') ){
						$("footer").addClass("white");
					}	else {
						$("footer").removeClass("white");
						$('#arrow-up').removeClass('up');
						$( ".single-footer" ).removeClass('show');
					}
			});
			if ($('#arrow-up').length ) {
				$('#smooth-scroll').click(function () {
					if ($('#arrow-up').hasClass('up')) {
						$.fn.fullpage.moveTo(1);
					} else {
						$.fn.fullpage.moveSectionDown();
					}
				});
			}
		}

		// Overlay thumbnails
		$('.article_inner').bind('mouseenter',function() {
			var height = $(this).children('img').height();
			var width = $(this).children('img').width();
			$(this).children('.article_overlay').css({'height':height, 'width':width});
			$(this).children('.article_overlay').animate({'opacity':'0.8'},'fast');
		}).bind('mouseleave',function() {
			$(this).children('.article_overlay').animate({'opacity':'0'},'slow');
		});
		
		// Nav Single
		$( "#trigger-overlay").click(function() {
			var headerColor = $('#full-bg').data('color');
			if (!$('#main-nav-content').hasClass('open')){
				$("header, footer").addClass(headerColor);
				$('#arrow-up').removeClass('off');
			} else {
				$("header, footer").removeClass(headerColor);
				$('#arrow-up').addClass('off');
			}
		});
	});
})( jQuery );
