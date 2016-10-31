<?php
function fthemes_scripts_basic() {  

	/* ------------------------------------------------------------------------ */
	/* Register Scripts */
	/* ------------------------------------------------------------------------ */
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '3.3.5', TRUE);
	wp_register_script('waypoints', get_template_directory_uri() . '/js/waypoints.min.js', 'jquery', '3.1.1', TRUE);
	wp_register_script('animate', get_template_directory_uri() . '/js/animations.js', 'jquery', '1.0.0', TRUE);
	wp_register_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', 'jquery', '1.12.0', TRUE);
	wp_register_script('chosen', get_template_directory_uri() . '/js/chosen.jquery.min.js', 'jquery', '1.0.0', TRUE);
	wp_register_script('retina', get_template_directory_uri() . '/js/retina.js', 'jquery', '1.0.0', TRUE);
	wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', '1.0.0', TRUE);
	wp_register_script('main-multipage', get_template_directory_uri() . '/js/main-multipage.js', 'jquery', '1.0.0', TRUE);

	/* ------------------------------------------------------------------------ */
	/* Enqueue Scripts */
	/* ------------------------------------------------------------------------ */
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('waypoints');
	if(fthemes_get_option('animations_on') == '1') {
	wp_enqueue_script('animate');
	}
  	wp_enqueue_script('validate');
	if(fthemes_get_option('retina_on') == '1') {
		wp_enqueue_script('retina');
	}
  	wp_enqueue_script('chosen');
	if(fthemes_get_option('onepage_on') == '1') {
	wp_enqueue_script('main');
	} else {
	wp_enqueue_script('main-multipage');
	} if(fthemes_get_option('onepage_on') == '1') {
	wp_localize_script( 'main', 'prefix_object_name', array(
		'error_while_ajax_request' => __( 'Error while ajax request', 'cosonix' ),
		'thank_you_your_email_has_been_sent' => __( 'Thank you, your email has been sent', 'cosonix' ),
		'please_try_again' => __( 'Please, fill in the required fields!', 'cosonix' )
	) );
	} else {
	wp_localize_script( 'main-multipage', 'prefix_object_name', array(
		'error_while_ajax_request' => __( 'Error while ajax request', 'cosonix' ),
		'thank_you_your_email_has_been_sent' => __( 'Thank you, your email has been sent', 'cosonix' ),
		'please_try_again' => __( 'Please, fill in the required fields!', 'cosonix' )
	) );
	}
}
add_action( 'wp_enqueue_scripts', 'fthemes_scripts_basic' );  

function fthemes_styles_basic()  {  
	
	/* ------------------------------------------------------------------------ */
	/* Register Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_register_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,600', array(), '4.4.1', 'all' );
	wp_register_style( 'lato', 'https://fonts.googleapis.com/css?family=Lato:400,700', array(), '1.0', 'all' );
	wp_register_style( 'source-sans', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300', array(), '1.0', 'all' );
	wp_register_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0', 'all' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.5', 'all' );
	wp_register_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.3.0', 'all' );
	wp_register_style( 'animate-custom', get_template_directory_uri() . '/css/animate-custom.css', array(), '1.0', 'all' );
	wp_register_style( 'cf7', get_template_directory_uri() . '/css/contact-form7.css', array(), '1.0', 'all' );
	wp_register_style( 'chosen', get_template_directory_uri() . '/css/chosen.css', array(), '1.0', 'all' );
	wp_register_style( 'tabion-css', get_template_directory_uri() . '/css/tabion-css.css', array(), '1.0', 'all' );
	wp_register_style( 'styles', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );
	wp_register_style( 'small', get_template_directory_uri() . '/css/small.css', array(), '1', 'all');
	wp_register_style( 'medium', get_template_directory_uri() . '/css/medium.css', array(), '1', 'all' );
	wp_register_style( 'large', get_template_directory_uri() . '/css/large.css', array(), '1', 'all' );


	wp_register_style( 'stylesheet', get_stylesheet_uri(), array(), '1.0', 'all' ); // Main Stylesheet
	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Stylesheets */
	/* ------------------------------------------------------------------------ */
	wp_enqueue_style( 'open-sans' );
	wp_enqueue_style( 'lato' );
	wp_enqueue_style( 'source-sans' );
	if(fthemes_get_option('animations_on') == '1') {
	wp_enqueue_style( 'animate' );
	}
	wp_enqueue_style( 'styles' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'font-awesome' );
	wp_enqueue_style( 'animate-custom' );
	wp_enqueue_style( 'cf7' );
	wp_enqueue_style( 'tabion-css' );
	wp_enqueue_style( 'small' );
	wp_enqueue_style( 'medium' );
	wp_enqueue_style( 'large' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( 'chosen' );
	
}  
add_action( 'wp_enqueue_scripts', 'fthemes_styles_basic', 1 );
?>