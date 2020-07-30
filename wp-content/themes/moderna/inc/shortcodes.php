<?php
	function button_type_shortcode($atts, $content = null){
		extract(shortcode_atts(array(
			'link' =>'',
			'type' =>'',
			'text' =>'',
			'icon' =>'',
			), $atts) );
		if($icon) :
		return'<a href="'.$link.'" class="btn btn-'.$type.'"><i class="fa fa-'.$icon.'"></i>'.$text.'</a>';
		else :
			return'<a href="'.$link.'" class="btn btn-'.$type.'">'.$text.'</a>';
		endif;
	}
add_shortcode('button-type','button_type_shortcode');



function alerts_shortcode($atts, $content = null){
		extract(shortcode_atts(array(
			'type' =>'',
			'text' =>'',
			'description' =>'',
			), $atts) );
		return'<div class="alert alert-'.$type.'"><strong>'.$text.'!</strong> '.$description.'</div>';
	}
add_shortcode('alerts','alerts_shortcode');



function Progress_bars_shortcode($atts, $content = null){
		extract(shortcode_atts(array(
			'value' =>'',
			'active' =>'',
			'barstyle' =>'',
			), $atts) );
		if($active & $barstyle):
		return'<div class="progress progress-'.$barstyle.' '.$active.'">
				  <div class="progress-bar" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%">
				    <span class="sr-only">45% Complete</span>
				  </div>
				</div>';
		elseif($barstyle):
			return'<div class="progress progress-'.$barstyle.'">
				  <div class="progress-bar" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%">
				    <span class="sr-only">45% Complete</span>
				  </div>
				</div>';
		else :
			return'<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="'.$value.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$value.'%">
				    <span class="sr-only">45% Complete</span>
				  </div>
				</div>';
		endif;
	}
add_shortcode('Prog','Progress_bars_shortcode');





function pricein_table_shortcode($atts, $content = null){
		extract(shortcode_atts(array(
			'heading_1' =>'',
			'heading_2' =>'',
			'price' =>'',
			'btn_link' =>'',
			'btn_type' =>'',
			'btn_text' =>'',
			'price_special' =>'',
			'colum' =>'',
			), $atts) );


		if($price_special) :
			return'<div class="col-lg-'.$colum.'">
				<div class="pricing-box-alt '.$price_special.'">
					<div class="pricing-heading">
						<h3>'.$heading_1.' <strong>'.$heading_2.'</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>'.$price.'</h6>
					</div>
					<div class="pricing-content">
						'.$content.'
					</div>
					<div class="pricing-action">
						<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="icon-bolt"></i> '.$btn_text.'</a>
					</div>
				</div>
			</div>';
		else :
		return'<div class="col-lg-'.$colum.'">
				<div class="pricing-box-alt">
					<div class="pricing-heading">
						<h3>'.$heading_1.' <strong>'.$heading_2.'</strong></h3>
					</div>
					<div class="pricing-terms">
						<h6>'.$price.'</h6>
					</div>
					<div class="pricing-content">
						'.$content.'
					</div>
					<div class="pricing-action">
						<a href="'.$btn_link.'" class="btn btn-medium btn-'.$btn_type.'"><i class="icon-bolt"></i> '.$btn_text.'</a>
					</div>
				</div>
			</div>';
			endif;
	}
add_shortcode('priceing','pricein_table_shortcode');



function post_list_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'count' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => '5', 'post_type' => 'page')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $list .= '
      			<li><a herf="'.get_permalink().'">'.get_the_title().'</a></li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'post_list_shortcode');  

function portfolios_list_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'count' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => '5', 'post_type' => 'portfolio')
        );      
         
    $list = '<div class="row">
				<section id="projects">
					<ul id="thumbs" class="portfolio">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $custom_field = get_post_meta($idd, 'custom_field', true);
        $post_content = get_the_content();
        $portfolio_large = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');
        $portfolio_small = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'portfolio-thumb');
        $list .= '
      				<li class="col-lg-3 design" data-id="id-0" data-type="web">
						<div class="item-thumbs">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="'.get_the_title().'" href="'.$portfolio_large[0].'">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="'.$portfolio_small[0].'" alt="'.get_the_title().'"/>
						</div>
						</li>
        ';        
    endwhile;
    $list.= '</ul></section></div>';
    wp_reset_query();
    return $list;
}
add_shortcode('portfolios_list', 'portfolios_list_shortcode');  


function job_list_shortcode($atts, $content = null){
    extract( shortcode_atts( array(
        'count' => '',
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => '5', 'post_type' => 'jobs')
        );      
         
    $list = '<div class="all_jobs">';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $job_link = get_post_meta($idd, 'job_link', true);
        $post_content = get_the_content();
        $list .= '<div class="job">';    
	        $list .= '<h2>'.get_the_title().'</h2>';  
	        $list .= '<p>'.get_the_excerpt().'</p>';  
	        if($job_link):
	        	$list .= '<a href="'.$job_link.'">Onlin Apply</a>';  
	    	else:
	    		$list .= '<span>No job link</span>';
	    	endif;
        $list .= '</div>';      
    endwhile;
    $list.= '</div>';
    wp_reset_query();
    return $list;
}
add_shortcode('jobs', 'job_list_shortcode');

?>
