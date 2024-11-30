<?php
if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}


function rehab_customize_register($wp_customize) {
   
}

add_action('customize_register', 'rehab_customize_register');
