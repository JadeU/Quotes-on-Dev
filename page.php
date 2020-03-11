<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

			<div id="left-container">

				<i class="fas fa-quote-left"></i>

			</div>


	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<div id="right-container">

		<i class="fas fa-quote-right"></i>

	</div>


<?php get_footer(); ?>
