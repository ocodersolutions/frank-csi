<?php
/**
 * The template for displaying Comments.
 */

if ( post_password_required() )
	return;
?>


	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h3><?php comments_number(__('There Is No Comment Yet', 'cosonix'), __('There Is 1 Comment', 'cosonix'), __('There Are % Comments', 'cosonix') );?></h3>
            <div class="detail-comments">					
				<ul class="comments-list">
					<?php wp_list_comments( array( 'callback' => 'cosonix_comment', 'style' => 'ul' ) ); ?>
				</ul><!-- .commentlist -->
				<div class="wrapper page-navigation">
                    <span class="pull-left"><?php esc_url( previous_comments_link() ) ?></span>
					<span class="pull-right"><?php esc_url( next_comments_link() ) ?></span>
                </div>
				<?php
				/* If there are no comments and comments are closed, let's leave a note.
				 * But we only want the note on posts and pages that had comments in the first place.
				 */
				if ( ! comments_open() ) : ?>
					<h4 class="blog_post_content"><?php _e( 'Comments are closed.' , 'cosonix' ); ?></h4>
				<?php endif; ?>
			</div>
			 
	<?php endif; // have_comments() ?>
	<?php if ( comments_open() ) : ?>
		<div class="comment-frm">
			<div class="frm-common">

			<?php comment_form(array(
			'label_submit'          => __( 'Submit comment', 'cosonix' ),
			)); ?>
			</div>
		</div>
	<?php endif; ?>
