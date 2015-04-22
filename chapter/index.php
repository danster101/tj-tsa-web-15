<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The Chapter"); ?>
	<body>
		<?php make_header(); ?>
		<?php make_sidebar(); ?>
		<main>
			<h2>The Chapter</h2>

			<div class="member-info-widget">
				<img src="../images/team-small.jpg" class="blur"/>
				<img src="../images/team-small.jpg" class="sharp"/>
			</div>
		</main>
		<?php make_footer(); ?>
		<script>
			var data = [
				{
					left: 284,
					right: 338,
					top: 189,
					bottom: 254,
					name: "Matthew Savage"
				}
			];
			
			var width = 720;
			var height = 540;
			
			$(document).ready(function(){
				$(".member-info-widget").mousemove(function(e){
					var x = e.pageX - $(this).offset().left;
					var y = e.pageY - $(this).offset().top;
					for(var i = 0; i < data.length; i++){
						if(x >= data[i].left && x <= data[i].right && y <= data[i].bottom && y >= data[i].top){
							var rule = "inset(" + data[i].top  + "px " + (width - data[i].right) + "px " + (height - data[i].bottom) + "px " + data[i].left + "px)";
							$(".member-info-widget .sharp").css({
								"clip-path": rule,
								"-webkit-clip-path": rule
							});
							
							return;
						}
					}
					$(".member-info-widget .sharp").css({
						"clip-path": "",
						"-webkit-clip-path": ""
					});
				});
			});
		</script>
	</body>
</html>