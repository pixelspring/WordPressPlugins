<?php

add_action('admin_init', 'gafwpl_ga_options_init' );
add_action('admin_menu', 'gafwpl_ga_options_page');

/**
 * Init plugin
 */
function gafwpl_ga_options_init(){
    register_setting( 'gafwpl_options', 'gafwpl_gaTrackingCode', 'gafwpl_ga_options_validate' );
}


/**
 * Build menu page options
 */
function gafwpl_ga_options_page() {

    $page_title =   'Google Analytics For WP-Login Settings';
    $menu_title =   'Google Analytics For WP-Login';
    $capability =   'administrator';
    $menu_slug =    'google-analytics-for-wplogin-settings';
    $function =     'gafwpl_ga_options_do_page';

    add_options_page($page_title, $menu_title, $capability, $menu_slug, $function);

}


/**
 * Output the admin page
 */
function gafwpl_ga_options_do_page() {
    ?>
    <div class="wrap">
        <h2>Google Analytics For WP-Login Settings:</h2>
        <hr>
        <form method="post" action="options.php">
            <?php settings_fields('gafwpl_options'); ?>
            <?php $options = get_option('gafwpl_gaTrackingCode'); ?>
            <table class="form-table">
                <tr valign="top"><th scope="row">Google Analytics Tracking Code:</th>
                    <td><input type="text" name="gafwpl_gaTrackingCode[ua_id]" placeholder="UA-XXXXX-Y" value="<?php echo $options['ua_id']; ?>" /></td>
                </tr>
            </table>
            <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
            </p>
        </form>
    </div>
    <?php
}

/**
 * Sanitize user input & convert to uppercase for correct output in GA snippet
 */
function gafwpl_ga_options_validate($input) {
    $input['ua_id'] =  sanitize_key($input['ua_id']);
    $input['ua_id'] = strtoupper($input['ua_id']);
    return $input;
}