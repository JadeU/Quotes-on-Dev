<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"> 

		<?php 
		
				$args= array (
					'orderby' => 'rand', 
					'posts_per_page' => 1, 
					'post_type' => 'post',

				);

				$rand_quote = get_posts ($args); ?>

			<div id="random-quote-container">

			
				<i class="fas fa-quote-left"></i>

			</div>
<?php 
				foreach ($rand_quote as $post) : setup_postdata ($post); ?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<div class="entry-content">

	<?php the_content(); ?>

</div><!-- .entry-content -->

<div class="entry-header">

<?php the_title( '<h2 class="entry-title">— ', '</h2>' ); ?>


</div><!-- .entry-header -->
<input type="submit" id="generate-btn" value="Show me Another!">
</article><!-- #post-## -->
<?php endforeach; wp_reset_postdata();?> 

<div class= "flex-container-2">

			<i class="fas fa-quote-right"></i>

			</div> 
		




			
			
			


		
	

			




			

			
		</div>  

			
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
