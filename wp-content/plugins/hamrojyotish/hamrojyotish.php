<?php
//Plugin Name and Description 
//Required Start (Do not Delete)
/**
* Plugin Name: Hamro Jyotish Astrology Plugin
* Description: This is a test plugin for Hamro Jyotish.
* Author: Reflex Nish
* Author URI: https://reflexitsolution.com
* Version: 0.0.1
*/
//Required End

require_once ABSPATH . 'wp-content/plugins/hamrojyotish/hj-shortcodes.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/hj-functions.php';
//require_once ABSPATH . 'wp-content/plugins/hamrojyotish/usermanager/hj-jyotish.php';

add_action('init', 'hj_shortcodes_init');
add_action('init', 'hj_register_scripts');
add_action('wp_enqueue_scripts', 'hj_enqueue_scripts');
add_action('init', 'app_output_buffer');
add_action('init', 'hj_wp_login');
add_action('check_admin_referer', 'logout_without_confirm', 10, 2);

function hj_wp_login() {
    // WP tracks the current page - global the variable to access it
    global $pagenow;
    global $page;
    // Check if a $_GET['action'] is set, and if so, load it into $action variable
    $action = (isset($_GET['action'])) ? $_GET['action'] : '';
    // Check if we're on the login page, and ensure the action is not 'logout'
    if( $pagenow == 'wp-login.php' && ( ! $action || ( $action && ! in_array($action, array('logout', 'lostpassword', 'rp', 'resetpass'))))) {
        // Load the home page url
        $page = hj_get_url_by_slug('sign-in');
        // Redirect to the home page
        wp_redirect($page);
        // Stop execution to prevent the page loading for any reason
        exit();
    }
}

function logout_without_confirm($action, $result)
{
    /**
     * Allow logout without confirmation
     */
    if ($action == "log-out" && !isset($_GET['_wpnonce'])) {
        $redirect_to = isset($_REQUEST['redirect_to']) ? $_REQUEST['redirect_to'] : $page;
        $location = str_replace('&amp;', '&', wp_logout_url($redirect_to));
        header("Location: $location");
        die;
    }
}

function app_output_buffer() {
      ob_start();
    } // soi_output_buffer

function hj_register_scripts(){
    wp_register_style( 'hj_css', '/wp-content/plugins/hamrojyotish/scripts/hj-styles.css' );
}

function hj_enqueue_scripts() {
    wp_enqueue_style( 'hj_css' );
}
?>