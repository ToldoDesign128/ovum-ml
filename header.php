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

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favico-ML-macchine.svg" type="image/x-icon">

    <title>
        <?php if (is_archive()) {
            echo the_archive_title();
        } else {
            echo the_title();
        }  ?>
    </title>
    <?php wp_head(); ?>
</head>

<body <?php body_class("scroll-smooth overflow-x-clip"); ?>>

    <header class="font-primary font-light w-full absolute z-50">
        <div class="relative z-40">
            <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md flex mx-auto py-5 px-[26px] justify-between items-center">
                <!-- Logo -->
                <?php
                echo    '<a id="logo-header" href="' . home_url() . '" class="flex">
                            <img src="' . get_template_directory_uri() . '/assets/img/logo.svg" alt="' . get_bloginfo('name') . '" class="h-full w-auto lg:max-h-[60px] max-h-[45px]">
                            <img src="' . get_template_directory_uri() . '/assets/img/payoff.svg" alt="' . get_bloginfo('name') . '" class="logo-payoff h-auto w-full max-h-8 ml-4">
                        </a>';
                ?>

                <!-- Hamburgher -->
                <div id="hamburgerButton">
                    <button title="Menu Button" class="lg:text-[10px] text-[8px] font-secondary font-medium uppercase">
                        <p id="menuOpen">Menu</p>
                        <p id="menuClose">Chiudi <span>X</span></p>
                        <span class="ButtonBg"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="absolute flex-col lg:justify-center justify-between top-0 right-0 w-full h-screen overflow-x-hidden bg-gray-950 z-30 transition-all duration-500">
            <!-- Menu Nav -->
            <nav class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md h-full w-full flex items-end mx-auto lg:pb-[5vh] pb-[11vh] px-[26px]">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'w-full 2xl:text-[100px] 2xl:leading-[100px] lg:text-[80px] lg:leading-[80px] text-[50px] leading-[56px] font-light',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ol id="%1$s" class="%2$s">%3$s</ol>'
                ));
                ?>
            </nav>
        </div>
    </header>