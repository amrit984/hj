<?php
// global $currentUser;
// $currentUser = wp_get_current_user();

require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-birth-chart-image.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-birth-details.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-form-data.php';
require_once ABSPATH . 'wp-content/plugins/hamrojyotish/kundali/hj-kundali-form.php';

function hj_get_url_by_slug($slug) {
    $page_url_id = get_page_by_path( $slug );
    $page_url_link = get_permalink($page_url_id);
    return $page_url_link;
}
//Create Post Type
function hj_register_cpt_astrologers() {

	/**
	 * Post Type: HJ Astrologers.
	 */

	$labels = [
		"name" => __( "HJ Astrologers" ),
		"singular_name" => __( "HJ Astrologer" ),
		"menu_name" => __( "HJ Astrologers" ),
		"all_items" => __( "All Astrologers" ),
		"add_new" => __( "Add New" ),
		"add_new_item" => __( "Add New Astrologer" ),
		"edit_item" => __( "Edit Astrologer" ),
		"new_item" => __( "New Astrologer" ),
		"view_item" => __( "View Astrologer" ),
		"view_items" => __( "View Astrologers" ),
		"search_items" => __( "Search Astrologers" ),
		"not_found" => __( "No Astrologers Found..." ),
		"not_found_in_trash" => __( "No Astrologers found in Trash" ),
		"parent" => __( "Parent Astrologer" ),
		"featured_image" => __( "Featured image for this Astrologer" ),
		"set_featured_image" => __( "Set featured image for this Astrologer" ),
		"remove_featured_image" => __( "Remove featured image for this Astrologer" ),
		"use_featured_image" => __( "Use as featured image for this Astrologer" ),
		"archives" => __( "Astrologer archives" ),
		"insert_into_item" => __( "Insert into Astrologer" ),
		"uploaded_to_this_item" => __( "Upload to this Astrologer" ),
		"filter_items_list" => __( "Filter Astrologers list" ),
		"items_list_navigation" => __( "Astrologers list navigation" ),
		"items_list" => __( "Astrologers list" ),
		"attributes" => __( "Astrologers attributes" ),
		"name_admin_bar" => __( "Astrologer" ),
		"item_published" => __( "Astrologer published" ),
		"item_published_privately" => __( "Astrologer published privately." ),
		"item_reverted_to_draft" => __( "Astrologer reverted to draft." ),
		"item_scheduled" => __( "Astrologer scheduled" ),
		"item_updated" => __( "Astrologer updated." ),
		"parent_item_colon" => __( "Parent Astrologer" ),
	];

	$args = [
		"label" => __( "HJ Astrologers" ),
		"labels" => $labels,
		"description" => "Add/Edit Astrologers",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "astrologers", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-groups",
		"supports" => [ "title", "thumbnail" ],
		"taxonomies" => [ "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "astrologers", $args );
}

add_action( 'init', 'hj_register_cpt_astrologers' );

function hj_add_astrologer_meta_boxes(){
    add_meta_box(
        "hj_post_metadata_astrologer_contact",
        "Contact Number",
        "hj_post_meta_box_astrologer_contact",
        "astrologers",
        "normal",
        "high"
    );

    add_meta_box(
        "hj_post_metadata_astrologer_bio",
        "Bio",
        "hj_post_meta_box_astrologer_bio",
        "astrologers",
        "normal",
        "high"
    );
}

add_action( "admin_init", "hj_add_astrologer_meta_boxes" );

// save field value
function hj_save_astrologer_meta_boxes(){
    global $post;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    update_post_meta( $post->ID, "_contact_number", sanitize_text_field( $_POST[ "_contact_number" ] ) );
    update_post_meta( $post->ID, "_bio", sanitize_text_field( $_POST[ "_bio" ] ) );
}
add_action( 'save_post', 'hj_save_astrologer_meta_boxes' );

// callback function to render fields
function hj_post_meta_box_astrologer_contact(){
    global $post;
    $custom = get_post_custom( $post->ID );
    $advertisingCategory = $custom[ "_contact_number" ][ 0 ];
    echo "<input type=\"text\" name=\"_contact_number\" value=\"".$advertisingCategory."\" placeholder=\"Contact Number\">";
}
function hj_post_meta_box_astrologer_bio(){
    global $post;
    $custom = get_post_custom( $post->ID );
    $advertisingCategory = $custom[ "_bio" ][ 0 ];
    echo "<textarea type=\"textbox\" name=\"_bio\" value=\"".$advertisingCategory."\" placeholder=\"Add description...\" rows=\"4\" cols=\"50\"> </textarea>";
}


function hj_register_cpt_birth_chart() {

	/**
	 * Post Type: Birth Charts.
	 */

	$labels = [
		"name" => __( "Birth Charts" ),
		"singular_name" => __( "Birth Chart" ),
		"menu_name" => __( "Birth Charts" ),
		"all_items" => __( "All Birth Charts" ),
		"add_new" => __( "Add new" ),
		"add_new_item" => __( "Add new Birth Chart" ),
		"edit_item" => __( "Edit Birth Chart" ),
		"new_item" => __( "New Birth Chart" ),
		"view_item" => __( "View Birth Chart" ),
		"view_items" => __( "View Birth Charts" ),
		"search_items" => __( "Search Birth Charts" ),
		"not_found" => __( "No Birth Charts found" ),
		"not_found_in_trash" => __( "No Birth Charts found in trash" ),
		"parent" => __( "Parent Birth Chart:" ),
		"featured_image" => __( "Featured image for this Birth Chart" ),
		"set_featured_image" => __( "Set featured image for this Birth Chart" ),
		"remove_featured_image" => __( "Remove featured image for this Birth Chart" ),
		"use_featured_image" => __( "Use as featured image for this Birth Chart" ),
		"archives" => __( "Birth Chart archives" ),
		"insert_into_item" => __( "Insert into Birth Chart" ),
		"uploaded_to_this_item" => __( "Upload to this Birth Chart" ),
		"filter_items_list" => __( "Filter Birth Charts list" ),
		"items_list_navigation" => __( "Birth Charts list navigation" ),
		"items_list" => __( "Birth Charts list" ),
		"attributes" => __( "Birth Charts attributes" ),
		"name_admin_bar" => __( "Birth Chart" ),
		"item_published" => __( "Birth Chart published" ),
		"item_published_privately" => __( "Birth Chart published privately." ),
		"item_reverted_to_draft" => __( "Birth Chart reverted to draft." ),
		"item_scheduled" => __( "Birth Chart scheduled" ),
		"item_updated" => __( "Birth Chart updated." ),
		"parent_item_colon" => __( "Parent Birth Chart:" ),
	];

	$args = [
		"label" => __( "Birth Charts" ),
		"labels" => $labels,
		"description" => "List of generated birth charts",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "birth-chart", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-slides",
		"supports" => [ "title", "editor", "author" ],
		"show_in_graphql" => false,
	];

	register_post_type( "birth-chart", $args );
}

add_action( 'init', 'hj_register_cpt_birth_chart' );

function hj_save_kundali(){
    if( isset($_POST['hj-kundali-submit']) ){
        $kundaliTitle = hj_get_form_data();
        $kundaliTitle = $kundaliTitle[0] . 'को कुण्डली';
        $kundaliPerson = hj_return_person_details();
        $kundaliDetails = hj_return_birth_details() . hj_return_planet_details();
		
		if ( is_user_logged_in() ){
        	$currentUser = get_current_user_id();
		} else{
			$currentUser = 'Guest';
		}

        $new_kundali = array(
            'post_title' => $kundaliTitle,
            'post_content' =>'<div style="display:flex; flex-direction: row; flex-wrap: wrap;">' . $kundaliPerson . $kundaliDetails . '</div>',
            'post_type' => 'birth-chart',
            'post_status' => 'publish',
            'post_author' => $currentUser,
            'comment_status' => 'close',
            'ping_status' => 'close'
        );

        $post_id = wp_insert_post( $new_kundali );
    }
}
add_shortcode('hj_save_kundali', 'hj_save_kundali');