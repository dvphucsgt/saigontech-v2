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
                <h1 class="text-white fw-bold mb-4 sgtech-v2-blog-hero-title">Blog & Tin tức</h1>
                <p class="text-white leading-relaxed sgtech-v2-blog-hero-desc">Cập nhật kiến thức
                    công nghệ, xu hướng chuyển đổi số và câu chuyện thành công từ các dự án thực tế của SGTech.</p>
            </div>
        </div>
    </section>

    <section class="py-4 border-bottom bg-white sticky-top sgtech-v2-sticky-filters">
        <div class="container">
            <div class="d-flex flex-column flex-md-row gap-3 align-items-center justify-content-between">
                <?php
                // Get the current page URL reliably
                $base_url = get_permalink();
                ?>
                <form action="<?php echo esc_url(home_url('/blog/')); ?>" method="get"
                    class="position-relative sgtech-v2-w-320" id="blog-search-form">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search sgtech-v2-text-muted-foreground"></i>
                        </span>
                        <input type="text" name="s" class="form-control border-start-0 ps-0"
                            placeholder="Tìm kiếm bài viết..." id="sgtech-v2-blog-search"
                            value="<?php echo get_search_query(); ?>">
                        <button class="btn btn-outline-secondary" type="submit">Tìm</button>
                    </div>
                </form>
                <div class="d-flex gap-2 flex-wrap justify-content-center">
                    <?php
                    $current_cat = get_query_var('category_name');
                    $categories = array(
                        '' => 'Tất cả',
                        'chuyen-doi-so' => 'Chuyển đổi số',
                        'case-study' => 'Case Study',
                        'bao-mat' => 'Bảo mật',
                        'cong-nghe' => 'Công nghệ'
                    );

                    foreach ($categories as $slug => $name):
                        $is_active = ($current_cat === $slug);
                        $btn_class = $is_active ? 'btn-secondary active' : 'btn-outline-secondary';

                        // Use standard WP archive URLs for maximum compatibility
                        $url = home_url('/blog/');
                        if ($slug !== '') {
                            $url = add_query_arg('category_name', $slug, $url);
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

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $posts_per_page,
                'paged' => $paged
            );

            // Logic differentiation: Main Blog vs Search/Category
            $is_filtered = get_search_query() || get_query_var('category_name');

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
                if (get_search_query())
                    $args['s'] = get_search_query();
                if (get_query_var('category_name'))
                    $args['category_name'] = get_query_var('category_name');

                // Do NOT use offset for standard pagination to keep max_num_pages valid
                unset($args['offset']);
            }

            $blog_query = new WP_Query($args);

            if ($blog_query->have_posts()):
                ?>
                <?php if (!get_search_query() && !get_query_var('category_name') && $paged == 1): ?>
                    <section class="sgtech-v2-section-padding sgtech-v2-featured-post">
                        <div class="container">
                            <?php
                            // Get the first post for featured display
                            $featured_query = new WP_Query(array(
                                'posts_per_page' => 1,
                                'ignore_sticky_posts' => 1
                            ));
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
                                                            $categories = get_the_category();
                                                            if (!empty($categories)) {
                                                                echo '<span class="badge badge-secondary">' . esc_html($categories[0]->name) . '</span>';
                                                            }
                                                            ?>
                                                            <span class="small sgtech-v2-text-muted-foreground">Bài viết nổi bật</span>
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
                                                                <?php echo saigontech_v2_estimate_reading_time(get_the_content()); ?>
                                                                phút đọc
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
                            if (get_search_query() || get_query_var('category_name')) {
                                echo 'Kết quả tìm kiếm';
                            } else {
                                echo 'Bài viết mới nhất';
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
                                                    $categories = get_the_category();
                                                    if (!empty($categories)) {
                                                        echo '<span class="badge badge-soft-secondary">' . esc_html($categories[0]->name) . '</span>';
                                                    }
                                                    ?>
                                                    <span class="small sgtech-v2-text-muted-foreground">
                                                        <?php echo saigontech_v2_estimate_reading_time(get_the_content()); ?>
                                                        phút đọc
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
                                'prev_text' => '<i class="bi bi-chevron-left me-2"></i> Trước',
                                'next_text' => 'Sau <i class="bi bi-chevron-right ms-2"></i>',
                                'type' => 'plain',
                                'add_args' => array(
                                    's' => get_search_query(),
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
                        <p>Chưa có bài viết nào.</p>
                    </div>
                </section>
            <?php endif; ?>
        </div><!-- #blog-ajax-content -->
    </div><!-- #blog-ajax-content-wrapper -->

    <section class="sgtech-v2-section-padding bg-primary text-white">
        <div class="container text-center sgtech-v2-max-w-600">
            <h2 class="h3 fw-bold mb-3">Cần tư vấn về giải pháp công nghệ?</h2>
            <p class="opacity-75 mb-4">Đội ngũ chuyên gia SGTech sẵn sàng hỗ trợ bạn tìm ra giải pháp phù hợp nhất.</p>
            <a href="<?php echo home_url('/lien-he'); ?>" class="btn btn-secondary btn-lg">Liên hệ tư vấn<i
                    class="bi bi-arrow-right ms-2"></i></a>
        </div>
    </section>
    <script>
        console.log('Blog logic initialized - V1.1');
    </script>
</main>
<?php get_footer(); ?>