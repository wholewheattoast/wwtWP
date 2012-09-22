<?php
/**
** header for wwt child theme
 */
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<html <?php language_attributes(); ?> class="no-js ie ie9 lte9">
<![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		
		<!--  CSS
		================================================== -->
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		
		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="http://www.wholewheattoast.com/image/favicon.ico" />

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<!-- Scripts
		================================================== -->
		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="http://www.wholewheattoast.com/javascript/bootstrap.min.js"></script>

	</head>
	<body <?php body_class(); ?>>
	
		<div class="container">
		
			<header role="banner" class="span12 masthead thickBottemBorder">
				<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p><?php bloginfo( 'description' ); ?></p>
			</header>
			
			<nav id="access" role="navigation">
			  <?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
				<a id="skip" href="#content" title="<?php esc_attr_e( 'Skip to content', 'boilerplate' ); ?>"><?php _e( 'Skip to content', 'boilerplate' ); ?></a>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
			
			<section id="content" class="span12" role="main">
