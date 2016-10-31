<?php
// **********************************************************************// 
// ! Set Content Width
// **********************************************************************//  
if (!isset( $content_width )) $content_width = 1170;

// **********************************************************************// 
// ! Supports post thumbnails
// **********************************************************************// 
add_theme_support( 'post-thumbnails' );

// **********************************************************************// 
// ! Adds RSS feed links to <head> for posts and comments
// **********************************************************************// 
add_theme_support( 'automatic-feed-links' );

// **********************************************************************// 
// ! This theme uses wp_nav_menu() for Main Menu
// **********************************************************************// 
register_nav_menus( array(
		'primary_menu'=> __('Main Menu', 'cosonix'),
		'menu_footer'=> __('Footer Menu', 'cosonix')
) );

// **********************************************************************// 
// ! Register Sidebars
// **********************************************************************//
if ( ! function_exists( 'fthemes_widgets_init' ) ) {
	function fthemes_widgets_init() {

		register_sidebar( array(
		'name' => __( 'Sidebar', 'cosonix' ),
		'id' => 'fthemes_sidebar',
		'before_widget' => '<div class="sidebar-block">',
		'after_widget' => "</div>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	}
}
add_action( 'widgets_init', 'fthemes_widgets_init' );

// **********************************************************************// 
// ! Custom Pagination
// **********************************************************************//
function fthemes_custom_pagination() {
	global $wp_query;

	$big = 999999999; // need an unlikely integer
		
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'show_all'     => false,
		'end_size'     => 1,
		'mid_size'     => 2,
		'prev_next'    => true,
		'prev_text'    => '<i class="fa fa-long-arrow-left"></i>',
		'next_text'    => '<i class="fa fa-long-arrow-right"></i>',
		'type'         => 'list',
		'add_args'     => false,
		'add_fragment' => ''
	) );
}

// **********************************************************************// 
// ! Filtering WP_title
// **********************************************************************//
add_filter( 'wp_title', 'fthemes_wp_title_for_home', 10, 2 );
function fthemes_wp_title_for_home( $title, $sep )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'cosonix' ) . ' | ' . get_bloginfo( 'description' );
  }
  
  // Add a page number if necessary:
	global $page, $paged;
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', 'cosonix' ), max( $paged, $page ) );
	}
	return $title;
}

// **********************************************************************// 
// ! Excerpt Limit
// **********************************************************************//
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

// **********************************************************************// 
// ! Un-register Default Search-bar, Recent Comments and Tags
// **********************************************************************//
/*function fthemes_unregister_default_wp_widgets() {
	unregister_widget('WP_Widget_Search');
	unregister_widget('WP_Widget_Tag_Cloud');
	unregister_widget('WP_Widget_Recent_Comments');
}
add_action('widgets_init', 'fthemes_unregister_default_wp_widgets', 1);*/

// **********************************************************************// 
// ! Display Comments section
// **********************************************************************//
if ( ! function_exists( 'cosonix_comment' ) ) {
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own cosonix_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
	function cosonix_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	global $post;
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="wrapper-comment">
		<span class="wrap-icon">
            <span class="inner-avatar">
                <?php echo get_avatar($comment, 50); ?>
            </span>
        </span>
        <div class="wrap-comment">
            <p class="comment-info"><span class="comment-name"><?php comment_author(); ?></span><span class="comment-time"><?php comment_date('n-j-Y') ?></span></p>
            <div class="short-comment"><?php comment_text()?></div>
        </div>
	</div>
	<!-- #comment-## -->

	<?php
	}
}

/*******************
Comment form styling
*******************/
if ( ! function_exists( 'cosonix_comment_field' ) ) {
	function cosonix_comment_field($arg) {
  
	$arg['comment_field'] = '<textarea name="comment" id="" cols="30" rows="30" class="form-control" placeholder="'.__('Your comment...', 'cosonix').'"></textarea>';    
	return $arg;
	}
}
add_filter('comment_form_defaults', 'cosonix_comment_field');//Text area customization filter

if ( ! function_exists( 'cosonix_modify_comment_fields' ) ) {
	function cosonix_modify_comment_fields($fields) {

    $fields['fields'] = '<div class="row"><div class="col-md-5"><input type="text" id="author" class="form-control" name="author" placeholder="'.__("Name", 'cosonix').'*"';
	if(preg_match('/(?i)msie [6-9]/',$_SERVER['HTTP_USER_AGENT']))
	{
    $n_value = __("Name*", 'cosonix');
	$e_value = __("Email*", 'cosonix');
	$w_value = __("Website", 'cosonix');
	}
	else { $n_value = '';
	$e_value = '';
	$w_value = '';
	}
	$fields['fields'] .= ' value="'.esc_attr($n_value).'" aria-required="true" /></div><div class="col-md-7"></div></div>';
    $fields['fields'] .= '<div class="row"><div class="col-md-5"><input type="email" id="email" class="form-control" name="email" placeholder="'.__("Email", 'cosonix').'*" value="'.esc_attr($e_value).'" aria-required="true" /></div></div>';
	$fields['fields'] .= '<div class="row"><div class="col-md-5"><input type="text" id="url" class="form-control" name="url" placeholder="'.__("Website", 'cosonix').'" value="'.esc_attr($w_value).'" aria-required="false" /></div><div class="col-md-7"></div></div>';
	return $fields;
	}
}

add_filter('comment_form_defaults', 'cosonix_modify_comment_fields');//Name, Email and Website fields customization filter

function fthemes_comment_form_submit_button($button) {
	$button =
		'<div class="row">
            <div class="col-md-7"></div>
                <div class="col-md-5">
                    <button class="btn-common pull-right" name="submit" type="submit" id="[args:id_submit]" value="[args:label_submit]">'.__("Submit comment", 'cosonix').'</button>
                </div>
         </div>' .
		get_comment_id_fields();
	return $button;
}
add_filter('comment_form_submit_button', 'fthemes_comment_form_submit_button');//Submit button customization filter