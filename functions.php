<?php

// add custom post type 'projects' and feat image metabox
add_theme_support('post-thumbnails');
add_post_type_support( 'projects', 'thumbnail' );   
add_action('init', 'create_projects');
function create_projects()
{
    register_post_type(
        'projects',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Projects'),

            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => ('Project Type'),
        )
    );
}

// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'project_type_taxonomy', 0 );
 
//create a custom taxonomy project type
function project_type_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Project Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Project Type' ),
  ); 	
 
  register_taxonomy('Project Type',array('projects'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type' ),
  ));
}