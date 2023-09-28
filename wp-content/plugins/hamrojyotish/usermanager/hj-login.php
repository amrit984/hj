<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/hj-functions.php';

function hj_return_login(){
    if(is_user_logged_in()){
        $url = hj_get_url_by_slug('my-account');
        $url = wp_sanitize_redirect($url);
        $content = nocache_headers();
        $content .= wp_safe_redirect($url);
        $content .= exit;
    } else{
        $content = do_shortcode('[wppb-login]');
    }
    return $content;
}
?>