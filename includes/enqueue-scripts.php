<?php
/**
 * Enqueue scripts for the Rehab theme.
 */

function rehab_enqueue_scripts() {
    // Plugin Scripts
    wp_enqueue_script('rehab-jquery', get_template_directory_uri() . '/assets/vendors/jquery/jquery-3.6.1.min.js', [], null, true);
    wp_enqueue_script('rehab-bootstrap-js', get_template_directory_uri() . '/assets/vendors/bootstrap/js/bootstrap.bundle.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-tiny-slider-js', get_template_directory_uri() . '/assets/vendors/tiny-slider/dist/min/tiny-slider.js', [], null, true);
    wp_enqueue_script('rehab-jquery-validate', get_template_directory_uri() . '/assets/vendors/jquery-validation/jquery.validate.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-wow', get_template_directory_uri() . '/assets/vendors/wow/wow.js', [], null, true);
    wp_enqueue_script('rehab-ajaxchimp', get_template_directory_uri() . '/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-appear', get_template_directory_uri() . '/assets/vendors/jquery-appear/jquery.appear.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-owl-carousel', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-magnific-popup', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js', ['rehab-jquery'], null, true);
    wp_enqueue_script('rehab-youtube-popup', get_template_directory_uri() . '/assets/vendors/youtube-popup/youtube-popup.jquery.js', ['rehab-jquery'], null, true);

    // Template Script
    wp_enqueue_script('rehab-paroti-js', get_template_directory_uri() . '/assets/js/paroti.js', ['rehab-jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'rehab_enqueue_scripts');
