<?php
/**
 * The Template for displaying all single downloads.
 *
 * @package twentynineteen
 */

get_header(); ?>

<div class="container">
	<div class="row">

		<div id="primary" class="col-lg-9 col-md-9">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'download' ); ?>

				<?php /* bootstrapwp_post_nav(); */?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar('download'); ?>
<?php get_footer(); ?>