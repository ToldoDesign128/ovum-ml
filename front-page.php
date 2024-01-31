<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- Hero -->
<section class="hero h-screen relative">
    <video class="absolute top-0 left-0 w-full h-full object-cover" autoplay muted loop>
        <source src="<?php echo get_template_directory_uri() . '/assets/img/video.mp4'; ?>" type="video/mp4">
    </video>
    <div class="container h-screen mx-auto flex flex-col justify-center items-center">
        <h1 class="xl:w-1/2 lg:w-2/3 lg:text-8xl md:text-6xl text-5xl text-center text-gray-950 z-10 py-6"><?php echo esc_html(get_field('home_titolo_sezione_1', $page_id)); ?></h1>
        <div class="flex justify-between py-6">
            <?php
            $pulsante_hero = get_field('home_pulsante_1_sezione_1', $page_id);
            if ($pulsante_hero) :
                $pulsante_hero_url = $pulsante_hero['url'];
                $pulsante_hero_title = $pulsante_hero['title'];
                $pulsante_hero_target = $pulsante_hero['target'] ? $pulsante_hero['target'] : '_self';
            ?>
                <a class="button font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-2 my-4 mx-2" href="<?php echo esc_url($pulsante_hero_url); ?>" target="<?php echo esc_attr($pulsante_hero_target); ?>">
                    <?php echo esc_html($pulsante_hero_title); ?>
                    <span class="bg-gray-300 mix-blend-multiply"></span>
                </a>
            <?php endif;
            $pulsante_hero2 = get_field('home_pulsante_2_sezione_1', $page_id);
            if ($pulsante_hero2) :
                $pulsante_hero2_url = $pulsante_hero2['url'];
                $pulsante_hero2_title = $pulsante_hero2['title'];
                $pulsante_hero2_target = $pulsante_hero2['target'] ? $pulsante_hero2['target'] : '_self';
            ?>
                <a class="button font-medium text-gray-50 bg-gray-950 border-gray-950 border px-8 py-2 my-4 mx-2" href="<?php echo esc_url($pulsante_hero2_url); ?>" target="<?php echo esc_attr($pulsante_hero2_target); ?>">
                    <?php echo esc_html($pulsante_hero2_title); ?>
                    <span class="bg-gray-700 mix-blend-lighten"></span>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Sezione 2 -->
<section class="container mx-auto">
    <!-- sponsor -->
    <div class="w-full flex justify-between py-8 px-10">
        <?php
        $titolo_sez_2 = get_field('home_titolo_sezione_2', $page_id);
        if ($titolo_sez_2) :
        ?>
            <p class="lg:max-w-[18ch] lg:text-2xl text-xl text-gray-950"><?php echo esc_html($titolo_sez_2); ?></p>
        <?php endif; ?>

        <div class="lg:w-2/4 flex justify-between">
            <?php
            if (have_rows('home_repeater_sezione_2', $page_id)) :
                while (have_rows('home_repeater_sezione_2', $page_id)) : the_row();

                    $icona_sez_2 = get_sub_field('icona_repeater_sezione_2', $page_id);
                    $testo_sez_2 = get_sub_field('testo_repeater_sezione_2', $page_id);
                    $link_sez_2 = get_sub_field('link_repeater_sezione_2', $page_id);

                    if ($link_sez_2) :
                        $link_sez_2_url = $link_sez_2['url'];
                        $link_sez_2_title = $link_sez_2['title'];
                        $link_sez_2_target = $link_sez_2['target'] ? $link_sez_2['target'] : '_self'; ?>

                        <a class="w-auto flex items-center" href="<?php echo esc_url($link_sez_2_url); ?>" target="<?php echo esc_attr($link_sez_2_target); ?>">
                            <img class="w-8 mx-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_sez_2 . '.svg'; ?>" alt="">
                            <p class="lg:text-3xl text-2xl font-bold text-gray-950 lg:hover:text-gray-600 transition-all duration-300"><?php echo esc_html($testo_sez_2); ?></p>
                        </a>

            <?php endif;
                endwhile;
            endif;
            ?>
        </div>
    </div>
    <!-- Blocco benefici -->
    <div class="w-full flex flex-col px-10 pt-16">
        <?php
        $titolo_2_sez_2 = get_field('home_titolo_2_sezione_2', $page_id);
        if ($titolo_2_sez_2) :
        ?>
            <p class="w-full lg:text-5xl text-4xl text-gray-950 py-12"><?php echo esc_html($titolo_2_sez_2); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>
        <div class="accordion-section w-full flex py-16">
            <div class="accordion-box w-1/2 pr-[15%]">
                <?php
                if (have_rows('home_accordion_sezione_2', $page_id)) :
                    while (have_rows('home_accordion_sezione_2', $page_id)) : the_row();

                        $icona_accordion = get_sub_field('icona_accordion_sezione_2', $page_id);
                        $titolo_accordion = get_sub_field('titolo_accordion_sezione_2', $page_id);
                ?>
                        <div class="accordion-item">
                            <div class="flex">
                                <img class="w-6 mr-4" src="<?php echo get_template_directory_uri() . '/assets/img/acf/' . $icona_accordion . '.svg'; ?>" alt="">
                                <p class="lg:text-2xl text-xl text-gray-950 py-4"><?php echo esc_html($titolo_accordion); ?></p>
                            </div>
                            <div class="accordion-text">
                                <?php the_sub_field('testo_accordion_sezione_3', $page_id); ?>
                            </div>
                            <span class="h-px w-full bg-gray-400"></span>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="accordion-box-img w-1/2 relative overflow-hidden">
                <div class="image-box absolute top-[-50%] left-0">
                    <?php
                    if (have_rows('home_accordion_sezione_2', $page_id)) :
                        while (have_rows('home_accordion_sezione_2', $page_id)) : the_row();
                            $img_accordion = get_sub_field('immagine_accordion_sezione_3', $page_id);
                    ?>
                            <img class="image-box-item" src="<?php echo esc_url($img_accordion['url']); ?>" alt="<?php echo esc_attr($img_accordion['alt']); ?>" />
                    <?php
                        endwhile;
                    endif;
                    ?>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Sezione 3 -->
