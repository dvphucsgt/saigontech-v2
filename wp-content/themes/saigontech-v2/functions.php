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

    if ($is_current) {
        $existing_classes = isset($atts['class']) ? $atts['class'] : '';
        $atts['class'] = trim($existing_classes . ' active');
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'sgtech_add_active_class_to_link', 10, 3);




/**
 * Get page URL by slug
 * 
 * @param string $slug Page slug
 * @return string The page URL
 */
function sgtech_get_page_url($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : home_url('/' . $slug . '/');
}

/**
 * Get home URL
 */
function sgtech_get_home_url()
{
    return home_url('/');
}

/**
 * Display Contact Form 7 form
 */
function sgtech_display_cf7_form()
{
    echo do_shortcode('[contact-form-7 id="85"]');
}

/**
 * Language Switcher Configuration
 */
function sgtech_get_available_languages()
{
    return array(
        'vi' => array(
            'name' => 'Tiếng Việt',
            'native' => 'Tiếng Việt',
            'flag' => '🇻🇳',
            'locale' => 'vi'
        ),
        'en' => array(
            'name' => 'English',
            'native' => 'English',
            'flag' => '🇺🇸',
            'locale' => 'en_US'
        ),
        'ja' => array(
            'name' => 'Japanese',
            'native' => '日本語',
            'flag' => '🇯🇵',
            'locale' => 'ja'
        )
    );
}

/**
 * Set language cookie early in the request (before headers are sent)
 */
function sgtech_set_language_cookie()
{
    if (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
        $available = sgtech_get_available_languages();
        if (array_key_exists($lang, $available)) {
            // Set cookie for 30 days - must be done before any output
            if (!headers_sent()) {
                $secure = is_ssl(); // Auto-detect HTTPS
                $expire = time() + (30 * 24 * 60 * 60);

                // Use setcookie with options array (PHP 7.3+)
                if (version_compare(PHP_VERSION, '7.3.0', '>=')) {
                    setcookie('sgtech_language', $lang, [
                        'expires' => $expire,
                        'path' => '/',
                        'domain' => '',
                        'secure' => $secure,
                        'httponly' => false,
                        'samesite' => 'Lax'
                    ]);
                } else {
                    setcookie('sgtech_language', $lang, $expire, '/; SameSite=Lax', '', $secure, false);
                }
            }
        }
    }
}
add_action('init', 'sgtech_set_language_cookie', 1);

/**
 * Get current language code
 */
function sgtech_get_current_language()
{
    if (isset($_GET['lang'])) {
        $lang = sanitize_text_field($_GET['lang']);
        $available = sgtech_get_available_languages();
        if (array_key_exists($lang, $available)) {
            return $lang;
        }
    }

    if (isset($_COOKIE['sgtech_language'])) {
        $lang = sanitize_text_field($_COOKIE['sgtech_language']);
        $available = sgtech_get_available_languages();
        if (array_key_exists($lang, $available)) {
            return $lang;
        }
    }

    return 'vi'; // Default language
}

/**
 * Switch WordPress locale based on selected language
 */
function sgtech_switch_locale($locale)
{
    $current_lang = sgtech_get_current_language();
    $languages = sgtech_get_available_languages();

    if (isset($languages[$current_lang])) {
        return $languages[$current_lang]['locale'];
    }

    return $locale;
}
add_filter('locale', 'sgtech_switch_locale');

/**
 * Display language switcher dropdown
 */
function sgtech_language_switcher()
{
    $languages = sgtech_get_available_languages();
    $current_lang = sgtech_get_current_language();
    $current = $languages[$current_lang];

    // Get current URL without lang parameter
    $current_url = home_url(add_query_arg(array()));
    $current_url = remove_query_arg('lang', $current_url);

    ob_start();
    ?>
    <div class="sgtech-lang-switcher">
        <button class="sgtech-lang-current" type="button" aria-expanded="false" aria-haspopup="true">
            <span class="sgtech-lang-flag"><?php echo $current['flag']; ?></span>
            <span class="sgtech-lang-code"><?php echo strtoupper($current_lang); ?></span>
            <i class="bi bi-chevron-down sgtech-lang-arrow"></i>
        </button>
        <ul class="sgtech-lang-dropdown">
            <?php foreach ($languages as $code => $lang): ?>
                <li>
                    <a href="<?php echo esc_url(add_query_arg('lang', $code, $current_url)); ?>"
                        class="sgtech-lang-option <?php echo $code === $current_lang ? 'active' : ''; ?>">
                        <span class="sgtech-lang-flag"><?php echo $lang['flag']; ?></span>
                        <span class="sgtech-lang-name"><?php echo $lang['native']; ?></span>
                        <?php if ($code === $current_lang): ?>
                            <i class="bi bi-check2 sgtech-lang-check"></i>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php
    return ob_get_clean();
}
