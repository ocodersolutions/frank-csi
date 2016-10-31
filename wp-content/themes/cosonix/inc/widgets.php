<?php
/***************************
Start Latest Comments widget
***************************/
class letcomment_Widget extends WP_Widget {

       function __construct() {
    parent::__construct(
      'letcomment_Widget', // Base ID
      __('Cosonix -Latest Comments Widget', 'cosonix'), // Name
      array( 'description' => __( 'The Most Recent Comments', 'cosonix' ), ) // Args
    );
  }
/* Front-end display of widget. */
public function widget( $args, $instance ) {

      if ( isset( $instance[ 'comment_num' ] ) ) {
		  $commentNum = ( $instance[ 'comment_num' ]) ?  $instance[ 'comment_num' ] : 4; ?>			
			
			<div class="sidebar-block comments-block">
                <h2><?php _e('Latest Comments', 'cosonix'); ?></h2>
                <ul class="comments-list">
                    <?php		
				 
					$args = array('status' => 'approve', 'number' => $commentNum);
					$comments = get_comments($args);
					
					foreach($comments as $comment) : ?>
					<li>
                        <a href="<?php echo esc_url( get_permalink($comment->comment_post_ID) ); ?>#comments">
                            <span class="wrap-icon"><span class="inner-avatar"><?php echo get_avatar( $comment->comment_ID, 50 ); ?></span></span>
                                <div class="wrap-comment">
                                    <p class="comment-info"><span class="comment-name"><?php echo esc_attr( $comment->comment_author ); ?></span></p>
                                    <p class="short-comment"><?php echo wp_html_excerpt ($comment->comment_content, 45); ?>...</p>
                                </div>
                        </a>
                    </li>
					<?php endforeach; ?>
                </ul>
            </div>
			
<?php			
} }
  public function form( $instance ) {

    if ( isset( $instance[ 'comment_num' ] ) ) {
      $comment_num = $instance[ 'comment_num' ];
    }
    else {
      $comment_num = __( ' ', 'cosonix' );
    }

    ?>

    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'comment_num' ) ); ?>"><?php _e( 'Number of comments in list:', 'cosonix' ); ?></label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'comment_num' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'comment_num' ) ); ?>" type="text" value="<?php echo esc_attr( $comment_num ); ?>" />
    </p>
  <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();

    $instance['comment_num'] = ( ! empty( $new_instance['comment_num'] ) ) ? strip_tags( $new_instance['comment_num'] ) : '';
    return $instance;
  }
}//end of class

// register letcomment_Widget widget
function register_letcomment_Widget() {
  register_widget( 'letcomment_Widget' );
}
add_action( 'widgets_init', 'register_letcomment_Widget' );


/*************************
Start Popular Posts widget
*************************/
class fthemes_popular_Widget extends WP_Widget {

