<!-- Footer -->
<footer class="sgtech-v2-footer sgtech-v2-section-padding">
    <div class="container">
        <div class="row g-4 g-lg-5">
            <!-- Company Info -->
            <div class="col-lg-4">
                <div class="sgtech-v2-logo mb-3">
                    <span class="text-white fs-4 fw-bold">SG</span><span class="text-secondary fs-4 fw-bold">Tech</span>
                </div>
                <p class="opacity-75 small leading-relaxed mb-4">
                    Đối tác công nghệ tin cậy cho doanh nghiệp Việt. Chúng tôi mang đến giải pháp phần mềm chất
                    lượng cao, giúp doanh nghiệp tối ưu hóa quy trình và phát triển bền vững.
                </p>
                <div class="sgtech-v2-social-links d-flex gap-2">
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>

            <!-- Navigation -->
            <div class="col-6 col-lg-2">
                <h4 class="text-white">Điều hướng</h4>
                <nav class="d-flex flex-column gap-2">
                    <a href="<?php echo home_url(); ?>" class="small">Trang chủ</a>
                    <a href="<?php echo home_url('/ve-chung-toi'); ?>" class="small">Về chúng tôi</a>
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="small">Dịch vụ</a>
                    <a href="<?php echo home_url('/du-an'); ?>" class="small">Dự án</a>
                    <a href="<?php echo home_url('/lien-he'); ?>" class="small">Liên hệ</a>
                </nav>
            </div>

            <!-- Services -->
            <div class="col-6 col-lg-2">
                <h4 class="text-white">Dịch vụ</h4>
                <nav class="d-flex flex-column gap-2">
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="small">Phát triển phần mềm</a>
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="small">Tư vấn chuyển đổi số</a>
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="small">Giải pháp SaaS</a>
                    <a href="<?php echo home_url('/dich-vu'); ?>" class="small">Bảo trì & Hỗ trợ</a>
                </nav>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <h4 class="text-white">Liên hệ</h4>
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
                        <span class="opacity-75 small">103, Building 8, Quang Trung Software City, HCM City, VietNam
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-5 pt-4 border-top border-white border-opacity-25">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
                <p class="opacity-50 small mb-0">© 2025 SGTech. Tất cả quyền được bảo lưu.</p>
                <div class="d-flex gap-4">
                    <a href="#" class="opacity-50 small">Chính sách bảo mật</a>
                    <a href="#" class="opacity-50 small">Điều khoản sử dụng</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>