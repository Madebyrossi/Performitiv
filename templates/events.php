<?php
	/* Template Name: Events */
	get_header();
?>

	<div class="content single container-fluid">
		<div class="row">
			<h1 class="align-center" style="margin-bottom: 40px;">
				<strong>Upcoming Performitiv Events</strong>
			</h1>

			<div class="col-md-9 blog-post" style="float: none; margin-left: auto; margin-right: auto;">
				<?php
					$loop = new WP_Query(array(
						'post_type'       => 'events',
						'posts_per_page'  => '20'
					));
					if ($loop->have_posts()) :
					while ($loop->have_posts()) : $loop->the_post();
					
					$date      = get_post_meta(get_the_ID(), 'meta-text1', true);
					$location  = get_post_meta(get_the_ID(), 'meta-text2', true);
					$url       = get_post_meta(get_the_ID(), 'meta-text3', true);
				?>
				
					<p class="date">
						<u><?php echo $date; ?></u>
					</p>
						
					<h2 class="title">
						<?php the_title(); ?>
					</h2>

					<div class="entry" style="margin-bottom: 0;">
						<p style="color: #333; font-size: 15px; line-height: 18px; font-weight: bold; margin: 0;">
							Location:
						</p>
						<p style="color: #666; font-size: 18px; line-height: 26px; margin-bottom: 10px;">
							<?php echo $location; ?>
						</p>

						<p style="color: #333; font-size: 15px; line-height: 18px; font-weight: bold; margin: 0;">
							Details:
						</p>
						<?php the_content(); ?>

						<a target="_blank" href="<?php echo $url; ?>" class="btn btn-sm">Event Details  ➝</a>
					</div>

					<hr style="width: 100%; height: 1px; margin: 40px 0; background: #ddd;">
						
				<?php
					endwhile;
					endif;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>