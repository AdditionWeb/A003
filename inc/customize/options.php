<?php

// Add A003 Theme Options to Customizer

function a003_theme_options( $wp_customize )
{
    // Remove Parent Theme's Homepage Section 1 & Slider Section
    $wp_customize->remove_section( 'section_second' );
    $wp_customize->remove_section( 'slider_section' );

    // Homepage Design Panel
    
    $wp_customize->add_panel( 'a003_homepage_design', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'title'          => 'Homepage Design',
) );
    
    $wp_customize->add_section('a003_slider_section', array(
        'title' => __('Slider', 'a003'),
        'priority' => 1,
        'panel' => 'a003_homepage_design'
    ));
    
    $wp_customize->add_setting('a003_homepage_slider_image', array(
        'type' => 'option',
        'default' => 'http://i64.tinypic.com/17u2rt.jpg'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'a003_homepage_slider_image', array(
        'label' => __('Homepage Slider Image', 'a003'),
        'section' => 'a003_slider_section',
        'settings' => 'a003_homepage_slider_image',
        'context' => 'homepage_slider_image'
    )));
    
    $wp_customize->add_setting('a003_homepage_slider_heading', array(
        'type' => 'option',
        'default' => 'Visit Us',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_homepage_slider_heading', array(
        'label' => __('Homepage Slider Heading', 'a003'),
        'section' => 'a003_slider_section',
        'settings' => 'a003_homepage_slider_heading',
        'type' => 'text',
        'priority' => 10
    )));
    
    $wp_customize->add_setting('a003_homepage_slider_subheading', array(
        'type' => 'option',
        'default' => 'Join Us And Worship The Lord!',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_homepage_slider_subheading', array(
        'label' => __('Homepage Slider Subheading', 'a003'),
        'section' => 'a003_slider_section',
        'settings' => 'a003_homepage_slider_subheading',
        'type' => 'text',
        'priority' => 10
    )));
    
    // Homepage Icons Section
    
    $wp_customize->add_section('a003_icons_section', array(
        'title' => __('Icons', 'a003'),
        'priority' => 2,
        'panel' => 'a003_homepage_design'
    ));
    
    $wp_customize->add_setting('a003_icon_section_title', array(
        'type' => 'option',
        'default' => 'Welcome To Conversion Church',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_icon_section_title', array(
        'label' => __('Icon Section Title', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_icon_section_title',
        'type' => 'text',
        'priority' => 11
    )));
    
    $wp_customize->add_setting('a003_about_icon_1', array(
        'type' => 'option',
        'default' => 'fa-clock-o',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_1', array(
        'label' => __('First Icon', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_1',
        'type' => 'text',
        'priority' => 11
    )));
    
    $wp_customize->add_setting('a003_about_icon_title_1', array(
        'type' => 'option',
        'default' => 'Services',
        'sanitize_callback' => 'sanitize_text_field'
    ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_title_1', array(
        'label' => __('First Icon Title', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_title_1',
        'type' => 'text',
        'priority' => 12
    )));

    $wp_customize->add_setting('a003_about_icon_text_1', array(
        'type' => 'option',
        'default' => 'We offer a variety of Worship Opportunities!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_text_1', array(
        'label' => __('First Icon Text', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_text_1',
        'type' => 'textarea',
        'priority' => 13
    )));

    $wp_customize->add_setting('a003_about_icon_url_1', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_url_1', array(
        'label' => __('First Icon URL', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_url_1',
        'type' => 'text',
        'priority' => 14
    )));
    
    $wp_customize->add_setting('a003_about_icon_2', array(
        'type' => 'option',
        'default' => 'fa-calendar',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_2', array(
        'label' => __('Second Icon', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_2',
        'type' => 'text',
        'priority' => 15
    )));

    $wp_customize->add_setting('a003_about_icon_title_2', array(
        'type' => 'option',
        'default' => 'Events',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_title_2', array(
        'label' => __('Second Icon Title', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_title_2',
        'type' => 'text',
        'priority' => 16
    )));

    $wp_customize->add_setting('a003_about_icon_text_2', array(
        'type' => 'option',
        'default' => 'Wondering what we\'re up to? Take a look at our calendar!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_text_2', array(
        'label' => __('Second Icon Text', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_text_2',
        'type' => 'textarea',
        'priority' => 17
    )));

    $wp_customize->add_setting('a003_about_icon_url_2', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_url_2', array(
        'label' => __('Second Icon URL', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_url_2',
        'type' => 'text',
        'priority' => 18
    )));
    
    $wp_customize->add_setting('a003_about_icon_3', array(
        'type' => 'option',
        'default' => 'fa-map-marker',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_3', array(
        'label' => __('Third Icon', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_3',
        'type' => 'text',
        'priority' => 19
    )));

    $wp_customize->add_setting('a003_about_icon_title_3', array(
        'type' => 'option',
        'default' => 'Find Us',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_title_3', array(
        'label' => __('Third Icon Title', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_title_3',
        'type' => 'text',
        'priority' => 20
    )));

    $wp_customize->add_setting('a003_about_icon_text_3', array(
        'type' => 'option',
        'default' => 'Need help finding us? No problem! Check out this map.',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_text_3', array(
        'label' => __('Third Icon Text', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_text_3',
        'type' => 'textarea',
        'priority' => 21
    )));

    $wp_customize->add_setting('a003_about_icon_url_3', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_url_3', array(
        'label' => __('Third Icon URL', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_url_3',
        'type' => 'text',
        'priority' => 22
    )));
    
    $wp_customize->add_setting('a003_about_icon_4', array(
        'type' => 'option',
        'default' => 'fa-envelope-o',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_4', array(
        'label' => __('Fourth Icon', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_4',
        'type' => 'text',
        'priority' => 23
    )));

    $wp_customize->add_setting('a003_about_icon_title_4', array(
        'type' => 'option',
        'default' => 'Always In Reach',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_title_4', array(
        'label' => __('Fourth Icon Title', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_title_4',
        'type' => 'text',
        'priority' => 25
    )));

    $wp_customize->add_setting('a003_about_icon_text_4', array(
        'type' => 'option',
        'default' => 'We\'re always one call, email, or form submission away!',
        'sanitize_callback' => 'sanitize_textarea_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_text_4', array(
        'label' => __('Fourth Icon Text', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_text_4',
        'type' => 'textarea',
        'priority' => 26
    )));

    $wp_customize->add_setting('a003_about_icon_url_4', array(
        'type' => 'option',
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_about_icon_url_4', array(
        'label' => __('Fourth Icon URL', 'a003'),
        'section' => 'a003_icons_section',
        'settings' => 'a003_about_icon_url_4',
        'type' => 'text',
        'priority' => 27
    )));
    
    // Call To Action Section
    
    $wp_customize->add_section('a003_cta_section', array(
        'title' => __('Call To Action', 'a003'),
        'priority' => 3,
        'panel' => 'a003_homepage_design'
    ));
    
    $wp_customize->add_setting('a003_cta_text_1', array(
            'type' => 'option',
            'default' => 'Still wondering who we are? We\'ve got you covered!',
            'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_cta_text_1', array(
            'label' => __('Call To Action Text', 'a003'),
            'section' => 'a003_cta_section',
            'settings' => 'a003_cta_text_1',
            'type' => 'text',
            'priority' => 28
        )));
    
    $wp_customize->add_setting('a003_cta_btn_text_1', array(
            'type' => 'option',
            'default' => 'About',
            'sanitize_callback' => 'sanitize_text_field'
        ));
    
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_cta_btn_text_1', array(
            'label' => __('Call To Action Button Text', 'a003'),
            'section' => 'a003_cta_section',
            'settings' => 'a003_cta_btn_text_1',
            'type' => 'text',
            'priority' => 29
        )));
    
    $wp_customize->add_setting('a003_cta_url_1', array(
        'type' => 'option',
        'default' => '/about/',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_cta_url_1', array(
        'label' => __('Call To Action Button Link', 'a003'),
        'section' => 'a003_cta_section',
        'settings' => 'a003_cta_url_1',
        'type' => 'text',
        'priority' => 30
    )));
    
    // Home Section Two Four Boxes Section 	
	$wp_customize->add_section('section_third', array(
		'title'	=> esc_html__('Home Page Section 2','correct-lite'),
		'description'	=> wp_kses_post('<strong>Section Display When Frontpage Is Selected.</strong> <br/><br/>Select pages from the dropdown for homepage section 2 boxes','correct-lite'),
		'priority'	=> 4,
        'panel' => 'a003_homepage_design'
	));	
	
	
	$wp_customize->add_setting('sec2-page-column5',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'absint',
		));
 
	$wp_customize->add_control(	'sec2-page-column5',array('type' => 'dropdown-pages',
			'section' => 'section_third',
	));	
	
	
	$wp_customize->add_setting('sec2-page-column6',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'absint',
		));
 
	$wp_customize->add_control(	'sec2-page-column6',array('type' => 'dropdown-pages',
			'section' => 'section_third',
	));
	
	$wp_customize->add_setting('sec2-page-column7',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'absint',
		));
 
	$wp_customize->add_control(	'sec2-page-column7',array('type' => 'dropdown-pages',
			'section' => 'section_third',
	));
	
	
	$wp_customize->add_setting('sec2-page-column8',	array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback' => 'absint',
		));
 
	$wp_customize->add_control(	'sec2-page-column8',array('type' => 'dropdown-pages',
			'section' => 'section_third',
	));	
	
	//Hide Page Boxes Column Section
	$wp_customize->add_setting('hide_pagefourboxes',array(
			'sanitize_callback' => 'wp_validate_boolean',
			'default' => true,
	));	 

	$wp_customize->add_control( 'hide_pagefourboxes', array(
    	   'section'   => 'section_third',    	 
		   'label'	=> esc_html__('Check To Hide Section','correct-lite'),
    	   'type'      => 'checkbox'
     )); // Home Section Two Four Boxes Section
    
    // Footer Section
    $wp_customize->add_section('a003_footer_section', array(
        'title' => __('Footer', 'a003'),
        'priority' => 120,
    ));
    
    $wp_customize->add_setting('a003_footer_text', array(
        'type' => 'option',
        'default' => '✝ Conversion Church 2017',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'a003_footer_text', array(
        'label' => __('Footer Text', 'a003'),
        'section' => 'a003_footer_section',
        'settings' => 'a003_footer_text',
        'type' => 'text',
        'priority' => 1
    )));
    
}
add_action('customize_register', 'a003_theme_options', 20);

?>
