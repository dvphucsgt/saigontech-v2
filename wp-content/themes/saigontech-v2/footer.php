<!-- Footer -->
<footer class="sgtech-v2-footer sgtech-v2-section-padding">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Company Info -->
            <div class="col-lg-4">
                <a href="<?php echo sgtech_get_home_url(); ?>"
                    class="sgtech-v2-logo mb-3 d-inline-block text-decoration-none">
                    <span class="text-white fs-4 fw-bold">SG</span><span class="text-secondary fs-4 fw-bold">Tech</span>
                </a>
                <p class="opacity-75 small leading-relaxed mb-4">
                    <?php _e('Đối tác công nghệ tin cậy cho doanh nghiệp Việt. Chúng tôi mang đến giải pháp phần mềm chất lượng cao, giúp doanh nghiệp tối ưu hóa quy trình và phát triển bền vững.', 'saigontech-v2'); ?>
                </p>
                <div class="sgtech-v2-social-links d-flex gap-2">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="col-6 col-lg-2">
                <h4 class="text-white"><?php _e('Điều hướng', 'saigontech-v2'); ?></h4>
                <nav class="d-flex flex-column gap-2">
                    <a href="<?php echo sgtech_get_home_url(); ?>"
                        class="small"><?php _e('Trang chủ', 'saigontech-v2'); ?></a>
                    <a href="<?php echo sgtech_get_page_url('ve-chung-toi'); ?>"
                        class="small"><?php _e('Về chúng tôi', 'saigontech-v2'); ?></a>
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="small"><?php _e('Dịch vụ', 'saigontech-v2'); ?></a>
                    <!-- <a href="<?php echo sgtech_get_page_url('du-an'); ?>"
                        class="small"><?php _e('Dự án', 'saigontech-v2'); ?></a> -->
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="small"><?php _e('Liên hệ', 'saigontech-v2'); ?></a>
                </nav>
            </div>

            <!-- Services -->
            <div class="col-6 col-lg-2">
                <h4 class="text-white"><?php _e('Dịch vụ', 'saigontech-v2'); ?></h4>
                <nav class="d-flex flex-column gap-2">
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="small"><?php _e('Phát triển phần mềm', 'saigontech-v2'); ?></a>
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="small"><?php _e('Tư vấn chuyển đổi số', 'saigontech-v2'); ?></a>
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="small"><?php _e('Giải pháp SaaS', 'saigontech-v2'); ?></a>
                    <a href="<?php echo sgtech_get_page_url('dich-vu'); ?>"
                        class="small"><?php _e('Bảo trì & Hỗ trợ', 'saigontech-v2'); ?></a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <h4 class="text-white"><?php _e('Liên hệ', 'saigontech-v2'); ?></h4>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-envelope text-secondary"></i>
                        <span class="opacity-75 small">hi@saigon-tech.vn</span>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-telephone text-secondary"></i>
                        <span class="opacity-75 small">0986 758 048</span>
                    </div>
                    <div class="d-flex align-items-start gap-3">
                        <i class="bi bi-geo-alt text-secondary"></i>
                        <span
                            class="opacity-75 small"><?php _e('103, Building 8, Quang Trung Software City, HCM City, VietNam', 'saigontech-v2'); ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-5 pt-4 border-top border-white border-opacity-25">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <p class="opacity-50 small mb-0">
                    <?php printf(__('© %s SGTech. Tất cả quyền được bảo lưu.', 'saigontech-v2'), '2025'); ?>
                </p>
                <div class="d-flex gap-4">
                    <a href="#" class="opacity-50 small"><?php _e('Chính sách bảo mật', 'saigontech-v2'); ?></a>
                    <a href="#" class="opacity-50 small"><?php _e('Điều khoản sử dụng', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>