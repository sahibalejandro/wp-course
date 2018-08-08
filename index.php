<?php get_header(); ?>

    <div class="main-loop">
        <?php if ( ! have_posts() ) : ?>
            <div class="full-center">
                <h2>Sorry, this page does not contain information.</h2>
            </div>
        <?php endif; ?>

        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'entry' ); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1>', '</h1>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div><!-- .main-loop -->

    <?php get_sidebar(); ?>
<?php get_footer();
