		<footer>
			<div class="content row-fluid">
				<section class="col-md-4">
					<?php dynamic_sidebar('footer1'); ?>
				</section>

				<section class="col-md-4">
					<?php dynamic_sidebar('footer2'); ?>
				</section>

				<section class="col-md-2">
					<?php wp_nav_menu(array('theme_location'  => 'footer1')); ?>
				</section>

				<section class="col-md-2">
					<?php wp_nav_menu(array('theme_location'  => 'footer2')); ?>

					<?php dynamic_sidebar('footer3'); ?>
				</section>
				<div class="clearfix"></div>
			</div>
		</footer>
		<!--// END FOOTER //-->

	</div>
	<!--// END WRAPPER //-->


<?php
	include_once 'templates/modals/video.php';
	include_once 'templates/modals/meeting.php';
	include_once 'templates/modals/meeting-sales-marketing.php';
	include_once 'templates/modals/meeting-supply-chain.php';
	include_once 'templates/modals/meeting-information-technology.php';
	include_once 'templates/modals/meeting-human-resources.php';
	include_once 'templates/modals/meeting-finance-administration.php';
	include_once 'templates/modals/business-case.php';
	include_once 'templates/modals/business-case-sales-marketing.php';
	include_once 'templates/modals/business-case-supply-chain.php';
	include_once 'templates/modals/business-case-information-technology.php';
	include_once 'templates/modals/business-case-human-resources.php';
	include_once 'templates/modals/business-case-finance-administration.php';
	include_once 'templates/modals/infographic.php';
	include_once 'templates/modals/infographic-sales-marketing.php';
	include_once 'templates/modals/infographic-supply-chain.php';
	include_once 'templates/modals/infographic-information-technology.php';
	include_once 'templates/modals/infographic-human-resources.php';
	include_once 'templates/modals/infographic-finance-administration.php';

	wp_footer();

	if(is_page('latest-business-case')) { ?>
		<script type="text/javascript">
			$(function(){
		    	window.location.href = 'https://performitiv.com/wp-content/uploads/2017/03/Business_Case.zip';
			});
		</script>
	<?php }
?>

<script type="text/javascript">
	$(function(){
	    var stickyRibbonTop = $('header.page').offset().top;
	    $(window).scroll(function(){
	        if( $(window).scrollTop() > stickyRibbonTop ) {
	            $('header.page').css({top: '-72px'});
	        } else {
	            $('header.page').css({top: '0px'});
	        }
	    });
	});
</script>

</body>
</html>