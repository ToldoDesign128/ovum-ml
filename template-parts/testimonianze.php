<section class="lg:max-w-screen-xl mx-auto px-[26px] lg:mb-[150px] mb-[60px]">
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
        <!-- Slider button -->
        <div class="swiper-button-prev rotate-180 group">
            <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">
                <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />
            </svg>
            <span class="absolute left-0 bg-white h-6 w-0 lg:group-hover:w-3 transition-[width] duration-300"></span>
        </div>
        <div class="swiper-button-next group">
            <span class="absolute left-0 bg-white h-6 w-0 lg:group-hover:w-3 transition-[width] duration-300"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="34.681" height="12.021" viewBox="0 0 34.681 12.021">
                <path id="Unione_3" data-name="Unione 3" d="M27.964,11.314l4.8-4.8H0v-1H32.766l-4.8-4.8L28.67,0l6.01,6.011-6.01,6.01Z" />
            </svg>
        </div>
    </div>
</section>