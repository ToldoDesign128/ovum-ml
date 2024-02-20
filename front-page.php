<?php get_header();

$page_id = get_queried_object_id(); ?>

<!-- Hero -->

<section class="hero h-screen relative">

    <video class="absolute top-0 left-0 w-full h-full object-cover" playsinline autoplay muted loop>

        <source src="<?php echo get_template_directory_uri() . '/assets/img/video.mp4'; ?>" type="video/mp4">

    </video>

    <div class="lg:max-w-screen-xl h-screen mx-auto flex flex-col lg:justify-center justify-between items-center">

        <span class="w-full h-28"></span>

        <h1 class="font-primary xl:w-1/2 lg:w-2/3 lg:text-[100px] lg:leading-[100px] text-[50px] leading-[56px] font-light text-center text-gray-950 z-10 py-6 lg:px-0 px-[26px]"><?php echo esc_html(get_field('home_titolo_sezione_1', $page_id)); ?></h1>

        <div class="lg:w-fit w-full flex lg:flex-row flex-col justify-between text-center body-copy py-6 lg:px-0 px-[26px] lg:mb-0 mb-12">

            <?php

            $pulsante_hero = get_field('home_pulsante_1_sezione_1', $page_id);

            if ($pulsante_hero) :

                $pulsante_hero_url = $pulsante_hero['url'];

                $pulsante_hero_title = $pulsante_hero['title'];

                $pulsante_hero_target = $pulsante_hero['target'] ? $pulsante_hero['target'] : '_self';

            ?>

                <a class="button font-primary font-medium text-gray-950 bg-trasparent border-gray-950 border px-[30px] pt-[20px] pb-[16px] lg:my-4 my-2 mx-2" href="<?php echo esc_url($pulsante_hero_url); ?>" target="<?php echo esc_attr($pulsante_hero_target); ?>">

                    <?php echo esc_html($pulsante_hero_title); ?>

                    <span class="bg-gray-300 mix-blend-multiply"></span>

                </a>

            <?php endif;

            $pulsante_hero2 = get_field('home_pulsante_2_sezione_1', $page_id);

            if ($pulsante_hero2) :

                $pulsante_hero2_url = $pulsante_hero2['url'];

                $pulsante_hero2_title = $pulsante_hero2['title'];

                $pulsante_hero2_target = $pulsante_hero2['target'] ? $pulsante_hero2['target'] : '_self';

            ?>

                <a class="button font-primary font-medium text-gray-50 bg-gray-950 border-gray-950 border px-[30px] pt-[20px] pb-[16px] lg:my-4 my-2 mx-2" href="<?php echo esc_url($pulsante_hero2_url); ?>" target="<?php echo esc_attr($pulsante_hero2_target); ?>">

                    <?php echo esc_html($pulsante_hero2_title); ?>

                    <span class="bg-gray-700 mix-blend-lighten"></span>

                </a>

            <?php endif; ?>

        </div>

    </div>

</section>



<!-- Sezione 2 -->

