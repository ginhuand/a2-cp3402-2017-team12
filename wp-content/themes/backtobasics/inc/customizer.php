<?php
/**
 * backtobasics Theme Customizer
 *
 * @package backtobasics
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function backtobasics_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    $ImageUrl1 = esc_url(get_template_directory_uri() . "/images/slider/image2.jpg");
    $ImageUrl2 = esc_url(get_template_directory_uri() . "/images/slider/image3.jpg");
    $ImageUrl3 = esc_url(get_template_directory_uri() . "/images/slider/image4.jpg");

    $wp_customize->add_panel('backtobasics_theme_option', array(
        'title' => __('Slideshow', 'backtobasics'),
        'priority' => 1, // Mixed with top-level-section hierarchy.
        'transport' => 'postMessage',
    ));

    $wp_customize->add_section('slider_sec',         array(
            'title' =>  __( 'Slideshow Options','backtobasics' ),
            'panel'=>'backtobasics_theme_option',
            'description' => 'Here you can add slider images',
            'capability'=>'edit_theme_options',
            'priority' => 35,
            'active_callback' => 'is_front_page',
            'transport' => 'postMessage',
        )
    );

    $wl_theme_options = backtobasics_get_options();

    $wp_customize->add_setting(
        'backtobasics_options[_frontpage]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['_frontpage'],
            'sanitize_callback'=>'backtobasics_sanitize_checkbox',
            'capability'        => 'edit_theme_options',
            'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control( 'backtobasics_front_page', array(
        'label'        => __( 'Show Front Page', 'backtobasics' ),
        'type'=>'checkbox',
        'section'    => 'general_sec',
        'settings'   => 'backtobasics_options[_frontpage]',
        'transport' => 'postMessage',
    ) );

    /* Slider options */

    $wp_customize->add_setting(
        'backtobasics_options[slider_image_speed]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slider_image_speed'],
            'sanitize_callback'=>'backtobasics_sanitize_text',
            'capability'        => 'edit_theme_options',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control( 'backtobasics_slider_speed', array(
        'label'        => __( 'Slider Speed Option', 'backtobasics' ),
        'description' => 'Value will be in milliseconds',
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slider_image_speed]',
        //'transport' => 'postMessage',
    ) );

    $wp_customize->add_setting(
        'backtobasics_options[slide_image_1]',
        array(
            'type'    => 'option',
            'default'=>$ImageUrl1,
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_image_2]',
        array(
            'type'    => 'option',
            'default'=>$ImageUrl2,
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            // 'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_image_3]',
        array(
            'type'    => 'option',
            'default'=>$ImageUrl3,
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_title_1]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_title_1'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_title_2]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_title_2'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_title_3]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_title_3'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_desc_1]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_desc_1'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_desc_2]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_desc_2'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_desc_3]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_desc_3'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_text_1]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_text_1'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_text_2]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_text_2'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            // 'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_text_3]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_text_3'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'backtobasics_sanitize_text',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_link_1]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_link_1'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            // 'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_link_2]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_link_2'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            //'transport' => 'postMessage',
        )
    );
    $wp_customize->add_setting(
        'backtobasics_options[slide_btn_link_3]',
        array(
            'type'    => 'option',
            'default'=>$wl_theme_options['slide_btn_link_3'],
            'capability' => 'edit_theme_options',
            'sanitize_callback'=>'esc_url_raw',
            // 'transport' => 'postMessage',
        )
    );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'backtobasics_slider_image_1', array(
        'label'        => __( 'Slider Image One', 'backtobasics' ),
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_image_1]',
        //'transport' => 'postMessage',
    ) ) );
    $wp_customize->add_control( 'backtobasics_slide_title_1', array(
        'label'        => __( 'Slider title one', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_title_1]',
        //'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_desc_1', array(
        'label'        => __( 'Slider description one', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_desc_1]',
        // 'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'Slider button one', array(
        'label'        => __( 'Slider Button Text One', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_text_1]',
        // 'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'backtobasics_slide_btnlink_1', array(
        'label'        => __( 'Slider Button Link One', 'backtobasics' ),
        'type'=>'url',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_link_1]',
        //'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'backtobasics_slider_image_2', array(
        'label'        => __( 'Slider Image Two ', 'backtobasics' ),
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_image_2]',
        //'transport' => 'postMessage',
    ) ) );

    $wp_customize->add_control( 'backtobasics_slide_title_2', array(
        'label'        => __( 'Slider Title Two', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_title_2]',
        //'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_desc_2', array(
        'label'        => __( 'Slider Description Two', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_desc_2]',
        // 'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_btn_2', array(
        'label'        => __( 'Slider Button Text Two', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_text_2]',
        // 'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_btnlink_2', array(
        'label'        => __( 'Slider Button Link Two', 'backtobasics' ),
        'type'=>'url',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_link_2]',
        //'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'backtobasics_slider_image_3', array(
        'label'        => __( 'Slider Image Three', 'backtobasics' ),
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_image_3]',
        // 'transport' => 'postMessage',
    ) ) );
    $wp_customize->add_control( 'backtobasics_slide_title_3', array(
        'label'        => __( 'Slider Title Three', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_title_3]',
        // 'transport' => 'postMessage',
    ) );

    $wp_customize->add_control( 'backtobasics_slide_desc_3', array(
        'label'        => __( 'Slider Description Three', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_desc_3]',
        // 'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_btn_3', array(
        'label'        => __( 'Slider Button Text Three', 'backtobasics' ),
        'type'=>'text',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_text_3]',
        // 'transport' => 'postMessage',
    ) );
    $wp_customize->add_control( 'backtobasics_slide_btnlink_3', array(
        'label'        => __( 'Slider Button Link Three', 'backtobasics' ),
        'type'=>'url',
        'section'    => 'slider_sec',
        'settings'   => 'backtobasics_options[slide_btn_link_3]',
        // 'transport' => 'postMessage',
    ) );
}

add_action('customize_register', 'backtobasics_customize_register');

function backtobasics_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function backtobasics_sanitize_checkbox( $input ) {
    return $input;
}
function backtobasics_sanitize_integer( $input ) {
    return (int)($input);
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function backtobasics_customize_preview_js()
{
    wp_enqueue_script('backtobasics_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'backtobasics_customize_preview_js');
