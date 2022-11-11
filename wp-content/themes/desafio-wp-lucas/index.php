<?php

get_header();

$categoria=term_taxonomy($post);

?>



    <div class="container archive_container">
      <div class="flex-item-1">
        <div class="archive-description-page">
          <h1>Play</h1>
          <p class="mt-2">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reprehenderit inventore fugit sequi. Placeat pariatur repellendus illo perferendis officia harum, sapiente dolore voluptates, delectus veniam exercitationem alias fuga doloribus quae.
          </p>
        </div>
      </div>
      <div class="flex-item-1">
        <div class="grid">

          <?php

              if(have_posts()):

              while(have_posts()): the_post();
                 ?> 
                  <a href="<?php the_permalink();?>">
                    <div class="card">
                        <div class="card_image card_image_blog">
                                <img src="<?php echo get_the_post_thumbnail_url();?>" alt="" />
                        </div>
                        <div class="tag-minutes-card aos-animate mt-2"><?php echo $time=get_post_meta(get_the_ID(),'video-minutes',true) . "m"; ?></div>
                        <div class="card_content mt-2">
                          <h2><?php the_title();?></h2>
                        </div>
                  </div>
                  </a>
                 <?php
              endwhile;

  

          ?>
        </div>
        <div class="pagination">
          <?php
           	the_posts_pagination( array(
									'prev_text'		=> __( 'Previous', 'fancy-lab' ),
									'next_text'		=> __( 'Next', 'fancy-lab' ),
								));

              else:
          ?>
          <p><?php _e( 'Nothing to display.', 'fancy-lab' ); ?></p>
					<?php endif; ?>
        </div>
  
      </div>
    </div>

<?php get_footer(); ?>