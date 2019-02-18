<?php
/**
 * The sidebar containing the download sidebar widget area.
 *
 * @package bootstrapwp
 */
?>

<strong>Price: <?php edd_price($post->ID); ?></strong>


<a href="<?php bloginfo('url'); ?>/checkout?edd_action=add_to_cart&download_id=<?php echo get_the_ID(); ?>">Purchase This</a>


<div id="secondary" class="widget-area col-md-3 col-lg-3" role="complementary">
			
		<?php dynamic_sidebar( 'download' ); ?>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->