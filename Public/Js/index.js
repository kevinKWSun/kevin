function resize_window(){
	$("#member_left").height($(window).height()-102);
	$("#member_right").height($(window).height()-82).width($(window).width()-1000);
}
$(function(){
	resize_window();
	$(window).resize(function(){
		resize_window();
	})
})
