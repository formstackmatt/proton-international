<?php

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

add_theme_support( 'post-thumbnails' );
add_image_size( 'blog-thumb', 220 , 220, false );

function my_jquery_enqueue() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js", false, null);
  wp_enqueue_script('jquery');
}

add_action( 'init', 'register_cpt_person' );
add_action( 'init', 'custom_taxonomy', 0 );

function register_cpt_person() {

  $labels = array( 
    'name' => _x( 'People', 'person' ),
    'singular_name' => _x( 'Person', 'person' ),
    'add_new' => _x( 'Add New', 'person' ),
    'add_new_item' => _x( 'Add New Person', 'person' ),
    'edit_item' => _x( 'Edit Person', 'person' ),
    'new_item' => _x( 'New Person', 'person' ),
    'view_item' => _x( 'View Person', 'person' ),
    'search_items' => _x( 'Search People', 'person' ),
    'not_found' => _x( 'No people found', 'person' ),
    'not_found_in_trash' => _x( 'No people found in Trash', 'person' ),
    'parent_item_colon' => _x( 'Parent Person:', 'person' ),
    'menu_name' => _x( 'People', 'person' ),
  );

  $args = array( 
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'page-attributes' ),
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

  register_post_type( 'person', $args );
}

// Register Custom Taxonomy
function custom_taxonomy() {

  $labels = array(
    'name'                       => _x( 'Departments', 'Taxonomy General Name', 'text_domain' ),
    'singular_name'              => _x( 'Department', 'Taxonomy Singular Name', 'text_domain' ),
    'menu_name'                  => __( 'Departments', 'text_domain' ),
    'all_items'                  => __( 'All Items', 'text_domain' ),
    'parent_item'                => __( 'Parent Item', 'text_domain' ),
    'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
    'new_item_name'              => __( 'New Item Name', 'text_domain' ),
    'add_new_item'               => __( 'Add New Item', 'text_domain' ),
    'edit_item'                  => __( 'Edit Item', 'text_domain' ),
    'update_item'                => __( 'Update Item', 'text_domain' ),
    'view_item'                  => __( 'View Item', 'text_domain' ),
    'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
    'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
    'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
    'popular_items'              => __( 'Popular Items', 'text_domain' ),
    'search_items'               => __( 'Search Items', 'text_domain' ),
    'not_found'                  => __( 'Not Found', 'text_domain' ),
    'no_terms'                   => __( 'No items', 'text_domain' ),
    'items_list'                 => __( 'Items list', 'text_domain' ),
    'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
  );

  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
  );

  register_taxonomy( 'department', array( 'person' ), $args );

}

?>