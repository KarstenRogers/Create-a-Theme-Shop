<?php
/**
 * The sidebar containing the download sidebar widget area.
 *
 * @package bootstrapwp
 */
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">

<div class="product-price">
	<?php 
		if(edd_has_variable_prices(get_the_ID())) {
			// if the download has variable prices, show the first one as a starting price
			echo edd_get_purchase_link( array( 'price' => FALSE, 'download_id' => $post->ID, 'class' => 'btn btn-lg btn-block btn-danger', 'text' => 'Add to Cart' ));
		} else {
      edd_price(get_the_ID()); 
      echo edd_get_purchase_link( array( 'price' => FALSE, 'download_id' => $post->ID, 'class' => 'btn btn-lg btn-block btn-danger', 'text' => 'Add to Cart' ));
		}
	?>
</div><!--end .product-price-->
			
		<?php dynamic_sidebar( 'download' ); ?>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->