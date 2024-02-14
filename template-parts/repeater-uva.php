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
</section>