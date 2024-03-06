<?php
/* Template Name: Mela */
get_header();
?>

<!-- Hero -->
<section class="hero h-screen relative">
    <img class="absolute lg:block hidden lg:top-0 top-[50px] left-0 w-auto h-full object-cover" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_mele-header.jpg'; ?>">
    <img class="absolute lg:hidden block lg:top-0 top-[50px] left-0 w-auto h-full object-cover" src="<?php echo get_template_directory_uri() . '/assets/img/hero/mele_2.jpg'; ?>">

    <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md h-screen mx-auto flex flex-col lg:justify-center justify-start items-center">
        <h1 class="font-primary font-light lg:w-[632px] w-[322px] lg:text-[75px] lg:leading-[80px] text-[40px] leading-[45px] text-center text-gray-950 z-10 lg:mt-0 mt-[124px]">
            <?php echo esc_html(get_field('mele_hero_titolo', 8)); ?>
        </h1>
        <p class="lg:w-[416px] w-[322px] font-primary font-light text-center body-copy text-gray-950 z-10 lg:mt-[35px] mt-[20px]">
            <?php echo wp_kses_post(get_field('mele_hero_text', 8)); ?>
        </p>
    </div>
</section>

<!-- Repeater -->
<?php get_template_part("template-parts/repeater-mela"); ?>

<!-- Loop Prodotti -->
<section class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md w-full mx-auto px-[26px] lg:mt-[120px] mt-[60px] lg:mb-[76px] mb-[60px]">
    <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 items-center">
        <?php
        $loop = new WP_Query(array(
            'post_type'         => 'mele',
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'             => 'DESC',
            'posts_per_page'    => 999,
        ));

        while ($loop->have_posts()) : $loop->the_post(); ?>

            <a href="<?php echo the_permalink(); ?>" class="animationReveal inline-block img-clip card-post relative group bg-gray-950 lg:h-[90%] h-full lg:hover:h-[95%] transition-[height] duration-300 lg:mb-[74px]">
                <div class="img-clip card-content bg-white group">
                    <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px]">
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
                            <p class="font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px]"><?php echo esc_html($sottotitolo_hero) ?></p>
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
                                        <?php if ($scheda_releated_1) : ?>
                                            <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>
                                                <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_1); ?></p>
                                            </div>
                                        <?php endif;
                                        if ($scheda_releated_2) : ?>
                                            <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>
                                                <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_2); ?></p>
                                            </div>
                                        <?php endif;
                                        if ($scheda_releated_3) : ?>
                                            <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TELAIO</p>
                                                <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_3); ?></p>
                                            </div>
                                        <?php endif;
                                        if ($scheda_releated_4) : ?>
                                            <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>
                                                <p class="w-auto font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_4); ?></p>
                                            </div>
                                        <?php endif ?>
                                    </div>
                            <?php
                                endwhile;
                            endif; ?>
                        </div>
                        <p class="uppercase font-secondary font-medium lg:text-[12px] text-[10px] lg:leading-[13px] leading-[10px] opacity-50 lg:pt-[26px] pt-[20px]">MELA</p>
                    </div>
                </div>
            </a>

        <?php endwhile; ?>
    </div>
</section>
<!-- Testimonianze -->
<?php get_template_part("template-parts/testimonianze"); ?>
<!-- Footer -->
<?php get_footer(); ?>