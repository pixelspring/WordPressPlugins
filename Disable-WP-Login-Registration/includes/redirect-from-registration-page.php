<?php

/**
 * If siteurl.com/wp-login.php?action=register is accessed, redirect to home URL:
 */
add_action( 'init', 'pswp_redirect_wplogin_registration_attempt' );

function pswp_redirect_wplogin_registration_attempt() {
    if ( isset( $_GET['action'] ) && $_GET['action'] == 'register' ) {
        ob_start();
        wp_redirect( home_url() );
        ob_clean();
    }
}