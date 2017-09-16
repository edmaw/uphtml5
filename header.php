<!DOCTYPE HTML>
<!--
	Miniport by HTML5 UP
	html5up.net | the mighty @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	somewhat hacked @ gebnet
-->
<html>
<head>
		<title><?php
global $page, $paged;
wp_title( '|', true, 'right' );
// Add the blog name.
bloginfo( 'name' );
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri()?>/assets/css/ie9.css" /><![endif]-->



</head>

<?php wp_head(); ?>

<body>

			<nav id="nav">
				<ul class="container">
					<li>	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?></li>
				</ul>
			</nav>

	<!-- Home -->

			<div class="wrapper custom-background">

				<article class="container" id="top">
					<div class="row">
						<div class="4u 12u(mobile)">
							<span class="image fit"><?php
// Display the Custom Logo
the_custom_logo();
?>
</span>
						</div>
						<div class="8u 12u(mobile)">
	<!-- Header -->

	<header role="banner" id="header">


		<div>
			<!-- site name and description - site name is inside a div element on all pages execpt the front page and/or main blog page, where it is in a h1 element -->
			<h1 id="site-title">
				<a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

	</header>
							<a href="#work" class="button big scrolly">Go</a>
						</div>
					</div>
				</article>
			</div>
	<!-- .main -->

	<div class="main">

