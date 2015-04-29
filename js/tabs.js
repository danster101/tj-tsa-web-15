$(document).ready(function(){
	var updateNavIndicatorPosition = function(){
		if($(".multipage nav .nav-indicator").size() > 0){
			$(".multipage nav .nav-indicator").css({
				left: $(".multipage nav .active").position().left,
				top: $(".multipage nav .active").position().top,
				width: $(".multipage nav .active").outerWidth(),
				height: $(".multipage nav .active").outerHeight()
			});
		}
	}

	$(".multipage nav li").click(function(){
		$(".multipage nav li.active").removeClass("active");
		$(this).addClass("active");
		$(".multipage .content").addClass("hidden");
		$(".multipage .content#" + $(this).attr("load")).removeClass("hidden");
		history.pushState(null, null, "#" + $(this).attr("load"));
		updateNavIndicatorPosition();
	});

	$(window).resize(function(){
		updateNavIndicatorPosition();
	});

	if(window.location.hash){
		$(".multipage nav li[load=" + window.location.hash.substring(1) + "]").trigger("click");
	}

	setTimeout(function(){
		updateNavIndicatorPosition();
	}, 600);
});