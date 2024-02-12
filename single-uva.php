<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- hero -->
<section class="hero xl:py-24 lg:py-16">
    <div class="h-full max-h-min container flex flex-wrap justify-between items-center mx-auto xl:py-32 lg:py-28 lg:lg:px-10 px-[26px]">
        <div class="lg:w-1/2 w-full font-primary lg:pr-24 lg:order-1 order-2">
            <p class="uppercase text-sm font-secondary font-medium">Uva</p>
            <h1 class="lg:text-7xl text-4xl font-light lg:py-4 py-1"><?php the_title(); ?></h1>
            <?php if ('prodotto_uva_sottotitolo_hero') :
                $sottotitolo_hero = get_field('prodotto_uva_sottotitolo_hero', $page_id) ?>
                <p class="lg:text-3xl text-xl font-light"><?php echo esc_html($sottotitolo_hero) ?></p>
            <?php endif; ?>
            <?php if ('prodotto_uva_testo_hero') :
                $testo_hero = get_field('prodotto_uva_testo_hero', $page_id) ?>
                <p class="lg:text-xl text-[16px] font-light tracking-[0.32px] leading-[22px] py-8"><?php echo esc_html($testo_hero) ?></p>
                <ul class="w-full">

                    <?php endif;
                if (have_rows('prodotto_uva_repeater_hero')) :
                    while (have_rows('prodotto_uva_repeater_hero')) : the_row();
                        // Load sub field value.
                        $icon_rep_hero = get_sub_field('repeater_hero_icona', $page_id);
                        $titolo_rep_hero = get_sub_field('repeater_hero_testo', $page_id); ?>

                        <li class="lg:w-full font-light lg:text-xl text-[16px] lg:tracking-[0.4px] lg:leading-[32px] tracking-[0.32px] leading-[22px] flex lg:py-2 py-1 lg:pr-24">
                            <img class="w-4 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icon_rep_hero . '.svg'; ?>" alt="">
                            <?php echo esc_html($titolo_rep_hero) ?>
                        </li>
                <?php
                    endwhile;
                endif; ?>
                </ul>
        </div>
        <div class="lg:w-1/2 w-full lg:order-2 order-1 lg:my-0 mt-32 mb-16">
            <div class="h-full lg:max-h-[560px] max-h-80 overflow-y-hidden img-clip">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Indicatori Desktop -->
    <ul class="container lg:flex hidden justify-between font-secondary mx-auto lg:px-10 px-[26px]">
        <?php if ('prodotto_uva_pressione_hero') :
            $pressione = get_field('prodotto_uva_pressione_hero', $page_id) ?>
            <li class="w-auto py-2">
                <p class="lg:text-5xl font-medium leading-[21px]"><?php echo esc_html($pressione) ?><span class="lg:text-xl uppercase ml-4">BAR</span></p>
                <p class="uppercase text-[12px] leading-[13px]">PRESSIONE DI LAVORO</p>
            </li>
        <?php endif;
        if ('prodotto_uva_impulsi_hero') :
            $impulsi = get_field('prodotto_uva_impulsi_hero', $page_id) ?>
            <li class="w-auto py-2">
                <p class="lg:text-5xl font-medium leading-[21px]"><?php echo esc_html($impulsi) ?></p>
                <p class="uppercase text-[12px] leading-[13px]">Impulsi al minuto</p>
            </li>
        <?php endif;
        if ('prodotto_uva_potenza_hero') :
            $potenza = get_field('prodotto_uva_potenza_hero', $page_id) ?>
            <li class="w-auto py-2">
                <p class="lg:text-5xl font-medium leading-[21px]"><?php echo esc_html($potenza) ?><span class="lg:text-xl uppercase ml-4">CV</span></p>
                <p class="uppercase text-[12px] leading-[13px]">Potenza trattrice</p>
            </li>
        <?php endif;
        if ('prodotto_uva_velocita_hero') :
            $velocita = get_field('prodotto_uva_velocita_hero', $page_id) ?>
            <li class="w-auto py-2">
                <p class="lg:text-5xl font-medium leading-[21px]"><?php echo esc_html($velocita) ?><span class="lg:text-xl uppercase ml-4">KM/H</span></p>
                <p class="uppercase text-[12px] leading-[13px]">Velocità di avanzamento</p>
            </li>
        <?php endif; ?>
    </ul>

    <!-- Indicatori Mobile -->
    <div class="swiper w-full lg:hidden flex pl-4 py-8 swiperScrollerSingle">
        <ul class="swiper-wrapper w-full font-secondary font-medium">
            <?php if ('prodotto_uva_pressione_hero') :
                $pressione = get_field('prodotto_uva_pressione_hero', $page_id) ?>
                <li class="swiper-slide w-auto">
                    <p class="text-4xl"><?php echo esc_html($pressione) ?><span class="lg:text-xl uppercase ml-4">BAR</span></p>
                    <p class="uppercase text-sm">PRESSIONE DI LAVORO</p>
                </li>
            <?php endif;
            if ('prodotto_uva_impulsi_hero') :
                $impulsi = get_field('prodotto_uva_impulsi_hero', $page_id) ?>
                <li class="swiper-slide w-auto">
                    <p class="text-4xl"><?php echo esc_html($impulsi) ?></p>
                    <p class="uppercase text-sm">Impulsi al minuto</p>
                </li>
            <?php endif;
            if ('prodotto_uva_potenza_hero') :
                $potenza = get_field('prodotto_uva_potenza_hero', $page_id) ?>
                <li class="swiper-slide w-auto">
                    <p class="text-4xl"><?php echo esc_html($potenza) ?><span class="lg:text-xl uppercase ml-4">CV</span></p>
                    <p class="uppercase text-sm">Potenza trattrice</p>
                </li>
            <?php endif;
            if ('prodotto_uva_velocita_hero') :
                $velocita = get_field('prodotto_uva_velocita_hero', $page_id) ?>
                <li class="swiper-slide w-auto">
                    <p class="text-4xl"><?php echo esc_html($velocita) ?><span class="lg:text-xl uppercase ml-4">KM/H</span></p>
                    <p class="uppercase text-sm">Velocità di avanzamento</p>
                </li>
            <?php endif; ?>
        </ul>
        <div class="swiper-button-prev">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/acf/arrow-small-left.svg" class="h-12 w-full rotate-180" alt="">
        </div>
    </div>
