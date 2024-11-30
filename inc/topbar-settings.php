<?php

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


function rehab_customize_register($wp_customize)
{
    // section for top bar settings

    $wp_customize->add_section('topbar_settings', array(
        'title' => __('Top Bar Settings', 'rehab'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('topbar_address', array(
        'default' => '1071 Nice Place, Gweru, Zimbabwe',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('topbar_address', array(
        'label' => __('Address', 'rehab'),
        'section' => 'topbar_settings',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('topbar_email', array(
        'default'           => 'needhelp@company.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('topbar_email', array(
        'label'   => __('Email', 'rehab'),
        'section' => 'topbar_settings',
        'type'    => 'email',
    ));

    // Phone
    $wp_customize->add_setting('topbar_phone', array(
        'default'           => '+1 (307) 776-0608',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('topbar_phone', array(
        'label'   => __('Phone', 'rehab'),
        'section' => 'topbar_settings',
        'type'    => 'text',
    ));

    // Social Links
    $social_links = array('twitter', 'facebook', 'instagram');
    foreach ($social_links as $social) {
        $wp_customize->add_setting("{$social}_url", array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("{$social}_url", array(
            'label'   => ucfirst($social) . ' URL',
            'section' => 'topbar_settings',
            'type'    => 'url',
        ));
    }



    //slider options
   // =================================================
    // Add a section for the slider
    $wp_customize->add_section('slider_section', array(
        'title'    => __('Slider Settings', 'rehab'),
        'priority' => 30,
    ));

    // Add a setting to enable or disable the slider
   // Add a section for the slider
   $wp_customize->add_section('slider_section', array(
    'title' => __('Slider Settings', 'rehab'),
    'priority' => 30,
));

// Add a setting to enable or disable the slider
$wp_customize->add_setting('slider_enable', array(
    'default' => true,
    'sanitize_callback' => 'wp_validate_boolean',
));

$wp_customize->add_control('slider_enable', array(
    'type' => 'checkbox',
    'label' => __('Enable Slider', 'rehab'),
    'section' => 'slider_section',
));

// Add settings and controls for each slide
for ($i = 1; $i <= 3; $i++) {
    // Image setting
    $wp_customize->add_setting("slider_image_$i", array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slider_image_$i", array(
        'label' => __("Slider Image $i", 'rehab'),
        'section' => 'slider_section',
        'settings' => "slider_image_$i",
    )));

    // Title setting
    $wp_customize->add_setting("slider_title_$i", array(
        'default' => __("Default Title $i", 'rehab'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("slider_title_$i", array(
        'label' => __("Slider Title $i", 'rehab'),
        'section' => 'slider_section',
        'settings' => "slider_title_$i",
        'type' => 'text',
    ));

    // Subtitle setting
    $wp_customize->add_setting("slider_subtitle_$i", array(
        'default' => __("Default Subtitle $i", 'rehab'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("slider_subtitle_$i", array(
        'label' => __("Slider Subtitle $i", 'rehab'),
        'section' => 'slider_section',
        'settings' => "slider_subtitle_$i",
        'type' => 'text',
    ));

    // Button text and link
    $wp_customize->add_setting("slider_button_text_$i", array(
        'default' => __("Discover More", 'rehab'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control("slider_button_text_$i", array(
        'label' => __("Slider Button Text $i", 'rehab'),
        'section' => 'slider_section',
        'settings' => "slider_button_text_$i",
        'type' => 'text',
    ));

    $wp_customize->add_setting("slider_button_link_$i", array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control("slider_button_link_$i", array(
        'label' => __("Slider Button Link $i", 'rehab'),
        'section' => 'slider_section',
        'settings' => "slider_button_link_$i",
        'type' => 'url',
    ));
}
   //=========================end slider options======================
}
add_action('customize_register', 'rehab_customize_register');
