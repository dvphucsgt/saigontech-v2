<?php
/**
 * Theme functions and definitions
 */

function saigontech_v2_scripts()
{
    // Bootstrap 5 CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');

    // Bootstrap Icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css', array(), '1.11.1');

    // Devicons
    wp_enqueue_style('devicons', 'https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css', array(), 'latest');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);

    // Theme Main CSS
    wp_enqueue_style('saigontech-main', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'), '1.0');

    // Theme Style.css (required by WordPress)
    wp_enqueue_style('saigontech-style', get_stylesheet_uri());

    // Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);

    // Custom JS
    wp_enqueue_script('saigontech-main-js', get_template_directory_uri() . '/assets/js/main.js', array('bootstrap'), time(), true);
}
add_action('wp_enqueue_scripts', 'saigontech_v2_scripts');

function saigontech_v2_setup()
{
    // Add dynamic title tag support
    add_theme_support('title-tag');

    // Add post thumbnails support
    add_theme_support('post-thumbnails');

    // Register Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'saigontech-v2'),
        'footer' => __('Footer Menu', 'saigontech-v2'),
    ));
}
add_action('after_setup_theme', 'saigontech_v2_setup');

/**
 * Estimate reading time in minutes
 */
function saigontech_v2_estimate_reading_time($content)
{
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // 200 words per minute average
    return $reading_time;
}

// SVG Support
function saigontech_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'saigontech_mime_types');

/**
 * Force page-blog.php for the blog index page, search results, and categories
 */
function saigontech_v2_custom_blog_template($template)
{
    if (is_home() || is_search() || is_category()) {
        $new_template = locate_template(array('page-blog.php'));
        if ('' != $new_template) {
            return $new_template;
        }
    }
    return $template;
}
add_filter('template_include', 'saigontech_v2_custom_blog_template');
