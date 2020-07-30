  <?php

function moderna_theme_menu(){
		register_nav_menus( array(
				'main_menu' => 'Main menu'
			));

}
add_action('init','moderna_theme_menu');

function moderna_fallback_menu(){
		echo '<ul class="nav navbar-nav">';
	if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. site_url() . '/">Home</a></li>';
	}
	wp_list_pages('title_li=');
	echo '</ul>';

}

?>