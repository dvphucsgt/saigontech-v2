<?php
/**
 * The template for displaying all pages.
 */
get_header(); ?>

<main class="sgtech-v2-section-padding">
    <div class="container">
        <?php while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header mb-4">
                    <h1 class="display-5 fw-bold">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>