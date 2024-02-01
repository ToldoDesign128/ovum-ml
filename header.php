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

    <header class="w-full fixed bg-white z-50">
        <div class="relative z-40">
            <div class="container flex mx-auto py-5 px-10 justify-between items-center">
                <!-- Logo -->
                <?php
                echo '<a  href="' . home_url() . '"><img src="' . get_template_directory_uri() . '/assets/img/Logo-ML.svg" alt="' . get_bloginfo('name') . '" class="h-full w-full max-h-12"></a>';
                ?>

                <!-- Hamburgher -->
                <div id="hamburgerButton">
                    <button title="Menu Button">
                        <p id="menuOpen">Menu</p>
                        <p id="menuClose">Chiudi <span>X</span></p>
                        <span class="ButtonBg"></span>
                    </button>
                </div>
            </div>
        </div>
        <div id="menu" class="absolute hidden flex-col lg:justify-center justify-between top-0 right-0 w-full h-screen overflow-x-hidden bg-gray-950 z-30 transition-all duration-500">
            <!-- Menu Nav -->
            <nav class="container h-full w-full flex items-center mx-auto px-10">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => 'w-full 2xl:text-6xl lg:text-5xl text-4xl',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ol id="%1$s" class="%2$s">%3$s</ol>'
                ));
                ?>
            </nav>
        </div>
    </header>