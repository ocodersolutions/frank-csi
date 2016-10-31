<?php
/**
 * The default single post page of this theme
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
                <div class="article-block article-detail">
				  <?php if (have_posts()) :  while (have_posts()) : the_post();
						global $post;
						$get_image = esc_url( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) ); 
				  ?>
				  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2 class="single_post_title"><?php the_title(); ?></h2>					
                    <div class="article-info">
					<?php if(fthemes_get_option('single_meta_switch') == '1') { ?>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-clock-o"></i></span><a href="#"><?php the_time('F d, Y'); ?></a></span>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-comments"></i></span><a href="<?php comments_link(); ?>"><?php _e('Comments', 'cosonix'); ?></a></span>
                        <span class="wrap-info"><span class="wrap-icon"><i class="fa fa-tags"></i></span><?php the_tags(); ?></span>
						<span class="wrap-info"><span class="wrap-icon"><i class="fa fa-folder"></i></span><?php _e('Categories: ', 'cosonix'); ?><?php the_category(', '); ?></span>
                    <?php } ?>
					</div>					
					<?php if ( has_post_thumbnail()) : ?>
                    <div class="article-img">
                        <a href="#">
                            <span class="wrap-icon"><i class="fa fa-camera"></i></span>
							<?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                        </a>
                    </div>
					<?php endif; ?>
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'next')); ?>
				  </article>
				  <?php endwhile; else: ?>
					<div class="search-style">
						<h2><span style="color:#ECAE1A;">Ooooops....</span><?php _e(' No posts were found. Sorry!', 'cosonix'); ?></h2>
					</div>
				  <?php endif; ?>
					                  
                    <div class="wrapper page-navigation">
                        <span class="pull-left"><?php esc_url( previous_post_link( '%link', '<i class="fa fa-long-arrow-left"></i>'.__( ' Older entries', 'cosonix' ) ) ); ?></span>
						<span class="pull-right"><?php esc_url( next_post_link( '%link', __( 'Next entries ', 'cosonix' ).'<i class="fa fa-long-arrow-right"></i>' ) ); ?></span>
                    </div>
					<div id="comments">
					<?php comments_template( '', true ); ?>
					</div>
                </div>

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