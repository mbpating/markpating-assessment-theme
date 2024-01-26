<?php

/**
 * markpating-assessment-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package markpating-assessment-theme
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (!defined('_THEME_URI')) {
    define('_THEME_URI', get_template_directory_uri());
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function markpating_assessment_theme_setup()
{
    /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on markpating-assessment-theme, use a find and replace
		* to change 'markpating-assessment-theme' to the name of your theme in all the template files.
		*/
    load_theme_textdomain('markpating-assessment-theme', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
    add_theme_support('title-tag');

    /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'header-menu' => esc_html__('Header Menu', 'webfx-assessment-theme'),
            'footer-menu' => esc_html__('Footer Menu', 'webfx-assessment-theme'),
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
            'markpating_assessment_theme_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'markpating_assessment_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function markpating_assessment_theme_content_width()
{
    $GLOBALS['content_width'] = apply_filters('markpating_assessment_theme_content_width', 640);
}
add_action('after_setup_theme', 'markpating_assessment_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function markpating_assessment_theme_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'markpating-assessment-theme'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'markpating-assessment-theme'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'markpating_assessment_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function markpating_assessment_theme_scripts()
{
    wp_enqueue_style('markpating-assessment-theme-bootstrap', _THEME_URI . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
    wp_enqueue_style('markpating-assessment-theme-owl-carousel', _THEME_URI . '/assets/css/owl.carousel.min.css', array(), _S_VERSION);
    wp_enqueue_style('markpating-assessment-theme-owl-theme-default', _THEME_URI . '/assets/css/owl.theme.default.min.css', array(), _S_VERSION);
    wp_enqueue_style('markpating-assessment-theme-icomoon', _THEME_URI . '/assets/css/icomoon.css', array(), _S_VERSION);
    wp_enqueue_style('markpating-assessment-theme-monserrat-font', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    wp_enqueue_style('markpating-assessment-theme-style', _THEME_URI . '/assets/css/style.css', array(), _S_VERSION);
    wp_enqueue_style('markpating-assessment-theme-responsive', _THEME_URI . '/assets/css/responsive.css', array(), _S_VERSION);

    // wp_enqueue_style('markpating-assessment-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
    // wp_style_add_data('markpating-assessment-theme-style', 'rtl', 'replace');

    wp_enqueue_script('markpating-assessment-theme-lib', _THEME_URI . '/assets/js/lib.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('markpating-assessment-theme-custom', _THEME_URI . '/assets/js/custom.js', array(), _S_VERSION, true);

    // wp_enqueue_script('markpating-assessment-theme-navigation', _THEME_URI . '/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'markpating_assessment_theme_scripts');

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
 * Walker Navigation Class
 */
require get_template_directory() . '/classes/header-nav-walker.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}
