<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/hj-functions.php';

    function hj_return_profile(){
        if(is_user_logged_in()){
            $content = do_shortcode('[wppb-edit-profile]');
        } else{
            $url = hj_get_url_by_slug('sign-in');
            $url = wp_sanitize_redirect($url);
            $content = nocache_headers();
            $content .= wp_safe_redirect($url);
            $content .= exit;
        }
        return $content;
    }
?>