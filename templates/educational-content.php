<?php
	/* Template Name: Educational Content */
	get_header();
?>

	<div class="resources description">
		<div class="content">
			<h3 class="align-center">
				<strong>Download free articles and educational content</strong>
			</h3>

			<?php
				$loop = new WP_Query(array(
					'post_type'       => 'resources',
					'posts_per_page'  => '50'
				));
				if ($loop->have_posts()) :
				while ($loop->have_posts()) : $loop->the_post();
				
				$form = get_post_meta(get_the_ID(), 'meta-text4', true);
			?>
					
				<div class="row" style="margin-bottom: 30px;">
					<section class="col-md-9">
						<p><strong><?php the_title(); ?></strong></p>
						<p><?php the_content(); ?></p>
					</section>
					
					<section class="col-md-3 align-center">
						<a data-toggle="modal" data-target="#modal<?php echo $post->ID; ?>" class="btn btn-primary btn-sm">Request Download</a>
					</section>
				</div>
						
			<?php
				include 'modals/resources.php';
				
				endwhile;
				endif;
				wp_reset_postdata();
			?>
		</div>
	</div>
	
	
	<style type="text/css">
		.modal-backdrop {
			display: none !important;
		}
	</style>
	
<?php get_footer(); ?>