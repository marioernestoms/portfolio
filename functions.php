<?php
/**
 * Marioernestoms functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package marioernestoms
 */

if ( ! function_exists( 'marioernestoms_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function marioernestoms_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on marioernestoms, use a find and replace
		 * to change 'marioernestoms' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'marioernestoms', get_template_directory() . '/languages' );

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
		 * Enable support for Options Page ACF.
		 */

		if ( function_exists( 'acf_add_options_page' ) ) {
			acf_add_options_page();
		}

		/**
		 * Enable support for Excerpt on Pages.
		 */
		function excerpt_pages() {
		     add_post_type_support( 'page', 'excerpt' );
		}
		add_action( 'init', 'excerpt_pages' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'marioernestoms' ),
		) );

		register_nav_menus( array(
			'internals' => esc_html__( 'Internals', 'marioernestoms' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'marioernestoms_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Set up custom thumbnail sizes.
		add_image_size( 'portfolio-size', 180, 180, true );
		add_image_size( 'gallery-size', 255, 170, true );
		add_image_size( 'blog-size', 180, 100, true );
		add_image_size( 'testimonials-size', 70, 70, true );
	}
	endif;
add_action( 'after_setup_theme', 'marioernestoms_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function marioernestoms_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'marioernestoms_content_width', 640 );
}
add_action( 'after_setup_theme', 'marioernestoms_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function marioernestoms_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'marioernestoms' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'marioernestoms_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function marioernestoms_scripts() {

	$marioernesto_version = '1.0.1';

	/**
	 * Styles.
	 */
	// Font Awesome Font Family!
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/bower_components/font-awesome/css/font-awesome.min.css', array(), $marioernesto_version, 'all' );

	// Roboto Font Family!
	wp_enqueue_style( 'roboto-family', '//fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,500,500italic,700,700italic', array(), null, 'all' );

	// Open Sans Font Family!
	wp_enqueue_style( 'open-sans-family', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', array(), null, 'all' );

	// Open Sans Font Family!
	wp_enqueue_style( 'montserrat-family', '//fonts.googleapis.com/css?family=Montserrat:400,600,700', array(), null, 'all' );

	// Flexslider!
	wp_enqueue_style( 'flexslider-style', get_template_directory_uri() . '/bower_components/flexslider/flexslider.css', array(), null, 'all' );

	// Main CSS from gulp compilation!
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/main.css', array(), $marioernesto_version, 'all' );

	// Main CSS from WordPress to register theme.
	wp_enqueue_style( 'marioernestoms-style', get_stylesheet_uri() );

	/**
	 * Scripts.
	 */
	// Jquery.
	wp_enqueue_script( 'jquery', array(), $marioernesto_version, 'all' );

	// Bootstrap JS.
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bower_components/bootstrap/dist/js/bootstrap.min.js', array(), $marioernesto_version, 'all' );

	// Flexslider WooThemes.
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/bower_components/flexslider/jquery.flexslider-min.js', array(), null, true );

	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), $marioernesto_version, 'all' );

	// Code Prettifier.
	wp_enqueue_script( 'prettifier', 'https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js' );

	// Main.js from gulp compilation.
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), $marioernesto_version, 'all' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'marioernestoms_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Implement the Custom Post Types.
 */
require get_template_directory() . '/inc/custom-posts.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
