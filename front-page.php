<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- Hero -->
<section class="hero h-screen relative">
    <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
        <source src="<?php echo get_template_directory_uri() . '/assets/img/video.mp4'; ?>" type="video/mp4">
    </video>
    <div class="container h-screen mx-auto flex flex-col lg:justify-center justify-between items-center">
        <span class="w-full h-28"></span>
        <h1 class="font-primary xl:w-1/2 lg:w-2/3 lg:text-8xl md:text-6xl text-5xl font-light text-center text-gray-950 z-10 py-6 lg:px-0 px-4"><?php echo esc_html(get_field('home_titolo_sezione_1', $page_id)); ?></h1>
        <div class="lg:w-fit w-full flex lg:flex-row flex-col justify-between text-center text-lg py-6 lg:px-0 px-4 lg:mb-0 mb-12">
            <?php
            $pulsante_hero = get_field('home_pulsante_1_sezione_1', $page_id);
            if ($pulsante_hero) :
                $pulsante_hero_url = $pulsante_hero['url'];
                $pulsante_hero_title = $pulsante_hero['title'];
                $pulsante_hero_target = $pulsante_hero['target'] ? $pulsante_hero['target'] : '_self';
            ?>
                <a class="button font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 lg:py-2 py-6 lg:my-4 my-2 mx-2" href="<?php echo esc_url($pulsante_hero_url); ?>" target="<?php echo esc_attr($pulsante_hero_target); ?>">
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
                <a class="button font-medium text-gray-50 bg-gray-950 border-gray-950 border px-8 lg:py-2 py-6 lg:my-4 my-2 mx-2" href="<?php echo esc_url($pulsante_hero2_url); ?>" target="<?php echo esc_attr($pulsante_hero2_target); ?>">
                    <?php echo esc_html($pulsante_hero2_title); ?>
                    <span class="bg-gray-700 mix-blend-lighten"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Sezione 2 -->
<section class="container mx-auto">
    <!-- sponsor -->
    <div class="w-full flex flex-wrap justify-between font-primary py-8 lg:px-10 px-4">
        <?php
        $titolo_sez_2 = get_field('home_titolo_sezione_2', $page_id);
        if ($titolo_sez_2) :
        ?>
            <p class="lg:max-w-[18ch] lg:text-2xl text-xl font-light text-gray-950"><?php echo esc_html($titolo_sez_2); ?></p>
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

                        <a class="w-auto flex items-center lg:mr-0 mr-16" href="<?php echo esc_url($link_sez_2_url); ?>" target="<?php echo esc_attr($link_sez_2_target); ?>">
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
            <div class="swiper-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" alt="">
            </div>
            <div class="swiper-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="rotate-180" alt="">
            </div>
        </div>

    </div>
    <!-- Blocco benefici -->
    <div class="w-full flex flex-col font-primary font-light lg:px-10 px-4 lg:pt-16">
        <?php
        $titolo_2_sez_2 = get_field('home_titolo_2_sezione_2', $page_id);
        if ($titolo_2_sez_2) :
        ?>
            <p class="w-full lg:text-5xl text-3xl text-gray-950 lg:py-12 py-6 pr-4" style="line-height: 1.1;"><?php echo esc_html($titolo_2_sez_2); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>
        <div class="accordion-section w-full flex lg:flex-row flex-col lg:py-16 py-0 pt-16">
            <div class="accordion-box lg:w-1/2 w-full lg:pr-[15%] lg:py-0 py-8 lg:order-1 order-2">
                <?php
                if (have_rows('home_accordion_sezione_2', $page_id)) :
                    while (have_rows('home_accordion_sezione_2', $page_id)) : the_row();

                        $icona_accordion = get_sub_field('icona_accordion_sezione_2', $page_id);
                        $titolo_accordion = get_sub_field('titolo_accordion_sezione_2', $page_id);
                ?>
                        <div class="accordion-item">
                            <div class="flex">
                                <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">
                                <p class="lg:text-2xl text-xl text-gray-950 py-4"><?php echo esc_html($titolo_accordion); ?></p>
                            </div>
                            <div class="accordion-text">
                                <?php the_sub_field('testo_accordion_sezione_3', $page_id); ?>
                            </div>
                            <span class="h-px w-full bg-gray-400"></span>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="accordion-box-img lg:w-1/2 w-full lg:h-auto h-[300px] relative overflow-hidden lg:order-2 order-1">
                <div class="image-box absolute lg:top-[-50%] top-0 left-0">
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

    </div>
