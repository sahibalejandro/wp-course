<?php get_header(); ?>

    <div class="main-loop">
        <?php if ( ! have_posts() ) : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content' ); ?>
        <?php endwhile; ?>
    </div><!-- .main-loop -->

    <?php get_sidebar(); ?>
<?php get_footer();
