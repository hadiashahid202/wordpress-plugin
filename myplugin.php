<?php
/*
Plugin Name: aurora framework
Plugin URI: http://yourwebsite.com
Description: A simple custom WordPress plugin.
Version: 1.0
Author: Hadia Shahid
Author URI: http://yourwebsite.com
License: GPL2
*/

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Function to display a custom message
function myplugin_custom_message() {
    return "<p style='padding:10px; background:#f4f4f4; border-left:5px solid #0073aa;'>Hello! This is a message from MyPlugin.</p>";
}

// Shortcode to use the function
function myplugin_register_shortcode() {
    add_shortcode('myplugin_message', 'myplugin_custom_message');
}
add_action('init', 'myplugin_register_shortcode');
?>
