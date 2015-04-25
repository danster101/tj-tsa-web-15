<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The Chapter"); ?>
	<body>
		<?php make_header(); ?>
		<?php make_sidebar(); ?>
		<main>
			<article class="multipage">
				<h2>The Chapter</h2>

				<nav class="page-subnav">
					<ul>
						<li load="about" class="active"><span class="fa nav-icon fa-info-circle"></span>About</li>
						<li load="activities"><span class="fa nav-icon fa-paper-plane"></span>Activities</li>
						<li load="awards"><span class="fa nav-icon fa-trophy"></span>Awards</li>
						<li load="officers"><span class="fa nav-icon fa-gavel"></span>Officers</li>
						<li load="calendar"><span class="fa nav-icon fa-calendar"></span>Calendar</li>
						<li load="media"><span class="fa nav-icon fa-photo"></span>Media</li>
					</ul>
				</nav>
				
				<div class="content" id="about">
					<?php include("about.php"); ?>
				</div>
				
				<div class="content hidden" id="awards">
					<?php include("activities.php"); ?>
				</div>
				
				<div class="content hidden" id="awards">
					<?php include("awards.php"); ?>
				</div>
				
				<div class="content hidden" id="officers">
					<?php include("officers.php"); ?>
				</div>
				
				<div class="content hidden" id="awards">
					<?php include("calendar.php"); ?>
				</div>
				
				<div class="content hidden" id="awards">
					<?php include("media.php"); ?>
				</div>
			</article>

			<!--<div class="member-info-widget">
<img src="../images/team-small.jpg" class="blur"/>
<img src="../images/team-small.jpg" class="sharp"/>
<div class="name-label">Name Here</div>
</div>-->


		</main>
		<?php make_footer(); ?>
		<script>
			$(".page-subnav li").click(function(){
				$(".page-subnav li.active").removeClass("active");
				$(this).addClass("active");
				$(".content").addClass("hidden");
				$(".content#" + $(this).attr("load")).removeClass("hidden");
			});
			
			
			var data = [
				{
					cx: 310,
					cy: 221,
					radius: 32,
					name: "Matthew Savage"
				},
				{
					cx: 233,
					cy: 206,
					radius: 32,
					name: "Kyle Herndon"
				}
			];

			var width = 720;
			var height = 540;

			$(document).ready(function(){
				$(".member-info-widget").mousemove(function(e){
					var x = e.pageX - $(this).offset().left;
					var y = e.pageY - $(this).offset().top;
					for(var i = 0; i < data.length; i++){
						if(Math.pow(x - data[i].cx, 2) + Math.pow(y - data[i].cy, 2) <= Math.pow(data[i].radius, 2)){
							var rule = "circle(" + data[i].radius  + "px at " + data[i].cx + "px " + data[i].cy + "px)";

							$(".member-info-widget .sharp").css({
								"clip-path": rule,
								"-webkit-clip-path": rule
							});

							$(".member-info-widget .name-label").text(data[i].name);

							return;
						}
					}
					$(".member-info-widget .sharp").css({
						"clip-path": "",
						"-webkit-clip-path": ""
					});
					$(".member-info-widget .name-label").text("");
				});
			});
		</script>
	</body>
</html>