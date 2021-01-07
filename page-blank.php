<?php
    /* Template Name: Blank */
    get_header(); 

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	endwhile; else: ?>
		<p><?php _e('Coming soon.'); ?></p>
    <?php endif;
    
    get_footer();
?>