<?php
/**
 * Enqueue styles for the Rehab theme.
 */

function rehab_enqueue_styles() {
    // Favicons
    echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_template_directory_uri() . '/assets/images/favicons/apple-touch-icon.png">';
    echo '<link rel="icon" type="image/png" sizes="32x32" href="' . get_template_directory_uri() . '/assets/images/favicons/favicon-32x32.png">';
    echo '<link rel="icon" type="image/png" sizes="16x16" href="' . get_template_directory_uri() . '/assets/images/favicons/favicon-16x16.png">';
    echo '<link rel="manifest" href="' . get_template_directory_uri() . '/assets/images/favicons/site.webmanifest">';
    
    // Google Fonts
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">';

    // Plugin CSS
    wp_enqueue_style('rehab-bootstrap-css', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('rehab-fontawesome-css', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css');
    wp_enqueue_style('rehab-tiny-slider-css', get_template_directory_uri() . '/assets/vendors/tiny-slider/dist/tiny-slider.css');
    wp_enqueue_style('rehab-owl-carousel-css', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.carousel.min.css');
    wp_enqueue_style('rehab-owl-theme-css', get_template_directory_uri() . '/assets/vendors/owl-carousel/owl.theme.default.min.css');
    wp_enqueue_style('rehab-animate-css', get_template_directory_uri() . '/assets/vendors/animate/animate.min.css');
    wp_enqueue_style('rehab-paroti-icons-css', get_template_directory_uri() . '/assets/vendors/paroti-icons/style.css');
    wp_enqueue_style('rehab-magnific-popup-css', get_template_directory_uri() . '/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css');
    wp_enqueue_style('rehab-youtube-popup-css', get_template_directory_uri() . '/assets/vendors/youtube-popup/youtube-popup.css');

    // Template CSS
    wp_enqueue_style('rehab-paroti-css', get_template_directory_uri() . '/assets/css/paroti.css');
}
add_action('wp_head', 'rehab_enqueue_styles');
