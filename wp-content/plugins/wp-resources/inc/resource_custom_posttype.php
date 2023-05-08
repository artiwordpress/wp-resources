<?php 
function resource_custom_post_type(){
	$labels =array(
		'name' => 'Resource',
		'singular_name' => 'Resource',
		'menu_name' => 'Resource',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Resource',
		'new_item' => 'New Resource',
		'edit_item' => 'Edit Resource',
		'view_item' => 'View Resource',
		'all_item' => 'All Resource',
		'search_item' => 'Search Resource',
		'not_found' => 'No Resource Found',
		'not_found_in_trash' => 'No Resource Found in Trash'
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'resource'),
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
	);

	register_post_type('resource', $args);

}
add_action('init', 'resource_custom_post_type');

function resource_taxonomy(){
	// Taxonomy - Resource Type
	$taxlabels = array(
		'name' => 'Resource Type',
		'singular_name' => 'Resource Type',
		'menu_name' => 'Resource Type',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Resource Type',
		'new_item' => 'New Resource Type',
		'edit_item' => 'Edit Resource Type',
		'view_item' => 'View Resource Type',
		'all_item' => 'All Resource Type',
		'search_item' => 'Search Resource Type',
		'not_found' => 'No Resource Type Found',
		'not_found_in_trash' => 'No Resource Type Found in Trash'
	);

	$taxargs = array(
		'labels' => $taxlabels,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_in_menu' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug', 'resource_type')
	);

	register_taxonomy('resource_type','resource', $taxargs);

	//Taxonomy - Resource Topic
	$taxlabels1 = array(
		'name' => 'Resource Topic',
		'singular_name' => 'Resource Topic',
		'menu_name' => 'Resource Topic',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Resource Topic',
		'new_item' => 'New Resource Topic',
		'edit_item' => 'Edit Resource Topic',
		'view_item' => 'View Resource Topic',
		'all_item' => 'All Resource Topic',
		'search_item' => 'Search Resource Topic',
		'not_found' => 'No Resource Topic Found',
		'not_found_in_trash' => 'No Resource Topic Found in Trash'
	);

	$taxargs1 = array(
		'labels' => $taxlabels1,
		'hierarchical' => true,
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_in_menu' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array('slug', 'resource_topic')
	);

	register_taxonomy('resource_topic','resource', $taxargs1);
}
add_action('init', 'resource_taxonomy');