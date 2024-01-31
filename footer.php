<!-- Button Info -->
<div id="infoBtn" class="hideBtn fixed right-10 z-30">
    <?php
    $footer_cta = get_field('footer_cta', 'option');
    // Get sub field values.
    $footer_cta_button = $footer_cta['pulsante'];

    $footer_cta_button_url = $footer_cta_button['url'];
    $footer_cta_button_title = $footer_cta_button['title'];
    $footer_cta_button_target = $footer_cta_button['target'] ? $footer_cta_button['target'] : '_self';

    ?>
    <a class="block text-gray-50 bg-gray-950 px-4 py-4 my-4" href="<?php echo esc_url($footer_cta_button_url); ?>" target="<?php echo esc_attr($footer_cta_button_target); ?>">
        <?php echo esc_html($footer_cta_button_title); ?>
        <span class="bg-gray-800 mix-blend-multiply"></span>
    </a>
</div>

<!-- Sfumatura -->
<span class="fixed bottom-0 left-0 w-full lg:h-24 md:h-20 h-16 z-10" style="
background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);">
</span>

<!-- CTA -->
<section class="w-full lg:my-40">
    <div class="container mx-auto px-10">
        <div class="cta flex flex-col justify-center items-center text-gray-50 bg-gray-950 py-8">
            <?php

            $footer_cta = get_field('footer_cta', 'option');
            // Get sub field values.
            $footer_cta_title = $footer_cta['titolo'];
            $footer_cta_testo = $footer_cta['testo'];
            $footer_cta_button = $footer_cta['pulsante'];

            $footer_cta_button_url = $footer_cta_button['url'];
            $footer_cta_button_title = $footer_cta_button['title'];
            $footer_cta_button_target = $footer_cta_button['target'] ? $footer_cta_button['target'] : '_self';

            ?>
            <h6 class="lg:text-5xl md:text-4xl text-3xl py-4"><?php echo esc_html($footer_cta_title); ?></h6>
            <p class="lg:text-xl text-lg py-4"><?php echo esc_html($footer_cta_testo); ?></p>
            <a class="button text-gray-950 bg-gray-100 px-8 py-4 my-4" href="<?php echo esc_url($footer_cta_button_url); ?>" target="<?php echo esc_attr($footer_cta_button_target); ?>">
                <?php echo esc_html($footer_cta_button_title); ?>
                <span class="bg-gray-400 mix-blend-multiply"></span>
            </a>

        </div>
    </div>
</section>

