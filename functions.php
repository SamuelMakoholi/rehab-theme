<?php
//functions

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once get_template_directory() . '/includes/enqueue-styles.php';
require_once get_template_directory() . '/includes/enqueue-scripts.php';

// Include Customizer settings
require get_template_directory() . '/inc/topbar-settings.php';


add_theme_support('title-tag');

// registering the main menu
function register_theme_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'Rehab'),
    ));
}
add_action('init', 'register_theme_menus');





