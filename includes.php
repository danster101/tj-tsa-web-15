<?php function make_head($title){ ?>
<head>
	<title><?php print($title); ?> &mdash; TJHSST TSA</title>

	<link rel="stylesheet" type="text/css" href="/tsa/css/reset.css" />
	<link rel="stylesheet" type="text/css" href="/tsa/css/style.css" />

	<link href="//fonts.googleapis.com/css?family=Martel+Sans:800" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Magra:400,700" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
			$(window).scroll(function(e){
				if($(window).scrollTop() > $("header .flex").offset().top){
					$("body").addClass("scroll-small-header");
				} else {
					$("body").removeClass("scroll-small-header");
				}
			});

			$("[link]").click(function(){
				window.location = "/tsa" + $(this).attr("link");
			});
			
			$(".return-to-top").click(function(){
				$("html, body").animate({
					scrollTop: 0
				}, 1000);
			});
		});
	</script>
</head>
<?php } ?>

<?php function make_header(){ ?>
<header>
	<h1>TJHSST TSA</h1>
	<img id="header-badge" src="/tsa/images/header-badge.svg" />
	<div class="flex">
		<div class="title-secondary">TJHSST TSA</div>
		<nav>
			<ul>
				<li link="/"><span class="fa nav-icon fa-home"></span>Home</li>
				<li link="/chapter"><span class="fa nav-icon fa-users"></span>The Chapter</li>
				<li link="/school"><span class="fa nav-icon fa-institution"></span>The School</li>
				<li link="/tsa"><?php print(file_get_contents("/afs/csl.tjhsst.edu/web/activities/tsa/images/tsa-simplified.svg")); ?>The Organization</li>
				<li link="/projects"><span class="fa nav-icon fa-book"></span>Projects</li>
			</ul>
		</nav>
		<span class="fa return-to-top fa-arrow-circle-up"></span>
	</div>
</header>
<?php } ?>

<?php function make_sidebar(){ ?>
<section id="sidebar">
	<article>
		<h3>This is in the sidebar</h3>
		<p>It looked lonely, so I put this here.</p>
	</article>
	<article>
		<h3>Tweets</h3>
		<?php include("widgets/twitter.php"); ?>
	</article>
</section>
<?php } ?>

<?php function make_footer(){ ?>
<footer>
	<!-- Footer content goes here. -->
</footer>
<?php } ?>