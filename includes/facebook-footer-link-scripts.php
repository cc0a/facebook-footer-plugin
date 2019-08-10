<?php

// Add Scripts
function ffl_add_scripts() {
	wp_enqueue_style('ffl-main-style', plugins_url() . '/facebook-footer-link/css/style.css'); // Allows for the ability to call in CSS via this style sheet
	wp_enqueue_script('ffl-main-script', plugins_url() . '/facebook-footer-link/js/main.js'); // Allows for the ability to call in JS via this script
}

add_action('wp_enqueue_scripts', 'ffl_add_scripts'); // Causes scripts to fire off via action