</section>
<!-- Sezione 2 -->
<section class="w-full">
    <!-- Gallery -->
    <div class="container mx-auto lg:px-10 px-[26px]">
        <?php
        $gallery_sez_2 = get_field('prodotto_uva_galleria_sezione_2');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($gallery_sez_2) : ?>
            <div class="swiper my-12 py-12 w-full swiperGallery">
                <!-- Slider container -->
                <ul class="swiper-wrapper">
                    <?php foreach ($gallery_sez_2 as $image_id) : ?>
                        <li class="swiper-slide img-clip">
                            <?php echo wp_get_attachment_image($image_id, $size); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <!-- Slider button -->
                <div class="swiper-button-prev">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                        <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
                    </svg>
                </div>
                <div class="swiper-button-next rotate-180">
                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                        <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
                    </svg>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- scroller repeater -->
    <section class="container mx-auto lg:px-10 px-[26px]">
        <section class="swiper swiperRepeater">
            <ul class="swiper-wrapper">
                <?php
                if (have_rows('prodotto_uva_repeater_sezione_2')) :
                    while (have_rows('prodotto_uva_repeater_sezione_2')) : the_row();
                        // Load sub field value.
                        $icona_rep = get_sub_field('prodotto_uva_icona_repeater', $page_id);
                        $titolo_rep = get_sub_field('prodotto_uva_titolo_repeater', $page_id);
                        $testo_rep = get_sub_field('prodotto_uva_testo_repeater', $page_id); ?>
                        <li class="swiper-slide flex flex-col items-start font-primary font-light pr-24">
                            <img class="max-h-8 my-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_rep . '.svg'; ?>" alt="">
                            <p class="w-full text-3xl leading-[34px] my-4"><?php echo esc_html($titolo_rep); ?></p>
                            <p class="w-full text-[16px] tracking-[0.32px] leading-[22px]"><?php echo esc_html($testo_rep); ?></p>
                        </li>
                <?php
                    endwhile;
                endif; ?>
            </ul>
            <!-- Slider button -->
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                    <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
                </svg>
            </div>
            <div class="swiper-button-next rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                    <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
                </svg>
            </div>
        </section>
    </section>
