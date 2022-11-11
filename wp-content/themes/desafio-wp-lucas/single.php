<?php get_header(); 

  $categorie=categories($post);

?>




 <div class="container-single">
      <main>
        <article>
          <div class="single_header">
            <?php 

   if (! is_singular( 'post' ) ) {
             
        
              
?>
            <div class="row gap-16 mb-2">
              <div class="tag-content"> <?php echo $categorie;?></div>
              <div class="tag-minutes">	<?php echo $time=get_post_meta(get_the_ID(),'video-minutes',true) . "m"; ?></div>
            </div>
            <?php }?>
            <h1 class="mt-2"><?php the_title();?> </h1>
          </div>
          <div class="single_thunbmail mt-4">
            
            <?php

            if ( is_singular( 'post' ) ) {
                the_post_thumbnail();
          }
              
            ?>
          </div>
          <div class="single_movie mb-5">
            <?php echo get_post_meta(get_the_ID() ,'video-url',true);?>
          </div>
          <div class="single_content mt-5">
                <?php the_content();?>
          </div>
        </article>
      </main>
    </div>


<?php get_footer(); ?>