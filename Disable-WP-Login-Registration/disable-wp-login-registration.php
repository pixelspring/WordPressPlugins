<?php

/**
 * Plugin Name: Disable WP-Login Registration
 * Version: 1.0.1
 * Description: Disables user registration from wp-login.php?action=register and the wp_register(); function, to help prevent against nefarious spam bot signups.
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
 * Define includes
 */
if ( ! defined( 'DWPRP_DIR' ) ) {
    define( 'DWPRP_DIR', plugin_dir_path( __FILE__ ) );
}


/**
 * Include the includes
 */
require_once DWPRP_DIR . 'includes/redirect-from-registration-page.php';
require_once DWPRP_DIR . 'includes/disable-wpregister.php';