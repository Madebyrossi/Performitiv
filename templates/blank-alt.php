<?php
    /* Template Name: Blank Alternate */
    get_header('alternate'); 

	if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
	endwhile; else: ?>
		<p><?php _e('Coming soon.'); ?></p>
    <?php endif;
    
    get_footer();
?>