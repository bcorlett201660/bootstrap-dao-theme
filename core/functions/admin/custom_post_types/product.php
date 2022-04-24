<?php

function custom_post_type_product() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Products', 'Post Type General Name', 'bootstrap-dao' ),
        'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'bootstrap-dao' ),
        'menu_name'           => __( 'Products', 'bootstrap-dao' ),
        'parent_item_colon'   => __( 'Parent Product', 'bootstrap-dao' ),
        'all_items'           => __( 'All Products', 'bootstrap-dao' ),
        'view_item'           => __( 'View Product', 'bootstrap-dao' ),
        'add_new_item'        => __( 'Add New Product', 'bootstrap-dao' ),
        'add_new'             => __( 'Add New', 'bootstrap-dao' ),
        'edit_item'           => __( 'Edit Product', 'bootstrap-dao' ),
        'update_item'         => __( 'Update Product', 'bootstrap-dao' ),
        'search_items'        => __( 'Search Product', 'bootstrap-dao' ),
        'not_found'           => __( 'Not Found', 'bootstrap-dao' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'bootstrap-dao' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Products', 'bootstrap-dao' ),
        'description'         => __( 'Product news and reviews', 'bootstrap-dao' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', /*'comments', */'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-cart',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true, 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'product', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type_product', 0 );

?>