<?php
/**
 * Template Name: Blog
 * The template for displaying the blog index (posts page).
 */
get_header(); ?>

<main>
    <section class="bg-primary text-white py-5">
        <div class="container py-4">
            <div class="sgtech-v2-max-w-600">
                <h1 class="text-white fw-bold mb-4 sgtech-v2-blog-hero-title">
                    <?php _e('Blog & Tin tức', 'saigontech-v2'); ?>
                </h1>
                <p class="text-white leading-relaxed sgtech-v2-blog-hero-desc">
                    <?php _e('Cập nhật kiến thức công nghệ, xu hướng chuyển đổi số và câu chuyện thành công từ các dự án thực tế của SGTech.', 'saigontech-v2'); ?>
                </p>
            </div>
        </div>
    </section>

    <section class="py-4 border-bottom bg-white sticky-top sgtech-v2-sticky-filters">
        <div class="container">
            <div class="d-flex flex-column flex-md-row gap-3 align-items-center justify-content-between">
                <?php
                // Get the current PAGE URL reliably (not post URL)
                $blog_page_id = get_queried_object_id();
                $base_url = get_permalink($blog_page_id);
                ?>
                <form action="<?php echo esc_url($base_url); ?>" method="get" class="position-relative sgtech-v2-w-320"
                    id="blog-search-form">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search sgtech-v2-text-muted-foreground"></i>
                        </span>
                        <input type="text" name="blog_search" class="form-control border-start-0 ps-0"
                            placeholder="<?php esc_attr_e('Tìm kiếm bài viết...', 'saigontech-v2'); ?>"
                            id="sgtech-v2-blog-search"
                            value="<?php echo isset($_GET['blog_search']) ? esc_attr(sanitize_text_field($_GET['blog_search'])) : ''; ?>">
                        <button class="btn btn-outline-secondary"
                            type="submit"><?php _e('Tìm', 'saigontech-v2'); ?></button>
                    </div>
                </form>
                <div class="d-flex gap-2 flex-wrap justify-content-center">
                    <?php
                    $current_cat = isset($_GET['category_name']) ? sanitize_text_field($_GET['category_name']) : '';
                    $categories = array(
                        '' => __('Tất cả', 'saigontech-v2'),
                        'chuyen-doi-so' => __('Chuyển đổi số', 'saigontech-v2'),
                        'case-study' => __('Case Study', 'saigontech-v2'),
                        'bao-mat' => __('Bảo mật', 'saigontech-v2'),
                        'cong-nghe' => __('Công nghệ', 'saigontech-v2')
                    );

                    foreach ($categories as $slug => $name):
                        $is_active = ($current_cat === $slug);
                        $btn_class = $is_active ? 'btn-secondary active' : 'btn-outline-secondary';

                        // Use saved blog page URL to keep language context
                        $url = $base_url;
                        if ($slug !== '') {
                            $url = add_query_arg('category_name', $slug, $url);
                        } else {
                            // "Tất cả" - remove category_name param
                            $url = remove_query_arg('category_name', $url);
                        }
                        ?>
                        <a href="<?php echo esc_url($url); ?>"
                            class="btn <?php echo $btn_class; ?> btn-sm sgtech-v2-cat-btn"
                            data-url="<?php echo esc_url($url); ?>">
                            <?php echo $name; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <div id="blog-ajax-content-wrapper">
        <div id="blog-ajax-content">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $posts_per_page = 9;

            // Get current language from sgtech_get_current_language() function
            $current_lang = 'vi'; // Default
            if (function_exists('sgtech_get_current_language')) {
                $current_lang = sgtech_get_current_language();
            } elseif (function_exists('pll_current_language')) {
                $current_lang = pll_current_language('slug');
            }

            // Get the language category ID by slug (vi, en, ja)
            global $wpdb;
            $lang_category_id = $wpdb->get_var($wpdb->prepare(
                "SELECT t.term_id FROM {$wpdb->terms} t 
                 INNER JOIN {$wpdb->term_taxonomy} tt ON t.term_id = tt.term_id 
                 WHERE t.slug = %s AND tt.taxonomy = 'category'",
                strtolower($current_lang)
            ));

            echo "<!-- DEBUG: language '{$current_lang}', category ID = " . ($lang_category_id ? $lang_category_id : 'NOT FOUND') . " -->";

            // Category Translation Map
            $category_translations = array(
                'en' => array(
                    'Công nghệ' => 'Technology',
                    'Bảo mật' => 'Security',
                    'Chuyển đổi số' => 'Digital Transformation',
                    'Case Study' => 'Case Study'
                ),
                'ja' => array(
                    'Công nghệ' => 'テクノロジー',
                    'Bảo mật' => 'セキュリティ',
                    'Chuyển đổi số' => 'デジタル変革',
                    'Case Study' => 'ケーススタディ'
                )
            );

            // Helper to translate category name
            $translate_category = function ($name) use ($current_lang, $category_translations) {
                // Remove language suffix from category name for display
                $base_name = str_replace(array(', VI', ', EN', ', JA'), '', $name);

                if (isset($category_translations[$current_lang]) && isset($category_translations[$current_lang][$base_name])) {
                    return $category_translations[$current_lang][$base_name];
                }
                return $base_name; // Fallback to base name without suffix
            };

            // Helper to get display category (filter out language-only cats)
            $get_display_category = function ($post_id) use ($translate_category) {
                $cats = get_the_category($post_id);
                foreach ($cats as $cat) {
                    // Skip categories that are just language codes or uncategorized
                    if (!in_array($cat->slug, array('vi', 'en', 'ja', 'uncategorized'))) {
                        return $translate_category($cat->name);
                    }
                }
                // Fallback if only language category exists
                if (!empty($cats)) {
                    return $translate_category($cats[0]->name);
                }
                return '';
            };

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged,
                'lang' => '', // Bypass Polylang filter for posts
            );

            // Filter by language category if found
            if ($lang_category_id) {
                $args['tax_query'] = array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'term_id',
                        'terms' => (int) $lang_category_id,
                    ),
                );
            }

            // Get blog search query from custom parameter
            $blog_search_query = isset($_GET['blog_search']) ? sanitize_text_field($_GET['blog_search']) : '';

            // Logic differentiation: Main Blog vs Search/Category
            $is_filtered = $blog_search_query || get_query_var('category_name');

            if (!$is_filtered) {
                // Main Blog with Featured Post
                // Page 1: 1 Featured (separate query) + 9 in Grid (offset 1)
                // Page 2+: 9 in Grid (offset calculation)
                if ($paged == 1) {
                    $args['posts_per_page'] = 9;
                    $args['offset'] = 1;
                } else {
                    $args['offset'] = (($paged - 1) * 9) + 1;
                }
            } else {
                // Search or Category: No Featured Post, standard 9 per page
                if ($blog_search_query) {
                    $args['s'] = $blog_search_query;
                }
                if (get_query_var('category_name')) {
                    // Get topic category ID directly from database (bypass Polylang filter)
                    $topic_slug = get_query_var('category_name');
                    $topic_category_id = $wpdb->get_var($wpdb->prepare(
                        "SELECT t.term_id FROM {$wpdb->terms} t 
                         INNER JOIN {$wpdb->term_taxonomy} tt ON t.term_id = tt.term_id 
                         WHERE t.slug = %s AND tt.taxonomy = 'category'",
                        $topic_slug
                    ));

                    if ($topic_category_id) {
                        // Initialize tax_query if not set
                        if (!isset($args['tax_query'])) {
                            $args['tax_query'] = array();
                        }
                        // Add topic category filter while keeping language category
                        $args['tax_query'][] = array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => (int) $topic_category_id,
                        );
                        // Set relation to AND if we have multiple conditions
                        if (count($args['tax_query']) > 1) {
                            $args['tax_query']['relation'] = 'AND';
                        }
                    }
                }

                // Do NOT use offset for standard pagination to keep max_num_pages valid
                unset($args['offset']);
            }

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()):
                ?>
                <?php if (!$blog_search_query && !get_query_var('category_name') && $paged == 1): ?>
                    <section class="sgtech-v2-section-padding sgtech-v2-featured-post">
                        <div class="container">
                            <?php
                            // Get the first post for featured display (same language categories)
                            $featured_args = array(
                                'posts_per_page' => 1,
                                'ignore_sticky_posts' => 1,
                                'lang' => '', // Bypass Polylang filter
                            );

                            // Filter by language category if found
                            if ($lang_category_id) {
                                $featured_args['tax_query'] = array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'term_id',
                                        'terms' => (int) $lang_category_id,
                                    ),
                                );
                            }
                            $featured_query = new WP_Query($featured_args);
                            if ($featured_query->have_posts()):
                                while ($featured_query->have_posts()):
                                    $featured_query->the_post();
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <div class="card overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <?php if (has_post_thumbnail()): ?>
                                                        <?php the_post_thumbnail('large', array('class' => 'w-100 h-100 sgtech-v2-object-cover sgtech-v2-featured-img')); ?>
                                                    <?php else: ?>
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg"
                                                            alt="<?php the_title(); ?>"
                                                            class="w-100 h-100 sgtech-v2-object-cover sgtech-v2-featured-img">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="p-4 p-lg-5">
                                                        <div class="d-flex align-items-center gap-3 mb-3">
                                                            <?php
                                                            $display_cat_name = $get_display_category(get_the_ID());
                                                            if ($display_cat_name) {
                                                                echo '<span class="badge badge-secondary">' . esc_html($display_cat_name) . '</span>';
                                                            }
                                                            ?>
                                                            <span
                                                                class="small sgtech-v2-text-muted-foreground"><?php _e('Bài viết nổi bật', 'saigontech-v2'); ?></span>
                                                        </div>
                                                        <h2 class="h3 fw-bold mb-3">
                                                            <?php the_title(); ?>
                                                        </h2>
                                                        <div
                                                            class="sgtech-v2-text-muted-foreground leading-relaxed mb-4 sgtech-v2-line-clamp-3">
                                                            <?php echo wp_trim_words(get_the_excerpt(), 35); ?>
                                                        </div>
                                                        <div class="d-flex gap-3 small sgtech-v2-text-muted-foreground">
                                                            <span><i class="bi bi-calendar3 me-1"></i>
                                                                <?php echo get_the_date(); ?>
                                                            </span>
                                                            <span><i class="bi bi-clock me-1"></i>
                                                                <?php printf(__('%d phút đọc', 'saigontech-v2'), saigontech_v2_estimate_reading_time(get_the_content())); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                    </section>
                <?php endif; ?>

                <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
                    <div class="container">
                        <h2 class="h5 fw-bold mb-4 sgtech-v2-results-count">
                            <?php
                            if ($blog_search_query || get_query_var('category_name')) {
                                _e('Kết quả tìm kiếm', 'saigontech-v2');
                            } else {
                                _e('Bài viết mới nhất', 'saigontech-v2');
                            }
                            ?>
                        </h2>
                        <div class="row g-4">
                            <?php
                            while ($blog_query->have_posts()):
                                $blog_query->the_post();
                                ?>
                                <div class="col-md-6 col-lg-4 sgtech-v2-blog-card-item">
                                    <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                                            <div class="sgtech-v2-thumbnail">
                                                <?php if (has_post_thumbnail()): ?>
                                                    <?php the_post_thumbnail('medium_large'); ?>
                                                <?php else: ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg"
                                                        alt="<?php the_title(); ?>">
                                                <?php endif; ?>
                                            </div>
                                            <div class="card-body p-4">
                                                <div class="d-flex justify-content-between mb-3">
                                                    <?php
                                                    $display_cat_name = $get_display_category(get_the_ID());
                                                    if ($display_cat_name) {
                                                        echo '<span class="badge badge-soft-secondary">' . esc_html($display_cat_name) . '</span>';
                                                    }
                                                    ?>
                                                    <span class="small sgtech-v2-text-muted-foreground">
                                                        <?php printf(__('%d phút đọc', 'saigontech-v2'), saigontech_v2_estimate_reading_time(get_the_content())); ?>
                                                    </span>
                                                </div>
                                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2 card-title-lg">
                                                    <?php the_title(); ?>
                                                </h5>
                                                <div
                                                    class="sgtech-v2-text-muted-foreground small sgtech-v2-line-clamp-2 mb-3 leading-relaxed">
                                                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                                                </div>
                                                <div class="small sgtech-v2-text-muted-foreground"><i
                                                        class="bi bi-calendar3 me-1"></i>
                                                    <?php echo get_the_date(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <!-- Pagination -->
                        <nav class="sgtech-v2-pagination mt-5" aria-label="Blog pagination">
                            <?php
                            $total_posts = $blog_query->found_posts;

                            if (!$is_filtered) {
                                // Main blog logic: Page 1 (1 featured + 9 items)
                                // Subsequent pages also show 9 items.
                                // Total pages = ceil((total_posts - 1) / 9)
                                $total_pages = ceil(($total_posts - 1) / 9);
                            } else {
                                // Search/Category logic: 9 items per page, no featured post
                                $total_pages = $blog_query->max_num_pages;
                            }

                            $pagination = paginate_links(array(
                                'total' => $total_pages,
                                'current' => $paged,
                                'prev_text' => '<i class="bi bi-chevron-left me-2"></i> ' . __('Trước', 'saigontech-v2'),
                                'next_text' => __('Sau', 'saigontech-v2') . ' <i class="bi bi-chevron-right ms-2"></i>',
                                'type' => 'plain',
                                'add_args' => array(
                                    'blog_search' => $blog_search_query,
                                    'category_name' => get_query_var('category_name')
                                )
                            ));

                            // Inject AJAX and custom classes into pagination links
                            if ($pagination) {
                                // Add base link classes
                                $pagination = str_replace('page-numbers', 'page-numbers sgtech-v2-page-link sgtech-v2-ajax-link', $pagination);
                                // Map WordPress "current" to user"s "active"
                                $pagination = str_replace('current', 'active', $pagination);
                                // Map WordPress "prev" and "next" to user"s "wide"
                                $pagination = str_replace('prev', 'prev sgtech-v2-page-link-wide', $pagination);
                                $pagination = str_replace('next', 'next sgtech-v2-page-link-wide', $pagination);

                                echo $pagination;
                            }
                            ?>
                        </nav>
                    </div>
                </section>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <section class="sgtech-v2-section-padding">
                    <div class="container text-center">
                        <p><?php _e('Chưa có bài viết nào.', 'saigontech-v2'); ?></p>
                    </div>
                </section>
            <?php endif; ?>
        </div><!-- #blog-ajax-content -->
    </div><!-- #blog-ajax-content-wrapper -->

    <section class="sgtech-v2-section-padding bg-primary text-white">
        <div class="container text-center sgtech-v2-max-w-600">
            <h2 class="h3 fw-bold mb-3"><?php _e('Cần tư vấn về giải pháp công nghệ?', 'saigontech-v2'); ?></h2>
            <p class="opacity-75 mb-4">
                <?php _e('Đội ngũ chuyên gia SGTech sẵn sàng hỗ trợ bạn tìm ra giải pháp phù hợp nhất.', 'saigontech-v2'); ?>
            </p>
            <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                class="btn btn-secondary btn-lg"><?php _e('Liên hệ tư vấn', 'saigontech-v2'); ?><i
                    class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </section>
    <script>
        console.log('Blog logic initialized - V1.1');
    </script>
</main>
<?php get_footer(); ?>