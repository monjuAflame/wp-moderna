<?php

function moderna_theme_custom_posts(){

	register_post_type('jobs',array(
			'public' => true,
			'label'  => 'Jobs',
			'labels' => array(
				'name' => 'Jobs',
				'singular_name' => 'Job',
				'add_new' => 'Add new Job'
				),
			'supports' => array('title', 'editor',  'thumbnail', 'excerpt','custom-fields')
		));

	register_post_type(  'slide',array(
			'public' => true,
			'label'  => 'Slide',
			'labels' => array(
				'name' => 'Slides',
				'singular_name' => 'slide',
				'add_new' => 'Add new slide'
				),
			'supports' => array('title', 'editor',  'thumbnail', 'excerpt')
		));
		register_post_type('service',array(
			'public' => true,
			'label'  => 'Service',
			'labels' => array(
				'name' => 'services',
				'singular_name' => 'service',
				'add_new' => 'Add new service'
				),
			'supports' => array('title', 'editor', 'excerpt','custom-fields')
		));

		register_post_type('portfolio',array(
			'public' => true,
			'label'  => 'portfolio',
			'labels' => array(
				'name' => 'portfolios',
				'singular_name' => 'portfolio',
				'add_new' => 'Add new portfolio'
				),
			'supports' => array('title', 'editor', 'excerpt','custom-fields',  'thumbnail')
		));
}
add_action('init','moderna_theme_custom_posts');



?>