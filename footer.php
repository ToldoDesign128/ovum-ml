<!-- Button Info -->
<div id="infoBtn" class="font-primary font-medium hideBtn fixed right-10 z-30">
    <?php
    $footer_cta = get_field('footer_cta', 'option');
    // Get sub field values.
    $footer_cta_button = $footer_cta['pulsante'];

    $footer_cta_button_url = $footer_cta_button['url'];
    $footer_cta_button_title = $footer_cta_button['title'];
    $footer_cta_button_target = $footer_cta_button['target'] ? $footer_cta_button['target'] : '_self';

    ?>
    <a class="min-w-[130px] block text-gray-50 bg-gray-950 px-[30px] pt-[20px] pb-[16px] lg:my-4 my-0" href="<?php echo esc_url($footer_cta_button_url); ?>" target="<?php echo esc_attr($footer_cta_button_target); ?>">
        <p class="min-w-[130px] text-center">
            <?php echo esc_html($footer_cta_button_title); ?>
        </p>
        <span class="bg-gray-800 mix-blend-multiply"></span>
    </a>
</div>

<!-- Sfumatura -->
<span class="fixed lg:block hidden bottom-0 left-0 w-full lg:h-16 md:h-10 h-12 z-10" style="background: linear-gradient(0deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);"></span>

<?php if (is_page_template('page-contatti.php')) { ?>
    <!-- Non stampo la CTA -->
<?php } else {
?>
    <!-- CTA -->
    <section class="font-primary w-full lg:mb-[175px] mb-[40px]">
        <div class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto lg:px-26px px-[10px]">
            <div class="cta flex flex-col justify-center items-center text-gray-50 bg-gray-950 lg:text-left text-center lg:pt-[50px] pt-[60px] lg:pb-[55px] pb-[60px] lg:px-0 px-[45px]">
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
                <h6 class="lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] font-light pb-[20px]"><?php echo esc_html($footer_cta_title); ?></h6>
                <p class="font-primary lg:text-[20px] lg:leading-[32px] text-[18px] leading-[24px] tracking-[.4px] font-light lg:pb-[35px] pb-[30px]"><?php echo esc_html($footer_cta_testo); ?></p>
                <a class="min-w-[130px] button font-medium lg:w-fit w-full text-gray-950 bg-gray-100 px-[30px] pt-[20px] pb-[16px]" href="<?php echo esc_url($footer_cta_button_url); ?>" target="<?php echo esc_attr($footer_cta_button_target); ?>">
                    <?php echo esc_html($footer_cta_button_title); ?>
                    <span class="bg-gray-400 mix-blend-multiply"></span>
                </a>

            </div>
        </div>
    </section>
<?php
}; ?>

