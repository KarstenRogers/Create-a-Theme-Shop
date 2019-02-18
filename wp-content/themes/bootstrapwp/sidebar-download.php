<?php
/**
 * The sidebar containing the download sidebar widget area.
 *
 * @package bootstrapwp
 */
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">

<?php echo edd_get_purchase_link( array( 'price' => FALSE, 'download_id' => $post->ID, 'class' => 'btn btn-lg btn-block btn-danger', 'text' => 'Add to Cart' )); ?>
			
		<?php dynamic_sidebar( 'download' ); ?>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->