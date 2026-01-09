<?php
/**
 * The template for displaying 404 pages (not found).
 */
get_header(); ?>

<main class="d-flex align-items-center min-vh-100">
    <div class="container text-center py-5">
        <div class="display-1 fw-bold text-primary mb-3">404</div>
        <h1 class="h3 fw-bold mb-3"><?php _e('Trang không tìm thấy', 'saigontech-v2'); ?></h1>
        <p class="sgtech-v2-text-muted-foreground mb-4">
            <?php _e('Xin lỗi, trang bạn đang tìm kiếm không tồn tại hoặc đã được di chuyển.', 'saigontech-v2'); ?>
        </p>
        <a href="<?php echo home_url('/'); ?>" class="btn btn-secondary btn-lg">
            <i class="bi bi-house me-2"></i><?php _e('Về trang chủ', 'saigontech-v2'); ?>
        </a>
    </div>
</main>

<style>
    /* Custom simple footer for 404 page if needed, 
       otherwise get_footer() will provide the full footer.
       The static 404.html had a very simple footer.
       We'll stick to consistency and use get_footer() but maybe hide parts if needed.
    */
</style>

<?php get_footer(); ?>