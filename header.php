<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <div class="page-wrapper">
        <header class="main-header">
            <!-- top bar -->
            <div class="topbar">
                <div class="container-fluid">
                    <div class="topbar__inner">
                        <ul class="list-unstyled topbar__info">
                            <li>
                                <i class="fa fa-map"></i>
                                <a href="#"><?php echo esc_html(get_theme_mod('topbar_address', '88 Brooklyn Golden Street. New York')); ?></a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-open"></i>
                                <a href="mailto:<?php echo esc_attr(get_theme_mod('topbar_email', 'needhelp@company.com')); ?>">
                                    <?php echo esc_html(get_theme_mod('topbar_email', 'needhelp@company.com')); ?>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                <a href="tel:<?php echo esc_attr(get_theme_mod('topbar_phone', '+1 (307) 776-0608')); ?>">
                                    <?php echo esc_html(get_theme_mod('topbar_phone', '+1 (307) 776-0608')); ?>
                                </a>
                            </li>
                        </ul><!-- /.topbar__info -->

                        <div class="topbar__social">
                            <a href="<?php echo esc_url(get_theme_mod('twitter_url', '#')); ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('facebook_url', '#')); ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?php echo esc_url(get_theme_mod('instagram_url', '#')); ?>"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div><!-- /.topbar__inner -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- end top bar -->


            <nav class="main-menu sticky-header">
                <div class="container-fluid">
                    <!-- Logo component -->
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="main-header__logo">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        } else { ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-dark.png'); ?>" alt="<?php bloginfo('name'); ?>">
                        <?php } ?>
                    </a>

                    <!-- main navigation links -->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class'     => 'main-menu__list',
                        'container'      => false,
                        'add_li_class'   => 'menu-item',
                    ));
                    ?>
                    <!-- end navigation links -->

                    <div class="main-menu__right">
                        <div class="main-menu__cta">

                        </div><!-- /.main-menu__cta -->
                        <a href="donations-details.html" class="thm-btn thm-btn--two ">
                            <span>Donate Now</span>
                            <i class="fa fa-heart"></i>
                        </a><!-- /.thm-btn--two -->

                        <a href="#" class="main-header__btn search-toggler">
                            <i class="paroti-icon-magnifying-glass"></i>
                        </a>

                        <a href="#" class="main-header__toggler mobile-nav__toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div><!-- /.main-menu__right -->
                </div><!-- /.container-fluid -->
            </nav><!-- /.main-menu -->
        </header>