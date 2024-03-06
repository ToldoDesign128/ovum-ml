<?php
/* Template Name: Cookie Policy */
get_header();
$page_id = get_queried_object_id(); ?>
<section class="xl:max-w-screen-xl lg:max-w-screen-lg md:max-w-screen-md mx-auto w-full lg:pt-[213px] pt-[124px] lg:pb-[150pxpx] pb-[60px] px-[26px]">
    <h1 class="font-primary font-light py-[30px] lg:text-[50px] text-[30px]">Cookie Policy</h1>
    <?php the_field('cookie_content'); ?>
</section>
<?php get_footer(); ?>