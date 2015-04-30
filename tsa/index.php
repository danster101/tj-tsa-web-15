<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The Organization"); ?>
	<body>
		<?php make_header(); ?>
		<?php make_sidebar(); ?>
		<main>
			<article class="multipage">
				<h2>Technology Student Assocation</h2>

				<div class="nav-wrapper">
					<nav class="page-subnav">
						<div class="nav-indicator"></div>
						<ul>
							<li load="about" class="active"><span class="fa nav-icon fa-info-circle"></span>About</li>
							<li load="history"><span class="fa nav-icon fa-history"></span>History</li>
							<li load="events"><span class="fa nav-icon fa-briefcase"></span>Events</li>
						</ul>
					</nav>
				</div>

				<div class="content" id="about">
					<?php include("about.php"); ?>
				</div>

				<div class="content hidden" id="history">
					<?php include("history.php"); ?>
				</div>

				<div class="content hidden" id="events">
					<?php include("events.php"); ?>
				</div>
			</article>
		</main>
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