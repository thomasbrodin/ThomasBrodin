var mapi = '';
var mWidth;
var throttleTimeout = '';
var masonryWidth;
var masonry_selector = $('#masonry');
var masonry_instance;
var userAgent = navigator.userAgent;


function masonryLayout () {
	if(($(window).width()) > 320){// for 1 images width
		$('.m_item').width('100%');
	}
	if(($(window).width()) > 764){// for 2 images width
		$('.m_item').width('49.95%');
	}
	if(($(window).width()) > 1000){// for 3 images width
		$('.m_item').width('33.2%');
	}
	if(($(window).width()) > 1200){// for 4 images width
		$('.m_item').width('24.95%');
	}
	if(($(window).width()) > 1600){// for 5 images width
		$('.m_item').width('19.95%');
	}
	if(($(window).width()) > 1900){// for 6 images width
		$('.m_item').width('16.5%');
	}
	if(($(window).width()) > 2600){// for 7 images width
		$('.m_item').width('14.25%');
	}
}
if (userAgent.match(/iPhone/i)) {// iPhone
	} else {
	masonryWidth = $(window).width() - 147;
	masonry_selector.width(masonryWidth);
	masonryLayout();
}

$(function() {
	masonry_overlay_init($('#masonry .m_item_inner'));
	$('.loading').show();
	if(!$.browser.webkit){
		$('#wrapper .inner').jScrollPane({
			autoReinitialise: true,
			autoReinitialiseDelay: 100,
			showArrows: false,
			enableKeyboardNavigation: true,
			verticalGutter: 0,
			horizontalGutter: 0
		});
		mapi = $('#wrapper .inner').data('jsp');
	}

	masonry_selector.imagesLoaded(function() {
		masonry_selector.isotope({
			itemSelector : '.m_item',
			animationEngine : 'css',
	        masonry: {
	        	columnWidth: $('.m_item').width()
	        },
	        sortBy : 'original-order',
	        transformsEnabled: false
	    });
		$('.loading').hide();
		var delay=0;
		var fadeIn=function(){
			$(this).delay(delay).animate({'opacity': '1.0'},100)
			delay+=200;
		}
		masonry_selector.children().css({'opacity': '0.0'}).each(fadeIn);	
		masonry_selector.css({'opacity': '1.0'});
		masonry_instance = masonry_selector.data('isotope');
	});
	
	if (userAgent.match(/iPhone/i)) {// iPhone
		} else {
			$(window).bind('resize', function() {
				masonryWidth = $(window).width() - 147;
				masonry_selector.width(masonryWidth);
				masonryLayout();
				masonry_selector.isotope({
					masonry : {
						columnWidth: $('.m_item').width()
					}
				});
				if ($.browser.msie) {
					if (!throttleTimeout) {
						throttleTimeout = setTimeout(function() {
							checkAndReinitialiseJSP();
							throttleTimeout = null;
						}, 50);
					}
				} else {
					checkAndReinitialiseJSP();
					
				}
			});
	}
});


function masonry_overlay_init(m_item_selector){
		m_item_selector.bind('mouseenter',function() {
			var height = $(this).children('img').height();
			var width = $(this).children('img').width();
			$(this).children('.m_overlay').css({'height':height, 'width':width});
			$(this).children('.m_overlay').show();
		}).bind('mouseleave',function() {
			$(this).children('.m_overlay').hide();
		});
	checkAndReinitialiseJSP();
}

function checkAndReinitialiseJSP(){
	if(!$.browser.webkit && !$.browser.mozilla){
		mapi.reinitialise();
	}
}

var slider=$('.slider');
var slides=$('.slide');
var sliderWidth=0;
var offsets = [];
var margin = 80;
var userAgent = navigator.userAgent;

function resize(){ 
    sliderWidth=margin;
    $.each(slides, function(){
        var img = $(this).find('img')
        sliderWidth+=img.width()+10;
        var height = img.height();
        var width = img.width();
		$(this).css({'width':width}).find('.caption').css({'height':height,'width':width});
    });

 //    if(!$.browser.webkit){
 //    	$('#SliderContainer .slider').jScrollPane({
	// 		autoReinitialise: true,
	// 		autoReinitialiseDelay: 100,
	// 		showArrows: false,
	// 		enableKeyboardNavigation: true,
	// 	});
	// 	mapi = $('#SliderContainer .slider').data('jsp');
	// }
	// checkAndReinitialiseJSP();
	
	sliderWidth+=70;
   	slider.css('width',sliderWidth);
   	slider.detach();
   	$('#SliderContainer').append(slider);
	for (var i=0, l=slides.length; i<l; i++){
		var so = $('.slider').offset().left;
		var o = $(slides[i]).offset().left + so * -1;		
		$(slides[i]).attr('data-offset', o); 
	}
}

if (userAgent.match(/iPhone/i)) {// iPhone
} else {
 
	$(window).load(function(){
		var delay=0;
		var fadeIn=function(){
			$(this).delay(delay).animate({'opacity': '1.0'},0)
			delay+=100;
		};
	    var s = $('.slide');
		s.find('img').css({'opacity': '0.0'}).each(fadeIn);

		$('#SliderContainer').animate({opacity:1.0},0);
		$('.caption').animate({opacity:0}, 0);


		s.on('click', function(e){
			var target = $(e.currentTarget);
			var targetOffset = target.attr('data-offset')-margin;
			scrollToImage(targetOffset);
		}).on('mouseover', function(e){

			$(this).children('.caption').css({opacity:1});

		}).on('mouseout', function(e){
			$(this).children('.caption').css({opacity:0});

		});
	    $(window).bind('resize',function(){
	        resize();
		});
	    resize();
	});
}

function scrollToImage(distance){
	$('#SliderContainer').stop().animate({ scrollLeft:distance }, 100);
}

