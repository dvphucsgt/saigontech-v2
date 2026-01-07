<?php
/**
 * Template Name: Về chúng tôi
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-hero sgtech-v2-min-h-50">
        <div class="sgtech-v2-hero-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-team.jpg" alt="Đội ngũ SGTech">
            <div class="sgtech-v2-hero-overlay"></div>
        </div>
        <div class="container position-relative">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h1 class="text-white mb-4">Về SGTech</h1>
                <p class="text-white opacity-75 fs-5 leading-relaxed">
                    Hơn 10 năm kinh nghiệm, SGTech tự hào là đối tác công nghệ tin cậy
                    đồng hành cùng hơn 30 doanh nghiệp Việt trong hành trình chuyển đổi số.
                </p>
            </div>
        </div>
    </section>

    <!-- Story Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Content -->
                <div class="col-lg-6">
                    <span class="badge badge-secondary mb-3 fs-7">Câu chuyện của chúng tôi</span>
                    <h2 class="display-6 fw-bold mb-4">Từ đam mê công nghệ đến đối tác tin cậy</h2>
                    <div class="sgtech-v2-text-muted-foreground leading-relaxed">
                        <p>
                            <strong class="text-dark">SGTech được thành lập vào năm 2014</strong> bởi nhóm 5 kỹ sư
                            công nghệ đam mê với tầm nhìn: trở thành đối tác tin cậy cho các doanh nghiệp
                            Việt Nam trong hành trình số hóa.
                        </p>
                        <p>
                            Xuất phát từ những dự án nhỏ cho startup và SME, chúng tôi dần khẳng định
                            uy tín qua chất lượng sản phẩm và sự tận tâm với khách hàng. Sau hơn 10 năm,
                            SGTech đã phát triển thành đội ngũ <strong class="text-dark">15+ chuyên gia công
                                nghệ</strong>,
                            hoàn thành <strong class="text-dark">50+ dự án đa dạng</strong> trong các lĩnh vực:
                            bất động sản, bán lẻ, sản xuất, logistics, y tế...
                        </p>
                        <p>
                            Chúng tôi tin rằng công nghệ không chỉ là công cụ, mà là động lực
                            giúp doanh nghiệp bứt phá. Mỗi dự án của SGTech đều được thực hiện
                            với cam kết: <strong class="text-dark">chất lượng, đúng tiến độ, đồng hành lâu
                                dài</strong>.
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-team.jpg"
                                alt="Đội ngũ SGTech trong buổi họp chiến lược"
                                class="w-100 sgtech-v2-aspect-square sgtech-v2-object-cover">
                        </div>
                        <!-- Floating Card -->
                        <div class="sgtech-v2-floating-card d-none d-md-flex align-items-center gap-3">
                            <div class="sgtech-v2-icon-box-sm bg-secondary-soft">
                                <i class="bi bi-briefcase text-secondary"></i>
                            </div>
                            <div>
                                <div class="fw-bold text-primary mb-0 sgtech-v2-text-3xl">10+</div>
                                <div class="small sgtech-v2-text-muted-foreground">Năm kinh nghiệm</div>
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
                <h2 class="display-6 fw-bold mb-3">Hành trình phát triển</h2>
                <p class="sgtech-v2-text-muted-foreground">Những cột mốc quan trọng đánh dấu sự trưởng thành của
                    SGTech.</p>
            </div>

            <div class="sgtech-v2-timeline">
                <!-- Milestone 1 (2014) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2014</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">Khởi đầu</h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">SGTech được thành lập với 5 thành
                                viên sáng
                                lập</p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 2 (2016) - Right -->
                <div class="sgtech-v2-timeline-item flex-md-row-reverse">
                    <div class="sgtech-v2-timeline-content text-start">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2016</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">Mở rộng</h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">Hoàn thành dự án thứ 10, đội ngũ
                                tăng lên 8
                                người</p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 3 (2019) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2019</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">Bứt phá</h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">Phục vụ hơn 20 khách hàng doanh
                                nghiệp</p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 4 (2022) - Right -->
                <div class="sgtech-v2-timeline-item flex-md-row-reverse">
                    <div class="sgtech-v2-timeline-content text-start">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2022</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">Chuyên nghiệp hóa</h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">Áp dụng quy trình Agile, đạt 50+
                                dự án</p>
                        </div>
                    </div>
                    <div class="sgtech-v2-timeline-dot"></div>
                    <div class="sgtech-v2-timeline-spacer"></div>
                </div>

                <!-- Milestone 5 (2024) - Left -->
                <div class="sgtech-v2-timeline-item">
                    <div class="sgtech-v2-timeline-content sgtech-v2-text-end">
                        <div class="sgtech-v2-timeline-card">
                            <div class="text-secondary fw-bold fs-5 mb-1">2024</div>
                            <h5 class="fw-semibold mb-2 sgtech-v2-text-base">Hiện tại</h5>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">15+ chuyên gia, đối tác tin cậy
                                của 30+
                                doanh nghiệp</p>
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
                        <h3 class="fw-bold mb-3 sgtech-v2-text-2xl">Sứ mệnh</h3>
                        <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-0">
                            Cung cấp giải pháp công nghệ <strong class="text-dark">chất lượng cao, giá cả hợp
                                lý</strong> giúp
                            doanh nghiệp Việt Nam tối ưu hóa quy trình vận hành, nâng cao năng lực
                            cạnh tranh và phát triển bền vững trong kỷ nguyên số.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-md-6">
                    <div class="p-4 p-lg-5 sgtech-v2-rounded-2xl h-100 sgtech-v2-bg-gradient-green-soft">
                        <div class="sgtech-v2-icon-box mb-4 sgtech-v2-bg-accent-soft">
                            <i class="bi bi-eye sgtech-v2-text-accent"></i>
                        </div>
                        <h3 class="fw-bold mb-3 sgtech-v2-text-2xl">Tầm nhìn</h3>
                        <p class="sgtech-v2-text-muted-foreground leading-relaxed mb-0">
                            Trở thành <strong class="text-dark">công ty công nghệ hàng đầu Việt Nam</strong>, được
                            biết đến với
                            những giải pháp sáng tạo, đội ngũ chuyên nghiệp và cam kết vượt trội
                            trong việc đồng hành cùng sự thành công của khách hàng.
                        </p>
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
                    <div class="h2 fw-bold text-secondary mb-1">2014</div>
                    <div class="opacity-75 small">Năm thành lập</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-award text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1">50+</div>
                    <div class="opacity-75 small">Dự án hoàn thành</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-mortarboard text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1">15+</div>
                    <div class="opacity-75 small">Chuyên gia công nghệ</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-icon-box-sm mx-auto mb-3 bg-secondary-muted">
                        <i class="bi bi-heart text-secondary"></i>
                    </div>
                    <div class="h2 fw-bold text-secondary mb-1">98%</div>
                    <div class="opacity-75 small">Khách hàng hài lòng</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge badge-accent mb-3">DNA của SGTech</span>
                <h2 class="display-6 fw-bold mb-3">Giá trị cốt lõi</h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto sgtech-v2-max-w-600">
                    Những giá trị nền tảng định hình văn hóa, cách thức làm việc
                    và mọi quyết định của SGTech.
                </p>
            </div>

            <div class="row g-4">
                <!-- Value 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-heart text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl">Tận tâm</h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                Lắng nghe và thấu hiểu nhu cầu khách hàng, đặt lợi ích của họ lên hàng đầu trong mọi
                                quyết định.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-shield-check text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl">Chính trực</h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                Minh bạch trong giao tiếp, trung thực về năng lực và cam kết thực hiện đúng những gì
                                đã hứa.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-lightning text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl">Sáng tạo</h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                Không ngừng học hỏi, áp dụng công nghệ mới để tìm kiếm giải pháp tối ưu cho từng bài
                                toán.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Value 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 text-center">
                        <div class="card-body p-4">
                            <div class="sgtech-v2-icon-box mx-auto mb-4 sgtech-v2-bg-gradient-blue-emerald">
                                <i class="bi bi-people text-secondary"></i>
                            </div>
                            <h5 class="fw-semibold mb-3 sgtech-v2-text-xl">Hợp tác</h5>
                            <p class="sgtech-v2-text-muted-foreground small leading-relaxed mb-0">
                                Xây dựng mối quan hệ đối tác lâu dài, cùng khách hàng phát triển và thành công.
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
                <h2 class="display-6 fw-bold mb-3">Bạn muốn tìm hiểu thêm về SGTech?</h2>
                <p class="sgtech-v2-text-muted-foreground fs-5 mb-4 sgtech-v2-text-lg">
                    Hãy liên hệ để chúng tôi được lắng nghe và chia sẻ về những gì
                    SGTech có thể làm cho doanh nghiệp của bạn.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo home_url('/lien-he'); ?>" class="btn btn-secondary btn-lg">
                        Liên hệ với chúng tôi
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo home_url('/du-an'); ?>" class="btn btn-outline-primary btn-lg">Xem dự án tiêu
                        biểu</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>