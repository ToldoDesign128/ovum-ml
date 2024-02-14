<!-- Prodotto Uva -->

<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- hero -->
<section class="hero lg:pt-[230px] pt-[94px]">
    <div class="h-full max-h-min container flex flex-wrap justify-between items-center mx-auto lg:px-10 px-[26px]">
        <div class="lg:w-1/2 w-full font-primary lg:pr-24 lg:order-1 order-2">
            <p class="uppercase text-sm font-secondary font-medium pb-[5px]">Uva</p>
            <h1 class="lg:text-[75px] lg:leading-[80px] text-[40px] leading-[50px] font-light"><?php the_title(); ?></h1>
            <?php if ('prodotto_uva_sottotitolo_hero') :
                $sottotitolo_hero = get_field('prodotto_uva_sottotitolo_hero', $page_id) ?>
                <p class="lg:text-[30px] lg:leading-[34px] text-[20px] leading-[32px] font-light"><?php echo esc_html($sottotitolo_hero) ?></p>
            <?php endif; ?>
            <?php if ('prodotto_uva_testo_hero') :
                $testo_hero = get_field('prodotto_uva_testo_hero', $page_id) ?>
                <p class="lg:text-xl lg:leading-[32px] text-[16px] font-light tracking-[0.32px] leading-[22px] lg:pt-[35px] pt-[30px]"><?php echo esc_html($testo_hero) ?></p>
                <ul class="w-full lg:pt-[50px] pt-[30px]">

                    <?php endif;
                if (have_rows('prodotto_uva_repeater_hero')) :
                    while (have_rows('prodotto_uva_repeater_hero')) : the_row();
                        // Load sub field value.
                        $icon_rep_hero = get_sub_field('repeater_hero_icona', $page_id);
                        $titolo_rep_hero = get_sub_field('repeater_hero_testo', $page_id); ?>

                        <li class="lg:w-full font-light lg:text-xl lg:leading-[32px] text-[16px] tracking-[0.32px] leading-[22px] flex lg:pt-[14px] pt-[10px] lg:pr-24">
                            <img class="w-4 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icon_rep_hero . '.svg'; ?>" alt="">
                            <?php echo esc_html($titolo_rep_hero) ?>
                        </li>
                <?php
                    endwhile;
                endif; ?>
                </ul>
        </div>
        <div class="lg:w-1/2 w-full lg:order-2 order-1 lg:my-0 mb-[40px]">
            <div class="h-full lg:max-h-[560px] max-h-80 overflow-y-hidden img-clip">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Indicatori Desktop -->
    <ul class="container lg:flex hidden justify-between font-secondary mx-auto lg:pt-[144px] pt-[60px] lg:px-10 px-[26px]">
        <?php if ('prodotto_uva_pressione_hero') :
            $pressione = get_field('prodotto_uva_pressione_hero', $page_id) ?>
            <li class="w-auto uppercase">
                <p class="lg:text-[50px] font-medium lg:leading-[21px]"><?php echo esc_html($pressione) ?><span class="lg:text-xl lg:leading-[20px] ml-2">BAR</span></p>
                <p class="text-[12px] leading-[13px] lg:pt-[10px]">PRESSIONE DI LAVORO</p>
            </li>
        <?php endif;
        if ('prodotto_uva_impulsi_hero') :
            $impulsi = get_field('prodotto_uva_impulsi_hero', $page_id) ?>
            <li class="w-auto uppercase">
                <p class="lg:text-[50px] font-medium lg:leading-[21px]"><?php echo esc_html($impulsi) ?></p>
                <p class="text-[12px] leading-[13px] lg:pt-[10px]">Impulsi al minuto</p>
            </li>
        <?php endif;
        if ('prodotto_uva_potenza_hero') :
            $potenza = get_field('prodotto_uva_potenza_hero', $page_id) ?>
            <li class="w-auto uppercase">
                <p class="lg:text-[50px] font-medium lg:leading-[21px]"><?php echo esc_html($potenza) ?><span class="lg:text-xl lg:leading-[20px] ml-2">CV</span></p>
                <p class="text-[12px] leading-[13px] lg:pt-[10px]">Potenza trattrice</p>
            </li>
        <?php endif;
        if ('prodotto_uva_velocita_hero') :
            $velocita = get_field('prodotto_uva_velocita_hero', $page_id) ?>
            <li class="w-auto uppercase">
                <p class="lg:text-[50px] font-medium lg:leading-[21px]"><?php echo esc_html($velocita) ?><span class="lg:text-xl lg:leading-[20px] ml-2">KM/H</span></p>
                <p class="text-[12px] leading-[13px] lg:pt-[10px]">Velocità di avanzamento</p>
            </li>
        <?php endif; ?>
    </ul>
    <!-- Indicatori Mobile -->
    <div class="swiper w-full lg:hidden flex pt-[60px] swiperScrollerSingle">
        <ul class="swiper-wrapper w-full font-secondary font-medium uppercase">
            <?php if ('prodotto_uva_pressione_hero') :
                $pressione = get_field('prodotto_uva_pressione_hero', $page_id) ?>
                <li class="swiper-slide w-auto h-auto">
                    <p class="text-4xl"><?php echo esc_html($pressione) ?><span class="text-[12px] leading-[13px] ml-2">BAR</span></p>
                    <p class="text-sm pt-7px">PRESSIONE DI LAVORO</p>
                </li>
            <?php endif;
            if ('prodotto_uva_impulsi_hero') :
                $impulsi = get_field('prodotto_uva_impulsi_hero', $page_id) ?>
                <li class="swiper-slide w-auto h-auto">
                    <p class="text-4xl"><?php echo esc_html($impulsi) ?></p>
                    <p class="text-sm pt-7px">Impulsi al minuto</p>
                </li>
            <?php endif;
            if ('prodotto_uva_potenza_hero') :
                $potenza = get_field('prodotto_uva_potenza_hero', $page_id) ?>
                <li class="swiper-slide w-auto h-auto">
                    <p class="text-4xl"><?php echo esc_html($potenza) ?><span class="text-[12px] leading-[13px] ml-2">CV</span></p>
                    <p class="text-sm pt-7px">Potenza trattrice</p>
                </li>
            <?php endif;
            if ('prodotto_uva_velocita_hero') :
                $velocita = get_field('prodotto_uva_velocita_hero', $page_id) ?>
                <li class="swiper-slide w-auto h-auto">
                    <p class="text-4xl"><?php echo esc_html($velocita) ?><span class="text-[12px] leading-[13px] ml-2">KM/H</span></p>
                    <p class="text-sm pt-7px">Velocità di avanzamento</p>
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
<section class="w-full lg:pt-[150px] pt-[60px]">
    <!-- Gallery -->
    <div class="container mx-auto lg:px-10 px-[26px]">
        <?php
        $gallery_sez_2 = get_field('prodotto_uva_galleria_sezione_2');
        if ($gallery_sez_2) : ?>
            <div class="swiper w-full swiperGallery">
                <!-- Slider container -->
                <ul class="swiper-wrapper">
                    <?php foreach ($gallery_sez_2 as $image) : ?>
                        <li class="swiper-slide relative img-clip">
                            <img src="<?php echo esc_url($image['sizes']['full-size']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <p class="lg:block hidden absolute font-secondary uppercase lg:text-[10px] lg:leading-[10px] lg:bottom-[26px] lg:left-[50%] translate-x-[-50%]"><?php echo esc_html($image['caption']); ?></p>
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
    <?php get_template_part("template-parts/repeater-uva"); ?>
