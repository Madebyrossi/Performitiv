<?php get_header(); ?>


	<!--// BEGIN SINGLE BLOG POST //-->
	
	<div class="content single container-fluid">
		<div class="row">

			<?php if('resources' == get_post_type()) { ?>

				<div class="col-md-12 blog-post">
					<p class="date">
						<?php the_date('F j, Y'); ?>
					</p>
						
					<h1 class="title">
						<?php the_title(); ?>
					</h1>
						
					<div class="entry">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();
							$form = get_post_meta(get_the_ID(), 'meta-text4', true);
						?>
						
							<?php the_content(); ?>

							<a data-toggle="modal" data-target="#modal<?php echo $post->ID; ?>" class="btn btn-primary btn-sm">Request Download</a>
			
						<?php
							include 'assets/templates/modals/resources.php';

							endwhile;
							endif;
							wp_reset_postdata();
						?>
					</div>
				</div>
				<!--// END BLOG POST //-->
	
				<style type="text/css">
					.modal-backdrop {
						display: none !important;
					}
				</style>

			<?php } else { ?>
			
				<div class="col-md-9 blog-post">
					<p class="date">
						<?php the_date('F j, Y'); ?>
					</p>
						
					<h1 class="title">
						<?php the_title(); ?>
					</h1>
						
					<div class="entry">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<?php the_content(); ?>
			
						<?php endwhile; endif; ?>
					</div>
						
					<div class="pagination">
						<div class="row">
							<div class="col-md-4">
								<?php next_post_link( '<p style="color: #333;">Newer Post</p>%link' ); ?>
							</div>
							
							<div class="col-md-4 pull-right align-right">
								<?php previous_post_link('<p style="color: #333;">Older Post</p>%link'); ?>
							</div>
						</div>
					</div>
					<!--// END PAGINATION //-->
				</div>
				<!--// END BLOG POST //-->
			
			
				<div class="col-md-3 blog-sidebar">
					<div class="row">
						
						<div class="col-md-12">
							<?php if('news' == get_post_type()) { ?>

								<h4>
									<a href="#" style="cursor: default;">News Archives</a>
								</h4>
								
								<img src="https://www.performitiv.com/wp-content/themes/custom/assets/images/thumb_sm.jpg" />
							
							<?php
								$loop = new WP_Query(array(
									'post_type'       => 'news',
									'posts_per_page'  => '6'
								));
								if ($loop->have_posts()) :
								while ($loop->have_posts()) : $loop->the_post();
							?>
							
								<div class="excerpt">
									<p><?php the_date('F j, Y'); ?></p>
									<p><?php the_title(); ?></p>
									<a href="<?php the_permalink(); ?>">Read More &#10141;</a>
								</div>
								<!--// END EXCERPT //-->
								
							<?php
								endwhile;
								endif;
								wp_reset_postdata();
								
							} else { ?>

								<h4>
									<a href="#" style="cursor: default;">Blog Archives</a>
								</h4>
								
								<img src="https://www.performitiv.com/wp-content/themes/custom/assets/images/thumb_sm.jpg" />
							
							<?php 
								$loop = new WP_Query(array(
									'post_type'       => 'post',
									'posts_per_page'  => '6'
								));
								if ($loop->have_posts()) :
								while ($loop->have_posts()) : $loop->the_post();
							?>
							
								<div class="excerpt">
									<p><?php the_date('F j, Y'); ?></p>
									<p><?php the_title(); ?></p>
									<a href="<?php the_permalink(); ?>">Read More &#10141;</a>
								</div>
								<!--// END EXCERPT //-->
								
							<?php
								endwhile;
								endif;
								wp_reset_postdata();
								
							} ?>
						</div>
						
					</div>
				</div>
				<!--// END SIDEBAR //-->

			<?php } ?>
			
		</div>
	</div>
	
	<!--// END SINGLE BLOG POST //-->

	
<?php get_footer(); ?>