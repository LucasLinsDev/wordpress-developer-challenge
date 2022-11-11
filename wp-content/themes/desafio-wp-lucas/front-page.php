<?php get_header(); ?>

    <!--======= HERO =========-->
 
       <?php

    $query_posts=query_result();
        
      ?>

      <?php
          if(have_posts()): 
            while($query_posts->have_posts()) : 
              $query_posts->the_post();
              $terms = get_the_terms( get_the_ID(), 'video-categoria' );
              
      ?>

     <section class="hero">

       <?php
        $id = get_the_ID();
        $banner_img = get_post_meta($id, 'post_banner_img', true);	
        $banner_img = explode(',', $banner_img);
        if(!empty($banner_img) || $banner_img == "") {
        foreach ($banner_img as $attachment_id) {
          
      ?>
      <div class="hero_bg"  >
        <?php 

$url_home=wp_get_attachment_url( $attachment_id ) ? wp_get_attachment_url( $attachment_id ) : get_template_directory_uri().'/img/bg.jpg';
?>


       <div class="hero_bg">   <img src="<?php echo wp_get_attachment_url( $attachment_id );?>" data-aos="fade-down" data-aos-delay="400">
  </div>
            
    </div>
      <div class="hero_bg_mobile">
         <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
      </div>
      		
			<?php }
       }
          
        

      ?>
      <div class="hero_content container">
        <div class="row gap-16">
          <div class="tag-content" data-aos="fade-up" data-aos-delay="300"><?php if($terms) { echo $terms[0]->name; } ?></div>
          <div class="tag-minutes" data-aos="fade-up" data-aos-delay="400"><?php echo $time=get_post_meta(get_the_ID(),'video-minutes',true) . "m"; ?></div>
        </div>
        <h1 data-aos="fade-up" data-aos-delay="400"><?php the_title();?></h1>
        <div class="row" data-aos="fade-down" data-aos-delay="400">
          <a href="<?php the_permalink();?>">
              <button class="btn-red">Ver Mais...</button>
         </a>  
        </div>
      </div>
    </section>

    <?php  endwhile; endif; wp_reset_query(); ?>

    <?php 
    
    $terms = get_terms( array(
      'taxonomy'    => 'video-categoria',
      'hide_empty'  => false,
    ));

    if($terms){

      
    

    foreach( $terms as $term ) {
    ?>
      
      <section class="cards_container">
         <h2 class="cards_container_title" data-aos="fade-up" data-aos-delay="400"> <a href="<?php echo home_url('/').'video-categoria/'.$term->slug;?>" class="link_categori"><?php echo $term->name; ?> </a></h2>
          <div class="swiper-container">
            <div class="swiper-wrapper">
     

    <?php

    $query=query_cards($term);

       $number=700;
    while($query->have_posts()){
     
      $query->the_post();
      ?>
      <div class="swiper-slide">
            <a href="<?php the_permalink();?>">
              <div class="card"  data-aos="fade-up" data-aos-delay="<?php echo $number;?>">
              <div class="card_image">
                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
              </div>
              <div class="tag-minutes-card aos-animate mt-2"><?php echo $time=get_post_meta(get_the_ID(),'video-minutes',true) . "m"; ?></div>
              <div class="card_content mt-2">
                <h2>   <?php  echo wp_trim_words(the_title(), 18) ;?></h2>
              </div>
            </div>
            </a>
      </div>
    <?php
       $number=$number+100;
    }
   
    wp_reset_postdata();
    ?>
        </div>
      </div>
    </section>
    <?php } }?>
  
<?php get_footer(); ?>
