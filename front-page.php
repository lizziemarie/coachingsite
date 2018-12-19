<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package susiewillettcoaching
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <section id="welcome-feature">
      </section>
      <section id="about-feature">
      </section>
      <section id="recent-posts-feature">
        <?php
        while ( have_posts() ) :
          the_post();

          get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
        ?>
      </section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();