<footer id="footer" class="font-primary font-light relative w-full bg-gray-950 z-40">
    <section class="relative xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md flex flex-col text-gray-50 mx-auto px-[26px]">
        <!-- Footer sezione 1 -->
        <div class="w-full flex lg:flex-row flex-col justify-between lg:py-[120px] py-[40px]">
            <h6 class="lg:w-7/12 w-full lg:text-[75px] lg:leading-[80px] text-[28px] leading-[32px] font-light"><?php echo esc_html(get_field('footer_frase', 'option')); ?></h6>
            <!-- form -->
            <div class="lg:w-4/12 w-full lg:mt-0 mt-[40px]">
                <?php gravity_form( 2, false, false, false, '', true, 12 ); ?>
                
            </div>
        </div>
        <!-- Footer sezione 2 -->
        <div id="FooterLink" class="w-full flex flex-wrap lg:pb-[60px] pb-[30px] lg:pt-0 pt-[60px]">
            <!-- collonna 1 -->
            <div class="lg:w-1/4 w-1/2">
                <!-- titolo colonna -->
                <p class="lg:pb-4 lg:text-[18px] text-[16px] leading-[22px] font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_1', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="lg:w-3/4 w-full lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] lg:pt-[30px] pt-[10px]">
                    <p class="lg:mb-[20px] mb-[10px] font-light"><?php echo esc_html(get_field('footer_indirizzo_colonna_1', 'option')); ?></p>
                    <p class="lg:mb-[20px] mb-[10px] font-light">P.IVA <?php echo esc_html(get_field('footer_piva_colonna_1', 'option')); ?></p>
                </div>
            </div>
            <!-- collonna 2 -->
            <div class="lg:w-1/4 w-1/2 lg:pl-0 pl-6">
                <p class="lg:pb-4 lg:text-[18px] text-[16px] leading-[22px] font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_2', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col lg:w-3/4 w-full lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] lg:pt-[30px] pt-[10px]">
                    <?php
                    $footer_mail = get_field('footer_mail_colonna_2', 'option');
                    if ($footer_mail) :
                        $footer_mail_url = $footer_mail['url'];
                        $footer_mail_title = $footer_mail['title'];
                        $footer_mail_target = $footer_mail['target'] ? $footer_mail['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_mail_url); ?>" target="<?php echo esc_attr($footer_mail_target); ?>"><?php echo esc_html($footer_mail_title); ?></a>
                    <?php endif;
                    $footer_tel = get_field('footer_telefono_colonna_2', 'option');
                    if ($footer_tel) :
                        $footer_tel_url = $footer_tel['url'];
                        $footer_tel_title = $footer_tel['title'];
                        $footer_tel_target = $footer_tel['target'] ? $footer_tel['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_tel_url); ?>" target="<?php echo esc_attr($footer_tel_target); ?>"><?php echo esc_html($footer_tel_title); ?></a>
                    <?php endif;
                    $footer_tel_2 = get_field('footer_telefono_2_colonna_2', 'option');
                    if ($footer_tel_2) :
                        $footer_tel_2_url = $footer_tel_2['url'];
                        $footer_tel_2_title = $footer_tel_2['title'];
                        $footer_tel_2_target = $footer_tel_2['target'] ? $footer_tel_2['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] ont-light" href="<?php echo esc_url($footer_tel_2_url); ?>" target="<?php echo esc_attr($footer_tel_2_target); ?>"><?php echo esc_html($footer_tel_2_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- collonna 3 -->
            <div class="lg:w-1/4 w-1/2">
                <p class="lg:pb-4 lg:text-[18px] text-[16px] leading-[22px] font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_3', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col lg:w-3/4 w-full lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] lg:pt-[30px] pt-[10px]">
                    <?php
                    $footer_link_pagina = get_field('footer_link_pagina_colonna_3', 'option');
                    if ($footer_link_pagina) :
                        $footer_link_pagina_url = $footer_link_pagina['url'];
                        $footer_link_pagina_title = $footer_link_pagina['title'];
                        $footer_link_pagina_target = $footer_link_pagina['target'] ? $footer_link_pagina['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina_url); ?>" target="<?php echo esc_attr($footer_link_pagina_target); ?>"><?php echo esc_html($footer_link_pagina_title); ?></a>
                    <?php endif;
                    $footer_link_pagina_2 = get_field('footer_link_pagina_2_colonna_3', 'option');
                    if ($footer_link_pagina_2) :
                        $footer_link_pagina_2_url = $footer_link_pagina_2['url'];
                        $footer_link_pagina_2_title = $footer_link_pagina_2['title'];
                        $footer_link_pagina_2_target = $footer_link_pagina_2['target'] ? $footer_link_pagina_2['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina_2_url); ?>" target="<?php echo esc_attr($footer_link_pagina_2_target); ?>"><?php echo esc_html($footer_link_pagina_2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina_3 = get_field('footer_link_pagina_3_colonna_3', 'option');
                    if ($footer_link_pagina_3) :
                        $footer_link_pagina_3_url = $footer_link_pagina_3['url'];
                        $footer_link_pagina_3_title = $footer_link_pagina_3['title'];
                        $footer_link_pagina_3_target = $footer_link_pagina_3['target'] ? $footer_link_pagina_3['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina_3_url); ?>" target="<?php echo esc_attr($footer_link_pagina_3_target); ?>"><?php echo esc_html($footer_link_pagina_3_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- collonna 4 -->
            <div class="lg:w-1/4 w-1/2 lg:pl-0 pl-6">
                <p class="lg:pb-4 lg:text-[18px] text-[16px] leading-[22px] font-medium"><?php echo esc_html(get_field('footer_titolo_colonna_4', 'option')); ?></p>
                <!-- campi colonna -->
                <div class="flex flex-col lg:w-3/4 w-full lg:text-[16px] text-[13px] lg:leading-[22px] leading-[16px] lg:pt-[30px] pt-[10px]">
                    <?php
                    $footer_link_pagina2 = get_field('footer_link_pagina_colonna_4', 'option');
                    if ($footer_link_pagina2) :
                        $footer_link_pagina2_url = $footer_link_pagina2['url'];
                        $footer_link_pagina2_title = $footer_link_pagina2['title'];
                        $footer_link_pagina2_target = $footer_link_pagina2['target'] ? $footer_link_pagina2['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina2_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_target); ?>"><?php echo esc_html($footer_link_pagina2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina2_2 = get_field('footer_link_pagina_2_colonna_4', 'option');
                    if ($footer_link_pagina2_2) :
                        $footer_link_pagina2_2_url = $footer_link_pagina2_2['url'];
                        $footer_link_pagina2_2_title = $footer_link_pagina2_2['title'];
                        $footer_link_pagina2_2_target = $footer_link_pagina2_2['target'] ? $footer_link_pagina2_2['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina2_2_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_2_target); ?>"><?php echo esc_html($footer_link_pagina2_2_title); ?></a>
                    <?php endif;
                    $footer_link_pagina2_3 = get_field('footer_link_pagina_3_colonna_4', 'option');
                    if ($footer_link_pagina2_3) :
                        $footer_link_pagina2_3_url = $footer_link_pagina2_3['url'];
                        $footer_link_pagina2_3_title = $footer_link_pagina2_3['title'];
                        $footer_link_pagina2_3_target = $footer_link_pagina2_3['target'] ? $footer_link_pagina2_3['target'] : '_self';
                    ?>
                        <a class="lg:mb-[20px] mb-[10px] font-light" href="<?php echo esc_url($footer_link_pagina2_3_url); ?>" target="<?php echo esc_attr($footer_link_pagina2_3_target); ?>"><?php echo esc_html($footer_link_pagina2_3_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Credits -->
        <div id="credits" class="w-full border-t-2 border-gray-600 font-light py-6">
            <p class="flex lg:text-[16px] text-[13px] text-gray-400">
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
        
    </section>
    <!-- Return top button -->
    <div class="absolute lg:block hidden top-[120px] right-20">
        <a id="ScrollTopBtn" class="button block h-14 w-14 text-gray-950 bg-gray-100 p-[15px]">
            <img class="rotate-90 w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/acf/arrow-small-left.svg'; ?>" alt="">
            <span class="bg-gray-400 mix-blend-multiply"></span>
        </a>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>