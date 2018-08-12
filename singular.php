<?php
get_header();

the_post();
get_template_part( 'template-parts/content', get_post_format() );

get_footer();
