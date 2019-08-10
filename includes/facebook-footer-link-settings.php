<?php

// Create menu link
function ffl_options_menu_link() {
	add_options_page(
		'Facebook Footer Link Options',
		'Facebook Footer Link', // Title of menu
		'manage_options', // Compatibility, who will it work for?
		'ffl-options', // Main Slug - in URL
		'ffl_options_content' // Function used to display content
	);
}

// Create Options Page Content
function ffl_options_content(){
	echo 'TEST';
}

add_action('admin_menu', 'ffl_options_menu_link');

// Register Settings
function ffl_register_settings(){
	register_setting('ffl_settings_group', 'ffl_settings');
}

add_action('admin_init', 'ffl_register_settings');





