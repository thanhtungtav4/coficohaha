<?php
// Register Custom Post Type
function portfolio_post_type() {
    $labels = array(
        'name'                  => _x( 'portfolio', 'Post Type General Name', 'nw2' ),
        'singular_name'         => _x( 'portfolio', 'Post Type Singular Name', 'nw2' ),
        'menu_name'             => __( 'Portfolio', 'nw2' ),
        'name_admin_bar'        => __( 'Add New', 'nw2' ),
        'archives'              => __( 'Item Archives', 'nw2' ),
        'parent_item_colon'     => __( 'Parent Item', 'nw2' ),
        'all_items'             => __( 'All Items', 'nw2' ),
        'add_new_item'          => __( 'Add New Item', 'nw2' ),
        'add_new'               => __( 'add Portfolio', 'nw2' ),
        'new_item'              => __( 'Not Found', 'nw2' ),
        'edit_item'             => __( 'Edit Item', 'nw2' ),
        'update_item'           => __( 'Update Item', 'nw2' ),
        'view_item'             => __( 'View Item', 'nw2' ),
        'search_items'          => __( 'Search Item', 'nw2' ),
        'not_found'             => __( 'Not Found', 'nw2' ),
        'not_found_in_trash'    => __( 'Not Found In Trash', 'nw2' ),
        'featured_image'        => __( 'Featured Image', 'nw2' ),
        'set_featured_image'    => __( 'Set Featured Image', 'nw2' ),
        'remove_featured_image' => __( 'Remove Featured Image', 'nw2' ),
        'use_featured_image'    => __( 'Use As Featured Image', 'nw2' ),
        'insert_into_item'      => __( 'Post Types', 'nw2' ),
        'uploaded_to_this_item' => __( 'Uploaded To This Item', 'nw2' ),
        'items_list'            => __( 'Items List', 'nw2' ),
        'items_list_navigation' => __( 'Items List Navigation', 'nw2' ),
        'filter_items_list'     => __( 'Filter Items List', 'nw2' ),
    );
    $args = array(
        'label'                 => __( 'Post Type', 'nw2' ),
        'description'           => __( 'Portfolio Cofico', 'nw2' ),
        'labels'                => $labels,
        'supports'              => array('title' ,'editor', 'trackbacks' , 'content' , 'revisions' , 'excerpt' , 'custom_fields' , 'author' , 'post_attributes' , 'featured_image' , 'post_formats' , 'comments'),
        'taxonomies'            => array( 'dt_portfolio_category'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'dt_portfolio', $args );
}
add_action( 'init', 'portfolio_post_type', 0 );