<section class="lg:max-w-screen-xl mx-auto">



    <?php

    $titolo_sez_2 = get_field('home_titolo_sezione_2', $page_id);

    if ($titolo_sez_2) : ?>

        <!-- sponsor -->

        <div class="animationReveal w-full flex flex-wrap justify-between font-primary py-8 lg:px-10 px-[26px]">

            <?php



            if ($titolo_sez_2) :

            ?>

                <p class="lg:max-w-[18ch] heading-5 font-light text-gray-950"><?php echo esc_html($titolo_sez_2); ?></p>

            <?php endif; ?>



            <div class="lg:w-8/12 lg:flex hidden justify-between lg:py-0">

                <?php

                if (have_rows('home_repeater_sezione_2', $page_id)) :

                    while (have_rows('home_repeater_sezione_2', $page_id)) : the_row();



                        $icona_sez_2 = get_sub_field('icona_repeater_sezione_2', $page_id);

                        $testo_sez_2 = get_sub_field('testo_repeater_sezione_2', $page_id);

                        $link_sez_2 = get_sub_field('link_repeater_sezione_2', $page_id);



                        if ($link_sez_2) :

                            $link_sez_2_url = $link_sez_2['url'];

                            $link_sez_2_title = $link_sez_2['title'];

                            $link_sez_2_target = $link_sez_2['target'] ? $link_sez_2['target'] : '_self'; ?>



                            <a class="lg:w-1/3 flex items-center justify-end lg:mr-0 mr-16" href="<?php echo esc_url($link_sez_2_url); ?>" target="<?php echo esc_attr($link_sez_2_target); ?>">

                                <img class="w-8 lg:mx-4 mx-0 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_sez_2 . '.svg'; ?>" alt="">

                                <p class="lg:text-3xl text-2xl font-bold text-gray-950 lg:hover:text-gray-600 transition-all duration-300"><?php echo esc_html($testo_sez_2); ?></p>

                            </a>



                <?php endif;

                    endwhile;

                endif;

                ?>

            </div>



            <!-- Sponsor mobile -->

            <div class="swiper lg:hidden w-full swiperScrollerSponsor">

                <div class="swiper-wrapper w-full">

                    <?php

                    if (have_rows('home_repeater_sezione_2', $page_id)) :

                        while (have_rows('home_repeater_sezione_2', $page_id)) : the_row();



                            $icona_sez_2 = get_sub_field('icona_repeater_sezione_2', $page_id);

                            $testo_sez_2 = get_sub_field('testo_repeater_sezione_2', $page_id);

                            $link_sez_2 = get_sub_field('link_repeater_sezione_2', $page_id);



                            if ($link_sez_2) :

                                $link_sez_2_url = $link_sez_2['url'];

                                $link_sez_2_title = $link_sez_2['title'];

                                $link_sez_2_target = $link_sez_2['target'] ? $link_sez_2['target'] : '_self'; ?>



                                <a class="swiper-slide w-auto flex items-center" href="<?php echo esc_url($link_sez_2_url); ?>" target="<?php echo esc_attr($link_sez_2_target); ?>">

                                    <img class="w-8 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_sez_2 . '.svg'; ?>" alt="">

                                    <p class="text-3xl font-bold text-gray-950 lg:hover:text-gray-600 transition-all duration-300"><?php echo esc_html($testo_sez_2); ?></p>

                                </a>



                    <?php endif;

                        endwhile;

                    endif;

                    ?>

                </div>

                <!-- Slider button -->

                <div class="arrow-container">

                    <div class="swiper-button-prev rotate-180">

                        <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                            <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                        </svg>

                    </div>

                    <div class="swiper-button-next">

                        <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                            <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                        </svg>

                    </div>

                    <span id="arrowAnimation" class="absolute left-[32px] bottom-0 block bg-white h-5 w-5 z-10"></span>

                </div>

            </div>



        </div>

    <?php endif; ?>



    <!-- Blocco benefici -->

    <div class="animationReveal w-full flex flex-col font-primary font-light lg:px-10 px-[26px] lg:pt-16">

        <?php

        $titolo_2_sez_2 = get_field('home_titolo_2_sezione_2', $page_id);

        if ($titolo_2_sez_2) :

        ?>

            <p class="w-full heading-3 text-gray-950 lg:py-12 py-6 pr-4" style="line-height: 1.1;"><?php echo esc_html($titolo_2_sez_2); ?></p>

            <span class="w-full h-px bg-gray-600"></span>

        <?php endif; ?>

        <?php if (have_rows('home_accordion_sezione_2', $page_id)) : ?>

            <div class="accordion-section w-full flex lg:flex-row flex-col lg:justify-between lg:pt-16 pt-[34px]">

                <div class="accordion-box flex flex-col justify-end lg:w-5/12 w-full lg:py-0 py-8 lg:order-1 order-2">

                    <?php


                    while (have_rows('home_accordion_sezione_2', $page_id)) : the_row();



                        $icona_accordion = get_sub_field('icona_accordion_sezione_2', $page_id);

                        $titolo_accordion = get_sub_field('titolo_accordion_sezione_2', $page_id);

                    ?>

                        <div class="accordion-item">

                            <div class="flex lg:py-0 py-[20px]">

                                <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">

                                <p class="lg:text-[30px] lg:leading-[34px] text-[22px] leading-[28px] text-gray-950"><?php echo esc_html($titolo_accordion); ?></p>

                            </div>

                            <div class="accordion-text">

                                <?php the_sub_field('testo_accordion_sezione_3', $page_id); ?>

                            </div>

                            <span class="h-px w-full bg-gray-400"></span>

                        </div>

                    <?php

                    endwhile;

                    ?>

                </div>

                <div class="accordion-box-img lg:w-1/2 w-full lg:h-[580px] h-[300px] relative overflow-hidden lg:order-2 order-1">

                    <div class="image-box absolute top-0 left-0">

                        <?php

                        if (have_rows('home_accordion_sezione_2', $page_id)) :

                            while (have_rows('home_accordion_sezione_2', $page_id)) : the_row();

                                $img_accordion = get_sub_field('immagine_accordion_sezione_3', $page_id);

                        ?>

                                <img class="image-box-item" src="<?php echo esc_url($img_accordion['url']); ?>" alt="<?php echo esc_attr($img_accordion['alt']); ?>" />

                        <?php

                            endwhile;

                        endif;

                        ?>

                    </div>



                </div>

            </div>
        <?php endif; ?>



    </div>