</section>
<!-- Sezione 3 -->
<section class="w-full lg:pt-[120px] pt-[60px]">
    <!--Cosa distingue il modello -->
    <div class="container w-full flex flex-col mx-auto font-primary font-light lg:px-10 px-[26px]">
        <?php
        $titolo_sez_3 = get_field('prodotto_uva_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="w-[14ch] lg:text-5xl text-4xl text-gray-950 pb-[25px]"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-px bg-gray-600"></span>
        <?php endif; ?>

        <div class="w-full flex justify-between font-primary font-light pt-[25px]">
            <div class="lg:w-2/5 w-full text-lg">
                <?php the_field('prodotto_uva_testo_sezione_3', $page_id); ?>
            </div>
            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="#scheda-tecnica">
                Scheda tecnica
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        </div>
        <!-- Accordion -->
        <div class="accordion-section w-full flex lg:flex-row flex-col lg:pt-[90px] pt-[40px]">
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
<section class="container lg:mt-[150px] mt-[70px] lg:px-10 px-[10px] swiper swiperGallery2">
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
<section class="w-full lg:mt-[120px] mt-[70px]">
    <div class="container w-full flex flex-col mx-auto font-primary font-light lg:px-10 px-[26px]">
        <h5 class="lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] border-b border-gray-950 lg:pb-4 pb-[20px]"><?php echo esc_html(get_field('prodotto_uva_titolo_scheda_tecnica')); ?></h5>
        <div class="flex flex-row justify-end lg:pt-8">
            <?php
            $scheda_pulsante = get_field('prodotto_uva_pulsante_1_scheda_tecnica');
            if ($scheda_pulsante) :
                $scheda_pulsante_url = $scheda_pulsante['url'];
                $scheda_pulsante_title = $scheda_pulsante['title'];
                $scheda_pulsante_target = $scheda_pulsante['target'] ? $scheda_pulsante['target'] : '_self';
            ?>
                <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4 mr-4" href="<?php echo esc_url($scheda_pulsante_url); ?>" target="<?php echo esc_attr($scheda_pulsante_target); ?>">
                    <?php echo esc_html($scheda_pulsante_title); ?>
                    <span class="bg-gray-300 mix-blend-multiply"></span>
                </a>
            <?php endif;
            $scheda_pulsante_2 = get_field('prodotto_uva_pulsante_2_scheda_tecnica');
            if ($scheda_pulsante_2) :
                $scheda_pulsante_2_url = $scheda_pulsante_2['url'];
                $scheda_pulsante_2_title = $scheda_pulsante_2['title'];
                $scheda_pulsante_2_target = $scheda_pulsante_2['target'] ? $scheda_pulsante_2['target'] : '_self';
            ?>
                <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="<?php echo esc_url($scheda_pulsante_2_url); ?>" target="<?php echo esc_attr($scheda_pulsante_2_target); ?>">
                    <?php echo esc_html($scheda_pulsante_2_title); ?>
                    <span class="bg-gray-300 mix-blend-multiply"></span>
                </a>
            <?php endif; ?>
        </div>
        <h6 class="flex flex-row items-center lg:text-[30px] lg:leading-[34px] text-[22px] leading-[28px] lg:mt-0 mt-[30px] lg:mb-[30px] mb-[20px]">
            <?php $icona_caratteristiche = get_field('prodotto_uva_icona_scheda_tecnica', $page_id); ?>
            <img class="w-6 mr-4 mb-[5px]" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_caratteristiche . '.svg'; ?>" alt="">
            <?php echo esc_html(get_field('prodotto_uva_titolo_repeater_scheda_tecnica')); ?>
        </h6>
        <!-- Scheda tecnica -->
        <?php if (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : ?>
            <?php while (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : the_row();

                $scheda_valore_1 = get_sub_field('pressione_lavoro', $page_id);
                $scheda_valore_2 = get_sub_field('impulsi_al_minuto', $page_id);
                $scheda_valore_3 = get_sub_field('potenza_trattrice_richiesta', $page_id);
                $scheda_valore_4 = get_sub_field('portata_compressore', $page_id);
                $scheda_valore_5 = get_sub_field('portata_minima_impianto_idraulico', $page_id);
                $scheda_valore_6 = get_sub_field('velocita_avanzamento', $page_id);
                $scheda_valore_7 = get_sub_field('numero_testate', $page_id);
                $scheda_valore_8 = get_sub_field('dischi_per_testata', $page_id);
                $scheda_valore_9 = get_sub_field('larghezza_testata', $page_id);
                $scheda_valore_10 = get_sub_field('larghezza_telaio', $page_id);
                $scheda_valore_11 = get_sub_field('movimenti_idraulici', $page_id);
                $scheda_valore_12 = get_sub_field('corsa_piantone_principale', $page_id);
                $scheda_valore_13 = get_sub_field('inclianzione_piantone_principale', $page_id);
                $scheda_valore_14 = get_sub_field('nodo_seconda_porzione', $page_id);
                $scheda_valore_15 = get_sub_field('sfilo_secondo_braccio', $page_id);
                $scheda_valore_16 = get_sub_field('regolazione_distanza_testate', $page_id);
                $scheda_valore_17 = get_sub_field('cilindri_regolazione_testate', $page_id);
                $scheda_valore_18 = get_sub_field('valvole_idrauliche_aggiuntive', $page_id);
            ?>
                <div class="w-full flex flex-wrap">
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">PRESSIONE LAVORO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_1); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">IMPULSI AL MINUTO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_2); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">POTENZA TRATTRICE RICHIESTA</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_3); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">PORTATA COMPRESSORE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_4); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">PORTATA MINIMA IMPIANTO IDRAULICO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_5); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">VELOCITÀ AVANZAMENTO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_6); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_7); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_8); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_9); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TELAIO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_10); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_11); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">CORSA PIANTONE PRINCIPALE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_12); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">INCLIANZIONE PIANTONE PRINCIPALE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_13); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NODO SECONDA PORZIONE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_14); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">SFILO SECONDO BRACCIO</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_15); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">REGOLAZIONE DISTANZA TESTATE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_16); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">CILINDRI REGOLAZIONE TESTATE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_17); ?></p>
                    </div>
                    <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">VALVOLE IDRAULICHE AGGIUNTIVE</p>
                        <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_valore_18); ?></p>
                    </div>
                    <?php
                    // Check rows exists.
                    if (have_rows('valori_aggiuntivi')) :
                        // Loop through rows.
                        while (have_rows('valori_aggiuntivi')) : the_row();
                            // Load sub field value.
                            $extra_sub_value_title = get_sub_field('titolo_valore', $page_id);
                            $extra_sub_value = get_sub_field('valore', $page_id); ?>
                            <div class="w-full flex flex-row items-center justify-between py-[10px] border-b  border-gray-950">
                                <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium"><?php echo esc_html($extra_sub_value_title); ?></p>
                                <p class="lg:w-1/2 w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($extra_sub_value); ?></p>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>
                </div>
        <?php
            endwhile;
        endif; ?>

        <!-- Optional -->
        <h6 class="flex flex-row items-center lg:text-[30px] lg:leading-[34px] text-[22px] leading-[28px] lg:mt-[60px] mt-[40px] lg:mb-[30px] mb-[20px]">
            <?php $icona_optional = get_field('prodotto_uva_icona_optional', $page_id); ?>
            <img class="w-6 mr-4 mb-[5px]" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_optional . '.svg'; ?>" alt="">
            <?php echo esc_html(get_field('prodotto_uva_titolo_optional')); ?>
        </h6>
        <?php if (have_rows('prodotto_uva_optional_scheda_tecnica')) : ?>
            <?php while (have_rows('prodotto_uva_optional_scheda_tecnica')) : the_row();

                $scheda_optional_1 = get_sub_field('joystick_con_impianto_indipendente', $page_id);
                $scheda_optional_2 = get_sub_field('radiatore_olio', $page_id);
                $scheda_optional_3 = get_sub_field('contagiri_rotore', $page_id);
                $scheda_optional_4 = get_sub_field('piantone_inclinabile', $page_id);
                $scheda_optional_5 = get_sub_field('piantone_lunghezza_diversa', $page_id);
                $scheda_optional_6 = get_sub_field('braccio_lunghezza_diversa', $page_id);
                $scheda_optional_7 = get_sub_field('testata_a_3_dischi', $page_id);
                $scheda_optional_8 = get_sub_field('testata_2_dischi_grandi_900mm', $page_id);
                $scheda_optional_9 = get_sub_field('carrello_di_rimessaggio', $page_id);
                $scheda_optional_10 = get_sub_field('applicazione_anteriore_tesatata', $page_id);
                $scheda_optional_11 = get_sub_field('utilizzo_su_meleto', $page_id);
            ?>
                <div class="w-full flex flex-wrap">
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">JOYSTICK CON IMPIANTO INDIPENDENTE</p>
                        <?php
                        $template_path = get_template_directory_uri();
                        if ($scheda_optional_1 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">RADIATORE OLIO</p>
                        <?php
                        if ($scheda_optional_2 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">RADIATORE OLIO</p>
                        <?php
                        if ($scheda_optional_3 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">PIANTONE INCLINABILE</p>
                        <?php
                        if ($scheda_optional_4 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">PIANTONE LUNGHEZZA DIVERSA</p>
                        <?php
                        if ($scheda_optional_5 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">BRACCIO LUNGHEZZA DIVERSA</p>
                        <?php
                        if ($scheda_optional_6 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">TESTATA A 3 DISCHI E 3 DISCHI “SPEZZATI”</p>
                        <?php
                        if ($scheda_optional_7 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">TESTATA 2 DISCHI GRANDI (900MM)</p>
                        <?php
                        if ($scheda_optional_8 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">CARRELLO DI RIMESSAGGIO</p>
                        <?php
                        if ($scheda_optional_9 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">CARRELLO DI RIMESSAGGIO</p>
                        <?php
                        if ($scheda_optional_10 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                        <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">UTILIZZO SU MELETO</p>
                        <?php
                        if ($scheda_optional_11 == 'Si') {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                        } else {
                            echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                        }; ?>
                    </div>
                    <?php
                    // Check rows exists.
                    if (have_rows('optional_aggiuntivi')) :
                        // Loop through rows.
                        while (have_rows('optional_aggiuntivi')) : the_row();
                            // Load sub field value.
                            $extra_optional_title = get_sub_field('titolo_optional', $page_id);
                            $extra_optional_value = get_sub_field('valore_optional', $page_id); ?>
                            <div class="w-full flex flex-row items-center lg:justify-normal justify-between py-[10px] border-b  border-gray-950">
                                <p class="lg:w-1/2 w-9/12 lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium"><?php echo esc_html($extra_optional_title); ?></p>
                                <?php
                                if ($extra_optional_value == 'Si') {
                                    echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/check-double.svg" alt="">';
                                } else {
                                    echo '<img class="w-6 lg:mr-4 mb-[5px]" src="' . $template_path . '/assets/img/acf/biohazard.svg" alt="">';
                                }; ?>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>
                </div>
        <?php
            endwhile;
        endif; ?>
        <div class="flex flex-row justify-end lg:pt-8 pt-[40px]">
            <?php
            $scheda_pulsante = get_field('prodotto_uva_pulsante_1_scheda_tecnica');
            if ($scheda_pulsante) :
                $scheda_pulsante_url = $scheda_pulsante['url'];
                $scheda_pulsante_title = $scheda_pulsante['title'];
                $scheda_pulsante_target = $scheda_pulsante['target'] ? $scheda_pulsante['target'] : '_self';
            ?>
                <a class="lg:hidden w-full text-center block button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="<?php echo esc_url($scheda_pulsante_url); ?>" target="<?php echo esc_attr($scheda_pulsante_target); ?>">
                    <?php echo esc_html($scheda_pulsante_title); ?>
                    <span class="bg-gray-300 mix-blend-multiply"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>

</section>
<!-- Altre configurazioni -->
<section id="altre-configurazioni" class="w-full lg:pt-[120px] pt-[60px]">
    <!--Cosa distingue il modello -->
    <div class="container w-full flex flex-col mx-auto font-primary font-light lg:px-10 px-[26px]">
        <?php
        $titolo_sez_6 = get_field('prodotto_uva_titolo_altre_configurazioni', $page_id);
        if ($titolo_sez_6) :
        ?>
            <p class="w-[14ch] lg:text-5xl text-4xl text-gray-950 pb-[25px]"><?php echo esc_html($titolo_sez_6); ?></p>
            <span class="w-full h-px bg-gray-600"></span>
        <?php endif; ?>

        <div class="w-full flex justify-between font-primary font-light pt-[25px]">
            <div class="lg:w-2/5 w-full text-lg">
                <?php the_field('prodotto_uva_testo_altre_configurazioni', $page_id); ?>
            </div>
            <a class="lg:block hidden button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="#scheda-tecnica">
                Scheda tecnica
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        </div>
        <!-- Accordion -->
        <div class="accordion-section w-full flex lg:flex-row flex-col lg:pt-[90px] pt-[40px]">
            <div class="accordion-box lg:w-1/2 w-full lg:pr-[15%] lg:pt-0 pt-8 lg:order-1 order-2">
                <?php
                if (have_rows('prodotto_uva_-_accordion_altre_configurazioni', $page_id)) :
                    while (have_rows('prodotto_uva_-_accordion_altre_configurazioni', $page_id)) : the_row();

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
        <div class="flex flex-row justify-end lg:pt-8 pt-[40px]">
            <?php
            $scheda_pulsante = get_field('prodotto_uva_-richiedi_informazioni');
            if ($scheda_pulsante) :
                $scheda_pulsante_url = $scheda_pulsante['url'];
                $scheda_pulsante_title = $scheda_pulsante['title'];
                $scheda_pulsante_target = $scheda_pulsante['target'] ? $scheda_pulsante['target'] : '_self';
            ?>
                <a class="lg:hidden w-full text-center block button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="<?php echo esc_url($scheda_pulsante_url); ?>" target="<?php echo esc_attr($scheda_pulsante_target); ?>">
                    <?php echo esc_html($scheda_pulsante_title); ?>
                    <span class="bg-gray-300 mix-blend-multiply"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Prodotti corelati -->
<?php get_template_part("template-parts/releated-post-uva"); ?>

<!-- Testimonianze -->
<?php get_template_part("template-parts/testimonianze"); ?>
<!-- Footer -->
<?php get_footer(); ?>