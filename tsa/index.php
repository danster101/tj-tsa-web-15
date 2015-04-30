<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The Organization"); ?>
	<body>
		<?php make_header("The Organization"); ?>
		<div class="flex" id="content-row">
			<?php make_sidebar(); ?>
			<main>
				<article class="multipage">
					<div class="nav-wrapper beginning">
						<nav class="page-subnav">
							<div class="nav-indicator"></div>
							<ul>
								<li load="about" class="active"><span class="fa nav-icon fa-info-circle"></span>About</li>
								<li load="events"><span class="fa nav-icon fa-briefcase"></span>Events</li>
							</ul>
						</nav>
					</div>

					<div class="content" id="about">
						<?php include("about.php"); ?>
					</div>

					<div class="content hidden" id="events">
						<?php include("events.php"); ?>
					</div>
				</article>
			</main>
		</div>
		<?php make_footer(); ?>
		<script>
			$(".page-subnav li").click(function(){
				$(".page-subnav li.active").removeClass("active");
				$(this).addClass("active");
				$(".content").addClass("hidden");
				$(".content#" + $(this).attr("load")).removeClass("hidden");
			});
		</script>
	</body>
</html>