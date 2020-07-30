<?php  

// Style and Script call that files
include_once('inc/moderna_files.php');

// Menu register
include_once('inc/theme_menus.php');

// Default Themes Support
include_once('inc/default-support.php');

// custom-posts
include_once('inc/custom-posts.php');

// theme-widget
include_once('inc/theme-widgets.php');

// theme-shortcodes
include_once('inc/shortcodes.php');

// theme-shortcodes
include_once('inc/theme-options.php');


// Hooks your functions into the correct filters
function my_add_mce_button() {
	// check user permissions
	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}
	// check if WYSIWYG is enabled
	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'my_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');

// Declare script for new button
function my_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['my_mce_button'] = get_template_directory_uri() .'/js/mce-button.js';
	return $plugin_array;
}

// Register new button in the editor
function my_register_mce_button( $buttons ) {
	array_push( $buttons, 'my_mce_button' );
	return $buttons;
}

/**
* Required : set 'ot_theme_mode' filter to true
*/
add_filter('ot_theme_mode','__return_true');
/**
* Required : include option-tree
*/
require(trailingslashit( get_template_directory()).'option-tree/ot-loader.php');

?>