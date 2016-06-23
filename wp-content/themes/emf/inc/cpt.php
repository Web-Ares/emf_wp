<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{
    $labels = array(

        'name' => 'Projects',
        'singular_name' => 'Projects',
        'menu_name' => 'Projects',
        'all_items' => 'All Projects',
        'view_item' => 'View Project',
        'add_new_item' => 'Add Project',
        'add_new' => 'Add Project',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('project', $args);

    $labels = array(

        'name' => 'Clients',
        'singular_name' => 'Clients',
        'menu_name' => 'Clients',
        'all_items' => 'All Clients',
        'view_item' => 'View Clients',
        'add_new_item' => 'Add Clients',
        'add_new' => 'Add Clients',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('clients', $args);


    $labels = array(

        'name' => 'Quotes',
        'singular_name' => 'Quotes',
        'menu_name' => 'Quotes',
        'all_items' => 'All Quotes',
        'view_item' => 'View Quotes',
        'add_new_item' => 'Add Quotes',
        'add_new' => 'Add Quotes',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );


    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'rewrite' => array(
            'with_front' => true
        )
    );

    register_post_type('quotes', $args);

}
