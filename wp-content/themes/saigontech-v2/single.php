<?php
/**
 * The template for displaying all single posts.
 */
get_header(); ?>

<main>
    <?php while (have_posts()):
        the_post(); ?>
        <!-- Hero Section with Background -->
        <section class="sgtech-v2-blog-detail-hero position-relative bg-primary">
            <div class="position-absolute sgtech-v2-inset-0 overflow-hidden">
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('full', array('class' => 'w-100 h-100 sgtech-v2-object-cover sgtech-v2-opacity-30')); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg" alt=""
                        class="w-100 h-100 sgtech-v2-object-cover sgtech-v2-opacity-30">
                <?php endif; ?>
            </div>
            <div class="container position-relative pb-5 sgtech-v2-z-10">
                <div class="pt-4 pb-4 sgtech-v2-max-w-800">
                    <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                        <a href="<?php echo get_post_type_archive_link('post'); ?>"
                            class="d-inline-flex align-items-center gap-2 text-white text-decoration-none small opacity-75 hover-opacity-100 transition-all">
                            <i class="bi bi-arrow-left"></i>
                            <?php _e('Quay lại Blog', 'saigontech-v2'); ?>
                        </a>
                        <span class="d-inline-block px-3 py-1 rounded-pill bg-secondary text-white small fw-medium">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            }
                            ?>
                        </span>
                    </div>
                    <h1 class="text-white fw-bold mb-4 display-6">
                        <?php the_title(); ?>
                    </h1>
                    <div class="d-flex flex-wrap align-items-center gap-4 small text-white opacity-75">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-calendar3"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-clock"></i>
                            <?php printf(__('%d phút đọc', 'saigontech-v2'), saigontech_v2_estimate_reading_time(get_the_content())); ?>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content Section -->
        <section class="sgtech-v2-section-padding">
            <div class="container">
                <div class="row g-4 g-lg-5">
                    <!-- Main Content -->
                    <div class="col-lg-8">
                        <article class="sgtech-v2-blog-content">
                            <?php the_content(); ?>

                            <!-- Author Card (Static for now, can be updated to use author data) -->
                            <div class="sgtech-v2-author-card">
                                <?php echo get_avatar(get_the_author_meta('ID'), 80, '', '', array('class' => 'sgtech-v2-author-avatar')); ?>
                                <div>
                                    <h4 class="fw-bold mb-1">
                                        <?php the_author(); ?>
                                    </h4>
                                    <p class="text-secondary small mb-2">
                                        <?php the_author_meta('description'); ?>
                                    </p>
                                    <p class="sgtech-v2-text-muted-foreground small mb-0">
                                        <?php _e('Thành viên đội ngũ chuyên gia tại SGTech.', 'saigontech-v2'); ?>
                                    </p>
                                </div>
                            </div>

                            <!-- Share Buttons -->
                            <div class="sgtech-v2-share-box">
                                <span
                                    class="fw-bold me-2 align-self-center"><?php _e('Chia sẻ:', 'saigontech-v2'); ?></span>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>"
                                    class="sgtech-v2-share-btn" aria-label="Share on Facebook" target="_blank">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink()); ?>"
                                    class="sgtech-v2-share-btn" aria-label="Share on LinkedIn" target="_blank">
                                    <i class="bi bi-linkedin"></i>
                                </a>
                                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>"
                                    class="sgtech-v2-share-btn" aria-label="Share on Twitter" target="_blank">
                                    <i class="bi bi-twitter-x"></i>
                                </a>
                                <a href="javascript:void(0)" class="sgtech-v2-share-btn" aria-label="Copy link"
                                    onclick="navigator.clipboard.writeText('<?php the_permalink(); ?>')">
                                    <i class="bi bi-link-45deg"></i>
                                </a>
                            </div>

                            <!-- CTA Box in Content -->
                            <div class="mt-5 pt-4 border-top">
                                <div class="sgtech-v2-bg-section-light rounded-4 p-4 p-md-5 text-center">
                                    <h4 class="fw-bold mb-3">
                                        <?php _e('Bạn cần tư vấn về giải pháp này?', 'saigontech-v2'); ?>
                                    </h4>
                                    <?php _e('Đội ngũ chuyên gia SGTech sẵn sàng hỗ trợ bạn triển khai giải pháp phù hợp.', 'saigontech-v2'); ?>
                                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary">
                                        <?php _e('Liên hệ tư vấn miễn phí', 'saigontech-v2'); ?>
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="d-flex flex-column gap-4">
                            <!-- Related Posts (Recent Posts for now) -->
                            <div>
                                <h5 class="fw-bold mb-4"><?php _e('Bài viết liên quan', 'saigontech-v2'); ?></h5>
                                <div class="d-flex flex-column gap-4">
                                    <?php
                                    $related_query = new WP_Query(array(
                                        'posts_per_page' => 2,
                                        'post__not_in' => array(get_the_ID()),
                                        'orderby' => 'rand'
                                    ));
                                    if ($related_query->have_posts()):
                                        while ($related_query->have_posts()):
                                            $related_query->the_post();
                                            ?>
                                            <a href="<?php the_permalink(); ?>" class="text-decoration-none">
                                                <div class="card overflow-hidden card-hover-lift">
                                                    <div class="sgtech-v2-aspect-video overflow-hidden">
                                                        <?php if (has_post_thumbnail()): ?>
                                                            <?php the_post_thumbnail('medium', array('class' => 'w-100 h-100 sgtech-v2-object-cover')); ?>
                                                        <?php else: ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg"
                                                                alt="" class="w-100 h-100 sgtech-v2-object-cover">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="card-body p-3">
                                                        <?php
                                                        $categories = get_the_category();
                                                        if (!empty($categories)) {
                                                            echo '<span class="d-inline-block px-2 py-1 rounded-pill small fw-medium mb-2 bg-secondary-soft text-secondary fs-8">' . esc_html($categories[0]->name) . '</span>';
                                                        }
                                                        ?>
                                                        <h6 class="fw-semibold mb-2 sgtech-v2-line-clamp-2 fs-7">
                                                            <?php the_title(); ?>
                                                        </h6>
                                                        <p class="sgtech-v2-text-muted-foreground mb-0 fs-8">
                                                            <?php echo get_the_date(); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            <?php
                                        endwhile;
                                        wp_reset_postdata();
                                    endif;
                                    ?>
                                </div>
                            </div>

                            <!-- CTA Card -->
                            <div class="card bg-primary text-white">
                                <div class="card-body p-4 text-center">
                                    <h5 class="fw-bold mb-2"><?php _e('Nhận tư vấn miễn phí', 'saigontech-v2'); ?></h5>
                                    <p class="small mb-4 opacity-75">
                                        <?php _e('Chúng tôi sẵn sàng hỗ trợ bạn 24/7', 'saigontech-v2'); ?>
                                    </p>
                                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                                        class="btn btn-secondary w-100"><?php _e('Liên hệ ngay', 'saigontech-v2'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>