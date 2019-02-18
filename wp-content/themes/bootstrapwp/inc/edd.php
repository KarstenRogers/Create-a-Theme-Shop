<?php
function set_download_labels($labels) {
	$labels = array(
		'name' => _x('Themes', 'post type general name', 'bootstrapwp'),
		'singular_name' => _x('Theme', 'post type singular name', 'bootstrapwp'),
		'add_new' => __('Add New', 'bootstrapwp'),
		'add_new_item' => __('Add New Theme', 'bootstrapwp'),
		'edit_item' => __('Edit Theme', 'bootstrapwp'),
		'new_item' => __('New Theme', 'bootstrapwp'),
		'all_items' => __('All Themes', 'bootstrapwp'),
		'view_item' => __('View Theme', 'bootstrapwp'),
		'search_items' => __('Search Themes', 'bootstrapwp'),
		'not_found' =>  __('No Themes found', 'bootstrapwp'),
		'not_found_in_trash' => __('No Themes found in Trash', 'bootstrapwp'), 
		'parent_item_colon' => '',
		'menu_name' => __('Themes', 'bootstrapwp'),
		'featured_image'        => __( '%1$s Image', 'easy-digital-downloads' ),
		'set_featured_image'    => __( 'Set %1$s Image', 'easy-digital-downloads' ),
		'remove_featured_image' => __( 'Remove %1$s Image', 'easy-digital-downloads' ),
		'use_featured_image'    => __( 'Use as %1$s Image', 'easy-digital-downloads' ),
	);
	return $labels;
}
add_filter('edd_download_labels', 'set_download_labels');

define('EDD_SLUG', 'themes');