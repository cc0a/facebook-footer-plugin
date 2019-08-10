<?php

function ffl_add_footer($content){
	$footer_output = '<hr>';
	$footer_output .= '<div class="footer_content">';
	$footer_output .= '<span class="dashicons dashicons-facebook"></span> Find me on <a target="blank" href="http://www.facebook.com"/>Facebook</a>';
	$footer_output .= '</div>';

	global $ffl_options;

	if($ffl_options['show_in_feed']) {
		if(is_single() || is_home() && $ffl_options['enable']){ // If single page -or- home page + turned on, display footer link
			return $content . $footer_output;
		}
	} else {
		if(is_single() && $ffl_options['enable']){ // else display on single post if option enabled
			return $content . $footer_output;
		}
	}

	return $content;

}

add_filter('the_content', 'ffl_add_footer'); // Changing content that's already there



