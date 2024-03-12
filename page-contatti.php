<?php
/* Template Name: Contatti */

get_header();
$page_id = get_queried_object_id(); ?>
<main class="contatti">
    <section class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto flex flex-row flex-wrap font-primary font-light px-[26px] lg:pt-[213px] pt-[124px]">
        <!-- Contatti -->
        <div class="lg:w-1/2 w-full flex flex-wrap items-start content-start">
            <h1 class="w-full heading-2 lg:mb-[50px] mb-[20px]"><?php echo the_title(); ?></h1>
            <div class="xl:w-7/12 lg:w-9/12 w-full">
                <?php
                $contatti_sede = get_field('contatti_sede');
                if ($contatti_sede) : ?>
                    <p class="max-w-[24ch] lg:text-[20px] lg:leading-[32px] text-[16px] leading-[22px] tracking-[.4px] mb-[10px]"><?php echo esc_html($contatti_sede); ?></p>
                <?php endif;

                $contatti_telefono = get_field('contatti_telefono');
                if ($contatti_telefono) :
                    $contatti_telefono_url = $contatti_telefono['url'];
                    $contatti_telefono_title = $contatti_telefono['title'];
                    $contatti_telefono_target = $contatti_telefono['target'] ? $contatti_telefono['target'] : '_self';
                ?>
                    <div class="contatti-link flex lg:text-[20px] lg:leading-[32px] text-[16px] leading-[22px] tracking-[.4px]">
                        <p>Telefono:</p>
                        <a class="ml-2 mb-[14px]" href="<?php echo esc_url($contatti_telefono_url); ?>" target="<?php echo esc_attr($contatti_telefono_target); ?>">
                            <?php echo esc_html($contatti_telefono_title); ?>
                        </a>
                    </div>
                <?php endif;

                $contatti_email = get_field('contatti_email');
                if ($contatti_email) :
                    $contatti_email_url = $contatti_email['url'];
                    $contatti_email_title = $contatti_email['title'];
                    $contatti_email_target = $contatti_email['target'] ? $contatti_email['target'] : '_self';
                ?>
                    <div class="contatti-link flex lg:text-[20px] lg:leading-[32px] text-[16px] leading-[22px] tracking-[.4px] lg:mb-[35px] mb-[30px]">
                        <p>Email:</p>
                        <a class="ml-2" href="<?php echo esc_url($contatti_email_url); ?>" target="<?php echo esc_attr($contatti_email_target); ?>">
                            <?php echo esc_html($contatti_email_title); ?>
                        </a>
                    </div>

                <?php endif;

                $contatti_orari = get_field('contatti_orari');
                if ($contatti_orari) : ?>
                    <h3 class="lg:text-[36px] text-[22px] leading-[28px] lg:mb-[10px]">Orari</h3>
                    <p class="lg:mb-[50px] mb-[30px] lg:text-[20px] lg:leading-[32px] text-[16px] leading-[22px] tracking-[.4px]"><?php echo esc_html($contatti_orari); ?></p>
                <?php endif; ?>

                <a href="#rivenditori" class="block button lg:w-[190px] w-full text-gray-50 text-center bg-gray-950">
                    <p class="min-w-[130px] text-center">
                        Rivenditori
                    </p>
                    <span class="bg-gray-800 mix-blend-lighten"></span>
                </a>

            </div>

        </div>
        <!-- Form -->
        <div class="lg:w-1/2 w-full flex flex-col lg:mt-0 mt-[60px]">
            <h2 class="lg:text-[36px] text-[28px] lg:leading-[44px] leading-[32px]">Richiedi informazioni</h2>
            <div>
                <?php gravity_form(1, false, false, false, '',  true, 12); ?>
            </div>
        </div>
    </section>
    <!-- Rivenditori -->
    <section id="rivenditori" class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto flex flex-col font-primary font-light lg:px-0 lg:pt-[114px] pt-[70px] lg:mb-[120px] mb-[60px]">
        <h5 class="lg:text-[50px] lg:leading-[56px] text-[28px] leading-[32px] border-gray-800 border-b pb-[20px] mx-[26px]">I nostri Rivenditori</h5>
        <div class="lg:mt-[60px] mt-[30px] lg:px-[26px] px-[10px]">
            <div class="img-clip w-full lg:h-[720px] h-[580px] relative bg-gray-950">
                <iframe class="img-clip absolute top-[1px] left-[1px] lg:h-[718px] h-[578px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44193.54065284812!2d11.136452322718045!3d46.18864249097047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4782792f2ee23ff7%3A0x1c07098a6aa06790!2s38034%20Cembra%20Lisignago%20TN!5e0!3m2!1sit!2sit!4v1708706324290!5m2!1sit!2sit" style="border:0; width: calc(100% - 2px);" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="w-full flex justify-end px-[26px] lg:pt-[50px] pt-[40px]">
            <a href="<?php echo esc_url($contatti_email_url); ?>" class="button block lg:w-fit w-full text-gray-950 text-center bg-trasparent border-gray-950 border" target="_blank">
                <p class="min-w-[130px] text-center">
                    Diventa rivenditore
                </p>
                <span class="bg-gray-300 mix-blend-multiply"></span>
            </a>
        </div>
    </section>
    <!-- Testimonianze -->
    <?php get_template_part('template-parts/testimonianze') ?>
</main>
<?php get_footer(); ?>