       function __construct() {
    parent::__construct(
      'fthemes_popular_Widget', // Base ID
      __('Cosonix -Latest and Popular Posts Widget', 'cosonix'), // Name
      array( 'description' => __( 'Displays the Most Recent and Popular Posts', 'cosonix' ), ) // Args
    );
  }
/* Front-end display of widget. */
public function widget( $args, $instance ) {

		  $imgpath = get_template_directory_uri(); ?>
					<div class="sidebar-block">
                        <div class="sidebar-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#latest" aria-controls="latest" role="tab" data-toggle="tab"><?php _e('Latest Articles', 'cosonix'); ?></a></li>
                                <li role="presentation"><a href="#popular" aria-controls="popular" role="tab" data-toggle="tab"><?php _e('Most Popular', 'cosonix'); ?></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="latest">
                                    <ul class="posts-list">
										<?php			
										$args = array(
										'posts_per_page'   => 5,
										'orderby'          => 'post_date',
										'order'            => 'DESC',
										'post_type'        => 'post',
										'post_status'      => 'publish',
										); 

										$ft_latestpost = new WP_Query( $args );
										if ($ft_latestpost->have_posts()) :
										while($ft_latestpost->have_posts()) : $ft_latestpost->the_post() ;
										global $post;
										$getImg = esc_url( wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) );
										$img = ($getImg) ? $getImg : $imgpath.'/images/thumbnails/thumbnail.png';
										?>
                                        <li>
                                            <a href="<?php the_permalink(); ?>">
                                            <span class="wrap-img">
                                                <img src="<?php echo esc_url( $img ); ?>" alt=""/>
                                            </span>
                                                <span class="article-title"><?php the_title(); ?></span>
                                            </a>
                                        </li>
										<?php endwhile; ?>
										<?php endif; ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="popular">
                                    <ul class="posts-list">
                                        <?php
										$popular_today = get_popular_post(30);				  
										$today = new WP_Query($popular_today);					  
										while ($today->have_posts()) : $today->the_post();
										global $post;
										$getImg = esc_url( wp_get_attachment_url(get_post_thumbnail_id($post->ID)) );
										$img = ($getImg) ? $getImg : $imgpath.'/images/thumbnails/thumbnail.png';
										?>
										<li>
                                            <a href="<?php echo esc_url( get_permalink($post->ID) ); ?>">
                                            <span class="wrap-img">
                                                <img src="<?php echo esc_url( $img ); ?>" alt=""/>
                                            </span>
                                                <span class="article-title"><?php echo get_the_title($post->ID); ?></span>
                                            </a>
                                        </li>
										<?php endwhile; wp_reset_postdata(); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>           
	  <?php						
}
}//end of class

// register popular_Widget widget
function register_fthemes_popular_Widget() {
  register_widget( 'fthemes_popular_Widget' );
}
add_action( 'widgets_init', 'register_fthemes_popular_Widget' );

/****************
Start Tags widget
****************/
class fthemes_tags_Widget extends WP_Widget {

       function __construct() {
    parent::__construct(
      'fthemes_tags_Widget', // Base ID
      __('Cosonix -Tags Widget', 'cosonix'), // Name
      array( 'description' => __( 'Displays All Tags', 'cosonix' ), ) // Args
    );
  }
/* Front-end display of widget. */
public function widget( $args, $instance ) { ?>
					<div class="sidebar-block">
                        <h2><?php _e('Tags', 'cosonix'); ?></h2>
						<?php
						$tags = get_tags();
						foreach ( $tags as $tag ) {
							$tag_link = get_tag_link( $tag->term_id );
						?>
                        <a href="<?php echo esc_url( $tag_link ); ?>" class="theme_tag"><?php echo esc_attr( $tag->name ); ?></a>
						<?php } ?>
                    </div>           
	  <?php						
}
}//end of class

// register popular_Widget widget
function register_fthemes_tags_Widget() {
  register_widget( 'fthemes_tags_Widget' );
}
add_action( 'widgets_init', 'register_fthemes_tags_Widget' );

/******************
Start Search widget
******************/
class fthemes_search_Widget extends WP_Widget {

       function __construct() {
    parent::__construct(
      'fthemes_search_Widget', // Base ID
      __('Cosonix -Search Widget', 'cosonix'), // Name
      array( 'description' => __( 'Custom Search Bar', 'cosonix' ), ) // Args
    );
  }
/* Front-end display of widget. */
public function widget( $args, $instance ) { ?>
					<div class="sidebar-block">
                        <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="sidebar-search-frm">
                            <input placeholder="<?php esc_attr_e( 'Search the blog...', 'cosonix' ); ?>" type="text" name="s" class="form-control"/>
                            <button type="submit" value="<?php the_search_query(); ?>" ><i class="fa fa-search"></i></button>
                        </form>
                    </div>           
	  <?php						
}
}//end of class

// register popular_Widget widget
function register_fthemes_search_Widget() {
  register_widget( 'fthemes_search_Widget' );
}
add_action( 'widgets_init', 'register_fthemes_search_Widget' );