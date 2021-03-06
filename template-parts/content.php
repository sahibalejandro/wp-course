<article <?php post_class( 'entry' ); ?>>
    <header class="entry-header">
        <?php the_title( '<h1>', '</h1>' ); ?>
        <div class="entry-byline">
        	<?php esc_html_e( 'Author:', 'wpcourse' ); ?>
        	<?php the_author(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
