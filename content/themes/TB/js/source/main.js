/* ============================================================= Masonry init */
var grid =  document.getElementById('wall');
if (typeof(grid) !== 'undefined' && grid !== null) {
	window.addEvent('load', function () {
		site.masonry = new masonry({
			container: 'wall',
			gutterWidth: 20,
			columnWidth: 20,
			brickPath: 'article'
		});
		site.addEvent('resize', function() {
			site.masonry.resize();
		});
	});
}
jQuery(document).ready(function($) {
	/* ============================================================= Snap */
	if ( $("#T-home").length ) {
		var x_middle,
			y_middle,
			resizeTimer,
			T,
			s = Snap("#T-home");

		tSize();
		$(window).on('resize',function () {
			T.remove();
			tSize();
		});
	}

	function tSize(){
		t_width = 100;
		t_height = 25;
		x_middle = Math.round($(window).width()/2);
		y_middle = Math.round($(window).height()/2)-60;
		t_top_x = x_middle - (t_width/2);
		t_top_y = y_middle - (t_width/2);
		t_bot_x = t_top_x + ((t_width/2)-(t_height/2));
		t_bot_y = t_top_y + t_height;

		var rect_top = s.rect(t_top_x,t_top_y,t_width,t_height),
			rect_bottom = s.rect(t_bot_x,t_bot_y,t_height,t_width);

		T = s.group(rect_top, rect_bottom);
		T.attr({
			fill: 'black',
			fillOpacity: 0.2,
		});
		T.animate({ fillOpacity: 0.8}, 1000);
	}
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
			h: 70
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
});