</section>
<!-- Sezione 3 -->
<section class="w-full py-12">
    <!--Cosa distingue il modello -->
    <div class="container w-full flex flex-col mx-auto font-primary font-light lg:px-10 px-[26px] pt-12">
        <?php
        $titolo_sez_3 = get_field('prodotto_uva_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="w-[14ch] lg:text-5xl text-4xl text-gray-950 lg:py-12 py-6"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>

        <div class="w-full flex justify-between font-primary font-light lg:py-8 py-8">
            <div class="lg:w-2/5 w-full text-lg">
                <?php the_field('prodotto_uva_testo_sezione_3', $page_id); ?>
            </div>
            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="#scheda-tecnica">
                Scheda tecnica
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        </div>
        <!-- Accordion -->
        <div class="accordion-section w-full flex lg:flex-row flex-col lg:py-16 py-0 lg:pt-16 pt-4">
            <div class="accordion-box lg:w-1/2 w-full lg:pr-[15%] lg:py-0 py-8 lg:order-1 order-2">
                <?php
                if (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) :
                    while (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) : the_row();

                        $icona_accordion = get_sub_field('prodotto_uva_icona_accordion_1', $page_id);
                        $titolo_accordion = get_sub_field('prodotto_uva_titolo_accordion_1', $page_id);
                ?>
                        <div class="accordion-item">
                            <div class="flex">
                                <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">
                                <p class="lg:text-2xl text-[22px] text-gray-950 py-4"><?php echo esc_html($titolo_accordion); ?></p>
                            </div>
                            <div class="accordion-text">
                                <?php the_sub_field('prodotto_uva_testo_accordion_1', $page_id); ?>
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
                    if (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) :
                        while (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) : the_row();
                            $img_accordion = get_sub_field('prodotto_uva_immagine_accordion_1', $page_id);
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
<!-- Gallery -->
<section class="container lg:px-10 px-[26px] swiper swiperGallery2">
    <?php if (have_rows('prodotto_uva_galleria_video')) : ?>
        <ul class="swiper-wrapper">
            <?php while (have_rows('prodotto_uva_galleria_video')) : the_row();
                $gallery_sellector = get_sub_field('gallery_selector');
                $gallery_image = get_sub_field('immagine_galleria');

                if ($gallery_sellector == 'Immagine') { ?>
                    <li class="swiper-slide">
                        <img src="<?php echo esc_url($gallery_image['url']); ?>" />
                    </li>
                <?php
                } else {
                ?>
                    <li class="swiper-slide">
                        <?php the_sub_field('video_galleria'); ?>
                    </li>
                <?php
                }
                ?>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    <!-- Slider button -->
    <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
            <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
        </svg>
    </div>
    <div class="swiper-button-next rotate-180">
        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
            <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
        </svg>
    </div>
</section>
<!-- Scheda Tecnica -->
<section class="w-full">
    <div class="container w-full flex flex-col mx-auto font-primary font-light lg:px-10 px-[26px]">
        <h5><?php echo esc_html(get_field('prodotto_uva_titolo_scheda_tecnica')); ?></h5>
        <div class="flex flex-row justify-end">
            <?php
            $link = get_field('prodotto_uva_pulsante_1_scheda_tecnica');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif;
            $link = get_field('prodotto_uva_pulsante_2_scheda_tecnica');
            if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="button" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
        <h6 class="">
            <?php $icona_accordion = get_sub_field('prodotto_uva_icona_scheda_tecnica', $page_id); ?>
            <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">
            <?php echo esc_html(get_field('prodotto_uva_titolo_repeater_scheda_tecnica')); ?>
        </h6>
        <!-- Scheda tecnica -->
        <?php if (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : ?>
            <?php while (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : the_row();

                $scheda_valore_1 = get_sub_field('pressione_lavoro');
                $scheda_valore_2 = get_sub_field('impulsi_al_minuto');
                $scheda_valore_3 = get_sub_field('potenza_trattrice_richiesta');
                $scheda_valore_4 = get_sub_field('portata_compressore');
                $scheda_valore_5 = get_sub_field('portata_minima_impianto_idraulico');
                $scheda_valore_6 = get_sub_field('velocita_avanzamento');
                $scheda_valore_7 = get_sub_field('numero_testate');
                $scheda_valore_8 = get_sub_field('dischi_per_testata');
                $scheda_valore_9 = get_sub_field('larghezza_testata');
                $scheda_valore_10 = get_sub_field('larghezza_telaio');
                $scheda_valore_11 = get_sub_field('movimenti_idraulici');
                $scheda_valore_12 = get_sub_field('corsa_piantone_principale');
                $scheda_valore_13 = get_sub_field('inclianzione_piantone_principale');
                $scheda_valore_14 = get_sub_field('nodo_seconda_porzione');
                $scheda_valore_15 = get_sub_field('sfilo_secondo_braccio');
                $scheda_valore_16 = get_sub_field('regolazione_distanza_testate');
                $scheda_valore_17 = get_sub_field('cilindri_regolazione_testate');
                $scheda_valore_18 = get_sub_field('valvole_idrauliche_aggiuntive');
            ?>
                <div class="w-full flex flex-wrap">
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">PRESSIONE LAVORO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_1); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">IMPULSI AL MINUTO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_2); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">POTENZA TRATTRICE RICHIESTA</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_3); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">PORTATA COMPRESSORE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_4); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">PORTATA MINIMA IMPIANTO IDRAULICO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_5); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">VELOCITÀ AVANZAMENTO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_6); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">NUMERO TESTATE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_7); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">DISCHI PER TESTATA</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_8); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">LARGHEZZA TESTATA</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_9); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">LARGHEZZA TELAIO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_10); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">MOVIMENTI IDRAULICI</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_11); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">CORSA PIANTONE PRINCIPALE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_12); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">INCLIANZIONE PIANTONE PRINCIPALE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_13); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">NODO SECONDA PORZIONE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_14); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">SFILO SECONDO BRACCIO</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_15); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">REGOLAZIONE DISTANZA TESTATE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_16); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">CILINDRI REGOLAZIONE TESTATE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_17); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center lg:py-[10px] border-b  border-gray-950">
                        <p class="w-1/2 lg:text-[10px] lg:leading-[10px] font-secondary font-medium">VALVOLE IDRAULICHE AGGIUNTIVE</p>
                        <p class="w-1/2 lg:text-[16px] lg:leading-[22px] tracking-[.32px]"><?php echo esc_html($scheda_valore_18); ?></p>
                    </div>

                </div>
        <?php
            endwhile;
        endif; ?>
        <!-- Optional -->
        <?php
        $hero = get_field('hero');
        if ($hero) : ?>
            <div id="hero">
                <img src="<?php echo esc_url($hero['image']['url']); ?>" alt="<?php echo esc_attr($hero['image']['alt']); ?>" />
                <div class="content">
                    <?php echo $hero['caption']; ?>
                    <a href="<?php echo esc_url($hero['link']['url']); ?>"><?php echo esc_html($hero['link']['title']); ?></a>
                </div>
            </div>
        <?php endif; ?>
    </div>

