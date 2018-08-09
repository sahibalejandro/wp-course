<article <?php post_class( 'entry' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
