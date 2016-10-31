<?php
/**
 * 404 page
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
			<!--Main Content-->
            <div class="col-md-8">
                <div class="search-style">
					<h2><span style="color:#ECAE1A;">Ooooops....</span><?php _e(' No posts were found. Sorry!', 'cosonix'); ?></h2>
				</div>
            </div>
            <!--End Main Content list-->
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