</section>

<!-- Sezione 3 -->

<section class="lg:max-w-screen-xl mx-auto lg:mt-[150px] mt-[60px]">

    <!-- titolo sezione 3 -->

    <div class="animationReveal w-full flex flex-col font-primary font-light lg:px-10 px-[26px] ">

        <?php

        $titolo_sez_3 = get_field('home_titolo_sezione_3', $page_id);

        if ($titolo_sez_3) :

        ?>

            <p class="lg:w-8/12 w-full lg:text-[75px] lg:leading-[80px] text-[28px] leading-[32px] text-gray-950 pr-4 lg:mb-[25px] mb-[15px]" style="line-height: 1.1;"><?php echo esc_html($titolo_sez_3); ?></p>

            <span class="w-full h-px bg-gray-600"></span>

        <?php endif; ?>

    </div>

    <!-- testo sezione 3 -->

    <div class="w-full flex justify-between font-primary font-light lg:px-10 px-[26px] lg:mt-[45px] mt-[20px]">

        <div class="lg:w-1/2 w-full body-copy">

            <?php the_field('home_testo_sezione_3', $page_id); ?>

        </div>

        <?php

        $pulsante_sez_3 = get_field('home_pulsante_sezione_3', $page_id);

        if ($pulsante_sez_3) :

            $pulsante_sez_3_url = $pulsante_sez_3['url'];

            $pulsante_sez_3_title = $pulsante_sez_3['title'];

            $pulsante_sez_3_target = $pulsante_sez_3['target'] ? $pulsante_sez_3['target'] : '_self';

        ?>

            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-[30px] pt-[20px] pb-[16px]" href="<?php echo esc_url($pulsante_sez_3_url); ?>" target="<?php echo esc_attr($pulsante_sez_3_target); ?>">

                <?php echo esc_html($pulsante_sez_3_title); ?>

                <span class="bg-gray-300 mix-blend-multiply"></span>

            </a>

        <?php endif; ?>

    </div>

    <!-- Repeater sezione 3 -->

    <ol class="repeater w-full lg:flex hidden flex-wrap justify-between font-primary font-light lg:px-10 px-[26px] lg:pt-[90px] pt-[40px]">

        <?php

        if (have_rows('home_repeater_sezione_3')) :

            while (have_rows('home_repeater_sezione_3')) : the_row();

                // Load sub field value.

                $titolo_rep_sez_3 = get_sub_field('titolo_repeater_sezione_3');

                $testo_rep_sez_3 = get_sub_field('testo_repeater_sezione_3');



                if ($titolo_rep_sez_3) : ?>

                    <li class="animationReveal lg:w-1/3 w-full lg:pb-8 lg:pr-[65px] pr-4">

                        <p class="max-w-[15ch] lg:text-[40px] lg:leading-[50px] text-[22px] leading-[28px]"><?php echo esc_html($titolo_rep_sez_3); ?></p>

                        <p class="body-copy lg:py-[30px] py-[15px]"><?php echo esc_html($testo_rep_sez_3); ?></p>

                    </li>

        <?php

                endif;

            endwhile;

        endif; ?>

    </ol>

    <!-- Repeater sezione 3 mobile -->

    <div class="mx-[26px]">

        <div class="swiper lg:hidden w-full swiperScroller ">

            <ol class="repeater swiper-wrapper w-full font-primary font-light py-4">

                <?php

                if (have_rows('home_repeater_sezione_3')) :

                    while (have_rows('home_repeater_sezione_3')) : the_row();

                        // Load sub field value.

                        $titolo_rep_sez_3 = get_sub_field('titolo_repeater_sezione_3');

                        $testo_rep_sez_3 = get_sub_field('testo_repeater_sezione_3'); ?>

                        <li class="animationReveal swiper-slide w-[90vw] py-4">

                            <p class="max-w-[16ch] text-[22px] leading-[28px] tracking-[.44px]"><?php echo esc_html($titolo_rep_sez_3); ?></p>

                            <p class="max-w-[90vw] body-copy py-4"><?php echo esc_html($testo_rep_sez_3); ?></p>

                        </li>

                <?php

                    endwhile;

                endif; ?>

            </ol>

            <!-- Slider button -->

            <div class="arrow-container">

                <div class="swiper-button-prev rotate-180">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <div class="swiper-button-next">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <span id="arrowAnimation" class="absolute left-[32px] bottom-0 block bg-white h-5 w-5 z-10"></span>

            </div>

        </div>

    </div>

    <!-- Pulsante mobile -->

    <div class="animationReveal w-full lg:hidden flex px-[26px] py-8">

        <?php

        $pulsante_sez_3 = get_field('home_pulsante_sezione_3', $page_id);

        if ($pulsante_sez_3) :

            $pulsante_sez_3_url = $pulsante_sez_3['url'];

            $pulsante_sez_3_title = $pulsante_sez_3['title'];

            $pulsante_sez_3_target = $pulsante_sez_3['target'] ? $pulsante_sez_3['target'] : '_self';

        ?>

            <a class="lg:w-auto w-full button h-fit font-medium text-gray-950 text-center body-copy bg-trasparent border-gray-950 border px-[30px] pt-[18px] pb-[18px]" href="<?php echo esc_url($pulsante_sez_3_url); ?>" target="<?php echo esc_attr($pulsante_sez_3_target); ?>">

                <?php echo esc_html($pulsante_sez_3_title); ?>

                <span class="bg-gray-300 mix-blend-multiply"></span>

            </a>

        <?php endif; ?>

    </div>

