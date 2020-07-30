<?php

function moderna_theme_widget(){
	register_sidebar(array(
			'name'=>__('footer widgets','theme-slug'),
			'id'=> 'footer_widget_1',
			'description'=>__('widget for footer.','theme-slug'),
			'before_widget'=>'<div class="col-lg-3"><div class="widget footer_widget">',
			'after_widget'=>'</div></div>',
			'before_title'=>'<h5 class="widgetheading">',
			'after_title'=>'</h5>'
		));

}
add_action('widgets_init','moderna_theme_widget');
?>