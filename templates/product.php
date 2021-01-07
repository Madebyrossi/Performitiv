<?php
	/* Template Name: Product */
	get_header();
?>

	<style type="text/css">
		@media screen and (max-width: 880px) {
			html {
				overflow-x: scroll !important;
			}
		}
	</style>

	<div class="product container-fluid">
		<?php
			if(have_posts()): while(have_posts()): the_post();
			$bannertitl = get_post_meta(get_the_ID(), 'meta-text6', true);
			$bannertext = get_post_meta(get_the_ID(), 'meta-text5', true);
			$banneralin = get_post_meta(get_the_ID(), 'radio-banner', true);
			$bannerurl  = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');

			if($banneralin == 'radio-banner-l') {
				$align = 'leftside';
			} elseif($banneralin == 'radio-banner-m') {
				$align = 'middleside';
			} else {
				$align = 'rightside';
			}
		?>
			<div class="hero mobile-styles <?php echo $align; ?>" style="background-image: url('<?php echo $bannerurl[0]; ?>')">
				<div class="gradientbg"></div>
				<div class="text">
					<div class="table">
						<div class="cell">
							<h2><?php echo $bannertitl; ?></h2>
							<p><?php echo htmlspecialchars_decode($bannertext); ?></p>
						</div>
					</div>
				</div>
			</div>
			<!--// END MAIN IMAGE //-->

			<div class="row-fluid content">
				<div class="col-md-8">
					<?php
						the_content();

						$slide1_1 = get_post_meta( get_the_ID(), 'slide1-1', true );
						$slide1_3 = get_post_meta( get_the_ID(), 'slide1-3', true );

						$slide2_1 = get_post_meta( get_the_ID(), 'slide2-1', true );
						$slide2_3 = get_post_meta( get_the_ID(), 'slide2-3', true );

						$slide3_1 = get_post_meta( get_the_ID(), 'slide3-1', true );
						$slide3_3 = get_post_meta( get_the_ID(), 'slide3-3', true );

						$slide4_1 = get_post_meta( get_the_ID(), 'slide4-1', true );
						$slide4_3 = get_post_meta( get_the_ID(), 'slide4-3', true );

						$slide5_1 = get_post_meta( get_the_ID(), 'slide5-1', true );
						$slide5_3 = get_post_meta( get_the_ID(), 'slide5-3', true );

						$slide6_1 = get_post_meta( get_the_ID(), 'slide6-1', true );
						$slide6_3 = get_post_meta( get_the_ID(), 'slide6-3', true );

						$slide7_1 = get_post_meta( get_the_ID(), 'slide7-1', true );
						$slide7_3 = get_post_meta( get_the_ID(), 'slide7-3', true );

						$slide8_1 = get_post_meta( get_the_ID(), 'slide8-1', true );
						$slide8_3 = get_post_meta( get_the_ID(), 'slide8-3', true );

						$slide9_1 = get_post_meta( get_the_ID(), 'slide9-1', true );
						$slide9_3 = get_post_meta( get_the_ID(), 'slide9-3', true );
					?>

					<ul id="lightSlider">
						<li class="one">
							<img src="<?php echo $slide1_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="two">
							<img src="<?php echo $slide2_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="three">
							<img src="<?php echo $slide3_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="four">
							<img src="<?php echo $slide4_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="five">
							<img src="<?php echo $slide5_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="six">
							<img src="<?php echo $slide6_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="seven">
							<img src="<?php echo $slide7_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="eight">
							<img src="<?php echo $slide8_3; ?>" style="min-width: 100%; height; auto;" />
						</li>

						<li class="nine">
							<img src="<?php echo $slide9_3; ?>" style="min-width: 100%; height; auto;" />
						</li>
					</ul>
				</div>

				<div class="col-md-3 pull-right">
					<?php dynamic_sidebar('product-sidebar'); ?>
					<!--// END PRODUCT SIDEBAR //-->
				</div>
				<div class="clearfix"></div>
			</div>
		<?php endwhile; endif; ?>
	</div>
		
<?php get_footer(); ?>