<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-hero">
        <div class="sgtech-v2-hero-bg">
            <!-- Use template_directory_uri for images -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-team.jpg"
                alt="<?php esc_attr_e('SGTech - Đội ngũ phát triển phần mềm', 'saigontech-v2'); ?>">
            <div class="sgtech-v2-hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sgtech-v2-max-w-2xl">
                        <div class="sgtech-v2-hero-badge mb-4">
                            <i class="bi bi-rocket-takeoff"></i>
                            <?php _e('Đối tác công nghệ hàng đầu', 'saigontech-v2'); ?>
                        </div>
                        <h1 class="text-white mb-4">
                            <?php printf(__('Kiến tạo giải pháp số cho %s', 'saigontech-v2'), '<span class="text-secondary">' . __('doanh nghiệp Việt', 'saigontech-v2') . '</span>'); ?>
                        </h1>
                        <p class="text-white opacity-75 mb-4 leading-relaxed">
                            <?php _e('SGTech đồng hành cùng hơn 50 doanh nghiệp trong hành trình chuyển đổi số, mang đến giải pháp phần mềm chất lượng cao, tối ưu chi phí và thời gian.', 'saigontech-v2'); ?>
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 pt-3">
                            <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary btn-lg">
                                <?php _e('Nhận tư vấn miễn phí', 'saigontech-v2'); ?>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="<?php echo sgtech_get_page_url('du-an'); ?>" class="btn btn-outline-light btn-lg">
                                <?php _e('Xem dự án đã thực hiện', 'saigontech-v2'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="sgtech-v2-stats-section py-5">
        <div class="container py-4">
            <div class="row g-4">
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="10" data-suffix="+"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white"><?php _e('Năm kinh nghiệm', 'saigontech-v2'); ?>
                        </div>
                        <div class="sgtech-v2-stat-desc text-white"><?php _e('Trong ngành CNTT', 'saigontech-v2'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="150" data-suffix="+"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white"><?php _e('Dự án hoàn thành', 'saigontech-v2'); ?>
                        </div>
                        <div class="sgtech-v2-stat-desc text-white"><?php _e('Đa dạng lĩnh vực', 'saigontech-v2'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="50" data-suffix="+"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white"><?php _e('Khách hàng', 'saigontech-v2'); ?></div>
                        <div class="sgtech-v2-stat-desc text-white"><?php _e('Tin tưởng hợp tác', 'saigontech-v2'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="98" data-suffix="%"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white"><?php _e('Hài lòng', 'saigontech-v2'); ?></div>
                        <div class="sgtech-v2-stat-desc text-white"><?php _e('Tỷ lệ khách hàng', 'saigontech-v2'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Logos Section -->
    <section class="py-5 border-bottom">
        <div class="container">
            <div class="text-center mb-4">
                <p class="sgtech-v2-text-muted-foreground text-uppercase small fw-medium letter-spacing-1">
                    <?php _e('Được tin tưởng bởi các doanh nghiệp hàng đầu', 'saigontech-v2'); ?>
                </p>
            </div>
            <div class="row g-3">
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">TCV</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">TechCorp
                                Vietnam</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">SRE</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">Saigon Real
                                Estate</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">DM</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">Delta
                                Manufacturing
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">VRG</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">VN Retail
                                Group</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">PL</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">Pacific
                                Logistics</div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-2">
                    <div class="sgtech-v2-client-logo">
                        <div class="text-center">
                            <div class="sgtech-v2-abbr">GE</div>
                            <div class="small sgtech-v2-text-muted-foreground mt-1 d-none d-md-block">Green Energy
                                VN</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left Side - Header -->
                <div class="col-lg-5">
                    <div class="position-lg-sticky sgtech-v2-sticky-top-24">
                        <span class="badge badge-secondary mb-3 fs-7">
                            <i class="bi bi-bar-chart me-1"></i>
                            <?php _e('Giải pháp toàn diện', 'saigontech-v2'); ?>
                        </span>
                        <h2 class="display-6 fw-bold mb-3"><?php _e('Dịch vụ của SGTech', 'saigontech-v2'); ?></h2>
                        <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                            <?php _e('Từ ý tưởng đến sản phẩm hoàn chỉnh, chúng tôi cung cấp đầy đủ dịch vụ công nghệ cho doanh nghiệp của bạn.', 'saigontech-v2'); ?>
                        </p>
                        <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>" class="btn btn-secondary">
                            <?php _e('Tìm hiểu chi tiết', 'saigontech-v2'); ?>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Side - Services Grid -->
                <div class="col-lg-7">
                    <div class="row g-4">
                        <!-- Service 1 -->
                        <div class="col-sm-6">
                            <div class="card sgtech-v2-service-card h-100 card-hover-lift">
                                <span class="sgtech-v2-highlight-badge">Custom Development</span>
                                <div class="card-body pt-5">
                                    <div class="sgtech-v2-icon-box mb-4">
                                        <i class="bi bi-display"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2"><?php _e('Phát triển phần mềm', 'saigontech-v2'); ?></h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        <?php _e('Xây dựng ứng dụng web, mobile và hệ thống quản lý doanh nghiệp theo yêu cầu riêng.', 'saigontech-v2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 2 -->
                        <div class="col-sm-6">
                            <div class="card sgtech-v2-service-card h-100 card-hover-lift">
                                <span class="sgtech-v2-highlight-badge">Digital Strategy</span>
                                <div class="card-body pt-5">
                                    <div class="sgtech-v2-icon-box mb-4">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2"><?php _e('Tư vấn chuyển đổi số', 'saigontech-v2'); ?></h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        <?php _e('Chiến lược và lộ trình số hóa toàn diện, phù hợp với từng ngành nghề.', 'saigontech-v2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 3 -->
                        <div class="col-sm-6">
                            <div class="card sgtech-v2-service-card h-100 card-hover-lift">
                                <span class="sgtech-v2-highlight-badge">Cloud-Ready</span>
                                <div class="card-body pt-5">
                                    <div class="sgtech-v2-icon-box mb-4">
                                        <i class="bi bi-cloud"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2"><?php _e('Giải pháp SaaS', 'saigontech-v2'); ?></h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        <?php _e('Nền tảng phần mềm đám mây sẵn sàng triển khai, tiết kiệm chi phí đầu tư.', 'saigontech-v2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Service 4 -->
                        <div class="col-sm-6">
                            <div class="card sgtech-v2-service-card h-100 card-hover-lift">
                                <span class="sgtech-v2-highlight-badge">24/7 Support</span>
                                <div class="card-body pt-5">
                                    <div class="sgtech-v2-icon-box mb-4">
                                        <i class="bi bi-headset"></i>
                                    </div>
                                    <h5 class="fw-bold mb-2"><?php _e('Bảo trì & Hỗ trợ', 'saigontech-v2'); ?></h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        <?php _e('Dịch vụ hỗ trợ kỹ thuật 24/7, đảm bảo hệ thống vận hành liên tục.', 'saigontech-v2'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Preview Section -->
    <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Image -->
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="position-relative">
                        <div class="sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-team.jpg"
                                alt="<?php esc_attr_e('Đội ngũ SGTech trong buổi họp dự án', 'saigontech-v2'); ?>"
                                class="w-100 sgtech-v2-aspect-square sgtech-v2-object-cover">
                        </div>
                        <!-- Floating Card -->
                        <div class="sgtech-v2-floating-card d-none d-md-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-award sgtech-v2-text-accent"></i>
                            </div>
                            <div>
                                <div class="h4 fw-bold text-primary mb-0">10+</div>
                                <div class="small sgtech-v2-text-muted-foreground">
                                    <?php _e('Năm kinh nghiệm', 'saigontech-v2'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <span class="badge badge-primary mb-3"><?php _e('Về SGTech', 'saigontech-v2'); ?></span>
                    <h2 class="display-6 fw-bold mb-3"><?php _e('Đối tác công nghệ đáng tin cậy', 'saigontech-v2'); ?>
                    </h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        <?php _e('Thành lập từ năm 2014, SGTech đã phát triển từ một đội ngũ nhỏ 5 thành viên thành công ty công nghệ với hơn 15 chuyên gia. Chúng tôi tự hào đã hoàn thành hơn 150 dự án trong đa dạng lĩnh vực.', 'saigontech-v2'); ?>
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span><?php _e('Đội ngũ kỹ sư giàu kinh nghiệm, am hiểu nghiệp vụ', 'saigontech-v2'); ?></span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span><?php _e('Quy trình Agile linh hoạt, báo cáo minh bạch', 'saigontech-v2'); ?></span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span><?php _e('Hỗ trợ kỹ thuật 24/7 sau bàn giao', 'saigontech-v2'); ?></span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span><?php _e('Cam kết bảo mật thông tin tuyệt đối', 'saigontech-v2'); ?></span>
                        </li>
                    </ul>
                    <a href="<?php echo sgtech_get_page_url('ve-chung-toi'); ?>" class="btn btn-secondary">
                        <?php _e('Tìm hiểu về SGTech', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-accent mb-3 fs-7">
                    <i class="bi bi-quote me-1"></i>
                    <?php _e('Khách hàng nói gì', 'saigontech-v2'); ?>
                </span>
                <h2 class="display-6 fw-bold mb-3"><?php _e('Phản hồi từ đối tác', 'saigontech-v2'); ?></h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto">
                    <?php _e('Sự tin tưởng và hài lòng của khách hàng là thước đo thành công của chúng tôi.', 'saigontech-v2'); ?>
                </p>
            </div>

            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4">
                    <div class="card sgtech-v2-testimonial-card h-100">
                        <i class="bi bi-quote sgtech-v2-quote-icon fas fa-quote-right"></i>
                        <div class="card-body">
                            <p class="leading-relaxed mb-4">
                                <?php _e('"SGTech đã giúp chúng tôi xây dựng hệ thống ERP hoàn chỉnh trong 6 tháng. Đội ngũ rất chuyên nghiệp và hiểu rõ nghiệp vụ doanh nghiệp."', 'saigontech-v2'); ?>
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.jpg"
                                    alt="Nguyễn Văn Minh" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Nguyễn Văn Minh</div>
                                    <div class="small sgtech-v2-text-muted-foreground">CEO</div>
                                    <div class="small text-secondary fs-8">
                                        <?php _e('Công ty TNHH Thương mại ABC', 'saigontech-v2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="col-md-4">
                    <div class="card sgtech-v2-testimonial-card h-100">
                        <i class="bi bi-quote sgtech-v2-quote-icon"></i>
                        <div class="card-body">
                            <p class="leading-relaxed mb-4">
                                <?php _e('"Ứng dụng quản lý bất động sản do SGTech phát triển đã tăng hiệu suất làm việc lên 40%. Rất ấn tượng với chất lượng sản phẩm."', 'saigontech-v2'); ?>
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-2.jpg"
                                    alt="Trần Thị Lan" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Trần Thị Lan</div>
                                    <div class="small sgtech-v2-text-muted-foreground">
                                        <?php _e('Giám đốc Vận hành', 'saigontech-v2'); ?></div>
                                    <div class="small text-secondary fs-8">
                                        <?php _e('Tập đoàn Bất động sản XYZ', 'saigontech-v2'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="col-md-4">
                    <div class="card sgtech-v2-testimonial-card h-100">
                        <i class="bi bi-quote sgtech-v2-quote-icon"></i>
                        <div class="card-body">
                            <p class="leading-relaxed mb-4">
                                <?php _e('"Giải pháp IoT của SGTech giúp giảm 30% thời gian downtime máy móc. Đội ngũ hỗ trợ 24/7 rất nhiệt tình và phản hồi nhanh."', 'saigontech-v2'); ?>
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-3.jpg"
                                    alt="Lê Hoàng Phúc" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Lê Hoàng Phúc</div>
                                    <div class="small sgtech-v2-text-muted-foreground">
                                        <?php _e('Giám đốc CNTT', 'saigontech-v2'); ?></div>
                                    <div class="small text-secondary fs-8">
                                        <?php _e('Công ty Sản xuất Delta', 'saigontech-v2'); ?></div>
                                </div>
                            </div>
                        </div>
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
                    <?php _e('Stack công nghệ hiện đại, phù hợp với từng loại dự án', 'saigontech-v2'); ?></p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-sm-4 col-lg">
                    <div class="sgtech-v2-tech-badge">
                        <i class="devicon-react-original colored sgtech-v2-tech-icon"></i>
                        <span class="sgtech-v2-name">React</span>
                        <span class="sgtech-v2-category">Frontend</span>
                    </div>
                </div>
                <!-- ... (Repeated items could be dynamic but static for now) ... -->
                <!-- Ideally these should be dynamic or kept as is for static frontpage -->
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

    <!-- Blog Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end gap-3 mb-5">
                <div>
                    <span class="badge badge-secondary mb-3 fs-7">
                        <i class="bi bi-newspaper me-1"></i>
                        <?php _e('Tin tức & Blog', 'saigontech-v2'); ?>
                    </span>
                    <h2 class="display-6 fw-bold mb-2"><?php _e('Cập nhật từ SGTech', 'saigontech-v2'); ?></h2>
                    <p class="sgtech-v2-text-muted-foreground sgtech-v2-max-w-500">
                        <?php _e('Chia sẻ kiến thức, xu hướng công nghệ và câu chuyện thành công từ các dự án thực tế.', 'saigontech-v2'); ?>
                    </p>
                </div>
                <a href="<?php echo sgtech_get_page_url('blog'); ?>" class="btn btn-secondary">
                    <?php _e('Xem tất cả bài viết', 'saigontech-v2'); ?>
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo sgtech_get_page_url('blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg"
                                    alt="<?php esc_attr_e('5 xu hướng chuyển đổi số doanh nghiệp năm 2025', 'saigontech-v2'); ?>">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span
                                        class="badge badge-secondary"><?php _e('Chuyển đổi số', 'saigontech-v2'); ?></span>
                                    <span
                                        class="small sgtech-v2-text-muted-foreground"><?php printf(__('%d phút đọc', 'saigontech-v2'), 5); ?></span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    <?php _e('5 xu hướng chuyển đổi số doanh nghiệp năm 2025', 'saigontech-v2'); ?>
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    <?php _e('Khám phá những công nghệ và chiến lược chuyển đổi số đang định hình tương lai doanh nghiệp Việt Nam.', 'saigontech-v2'); ?>
                                </p>
                                <div class="d-flex align-items-center small sgtech-v2-text-muted-foreground">
                                    <i class="bi bi-calendar3 me-2"></i>
                                    28/12/2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- ... (Blogs 2 and 3 similar) ... -->
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo sgtech_get_page_url('blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-iot-manufacturing.jpg"
                                    alt="<?php esc_attr_e('Case Study: Tối ưu quy trình sản xuất với IoT', 'saigontech-v2'); ?>">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span
                                        class="badge badge-secondary"><?php _e('Case Study', 'saigontech-v2'); ?></span>
                                    <span
                                        class="small sgtech-v2-text-muted-foreground"><?php printf(__('%d phút đọc', 'saigontech-v2'), 8); ?></span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    <?php _e('Case Study: Tối ưu quy trình sản xuất với IoT', 'saigontech-v2'); ?>
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    <?php _e('Cách SGTech giúp doanh nghiệp sản xuất giảm 30% thời gian downtime với giải pháp IoT tích hợp.', 'saigontech-v2'); ?>
                                </p>
                                <div class="d-flex align-items-center small sgtech-v2-text-muted-foreground">
                                    <i class="bi bi-calendar3 me-2"></i>
                                    20/12/2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo sgtech_get_page_url('blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-cybersecurity.jpg"
                                    alt="<?php esc_attr_e('Bảo mật dữ liệu: Những điều doanh nghiệp cần biết', 'saigontech-v2'); ?>">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-secondary"><?php _e('Bảo mật', 'saigontech-v2'); ?></span>
                                    <span
                                        class="small sgtech-v2-text-muted-foreground"><?php printf(__('%d phút đọc', 'saigontech-v2'), 6); ?></span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    <?php _e('Bảo mật dữ liệu: Những điều doanh nghiệp cần biết', 'saigontech-v2'); ?>
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    <?php _e('Hướng dẫn toàn diện về bảo mật thông tin cho doanh nghiệp vừa và nhỏ trong thời đại số.', 'saigontech-v2'); ?>
                                </p>
                                <div class="d-flex align-items-center small sgtech-v2-text-muted-foreground">
                                    <i class="bi bi-calendar3 me-2"></i>
                                    15/12/2024
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sgtech-v2-section-padding bg-primary text-white">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-3xl">
                <h2 class="display-6 fw-bold mb-3 text-white">
                    <?php _e('Sẵn sàng nâng tầm doanh nghiệp của bạn?', 'saigontech-v2'); ?></h2>
                <p class="opacity-75 fs-5 leading-relaxed mb-4">
                    <?php _e('Liên hệ ngay với SGTech để được tư vấn miễn phí. Chúng tôi sẽ phân tích nhu cầu và đề xuất giải pháp phù hợp nhất cho doanh nghiệp của bạn.', 'saigontech-v2'); ?>
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary btn-lg sgtech-v2-shadow-lg">
                        <?php _e('Đặt lịch tư vấn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="tel:0986758048" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-headset me-2"></i>
                        <?php _e('Hotline: 0986 758 048', 'saigontech-v2'); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>