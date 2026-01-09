<?php
/**
 * Template Name: Dịch vụ
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-hero sgtech-v2-min-h-50">
        <div class="sgtech-v2-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/services-dev.jpg"
                alt="<?php esc_attr_e('SGTech - Dịch vụ phát triển phần mềm', 'saigontech-v2'); ?>">
            <div class="sgtech-v2-hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <div class="sgtech-v2-hero-badge mb-4">
                    <i class="bi bi-layers"></i>
                    <?php _e('End-to-end Solutions', 'saigontech-v2'); ?>
                </div>
                <h1 class="text-white mb-4"><?php _e('Dịch vụ của SGTech', 'saigontech-v2'); ?></h1>
                <p class="text-white opacity-75 fs-5 leading-relaxed">
                    <?php _e('Từ tư vấn chiến lược đến phát triển và vận hành, SGTech cung cấp đầy đủ giải pháp công nghệ cho mọi giai đoạn của doanh nghiệp.', 'saigontech-v2'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Services List -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <!-- Service 1: Phát triển phần mềm -->
            <div class="row g-4 g-lg-5 align-items-center mb-5 pb-5">
                <div class="col-lg-6">
                    <div class="sgtech-v2-icon-box-lg mb-4">
                        <i class="bi bi-display fs-3"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3"><?php _e('Phát triển phần mềm theo yêu cầu', 'saigontech-v2'); ?></h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        <?php _e('Xây dựng giải pháp phần mềm tùy chỉnh hoàn toàn dựa trên nhu cầu cụ thể của doanh nghiệp, từ ứng dụng web, mobile đến hệ thống quản lý doanh nghiệp.', 'saigontech-v2'); ?>
                    </p>
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary">
                        <?php _e('Yêu cầu tư vấn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header sgtech-v2-bg-section-light py-3">
                            <h5 class="mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle sgtech-v2-text-accent"></i>
                                <?php _e('Tính năng nổi bật', 'saigontech-v2'); ?>
                            </h5>
                            <small
                                class="sgtech-v2-text-muted-foreground"><?php _e('Những gì bạn sẽ nhận được khi sử dụng dịch vụ', 'saigontech-v2'); ?></small>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-globe2 text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Ứng dụng web responsive, tối ưu SEO', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-phone text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Ứng dụng mobile iOS và Android', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-database text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Hệ thống ERP, CRM tùy chỉnh', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-layers text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Tích hợp API và hệ thống bên thứ ba', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-gear text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Kiến trúc microservices hiện đại', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-shield-check text-secondary small"></i>
                                    </div>
                                    <span class="small"><?php _e('Bảo mật và hiệu năng cao', 'saigontech-v2'); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: Tư vấn chuyển đổi số -->
            <div class="row g-4 g-lg-5 align-items-center mb-5 pb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="sgtech-v2-icon-box-lg mb-4">
                        <i class="bi bi-graph-up-arrow fs-3"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3"><?php _e('Tư vấn chuyển đổi số', 'saigontech-v2'); ?></h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        <?php _e('Đồng hành cùng doanh nghiệp trong hành trình số hóa với chiến lược và lộ trình rõ ràng, phù hợp với đặc thù ngành nghề và quy mô hoạt động.', 'saigontech-v2'); ?>
                    </p>
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary">
                        <?php _e('Yêu cầu tư vấn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card">
                        <div class="card-header sgtech-v2-bg-section-light py-3">
                            <h5 class="mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle sgtech-v2-text-accent"></i>
                                <?php _e('Tính năng nổi bật', 'saigontech-v2'); ?>
                            </h5>
                            <small
                                class="sgtech-v2-text-muted-foreground"><?php _e('Những gì bạn sẽ nhận được khi sử dụng dịch vụ', 'saigontech-v2'); ?></small>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-bar-chart text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Đánh giá hiện trạng công nghệ', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-graph-up-arrow text-secondary small"></i></div>
                                    <span
                                        class="small"><?php _e('Xây dựng chiến lược chuyển đổi số', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-layers text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Thiết kế lộ trình triển khai chi tiết', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-gear text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Tư vấn lựa chọn công nghệ phù hợp', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-globe2 text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Đào tạo và chuyển giao kiến thức', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-lightning text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Hỗ trợ quản lý thay đổi tổ chức', 'saigontech-v2'); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Giải pháp SaaS -->
            <div class="row g-4 g-lg-5 align-items-center mb-5 pb-5">
                <div class="col-lg-6">
                    <div class="sgtech-v2-icon-box-lg mb-4">
                        <i class="bi bi-cloud fs-3"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3"><?php _e('Giải pháp SaaS cho doanh nghiệp', 'saigontech-v2'); ?></h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        <?php _e('Nền tảng phần mềm đám mây sẵn sàng sử dụng, linh hoạt mở rộng theo nhu cầu, giúp doanh nghiệp tiết kiệm chi phí đầu tư ban đầu.', 'saigontech-v2'); ?>
                    </p>
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary">
                        <?php _e('Yêu cầu tư vấn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header sgtech-v2-bg-section-light py-3">
                            <h5 class="mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle sgtech-v2-text-accent"></i>
                                <?php _e('Tính năng nổi bật', 'saigontech-v2'); ?>
                            </h5>
                            <small
                                class="sgtech-v2-text-muted-foreground"><?php _e('Những gì bạn sẽ nhận được khi sử dụng dịch vụ', 'saigontech-v2'); ?></small>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-lightning text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Triển khai nhanh chóng, không cần cài đặt', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-gear text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Cập nhật tự động, luôn có phiên bản mới', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-bar-chart text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Thanh toán linh hoạt theo nhu cầu', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-shield-check text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Bảo mật dữ liệu tiêu chuẩn quốc tế', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-layers text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Tích hợp dễ dàng với hệ thống hiện có', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="sgtech-v2-icon-box-sm"><i class="bi bi-phone text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Hỗ trợ đa nền tảng và thiết bị', 'saigontech-v2'); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 4: Bảo trì & Hỗ trợ -->
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="sgtech-v2-icon-box-lg mb-4">
                        <i class="bi bi-headset fs-3"></i>
                    </div>
                    <h2 class="h3 fw-bold mb-3"><?php _e('Bảo trì & Hỗ trợ kỹ thuật', 'saigontech-v2'); ?></h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        <?php _e('Dịch vụ hỗ trợ toàn diện đảm bảo hệ thống vận hành ổn định 24/7, nhanh chóng xử lý sự cố và cập nhật bảo mật thường xuyên.', 'saigontech-v2'); ?>
                    </p>
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary">
                        <?php _e('Yêu cầu tư vấn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="card">
                        <div class="card-header sgtech-v2-bg-section-light py-3">
                            <h5 class="mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle sgtech-v2-text-accent"></i>
                                <?php _e('Tính năng nổi bật', 'saigontech-v2'); ?>
                            </h5>
                            <small
                                class="sgtech-v2-text-muted-foreground"><?php _e('Những gì bạn sẽ nhận được khi sử dụng dịch vụ', 'saigontech-v2'); ?></small>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-headset text-secondary small"></i>
                                    </div>
                                    <span class="small"><?php _e('Hỗ trợ kỹ thuật 24/7', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-display text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Giám sát hệ thống liên tục', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-shield-check text-secondary small"></i>
                                    </div>
                                    <span class="small"><?php _e('Cập nhật bảo mật định kỳ', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-database text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Sao lưu và phục hồi dữ liệu', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3 mb-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-lightning text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Tối ưu hóa hiệu năng hệ thống', 'saigontech-v2'); ?></span>
                                </li>
                                <li class="d-flex align-items-start gap-3">
                                    <div class="sgtech-v2-icon-box-sm"><i
                                            class="bi bi-bar-chart text-secondary small"></i>
                                    </div>
                                    <span
                                        class="small"><?php _e('Báo cáo và phân tích định kỳ', 'saigontech-v2'); ?></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-secondary mb-3 fs-7">
                    <i class="bi bi-gear me-1"></i>
                    <?php _e('Quy trình chuyên nghiệp', 'saigontech-v2'); ?>
                </span>
                <h2 class="display-6 fw-bold mb-3"><?php _e('Cách SGTech làm việc', 'saigontech-v2'); ?></h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto sgtech-v2-max-w-600">
                    <?php _e('Quy trình 4 bước rõ ràng, minh bạch, đảm bảo dự án được hoàn thành đúng tiến độ và chất lượng.', 'saigontech-v2'); ?>
                </p>
            </div>

            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sgtech-v2-process-step h-100">
                        <div class="sgtech-v2-step-number">01</div>
                        <h5 class="fw-semibold mb-2"><?php _e('Khám phá & Phân tích', 'saigontech-v2'); ?></h5>
                        <p class="sgtech-v2-text-muted-foreground small mb-2">
                            <?php _e('Lắng nghe, tìm hiểu sâu về nghiệp vụ và xác định rõ mục tiêu dự án', 'saigontech-v2'); ?>
                        </p>
                        <p class="small sgtech-v2-text-muted-foreground fst-italic mb-0">
                            <?php _e('Workshop với stakeholders, phân tích yêu cầu, nghiên cứu thị trường', 'saigontech-v2'); ?>
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sgtech-v2-process-step h-100">
                        <div class="sgtech-v2-step-number">02</div>
                        <h5 class="fw-semibold mb-2"><?php _e('Thiết kế & Đề xuất', 'saigontech-v2'); ?></h5>
                        <p class="sgtech-v2-text-muted-foreground small mb-2">
                            <?php _e('Đề xuất giải pháp tối ưu, thiết kế UI/UX và kiến trúc hệ thống', 'saigontech-v2'); ?>
                        </p>
                        <p class="small sgtech-v2-text-muted-foreground fst-italic mb-0">
                            <?php _e('Wireframe, Prototype, Technical Architecture, Báo giá chi tiết', 'saigontech-v2'); ?>
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sgtech-v2-process-step h-100">
                        <div class="sgtech-v2-step-number">03</div>
                        <h5 class="fw-semibold mb-2"><?php _e('Phát triển & Kiểm thử', 'saigontech-v2'); ?></h5>
                        <p class="sgtech-v2-text-muted-foreground small mb-2">
                            <?php _e('Xây dựng sản phẩm theo phương pháp Agile, demo thường xuyên', 'saigontech-v2'); ?>
                        </p>
                        <p class="small sgtech-v2-text-muted-foreground fst-italic mb-0">
                            <?php _e('Sprint 2 tuần, Demo sau mỗi sprint, QA song song', 'saigontech-v2'); ?>
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="sgtech-v2-process-step h-100">
                        <div class="sgtech-v2-step-number">04</div>
                        <h5 class="fw-semibold mb-2"><?php _e('Triển khai & Đào tạo', 'saigontech-v2'); ?></h5>
                        <p class="sgtech-v2-text-muted-foreground small mb-2">
                            <?php _e('Go-live an toàn, đào tạo người dùng và chuyển giao tài liệu', 'saigontech-v2'); ?>
                        </p>
                        <p class="small sgtech-v2-text-muted-foreground fst-italic mb-0">
                            <?php _e('UAT, Go-live, Training, Documentation, Warranty', 'saigontech-v2'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-5 sgtech-v2-bg-section-light border-top border-bottom">
        <div class="container">
            <div class="text-center mb-4">
                <h3 class="h5 fw-semibold mb-2"><?php _e('Công nghệ chúng tôi sử dụng', 'saigontech-v2'); ?></h3>
                <p class="sgtech-v2-text-muted-foreground small">
                    <?php _e('Stack công nghệ hiện đại, phù hợp với từng loại dự án', 'saigontech-v2'); ?>
                </p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-react-original colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">React</span>
                        <span class="sgtech-v2-category">Frontend</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-nodejs-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">Node.js</span>
                        <span class="sgtech-v2-category">Backend</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-python-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">Python</span>
                        <span class="sgtech-v2-category">AI/ML</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-java-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">Java</span>
                        <span class="sgtech-v2-category">Enterprise</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-dotnetcore-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">.NET</span>
                        <span class="sgtech-v2-category">Enterprise</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-amazonwebservices-plain-wordmark colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">AWS</span>
                        <span class="sgtech-v2-category">Cloud</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-azure-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">Azure</span>
                        <span class="sgtech-v2-category">Cloud</span>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-postgresql-plain colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">PostgreSQL</span>
                        <span class="sgtech-v2-category">Database</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sgtech-v2-section-padding bg-primary text-white">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h2 class="display-6 fw-bold mb-3"><?php _e('Bạn cần giải pháp công nghệ?', 'saigontech-v2'); ?></h2>
                <p class="opacity-75 fs-5 leading-relaxed mb-4">
                    <?php _e('Dù bạn đang bắt đầu chuyển đổi số hay cần nâng cấp hệ thống hiện có, SGTech sẵn sàng lắng nghe và đề xuất giải pháp tối ưu.', 'saigontech-v2'); ?>
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary btn-lg sgtech-v2-shadow-lg">
                        <?php _e('Nhận tư vấn miễn phí', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo sgtech_get_page_url('du-an'); ?>"
                        class="btn btn-outline-light btn-lg"><?php _e('Xem dự án mẫu', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>