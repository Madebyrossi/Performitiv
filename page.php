<?php get_header(); ?>

	<div class="info intro container-fluid">
		<article style="text-align: left !important;">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<h1 class="align-center"><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>
				
			<?php endwhile; else: ?>
				<p><?php _e('Coming soon.'); ?></p>
			<?php endif; ?>
			
		</article>
	</div>

<?php get_footer(); ?>