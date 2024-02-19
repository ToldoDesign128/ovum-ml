<!-- scroller repeater uva -->
<section class="pt-[60px] lg:max-w-screen-xl mx-auto lg:px-10 px-[26px]">
    <div class="swiper lg:overflow-visible overflow-clip swiperRepeater">
        <ul class="swiper-wrapper">
            <?php
            if (have_rows('uva_repeater_archivio', 10)) :
                while (have_rows('uva_repeater_archivio', 10)) : the_row();
                    // Load sub field value.
                    $icona_rep = get_sub_field('icona_repeater_uva', 10);
                    $titolo_rep = get_sub_field('titolo_repeter_uva', 10);
                    $testo_rep = get_sub_field('testo_repeater_uva', 10); ?>
                    <li class="swiper-slide flex flex-col items-start font-primary font-light lg:pr-24 pr-0">
                        <img class="max-h-[35px] mb-[15px]" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_rep . '.svg'; ?>" alt="">
                        <p class="w-full heading-4 mb-[20px]"><?php echo esc_html($titolo_rep); ?></p>
                        <p class="w-full body-light lg:pr-0 pr-4"><?php echo esc_html($testo_rep); ?></p>
                    </li>
            <?php
                endwhile;
            endif; ?>
        </ul>
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
</section>