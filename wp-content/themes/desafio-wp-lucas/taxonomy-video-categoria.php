<?php

get_header();

$categoria=term_taxonomy($post);

?>



    <div class="container archive_container">
      <div class="flex-item-1">
        <div class="archive-description-page">
          <h1><?php echo $categoria[0];?></h1>
          <p class="mt-2">
           <?php echo $categoria[1];?>
          </p>
        </div>
      </div>
      <div class="flex-item-1">
        <div class="grid">

          <?php

              if(have_posts()):
                $number=700;
              while(have_posts()): the_post();
                 ?> 

                  <a href="<?php the_permalink();?>">
                    <div class="card" data-aos="fade-up" data-aos-delay="<?php echo $number;?>">
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
                 $number=$number+100;
              endwhile;

  

          ?>
        </div>
        <div class="pagination">
          <?php
           	the_posts_pagination( array(
									'prev_text'		=> __( 'Previous', 'dx-desafio' ),
									'next_text'		=> __( 'Next', 'dx-desafio' ),
								));

              else:
          ?>
          <p><?php _e( 'Nothing to display.', 'dx-desafio' ); ?></p>
					<?php endif; ?>
        </div>
  
      </div>
    </div>

<?php get_footer(); ?>