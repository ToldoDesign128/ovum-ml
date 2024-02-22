<section class="w-full lg:py-[150px] py-[60px] overflow-x-clip">
    <p class="font-primary font-light text-center lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] lg:mb-[90px] mb-[30px] lg:pl-10 pl-[26px]">Prodotti correlati</p>
    <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto lg:px-0 px-[26px]">
        <div class="swiper overflow-visible swiperReleatedPost">
            <?php
            $related_query = new WP_Query(array(
                'post_type' => 'mele',
                'category__in' => wp_get_post_categories(get_the_ID()),
                'post__not_in' => array(get_the_ID()),
                'posts_per_page' => 999,
                'orderby' => 'date',
            ));

            if ($related_query->have_posts()) { ?>

                <div class="swiper-wrapper items-center">

                    <?php while ($related_query->have_posts()) { ?>
                        <?php $related_query->the_post(); ?>

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
                                            <p class="font-primary lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] font-light"><?php echo esc_html($sottotitolo_hero) ?></p>
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

                    <?php } ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php } ?>
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