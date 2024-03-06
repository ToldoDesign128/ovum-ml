<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- Hero -->
<section id="heroAbout" class="relative">
    <span class="topGradient sticky block top-0 left-0 w-full z-40" style="background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);"></span>

    <div class="w-full flex flex-col items-center lg:mb-[10vh] mb-[-25vh]">

        <h1 class="max-w-[13ch] w-full font-primary lg:text-[100px] lg:leading-[100px] text-[40px] leading-[45px] font-light text-center text-gray-950 z-10 mb-[120px] px-[26px]"><?php echo esc_html(get_field('chi_siamo_titolo_hero')); ?></h1>
        <?php
        if (have_rows('chi_siamo_repeater_hero')) :
            while (have_rows('chi_siamo_repeater_hero')) : the_row();
                // Load sub field value.
                $titolo_rep_hero = get_sub_field('repeater_titolo_hero');
        ?>
                <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md w-full flex flex-row flex-wrap justify-between font-primary font-light lg:mt-[120px] md:mt-[140px] mt-[100px] ">
                    <p class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md xl:w-4/12 lg:w-5/12  w-full lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] px-[26px]"><?php echo esc_html($titolo_rep_hero); ?></p>
                    <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md xl:w-6/12 lg:w-5/12  w-full body-copy lg:mt-0 mt-[15px] px-[26px]">
                        <?php the_sub_field('repeater_testo_hero') ?>
                    </div>
                </div>
        <?php
            endwhile;
        endif; ?>
        <h3 class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md lg:w-2/3 w-full font-primary lg:text-[40px] lg:leading-[56px] text-[22px] leading-[28px] font-light text-center text-gray-950 lg:mt-[120px] md:mt-[140px] mt-[100px] px-[26px]"><?php echo esc_html(get_field('chi_siamo_testo_hero')); ?></h3>
    </div>
    <div class="sticky bottom-0 w-full z-10">
        <img class="lg:block hidden w-full object-contain z-40" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_Illustrazione_DEF.svg'; ?>">
        <img class="lg:hidden md:block hidden w-full object-contain z-40" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_Illustrazione_DEF_TABLET.svg'; ?>">
        <img class="md:hidden block w-full object-contain z-40" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_Illustrazione_DEF_MOBILE_02.svg'; ?>">
        <span class="absolute bottom-0 block w-full lg:h-full md:h-[75%] h-[70%] -z-10" style="background: linear-gradient(0deg, rgba(255,255,255,1) 80%, rgba(255,255,255,0) 100%);"></span>
    </div>
</section>
<!-- Sezione 2 -->
<section class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto lg:mt-[120px] mt-[60px] lg:mb-[120px] mb-[20px]">
    <!-- Repeater sezione 2 -->
    <div class="w-full flex flex-row flex-wrap px-[26px]">
        <?php
        if (have_rows('chi_siamo_repeater_sezione_2')) :
            while (have_rows('chi_siamo_repeater_sezione_2')) : the_row();
                // Load sub field value.
                $titolo_rep_sez_2 = get_sub_field('repeater_titolo_sezione_2');
                $testo_rep_sez_2 = get_sub_field('repeater_testo_sezione_2'); ?>
                <div class="xl:w-1/3 lg:w-1/2 w-full font-primary font-light lg:pt-0 pt-[40px] lg:pb-8 lg:first:pl-0 xl:last:pl-8 lg:last:pl-0 lg:pl-8">
                    <p class="max-w-[16ch] lg:text-[40px] lg:leading-[50px] text-[22px] leading-[28px] lg:tracking-normal tracking-[.44px]"><?php echo esc_html($titolo_rep_sez_2); ?></p>
                    <p class="body-copy lg:pt-[35px] pt-[15px] lg:pb-0 pb-[40px]"><?php echo esc_html($testo_rep_sez_2); ?></p>
                </div>
        <?php
            endwhile;
        endif; ?>
    </div>

