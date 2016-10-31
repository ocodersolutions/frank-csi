<?php 
// add_editor_style();
add_action('after_setup_theme', 'fthemes_theme_setup');
function fthemes_theme_setup(){
	load_theme_textdomain( 'cosonix', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
}

    
require_once( get_template_directory() . '/framework/admin/options.php' ); // Load Options Framework
require_once( get_template_directory() . '/inc/theme-functions.php' ); // Load Theme Functions
require_once( get_template_directory() . '/inc/enqueue.php' ); // Enqueue JavaScripts & CSS
require_once( get_template_directory() . '/inc/customcss.php' ); // Load Custom CSS
require_once( get_template_directory() . '/inc/widgets.php' );
require_once( get_template_directory() . '/inc/popular-post.php' );

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once( get_template_directory() . '/inc/vc-shortcodes.php' ); // Load Visual Composer Customizations
}

if ( is_admin() ) {
	require_once( get_template_directory() . '/framework/plugins.php' );
}