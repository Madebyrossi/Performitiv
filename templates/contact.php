<?php
	/* Template Name: Contact */
	get_header();
?>

	<div class="info intro contact container-fluid">
		
		<div class="row-fluid content">
			<div class="col-md-6">
				<h1>Contact Us</h1>
				<p>&nbsp;</p>
				<p>By Phone: <a href="tel:8722250075">872-225-0075</a></p>
				<p>By Email: <a href="mailto:info@performitiv.com">info@performitiv.com</a></p>

				<p>&nbsp;</p>

				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3065584780516!2d-87.65118178443961!3d41.886263779221615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cd00ef472b7%3A0xc39e0e2fee4b2b94!2s220+N+Green+St+%236015%2C+Chicago%2C+IL+60607!5e0!3m2!1sen!2sus!4v1488169242877" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

				<p>&nbsp;</p>

				<p>220 North Green Street</p>
				<p>Suite 6015</p>
				<p>Chicago, IL 60607</p>
				<p>United States</p>
			</div>

			<div class="col-md-6" style="padding-top: 80px;">
				<?php echo do_shortcode('[contact-form-7 id="454" title="Contact Performitiv"]'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
			
	</div>

<?php get_footer(); ?>