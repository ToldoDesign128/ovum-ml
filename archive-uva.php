<?php
/* Template Name: Uva */
get_header(); 
?>

<!-- Hero -->
<section class="hero h-screen relative">
    <img class="absolute lg:block hidden top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_uva-header.jpg'; ?>" loading="lazy">
    <img class="absolute lg:hidden block top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri() . '/assets/img/hero/uva_2.jpg'; ?>" loading="lazy">

    <div class="lg:max-w-screen-xl h-screen mx-auto flex flex-col lg:justify-center justify-start items-center">
        <h1 class="font-primary lg:w-[632px] w-[322px] lg:text-[75px] lg:leading-[80px] text-[40px] leading-[45px] font-light text-center text-gray-950 z-10 lg:mt-0 mt-[124px]">
            <?php echo esc_html(get_field('uva_hero_titolo', 10)); ?>
        </h1>
        <p class="lg:w-[416px] w-[322px] font-primary font-light text-center body-copy text-gray-950 z-10 lg:mt-[35px] mt-[20px]">
            <?php echo wp_kses_post(get_field('uva_hero_text', 10)); ?>
        </p>
    </div>
</section>

<!-- Repeater -->
<?php get_template_part("template-parts/repeater-uva"); ?>

<!-- Loop Prodotti -->
<section class="lg:max-w-screen-xl w-full mx-auto lg:px-0 px-[26px] lg:mt-[120px] mt-[67px] lg:mb-[150px] mb-[60px]">
    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 items-center">
        <?php
        $loop = new WP_Query(array(
            'post_type'         => 'uva',
            'post_status'       => 'publish',
            'orderby'           => 'date',
            'order'             => 'DESC',
            'posts_per_page'    => 999,
        ));

        while ($loop->have_posts()) : $loop->the_post(); ?>

            <a href="<?php echo the_permalink(); ?>" class="animationReveal inline-block img-clip card-post relative group bg-gray-950 lg:mb-[74px] lg:h-[90%] h-full lg:hover:h-[95%] transition-[height] duration-300">
                <div class="img-clip card-content bg-white group">
                    <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px]">
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
                            $sottotitolo_hero = get_field('prodotto_uva_sottotitolo_hero') ?>
                            <p class="font-primary font-light lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px]"><?php echo esc_html($sottotitolo_hero) ?></p>
                        <?php endif; ?>
                        <div class="lg:mt-[26px] mt-[23px]">
                            <?php if (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : ?>
                                <?php while (have_rows('prodotto_uva_gruppo_scheda_tecnica')) : the_row();
                                    $scheda_releated_1 = get_sub_field('numero_testate');
                                    $scheda_releated_2 = get_sub_field('dischi_per_testata');
                                    $scheda_releated_3 = get_sub_field('larghezza_testata');
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
                                                <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>
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
                        <p class="uppercase font-secondary font-medium lg:text-[12px] text-[10px] lg:leading-[13px] leading-[10px] opacity-50 lg:pt-[26px] pt-[20px]">UVA</p>
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