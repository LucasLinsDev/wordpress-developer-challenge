<?php



function categories($post){


	$terms = get_the_terms( $post->ID , 'video-categoria' );
	$categorie = '';

	foreach ( $terms as $term ) {
		$categorie = $term->name;
	}

	return $categorie;

}

function term_taxonomy($post){
	$directors = get_the_terms($post->ID ,'video-categoria');
			$categoria='';
		$descricao='';
 foreach($directors as $director){
    $categoria =$director_name = $director->name;
    $descricao = $director->description;
	}

	return [
		$categoria,
		$descricao
	];


}


function query_result(){

	   $config=array(
            'posts_per_page'=>1,
            'post_type'=>'video',
            'order'=>'DESC',
          );

    return $query_posts= new WP_Query($config);
}


function query_cards($term){
	    $args = array(
        'posts_per_page'=>20,
        'post_type' => 'video',
        "order"=>'rand',
        'tax_query' => array(             
             array(
                'taxonomy' => 'video-categoria',
                'field' => 'slug',
                'terms' => $term->slug 
            ),
    ));

  return  $query = new WP_Query($args);
}




?>