<?php

/*
Plugin Name: DM Classifieds
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.6
Author URI: http://bradknowlton.com/
*/

    add_action( 'init', 'register_taxonomy_classified_categories' );
    function register_taxonomy_classified_categories() {
    $labels = array(
    'name' => _x( 'Classified Categories', 'classified_categories' ),
    'singular_name' => _x( 'Classified Category', 'classified_categories' ),
    'search_items' => _x( 'Search Classified Categories', 'classified_categories' ),
    'popular_items' => _x( 'Popular Classified Categories', 'classified_categories' ),
    'all_items' => _x( 'All Classified Categories', 'classified_categories' ),
    'parent_item' => _x( 'Parent Classified Category', 'classified_categories' ),
    'parent_item_colon' => _x( 'Parent Classified Category:', 'classified_categories' ),
    'edit_item' => _x( 'Edit Classified Category', 'classified_categories' ),
    'update_item' => _x( 'Update Classified Category', 'classified_categories' ),
    'add_new_item' => _x( 'Add New Classified Category', 'classified_categories' ),
    'new_item_name' => _x( 'New Classified Category', 'classified_categories' ),
    'separate_items_with_commas' => _x( 'Separate classified categories with commas', 'classified_categories' ),
    'add_or_remove_items' => _x( 'Add or remove classified categories', 'classified_categories' ),
    'choose_from_most_used' => _x( 'Choose from the most used classified categories', 'classified_categories' ),
    'menu_name' => _x( 'Classified Categories', 'classified_categories' ),
    );
    $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_nav_menus' => true,
    'show_ui' => true,
    'show_tagcloud' => true,
    'show_admin_column' => false,
    'hierarchical' => true,
    'rewrite' => true,
    'query_var' => true
    );
    register_taxonomy( 'classified_categories', array('classified'), $args );
    } 
    

    add_action( 'init', 'register_cpt_classified' );
    function register_cpt_classified() {
    $labels = array(
    'name' => _x( 'Classifieds', 'classified' ),
    'singular_name' => _x( 'Classified', 'classified' ),
    'add_new' => _x( 'Add New', 'classified' ),
    'add_new_item' => _x( 'Add New Classified', 'classified' ),
    'edit_item' => _x( 'Edit Classified', 'classified' ),
    'new_item' => _x( 'New Classified', 'classified' ),
    'view_item' => _x( 'View Classified', 'classified' ),
    'search_items' => _x( 'Search Classifieds', 'classified' ),
    'not_found' => _x( 'No classifieds found', 'classified' ),
    'not_found_in_trash' => _x( 'No classifieds found in Trash', 'classified' ),
    'parent_item_colon' => _x( 'Parent Classified:', 'classified' ),
    'menu_name' => _x( 'Classifieds', 'classified' ),
    );
    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
    'taxonomies' => array( 'Classified Categories' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capability_type' => 'post'
    );
    register_post_type( 'classified', $args );
    } 
    
    