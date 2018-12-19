<?php
/**
 * Template Name: Custom Stage
 * description: >-
 *  Page template without sidebar
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package susiewillettcoaching
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <?php $catquery = new WP_Query( 'cat=6&posts_per_page=3' ); ?>
        <ul>

          <?php while($catquery->have_posts()) : $catquery->the_post(); ?>

            <li>
              <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
            </li>
          <?php endwhile;
          wp_reset_postdata();
          ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
