$(".multipage .page-subnav li").click(function(){
	$(".multipage .page-subnav li.active").removeClass("active");
	$(this).addClass("active");
	$(".multipage .content").addClass("hidden");
	$(".multipage .content#" + $(this).attr("load")).removeClass("hidden");
});