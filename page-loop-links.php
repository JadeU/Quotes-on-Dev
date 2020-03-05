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


	<section class= "all-content-container">
		
		<h1 class="header-title">Archives</h1> 

			<div class= "authors-container"> 
					
				<h2 class= "header-sub-title">Author</h2>

			<ul>
				<?php $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => -1 );
				
				$author_name = get_posts( $args ); ?>

				<?php foreach ( $author_name as $post ) : setup_postdata( $post ); ?>

				<li><a href="<?php the_permalink()?>"><?php the_title();?></a></li>

				<?php endforeach; wp_reset_postdata(); ?>
			</ul>
		</div><!-- End of authors-container-->
			
			
	<div class ="categories-container">

		<h2 class= "header-sub-title">Categories</h2>
			
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

			<h2 class="header-sub-title">Tags</h2>
		 
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
