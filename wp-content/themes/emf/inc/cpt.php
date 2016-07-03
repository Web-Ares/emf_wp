<?php
// Register Custom Post Type
add_action('init', 'custom_post_type', 0);

function custom_post_type()
{
    $labels = array(

        'name' => 'Resource',
        'singular_name' => 'Resource',
        'menu_name' => 'Resource',
        'all_items' => 'All Resource',
        'view_item' => 'View Resource',
        'add_new_item' => 'Add Resource',
        'add_new' => 'Add Resource',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','editor','excerpt','comments'),
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

    register_post_type('resource', $args);

    function resource_category() {

        register_taxonomy(
            'resource_cat',
            'resource',
            array(
                'label' => __( 'Add a Category' ),
                'hierarchical' => false,
            )
        );
    }
    add_action( 'init', 'resource_category' );


    $labels = array(

        'name' => 'Portfolio',
        'singular_name' => 'Portfolio',
        'menu_name' => 'Portfolio',
        'all_items' => 'All Portfolio',
        'view_item' => 'View Portfolio',
        'add_new_item' => 'Add Portfolio',
        'add_new' => 'Add Portfolio',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title','thumbnail','editor','excerpt'),
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

    register_post_type('portfolio', $args);


    $labels = array(

        'name' => 'Services',
        'singular_name' => 'Services',
        'menu_name' => 'Services',
        'all_items' => 'All Services',
        'view_item' => 'View Services',
        'add_new_item' => 'Add Services',
        'add_new' => 'Add Services',
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

    register_post_type('services', $args);

    $labels = array(

        'name' => 'Areas',
        'singular_name' => 'Area',
        'menu_name' => 'Areas',
        'all_items' => 'All Areas',
        'view_item' => 'View Area',
        'add_new_item' => 'Add Area',
        'add_new' => 'Add Area',
        'edit_item' => 'Edit',
        'update_item' => 'Update',
        'search_items' => 'Search'
    );

    $args = array(
        'labels' => $labels,
        'supports' => array('title'),
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

    register_post_type('areas', $args);

    function areas_category() {

        register_taxonomy(
            'areas_cat',
            'areas',
            array(
                'label' => __( 'Add a Area' ),
                'hierarchical' => true,
            )
        );
    }
    add_action( 'init', 'areas_category' );
}
