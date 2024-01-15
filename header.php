<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php $viewport_content = apply_filters('federicotoldo_viewport_content', 'width=device-width, initial-scale=1'); ?>
    <meta name="viewport" content="<?php echo esc_attr($viewport_content); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#1c1917">
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

    <header class="w-full fixed z-50">
        <div class="relative z-40">
            <div class="container flex mx-auto py-5 px-10 justify-between items-center">
                <!-- Logo -->
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'medium');
                if (has_custom_logo()) {
                    echo '<a  href="' . home_url() . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="max-h-12"></a>';
                } else {
                    echo '<a href="' . home_url() . '" class="lg:w-3/12 w-auto font-semibold text-gray-800 lg:hover:text-gray-950 transition-all duration-300">' . get_bloginfo('name') . '</a>';
                };
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
            <nav class="container w-full mx-auto px-10">
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'primary',
                    'container'         =>  false,
                    'menu_class'        => '2xl:text-6xl lg:text-5xl text-4xl',
                    'orderby'           => 'menu_order',
                    'items_wrap'        => '<ol id="%1$s" class="%2$s">%3$s</ol>'
                ));
                ?>
            </nav>
        </div>
    </header>