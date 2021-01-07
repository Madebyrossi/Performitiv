<?php get_header(); ?>


	<!--// BEGIN ARCHIVE BLOG POST //-->
	
	<div class="content single container-fluid">
		<div class="row">
			
			<div class="col-md-9 blog-post">
				<?php
				    $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					if (strpos($url,'news') !== false) {
					    $type = 'news';
					} else {
						$type = 'post';
					}
				
					$paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
					$query_args = array(
						'post_type'       => $type,
						'posts_per_page'  => '20'
					);
					$the_query = new WP_Query( $query_args );

					if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
					$the_query->the_post();
				?>

					<p class="date">
						<?php the_date('F j, Y'); ?>
					</p>
						
					<h1 class="title">
						<a href="<?php the_permalink(); ?>" style="color: #333 !important;">
							<?php the_title(); ?>
						</a>
					</h1>
						
					<div class="entry">
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="btn btn-sm">Read More &raquo;</a>
					</div>
					
					<?php
						endwhile;

						the_posts_pagination( array(
							'prev_text'  => __( 'Newer' ),
							'next_text'  => __( 'Older' )
						) );

						endif;
						wp_reset_query();
					?>
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
			
		</div>
	</div>
	
	<!--// END ARCHIVE BLOG POST //-->

	
<?php get_footer(); ?>