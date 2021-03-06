<?php
/**
 * church_s functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package church_s
 */

if ( ! function_exists( 'church_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function church_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on church_s, use a find and replace
	 * to change 'church' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'church', get_template_directory() . '/inc/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'church' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'church_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_editor_style( '/inc/css/editor-style.css' );
}
endif; // church_setup
add_action( 'after_setup_theme', 'church_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function church_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'church_content_width', 640 );
}
add_action( 'after_setup_theme', 'church_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function church_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Content sidebar', 'church' ),
		'id'            => 'content-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home sidebar', 'church' ),
		'id'            => 'home-sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'church_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function church_scripts() {
	// Add compile bootstrap.less and theme.less to theme.min.css
	wp_enqueue_style( 'church-theme', get_template_directory_uri() . '/inc/css/theme.min.css' );
	// Add main theme stylesheet
	wp_enqueue_style( 'church-style', get_stylesheet_uri() );
	// Add Google Fonts
	wp_register_style( 'church-fonts', '//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700,700italic&subset=latin,cyrillic-ext');
	wp_enqueue_style( 'church-fonts' );
	// Add support jQuery
	wp_enqueue_script("jquery");
	// Add Bootstrap default JS
	wp_enqueue_script( 'church-bootstrap-js', get_template_directory_uri() . '/inc/js/bootstrap.min.js', array(), '20120206', true );
	// Main theme related functions
	wp_enqueue_script( 'sparkling-functions', get_template_directory_uri() . '/inc/js/functions.js', array('jquery') );
	// This one is for accessibility
	wp_enqueue_script( 'church-skip-link-focus-fix', get_template_directory_uri() . '/inc/js/skip-link-focus-fix.js', array(), '20130115', true );
	// Treaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'church_scripts' );

// Implement the Custom Header feature
require get_template_directory() . '/inc/custom-header.php';
// Custom template tags for this theme
require get_template_directory() . '/inc/template-tags.php';
// Custom functions that act independently of the theme templates
require get_template_directory() . '/inc/extras.php';
// Customizer additions
require get_template_directory() . '/inc/customizer.php';
// Load Jetpack compatibility file
require get_template_directory() . '/inc/jetpack.php';
// Register Custom Navigation Walker
require get_template_directory() . '/inc/navwalker.php';