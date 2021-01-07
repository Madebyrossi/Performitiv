<div class="comments">

	<h1>Comments</h1>
	
	<div class="row">
	
		<section class="col-md-6">
		
			<?php
				if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
				echo '<p class="no-comments">Comments are closed.</p>';
			endif; ?>
			
			<?php $comment_args = array( 'fields' => apply_filters( 'comment_form_default_fields', array(
				'author'              => '<input id="author" name="author" type="text" value="Your Name" />',
				'email'               => '<input id="email" name="email" type="text" value="Your Email" />',
				'url'                 => '<input id="url" name="url" type="text" value="Your Website" />' ) ),
				'comment_field'       => '<textarea id="comment" name="comment" aria-required="true">Your Message</textarea>',
				'comment_notes_after' => '',
			);
			comment_form($comment_args); ?>
		
		</section>
		
		
		<section class="col-md-6">
		
			<?php if ( have_comments() ) : ?>
				<ol class="comment-list">
					<?php
						wp_list_comments( array(
							'style'       => 'ol',
							'short_ping'  => true,
							'avatar_size' => 26,
						) );
					?>
				</ol>
			<?php endif; ?>
			
		</section>
		
	</div>

</div>