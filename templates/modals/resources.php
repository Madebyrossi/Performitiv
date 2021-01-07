<div id="modal<?php echo $post->ID; ?>" class="modal fade" role="dialog" style="z-index: 9999; margin-top: 120px;">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?php the_title(); ?></h4>
			</div>
			<!--// END HEADER //-->
			
			<div class="modal-body">
				<?php echo do_shortcode($form); ?>
			</div>
			<!--// END BODY //-->
			
		</div>
	</div>
</div>
<!--// END RESOURCES MODAL //-->