<?php

/*
 * Plugin Name: Facebook Footer Link
 * Description: Adds a Facebook Profile Link to the End of Posts
 * Version: 1.0
 * Author: James McKee
 */

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Global Options Variable
$ffl_options = get_option('ffl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php'); // Calls in scripts file

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php'); // Calls in content file

if(is_admin()) {
// Load Settings
	require_once( plugin_dir_path( __FILE__ ) . '/includes/facebook-footer-link-settings.php' ); // Only included on the admin side
}



