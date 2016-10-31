<?php
/**
 * The Search results page
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
            <div class="col-md-8 <?php if (have_posts()) :  while (have_posts()) : the_post();?>bg-t<?php endwhile; else: ?>bg-c<?php endif; ?>">
				<div class="search-style">
					<h3><?php _e('Search Results for', 'cosonix');?>: <span style="font-weight:bold">"<?php echo esc_html( get_search_query( false ) ); ?>"</span></h3>
				</div>
				
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
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-clock-o"></i></span><a href="#"><?php the_time('F d, Y'); ?></a></span>
                    </div>
                    <?php if ( has_post_format( 'video' ) ) : ?>
					<?php the_content(); ?>
					<?php else: ?>
					<?php the_excerpt(); ?>
					<?php endif; ?>
                    <p><a href="<?php the_permalink();?>" class="read-more"><?php _e('Read More', 'cosonix'); ?></a></p>
				</div>
                </div>
				<?php endwhile; else: ?>
						<div class="oo-style">
							<h2><span style="color:#ECAE1A;">Ooooops....</span><?php _e(' No posts were found. Sorry!', 'cosonix'); ?></h2>
						</div>
				<?php endif; ?>
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