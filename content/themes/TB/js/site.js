jQuery(document).ready(function($) {

	$.getJSON("http://diary.thomasbrodin.com/api/read/json?callback=?", function(data) {
		$.each(data.posts, function(i,posts){
		var photo = this["photo-url-1280"];
		var div_data =  "<img src='"+photo+"'>";
		$(div_data).appendTo("#teaser");
		});
	});
	
});

