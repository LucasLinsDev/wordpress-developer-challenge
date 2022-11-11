<?php

function movie_type_taxonomy(){

  $labels = array (
    'name'              =>_x('Video Tipo','taxonomy general name'),
    'singular_name'     =>_x('Video Type', 'taxonomy singular name'),
    'search_items'      =>__('Search Video Type'),
    'all_items'         =>__('All Video Types'),
    'parent_item'       =>__('Parent Video Type'),
    'parent_item_coluns'=>__('Parent Video Type'),
    'edit_item'         =>__('Parent Video Type'),
    'update_item'       =>__('Update Video Type'),
    'add_new_item'      =>__('Add Video Type'),
    'new_item_name'     =>__('New Video Type'),
    'menu_name'         =>__('Video Tipo'),     
  );

  $args = array(
		
    'labels'                     => $labels,
    'hierarchical'               => true,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true, // This
    'query_var'=>true,
		"show_in_menu"							 => true,
    'show_in_rest'               => true,
		
  );

  register_taxonomy('video-categoria' ,'video' , $args );

}

add_action('init','movie_type_taxonomy');




?>