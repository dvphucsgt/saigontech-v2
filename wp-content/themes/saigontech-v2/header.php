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
                                <a class="nav-link <?php echo is_page('ve-chung-toi') || is_page('about-us') || is_page('about-ja') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('ve-chung-toi'); ?>"><?php _e('Về chúng tôi', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('dich-vu') || is_page('services') || is_page('service-ja') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('dich-vu'); ?>"><?php _e('Dịch vụ', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('du-an') || is_page('projects') || is_page('project-ja') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('du-an'); ?>"><?php _e('Dự án', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_home() || is_singular('post') || is_page('blog') || is_page('blog-ja') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('blog'); ?>"><?php _e('Blog', 'saigontech-v2'); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo is_page('lien-he') || is_page('contact') || is_page('contact-ja') ? 'active' : ''; ?>"
                                    href="<?php echo sgtech_get_page_url('lien-he'); ?>"><?php _e('Liên hệ', 'saigontech-v2'); ?></a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Language Switcher -->
                <div class="d-none d-lg-flex align-items-center me-3">
                    <?php if (function_exists('pll_the_languages')): ?>
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="langSwitcher"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo strtoupper(pll_current_language('slug')); ?>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langSwitcher">
                                <?php pll_the_languages(array('show_flags' => 0, 'show_names' => 1, 'display_names_as' => 'name')); ?>
                            </ul>
                        </div>
                    <?php else: ?>
                        <!-- Fallback static switcher -->
                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                id="langSwitcherFallback" data-bs-toggle="dropdown" aria-expanded="false">
                                VN
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langSwitcherFallback">
                                <li><a class="dropdown-item" href="<?php echo home_url(); ?>">Tiếng Việt</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url('/en/'); ?>">English</a></li>
                                <li><a class="dropdown-item" href="<?php echo home_url('/ja/'); ?>">日本語</a></li>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- CTA Button -->
                <div class="d-none d-lg-block">
                    <a href="<?php echo sgtech_get_page_url('lien-he'); ?>"
                        class="btn btn-secondary"><?php _e('Liên hệ ngay', 'saigontech-v2'); ?></a>
                </div>
            </div>
        </nav>
    </header>