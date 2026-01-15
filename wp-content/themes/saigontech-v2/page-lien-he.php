<?php
/**
 * Template Name: Liên hệ
 */
get_header(); ?>

<main>
    <section class="sgtech-v2-section-padding bg-primary text-white sgtech-v2-bg-pattern-grid-dark">
        <div class="container text-center sgtech-v2-max-w-700">
            <h1 class="mb-4 text-white display-5 fw-bold"><?php _e('Liên hệ với chúng tôi', 'saigontech-v2'); ?></h1>
            <p class="opacity-75 fs-5 leading-relaxed">
                <?php _e('Hãy để lại thông tin, đội ngũ SGTech sẽ liên hệ tư vấn miễn phí về giải pháp phù hợp nhất cho doanh nghiệp của bạn.', 'saigontech-v2'); ?>
            </p>
        </div>
    </section>

    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent py-4">
                            <h4 class="mb-1"><?php _e('Gửi yêu cầu tư vấn', 'saigontech-v2'); ?></h4>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">
                                <?php _e('Điền thông tin và chúng tôi sẽ liên hệ sớm nhất.', 'saigontech-v2'); ?>
                            </p>
                        </div>
                        <div class="card-body p-4">
                            <?php
                            // Display the correct CF7 form based on current language
                            // Forms: VI=85, EN=157, JA=158 (defined in functions.php)
                            sgtech_display_cf7_form();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-semibold mb-4"><?php _e('Thông tin liên hệ', 'saigontech-v2'); ?></h5>
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-envelope"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0"><?php _e('Email', 'saigontech-v2'); ?></h6>
                                    <div class="small fw-semibold">hi@saigon-tech.vn</div>
                                    <div class="fs-8 sgtech-v2-text-muted-foreground">
                                        <?php _e('Phản hồi trong 24h', 'saigontech-v2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-telephone"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0"><?php _e('Hotline', 'saigontech-v2'); ?></h6>
                                    <div class="small fw-semibold">+84-986-758-048</div>
                                    <div class="fs-7 sgtech-v2-text-muted-foreground">
                                        <?php _e('Hỗ trợ 24/7', 'saigontech-v2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-geo-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0"><?php _e('Địa chỉ', 'saigontech-v2'); ?></h6>
                                    <div class="small fw-semibold">103, Building 8, Quang Trung Software City, HCM
                                        City, VietNam</div>
                                    <div class="fs-7 sgtech-v2-text-muted-foreground">
                                        <?php _e('Văn phòng chính', 'saigontech-v2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-clock"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0"><?php _e('Giờ làm việc', 'saigontech-v2'); ?></h6>
                                    <div class="small fw-semibold">
                                        <?php _e('Thứ 2 - Thứ 6: 8:30 - 17:30', 'saigontech-v2'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Map Placeholder -->
                        <div class="sgtech-v2-map-placeholder mt-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4317770202115!2d106.62579127684751!3d10.854727389298876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175299b0dc0fac1%3A0x18cc9eb46570a21e!2sQTSC%208%20Building!5e0!3m2!1sen!2s!4v1767673767041!5m2!1sen!2s"
                                width="100%" height="232" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>