</section>

<!-- Sezione Mele -->

<section class="lg:mt-[88px] mt-[30px] overflow-x-clip">

    <div class="animationReveal lg:max-w-screen-xl font-primary font-light mx-auto lg:px-10 px-[26px]">

        <p class="w-8/12 lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] text-gray-950 pb-[25px]">Mele e meleti</p>

        <span class="block w-full h-px bg-gray-600"></span>



        <div class="w-full flex justify-between font-primary font-light pt-[25px]">

            <div class="lg:w-1/2 w-full body-copy">

                <p>Una linea per le mele, sviluppata insieme ai produttori sulle loro esigenze economiche e funzionali. Alte prestazioni, consumi bassi, maneggevolezza e personalizzazione grazie al sistema brevettato, alla struttura dei telai e alla costruzione modulare.</p>

            </div>

            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-[30px] pt-[20px] pb-[16px]" href="mele">

                Guarda tutto

                <span class="bg-gray-300 mix-blend-multiply"></span>

            </a>

        </div>

    </div>

    <!-- Loop Mele -->

    <div class="lg:pt-[90px] pt-[40px] lg:max-w-screen-xl mx-auto lg:px-10 px-[26px]">

        <div class="swiper overflow-visible swiperHomeMele">

            <div class="swiper-wrapper items-center">

                <?php

                $loop = new WP_Query(array(

                    'post_type'         => 'mele',

                    'post_status'       => 'publish',

                    'orderby'           => 'date',

                    'order'             => 'DESC',

                    'posts_per_page'    => 999,

                ));

                while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="swiper-slide lg:hover:h-[110%] transition-[height] duration-300">

                        <a href="<?php echo the_permalink(); ?>" class="h-full block img-clip relative group bg-gray-950 mb-[30px]">

                            <div class="absolute top-px left-px img-clip bg-white group" style="height: calc(100% - 2px); width: calc(100% - 2px);">

                                <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px] mt-[10px]">

                                    <?php the_post_thumbnail('post-thumb-small'); ?>

                                </div>

                                <div class="absolute lg:block hidden top-[285px] right-[10px] h-[30px] w-[30px] rotate-[135deg] opacity-0 group-hover:opacity-100 transition-opacity duration-500">

                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">

                                        <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />

                                    </svg>

                                </div>

                                <div class="lg:px-[26px] px-[20px]">

                                    <div class="font-primary font-light lg:text-[36px] text-[22px] lg:leading-[44px] leading-[28px]">

                                        <?php the_title() ?>

                                    </div>

                                    <?php if ('prodotto_mela_sottotitolo_hero') :

                                        $sottotitolo_hero = get_field('prodotto_mela_sottotitolo_hero') ?>

                                        <p class="font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px]"><?php echo esc_html($sottotitolo_hero) ?></p>

                                    <?php endif; ?>

                                    <div class="lg:mt-[26px] mt-[23px]">

                                        <?php if (have_rows('prodotto_mela_gruppo_scheda_tecnica')) : ?>

                                            <?php while (have_rows('prodotto_mela_gruppo_scheda_tecnica')) : the_row();

                                                $scheda_releated_1 = get_sub_field('numero_testate');

                                                $scheda_releated_2 = get_sub_field('dischi_per_testata');

                                                $scheda_releated_3 = get_sub_field('larghezza_testata');

                                                $scheda_releated_4 = get_sub_field('movimenti_idraulici');

                                            ?>

                                                <div class="w-full flex flex-wrap">

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_1); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_2); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_3); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_4); ?></p>

                                                    </div>

                                                </div>

                                        <?php

                                            endwhile;

                                        endif; ?>

                                    </div>

                                    <p class="uppercase font-secondary font-medium lg:text-[12px] text-[10px] lg:leading-[13px] leading-[10px] opacity-50 lg:pt-[26px] pt-[20px]">MELA</p>

                                </div>

                            </div>

                        </a>

                    </div>



                <?php

                endwhile;

                wp_reset_postdata(); ?>

            </div>

            <!-- Slider button -->

            <div class="arrow-container">

                <div class="swiper-button-prev rotate-180">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <div class="swiper-button-next">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <span id="arrowAnimation" class="absolute left-[32px] bottom-0 block bg-white h-5 w-5 z-10"></span>

            </div>

        </div>

    </div>

