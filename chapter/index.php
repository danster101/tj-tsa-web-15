<html>
	<?php include("../includes.php"); ?>
	<?php make_head("The Chapter"); ?>
	<body>
		<?php make_header("The Chapter"); ?>
		<div class="flex" id="content-row">
			<?php make_sidebar(); ?>
			<main>
				<article class="multipage">
					<div class="nav-wrapper beginning">
						<nav>
							<div class="nav-indicator"></div>
							<ul>
								<li load="about" class="active"><span class="fa nav-icon fa-info-circle"></span>About</li>
								<li load="members"><span class="fa nav-icon fa-users"></span>Members</li>
								<li load="activities"><span class="fa nav-icon fa-paper-plane"></span>Activities</li>
								<li load="awards"><span class="fa nav-icon fa-trophy"></span>Awards</li>
								<li load="officers"><span class="fa nav-icon fa-gavel"></span>Officers</li>
								<li load="calendar"><span class="fa nav-icon fa-calendar"></span>Calendar</li>
							</ul>
						</nav>
					</div>

					<div class="content" id="about">
						<?php include("about.php"); ?>
					</div>

					<div class="content hidden" id="members">
						<?php include("members.php"); ?>
					</div>

					<div class="content hidden" id="activities">
						<?php include("activities.php"); ?>
					</div>

					<div class="content hidden" id="awards">
						<?php include("awards.php"); ?>
					</div>

					<div class="content hidden" id="officers">
						<?php include("officers.php"); ?>
					</div>

					<div class="content hidden" id="calendar">
						<?php include("calendar.php"); ?>
					</div>
				</article>
			</main>
		</div>
		<?php make_footer(); ?>
	</body>
</html>