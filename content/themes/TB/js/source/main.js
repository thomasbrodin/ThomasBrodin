/* ============================================================= Masonry init */
var grid =  document.getElementById('wall');
if (typeof(grid) !== 'undefined' && grid !== null) {
	window.addEvent('load', function () {
		site.masonry = new masonry({
			container: 'wall',
			gutterWidth: 30,
			columnWidth: 70,
			brickPath: 'article'
		});
		site.addEvent('resize', function() {
			site.masonry.resize();
		});
	});
}
jQuery(document).ready(function($) {

	/* ============================================================= sharethis button */
	if ( $("#share-this").length ) {
		$.material.ripples("#share-this");
		$( "#share-this").click(function() {
			$(this).next().animate({width: 'toggle'});
		});
	}
	/* ============================================================= Home */
	if ( $(".home").length ) {
		/* Load */
		$(window).load(function() {
			$('.loading').hide();
			$(".loader").delay(800).fadeOut();
			$('.loading').delay(2500).show();
			$('.T-landing').hide();
			$('.subliminal').delay(2500).fadeOut();
			$('.T-landing').delay(3000).fadeIn();
		});
		/* BGs */
		var images = ['bg1.jpg', 'bg2.jpg', 'bg3.jpg'];
		$('.subliminal').css({'background-image': 'url('+templateUrl+'/img/'+images[Math.floor(Math.random() * images.length)] + ')'});
		/* Snap */
		var s = Snap("#loading-T");
			t_width = 80;
			t_height = 18;

		x_middle = Math.round($(window).width()/2)-10;
		y_middle = Math.round($(window).height()/2)-60;
		t_top_x = x_middle - (t_width/2);
		t_top_y = y_middle - (t_width/2);
		t_bot_x = t_top_x + ((t_width/2)-(t_height/2));
		t_bot_y = t_top_y + t_height;

		var rect_top = s.rect(t_top_x,t_top_y,t_width,t_height).attr({fill: 'black'});
		var	rect_bottom = s.rect(t_bot_x,t_bot_y,t_height,t_width).attr({fill: 'black'});

		T = s.group(rect_top, rect_bottom);
		T.animate({transform: 's2,2' }, 1000, mina.backin, function () {
			T.animate({fillOpacity:'0.2'}, 100);
		});
		
		/* words typing */
		var animationDelay = 2500,
			//loading bar effect
			barAnimationDelay = 3800,
			barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
			//letters effect
			lettersDelay = 50,
			//type effect
			typeLettersDelay = 150,
			selectionDuration = 500,
			typeAnimationDelay = selectionDuration + 800,
			//clip effect 
			revealDuration = 600,
			revealAnimationDelay = 1500;
		
		initHeadline();
	}

	function initHeadline() {
		//insert <i> element for each letter of a changing word
		singleLetters($('.tb-words.letters').find('b'));
		//initialise headline animation
		animateHeadline($('.tb-words'));
	}

	function singleLetters($words) {
		$words.each(function(){
			var word = $(this),
				letters = word.text().split(''),
				selected = word.hasClass('is-visible');
			for (i in letters) {
				if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
				letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
			}
			var newLetters = letters.join('');
			word.html(newLetters).css('opacity', 1);
		});
	}

	function animateHeadline($headlines) {
		var duration = animationDelay;
		$headlines.each(function(){
			var headline = $(this);
			
			if(headline.hasClass('loading-bar')) {
				duration = barAnimationDelay;
				setTimeout(function(){ headline.find('.words-wrapper').addClass('is-loading') }, barWaiting);
			} else if (headline.hasClass('clip')){
				var spanWrapper = headline.find('.words-wrapper'),
					newWidth = spanWrapper.width() + 10
				spanWrapper.css('width', newWidth);
			} else if (!headline.hasClass('type') ) {
				//assign to .words-wrapper the width of its longest word
				var words = headline.find('.words-wrapper b'),
					width = 0;
				words.each(function(){
					var wordWidth = $(this).width();
					if (wordWidth > width) width = wordWidth;
				});
				headline.find('.words-wrapper').css('width', width);
			};

			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
		});
	}

	function hideWord($word) {
		var nextWord = takeNext($word);
		
		if($word.parents('.tb-words').hasClass('type')) {
			var parentSpan = $word.parent('.words-wrapper');
			parentSpan.removeClass('waiting');	
			setTimeout(function(){ 
				$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
			}, selectionDuration);
			setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
		
		} else if($word.parents('.tb-words').hasClass('letters')) {
			var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
			hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
			showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

		}  else if($word.parents('.tb-words').hasClass('clip')) {
			$word.parents('.words-wrapper').animate({ width : '2px' }, revealDuration, function(){
				switchWord($word, nextWord);
				showWord(nextWord);
			});

		} else if ($word.parents('.tb-words').hasClass('loading-bar')){
			$word.parents('.words-wrapper').removeClass('is-loading');
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
			setTimeout(function(){ $word.parents('.words-wrapper').addClass('is-loading') }, barWaiting);

		} else {
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, animationDelay);
		}
	}

	function showWord($word, $duration) {
		if($word.parents('.tb-words').hasClass('type')) {
			showLetter($word.find('i').eq(0), $word, false, $duration);
			$word.addClass('is-visible').removeClass('is-hidden');

		}  else if($word.parents('.tb-words').hasClass('clip')) {
			$word.parents('.words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
				setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
			});
		}
	}

	function hideLetter($letter, $word, $bool, $duration) {
		$letter.removeClass('in').addClass('out');
		
		if(!$letter.is(':last-child')) {
			setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);
		} else if($bool) {
			setTimeout(function(){ hideWord(takeNext($word)); }, animationDelay);
		}

		if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
			var nextWord = takeNext($word);
			switchWord($word, nextWord);
		}
	}

	function showLetter($letter, $word, $bool, $duration) {
		$letter.addClass('in').removeClass('out');
		
		if(!$letter.is(':last-child')) {
			setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration);
		} else {
			if($word.parents('.tb-words').hasClass('type')) { setTimeout(function(){ $word.parents('.words-wrapper').addClass('waiting'); }, 200);}
			if(!$bool) { setTimeout(function(){ hideWord($word);}, animationDelay); }
		}
	}

	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}

	function takePrev($word) {
		return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	}

	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}
	/* ============================================================= About */
	if ($('body').hasClass('page-template-page-about')) {
		$("header").addClass('white');
		$('footer').addClass('off');
	}
	$( "#trigger-overlay" ).click(function() {
		if ($('body').hasClass('page-template-page-about')) {
			if (!$('#main-nav-content').hasClass('open')){
				$("header").addClass('white');
				$("footer").addClass('off');
			} else {
				$("header").removeClass('white');
				$('footer').removeClass('off');
			}
		}
	});
	/* ============================================================= Journal */
	if ( $('#journal').length ) {
		$.getJSON("http://diary.thomasbrodin.com/api/read/json?callback=?", tumblrImages);
		/* slider */
		$(window).load(function() {
			videojs(document.getElementsByClassName('video-js')[0], { "controls": true, "autoplay": false, "preload": "auto"});
			
			var pageWrap = $('#journal'),
				posts = $('#journal figure'),
				currentPost = $('figure:first'),
				slide = posts.outerHeight(true);
				
			$(window).on('resize',resize);
			resize();

			function resize(){
				windowHeight = $(window).height();
				windowWidth = $(window).width();
				marginPosts = (windowHeight - slide)/2;
				pageWrap.css({ height:windowHeight});
				posts.css({ marginTop:marginTopPosts });
			}
			// $('#arrow-right').click(function(){
			// 	pageWrap.animate({scrollLeft: '+=558' }, 500);
			// });
			// $('#arrow-left').click(function(){
			// 	pageWrap.animate({scrollLeft: '-=558' }, 500);
			// });
		});
	}
	function tumblrImages(data) {
		var tumblrArticle ='<div class="page-wrap">';
		$.each(data.posts, function(i,post){
			if ( (post.type) == 'video'){
				var video_500 = (post['video-player-500']);
				var video_caption = (post['video-caption']);
				tumblrArticle += '<figure class="video">'+video_500;
				// tumblrArticle += '<div class="post-wrap"><figcaption><h4>'+ video_caption +'</h4></figcaption></div>';
				tumblrArticle += '</figure>';
			} else if ( (post.type) == 'photo'){
				var source_500 = (post['photo-url-500']);
				var caption = (post['photo-caption']);
				var url = (post.url);
				tumblrArticle += '<figure>';
				tumblrArticle += '<img src="'+ source_500 +'" alt="Thomas Brodin, iPics on Tumblr"/>';
				tumblrArticle += '<div class="post-wrap"><figcaption>'+ caption +'</figcaption></div>';
				tumblrArticle += '</figure>';
			} else {
				// Do nothing
			}
		});
		$('#journal').html(tumblrArticle +'</div>');
		$("figure.video video").addClass('video-js vjs-sublime-skin');
	}
	/* ============================================================= SVG Icons */
	new svgIcon(document.querySelector(".icons-default .icon-hamburger-cross"), svgIconConfig, {
		easing: mina.easeinout,
		speed: 200
	});
	new svgIcon(document.querySelector(".icons-default.logo-svg .icon-T"), svgIconConfig, {
		easing : mina.linear,
		speed : 200,
		size: {
			w: 70,
			h: 70
		},
	});
	if ( $('#arrow-up').length ) {
		new svgIcon(document.querySelector(".icons-default .icon-arrow"), svgIconConfig, {
			easing : mina.easeinout,
			speed : 200,
			size: {
				w: 40,
				h: 40
			},
		});
		$('#smooth-scroll').click(function () {
			$("html, body").animate({
					scrollTop: 0
			}, 1000);
			return false;
		});
		$(window).scroll(function() {
			scrolled = Math.max(0, $(window).scrollTop());
			windowHeight = $(window).height();
			contentHeight = $('#wrap')[0].scrollHeight;
			if ( (scrolled + windowHeight) >= contentHeight ){
				$('#arrow-up').addClass('up');
			} else {
				$('#arrow-up').removeClass('up');
			}
		});
	}

	/* ============================================================= Search Expand */
	new UISearch( document.getElementById( 'sb-search' ) );

	/* ============================================================= Overlay thumbnails */
	$('.article_inner').bind('mouseenter',function() {
		var height = $(this).children('img').height();
		var width = $(this).children('img').width();
		$(this).children('.article_overlay').css({'height':height, 'width':width});
		$(this).children('.article_overlay').animate({'opacity':'0.8'},'fast');
	}).bind('mouseleave',function() {
		$(this).children('.article_overlay').animate({'opacity':'0'},'slow');
	});
});