</section>
<!-- Altre configurazioni -->
<section class="w-full py-12">
    <!--Cosa distingue il modello -->
    <div class="container w-full flex flex-col mx-auto lg:px-10 px-[26px] pt-12">
        <?php
        $titolo_sez_3 = get_field('prodotto_uva_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="w-full lg:text-5xl text-4xl text-gray-950 py-12"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>

        <div class="w-full flex justify-between py-8">
            <div class="w-2/5 text-lg">
                <?php the_field('prodotto_uva_testo_sezione_3', $page_id); ?>
            </div>
            <a class="button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="#scheda-tecnica">
                Scheda tecnica
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        </div>
        <!-- Accordion -->
        <div class="accordion-section w-full flex py-16">
            <div class="accordion-box w-1/2 pr-[15%]">
                <?php
                if (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) :
                    while (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) : the_row();

                        $icona_accordion = get_sub_field('prodotto_uva_icona_accordion_1', $page_id);
                        $titolo_accordion = get_sub_field('prodotto_uva_titolo_accordion_1', $page_id);
                ?>
                        <div class="accordion-item">
                            <div class="flex">
                                <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">
                                <p class="lg:text-2xl text-xl text-gray-950 py-4"><?php echo esc_html($titolo_accordion); ?></p>
                            </div>
                            <div class="accordion-text">
                                <?php the_sub_field('prodotto_uva_testo_accordion_1', $page_id); ?>
                            </div>
                            <span class="h-px w-full bg-gray-400"></span>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="accordion-box-img w-1/2 relative overflow-hidden">
                <div class="image-box absolute top-[-50%] left-0">
                    <?php
                    if (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) :
                        while (have_rows('prodotto_uva_accordion_sezione_3', $page_id)) : the_row();
                            $img_accordion = get_sub_field('prodotto_uva_immagine_accordion_1', $page_id);
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
<!-- Prodotti corelati -->
<section></section>

<?php get_footer(); ?>