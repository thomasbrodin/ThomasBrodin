jQuery(document).ready(function($) {

	$.getJSON("http://diary.thomasbrodin.com/api/read/json?callback=?", function(data) {
		$.each(data.posts, function(i,posts){
		var photo500 = this["photo-url-500"];
		var div_data =  "<img src='"+photo500+"'>";
		$(div_data).appendTo("#teaser");
		});
	});
	
});

