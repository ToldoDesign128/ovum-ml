<!-- scroller repeater uva -->
<section class="container mx-auto lg:pt-[92px] pt-[62px] lg:pl-10 pl-[26px]">
    <section class="swiper swiperRepeater">
        <ul class="swiper-wrapper">
            <?php
            if (have_rows('uva_repeater_archivio', 10)) :
                while (have_rows('uva_repeater_archivio', 10)) : the_row();
                    // Load sub field value.
                    $icona_rep = get_sub_field('icona_repeater_uva', 10);
                    $titolo_rep = get_sub_field('titolo_repeter_uva', 10);
                    $testo_rep = get_sub_field('testo_repeater_uva', 10); ?>
                    <li class="swiper-slide flex flex-col items-start font-primary font-light lg:pr-24 pr-0">
                        <img class="max-h-8 my-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_rep . '.svg'; ?>" alt="">
                        <p class="w-full text-3xl leading-[34px] my-4"><?php echo esc_html($titolo_rep); ?></p>
                        <p class="w-full text-[16px] tracking-[0.32px] leading-[22px]"><?php echo esc_html($testo_rep); ?></p>
                    </li>
            <?php
                endwhile;
            endif; ?>
        </ul>
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
    </section>
</section>