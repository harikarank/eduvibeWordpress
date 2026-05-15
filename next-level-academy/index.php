<?php
// Fallback template — WordPress requires this file.
get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
else :
    echo '<p>' . esc_html__( 'No content found.', 'next-level-academy' ) . '</p>';
endif;

get_footer();
