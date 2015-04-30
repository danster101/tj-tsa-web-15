<?php function make_head($title){ ?>
<head>
	<title><?php print($title); ?> &mdash; TJHSST TSA</title>

	<link rel="stylesheet" type="text/css" href="/tsa/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/tsa/css/style.css" />
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 800px)" href="/tsa/css/mobile.css" />

	<link href="//fonts.googleapis.com/css?family=Martel+Sans:800" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Magra:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script src="/tsa/js/header.js"></script>
	<script src="/tsa/js/links.js"></script>
	<script src="/tsa/js/tabs.js"></script>
	<script src="/tsa/js/mobile-nav.js"></script>
	<script src="/tsa/js/touch-click.js"></script>
</head>
<?php } ?>

<?php function make_header(){ ?>
<header>
	<!--	<h1>TJHSST TSA</h1>-->
	<img id="header-badge" src="/tsa/images/header-badge.svg" link="/" />
	<h1 link="/">TJHSST TSA</h1>
	<div class="flex">
		<nav>
			<div class="drawer-indicator"><span class="fa fa-bars drawer-icon"></span>Menu</div>
			<ul>
				<li link="/"><span class="fa nav-icon fa-home"></span>Home</li>
				<li link="/chapter"><span class="fa nav-icon fa-sitemap"></span>The Chapter</li>
				<li link="/school"><span class="fa nav-icon fa-institution"></span>The School</li>
				<li link="/tsa"><?php print(file_get_contents("/afs/csl.tjhsst.edu/web/activities/tsa/images/tsa-simplified.svg")); ?>The Organization</li>
				<li link="/projects"><span class="fa nav-icon fa-cubes"></span>Projects</li>
			</ul>
		</nav>
		<span class="fa return-to-top fa-arrow-circle-up"></span>
	</div>
</header>
<?php } ?>

<?php function make_sidebar(){ ?>
<section id="sidebar">
	<article>
		<h3>Upcoming Events</h3>
		<?php include("widgets/gcal.php"); ?>
	</article>
	<article>
		<h3>Twitter <span class="secondary">@tjtsa</span></h3>
		<?php include("widgets/twitter.php"); ?>
	</article>
</section>
<?php } ?>

<?php function make_footer(){ ?>
<footer>
	<!-- Footer content goes here. -->
</footer>
<?php } ?>