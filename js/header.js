$(document).ready(function(){
	var topperHeight = parseFloat($("body").css("font-size").slice(0, -2)) * 5.42;
	$(window).scroll(function(e){
		if($(window).scrollTop() > topperHeight){
			$("body").addClass("scroll-small-header");
		} else {
			$("body").removeClass("scroll-small-header");
		}
	});

	$("[link]").click(function(){
		window.location = "/tsa" + $(this).attr("link");
	});

	$(".return-to-top").click(function(){
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
	});
});