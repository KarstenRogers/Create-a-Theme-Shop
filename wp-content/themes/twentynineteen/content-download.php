<?php
/**
 * @package twentynineteen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			) ); 
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'twentynineteen' ), '<span class="edit-link btn btn-danger btn-xs">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->