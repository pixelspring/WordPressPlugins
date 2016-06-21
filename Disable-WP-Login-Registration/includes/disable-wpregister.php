<?php

/**
 * Filter out wp_register(); and replace with "Registration Disabled" text:
 */
add_filter( 'register', 'pswp_remove_wplogin_registration_link' );

function pswp_remove_wplogin_registration_link( $registration_url ) {
    return __( '<strong>Registration is disabled</strong>' );
}