<html>
	<?php include("includes.php"); ?>
	<?php make_head("Home"); ?>
	<body id="home">
		<?php include("widgets/slider.php"); ?>
		<?php make_header(); ?>
		<div class="flex" id="content-row">
			<?php make_sidebar(); ?>
			<main>
				<article>
					<p>Welcome to TJHSST TSA!</p>
					<p class="secondary">Here you will find information about our organization, chapter, and school.</p>
				</article>
			</main>
		</div>
		<?php make_footer(); ?>
	</body>
</html>