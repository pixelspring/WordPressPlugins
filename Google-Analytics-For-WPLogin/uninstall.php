<?php

// If uninstall is not called directly from WordPress, exit
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit();
}

/**
 * Delete plugin data from wp_options table on uninstall
 */
$option_name = 'gafwpl_gaTrackingCode';

delete_option( $option_name ); ?>