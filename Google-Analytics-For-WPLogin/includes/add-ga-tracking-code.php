<?php

/**
 * Hook into the login_head action and add the tracking code for GA in the wp-login.php page <head>
 */

add_action('login_head','hook_gafwpl_ga');

function hook_gafwpl_ga() {
    $options = get_option('gafwpl_gaTrackingCode');
    $output="<!-- GAFWPL Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', '".$options['ua_id']."', 'auto');
        ga('send', 'pageview');
        </script>
        <!-- END GAFWPL Google Analytics -->";
    echo $output;
}