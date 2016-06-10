<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php  wp_title('|', true, 'right'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- stylesheets should be enqueued in functions.php -->
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>
	<div class="container">
		<div class="main-nav">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
				<h3 id='logo'><?php the_field('logo','option') ?></h3>
			</a>
			<?php wp_nav_menu( array(
				'container' => false,
				'theme_location' => 'primary'
			)); ?>
		</div>
		<div class="hero-text">
			<h1><?php the_field('name_of','option') ?></h1>
			<div class="line-wrapper clearfix">
				<div class="upperline"></div>
				<div class="lowerline"></div>
			</div>
			<h6 class="hero-tag-line"><?php the_field('hero_tag_line','option') ?></h6>
			<a href="#about"><button><h6>LEARN MORE</h6></button></a>
		</div>
		<div></div><!--empty div to help center the hero text with flexbox space-between-->
	</div> <!-- /.container -->
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none">
	  <polygon points="100 0 100 10 0 10" />
	</svg>
</header><!--/.header-->

