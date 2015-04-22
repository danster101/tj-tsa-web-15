<?php function make_head($title){ ?>
<head>
	<title><?php print($title); ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link href="//fonts.googleapis.com/css?family=Martel+Sans:800" rel="stylesheet" type="text/css">
	<link href="//fonts.googleapis.com/css?family=Magra:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<?php } ?>

<?php function make_header(){ ?>
<header>
	<h1>TJHSST TSA</h1>
	<img id="header-badge" src="images/header-badge.svg" />
	<nav>
		<ul>
			<li><span class="fa nav-icon fa-home"></span>Home</li>
			<li><span class="fa nav-icon fa-users"></span>Our Chapter</li>
			<li><?php print(file_get_contents("images/tsa-simplified.svg")); ?>Technology Student Association</li>
			<li><span class="fa nav-icon fa-book"></span>Projects</li>
		</ul>
	</nav>
</header>
<?php } ?>

<?php function make_sidebar(){ ?>
<section id="sidebar">

</section>
<?php } ?>

<?php function make_footer(){ ?>
<footer>
	<!-- Footer content goes here. -->
</footer>
<?php } ?>