</section>

<!-- Sezione Uva -->

<section class="lg:my-[150px] my-[60px] overflow-x-clip">

    <div class="animationReveal lg:max-w-screen-xl font-primary font-light mx-auto lg:px-10 px-[26px]">

        <p class="w-8/12 lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] text-gray-950 pb-[25px]">Uva e vigneto</p>

        <span class="block w-full h-px bg-gray-600"></span>



        <div class="w-full flex justify-between font-primary font-light pt-[25px]">

            <div class="lg:w-1/2 w-full body-copy">

                <p>Sviluppata in collaborazione con i viticoltori, la linea uva risponde a tutte le esigenze di pergole, spalliere e tendoni. Per agire efficacemente su tutte le varietà con alte prestazioni, consumi bassi e facilità d’uso, dal pre fioritura alla vendemmia.</p>

            </div>

            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-[30px] pt-[20px] pb-[16px]" href="uva">

                Guarda tutto

                <span class="bg-gray-300 mix-blend-multiply"></span>

            </a>

        </div>

    </div>

    <!-- Loop Uva -->

    <div class="lg:pt-[90px] pt-[40px] lg:max-w-screen-xl mx-auto lg:px-10 px-[26px]">

        <div class="swiper overflow-visible swiperHomeMele">

            <div class="swiper-wrapper items-center">

                <?php

                $loop = new WP_Query(array(

                    'post_type'         => 'uva',

                    'post_status'       => 'publish',

                    'orderby'           => 'date',

                    'order'             => 'DESC',

                    'posts_per_page'    => 999,

                ));

                while ($loop->have_posts()) : $loop->the_post(); ?>

                    <div class="swiper-slide">

                        <a href="<?php echo the_permalink(); ?>" class="h-full block img-clip relative group bg-gray-950 mb-[30px]">

                            <div class="absolute top-px left-px img-clip bg-white group" style="height: calc(100% - 2px); width: calc(100% - 2px);">

                                <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px] mt-[10px]">

                                    <?php the_post_thumbnail('post-thumb-small'); ?>

                                </div>

                                <div class="absolute lg:block hidden top-[285px] right-[10px] h-[30px] w-[30px] rotate-[135deg] opacity-0 group-hover:opacity-100 transition-opacity duration-500">

                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">

                                        <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />

                                    </svg>

                                </div>

                                <div class="lg:px-[26px] px-[20px]">

                                    <div class="font-primary font-light lg:text-[36px] text-[22px] lg:leading-[44px] leading-[28px]">

                                        <?php the_title() ?>

                                    </div>

                                    <?php if ('prodotto_uva_sottotitolo_hero') :

                                        $sottotitolo_uva = get_field('prodotto_uva_sottotitolo_hero') ?>

                                        <p class="font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px]"><?php echo esc_html($sottotitolo_uva) ?></p>

                                    <?php endif; ?>

                                    <div class="lg:mt-[26px] mt-[23px]">

                                        <?php if (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : ?>

                                            <?php while (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : the_row();

                                                $scheda_uva_1 = get_sub_field('numero_testate');

                                                $scheda_uva_2 = get_sub_field('dischi_per_testata');

                                                $scheda_uva_3 = get_sub_field('larghezza_testata');

                                                $scheda_uva_4 = get_sub_field('movimenti_idraulici');

                                            ?>

                                                <div class="w-full flex flex-wrap">

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_1); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_2); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_3); ?></p>

                                                    </div>

                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">

                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>

                                                        <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_4); ?></p>

                                                    </div>

                                                </div>

                                        <?php

                                            endwhile;

                                        endif; ?>

                                    </div>

                                    <p class="uppercase font-secondary font-medium lg:text-[12px] text-[10px] lg:leading-[13px] leading-[10px] opacity-50 lg:pt-[26px] pt-[20px]">UVA</p>

                                </div>

                            </div>

                        </a>

                    </div>



                <?php

                endwhile;

                wp_reset_postdata(); ?>

            </div>

            <!-- Slider button -->

            <div class="arrow-container">

                <div class="swiper-button-prev rotate-180">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <div class="swiper-button-next">

                    <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">

                        <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />

                    </svg>

                </div>

                <span id="arrowAnimation" class="absolute left-[32px] bottom-0 block bg-white h-5 w-5 z-10"></span>

            </div>

        </div>

    </div>

</section>

<!-- Sezione testimonianze -->

<?php get_template_part("template-parts/testimonianze"); ?>

<!-- Footer -->

<?php get_footer(); ?>