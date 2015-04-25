$(document).ready(function(){
	var updateNavIndicatorPosition = function(){
		$(".multipage nav .nav-indicator").css({
			left: $(".multipage nav .active").position().left,
			top: $(".multipage nav .active").position().top,
			width: $(".multipage nav .active").outerWidth(),
			height: $(".multipage nav .active").outerHeight()
		});
	}

	$(".multipage nav li").click(function(){
		$(".multipage nav li.active").removeClass("active");
		$(this).addClass("active");
		$(".multipage .content").addClass("hidden");
		$(".multipage .content#" + $(this).attr("load")).removeClass("hidden");
		updateNavIndicatorPosition();
	});
	
	$(window).resize(function(){
		updateNavIndicatorPosition();
	});
	
	updateNavIndicatorPosition();
});