<?php
/*
    Plugin Name: Simple Cookie Notice
    Plugin URI:
    Description: Display a simple Bootstrap-styled cookie notice message for users to accept or view your privacy and cookie info.
    Author: jakecausier
    Author URI: https://github.com/jakecausier
    Version: 0.3
    Text Domain: simple-cookie-notice
    License: GPLv3 - https://www.gnu.org/licenses/gpl.html
*/

// Require CMB2 Metaboxes for options page
require_once( plugin_dir_path( __FILE__ ) . '/includes/cmb2/init.php');

// Include the options page for admin backend use
include_once( plugin_dir_path( __FILE__ ) . '/admin/settings.php');

// Load the script for the cookie notice
add_action( 'wp_enqueue_scripts', 'scn_load_script' );
function scn_load_script() {

    wp_enqueue_script('jquery');

    // cookie-notice.js
    wp_register_script('cookie-notice-js', plugins_url('/js/cookie-notice.js', __FILE__), array('jquery'), '', true );
    wp_enqueue_script('cookie-notice-js');
}

// Load the style for the cookie notice
add_action( 'wp_enqueue_scripts', 'scn_load_style' );
function scn_load_style() {
    // cookie-notice.css
    wp_register_style('cookie-notice-css', plugins_url('/css/cookie-notice.css', __FILE__ ));
    wp_enqueue_style('cookie-notice-css');
}

// Create the cookie notice function and add it to the WordPress footer
add_action( 'wp_footer', 'scn_cookie_notice_loader' );
function scn_cookie_notice_loader(){
	include_once( plugin_dir_path( __FILE__ ) . '/includes/cookie-notice.php' );
}
