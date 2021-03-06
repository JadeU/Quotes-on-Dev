<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */
?>


<?php get_header(); ?>

<div id="primary" class="content-area">
	
<?php get_template_part( 'template-parts/content', 'page' ); ?>

	<main id="main" class="site-main" role="main">
	
	


			<div class = "quote-sumbit-form-container">

			
				<?php if( is_user_logged_in() && current_user_can( 'edit_posts' ) ): ?>

					<form name="quote-submit-form" id="quote-submit-form">

							<div class= "form"> 

								<label for="quote-author"><p>Author of Quote</p></label>

								<input type="text" name="author" id="quote-author" >

							</div>

							<div class="form">

								<label for="the-quote"><p>Quote</p></label>

								<textarea rows="4" cols="30" name="quote" id="the-quote" ></textarea>

							</div>


							<div class="form">

								<label for= "quote-source"><p>Where did you find this Quote? (e.g book name)<p></label>

								<input type="text" name="source" id="quote-source">

							</div>


							<div class="form">

								<label for="quote-source-url"><p>Provide the URL or the quote source, if available.</p></label>

								<input type="url" name="source-url"id="quote-source-url">

							</div>


							<input type="submit" value="Sumbit Quote">
							
								<?php else: ?>

									<h2>Sorry, you must be logged in to submit a quote!</h2>

									<a id="submit" href="<?php echo ( wp_login_url() )?>">Click here to log in.<a>

					<?php endif;?>

				</form>

				<p class="submit-success"></p> 
				<p class="submit-error"></p> 

			</div><!-- #quote-submit-form-container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
