<?php

function movie_post_type(){
 
  // Labels for the Post Type
  $labels=array(
    'name'               =>_x('Videos','Post type General Name','bx-desafio'),
    'singular_name'      =>_x('Videos','Post Type Singular Name','bx-desafio'),
    'menu_name'          =>__('Videos','bx-desafio'),
    'parent_item_colon'  =>__('Parent Videos','bx-desafio'),
    'all_items'          =>__('All Videos','bx-desafio'),
    'view_item'          =>__('View Video','bx-desafio'),
    'add_new_item'       =>__('Add New Video','bx-desafio'),
    'add_new'            =>__('Add New Video','bx-desafio'),
    'edit_item'          =>__('Edit Video','bx-desafio'),
    'update_item'        =>__('Update Recipe','bx-desafio'),
    'search_items'       =>__('Search Recipe','bx-desafio'),
    'not_found'          =>__('Not Found','bx-desafio'),
    'not_found_in_trash' =>__('Not found in trash','bx-desafio'),
  );

  //Another Customizations
  $args = array(
    'label'               =>__('Videos','bx-desafio'),
    'description'         =>__('Videos for website','bx-desafio'),
    'labels'              =>$labels,
    'supports'            =>array('title','editor','author','thumbnail','comments'),
    'hierchical'          =>false,
    'public'              =>true,
    'show_ui'             =>true,
    'show_in_nav_menu'   =>true,
    'show_in_admin_bar'   =>true,
    'menu_position'       =>5,
    'menu_icon'           =>'dashicons-admin-page',
    'can_export'          =>true,
    'has_archive'         =>true,
    'exclude_from_search' =>false,
    'capability_type'     =>'page',
		'show_admin_column' => true,
		'show_in_menu' => true,
		'show_in_rest' => true,
		 'query_var' => true
  );


  register_post_type('video',$args);


}
add_action('init','movie_post_type',0);
add_filter('register_post_type_args', 'register_post_type_args', 10, 2);

function register_post_type_args( $args, $post_type ) {
    if ( $post_type === 'nav_menu_item' ) {
        $args['show_ui'] = true;
    }
    return $args;
}


?>