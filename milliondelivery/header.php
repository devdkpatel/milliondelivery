<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Million Delevery</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="header-top">
            <div class="container">
                <div class="header-top-inner">
                    <div class="top-header-contact">
                        <a href="tel:+1 (888) 645 4661">+1 (888) 645 4661</a>
                        <a href="mailto:info@milliondeliveries.com">info@milliondeliveries.com</a>
                    </div>
                    <div class="header-sococal-media">
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook"></a> 
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.svg" alt="Instagram"></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="LinkedIn"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="main-header">
                <div class="header-menu">
                    <div class="logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ste-logo.svg" alt="Logo">
                    </div>
                    <div class="mobile-menu-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <nav>
                        <div class="mobile-nav-header">
                            <div class="mobile-logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ste-logo.svg" alt="Logo">
                            </div>
                            <div class="mobile-close-btn">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/close.svg" alt="Close">
                            </div>
                        </div>
                        <ul class="main-menu">
                        <?php
                            wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container' => false,
                                'items_wrap' => '%3$s'
                            )
                            );
                            ?>
                            </ul>
                    </nav>
                </div>
                <div class="quto-btn">
                    <a href="#">Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt=""></a>
                    <a href="#">Track Your Order <img src="<?php echo get_template_directory_uri(); ?>/assets/images/track-order.svg" alt=""></a>
                </div>

            </div>
        </div>

    </header>
