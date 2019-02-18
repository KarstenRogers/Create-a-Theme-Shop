<?php
function set_download_labels($labels) {
	$labels = array(
		'name' => _x('Themes', 'post type general name', 'twentynineteen'),
		'singular_name' => _x('Theme', 'post type singular name', 'twentynineteen'),
		'add_new' => __('Add New', 'twentynineteen'),
		'add_new_item' => __('Add New Theme', 'twentynineteen'),
		'edit_item' => __('Edit Theme', 'twentynineteen'),
		'new_item' => __('New Theme', 'twentynineteen'),
		'all_items' => __('All Themes', 'twentynineteen'),
		'view_item' => __('View Theme', 'twentynineteen'),
		'search_items' => __('Search Themes', 'twentynineteen'),
		'not_found' =>  __('No Themes found', 'twentynineteen'),
		'not_found_in_trash' => __('No Themes found in Trash', 'twentynineteen'), 
		'parent_item_colon' => '',
		'menu_name' => __('Themes', 'twentynineteen'),
		'featured_image'        => __( '%1$s Image', 'easy-digital-downloads' ),
		'set_featured_image'    => __( 'Set %1$s Image', 'easy-digital-downloads' ),
		'remove_featured_image' => __( 'Remove %1$s Image', 'easy-digital-downloads' ),
		'use_featured_image'    => __( 'Use as %1$s Image', 'easy-digital-downloads' ),
	);
	return $labels;
}
add_filter('edd_download_labels', 'set_download_labels');

define('EDD_SLUG', 'themes');