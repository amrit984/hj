<?php
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/hj-functions.php';

    function hj_return_register(){
        $content = do_shortcode('[wppb-register]');
        return $content;
    }
?>