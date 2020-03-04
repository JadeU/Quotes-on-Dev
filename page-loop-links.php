<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?> 

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<section class= "all-content-container">

		<div class ="categories-container">
			<?php 

				 $args = array(
					'show_option_all' => 'All categories',
					'title_li'  => __( '' ),
			);

				echo '<ul>';
					wp_list_categories($args);
				echo '</ul>';
			?>
	</div><!-- End of categories-container-->


		<div class ="tag-container">

			<?php 

				$args = array (
					'link' => 'view',
				);

				echo '<ul>';
					wp_tag_cloud($args);
				echo '</ul>';

			?>

		</div><!-- End of tags-container-->


		<?php endwhile; // End of the loop. ?>

</div><!--End of all-content-container-->
			

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
