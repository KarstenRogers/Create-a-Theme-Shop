<?php
/**
 * The sidebar containing the download sidebar widget area.
 *
 * @package twentynineteen
 */

if ( ! is_active_sidebar( 'download' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
			
		<?php dynamic_sidebar( 'download' ); ?>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->