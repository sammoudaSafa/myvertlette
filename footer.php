<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vertlette
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-branding">
		<?php
		the_custom_logo();
		?>
	</div>
	<nav class="footer-main">
	</nav>
	
	
		<?php
		get_sidebar('social');
		?>

	<div class="site-info">
		<a href="<?php echo esc_url(__('https://wordpress.org/', 'vertlette')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Proudly powered by %s', 'vertlette'), 'WordPress');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Theme: %1$s by %2$s.', 'vertlette'), 'vertlette', '<a href="http://underscores.me/">Marie-Camille Laberge</a>');
		?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>