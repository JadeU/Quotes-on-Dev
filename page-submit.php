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

			<div class = "quote-sumbit-form-container">

				<form name="quote-submit-form" id="quote-submit-form">


							<div class= "form"> 

								<label for="quote-author"><p>Author of Quote</p></label>

								<input type="text" name="quote-author" id="quote-author" >

							</div> 



							<div class="form">

								<label for="the-quote">Quote</label>

								<textarea rows="4" cols="30" name="the-quote" id="the-quote" ></textarea>

							</div>


							<div class="form">

								<label for= "quote-source"><p>Where did you find this Quote? (e.g book name)<p></label>

								<input type="text" name="quote-source" id="quote-source">

							</div>


							<div class="form">

								<label for="quote-source-url"><p>Provide the URL or the quote source, if available.</p></label>

								<input type="text" name="quote-source-url"id="quote-source-url">

							</div>

					</form>

				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
