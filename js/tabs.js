$(document).ready(function(){
	var updateNavIndicatorPosition = function(){
		if($(".multipage nav .nav-indicator").size() > 0){
			$(".multipage nav .nav-indicator").css({
				left: $(".multipage nav .active").position().left,
				top: $(".multipage nav .active").position().top,
				width: $(".multipage nav .active").outerWidth(),
				height: $(".multipage nav .active").outerHeight()
			});
			
			if($(".multipage .nav-wrapper").css("position") == "relative"){
				$(".multipage nav .nav-indicator").css("left", $(".multipage nav .active").position().left + $(".multipage nav").scrollLeft());
			}
		}
	}
	
	$(".multipage .nav-wrapper").click(function(e){
		if($(this).css("position") == "relative"){
			var res = $("multipage nav").scrollLeft() || 0;
			if(e.offsetX < parseInt($(this).css("font-size").substring(0, $(this).css("font-size").length-2))){
				res = Math.max($(".multipage nav").scrollLeft() - .8*$("body").width(), 0);
				$(".multipage nav").animate({
					scrollLeft: res
				}, 400);
			} else if(e.offsetX > $(this).width() - parseInt($(this).css("font-size").substring(0, $(this).css("font-size").length-2))){
				res = Math.min($(".multipage nav").scrollLeft() + .8*$("body").width(), $(".multipage nav").get(0).scrollWidth - $(".multipage nav").innerWidth());
				$(".multipage nav").animate({
					scrollLeft: res
				}, 400);
			}
			$(".multipage .nav-wrapper").removeClass("beginning end");
			if(res == 0){
				$(".multipage .nav-wrapper").addClass("beginning");
			} else if(res == $(".multipage nav").get(0).scrollWidth - $(".multipage nav").innerWidth()){
				$(".multipage .nav-wrapper").addClass("end");
			}
		}
	});

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
		$(window).scrollTop(0);
	}

	setTimeout(function(){
		updateNavIndicatorPosition();
	}, 600);
});