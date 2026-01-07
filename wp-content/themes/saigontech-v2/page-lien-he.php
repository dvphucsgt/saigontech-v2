<?php
/**
 * Template Name: Liên hệ
 */
get_header(); ?>

<main>
    <section class="sgtech-v2-section-padding bg-primary text-white sgtech-v2-bg-pattern-grid-dark">
        <div class="container text-center sgtech-v2-max-w-700">
            <h1 class="mb-4 text-white display-5 fw-bold">Liên hệ với chúng tôi</h1>
            <p class="opacity-75 fs-5 leading-relaxed">Hãy để lại thông tin, đội ngũ SGTech sẽ liên hệ tư vấn miễn
                phí về giải
                pháp phù hợp nhất cho doanh nghiệp của bạn.</p>
        </div>
    </section>

    <section class="sgtech-v2-section-padding">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-transparent py-4">
                            <h4 class="mb-1">Gửi yêu cầu tư vấn</h4>
                            <p class="sgtech-v2-text-muted-foreground small mb-0">Điền thông tin và chúng tôi sẽ
                                liên hệ sớm
                                nhất.</p>
                        </div>
                        <div class="card-body p-4">
                            <?php
                            // Replace "xxxx" with your actual Contact Form 7 ID
                            echo do_shortcode('[contact-form-7 id="a73e0f2" title="contact form"]');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-semibold mb-4">Thông tin liên hệ</h5>
                    <div class="d-flex flex-column gap-3 mb-4">
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-envelope"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Email</h6>
                                    <div class="small fw-semibold">hi@saigon-tech.vn</div>
                                    <div class="fs-8 sgtech-v2-text-muted-foreground">Phản hồi trong 24h</div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-telephone"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Hotline</h6>
                                    <div class="small fw-semibold">+84-986-758-048</div>
                                    <div class="fs-7 sgtech-v2-text-muted-foreground">Hỗ trợ 24/7</div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-geo-alt"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Địa chỉ</h6>
                                    <div class="small fw-semibold">103, Building 8, Quang Trung Software City, HCM
                                        City, VietNam</div>
                                    <div class="fs-7 sgtech-v2-text-muted-foreground">Văn phòng chính</div>
                                </div>
                            </div>
                        </div>
                        <div class="sgtech-v2-contact-info-card">
                            <div class="d-flex align-items-center gap-3">
                                <div class="sgtech-v2-icon-box-sm"><i class="bi bi-clock"></i></div>
                                <div>
                                    <h6 class="fw-bold mb-0">Giờ làm việc</h6>
                                    <div class="small fw-semibold">Thứ 2 - Thứ 6: 8:30 - 17:30</div>
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

    <section class="sgtech-v2-section-padding sgtech-v2-bg-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-6 fw-bold mb-3">Câu hỏi thường gặp</h2>
                <p class="sgtech-v2-text-muted-foreground small">Một số câu hỏi phổ biến từ khách hàng của chúng
                    tôi.</p>
            </div>
            <div class="d-flex flex-column gap-3 sgtech-v2-max-w-3xl mx-auto">
                <div class="sgtech-v2-faq-card">
                    <h6 class="fw-bold mb-2">Chi phí phát triển phần mềm là bao nhiêu?</h6>
                    <p class="sgtech-v2-text-muted-foreground fs-7 mb-0">Chi phí phụ thuộc vào độ phức tạp và quy mô
                        dự án.
                        Chúng tôi sẽ tư vấn và báo giá chi tiết sau khi hiểu rõ yêu cầu của bạn.</p>
                </div>
                <div class="sgtech-v2-faq-card">
                    <h6 class="fw-bold mb-2">Thời gian hoàn thành dự án là bao lâu?</h6>
                    <p class="sgtech-v2-text-muted-foreground fs-7 mb-0">Thời gian dao động từ 2-12 tháng tùy theo
                        quy mô.
                        Chúng tôi cam kết tuân thủ tiến độ đã thỏa thuận.</p>
                </div>
                <div class="sgtech-v2-faq-card">
                    <h6 class="fw-bold mb-2">SGTech có hỗ trợ bảo trì sau khi bàn giao không?</h6>
                    <p class="sgtech-v2-text-muted-foreground fs-7 mb-0">Có, chúng tôi cung cấp dịch vụ bảo trì và
                        hỗ trợ kỹ
                        thuật 24/7 với các gói dịch vụ linh hoạt.</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>