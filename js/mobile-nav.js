$(document).ready(function(){
	$(".drawer-indicator").click(function(e){
		$(this).toggleClass("active");
		e.stopPropagation();
	});
	
	$("body").on("click scroll touchmove", function(){
		$(".drawer-indicator").removeClass("active");
	});
});