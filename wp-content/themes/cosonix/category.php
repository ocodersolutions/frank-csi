<?php
/**
 * The template for displaying Category pages
 */
get_header(); ?>
<!--Blog section-->
<section id="blog-section" class="blog-section">
    <div class="container">
        <div class="row">
            <?php if(fthemes_get_option('blog_sidebar_pos') == '2') { ?>            			
			<!--Sidebar-->
			<?php get_sidebar(); ?>
			<div class="col-md-1 full-height"><div class="vertical-line-left"></div></div>
			<?php } ?>
			<!--End Sidebar-->
			<!--Articles list-->
            <div class="col-md-8">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); 
					global $post;
					$get_image = esc_url( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ); 
				?>
                <div class="article-block" id="post-<?php the_ID(); ?>">
				<div <?php post_class(); ?>>
					<?php if ( has_post_thumbnail()) : ?>
                    <div class="article-img">
                        <a href="<?php the_permalink();?>"><div class="article-img-mask"><span class="wrap-icon">+</span></div>
                        <span class="wrap-icon"><i class="fa fa-camera"></i></span>
                        <img src="<?php echo esc_url( $get_image ); ?>" alt="" class="img-responsive"/></a>
                    </div>
					<?php endif; ?>
                    <h2 class="post_title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                    <div class="article-info">
					<?php if(fthemes_get_option('blog_meta_switch') == '1') { ?>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-clock-o"></i></span><a href="#"><?php the_time('F d, Y'); ?></a></span>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-comments"></i></span><a href="<?php comments_link(); ?>"><?php _e('Comments', 'cosonix'); ?></a></span>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-tags"></i></span><?php the_tags(); ?></span>
                    <?php } ?>
					</div>
                    <?php if ( has_post_format( 'video' ) ) : ?>
					<?php the_content(); ?>
					<?php else: ?>
					<?php the_excerpt(); ?>
					<?php endif; ?>
                    <a href="<?php the_permalink();?>" class="read-more"><?php _e('Read More', 'cosonix'); ?></a>
				</div>
                </div>
				<?php endwhile; else: ?>
					<div class="search-style">
						<h2><span style="color:#ECAE1A;">Ooooops....</span><?php _e(' No posts were found. Sorry!', 'cosonix'); ?></h2>
					</div>
				<?php endif; ?>
				<!--Pagination-->
					<?php fthemes_custom_pagination(); ?>
				<!--End Pagination-->
            </div>
            <!--End Articles list-->
            <?php if(fthemes_get_option('blog_sidebar_pos') == '1') { ?>
            <div class="col-md-1 full-height"><div class="vertical-line"></div></div>			
			<!--Sidebar-->
			<?php get_sidebar(); ?>
			<?php } ?>
			<!--End Sidebar-->
        </div>
    </div>
</section>
<!--End Blog section-->
<?php get_footer(); ?>