</section>
<!-- Sezione le nostre promesse -->
<section class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto overflow-x-clip">
    <!-- titolo sezione 3 -->
    <div class="w-full flex flex-col font-primary font-light px-[26px]">
        <?php
        $titolo_sez_3 = get_field('chi_siamo_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="font-light max-w-[18ch] lg:text-[75px] lg:leading-[80px] text-[28px] leading-[32px] text-gray-950 lg:pb-[30px] pb-[20px] pr-4" style="line-height: 1.1;"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-px bg-gray-600"></span>
        <?php endif; ?>
    </div>
    <!-- Repeater sezione 3 -->
    <ol class="repeater w-full lg:flex hidden flex-wrap justify-between font-primary font-light px-[26px] lg:pt-[90px] pt-[40px]">
        <?php
        if (have_rows('chi_siamo_repeater_sezione_3')) :
            while (have_rows('chi_siamo_repeater_sezione_3')) : the_row();
                // Load sub field value.
                $titolo_rep_sez_3 = get_sub_field('repeater_titolo_sezione_2');
                $testo_rep_sez_3 = get_sub_field('repeater_testo_sezione_2');

                if ($titolo_rep_sez_3) : ?>
                    <li class="xl:w-1/3 lg:w-1/2 w-full py-4 lg:pr-[65px] pr-4">
                        <p class="max-w-[15ch] lg:text-[40px] lg:leading-[50px] text-[22px] leading-[28px]"><?php echo esc_html($titolo_rep_sez_3); ?></p>
                        <p class="lg:text-[20px] lg:leading-[32px] text-[18px] leading-[24px] lg:py-[30px] py-[15px]"><?php echo esc_html($testo_rep_sez_3); ?></p>
                    </li>
        <?php
                endif;
            endwhile;
        endif; ?>
    </ol>
    <!-- Repeater sezione 3 mobile -->
    <div class="px-[26px]">
        <div class="swiper lg:hidden w-full swiperScroller2">
            <ol class="repeater swiper-wrapper w-full font-primary font-light  py-4">
                <?php
                if (have_rows('chi_siamo_repeater_sezione_3')) :
                    while (have_rows('chi_siamo_repeater_sezione_3')) : the_row();
                        // Load sub field value.
                        $titolo_rep_sez_3 = get_sub_field('repeater_titolo_sezione_2');
                        $testo_rep_sez_3 = get_sub_field('repeater_testo_sezione_2'); ?>
                        <li class="swiper-slide w-[90vw] py-4">
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
</section>
<!-- Sezione Defogliatrici -->
<section class="lg:mt-[88px] mt-[60px] lg:mb-[150px] mb-[60px] overflow-x-clip">
    <p class="w-full font-primary font-light text-center lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] text-gray-950 px-[26px]">Le nostre defogliatrici</p>
    <!-- Loop Macchinari -->
    <div class="lg:pt-[90px] pt-[30px] xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto px-[26px]">
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
                    <div class="swiper-slide">
                        <a href="<?php echo the_permalink(); ?>" class="h-full block img-clip relative group bg-gray-950 mb-[30px]">
                            <div class="absolute top-px left-px img-clip bg-white group" style="height: calc(100% - 2px); width: calc(100% - 2px);">
                                <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px] mt-[10px]">
                                    <?php the_post_thumbnail('post-thumb-small'); ?>
                                </div>
                                <div class="absolute lg:block hidden top-[292px] right-0 h-[30px] w-[30px] opacity-0 group-hover:opacity-100 transition-opacity duration-500">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="15.854" height="15.854" viewBox="0 0 15.854 15.854">
                                        <g id="Icon_feather-arrow-down-right" data-name="Icon feather-arrow-down-right" transform="translate(0.354 15.5) rotate(-90)">
                                            <path id="Unione_4" data-name="Unione 4" d="M1911.354-9034.176v-1h13.791L1911-9049.323l.706-.706,14.148,14.146v-13.791h1v15.5Z" transform="translate(-1911.354 9049.676)" />
                                        </g>
                                    </svg>

                                </div>
                                <div class="lg:px-[26px] px-[20px]">
                                    <div class="font-primary font-light lg:text-[36px] text-[22px] lg:leading-[44px] leading-[28px]">
                                        <?php the_title() ?>
                                    </div>
                                    <?php if ('prodotto_mela_sottotitolo_hero') :
                                        $sottotitolo_hero = get_field('prodotto_mela_sottotitolo_hero') ?>
                                        <p class="lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] font-primary font-light"><?php echo esc_html($sottotitolo_hero) ?></p>
                                    <?php endif; ?>
                                    <div class="lg:mt-[26px] mt-[23px]">
                                        <?php if (have_rows('prodotto_mela_gruppo_scheda_tecnica')) : ?>
                                            <?php while (have_rows('prodotto_mela_gruppo_scheda_tecnica')) : the_row();
                                                $scheda_releated_1 = get_sub_field('numero_testate');
                                                $scheda_releated_2 = get_sub_field('dischi_per_testata');
                                                $scheda_releated_3 = get_sub_field('larghezza_telaio');
                                                $scheda_releated_4 = get_sub_field('movimenti_idraulici');
                                            ?>
                                                <div class="w-full flex flex-wrap">
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_1); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_2); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TELAIO</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_3); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_4); ?></p>
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
                                        <p class="lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] font-primary font-light"><?php echo esc_html($sottotitolo_uva) ?></p>
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
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_1); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_2); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_3); ?></p>
                                                    </div>
                                                    <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                        <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>
                                                        <p class="font-primary font-light w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_uva_4); ?></p>
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
<?php get_footer(); ?>