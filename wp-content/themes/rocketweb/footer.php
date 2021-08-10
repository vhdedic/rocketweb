<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rocket_web
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container clearfix" role="contentinfo">
		<article>
			<header>
				<h1><?php echo get_theme_mod( 'footer_box1_title') ?></h1>
			</header>
				<p><?php echo get_theme_mod( 'footer_box1_text') ?></p>
		</article>
		<article>
			<header>
				<h1><?php echo get_theme_mod( 'footer_box2_title') ?></h1>
			</header>
				<p><?php echo get_theme_mod( 'footer_box2_text') ?></p>
		</article>
		<article>
			<header>
				<h1><?php echo get_theme_mod( 'footer_box3_title') ?></h1>
			</header>
				<p><?php echo get_theme_mod( 'footer_box3_text') ?></p>
		</article>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
