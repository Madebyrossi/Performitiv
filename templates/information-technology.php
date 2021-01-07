<?php
	/* Template Name: Information Technology */
	get_header();
?>

	<div class="product sales-marketing information container-fluid">
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
			<div class="hero cache mobile-styles <?php echo $align; ?>" style="background-image: url('<?php echo $bannerurl[0]; ?>')">
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
					<?php the_content(); ?>
				</div>

				<div class="col-md-3 pull-right">
					<?php dynamic_sidebar('information-technology-sidebar'); ?>
					<!--// END SUPPLY MARKET SIDEBAR //-->
				</div>
				<div class="clearfix"></div>
			</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer() ;?>