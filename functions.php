<?php

if (!function_exists('ovum_ml_setup')) :

	function ovum_ml_setup()
	{

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support('automatic-feed-links');

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support('post-thumbnails');

		// Remove Guttemberg editor
		add_filter('use_block_editor_for_post', '__return_false');

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus(array(
			'primary'   => __('Primary Menu', 'ovum_ml'),
			'secondary' => __('Secondary Menu', 'ovum_ml'),
		));

		// Add full size image 
		add_image_size( 'full-size', 2000, 2000 );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
	}
endif; // ovum_ml_setup
add_action('after_setup_theme', 'ovum_ml_setup');

// Archive title
add_filter( 'get_the_archive_title', 'my_theme_archive_title' );
/**
 * Remove archive labels.
 * 
 * @param  string $title Current archive title to be displayed.
 * @return string        Modified archive title to be displayed.
 */
function my_theme_archive_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_author() ) {
		$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_home() ) {
		$title = single_post_title( '', false );
	}

	return $title;
}

// Custom logo
function ovum_ml_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ovum_ml_custom_logo_setup' );

// Change footer in admin panel
function remove_footer_admin()
{
	echo '<p>Website by Ovum Design</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function change_footer_version()
{
	return ' ';
}
add_filter('update_footer', 'change_footer_version', 9999);


// Remove comments
add_action('admin_init', function () {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url());
		exit;
	}
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
	foreach (get_post_types() as $post_type) {
		if (post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
});
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);
add_action('admin_menu', function () {
	remove_menu_page('edit-comments.php');
});
add_action('init', function () {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
});

// Remove the content editor from ALL pages
add_action('admin_head', 'remove_content_editor');
function remove_content_editor()
{ 
    remove_post_type_support('page', 'editor');        
}

/*ADD ACF Option Page*/
if (function_exists('acf_add_options_page')) {
	acf_add_options_page(array(
		'page_title'    => 'Footer',
		'menu_title'   => 'Footer',
		'menu_slug'    => 'footer-settings',
		'capability'   => 'edit_posts',
		'icon_url'      => 'dashicons-admin-links',
		'redirect'      => true
	));
}

// Add style and script
function add_theme_scripts()
{

	wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");

	wp_enqueue_style('style', get_stylesheet_uri());

	wp_enqueue_script('swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), 1.1, true);

	wp_enqueue_script('script', get_template_directory_uri() . '/main.min.js', array('jquery'), 1.1, true);
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

//CPT
require dirname(__FILE__) . '/functions-parts/cpt-mele.php';
require dirname(__FILE__) . '/functions-parts/cpt-uva.php';
require dirname(__FILE__) . '/functions-parts/cpt-testimonials.php';