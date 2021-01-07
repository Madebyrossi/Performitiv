<?php
	/* Template Name: Solutions */
	get_header();
?>

	<div class="product supply-market container-fluid">
		<?php
			if(have_posts()): while(have_posts()): the_post();
			$bannertitl = get_post_meta(get_the_ID(), 'meta-text6', true);
			$bannertext = get_post_meta(get_the_ID(), 'meta-text5', true);
			$banneralin = get_post_meta(get_the_ID(), 'radio-banner', true);
			$btn1_1 = get_post_meta(get_the_ID(), 'btn1-1', true);
			$btn1_2 = get_post_meta(get_the_ID(), 'btn1-2', true);
			$btn2_1 = get_post_meta(get_the_ID(), 'btn2-1', true);
			$btn2_2 = get_post_meta(get_the_ID(), 'btn2-2', true);
			$btn3_1 = get_post_meta(get_the_ID(), 'btn3-1', true);
			$btn3_2 = get_post_meta(get_the_ID(), 'btn3-2', true);
			$btn4_1 = get_post_meta(get_the_ID(), 'btn4-1', true);
			$btn4_2 = get_post_meta(get_the_ID(), 'btn4-2', true);
			$btn5_1 = get_post_meta(get_the_ID(), 'btn5-1', true);
			$btn5_2 = get_post_meta(get_the_ID(), 'btn5-2', true);
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
				<div class="col-md-3">
					<?php if(!empty($btn1_2)) { ?>
						<div class="main-btn">
							<a href="<?php echo $btn1_2; ?>" class="btn btn-lg"><?php echo $btn1_1; ?></a>
						</div>
					<?php } ?>

					<?php if(!empty($btn2_2)) { ?>
						<div class="main-btn">
							<a href="<?php echo $btn2_2; ?>" class="btn btn-lg"><?php echo $btn2_1; ?></a>
						</div>
					<?php } ?>

					<?php if(!empty($btn3_2)) { ?>
						<div class="main-btn">
							<a href="<?php echo $btn3_2; ?>" class="btn btn-lg"><?php echo $btn3_1; ?></a>
						</div>
					<?php } ?>

					<?php if(!empty($btn4_2)) { ?>
						<div class="main-btn">
							<a href="<?php echo $btn4_2; ?>" class="btn btn-lg"><?php echo $btn4_1; ?></a>
						</div>
					<?php } ?>

					<?php if(!empty($btn5_2)) { ?>
						<div class="main-btn">
							<a href="<?php echo $btn5_2; ?>" class="btn btn-lg"><?php echo $btn5_1; ?></a>
						</div>
					<?php } ?>
				</div>

				<div class="col-md-8point5 pull-right">
					<?php the_content(); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php endwhile; endif; ?>
	</div>

<?php the_footer(); ?>