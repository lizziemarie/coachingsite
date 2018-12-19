<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package susiewillettcoaching
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<section id="footer-top">
			<div class="schedule-a-call">
				<h2>Schedule a call</h2>
				<p>Let's figure out what program is best for you and your needs</p>
				<p>
					<a class="" href="">BOOK YOUR FREE 15 MINUTE CALL</a>
				</p>
			</div>
			<div class="subscribe-footer">
				<h2>Subscribe</h2>
				<?php
					if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
					    <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
					    <?php dynamic_sidebar( 'custom-header-widget' ); ?>
						</div>
				<?php endif; ?>
			</div>
		</section>
		<section id="footer-bottom">
			<div class="footer-col-1">
				<?php $nav_menu = wp_get_nav_menu_object(3); echo $nav_menu->name; ?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-col-1',
					) );
				?>
			</div>
			<div class="footer-col-2">
				<?php $nav_menu = wp_get_nav_menu_object(4); echo $nav_menu->name; ?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-col-2',
					) );
				?>
			</div>
			<div class="footer-col-3">
				<?php $nav_menu = wp_get_nav_menu_object(5); echo $nav_menu->name; ?>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-col-3',
					) );
				?>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
