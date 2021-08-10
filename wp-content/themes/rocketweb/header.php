<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rocket_web
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="main">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'rocketweb' ); ?></a>

	<header id="main-header" class="main-navigation">
		<nav id="primary" class="clearfix container">
			<div id="logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                   <img src="<?php echo get_theme_mod( 'logo', get_template_directory_uri() . '/inc/images/logo.png' ) ?>" title="<?php bloginfo('name'); ?>" />
               </a>
			</div><!-- .site-branding -->

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rocketweb' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
