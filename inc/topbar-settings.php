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
}
add_action('customize_register', 'rehab_customize_register');
