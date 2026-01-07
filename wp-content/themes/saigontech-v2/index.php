<?php get_header(); ?>

<main class="container py-5">
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class("mb-5"); ?>>
                <h2 class="mb-3">
                    <?php the_title(); ?>
                </h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; else: ?>
        <p>
            <?php _e('Sorry, no posts matched your criteria.', 'saigontech-v2'); ?>
        </p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>