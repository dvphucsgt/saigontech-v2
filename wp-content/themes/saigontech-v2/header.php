<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="<?php esc_attr_e('SGTech - Đối tác công nghệ tin cậy cho doanh nghiệp Việt. Cung cấp giải pháp phần mềm chất lượng cao, tối ưu chi phí và thời gian.', 'saigontech-v2'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Header -->
    <header class="sgtech-v2-header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand sgtech-v2-logo" href="<?php echo sgtech_get_home_url(); ?>">
                    <span class="sgtech-v2-sg">SG</span><span class="sgtech-v2-tech">Tech</span>
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list sgtech-v2-menu-icon"></i>
                    <i class="bi bi-x-lg sgtech-v2-close-icon d-none"></i>
                </button>

                <!-- Navigation -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => 'navbar-nav',
                        'fallback_cb' => false,
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'add_li_class' => 'nav-item',
                        'link_class' => 'nav-link',
                    ));
                    ?>
                    <!-- Fallback static menu if strictly needed while setting up -->
                    <?php if (!has_nav_menu('primary')): ?>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_home_url(); ?>"><?php _e('Trang chủ', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('ve-chung-toi') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('ve-chung-toi'); ?>"><?php _e('Về chúng tôi', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('dich-vu') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('dich-vu'); ?>"><?php _e('Dịch vụ', 'saigontech-v2'); ?></a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link <?php echo is_page('du-an') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('du-an'); ?>"><?php _e('Dự án', 'saigontech-v2'); ?></a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_home() || is_singular('post') || is_page('blog') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('blog'); ?>"><?php _e('Blog', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('lien-he') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('lien-he'); ?>"><?php _e('Liên hệ', 'saigontech-v2'); ?></a>
                            </li>
                        </ul>
                    <?php endif; ?>

                    <!-- Mobile Language Switcher -->
                    <div class="d-lg-none">
                        <?php echo sgtech_language_switcher(); ?>
                    </div>
                </div>

                <!-- Desktop: CTA Button + Language Switcher -->
                <div class="d-none d-lg-flex align-items-center gap-3">
                    <?php echo sgtech_language_switcher(); ?>
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary"><?php _e('Liên hệ ngay', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </nav>
    </header>