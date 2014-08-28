/* ============================================================= Masonry init */
window.addEvent('load', function () {
	site.masonry = new masonry({
		container: 'wall',
		gutterWidth: 20,
		columnWidth: 70,
		brickPath: 'article'
	});
	site.addEvent('resize', function() {
		site.masonry.resize();
	});
});

jQuery(document).ready(function($) {
	/* ============================================================= Tumblr */
	$.getJSON("http://diary.thomasbrodin.com/api/read/json?callback=?", function(data) {
		$('#ipics').attr('src', data.posts[0]['photo-url-500']);
	});
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
			h: 100
		},
	});

	/* ============================================================= Search Expand */
	new UISearch( document.getElementById( 'sb-search' ) );
	/* ============================================================= Overlay thumbnails */
	$('.article_inner').bind('mouseenter',function() {
		var height = $(this).children('img').height();
		var width = $(this).children('img').width();
		$(this).children('.article_overlay').css({'height':height, 'width':width});
		$(this).children('.article_overlay').animate({'opacity':'0.9'},'fast');
	}).bind('mouseleave',function() {
		$(this).children('.article_overlay').animate({'opacity':'0'},'slow');
	});
	/* ============================================================= Flexslider */
	$(window).load(function() {
		$('.slider').flexslider({
			slideshow: false,
			animation: "fade",
			animationLoop: false,
			controlsContainer: "#controlswrap",
			directionNav: true,
			animationSpeed: 500,
			controlNav: false,
			keyboard: true,
		});
	});
});