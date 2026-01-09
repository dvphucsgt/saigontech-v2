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
                    <?php _e('Kết quả thực tế', 'saigontech-v2'); ?>
                </div>
                <h1 class="mb-4 text-white"><?php _e('Dự án tiêu biểu', 'saigontech-v2'); ?></h1>
                <?php _e('Mỗi dự án là một câu chuyện về sự hợp tác, sáng tạo và cam kết mang lại giá trị thực sự cho khách hàng.', 'saigontech-v2'); ?>
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
                            <?php _e('Bất động sản', 'saigontech-v2'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3"><?php _e('PropTech Manager - Hệ thống quản lý BĐS', 'saigontech-v2'); ?>
                    </h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            <?php _e('Công ty CP Địa ốc ABC', 'saigontech-v2'); ?>
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            <?php _e('8 tháng', 'saigontech-v2'); ?>
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">React</span>
                        <span class="badge badge-secondary">Node.js</span>
                        <span class="badge badge-secondary">PostgreSQL</span>
                        <span class="badge badge-secondary">AWS</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Thách thức', 'saigontech-v2'); ?></h6>
                        <?php _e('Khách hàng đang sử dụng nhiều công cụ rời rạc (Excel, Google Sheets, CRM riêng) để quản lý quỹ căn hộ, khách hàng tiềm năng và hợp đồng bán hàng. Việc này gây mất thời gian, dễ sai sót và khó theo dõi báo cáo.', 'saigontech-v2'); ?>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Giải pháp SGTech', 'saigontech-v2'); ?>
                        </h6>
                        <?php _e('SGTech phát triển nền tảng PropTech Manager toàn diện với các module: Quỹ sản phẩm (5,000+ căn), CRM khách hàng, Quản lý hợp đồng điện tử, Dashboard báo cáo real-time. Tích hợp với hệ thống kế toán và marketing automation.', 'saigontech-v2'); ?>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">40%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Giảm thời gian xử lý giao dịch', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">25%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Tăng tỷ lệ chuyển đổi khách hàng', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">5,000+</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Căn hộ quản lý trên một nền tảng', 'saigontech-v2'); ?>
                                </div>
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
                            <?php _e('Bán lẻ', 'saigontech-v2'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="h3 fw-bold mb-3"><?php _e('OmniMart - Nền tảng E-commerce đa kênh', 'saigontech-v2'); ?>
                    </h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            <?php _e('Chuỗi siêu thị XYZ Mart', 'saigontech-v2'); ?>
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            <?php _e('6 tháng', 'saigontech-v2'); ?>
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">Next.js</span>
                        <span class="badge badge-secondary">TypeScript</span>
                        <span class="badge badge-secondary">MongoDB</span>
                        <span class="badge badge-secondary">Stripe</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Thách thức', 'saigontech-v2'); ?></h6>
                        <?php _e('Chuỗi 15 cửa hàng cần mở rộng kênh bán online nhưng gặp khó khăn trong việc đồng bộ tồn kho real-time với hệ thống POS hiện có. Khách hàng thường xuyên đặt hàng những sản phẩm đã hết.', 'saigontech-v2'); ?>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Giải pháp SGTech', 'saigontech-v2'); ?>
                        </h6>
                        <?php _e('Xây dựng nền tảng e-commerce OmniMart với: Website responsive + App mobile, tích hợp 2-way sync với POS, hệ thống Click & Collect, chương trình loyalty tích điểm, thanh toán đa phương thức.', 'saigontech-v2'); ?>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">6 tháng</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Thời gian go-live từ ý tưởng', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">10K+</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Đơn hàng/tháng sau 3 tháng', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">99.9%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Độ chính xác đồng bộ kho', 'saigontech-v2'); ?>
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
                            <?php _e('Sản xuất', 'saigontech-v2'); ?>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="h3 fw-bold mb-3"><?php _e('SmartMES - Hệ thống điều hành sản xuất', 'saigontech-v2'); ?>
                    </h2>
                    <div class="d-flex flex-wrap gap-3 mb-3 small sgtech-v2-text-muted-foreground">
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-people"></i>
                            <?php _e('Công ty TNHH Sản xuất DEF', 'saigontech-v2'); ?>
                        </span>
                        <span class="d-flex align-items-center gap-1">
                            <i class="bi bi-clock"></i>
                            <?php _e('12 tháng', 'saigontech-v2'); ?>
                        </span>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge badge-secondary">Angular</span>
                        <span class="badge badge-secondary">.NET Core</span>
                        <span class="badge badge-secondary">SQL Server</span>
                        <span class="badge badge-secondary">IoT</span>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Thách thức', 'saigontech-v2'); ?></h6>
                        <?php _e('Nhà máy với 3 dây chuyền sản xuất chưa có hệ thống giám sát tập trung. Việc thu thập dữ liệu OEE, quản lý chất lượng và truy xuất nguồn gốc đều làm thủ công, chậm và thiếu chính xác.', 'saigontech-v2'); ?>
                    </div>
                    <div class="mb-4">
                        <h6 class="text-secondary fw-semibold mb-2"><?php _e('Giải pháp SGTech', 'saigontech-v2'); ?>
                        </h6>
                        <?php _e('Triển khai SmartMES tích hợp 50+ IoT sensors trên dây chuyền: Dashboard giám sát OEE real-time, cảnh báo tự động khi có sự cố, quản lý lô hàng và truy xuất nguồn gốc theo tiêu chuẩn ISO.', 'saigontech-v2'); ?>
                    </div>
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">15%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Tăng hiệu suất thiết bị (OEE)', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">30%</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('Giảm tỷ lệ sản phẩm lỗi', 'saigontech-v2'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="sgtech-v2-result-card">
                                <div class="sgtech-v2-metric">2 tỷ</div>
                                <div class="small sgtech-v2-text-muted-foreground mt-1">
                                    <?php _e('VNĐ tiết kiệm/năm', 'saigontech-v2'); ?>
                                </div>
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
                <h2 class="display-6 fw-bold mb-3"><?php _e('Lĩnh vực phục vụ', 'saigontech-v2'); ?></h2>
                <?php _e('SGTech có kinh nghiệm triển khai dự án trong 8+ ngành nghề, từ bán lẻ, sản xuất đến y tế, giáo dục.', 'saigontech-v2'); ?>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Bất động sản', 'saigontech-v2'); ?></div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 8); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Bán lẻ & E-commerce', 'saigontech-v2'); ?>
                        </div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 12); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Sản xuất', 'saigontech-v2'); ?></div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 6); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Tài chính - Ngân hàng', 'saigontech-v2'); ?>
                        </div>
                        <div class="small sgtech-v2-text-muted-foreground">5 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Y tế', 'saigontech-v2'); ?></div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 4); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Giáo dục', 'saigontech-v2'); ?></div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 7); ?>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Logistics', 'saigontech-v2'); ?></div>
                        <div class="small sgtech-v2-text-muted-foreground">5 dự án</div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="sgtech-v2-industry-card">
                        <div class="sgtech-v2-name fw-semibold"><?php _e('Du lịch - Khách sạn', 'saigontech-v2'); ?>
                        </div>
                        <div class="small sgtech-v2-text-muted-foreground">
                            <?php printf(__('%d dự án', 'saigontech-v2'), 3); ?>
                        </div>
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
                    <div class="opacity-75"><?php _e('Dự án hoàn thành', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">30+</div>
                    <div class="opacity-75"><?php _e('Khách hàng tin tưởng', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">8+</div>
                    <div class="opacity-75"><?php _e('Ngành nghề phục vụ', 'saigontech-v2'); ?></div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="h2 fw-bold text-secondary mb-1">98%</div>
                    <div class="opacity-75"><?php _e('Khách hàng hài lòng', 'saigontech-v2'); ?></div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="text-center mx-auto sgtech-v2-max-w-700">
                <h2 class="display-6 fw-bold mb-3">
                    <?php _e('Dự án của bạn sẽ là câu chuyện tiếp theo', 'saigontech-v2'); ?>
                </h2>
                <?php _e('Mỗi dự án đều bắt đầu từ một cuộc trò chuyện. Hãy chia sẻ với SGTech về bài toán của bạn, chúng tôi sẽ đề xuất giải pháp phù hợp nhất.', 'saigontech-v2'); ?>
                <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary btn-lg sgtech-v2-shadow-lg">
                        <?php _e('Bắt đầu dự án của bạn', 'saigontech-v2'); ?>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="btn btn-outline-primary btn-lg"><?php _e('Tìm hiểu dịch vụ', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>