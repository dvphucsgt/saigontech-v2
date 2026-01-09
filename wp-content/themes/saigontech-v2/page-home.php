<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-hero">
        <div class="sgtech-v2-hero-bg">
            <!-- Use template_directory_uri for images -->
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-team.jpg"
                alt="SGTech - Đội ngũ phát triển phần mềm">
            <div class="sgtech-v2-hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sgtech-v2-max-w-2xl">
                        <div class="sgtech-v2-hero-badge mb-4">
                            <i class="bi bi-rocket-takeoff"></i>
                            Đối tác công nghệ hàng đầu
                        </div>
                        <h1 class="text-white mb-4">
                            Kiến tạo giải pháp số cho <span class="text-secondary">doanh nghiệp
                                Việt</span>
                        </h1>
                        <p class="text-white opacity-75 mb-4 leading-relaxed">
                            SGTech đồng hành cùng hơn 50 doanh nghiệp trong hành trình chuyển đổi số,
                            mang đến giải pháp phần mềm chất lượng cao, tối ưu chi phí và thời gian.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 pt-3">
                            <a href="<?php echo sgtech_get_page_url('lien-he'); ?>" class="btn btn-secondary btn-lg">
                                Nhận tư vấn miễn phí
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                            <a href="<?php echo sgtech_get_page_url('du-an'); ?>" class="btn btn-outline-light btn-lg">
                                Xem dự án đã thực hiện
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
                        <div class="sgtech-v2-stat-label text-white">Năm kinh nghiệm</div>
                        <div class="sgtech-v2-stat-desc text-white">Trong ngành CNTT</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="150" data-suffix="+"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white">Dự án hoàn thành</div>
                        <div class="sgtech-v2-stat-desc text-white">Đa dạng lĩnh vực</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="50" data-suffix="+"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white">Khách hàng</div>
                        <div class="sgtech-v2-stat-desc text-white">Tin tưởng hợp tác</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-stat-item">
                        <div class="sgtech-v2-stat-value">
                            <span class="sgtech-v2-counter" data-target="98" data-suffix="%"
                                data-duration="2500">0</span>
                        </div>
                        <div class="sgtech-v2-stat-label text-white">Hài lòng</div>
                        <div class="sgtech-v2-stat-desc text-white">Tỷ lệ khách hàng</div>
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
                    Được tin tưởng bởi các doanh nghiệp hàng đầu
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
                            Giải pháp toàn diện
                        </span>
                        <h2 class="display-6 fw-bold mb-3">Dịch vụ của SGTech</h2>
                        <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                            Từ ý tưởng đến sản phẩm hoàn chỉnh, chúng tôi cung cấp đầy đủ dịch vụ
                            công nghệ cho doanh nghiệp của bạn.
                        </p>
                        <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>" class="btn btn-secondary">
                            Tìm hiểu chi tiết
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
                                    <h5 class="fw-bold mb-2">Phát triển phần mềm</h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        Xây dựng ứng dụng web, mobile và hệ thống quản lý doanh nghiệp theo yêu cầu
                                        riêng.
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
                                    <h5 class="fw-bold mb-2">Tư vấn chuyển đổi số</h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        Chiến lược và lộ trình số hóa toàn diện, phù hợp với từng ngành nghề.
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
                                    <h5 class="fw-bold mb-2">Giải pháp SaaS</h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        Nền tảng phần mềm đám mây sẵn sàng triển khai, tiết kiệm chi phí đầu tư.
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
                                    <h5 class="fw-bold mb-2">Bảo trì & Hỗ trợ</h5>
                                    <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                                        Dịch vụ hỗ trợ kỹ thuật 24/7, đảm bảo hệ thống vận hành liên tục.
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
                                alt="Đội ngũ SGTech trong buổi họp dự án"
                                class="w-100 sgtech-v2-aspect-square sgtech-v2-object-cover">
                        </div>
                        <!-- Floating Card -->
                        <div class="sgtech-v2-floating-card d-none d-md-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-award sgtech-v2-text-accent"></i>
                            </div>
                            <div>
                                <div class="h4 fw-bold text-primary mb-0">10+</div>
                                <div class="small sgtech-v2-text-muted-foreground">Năm kinh nghiệm</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content -->
                <div class="col-lg-6 order-1 order-lg-2">
                    <span class="badge badge-primary mb-3">Về SGTech</span>
                    <h2 class="display-6 fw-bold mb-3">Đối tác công nghệ đáng tin cậy</h2>
                    <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-4">
                        Thành lập từ năm 2014, SGTech đã phát triển từ một đội ngũ nhỏ 5 thành viên
                        thành công ty công nghệ với hơn 15 chuyên gia. Chúng tôi tự hào đã hoàn thành
                        hơn 150 dự án trong đa dạng lĩnh vực.
                    </p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span>Đội ngũ kỹ sư giàu kinh nghiệm, am hiểu nghiệp vụ</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span>Quy trình Agile linh hoạt, báo cáo minh bạch</span>
                        </li>
                        <li class="d-flex align-items-center gap-3 mb-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span>Hỗ trợ kỹ thuật 24/7 sau bàn giao</span>
                        </li>
                        <li class="d-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm sgtech-v2-bg-accent-soft">
                                <i class="bi bi-check-circle sgtech-v2-text-accent small"></i>
                            </div>
                            <span>Cam kết bảo mật thông tin tuyệt đối</span>
                        </li>
                    </ul>
                    <a href="<?php echo sgtech_get_page_url('ve-chung-toi'); ?>" class="btn btn-secondary">
                        Tìm hiểu về SGTech
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
                    Khách hàng nói gì
                </span>
                <h2 class="display-6 fw-bold mb-3">Phản hồi từ đối tác</h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto">
                    Sự tin tưởng và hài lòng của khách hàng là thước đo thành công của chúng tôi.
                </p>
            </div>

            <div class="row g-4">
                <!-- Testimonial 1 -->
                <div class="col-md-4">
                    <div class="card sgtech-v2-testimonial-card h-100">
                        <i class="bi bi-quote sgtech-v2-quote-icon fas fa-quote-right"></i>
                        <div class="card-body">
                            <p class="leading-relaxed mb-4">
                                "SGTech đã giúp chúng tôi xây dựng hệ thống ERP hoàn chỉnh trong 6 tháng. Đội ngũ
                                rất chuyên nghiệp và hiểu rõ nghiệp vụ doanh nghiệp."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-1.jpg"
                                    alt="Nguyễn Văn Minh" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Nguyễn Văn Minh</div>
                                    <div class="small sgtech-v2-text-muted-foreground">CEO</div>
                                    <div class="small text-secondary fs-8">Công ty TNHH Thương mại ABC
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
                                "Ứng dụng quản lý bất động sản do SGTech phát triển đã tăng hiệu suất làm việc lên
                                40%. Rất ấn tượng với chất lượng sản phẩm."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-2.jpg"
                                    alt="Trần Thị Lan" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Trần Thị Lan</div>
                                    <div class="small sgtech-v2-text-muted-foreground">Giám đốc Vận hành</div>
                                    <div class="small text-secondary fs-8">Tập đoàn Bất động sản XYZ</div>
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
                                "Giải pháp IoT của SGTech giúp giảm 30% thời gian downtime máy móc. Đội ngũ hỗ trợ
                                24/7 rất nhiệt tình và phản hồi nhanh."
                            </p>
                            <div class="d-flex align-items-center gap-3">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-3.jpg"
                                    alt="Lê Hoàng Phúc" class="sgtech-v2-avatar">
                                <div>
                                    <div class="fw-semibold">Lê Hoàng Phúc</div>
                                    <div class="small sgtech-v2-text-muted-foreground">Giám đốc CNTT</div>
                                    <div class="small text-secondary fs-8">Công ty Sản xuất Delta</div>
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
                <h3 class="h5 fw-semibold mb-2">Công nghệ chúng tôi sử dụng</h3>
                <p class="sgtech-v2-text-muted-foreground small">Stack công nghệ hiện đại, phù hợp với từng loại dự
                    án</p>
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
                        Tin tức & Blog
                    </span>
                    <h2 class="display-6 fw-bold mb-2">Cập nhật từ SGTech</h2>
                    <p class="sgtech-v2-text-muted-foreground sgtech-v2-max-w-500">
                        Chia sẻ kiến thức, xu hướng công nghệ và câu chuyện thành công từ các dự án thực tế.
                    </p>
                </div>
                <a href="<?php echo home_url('/blog'); ?>" class="btn btn-secondary">
                    Xem tất cả bài viết
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>

            <div class="row g-4">
                <!-- Blog 1 -->
                <div class="col-md-6 col-lg-4">
                    <a href="<?php echo home_url('/blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-digital-transformation.jpg"
                                    alt="5 xu hướng chuyển đổi số doanh nghiệp năm 2025">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-secondary">Chuyển đổi số</span>
                                    <span class="small sgtech-v2-text-muted-foreground">5 phút đọc</span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    5 xu hướng chuyển đổi số doanh nghiệp năm 2025
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    Khám phá những công nghệ và chiến lược chuyển đổi số đang định hình tương lai
                                    doanh nghiệp Việt Nam.
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
                    <a href="<?php echo home_url('/blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-iot-manufacturing.jpg"
                                    alt="Case Study: Tối ưu quy trình sản xuất với IoT">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-secondary">Case Study</span>
                                    <span class="small sgtech-v2-text-muted-foreground">8 phút đọc</span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    Case Study: Tối ưu quy trình sản xuất với IoT
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    Cách SGTech giúp doanh nghiệp sản xuất giảm 30% thời gian downtime với giải pháp
                                    IoT tích hợp.
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
                    <a href="<?php echo home_url('/blog'); ?>" class="text-decoration-none">
                        <div class="card sgtech-v2-blog-card h-100 card-hover-lift">
                            <div class="sgtech-v2-thumbnail">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-cybersecurity.jpg"
                                    alt="Bảo mật dữ liệu: Những điều doanh nghiệp cần biết">
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="badge badge-secondary">Bảo mật</span>
                                    <span class="small sgtech-v2-text-muted-foreground">6 phút đọc</span>
                                </div>
                                <h5 class="card-title fw-bold sgtech-v2-line-clamp-2 mb-2">
                                    Bảo mật dữ liệu: Những điều doanh nghiệp cần biết
                                </h5>
                                <p
                                    class="sgtech-v2-text-muted-foreground small leading-relaxed sgtech-v2-line-clamp-2 mb-3">
                                    Hướng dẫn toàn diện về bảo mật thông tin cho doanh nghiệp vừa và nhỏ trong thời
                                    đại số.
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
                <h2 class="display-6 fw-bold mb-3 text-white">Sẵn sàng nâng tầm doanh nghiệp của bạn?</h2>
                <p class="opacity-75 fs-5 leading-relaxed mb-4">
                    Liên hệ ngay với SGTech để được tư vấn miễn phí. Chúng tôi sẽ phân tích
                    nhu cầu và đề xuất giải pháp phù hợp nhất cho doanh nghiệp của bạn.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary btn-lg sgtech-v2-shadow-lg">
                        Đặt lịch tư vấn
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="tel:0986758048" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-headset me-2"></i>
                        Hotline: 0986 758 048
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>