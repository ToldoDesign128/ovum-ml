<?php
if (!defined('ABSPATH')) {
    exit;
}
get_header(); ?>
<section class="h-screen font-primary font-light">
    <div class="h-full w-full flex flex-col justify-center items-center">
        <div class="">
            <div class="">
                <h1 class="lg:text-[40px] text-[22px] text-center">Pagina non trovata</h1>
                <p class="lg:text-[100px] text-[50px] text-center">Errore 404</p>
                <div class="w-full flex justify-center items-center lg:mt-[60px] mt-[30px]">
                    <a class="lg:block hidden button h-fit text-gray-950 bg-trasparent border-gray-950 border" href="<?php echo esc_url_raw(home_url()); ?>">
                        <p class="font-primary min-w-[130px] text-center">
                            Torna alla home
                        </p>
                        <span class="bg-gray-300 mix-blend-multiply"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer();
