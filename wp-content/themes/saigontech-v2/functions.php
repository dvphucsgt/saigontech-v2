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
    // Load text domain for translations
    load_theme_textdomain('saigontech-v2', get_template_directory() . '/languages');

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

/**
 * Add 'active' class to nav menu items for Bootstrap compatibility
 * WordPress uses 'current-menu-item' but Bootstrap uses 'active'
 */
function sgtech_add_active_class_to_link($atts, $item, $args)
{
    // Check if this menu item or its parent is current
    $is_current = in_array('current-menu-item', $item->classes) ||
        in_array('current_page_item', $item->classes) ||
        in_array('current-menu-ancestor', $item->classes);

    // Also check if current page is a translation of the menu item's target
    if (!$is_current && function_exists('pll_get_post')) {
        $current_page_id = get_queried_object_id();
        $menu_item_object_id = $item->object_id;

        // Get the Vietnamese (default) version of both pages
        $current_vi = pll_get_post($current_page_id, 'vi');
        $menu_item_vi = pll_get_post($menu_item_object_id, 'vi');

        // If they share the same Vietnamese parent, they're translations
        if ($current_vi && $menu_item_vi && $current_vi === $menu_item_vi) {
            $is_current = true;
        }

        // Also check direct match
        if ($current_page_id == $menu_item_object_id) {
            $is_current = true;
        }
    }

    // Fallback: Check slug patterns for pages not linked in Polylang
    if (!$is_current) {
        $current_slug = get_post_field('post_name', get_queried_object_id());
        $menu_item_slug = '';
        if ($item->object === 'page' && $item->object_id) {
            $menu_item_slug = get_post_field('post_name', $item->object_id);
        }

        // Slug mapping: VI slug => [EN variants, JA variants]
        $slug_groups = [
            'du-an' => ['projects', 'project-ja', 'jisseki'],
            'lien-he' => ['contact', 'contact-ja', 'otoiawase'],
            'dich-vu' => ['services', 'service-ja', 'sabisu'],
            've-chung-toi' => ['about-us', 'about-ja', 'about'],
            'blog' => ['blog-ja'],
        ];

        foreach ($slug_groups as $vi_slug => $translations) {
            $all_slugs = array_merge([$vi_slug], $translations);
            if (in_array($current_slug, $all_slugs) && in_array($menu_item_slug, $all_slugs)) {
                $is_current = true;
                break;
            }
        }
    }

    if ($is_current) {
        $existing_classes = isset($atts['class']) ? $atts['class'] : '';
        $atts['class'] = trim($existing_classes . ' active');
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'sgtech_add_active_class_to_link', 10, 3);


/**
 * Add 'active' class to nav-item (li) for Bootstrap
 */
function sgtech_add_active_class_to_li($classes, $item, $args)
{
    // Check for translated page match
    if (function_exists('pll_get_post')) {
        $current_page_id = get_queried_object_id();
        $menu_item_object_id = $item->object_id;

        $current_vi = pll_get_post($current_page_id, 'vi');
        $menu_item_vi = pll_get_post($menu_item_object_id, 'vi');

        if ($current_vi && $menu_item_vi && $current_vi === $menu_item_vi) {
            $classes[] = 'current-menu-item';
        }

        if ($current_page_id == $menu_item_object_id) {
            $classes[] = 'current-menu-item';
        }
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'sgtech_add_active_class_to_li', 10, 3);

/**
 * Get translated page URL based on current language
 * Uses Polylang if available, falls back to Vietnamese slug
 * 
 * @param string $vi_slug Vietnamese page slug (e.g., 've-chung-toi')
 * @return string The correct URL for current language
 */
function sgtech_get_page_url($vi_slug)
{
    // Try to get the page by Vietnamese slug first
    $page = get_page_by_path($vi_slug);

    if (!$page) {
        // Fallback to home_url with the slug
        return home_url('/' . $vi_slug);
    }

    // If Polylang is active, get the translated version
    if (function_exists('pll_get_post') && function_exists('pll_current_language')) {
        $current_lang = pll_current_language('slug');

        // Get translated post ID for current language
        $translated_id = pll_get_post($page->ID, $current_lang);

        if ($translated_id && $translated_id !== $page->ID) {
            return get_permalink($translated_id);
        }
    }

    // Return the original page permalink
    return get_permalink($page->ID);
}

/**
 * Get translated home URL for current language
 * Falls back to main home if language home doesn't exist
 */
function sgtech_get_home_url()
{
    if (function_exists('pll_home_url') && function_exists('pll_current_language')) {
        $lang_home = pll_home_url();
        $current_lang = pll_current_language('slug');

        // Check if language-specific front page exists
        $front_page_id = get_option('page_on_front');
        if ($front_page_id && function_exists('pll_get_post')) {
            $translated_front = pll_get_post($front_page_id, $current_lang);
            if ($translated_front) {
                return get_permalink($translated_front);
            }
        }

        // If pll_home_url returns a valid URL, use it
        if ($lang_home && $lang_home !== '') {
            return $lang_home;
        }
    }
    return home_url('/');
}

/**
 * Display Contact Form 7 form based on current language
 * Uses manual mapping since Polylang doesn't natively support CF7
 * 
 * Form IDs:
 * - Vietnamese: 85
 * - English: 157
 * - Japanese: 158
 */
function sgtech_display_cf7_form()
{
    // Form IDs for each language
    // TODO: Create EN/JA forms in WP Admin -> Contact -> Contact Forms
    // then update these IDs accordingly
    $form_ids = array(
        'vi' => 85,
        'en' => 160,  // Fallback to VI form - create EN form and update ID
        'ja' => 161,  // Fallback to VI form - create JA form and update ID
    );

    // Get current language
    $current_lang = 'vi'; // Default to Vietnamese
    if (function_exists('pll_current_language')) {
        $current_lang = pll_current_language('slug');
    }

    // Get the correct form ID for current language
    $form_id = isset($form_ids[$current_lang]) ? $form_ids[$current_lang] : $form_ids['vi'];

    echo do_shortcode('[contact-form-7 id="' . $form_id . '"]');
}
