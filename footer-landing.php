		<footer>
			<div class="content row-fluid">
				<section class="col-md-4">
					<?php dynamic_sidebar('footer1'); ?>
				</section>

				<section class="col-md-4">
					<?php dynamic_sidebar('footer2'); ?>
				</section>

				<section class="col-md-2">
					<p><a href="https://www.performitiv.com">Home</a></p>
					<p><a href="/product">Product</a></p>
					<p><a href="/services">Services</a></p>
					<p><a href="/solutions">Solutions</a></p>
				</section>

				<section class="col-md-2">
					<p><a href="/resources">Resources</a></p>
					<p><a href="/about-us">About Us</a></p>
					<p><a href="/contact">Contact</a></p>
					<p><a href="https://app.performitiv.com/a/login">Login</a></p>

					<?php dynamic_sidebar('footer3'); ?>
				</section>
				<div class="clearfix"></div>
			</div>
		</footer>
		<!--// END FOOTER //-->

	</div>
	<!--// END WRAPPER //-->


<?php
	include_once 'templates/modals/landing.php';

	wp_footer();
?>

</body>
</html>