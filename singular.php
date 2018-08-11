<?php
get_header();

the_post();
get_template_part( 'template-parts/content', 'singular' );

get_footer();
