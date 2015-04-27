$(document).ready(function(){
	$("[link]").click(function(){
		window.location = "/tsa" + $(this).attr("link");
	});
});