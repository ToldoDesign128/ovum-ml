<?php get_header();
$page_id = get_queried_object_id(); ?>
<!-- Hero -->
<section class="hero h-screen relative">
    <img class="absolute lg:block hidden bottom-0 left-0 w-full object-contain" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_Illustrazione_DEF.svg'; ?>">
    <img class="absolute lg:hidden block bottom-0 left-0 w-full object-contain" src="<?php echo get_template_directory_uri() . '/assets/img/hero/ML_Illustrazione_DEF_MOBILE.svg'; ?>">

    <div class="container mx-auto flex flex-col lg:justify-center justify-start items-center">
        
    </div>
</section>
<?php get_footer(); ?>