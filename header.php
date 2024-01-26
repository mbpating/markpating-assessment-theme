<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package markpating-assessment-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <!-- SEO Metatag -->
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'markpating-assessment-theme'); ?></a>

        <!-- Header Start -->
        <div class="covid-message">
            <div class="container">
                <div class="covid-text"><?php the_field('notification_message', 'option') ?></div>
                <div class="covid-link">
                    <a class="learn-more" href="<?php the_field('notification_url', 'option') ?>"><?php the_field('notification_url_label', 'option') ?> <span class="icon-arrow-right"></span></a>
                </div>
                <a href="#" class="icon-close removeit"></a>
            </div>
        </div>
        <header class="header">
            <div class="container">
                <div class="header-wrap">
                    <div class="header-logo">
                        <a href="#">
                            <?php
                            the_custom_logo();
                            ?>
                        </a>
                    </div>
                    <div class="header-right">
                        <div class="header-content">
                            <div class="call-us"><span>call us today</span> <a href="tel:<?php the_field('phone_number', 'option') ?>"><?php the_field('phone_number', 'option') ?></a></div>
                            <div class="online-request">
                                <a href="<?php the_field('online_pharmacy_url', 'option') ?>" class="btn btn-secondary">Online Pharmacy</a>
                                <a href="<?php the_field('appointment_url', 'option') ?>" class="btn btn-primary">Request an Appointment</a>
                            </div>
                        </div>
                        <div class="header-bottom">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="menu-text">Menu</span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'menu' => 'header-menu',
                                            'container' => '',
                                            'theme_location' => 'header-menu',
                                            'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                                            'walker' => new Header_Nav_Walker(), // Use the custom Walker class
                                        )
                                    );
                                    ?> </div>
                            </nav>
                            <div class="header-search">
                                <a href="javascript:void(0);" class="icon-search"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="searchbar">
                <div class="container">
                    <div class="searchbar-inner">
                        <input type="text" class="form-control" placeholder="Search here..." />
                        <button type="submit" class="btn search-btn icon-search"></button>
                    </div>
                </div>
            </div>

            <div class="mobile-bottom-header">
                <div class="call-us">
                    <span>call us </span>
                    <a href="tel:9413557707">941-355-7707</a>
                </div>
            </div>
        </header>
        <!-- Header End -->