<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#f3f4f6">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title>
        <?php if (is_archive()) {
            echo get_the_archive_title();
        } else {
            echo the_title();
        }  ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class("scroll-smooth"); ?>>

    <header class="font-primary w-full absolute z-50">
        <div class="relative z-40">
            <div class="container flex mx-auto py-5 lg:px-10 px-4 justify-between items-center">
                <!-- Logo -->
                <?php
                echo    '<a id="logo-header" href="' . home_url() . '" class="flex">
                            <img src="' . get_template_directory_uri() . '/assets/img/logo.svg" alt="' . get_bloginfo('name') . '" class="h-full w-full max-h-12">
                            <img src="' . get_template_directory_uri() . '/assets/img/payoff.svg" alt="' . get_bloginfo('name') . '" class="logo-payoff h-full w-full max-h-6 ml-4">
                        </a>';
                ?>

                <!-- Hamburgher -->
                <div id="hamburgerButton">
                    <button title="Menu Button" class="font-secondary">
                        <p id="menuOpen">Menu</p>
                        <p id="menuClose">Chiudi <span>X</span></p>
                        <span class="ButtonBg"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="absolute flex-col lg:justify-center justify-between top-0 right-0 w-full h-screen overflow-x-hidden bg-gray-950 z-30 transition-all duration-500">
            <!-- Menu Nav -->
            <nav class="container h-full w-full flex items-center mx-auto lg:px-10 px-4">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'w-full 2xl:text-6xl lg:text-5xl text-4xl font-light',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ol id="%1$s" class="%2$s">%3$s</ol>'
                ));
                ?>
            </nav>
        </div>
    </header>