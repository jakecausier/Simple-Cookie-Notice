<?php
/*
    Plugin Name: Jake's Simple Cookie Notice
    Plugin URI: https://github.com/jakecausier/Simple-Cookie-Notice
    Description: Display a simple cookie notice message for users to accept or view your privacy and cookie info.
    Author: Jake Causier
    Author URI: https://github.com/jakecausier
    Version: 1.0.0
    Text Domain: jakes-simple-cookie-notice
    License: GPLv3 - https://www.gnu.org/licenses/gpl.html
*/

// Require CMB2 Metaboxes for options page
add_action( 'init', 'scn_init' );
function scn_init()
{
    require_once( plugin_dir_path( __FILE__ ) . '/includes/cmb2/init.php');
    include_once( plugin_dir_path( __FILE__ ) . '/admin/settings.php');
}

// Load the script for the cookie notice
add_action( 'wp_enqueue_scripts', 'scn_load_script' );
function scn_load_script()
{
    if ( scn_get_option('cookie_notice_enabled') === 'on' ) :
        wp_enqueue_script('cookie-notice-js', plugins_url('/js/cookie-notice.js', __FILE__), false, false, true );
    endif;
}

// Load the style for the cookie notice
add_action( 'wp_enqueue_scripts', 'scn_load_style' );
function scn_load_style()
{
    if ( scn_get_option('cookie_notice_enabled') === 'on' ) :
        wp_enqueue_style('cookie-notice-css', plugins_url('/css/cookie-notice.css', __FILE__ ));
    endif;
}

// Create the cookie notice function and add it to the WordPress footer
add_action( 'wp_footer', 'scn_cookie_notice_loader' );
function scn_cookie_notice_loader()
{
    if ( scn_get_option('cookie_notice_enabled') === 'on' ) :
	   include_once( plugin_dir_path( __FILE__ ) . '/includes/cookie-notice.php' );
    endif;
}
