<!DOCTYPE html>
<html <?php language_attributes();?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
      
    <?php wp_head();?>
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
   <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/aos.css" />

    <title><?php bloginfo( 'title' ); ?></title>
 
  </head>
  <body <?php body_class(); ?>>
  
    <header>
      <div class="header">
        <div class="logo"  data-aos="fade-down" data-aos-delay="400">
        	  <a href="<?php echo home_url('/');?>">
        <?php if( has_custom_logo() ): ?>
									<?php the_custom_logo(); ?>
						<?php else: ?>  
        <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" alt="Movie Play" />
      
      	<?php endif; ?>
            </a>
      </div>
        <navbar class="navbar_desktop ">
        <?php if( is_active_sidebar( 'play_lab_main_menu' ) ): ?>
        	<?php
											wp_nav_menu( array(
												'theme_location'    => 'play_lab_main_menu',
												'depth'             => 3,
									
                    
											) );
						
                      else:
          $terms = get_terms( array( 
            'taxonomy'   => 'video-categoria',
            'hide_empty' => false,
             'order' => 'DESC' 
          ));

          foreach($terms as $term){

           ?>
            <li>
             <a href="<?php echo home_url('/').'video-categoria/'.$term->slug;?>" data-aos="fade-down" data-aos-delay="300"><?php echo $term->name; ?></a>
            </li>
            <?php
            }

            ?>


          <?php endif; ?>
   

        </navbar>
        <navbar class="navbar_mobile">
           <a href="<?php echo get_theme_mod('menu_small_url','#');?>">
              
          <?php 
          $url_1=get_theme_mod('menu_icon_1_image','') ? get_theme_mod('menu_icon_1_image','')  :  get_bloginfo('template_url') . '/img/icon-1.svg';
          $name_1=get_theme_mod('menu_small_title','') ? get_theme_mod('menu_small_title','')  : 'FILMES'
            ?>
                      <img src="<?php echo $url_1;?>"/>
                      <?php echo $name_1 ?>
              </a>
              <a href="<?php echo get_theme_mod('menu_small_url_two','#');?>">
          <?php 
          $url_2=get_theme_mod('menu_icon_1_image_two','') ? get_theme_mod('menu_icon_1_image_two','')  :  get_bloginfo('template_url') . '/img/icon-2.svg';
          $name_2=get_theme_mod('menu_small_title_two','') ? get_theme_mod('menu_small_title_two','')  : 'Documentários'
            ?>
            <img src="<?php echo $url_2;?>"/>
          <?php echo $name_2 ?>
               </a>
       
          <a href="<?php echo get_theme_mod('menu_small_url_three','#');?>">

            <?php 
            $url_3=get_theme_mod('menu_icon_1_image_three','') ? get_theme_mod('menu_icon_1_image_three','')  :  get_bloginfo('template_url') . '/img/player.png';
            $name_3=get_theme_mod('menu_small_title_three','') ? get_theme_mod('menu_small_title_three','')  : 'Séries'
            ?>

       
            <img src="<?php echo $url_3;?>"/>
          <?php echo $name_3 ?></a>
        </navbar>
      </div>
    </header>