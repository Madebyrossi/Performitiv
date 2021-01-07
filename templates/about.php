<?php
	/* Template Name: About Us */
	get_header();
?>

	<div class="info intro container-fluid">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<div class="row-fluid content">
				<h1 class="align-center"><?php the_title(); ?></h1>
				<div class="about-us">
					<?php the_content(); ?>
				</div>
			</div>
			
		<?php endwhile; else: ?>
			<p><?php _e('Coming soon.'); ?></p>
		<?php endif; ?>
			
	</div>

<?php get_footer(); ?>