<?php
/**
 * Template Name: Page with Visual Composer
 */
get_header(); ?>
<!--Start Content section-->
<div class="container">
	<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'next')); ?>
	<?php endwhile; else: ?>
		<div class="search-style">
			<h2><span style="color:#ECAE1A;">Ooooops....</span><?php _e(' No posts were found. Sorry!', 'cosonix'); ?></h2>
		</div>
	<?php endif; ?>
		<div id="comments">
			<?php comments_template( '', true ); ?>
		</div>
</div>
<!--End Content section-->
<?php get_footer(); ?>