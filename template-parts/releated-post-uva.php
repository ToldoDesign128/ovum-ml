<section class="container w-full lg:py-[150px] py-[60px] lg:pl-10 pl-[26px]">
    <p class="text-center lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px]">Prodotti correlati</p>
    <div class="swiper lg:pt-[90px] pt-[30px] swiperReleatedPost">
        <?php
        $related_query = new WP_Query(array(
            'post_type' => 'uva',
            'category__in' => wp_get_post_categories(get_the_ID()),
            'post__not_in' => array(get_the_ID()),
            'posts_per_page' => 999,
            'orderby' => 'date',
        ));

        if ($related_query->have_posts()) { ?>

            <div class="swiper-wrapper">

                <?php while ($related_query->have_posts()) { ?>
                    <?php $related_query->the_post(); ?>

                    <a href="<?php echo the_permalink(); ?>" class="swiper-slide img-clip bg-slate-950 relative group">
                        <div class="absolute lg:h-[603px] h-[493px] lg:w-[414px] img-clip top-px left-px bg-white pt-[10px] lg:pb-[26px]" style="width: calc(100% - 2px);">
                            <div class="img-clip lg:h-[297px] h-[229px] overflow-hidden lg:mb-[26px] mb-[20px] mx-[10px]">
                                <?php the_post_thumbnail('post-thumb-small'); ?>
                            </div>
                            <div class="absolute lg:block hidden top-[285px] right-[10px] h-[30px] w-[30px] rotate-[135deg] opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24">
                                    <path d="m19,11.5H6.265l4.617-4.617-.707-.707-4.717,4.717c-.61.61-.61,1.604,0,2.214l4.718,4.718.707-.707-4.617-4.617h12.734v-1Z" />
                                </svg>
                            </div>
                            <div class="lg:px-[26px] px-[20px]">
                                <div class="lg:text-[36px] text-[22px] lg:leading-[44px] leading-[28px]">
                                    <?php the_title() ?>
                                </div>
                                <?php if ('prodotto_uva_sottotitolo_hero') :
                                    $sottotitolo_hero = get_field('prodotto_uva_sottotitolo_hero') ?>
                                    <p class="lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] font-light"><?php echo esc_html($sottotitolo_hero) ?></p>
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
                                                <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                    <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">NUMERO TESTATE</p>
                                                    <p class="w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_1); ?></p>
                                                </div>
                                                <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                    <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">DISCHI PER TESTATA</p>
                                                    <p class="w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_2); ?></p>
                                                </div>
                                                <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                    <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">LARGHEZZA TESTATA</p>
                                                    <p class="w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_3); ?></p>
                                                </div>
                                                <div class="w-full flex flex-row items-center justify-between py-[4px] border-b  border-gray-300">
                                                    <p class="w-auto lg:text-[10px] text-[8px] lg:leading-[10px] leading-[8px] font-secondary uppercase font-medium">MOVIMENTI IDRAULICI</p>
                                                    <p class="w-auto lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] tracking-[.32px]"><?php echo esc_html($scheda_releated_4); ?></p>
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

                <?php } ?>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php } ?>
        <!-- Slider button -->
        <div class="swiper-button-prev  rotate-180">
            <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">
                <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />
            </svg>
        </div>
        <div class="swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">
                <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />
            </svg>
        </div>
    </div>
</section>