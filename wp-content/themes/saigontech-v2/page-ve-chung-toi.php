<?php
/**
 * Template Name: Về chúng tôi
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-hero sgtech-v2-min-h-50">
        <div class="sgtech-v2-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-team.jpg"
                alt="<?php esc_attr_e('Đội ngũ SGTech', 'saigontech-v2'); ?>">
            <div class="sgtech-v2-hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h1 class="text-white mb-4"><?php _e('Về SGTech', 'saigontech-v2'); ?></h1>
                <?php _e('Sáng tạo - Chuyên nghiệp - Chất lượng - Linh hoạt. SGTech tự hào đồng hành cùng hàng trăm doanh nghiệp trong hành trình chuyển đổi số.', 'saigontech-v2'); ?>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Content -->
                <div class="col-lg-6">
                    <span
                        class="badge badge-secondary mb-3 fs-7"><?php _e('Câu chuyện của chúng tôi', 'saigontech-v2'); ?></span>
                    <h2 class="display-6 fw-bold mb-4">
                        <?php _e('Kiến tạo giá trị số, đồng hành thành công', 'saigontech-v2'); ?>
                    </h2>
                    <div class="sgtech-v2-text-muted-foreground leading-relaxed">
                        <p>
                            <?php _e('<strong class="text-dark">SGTech được thành lập năm 2019</strong> với khát vọng mang đến những giải pháp công nghệ đột phá cho doanh nghiệp Việt. Chúng tôi tin rằng mỗi doanh nghiệp đều xứng đáng có được những sản phẩm số chất lượng cao, được tạo ra bởi đội ngũ thực sự tâm huyết.', 'saigontech-v2'); ?>
                        </p>
                        <p>
                            <?php _e('Với triết lý <strong class="text-dark">"Sáng tạo không giới hạn - Chất lượng không thỏa hiệp"</strong>, SGTech đã nhanh chóng khẳng định vị thế trên thị trường. Chúng tôi tự hào đã đồng hành cùng hàng trăm khách hàng trong và ngoài nước, từ startup năng động đến các tập đoàn lớn, mang đến những giải pháp công nghệ linh hoạt và hiệu quả.', 'saigontech-v2'); ?>
                        </p>
                        <p>
                            <?php _e('Tại SGTech, mỗi dự án là một cơ hội để chứng minh cam kết của chúng tôi: <strong class="text-dark">Chuyên nghiệp trong từng quy trình, tận tâm trong từng sản phẩm, và luôn sẵn sàng thích ứng với mọi yêu cầu của khách hàng</strong>.', 'saigontech-v2'); ?>
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-team.jpg"
                                alt="<?php esc_attr_e('Đội ngũ SGTech trong buổi họp chiến lược', 'saigontech-v2'); ?>"
                                class="w-100 sgtech-v2-aspect-square sgtech-v2-object-cover">
                        </div>
                        <!-- Floating Card -->
                        <div class="sgtech-v2-floating-card d-none d-md-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm bg-secondary-soft">
                                <i class="bi bi-briefcase text-secondary"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-primary mb-0 sgtech-v2-text-3xl">
                                    <?php printf(__('%d+', 'saigontech-v2'), 5); ?>
                                </div>
                                <div class="small sgtech-v2-text-muted-foreground">
                                    <?php _e('Năm phát triển', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="sgtech-v2-section-padding sgtech-v2-bg-pattern-dots position-relative overflow-hidden">
        <div class="sgtech-v2-timeline-decoration-blob sgtech-v2-timeline-decoration-blob-1"></div>
        <div class="sgtech-v2-timeline-decoration-blob sgtech-v2-timeline-decoration-blob-2"></div>
        <div class="container position-relative z-1">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3"><?php _e('Hành trình phát triển', 'saigontech-v2'); ?></h2>
                <p class="sgtech-v2-text-muted-foreground">
                    <?php _e('Những cột mốc quan trọng đánh dấu sự trưởng thành của SGTech.', 'saigontech-v2'); ?>
                </p>
            </div>

            <div class="sgtech-v2-timeline">
                <!-- Milestone 1 (2019) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2019</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base"><?php _e('Khởi nguồn', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('SGTech chính thức ra đời với đội ngũ kỹ sư đam mê công nghệ', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 2 (2020) - Right -->
                <div class="sgtech-v2-timeline-item flex-md-row-reverse">
                    <div class="sgtech-v2-timeline-content text-start">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2020</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">
                                <?php _e('Vượt thử thách', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('Thích ứng linh hoạt, mở rộng dịch vụ trong đại dịch', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 3 (2022) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2022</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base"><?php _e('Bứt phá', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('Đạt 50+ dự án, khẳng định chất lượng với khách hàng quốc tế', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 4 (2024) - Right -->
                <div class="sgtech-v2-timeline-item flex-md-row-reverse">
                    <div class="sgtech-v2-timeline-content text-start">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2024</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">
                                <?php _e('Chuyên nghiệp hóa', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('Áp dụng quy trình Agile, nâng tầm chất lượng dịch vụ', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 5 (2025) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2025</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">
                                <?php _e('Hiện tại & Tương lai', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('Đối tác tin cậy của hàng trăm doanh nghiệp trong và ngoài nước', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4">
                <!-- Mission -->
                <div class="col-md-6">
                    <div class="p-4 p-lg-5 sgtech-v2-rounded-2xl h-100 sgtech-v2-bg-gradient-blue-soft">
                        <div class="sgtech-v2-icon-box mb-4 bg-secondary-soft">
                            <i class="bi bi-bullseye text-secondary"></i>
                        </div>
                        <h3 class="fw-bold mb-3 sgtech-v2-text-2xl"><?php _e('Sứ mệnh', 'saigontech-v2'); ?></h3>
                        <?php _e('Cung cấp giải pháp công nghệ <strong class="text-dark">chất lượng cao, giá cả hợp lý</strong> giúp doanh nghiệp Việt Nam tối ưu hóa quy trình vận hành, nâng cao năng lực cạnh tranh và phát triển bền vững trong kỷ nguyên số.', 'saigontech-v2'); ?>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-6">
                    <div class="p-4 p-lg-5 sgtech-v2-rounded-2xl h-100 sgtech-v2-bg-gradient-green-soft">
                        <div class="sgtech-v2-icon-box mb-4 sgtech-v2-bg-accent-soft">
                            <i class="bi bi-eye sgtech-v2-text-accent"></i>
                        </div>
                        <h3 class="fw-bold mb-3 sgtech-v2-text-2xl"><?php _e('Tầm nhìn', 'saigontech-v2'); ?></h3>
                        <?php _e('Trở thành <strong class="text-dark">công ty công nghệ hàng đầu Việt Nam</strong>, được biết đến với những giải pháp sáng tạo, đội ngũ chuyên nghiệp và cam kết vượt trội trong việc đồng hành cùng sự thành công của khách hàng.', 'saigontech-v2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="bg-primary text-white py-5">
        <div class="container py-3">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-briefcase text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1">2019</div>
                    <div class="opacity-75 small"><?php _e('Năm thành lập', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-award text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1"><?php printf(__('%d+', 'saigontech-v2'), 50); ?></div>
                    <div class="opacity-75 small"><?php _e('Dự án hoàn thành', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-mortarboard text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1"><?php printf(__('%d+', 'saigontech-v2'), 15); ?></div>
                    <div class="opacity-75 small"><?php _e('Chuyên gia công nghệ', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-heart text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1"><?php printf(__('%d%%', 'saigontech-v2'), 98); ?></div>
                    <div class="opacity-75 small"><?php _e('Khách hàng hài lòng', 'saigontech-v2'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-accent mb-3"><?php _e('DNA của SGTech', 'saigontech-v2'); ?></span>
                <h2 class="display-6 fw-bold mb-3"><?php _e('Giá trị cốt lõi', 'saigontech-v2'); ?></h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto sgtech-v2-max-w-600">
                    <?php _e('Những giá trị nền tảng định hình văn hóa, cách thức làm việc và mọi quyết định của SGTech.', 'saigontech-v2'); ?>
                </p>
            </div>

            <div class="row g-4">
                <!-- Value 1: Sáng Tạo -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-lightbulb text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl"><?php _e('Sáng Tạo', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                <?php _e('Luôn chú trọng tính sáng tạo trong công việc nhằm tạo ra những sản phẩm chất lượng, mang tính đột phá.', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 2: Chuyên Nghiệp -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-briefcase text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl">
                                <?php _e('Chuyên Nghiệp', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                <?php _e('Nâng cao năng lực team-work, tập trung phát triển từng cá nhân. Hướng tới mục tiêu chung là làm hài lòng khách hàng.', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 3: Chất Lượng -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-award text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl"><?php _e('Chất Lượng', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                <?php _e('Đảm bảo chất lượng sản phẩm với yêu cầu khắt khe từ các khách hàng khó tính nhất.', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 4: Linh Hoạt -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-arrows-angle-expand text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl"><?php _e('Linh Hoạt', 'saigontech-v2'); ?>
                            </h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                <?php _e('Đa dạng hóa các loại hình phát triển một cách linh hoạt. Áp dụng các công nghệ tiên tiến nhằm tạo nên sự khác biệt.', 'saigontech-v2'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h2 class="display-6 fw-bold mb-3"><?php _e('Bạn muốn tìm hiểu thêm về SGTech?', 'saigontech-v2'); ?>
                </h2>
                <p class="sgtech-v2-text-muted-foreground fs-5 mb-4 sgtech-v2-text-lg">
                    <?php _e('Hãy liên hệ để chúng tôi được lắng nghe và chia sẻ về những gì SGTech có thể làm cho doanh nghiệp của bạn.', 'saigontech-v2'); ?>
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary btn-lg">
                        <?php _e('Liên hệ với chúng tôi', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo sgtech_get_page_url('du-an'); ?>"
                        class="btn btn-outline-primary btn-lg"><?php _e('Xem dự án tiêu biểu', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>