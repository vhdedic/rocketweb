<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Rocket_web
 */

get_header(); ?>
	<section class="slider">
		<article class="container">
			<h1><?php echo get_theme_mod( 'slider_title') ?></h1>
			<h2><?php echo get_theme_mod( 'slider_subtitle') ?></h2>
			<a href="<?php echo get_theme_mod( 'slider_button_url') ?>"><?php echo get_theme_mod( 'slider_button_text') ?></a>
			<img src="<?php echo get_theme_mod( 'slider', get_template_directory_uri() . '/inc/images/header.png' ) ?>" title="<?php bloginfo('name'); ?>" />
		</article>
	</section>
	<section id="featured" class="container clearfix">
		<header>
			<h1><?php echo get_theme_mod( 'featured_title') ?></h1>
			<h2><?php echo get_theme_mod( 'featured_subtitle') ?></h2>
		</header>
		<article>
			<header>
				<h1><?php echo get_theme_mod( 'featured_box1_title') ?></h1>
			</header>
			<p><?php echo get_theme_mod( 'featured_box1_text') ?></p>
		</article>
		<article id="advice">
			<header>
				<h1><?php echo get_theme_mod( 'featured_box2_title') ?></h1>
			</header>
			<p><?php echo get_theme_mod( 'featured_box2_text') ?></p>
		</article>
		<article id="support">
			<header>
				<h1><?php echo get_theme_mod( 'featured_box3_title') ?></h1>
			</header>
			<p><?php echo get_theme_mod( 'featured_box3_text') ?></p>
		</article>
		<article id="cloud">
			<header>
				<h1><?php echo get_theme_mod( 'featured_box4_title') ?></h1>
			</header>
			<p><?php echo get_theme_mod( 'featured_box4_text') ?></p>
		</article>
	</section>
	<section id="featured-slider">
		<article class="container">
			<header>
				<h1><?php echo get_theme_mod( 'featured_slider_title') ?></h1>
				<h2><?php echo get_theme_mod( 'featured_slider_subtitle') ?></h2>
			</header>
			<a href="<?php echo get_theme_mod( 'featured_slider_button_url') ?>"><?php echo get_theme_mod( 'featured_slider_button_text') ?></a>
		</article>
	</section>
<?php
get_footer();	
