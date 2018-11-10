<?php /** Author: Noah Davis **/ ?>

<?php

	

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	/** 
	 * Enqueue Scripts and Styles
	 */

	function load_scripts() {
		wp_enqueue_style( 'style' , get_stylesheet_uri() );
		wp_enqueue_style( 'navbar_style' , get_template_directory_uri() . '/navbar.css' );
	}

	add_action( 'wp_enqueue_scripts', 'load_scripts' );

/**	function ewb_navbar($wp_customize) {
		$wp_customize->add_section('ewb_navbar' , array( 'title' = 'Navigation Bar'));

		$wp_customize->add_setting('logo_image', array( '

	}

	add_action('customize_register', 'ewb_navbar');
	**/

	function ewb_homepage($wp_customize) {
		$wp_customize->add_section('ewb_homepage', array('title' => 'Homepage'));

		$wp_customize->add_setting('ewb_hero_image');

		$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ewb_hero_image', array(
			'label' => 'Image',
			'section' => 'ewb_homepage',
			'settings' => 'ewb_hero_image',
			'width' => 5184,
			'height' => 1742,
		)));	

	}

	add_action('customize_register', 'ewb_homepage');

	// Set image quality
	function my_image_quality( $quality ) {
		return 100;
	}
	add_filter( 'jpeg_quality', 'my_image_quality' );
	add_filter( 'wp_editor_set_quality', 'my_image_quality' );

	function themename_custom_logo_setup() {
		$defaults = array(
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
?>