<section class="container mx-auto">
    <!-- titolo sezione 3 -->
    <div class="w-full flex flex-col px-10 py-8">
        <?php
        $titolo_sez_3 = get_field('home_titolo_sezione_3', $page_id);
        if ($titolo_sez_3) :
        ?>
            <p class="max-w-[19ch] lg:text-7xl text-4xl text-gray-950 py-12" style="line-height: 1.1;"><?php echo esc_html($titolo_sez_3); ?></p>
            <span class="w-full h-[2px] bg-gray-600"></span>
        <?php endif; ?>
    </div>
    <!-- testo sezione 3 -->
    <div class="w-full flex justify-between px-10 py-8">
        <div class="w-2/5 text-lg">
            <?php the_field('home_testo_sezione_3', $page_id); ?>
        </div>
        <?php
        $pulsante_sez_3 = get_field('home_pulsante_sezione_3', $page_id);
        if ($pulsante_sez_3) :
            $pulsante_sez_3_url = $pulsante_sez_3['url'];
            $pulsante_sez_3_title = $pulsante_sez_3['title'];
            $pulsante_sez_3_target = $pulsante_sez_3['target'] ? $pulsante_sez_3['target'] : '_self';
        ?>
            <a class="button h-fit font-medium text-gray-950 bg-trasparent border-gray-950 border px-8 py-4" href="<?php echo esc_url($pulsante_sez_3_url); ?>" target="<?php echo esc_attr($pulsante_sez_3_target); ?>">
                <?php echo esc_html($pulsante_sez_3_title); ?>
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        <?php endif; ?>
    </div>
    <!-- Repeater sezione 3 -->
    <ol class="repeater w-full flex flex-wrap justify-between px-10 py-8">
        <?php
        if (have_rows('home_repeater_sezione_3')) :
            while (have_rows('home_repeater_sezione_3')) : the_row();
                // Load sub field value.
                $titolo_rep_sez_3 = get_sub_field('titolo_repeater_sezione_3');
                $testo_rep_sez_3 = get_sub_field('testo_repeater_sezione_3'); ?>
                <li class="lg:w-1/3 py-4 pr-24">
                    <p class="lg:text-4xl"><?php echo esc_html($titolo_rep_sez_3);?></p>
                    <p class="lg:text-lg py-8"><?php echo esc_html($testo_rep_sez_3);?></p>
                </li>
        <?php
            endwhile;
        endif; ?>
    </ol>
</section>
<?php get_footer(); ?>