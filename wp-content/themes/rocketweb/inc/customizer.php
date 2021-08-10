<?php

/**
 * Rocket web Theme Customizer.
 *
 * @package Rocket_web
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function rocketweb_customize_register( $wp_customize ) {
	
	// reset some stuff
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );
    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'static_front_page' );
    $wp_customize->remove_section( 'title_tagline' );
	
    # Logo section
    $wp_customize->add_section( 'logo', array (
        'title'                 => __( 'Logo', 'rocketweb' ),
        'priority' => 10,
    ) );
    $wp_customize->add_setting( 'logo', array (
        'default'               => get_template_directory_uri() . '/inc/images/logo.png',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control4', array (
        'label' =>              __( 'Logo', 'rocketweb' ),
        'section'               => 'logo',
        'mime_type'             => 'image',
        'settings'              => 'logo',
        'description'           => __( 'Logo for your site', 'rocketweb' ),        
    ) ) );
	
	# Slider section
	$wp_customize->add_section( 'slider', array (
        'title'                 => __( 'Slider', 'rocketweb' ),
        'priority' => 10,
    ) );
	#Slider title
	$wp_customize->add_setting( 'slider_title', array (
        'default'               => __( 'Welcome to Rocket Web', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'slider_title', array(
        'type'                  => 'text',
        'section'               => 'slider',
        'label'                 => __( 'Slider Title', 'rocketweb' ),
        'description'           => __( 'The main slider title, leave blank to hide', 'rocketweb' ),
    ) );
	#Slider subtitle
	$wp_customize->add_setting( 'slider_subtitle', array (
        'default'               => __( 'Lorem ipsum dolor sit amet', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'slider_subtitle', array(
        'type'                  => 'text',
        'section'               => 'slider',
        'label'                 => __( 'Slider Subtitle', 'rocketweb' ),
        'description'           => __( 'The main slider subtitle, leave blank to hide', 'rocketweb' ),
    ) );
	#Slider button
	$wp_customize->add_setting( 'slider_button_text', array (
        'default'               => __( 'naruči odmah', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'
    ) );
    
    $wp_customize->add_control( 'slider_button_text', array(
        'type'                  => 'text',
        'section'               => 'slider',
        'label'                 => __( 'Button Text', 'rocketweb' ),
        'description'           => __( 'The text for the button, leave blank to hide', 'rocketweb' ),
    ) );

    $wp_customize->add_setting( 'slider_button_url', array (
        'default'               => '',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'slider_button_url', array(
        'type'                  => 'text',
        'section'               => 'slider',
        'label'                 => __( 'Button URL', 'rocketweb' ),
    ) );
	
	#Slider image
	$wp_customize->add_setting( 'image1', array (
        'default'               => get_template_directory_uri() . '/inc/images/header.png',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_control1', array (
        'label' =>              __( 'Slider Image', 'rocketweb' ),
        'section'               => 'slider',
        'mime_type'             => 'image',
        'settings'              => 'image1',
        'description'           => __( 'Select the image file that you would like to use as the slider images', 'rocketweb' ),        
    ) ) );
	
	#Featured panel
	$wp_customize->add_panel( 'featured', array (
        'title' => __( 'Featured', 'rocketweb' ),
        'description' => __( 'set featured title, subtitle and four section', 'rocketweb' ),
        'priority' => 10
    ) );
    
	#Featured Title & Subtitle
    $wp_customize->add_section( 'title', array (
        'title'                 => __( 'Title and subtitle', 'rocketweb' ),
        'panel'                 => 'featured',
    ) );
    
	#Featured title
	$wp_customize->add_setting( 'featured_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'featured_title', array(
        'type'                  => 'text',
        'section'               => 'title',
        'label'                 => __( 'Featured Title', 'rocketweb' ),
        'description'           => __( 'Featured title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured subtitle
	$wp_customize->add_setting( 'featured_subtitle', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'featured_subtitle', array(
        'type'                  => 'text',
        'section'               => 'title',
        'label'                 => __( 'Featured Subtitle', 'rocketweb' ),
        'description'           => __( 'Featured subtitle, leave blank to hide', 'rocketweb' ),
    ) );
	
	#Featured box1
	 $wp_customize->add_section( 'featured_box1', array (
        'title'                 => __( 'Featured Box 1', 'rocketweb' ),
        'panel'                 => 'featured',
    ) );
	#Featured box1 title
	$wp_customize->add_setting( 'featured_box1_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box1_title', array(
        'type'                  => 'text',
        'section'               => 'featured_box1',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Featured box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured box1 text
	$wp_customize->add_setting( 'featured_box1_text', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box1_text', array(
        'type'                  => 'textarea',
        'section'               => 'featured_box1',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Featured box text, leave blank to hide', 'rocketweb' ),
    ) );
	
	#Featured box2
	 $wp_customize->add_section( 'featured_box2', array (
        'title'                 => __( 'Featured Box 2', 'rocketweb' ),
        'panel'                 => 'featured',
    ) );
	#Featured box2 title
	$wp_customize->add_setting( 'featured_box2_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box2_title', array(
        'type'                  => 'text',
        'section'               => 'featured_box2',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Featured box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured box2 text
	$wp_customize->add_setting( 'featured_box2_text', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box2_text', array(
        'type'                  => 'textarea',
        'section'               => 'featured_box2',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Featured box text, leave blank to hide', 'rocketweb' ),
    ) );
	
	#Featured box3
	 $wp_customize->add_section( 'featured_box3', array (
        'title'                 => __( 'Featured Box 3', 'rocketweb' ),
        'panel'                 => 'featured',
    ) );
	#Featured box3 title
	$wp_customize->add_setting( 'featured_box3_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box3_title', array(
        'type'                  => 'text',
        'section'               => 'featured_box3',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Featured box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured box3 text
	$wp_customize->add_setting( 'featured_box3_text', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box3_text', array(
        'type'                  => 'textarea',
        'section'               => 'featured_box3',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Featured box text, leave blank to hide', 'rocketweb' ),
    ) );
	
	#Featured box4
	 $wp_customize->add_section( 'featured_box4', array (
        'title'                 => __( 'Featured Box 4', 'rocketweb' ),
        'panel'                 => 'featured',
    ) );
	#Featured box4 title
	$wp_customize->add_setting( 'featured_box4_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box4_title', array(
        'type'                  => 'text',
        'section'               => 'featured_box4',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Featured box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured box4 text
	$wp_customize->add_setting( 'featured_box4_text', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'featured_box4_text', array(
        'type'                  => 'textarea',
        'section'               => 'featured_box4',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Featured box text, leave blank to hide', 'rocketweb' ),
    ) ) ;
	#Featured Slider Panel
	$wp_customize->add_panel( 'featured_slider', array (
        'title' => __( 'Featured Slider', 'rocketweb' ),
        'description' => __( 'set featured slider title, subtitle and four section', 'rocketweb' ),
        'priority' => 10
    ) );	
	#Featured Slider section
	$wp_customize->add_section( 'featured_slider', array (
        'title'                 => __( 'Featured Slider', 'rocketweb' ),
        'priority' => 10,
    ) );
	#Slider title
	$wp_customize->add_setting( 'featured_slider_title', array (
        'default'               => __( 'Lorem ipsum dolor sit amet', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'featured_slider_title', array(
        'type'                  => 'text',
        'section'               => 'featured_slider',
        'label'                 => __( 'Slider Title', 'rocketweb' ),
        'description'           => __( 'The main featured slider title, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured Slider subtitle
	$wp_customize->add_setting( 'featured_slider_subtitle', array (
        'default'               => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam porta felis mauris, nec bibendum elit condimentum eu.', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    
    $wp_customize->add_control( 'featured_slider_subtitle', array(
        'type'                  => 'text',
        'section'               => 'featured_slider',
        'label'                 => __( 'Slider Subtitle', 'rocketweb' ),
        'description'           => __( 'The main slider subtitle, leave blank to hide', 'rocketweb' ),
    ) );
	#Featured Slider button
	$wp_customize->add_setting( 'featured_slider_button_text', array (
        'default'               => __( 'naruči odmah', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'
    ) );
    
    $wp_customize->add_control( 'featured_slider_button_text', array(
        'type'                  => 'text',
        'section'               => 'featured_slider',
        'label'                 => __( 'Button Text', 'rocketweb' ),
        'description'           => __( 'The text for the button, leave blank to hide', 'rocketweb' ),
    ) );

    $wp_customize->add_setting( 'featured_slider_button_url', array (
        'default'               => '',
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'esc_url_raw'
    ) );
    
    $wp_customize->add_control( 'featured_slider_button_url', array(
        'type'                  => 'text',
        'section'               => 'featured_slider',
        'label'                 => __( 'Button URL', 'rocketweb' ),
    ) );
	
	#Footer Panel
	$wp_customize->add_panel( 'footer', array (
        'title' => __( 'Footer', 'rocketweb' ),
        'description' => __( 'set footer and three section', 'rocketweb' ),
        'priority' => 10
    ) );

	#Footer box1
	 $wp_customize->add_section( 'footer_box1', array (
        'title'                 => __( 'Footer Box 1', 'rocketweb' ),
        'panel'                 => 'footer',
    ) );
	#Footer box1 title
	$wp_customize->add_setting( 'footer_box1_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box1_title', array(
        'type'                  => 'text',
        'section'               => 'footer_box1',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Footer box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Footer box1 text
	$wp_customize->add_setting( 'footer_box1_text', array (
        'default'               => __( 'About Us:', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box1_text', array(
        'type'                  => 'textarea',
        'section'               => 'footer_box1',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Footer box text, leave blank to hide', 'rocketweb' ),
    ) ) ;

	#Footer box2
	 $wp_customize->add_section( 'footer_box2', array (
        'title'                 => __( 'Footer Box 2', 'rocketweb' ),
        'panel'                 => 'footer',
    ) );
	#Featured box2 title
	$wp_customize->add_setting( 'footer_box2_title', array (
        'default'               => __( 'Solutions:', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box2_title', array(
        'type'                  => 'text',
        'section'               => 'footer_box2',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Footer box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Footer box2 text
	$wp_customize->add_setting( 'footer_box2_text', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box2_text', array(
        'type'                  => 'textarea',
        'section'               => 'footer_box2',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Footer box text, leave blank to hide', 'rocketweb' ),
    ) ) ;
	
	#Footer box3
	 $wp_customize->add_section( 'footer_box3', array (
        'title'                 => __( 'Footer Box 3', 'rocketweb' ),
        'panel'                 => 'footer',
    ) );
	#Footer box3 title
	$wp_customize->add_setting( 'footer_box3_title', array (
        'default'               => __( '', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box3_title', array(
        'type'                  => 'text',
        'section'               => 'footer_box3',
        'label'                 => __( 'Title', 'rocketweb' ),
        'description'           => __( 'Footer box title, leave blank to hide', 'rocketweb' ),
    ) );
	#Footer box3 text
	$wp_customize->add_setting( 'footer_box3_text', array (
        'default'               => __( 'Contact Us:', 'rocketweb' ),
        'transport'             => 'postMessage',
        'sanitize_callback'     => 'rocketweb_text_sanitize'

    ) );
    $wp_customize->add_control( 'footer_box3_text', array(
        'type'                  => 'textarea',
        'section'               => 'footer_box3',
        'label'                 => __( 'Text', 'rocketweb' ),
        'description'           => __( 'Footer box text, leave blank to hide', 'rocketweb' ),
    ) ) ;
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'rocketweb_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function rocketweb_customize_preview_js() {
	wp_enqueue_script( 'rocketweb_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'rocketweb_customize_preview_js' );

function rocketweb_text_sanitize( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
