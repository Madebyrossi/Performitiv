<?php
	/* Template Name: Landing Page */
	get_header('landing');
?>

	<div class="container-fluid content main">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
			
		<?php endwhile; else: ?>
			<p><?php _e('Coming soon.'); ?></p>
		<?php endif; ?>
			
	</div>

<?php get_footer('landing'); ?>