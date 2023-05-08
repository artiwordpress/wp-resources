<?php
/*
Plugin Name: WP Resources
Description: A custom plugin to for resources
Author: Arti Rana
Author URI: https://www.linkedin.com/in/arti-rana/
Version: 1.0.0	
*/

//File for custom post type
include( plugin_dir_path( __FILE__ ) . 'inc/resource_custom_posttype.php');

//Plugin activation hook
function resource_activation(){
	resource_custom_post_type();
	flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'resource_activation');

function resource_shortcode(){
	ob_start();
	include( plugin_dir_path( __FILE__ ) . 'archive-resource.php');
	return ob_get_clean();
}
add_shortcode('resource_archive', 'resource_shortcode');

include(plugin_dir_path(__FILE__).'inc/plugin-functions.php');