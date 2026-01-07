<?php
/**
 * Template Name: Dự án
 */
get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="sgtech-v2-section-padding bg-primary text-white">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <div class="sgtech-v2-hero-badge mb-4">
                    <i class="bi bi-graph-up-arrow"></i>
                    Kết quả thực tế
                </div>
                <h1 class="mb-4 text-white">Dự án tiêu biểu</h1>
                <p class="opacity-75 fs-5 leading-relaxed">
                    Mỗi dự án là một câu chuyện về sự hợp tác, sáng tạo và cam kết
                    mang lại giá trị thực sự cho khách hàng.
                </p>
            </div>
        </div>
    </section>

    <!-- Projects List -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <!-- Project 1: PropTech Manager -->
            <div class="row g-4 g-lg-5 align-items-start mb-5 pb-5">
                <div class="col-lg-6">
                    <div class="position-relative sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-realestate.jpg"
                            alt="PropTech Manager" class="w-100 sgtech-v2-object-cover sgtech-v2-aspect-4-3">
                        <span class="position-absolute top-0 start-0 m-3 badge bg-primary">
                            <i class="bi bi-building me-1"></i>
                            Bất động sản
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">PropTech Manager - Hệ thống quản lý BĐS</h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            Công ty CP Địa ốc ABC
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            8 tháng
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">React</span>
                        <span class="badge badge-secondary">Node.js</span>
                        <span class="badge badge-secondary">PostgreSQL</span>
                        <span class="badge badge-secondary">AWS</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Thách thức</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            Khách hàng đang sử dụng nhiều công cụ rời rạc (Excel, Google Sheets, CRM riêng) để quản
                            lý quỹ căn hộ, khách hàng tiềm năng và hợp đồng bán hàng. Việc này gây mất thời gian, dễ
                            sai sót và khó theo dõi báo cáo.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Giải pháp SGTech</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            SGTech phát triển nền tảng PropTech Manager toàn diện với các module: Quỹ sản phẩm
                            (5,000+ căn), CRM khách hàng, Quản lý hợp đồng điện tử, Dashboard báo cáo real-time.
                            Tích hợp với hệ thống kế toán và marketing automation.
                        </p>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">40%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Giảm thời gian xử lý giao
                                    dịch</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">25%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Tăng tỷ lệ chuyển đổi khách
                                    hàng</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">5,000+</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Căn hộ quản lý trên một nền
                                    tảng</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2: OmniMart -->
            <div class="row g-4 g-lg-5 align-items-start mb-5 pb-5">
                <div class="col-lg-6 order-lg-2">
                    <div class="position-relative sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-ecommerce.jpg"
                            alt="OmniMart" class="w-100 sgtech-v2-object-cover sgtech-v2-aspect-4-3">
                        <span class="position-absolute top-0 start-0 m-3 badge bg-primary">
                            <i class="bi bi-bag me-1"></i>
                            Bán lẻ
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="h3 fw-bold mb-3">OmniMart - Nền tảng E-commerce đa kênh</h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            Chuỗi siêu thị XYZ Mart
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            6 tháng
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">Next.js</span>
                        <span class="badge badge-secondary">TypeScript</span>
                        <span class="badge badge-secondary">MongoDB</span>
                        <span class="badge badge-secondary">Stripe</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Thách thức</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            Chuỗi 15 cửa hàng cần mở rộng kênh bán online nhưng gặp khó khăn trong việc đồng bộ tồn
                            kho real-time với hệ thống POS hiện có. Khách hàng thường xuyên đặt hàng những sản phẩm
                            đã hết.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Giải pháp SGTech</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            Xây dựng nền tảng e-commerce OmniMart với: Website responsive + App mobile, tích hợp
                            2-way sync với POS, hệ thống Click & Collect, chương trình loyalty tích điểm, thanh toán
                            đa phương thức.
                        </p>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">6 tháng</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Thời gian go-live từ ý tưởng
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">10K+</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Đơn hàng/tháng sau 3 tháng
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">99.9%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Độ chính xác đồng bộ kho
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3: SmartMES -->
            <div class="row g-4 g-lg-5 align-items-start">
                <div class="col-lg-6">
                    <div class="position-relative sgtech-v2-rounded-2xl overflow-hidden sgtech-v2-shadow-2xl">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-manufacturing.jpg"
                            alt="SmartMES" class="w-100 sgtech-v2-object-cover sgtech-v2-aspect-4-3">
                        <span class="position-absolute top-0 start-0 m-3 badge bg-primary">
                            <i class="bi bi-buildings me-1"></i>
                            Sản xuất
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3">SmartMES - Hệ thống điều hành sản xuất</h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            Công ty TNHH Sản xuất DEF
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            12 tháng
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">Angular</span>
                        <span class="badge badge-secondary">.NET Core</span>
                        <span class="badge badge-secondary">SQL Server</span>
                        <span class="badge badge-secondary">IoT</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Thách thức</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            Nhà máy với 3 dây chuyền sản xuất chưa có hệ thống giám sát tập trung. Việc thu thập dữ
                            liệu OEE, quản lý chất lượng và truy xuất nguồn gốc đều làm thủ công, chậm và thiếu
                            chính xác.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2">Giải pháp SGTech</h6>
                        <p class="sgtech-v2-text-muted-foreground small leading-relaxed">
                            Triển khai SmartMES tích hợp 50+ IoT sensors trên dây chuyền: Dashboard giám sát OEE
                            real-time, cảnh báo tự động khi có sự cố, quản lý lô hàng và truy xuất nguồn gốc theo
                            tiêu chuẩn ISO.
                        </p>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">15%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Tăng hiệu suất thiết bị
                                    (OEE)</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">30%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">Giảm tỷ lệ sản phẩm lỗi
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">2 tỷ</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">VNĐ tiết kiệm/năm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section -->
    <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Lĩnh vực phục vụ</h2>
                <p class="sgtech-v2-text-muted-foreground mx-auto sgtech-v2-max-w-600">
                    SGTech có kinh nghiệm triển khai dự án trong 8+ ngành nghề,
                    từ bán lẻ, sản xuất đến y tế, giáo dục.
                </p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Bất động sản</div>
                        <div class="small sgtech-v2-text-muted-foreground">8 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Bán lẻ & E-commerce</div>
                        <div class="small sgtech-v2-text-muted-foreground">12 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Sản xuất</div>
                        <div class="small sgtech-v2-text-muted-foreground">6 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Tài chính - Ngân hàng</div>
                        <div class="small sgtech-v2-text-muted-foreground">5 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Y tế</div>
                        <div class="small sgtech-v2-text-muted-foreground">4 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Giáo dục</div>
                        <div class="small sgtech-v2-text-muted-foreground">7 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Logistics</div>
                        <div class="small sgtech-v2-text-muted-foreground">5 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold">Du lịch - Khách sạn</div>
                        <div class="small sgtech-v2-text-muted-foreground">3 dự án</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Summary -->
    <section class="py-5 bg-primary text-white">
        <div class="container py-3">
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">50+</div>
                    <div class="opacity-75">Dự án hoàn thành</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">30+</div>
                    <div class="opacity-75">Khách hàng tin tưởng</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">8+</div>
                    <div class="opacity-75">Ngành nghề phục vụ</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">98%</div>
                    <div class="opacity-75">Khách hàng hài lòng</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h2 class="display-6 fw-bold mb-3">Dự án của bạn sẽ là câu chuyện tiếp theo</h2>
                <p class="sgtech-v2-text-muted-foreground fs-5 mb-4">
                    Mỗi dự án đều bắt đầu từ một cuộc trò chuyện. Hãy chia sẻ với SGTech
                    về bài toán của bạn, chúng tôi sẽ đề xuất giải pháp phù hợp nhất.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo home_url('/lien-he'); ?>" class="btn btn-secondary btn-lg sgtech-v2-shadow-lg">
                        Bắt đầu dự án của bạn
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="btn btn-outline-primary btn-lg">Tìm hiểu dịch
                        vụ</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>