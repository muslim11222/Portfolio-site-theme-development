<?php 


function muslim_theme_styles() {

    // CSS
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/css/style.css'
    );

    // Typed JS (must load first)
    wp_enqueue_script(
        'typed-js',
        'https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.10/typed.js',
        array(),
        null,
        true
    );

    // Custom JS (depends on typed-js)
    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/js/script.js',
        array('typed-js'), // 🔥 IMPORTANT FIX
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'muslim_theme_styles');


function muslim_theme_setup() {
    // Add support for dynamic title tags
    add_theme_support('title-tag');
    //menu setup
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'muslim-portfolio'),
        )
    );
}
add_action('after_setup_theme', 'muslim_theme_setup');

  //Header section start  

    function customize_register_header($wp_customize){

        //section
           
        $wp_customize->add_section('header_section', array(
            'title' => 'Header Settings',
        ));
         // Image
        $wp_customize->add_setting('header_image');
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'header_image',
            array(
                'label'   => 'Header Image',
                'section' => 'header_section',
            )
        ));

        //text 1
        $wp_customize->add_setting('header_text_1');
        $wp_customize->add_control('header_text_1', array(
            'label'   => 'Text 1',
            'section' => 'header_section',
            'type'    => 'text'
        ));

        //text 2
        $wp_customize->add_setting('header_text_2');
        $wp_customize->add_control('header_text_2', array(
            'label'   => 'Text 2',
            'section' => 'header_section',
            'type'    => 'text'
        ));

         //text 3
        $wp_customize->add_setting('header_text_3');
        $wp_customize->add_control('header_text_3', array(
            'label'   => 'Text 3',
            'section' => 'header_section',
            'type'    => 'text'
        ));

         //button link
        $wp_customize->add_setting('header_button_link');
        $wp_customize->add_control('header_button_link', array(
            'label'   => 'Button link',
            'section' => 'header_section',
            'type'    => 'text'
        ));
         //button text
        $wp_customize->add_setting('header_btn_text');
        $wp_customize->add_control('header_btn_text', array(
            'label'   => 'Button text',
            'section' => 'header_section',
            'type'    => 'text'
        ));
    }
    add_action('customize_register', 'customize_register_header');

  //Header section start   


  // About section start here

    function about_section_customize($wp_customize){
        $wp_customize->add_section('about_section', array(
            'title' => 'About Section Settings',
        ));
        // image
        $wp_customize->add_setting('about_image');
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            'about_image',
            array(
                'label'   => 'About Image',
                'section' => 'about_section',
            )
        ));

        //about text
        $wp_customize->add_setting('About_text');
        $wp_customize->add_control('About_text', array(
            'label'   => 'About text',
            'section' => 'about_section',
            'type'    => 'text'
        ));

        
        //about short text
        $wp_customize->add_setting('About_short_text');
        $wp_customize->add_control('About_short_text', array(
            'label'   => 'About Short Text',
            'section' => 'about_section',
            'type'    => 'text'
        ));
         //description
        $wp_customize->add_setting('About_description');
        $wp_customize->add_control('About_description', array(
            'label'   => 'About Description',
            'section' => 'about_section',
            'type'    => 'text'
        ));

          //About_Download_link
        $wp_customize->add_setting('About_Download_link');
        $wp_customize->add_control('About_Download_link', array(
            'label'   => 'About Download Link',
            'section' => 'about_section',
            'type'    => 'text'
        ));
    }
    add_action('customize_register', 'about_section_customize');

  // About section end here

// My Services section start here 

    function my_services_customize($wp_customize){
        $wp_customize->add_section('my_services_section', array(
            'title' => 'My Services Section Settings',
        ));

        //service 1
        $wp_customize->add_setting('service_1');
        $wp_customize->add_control('service_1', array(
            'label'   => 'Service 1',
            'section' => 'my_services_section',
            'type'    => 'text'
        ));

     

         
    }
    add_action('customize_register', 'my_services_customize');


// My Services section end here 