</section>
<!-- Sezione 3 -->
<section class="container mx-auto">
    <!-- titolo sezione 3 -->
    <div class="w-full flex flex-col font-primary font-light lg:px-10 px-4 lg:py-8 py-4">
        <?php
        $titolo_sez_3 = get_field('home_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="max-w-[18ch] lg:text-5xl text-3xl text-gray-950 lg:py-12 py-6 pr-4" style="line-height: 1.1;"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>
    </div>
    <!-- testo sezione 3 -->
    <div class="w-full flex justify-between font-primary font-light lg:px-10 px-4 lg:py-8 py-4">
        <div class="lg:w-2/5 w-full text-lg">
            <?php the_field('home_testo_sezione_3', $page_id); ?>
        </div>
        <?php
        $pulsante_sez_3 = get_field('home_pulsante_sezione_3', $page_id);
        if ($pulsante_sez_3) :
            $pulsante_sez_3_url = $pulsante_sez_3['url'];
            $pulsante_sez_3_title = $pulsante_sez_3['title'];
            $pulsante_sez_3_target = $pulsante_sez_3['target'] ? $pulsante_sez_3['target'] : '_self';
        ?>
            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="<?php echo esc_url($pulsante_sez_3_url); ?>" target="<?php echo esc_attr($pulsante_sez_3_target); ?>">
                <?php echo esc_html($pulsante_sez_3_title); ?>
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        <?php endif; ?>
    </div>
    <!-- Repeater sezione 3 -->
    <ol class="repeater w-full lg:flex hidden flex-wrap justify-between font-primary font-light lg:px-10 px-4 lg:py-8 py-4">
        <?php
        if (have_rows('home_repeater_sezione_3')) :
            while (have_rows('home_repeater_sezione_3')) : the_row();
                // Load sub field value.
                $titolo_rep_sez_3 = get_sub_field('titolo_repeater_sezione_3');
                $testo_rep_sez_3 = get_sub_field('testo_repeater_sezione_3'); ?>
                <li class="lg:w-1/3 w-full py-4 lg:pr-24 pr-4">
                    <p class="max-w-[16ch] lg:text-4xl text-2xl"><?php echo esc_html($titolo_rep_sez_3); ?></p>
                    <p class="lg:text-lg text-lg lg:py-8 py-4"><?php echo esc_html($testo_rep_sez_3); ?></p>
                </li>
        <?php
            endwhile;
        endif; ?>
    </ol>

    <!-- Repeater sezione 3 mobile -->
    <div class="swiper lg:hidden w-full swiperScroller">
        <ol class="repeater swiper-wrapper w-full font-primary font-light px-4 py-4">
            <?php
            if (have_rows('home_repeater_sezione_3')) :
                while (have_rows('home_repeater_sezione_3')) : the_row();
                    // Load sub field value.
                    $titolo_rep_sez_3 = get_sub_field('titolo_repeater_sezione_3');
                    $testo_rep_sez_3 = get_sub_field('testo_repeater_sezione_3'); ?>
                    <li class="swiper-slide w-[90vw] py-4">
                        <p class="max-w-[16ch] text-2xl"><?php echo esc_html($titolo_rep_sez_3); ?></p>
                        <p class="max-w-[90vw] text-lg py-4"><?php echo esc_html($testo_rep_sez_3); ?></p>
                    </li>
            <?php
                endwhile;
            endif; ?>
        </ol>
        <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full rotate-180" alt="">
        </div>
    </div>

    <!-- Pulsante mobile -->
    <div class="w-full lg:hidden flex px-4 py-8">
        <?php
        $pulsante_sez_3 = get_field('home_pulsante_sezione_3', $page_id);
        if ($pulsante_sez_3) :
            $pulsante_sez_3_url = $pulsante_sez_3['url'];
            $pulsante_sez_3_title = $pulsante_sez_3['title'];
            $pulsante_sez_3_target = $pulsante_sez_3['target'] ? $pulsante_sez_3['target'] : '_self';
        ?>
            <a class="lg:w-auto w-full button h-fit font-medium text-gray-950 text-center text-lg bg-trasparent border-gray-950 border px-8 lg:py-4 py-6" href="<?php echo esc_url($pulsante_sez_3_url); ?>" target="<?php echo esc_attr($pulsante_sez_3_target); ?>">
                <?php echo esc_html($pulsante_sez_3_title); ?>
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        <?php endif; ?>
    </div>

</section>
<!-- Sezione testimonianze -->
<section class="container mx-auto px-4 mt-16">
    <p class="w-full text-center lg:text-5xl text-3xl font-primary font-light lg:py-8 py-0">Cosa dicono i nostri clienti</p>
    <div class="swiper swiperTestimonial">
        <div class="swiper-wrapper">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'testimonials',
                'post_status'       => 'publish',
                'orderby'           => 'date',
                'order'             => 'DESC',
                'posts_per_page'    => 999,
            ));
    
            while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="swiper-slide font-primary font-light flex flex-col items-center">
                    <?php
                    $recensione_testo = get_field('testo_recensione');
                    if ($recensione_testo) :
                    ?>
                        <p class="text-center lg:text-3xl text-2xl border-b-2 border-gray-300 py-8"><?php echo esc_html($recensione_testo) ?></p>
                    <?php endif;
                    $recensione_nome = get_field('nome_e_cognome');
                    if ($recensione_nome) :
                    ?>
                        <p class="self-end text-lg font-medium pt-8"><?php echo esc_html($recensione_nome) ?></p>
                    <?php endif;
                    $recensione_ruolo = get_field('ruolo_e_nome_della_ditta');
                    if ($recensione_ruolo) :
                    ?>
                        <p class="self-end text-[16px]"><?php echo esc_html($recensione_ruolo) ?></p>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
    
        </div>
        <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full rotate-180" alt="">
        </div>
    </div>
</section>
<?php get_footer(); ?>