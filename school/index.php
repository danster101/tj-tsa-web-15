<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The School"); ?>
	<body>
		<?php make_header(); ?>
		<?php make_sidebar(); ?>
		<main>
			<article class="multipage">
				<h2>Thomas Jefferson High School for Science and Technology</h2>
				<div class="nav-wrapper">

					<nav>
						<div class="nav-indicator"></div>
						<ul>
							<li load="about" class="active"><span class="fa nav-icon fa-info-circle"></span>About</li>
							<li load="curriculum"><span class="fa nav-icon fa-book"></span>Curriculum</li>
							<li load="faculty"><span class="fa nav-icon fa-apple"></span>Faculty</li>
							<li load="extracurriculars"><span class="fa nav-icon fa-futbol-o"></span>Extracurriculars</li>
							<li load="student-projects"><span class="fa nav-icon fa-cogs"></span>Student Projects</li>
						</ul>
					</nav>
				</div>

				<div class="content" id="about">
					<?php include("about.php"); ?>
				</div>

				<div class="content hidden" id="curriculum">
					<?php include("curriculum.php"); ?>
				</div>

				<div class="content hidden" id="faculty">
					<?php include("faculty.php"); ?>
				</div>

				<div class="content hidden" id="extracurriculars">
					<?php include("extracurriculars.php"); ?>
				</div>

				<div class="content hidden" id="student-projects">
					<?php include("student-projects.php"); ?>
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