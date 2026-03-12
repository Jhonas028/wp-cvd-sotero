<?php
// custom post type
function cvd_custom_post()
{
    $services_label = array(
        'name' => __('Services', 'textdomain'),
        'singular_name' => __('Service', 'textdomain'),
        'add_new' => __('Add Service', 'textdomain'),
        'edit_item' => __('Edit Service', 'textdomain'),
        'add_new_item' => __('Add New Service', 'textdomain'),
        'all_items' => __('Services', 'textdomain'),
    );

    $services_args = array(
        'labels' => $services_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    // trends
    $trends_label = array(
        'name' => __('Trends', 'textdomain'),
        'singular_name' => __('Trends', 'textdomain'),
        'add_new' => __('Add Trends', 'textdomain'),
        'edit_item' => __('Edit Trends', 'textdomain'),
        'add_new_item' => __('Add New Trends', 'textdomain'),
        'all_items' => __('Trends', 'textdomain'),
    );

    $trends_args = array(
        'labels' => $trends_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    //recent projects

    $recents_label = array(
        'name' => __('Recents', 'textdomain'),
        'singular_name' => __('Recents', 'textdomain'),
        'add_new' => __('Add Recents', 'textdomain'),
        'edit_item' => __('Edit v', 'textdomain'),
        'add_new_item' => __('Add New Recents', 'textdomain'),
        'all_items' => __('Recents', 'textdomain'),
    );

    $recents_args = array(
        'labels' => $recents_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    //services_main

    $servicesMain_label = array(
        'name' => __('ServicesMain', 'textdomain'),
        'singular_name' => __('ServicesMain', 'textdomain'),
        'add_new' => __('Add ServicesMain', 'textdomain'),
        'edit_item' => __('Edit v', 'textdomain'),
        'add_new_item' => __('Add New ServicesMain', 'textdomain'),
        'all_items' => __('ServicesMain', 'textdomain'),
    );

    $servicesMain_args = array(
        'labels' => $servicesMain_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );

    //updates_main

    $updates_label = array(
        'name' => __('Updates', 'textdomain'),
        'singular_name' => __('Updates', 'textdomain'),
        'add_new' => __('Add Updates', 'textdomain'),
        'edit_item' => __('Edit v', 'textdomain'),
        'add_new_item' => __('Add New Updates', 'textdomain'),
        'all_items' => __('Updates', 'textdomain'),
    );

    $updates_args = array(
        'labels' => $updates_label,
        'public' => true,
        'capability_type' => 'post',
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail')
    );


    register_post_type('updates', $updates_args);
    register_post_type('servicesMain', $servicesMain_args);
    register_post_type('recents', $recents_args);
    register_post_type('trends', $trends_args);
    register_post_type('services', $services_args);
}



add_action('init', 'cvd_custom_post');
