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

    register_post_type('resource', $args);
}
