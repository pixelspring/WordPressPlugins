<?php
/*
Plugin Name: CleanSearch
Version: 1.0.0
Plugin URI:
Description: Redirect www.mysite.com/?s=querystring searches to www.mysite.com/search/querystring
Author: Mike Seaby
Author URI: https://pixelspring.co.uk
License: MIT
License URI: https://opensource.org/licenses/MIT
*/


/**
 * I'm sorry Dave, I'm afraid I can't do that
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


/**
 * Redirect URL if search & not blank
 */
function pswp_cleansearch() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }
}

/**
 * Execute the plugin
 */
add_action( 'template_redirect', 'pswp_cleansearch' );
