<?php
/*
 * Template Name: Product Post
 * Template Post Type: post, page, product
 */
  
 get_header();
 ?>
 
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			
			echo '<div id="enquire">Enquire</div>';
			
			echo do_shortcode( '[contact-form-7 id="321" title="Product Enquiry"]' );

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_sidebar();
 ?>
</div><!-- .wrap -->
<?php
get_footer();