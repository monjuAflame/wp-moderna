<?php 
function moderna_themes_files() {

/* Registering Styles */

	// bootstrap.min Style
	wp_register_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.0.0', 'all' );
	// jquery.fancybox.min Style
	wp_register_style( 'jquery-fancybox', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css', array(), '2.1.4', 'all' );
	// flexslider Style
	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '2.0', 'all' );
	// style.css Style
	wp_register_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.1', 'all' );
    // default Style
	wp_register_style( 'default', get_template_directory_uri() . '/skins/default.css', array(), '1.1', 'all' );



/* Enqueue Styles */
	
	// bootstrap.min enqueue_style
	wp_enqueue_style( 'bootstrap-min', get_stylesheet_uri(), array(), '3.0.0', 'all' );
	// jquery.fancybox.min enqueue_style
	wp_enqueue_style( 'jquery-fancybox', get_stylesheet_uri(), array(), '2.1.4', 'all' );
   	// flexslider enqueue_style
	wp_enqueue_style( 'flexslider', get_stylesheet_uri(), array(), '2.0', 'all' );
	// style.css enqueue_style
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1', 'all' );
	// default enqueue_style
	wp_enqueue_style( 'default', get_stylesheet_uri(), array(), '1.1', 'all' );






/*  Enqueue Script  */


	wp_enqueue_script('jquery');

	// jquery-easing v1.3
	wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js',array('jquery'),'1.3',true);	
	//  bootstrap-min v3.1.0
	wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js',array('jquery'),'3.1.0',true);	
	//  jquery-fancybox-pack v2.1.4
	wp_enqueue_script('jquery-fancybox-pack', get_template_directory_uri() . '/js/jquery.fancybox.pack.js',array('jquery'),'2.1.4',true);	
	//  jquery-fancybox-media v1.0.5
	wp_enqueue_script('jquery-fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js',array('jquery'),'1.0.5',true);	
	//  prettify.js v1.1
	wp_enqueue_script('prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js',array('jquery'),'1.1',true);	
	//  jquery-quicksand v1.2.2
	wp_enqueue_script('jquery-quicksand', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js',array('jquery'),'1.2.2',true);	
	//  setting v1.1
	wp_enqueue_script('setting', get_template_directory_uri() . '/js/portfolio/setting.js',array('jquery'),'1.1',true);	
	//  jquery-flexslider v2.1
	wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js',array('jquery'),'2.1',true);	
	//  animate v1.1
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js',array('jquery'),'1.1',true);//  custom v1.1
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js',array('jquery'),'1.0.5',true);	

}
add_action('wp_enqueue_scripts','moderna_themes_files');
 ?>