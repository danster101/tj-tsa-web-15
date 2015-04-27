$(document).ready(function(){
	$(window).scroll(function(e){
		if($(window).scrollTop() > 0){
			$("body").addClass("not-at-top");
		} else {
			$("body").removeClass("not-at-top");
		}
	});
	
	$(".return-to-top").click(function(){
		$("html, body").animate({
			scrollTop: 0
		}, 800);
	});
});