<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
  * @subpackage yp-solution
 * @since yp-solution 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main class="work_inner_page">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();
                 $template = get_field('template');
               
				get_template_part( 'template-parts/work/'.$template, 'single' );


			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
