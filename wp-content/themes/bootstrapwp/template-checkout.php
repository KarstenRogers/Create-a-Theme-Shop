<?php
/**
 * The template for checkout.
 * Template Name: Checkout
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package bootstrapwp
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-lg-8 col-md-offset-2">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container-->

<?php get_footer(); ?>