<footer id="footer" class=" relative w-full bg-gray-950 z-40">
    <section class="relative container flex flex-col text-gray-50 mx-auto py-5 px-10">
        <!-- Footer sezione 1 -->
        <div class="w-full flex lg:py-28">
            <h6 class="lg:w-2/3 w-full xl:text-7xl lg:text-6xl md:text-7xl text-6xl font-light py-4"><?php echo esc_html(get_field('footer_frase', 'option')); ?></h6>
            <!-- form -->
            <div class="lg:w-1/3 w-full"></div>
        </div>
        <!-- Footer sezione 2 -->
        <div id="FooterLink" class="w-full flex lg:pb-16">
            <!-- collonna 1 -->
            <div class="lg:w-1/4">
                <!-- titolo colonna -->
                <p class="lg:pb-4 text-lg font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_1', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="w-3/4">
                    <p class="lg:py-4 font-light"><?php echo esc_html(get_field('footer_indirizzo_colonna_1', 'option')); ?></p>
                    <p class="lg:py-4 font-light">P.IVA <?php echo esc_html(get_field('footer_piva_colonna_1', 'option')); ?></p>
                </div>
            </div>
            <!-- collonna 2 -->
            <div class="lg:w-1/4">
                <p class="lg:pb-4 text-lg font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_2', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col w-3/4">
                    <?php
                    $footer_mail = get_field('footer_mail_colonna_2', 'option');
                    if ($footer_mail) :
                        $footer_mail_url = $footer_mail['url'];
                        $footer_mail_title = $footer_mail['title'];
                        $footer_mail_target = $footer_mail['target'] ? $footer_mail['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_mail_url); ?>" target="<?php echo esc_attr($footer_mail_target); ?>"><?php echo esc_html($footer_mail_title); ?></a>
                    <?php endif;
                    $footer_tel = get_field('footer_telefono_colonna_2', 'option');
                    if ($footer_tel) :
                        $footer_tel_url = $footer_tel['url'];
                        $footer_tel_title = $footer_tel['title'];
                        $footer_tel_target = $footer_tel['target'] ? $footer_tel['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_tel_url); ?>" target="<?php echo esc_attr($footer_tel_target); ?>"><?php echo esc_html($footer_tel_title); ?></a>
                    <?php endif;
                    $footer_tel_2 = get_field('footer_telefono_2_colonna_2', 'option');
                    if ($footer_tel_2) :
                        $footer_tel_2_url = $footer_tel_2['url'];
                        $footer_tel_2_title = $footer_tel_2['title'];
                        $footer_tel_2_target = $footer_tel_2['target'] ? $footer_tel_2['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_tel_2_url); ?>" target="<?php echo esc_attr($footer_tel_2_target); ?>"><?php echo esc_html($footer_tel_2_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- collonna 3 -->
            <div class="lg:w-1/4">
                <p class="lg:pb-4 text-lg font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_3', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col w-3/4">
                    <?php
                    $footer_link_pagina = get_field('footer_link_pagina_colonna_3', 'option');
                    if ($footer_link_pagina) :
                        $footer_link_pagina_url = $footer_link_pagina['url'];
                        $footer_link_pagina_title = $footer_link_pagina['title'];
                        $footer_link_pagina_target = $footer_link_pagina['target'] ? $footer_link_pagina['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina_url); ?>" target="<?php echo esc_attr($footer_link_pagina_target); ?>"><?php echo esc_html($footer_link_pagina_title); ?></a>
                    <?php endif;
                    $footer_link_pagina_2 = get_field('footer_link_pagina_2_colonna_3', 'option');
                    if ($footer_link_pagina_2) :
                        $footer_link_pagina_2_url = $footer_link_pagina_2['url'];
                        $footer_link_pagina_2_title = $footer_link_pagina_2['title'];
                        $footer_link_pagina_2_target = $footer_link_pagina_2['target'] ? $footer_link_pagina_2['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina_2_url); ?>" target="<?php echo esc_attr($footer_link_pagina_2_target); ?>"><?php echo esc_html($footer_link_pagina_2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina_3 = get_field('footer_link_pagina_3_colonna_3', 'option');
                    if ($footer_link_pagina_3) :
                        $footer_link_pagina_3_url = $footer_link_pagina_3['url'];
                        $footer_link_pagina_3_title = $footer_link_pagina_3['title'];
                        $footer_link_pagina_3_target = $footer_link_pagina_3['target'] ? $footer_link_pagina_3['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina_3_url); ?>" target="<?php echo esc_attr($footer_link_pagina_3_target); ?>"><?php echo esc_html($footer_link_pagina_3_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- collonna 4 -->
            <div class="lg:w-1/4">
                <p class="lg:pb-4 text-lg font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_4', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col w-3/4">
                    <?php
                    $footer_link_pagina2 = get_field('footer_link_pagina_colonna_4', 'option');
                    if ($footer_link_pagina2) :
                        $footer_link_pagina2_url = $footer_link_pagina2['url'];
                        $footer_link_pagina2_title = $footer_link_pagina2['title'];
                        $footer_link_pagina2_target = $footer_link_pagina2['target'] ? $footer_link_pagina2['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina2_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_target); ?>"><?php echo esc_html($footer_link_pagina2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina2_2 = get_field('footer_link_pagina_2_colonna_4', 'option');
                    if ($footer_link_pagina2_2) :
                        $footer_link_pagina2_2_url = $footer_link_pagina2_2['url'];
                        $footer_link_pagina2_2_title = $footer_link_pagina2_2['title'];
                        $footer_link_pagina2_2_target = $footer_link_pagina2_2['target'] ? $footer_link_pagina2_2['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina2_2_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_2_target); ?>"><?php echo esc_html($footer_link_pagina2_2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina2_3 = get_field('footer_link_pagina_3_colonna_4', 'option');
                    if ($footer_link_pagina2_3) :
                        $footer_link_pagina2_3_url = $footer_link_pagina2_3['url'];
                        $footer_link_pagina2_3_title = $footer_link_pagina2_3['title'];
                        $footer_link_pagina2_3_target = $footer_link_pagina2_3['target'] ? $footer_link_pagina2_3['target'] : '_self';
                    ?>
                        <a class="lg:py-2 font-light" href="<?php echo esc_url($footer_link_pagina2_3_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_3_target); ?>"><?php echo esc_html($footer_link_pagina2_3_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Credits -->
        <div id="credits" class="w-full border-t-2 border-gray-600 font-light py-6">
            <p class="flex text-gray-400">
                Website by
                <a href="#" class="ml-2 lg:hover:text-gray-50">Ovum</a>
                <span class="inline-block mx-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="white" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z" />
                    </svg>
                </span>
                <a href="#" class="lg:hover:text-gray-50">ExVoid</a>
            </p>
        </div>
        <!-- Return top button -->
        <div class="absolute block top-36 right-10">
            <a id="ScrollTopBtn" class="button block h-11 w-11 text-gray-950 bg-gray-100 px-4 py-4 my-4">
                <img class="rotate-90 w-5" src="<?php echo get_template_directory_uri() . '/assets/img/acf/arrow-small-left.svg'; ?>" alt="">
                <span class="bg-gray-400 mix-blend-multiply"></span>
            </a>
        </div>

    </section>
</footer>
<?php wp_footer(); ?>
</body>

</html>