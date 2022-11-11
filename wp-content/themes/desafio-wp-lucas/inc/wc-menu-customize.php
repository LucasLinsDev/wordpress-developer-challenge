<?php


function theme_customizer_function($wp_customize){
	$wp_customize->add_panel('menu_mobile_panel',array(
		'title'=>'Menu Mobile Links',
		'priority'=>10,
		'capability'=>'edit_theme_options',
	));

	$wp_customize->add_section('menu_mobile_home',array(
		'title'=>'Menu Mobile',
		'description'=>__('Menu Mobile Customizer'),
		'panel'=>'menu_mobile_panel'
	));

	$wp_customize->add_setting('menu_small_title',array(
		'default'=>__('Séries')
	));

	$wp_customize->add_control('menu_small_title',array(
		'label'=>'Menu Icon Title One',
		'section'=>'menu_mobile_home',
		'priority'=>1,
	));
	
	$wp_customize->add_setting('menu_small_url',array(
		'default'=>__('#')
	));

	$wp_customize->add_control('menu_small_url',array(
		'label'=>'Menu url',
		'section'=>'menu_mobile_home',
		'priority'=>1,
	));


	$wp_customize->add_setting("menu_icon_1_image",array(
		'default'=>get_template_directory_uri().'/img/icon-1.svg'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'menu_icon_1_image',array(
		'label'=>'Icon One',
		'section'=>'menu_mobile_home',
		'priority'=>1,
	)));



		$wp_customize->add_setting('menu_small_title_two',array(
		'default'=>__('Séries')
	));

	$wp_customize->add_control('menu_small_title_two',array(
		'label'=>'Menu Icon Title two',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	));
	
	$wp_customize->add_setting('menu_small_url_two',array(
		'default'=>__('#')
	));

	$wp_customize->add_control('menu_small_url_two',array(
		'label'=>'Menu url Two',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	));


	$wp_customize->add_setting("menu_icon_1_image_two",array(
		'default'=> get_bloginfo('template_url').'/img/player.png'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'menu_icon_1_image_two',array(
		'label'=>'Icon Two',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	)));


			$wp_customize->add_setting('menu_small_title_three',array(
		'default'=>__('Séries')
	));

	$wp_customize->add_control('menu_small_title_three',array(
		'label'=>'Menu Icon Title three',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	));
	
	$wp_customize->add_setting('menu_small_url_three',array(
		'default'=>__('#')
	));

	$wp_customize->add_control('menu_small_url_three',array(
		'label'=>'Menu url three',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	));


	$wp_customize->add_setting("menu_icon_1_image_three",array(
		'default'=>get_bloginfo('template_url') . '/img/player.png'
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'menu_icon_1_image_three',array(
		'label'=>'Icon Two',
		'section'=>'menu_mobile_home',
		'priority'=>2,
	)));


		$wp_customize->add_panel('blog_panel',array(
		'title'=>'Page Video Page ',
		'priority'=>10,
		'capability'=>'edit_theme_options',
	));

	$wp_customize->add_section('blog_home',array(
		'title'=>'Page Video',
		'description'=>__('Menu Mobile Customizer'),
		'panel'=>'blog_panel'
	));

	$wp_customize->add_setting('blog_title',array(
		'default'=>__('Blog')
	));

	$wp_customize->add_control('blog_title',array(
		'label'=>'Menu Icon Title One',
		'section'=>'blog_home',
		'priority'=>1,
	));

}

add_action('customize_register','theme_customizer_function');

?>