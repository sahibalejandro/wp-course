<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="main-wrapper">
            <div class="main-title">
                <h1><?php bloginfo( 'name' ); ?></h1>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <nav class="main-nav">
                <?php wp_nav_menu( [
                    'theme_location' => 'main-menu',
                    'depth'          => 1,
                    'container'      => ''
                ] ); ?>
            </nav>
            <div class="main-content">
                <div class="main-loop">
                    <?php
                    if ( ! have_posts() ) :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                    ?>
            <?php /* .main-content and .main-loop are closed in footer.php */ ?>
