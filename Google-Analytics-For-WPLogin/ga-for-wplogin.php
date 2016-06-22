<?php

/**
 * Plugin Name: Google Analytics for WP-Login
 * Version: 1.0.0
 * Description: Add Google Analytics tracking code to yoursite.com/wp-login.php
 * Text Domain: gafwp
 * Author: Mike Seaby
 * Author URI: https://pixelspring.co.uk
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 */



/**
 * I'm sorry Dave, I'm afraid I can't do that
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Define includes path
 */
if ( ! defined( 'GAFW_DIR' ) ) {
    define( 'GAFW_DIR', plugin_dir_path( __FILE__ ) );
}


/**
 * Include the includes
 */
require_once GAFW_DIR . 'includes/gafw-settings-page.php';
require_once GAFW_DIR . 'includes/add-ga-tracking-code.php';


/**
 * Add settings link on plugins page
 */
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'gafwpl_add_plugin_page_settings_link');

function gafwpl_add_plugin_page_settings_link( $links ) {
    $links[] = '<a href="' .
        admin_url( 'options-general.php?page=google-analytics-for-wplogin-settings' ) .
        '">' . __('Settings') . '</a>';
    return $links;
}