<?php
/**
 * countrytheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package countrytheme
 */

if ( ! defined( 'countrytheme_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'countrytheme_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function countrytheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on countrytheme, use a find and replace
		* to change 'countrytheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'countrytheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );
    add_image_size( 'countrytheme-full-bleed', 1800, 1000, true);
    add_image_size( 'countrytheme-index-image', 1800, 400, true);

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Header', 'countrytheme' ),
            'menu-2' => esc_html__( 'Footer', 'countrytheme' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'countrytheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 100,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

    // Add custom page templates
//    attach_template_to_page( 'Magazine', '/page-templates/magazine-template.php' );
//    attach_template_to_page( 'Events', '/page-templates/events-template.php' );
//    attach_template_to_page( 'Gallery', '/page-templates/gallery-template.php' );
}
add_action( 'after_setup_theme', 'countrytheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function countrytheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'countrytheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'countrytheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function countrytheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'countrytheme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'countrytheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'countrytheme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function countrytheme_scripts() {
    // Enqueu Google Fonts:
    wp_enqueue_style('countrytheme-fonts', "https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Caveat:wght@400;700&family=Rokkitt:wght@100;400;700&family=Rye&display=swap");

	wp_enqueue_style( 'countrytheme-style', get_stylesheet_uri(), array(), countrytheme_VERSION );
	wp_style_add_data( 'countrytheme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'countrytheme-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), countrytheme_VERSION, true );
    wp_localize_script( 'countrytheme-navigation', 'countrythemeScreenReaderText', array(
        'expand' => __( 'Expand child menu', 'countrytheme'),
        'collapse' => __( 'Collapse child menu', 'countrytheme')
    ));

//    wp_enqueue_script( 'countrytheme-functions', get_template_directory_uri() . '/js/functions.js', array('jquery'), countrytheme_VERSION, true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'countrytheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Attaches the specified template to the page identified by the specified name.
 *
 * @params    $page_name        The name of the page to attach the template.
 * @params    $template_path    The template's filename (assumes .php' is specified)
 *
 * @returns   -1 if the page does not exist; otherwise, the ID of the page.
 */
function attach_template_to_page( $page_name, $template_file_name ): int
{

    // Look for the page by the specified title. Set the ID to -1 if it doesn't exist.
    // Otherwise, set it to the page's ID.

    $query = new WP_Query(
        array(
            'post_type'              => 'page',
            'title'                  => $page_name,
            'post_status'            => 'all',
            'posts_per_page'         => 1,
            'no_found_rows'          => true,
            'ignore_sticky_posts'    => true,
            'update_post_term_cache' => false,
            'update_post_meta_cache' => false,
            'orderby'                => 'post_date ID',
            'order'                  => 'ASC',
        )
    );

    if ( ! empty( $query->post ) ) {
        $page_got_by_title = $query->post;
    } else {
        $page_got_by_title = null;
    }

    $page = $page_got_by_title;
    $page_id = null == $page ? -1 : $page->ID;

    // Only attach the template if the page exists
    if( -1 != $page_id ) {
        update_post_meta( $page_id, '_wp_page_template', $template_file_name );
    } // end if

    return $page_id;

} // end attach_template_to_page

/**
 * Attaches the archive-view class to the body of custom page.
 *
 * @params    $classes          The original array of classes.
 *
 * @returns   null if the page does not exist; otherwise, the modified classes array.
 */
function add_archive_class_to_custom_pages($classes): array
{
    // add class to the classes array of custom pages
    if ( is_page( 'Magazine' ) ) {
        $classes[] = 'archive-view';
    }
    if ( is_page( 'Events' ) ) {
        $classes[] = 'archive-view';
    }
    if ( is_page( 'Gallery' ) ) {
        $classes[] = 'archive-view';
    }

    // return the modified $classes array
    return $classes;
}
// add via body_class filter
add_filter('body_class', 'add_archive_class_to_custom_pages');
