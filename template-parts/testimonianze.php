<section class="container mx-auto px-[26px] lg:mb-[150px] mb-[60px]">
    <p class="w-full text-center lg:text-[50px] text-[28px] lg:leading-[56px] leading-[32px] font-primary font-light lg:mb-[50px] mb-[60px]">Cosa dicono i nostri clienti</p>
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
                        <p class="text-center lg:text-[40px] text-[22px] lg:leading-[50px] leading-[28px] lg:tracking-normal tracking-[.44px] border-b-2 border-gray-300 lg:pb-[25px] pb-[30px]"><?php echo esc_html($recensione_testo) ?></p>
                    <?php endif;
                    $recensione_nome = get_field('nome_e_cognome');
                    if ($recensione_nome) :
                    ?>
                        <p class="self-end lg:text-lg text-[16px] lg:leading-[22px] font-medium pt-8"><?php echo esc_html($recensione_nome) ?></p>
                    <?php endif;
                    $recensione_ruolo = get_field('ruolo_e_nome_della_ditta');
                    if ($recensione_ruolo) :
                    ?>
                        <p class="self-end lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px]"><?php echo esc_html($recensione_ruolo) ?></p>
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