/* ============================================================= Masonry init */
window.addEvent('load', function () {
	site.masonry = new masonry({
		container: 'content',
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
		$.each(data.posts, function(i,posts){
			var photo = this["photo-url-500"];
			var div_data =  "<img src='"+photo+"'>";
			$(div_data).appendTo("#teaser figure");
		});
	});
	/* ============================================================= CheckWidth */
	var $window = $(window);
	var $Logo = $("#logo");
	function checkWidth() {
        var windowsize = $window.width();
        if (windowsize <= 767) {
           $Logo.addClass("minified");
        } else {
			$Logo.removeClass("minified");
		}
    }
	checkWidth();
    $(window).resize(checkWidth);
	/* ============================================================= SVG Icons */
	new svgIcon(document.querySelector(".icons-default .icon-hamburger-cross"), svgIconConfig, {
		easing: mina.easeinout,
		speed: 200
	});
	new svgIcon(document.querySelector(".icons-default.logo-svg .icon-T"), svgIconConfig, {
		size: {
			w: 100,
			h: 140
		},
		evtoggle : 'mouseover'
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