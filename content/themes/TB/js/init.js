jQuery(document).ready(function($) {
	$.getJSON("http://diary.thomasbrodin.com/api/read/json?callback=?", function(data) {
		$.each(data.posts, function(i,posts){
			var photo = this["photo-url-1280"];
			var div_data =  "<img src='"+photo+"'>";
			$(div_data).appendTo("#teaser figure");
		});
	});
	$('.article_inner').bind('mouseenter',function() {
		var height = $(this).children('img').height();
		var width = $(this).children('img').width();
		$(this).children('.article_overlay').css({'height':height, 'width':width});
		$(this).children('.article_overlay').animate({'opacity':'1'},'fast');
	}).bind('mouseleave',function() {
		$(this).children('.article_overlay').animate({'opacity':'0'},'slow');
	});
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