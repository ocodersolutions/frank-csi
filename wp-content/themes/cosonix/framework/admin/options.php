<?php

/* -----------------------------------------------------------------------------
 * Helper Function
 * -------------------------------------------------------------------------- */
function fthemes_get_option( $opt_name, $default = null ) {
	global $Redux_Options;
	return $Redux_Options->get( $opt_name, $default );
}

/* -----------------------------------------------------------------------------
 * Load Custom Fields
 * -------------------------------------------------------------------------- */
require_once( get_template_directory() . '/framework/admin/custom-fields/field_font_upload/field_upload.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_typography.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_section_info.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_sidebar_select.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_color_scheme.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_slider.php' );
require_once( get_template_directory() . '/framework/admin/custom-fields/field_slides.php' );
/* -----------------------------------------------------------------------------
 * Initial Redux Framework
 * -------------------------------------------------------------------------- */


if(!class_exists('Redux_Options')) {
	//define('Redux_OPTIONS_URL', site_url('path the options folder'));
	require_once( get_template_directory() . '/framework/admin/options/defaults.php' );
}
/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function fthemes_setup_framework_options() {
	$args = array();

	$args['std_show'] = true; // If true, it shows the std value

	// Set the class for the dev mode tab icon.
	// This is ilicered unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

	// Setup custom links in the footer for share icons
	$args['share_icons']['twitter'] = array(
		'link' => 'http://twitter.com/ghost1227',
		'title' => __('Follow me on Twitter', 'cosonix'),
		'img' => Redux_OPTIONS_URL . 'img/social/Twitter.png'
	);
	$args['share_icons']['linked_in'] = array(
		'link' => 'http://www.linkedin.com/profile/view?id=52559281',
		'title' => __('Find me on LinkedIn', 'cosonix'),
		'img' => Redux_OPTIONS_URL . 'img/social/LinkedIn.png'
	);

	// Set the class for the import/export tab icon.
	// This is ilicered unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';

	// Set a custom option name. Don't forget to replace spaces with underscores!
	$args['opt_name'] = 'fthemes_theme_options';

	// Set a custom title for the options page.
	// Default: Options
	$args['menu_title'] = __('Theme Options', 'cosonix');

	// Set a custom page title for the options page.
	// Default: Options
	$args['page_title'] = __('Theme Options', 'cosonix');

	// Set a custom page slug for options page (wp-admin/themes.php?page=***).
	// Default: redux_options
	$args['page_slug'] = 'redux_options';

	// Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
	// Default: menu
	$args['page_type'] = 'menu';

	// Set the parent menu.
	// Default: themes.php
	$args['page_parent'] = 'themes.php';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';
	$args['dev_mode_icon_type'] = 'iconfont';
	$args['import_icon_type'] = 'iconfont';

	$args['intro_text'] = __('<h4>Theme Settings Information for Cosonix eBook Theme</h4>', 'cosonix' );

	$sections = array();
	
	//section for General-logo, favicon, ratina, custom css
	$sections[] = array(
						'icon_type' => 'iconfont',
						'icon' => 'globe',
						'icon_class' => 'icon-large',
						'title' => __('General', 'cosonix'),
						'desc' => __('<p class="description">This is the general options.</p>', 'cosonix'),
						'fields' => array(
										    array(
												'id' => 'logo_url',
												'type' => 'upload',
												'title' => __('Upload Main Logo', 'cosonix'),
												'sub_desc' => __('This is the main logo', 'cosonix'),
											),
											
											array(
												'id' => 'cosonix_favicon',
												'type' => 'upload',
												'title' => __('Upload Favicon', 'cosonix'),
												'sub_desc' => __('This is favicon. Upload 64x64 favicon icon.', 'cosonix'),
											),
											
											array(
												'id' => 'cosonix_appletouch',
												'type' => 'upload',
												'title' => __('Upload Apple Touch Icon', 'cosonix'),
											),
											
											array(
												'id' => 'header_bg',
												'type' => 'color',
												'title' => __('Header Background Color', 'cosonix'),
												'sub_desc' => __('Choose header background color from here. Default color is white.', 'cosonix'),
												'std' => '#FFFFFF'
											),

											array(
												'id' => 'onepage_on',
												'type' => 'checkbox',
												'title' => __('One Page', 'cosonix'),
												'sub_desc' => __('On/Off One Page', 'cosonix'),
												'switch' => true,
												'std' => '1', // 1 = checked | 0 = unchecked
												'desc' => __('If you plan to make your site Multi-Page, please switch off One-Page from here. It will stop the main Menu from one-page scrolling within the same page and work as multi-page menu.', 'cosonix'),
											),
											
											array(
												'id' => 'retina_on',
												'type' => 'checkbox',
												'title' => __('Retina Display', 'cosonix'),
												'sub_desc' => __('On/Off Retina display mode.', 'cosonix'),
												'switch' => true,
												'std' => '0', // 1 = checked | 0 = unchecked
												'desc' => __('Keep every images @2x version if Retina mode is On.', 'cosonix'),
											),
											
											array(
												'id' => 'animations_on',
												'type' => 'checkbox',
												'title' => __('Animations', 'cosonix'),
												'sub_desc' => __('On/Off Default Animations.', 'cosonix'),
												'switch' => true,
												'std' => '0', // 1 = checked | 0 = unchecked
												'desc' => __('To have the animations like the Live Preview of Cosonix Theme you will just need to make sure that the Row ID of the animated sections are: home, features, pricing, reviews.', 'cosonix'),
											),
											
											array( 
												"title" => __("Custom CSS", 'cosonix'),
												"sub_desc" => __("Advanced CSS options. Paste your CSS code and it will override existing code style.", 'cosonix'),
												"id" => "textarea_csscode",
												"std" => "",
												"type" => "textarea"
											),

										)
	);
	
	//section for different colored layouts
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'eye-open',
							'icon_class' => 'icon-large',
							'title' => __('Colors', 'cosonix'),
							'desc' => __('<p class="description">Choose global color for your website</p>', 'cosonix'),
							'fields' => array(

											array(
												'id' => 'three_colors',
												'type' => 'radio',
												'title' => __('Website Ready-Made Colors', 'cosonix'), 
												'sub_desc' => __('Choose a Color for your Website', 'cosonix'),
												'options' => array('1' => 'Yellow', '2' => 'Blue', '3' => 'Green', '4' => 'Red'), // Must provide key => value pairs for radio options
												'std' => '1'
											),
											array(
												'id' => 'checkbox_hide_below',
												'type' => 'checkbox_hide_below',
												'title' => __('Custom Color', 'cosonix'), 
												'sub_desc' => __('Want to use a custom color other than the above colors?', 'cosonix'),
												'desc' => __('Check this if you want to use a custom color', 'cosonix'),
											),
											array(
												'id' => 'custom_color',
												'type' => 'color',
												'title' => __('Website Custom Color', 'cosonix'), 
												'sub_desc' => __('Choose custom Color from here', 'cosonix'),
												'desc' => __('Keep it empty if you like to use the above Ready-Made colors', 'cosonix'),
												'std' => ''
											),
											array(
												'id' => 'custom_blog_color',
												'type' => 'color',
												'title' => __('Blog Posts Custom Color', 'cosonix'), 
												'sub_desc' => __('Choose custom Color for Blog', 'cosonix'),
												'desc' => __('Default Blog Posts color is #acb1b7', 'cosonix'),
												'std' => '#acb1b7'
											),
							)
						);
	
		//section for Social icon url
	$sections[] = array(
					'icon_type' => 'iconfont',
					'icon' => 'group',
					'icon_class' => 'icon-large',
					'title' => __('Social Media', 'cosonix'),
					'desc' => __('<p class="description">This is options for setting up the social media of website. Do not forget to use http:// for any social urls.</p>', 'cosonix'),
					'fields' => array(
                                                    array(
																'id' => 'social_facebook',
																'type' => 'text',
																'title' => __('Facebook URL', 'cosonix'), 
																'sub_desc' => __('The URL to your account page', 'cosonix'),
																'std' => '',
													),
													
													array(
                                                                'id' => 'social_twitter',
                                                                'type' => 'text',
                                                                'title' => __('Twitter URL', 'cosonix'),
                                                                'sub_desc' => __('The URL to your account page', 'cosonix'),
                                                                'std' => '',
                                                    ),
													
													array(
                                                                'id' => 'social_linkedin',
                                                                'type' => 'text',
                                                                'title' => __('Linkedin URL', 'cosonix'),
                                                                'sub_desc' => __('The URL to your account page', 'cosonix'),
                                                                'std' => '',
                                                    ),

													array(
																'id' => 'social_googleplus',
																'type' => 'text',
																'title' => __('GooglePlus URL', 'cosonix'), 
																'sub_desc' => __('The URL to your account page', 'cosonix'),
																'std' => '',
													),

													array(
																'id' => 'social_pinterest',
																'type' => 'text',
																'title' => __('Pinterest URL', 'cosonix'), 
																'sub_desc' => __('The URL to your account page', 'cosonix'),
																'std' => '',
													),

													array(
																'id' => 'social_instagram',
																'type' => 'text',
																'title' => __('Instagram URL', 'cosonix'), 
																'sub_desc' => __('The URL to your account page', 'cosonix'),
																'std' => '',
													),													
													
													array(
																'id' => 'social_youtube',
																'type' => 'text',
																'title' => __('Youtube URL', 'cosonix'), 
																'sub_desc' => __('The URL to your account page', 'cosonix'),
																'std' => '',
													),
							)
				);
		
		//section for mailchimp
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'cog',
							'icon_class' => 'icon-large',
							'title' => __('MailChimp/Aweber', 'cosonix'),
							'desc' => __('<p class="description">MailChimp or Aweber settings for subscriber forms of Cosonix</p>', 'cosonix'),
							'fields' => array(

													array(
																'id' => 'mailchimp_apikey',
																'type' => 'text',
																'title' => __('MailChimp API Key', 'cosonix'), 
																'sub_desc' => __('The API key of your MailChimp account', 'cosonix'),
																'std' => '',
													),
													array(
																'id' => 'mailchimp_listid',
																'type' => 'text',
																'title' => __('MailChimp List ID', 'cosonix'), 
																'sub_desc' => __('The List Id of your Mailchimp.', 'cosonix'),
																'std' => '',
													),
													array(
																'id' => '123',
																'type' => 'info',
																'desc' => __('<p class="description">If you want to use Aweber instead of MailChimp use the settings below and keep the above MailChimp fields empty.</p>', 'cosonix')
													),
													array(
																'id' => 'ft_aweber_listid',
																'type' => 'text',
																'title' => __('Aweber List ID', 'cosonix'), 
																'sub_desc' => __('The unique List ID of Aweber account', 'cosonix'),
																'std' => '',
													),
													array(
																'id' => 'aweber_redirectpage',
																'type' => 'text',
																'title' => __('Redirect Page URL', 'cosonix'), 
																'sub_desc' => __('Redirect page url after successful subscription of Aweber', 'cosonix'),
																'std' => '',
													),
													array(
																'id' => 'aweber_redirectpage_old',
																'type' => 'text',
																'title' => __('Redirect Page URL for already subscribed users', 'cosonix'), 
																'sub_desc' => __('Redirect page url for already subscribed users of Aweber', 'cosonix'),
																'std' => '',
													),
							)
						);
						
		//section for Blog
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'desktop',
							'icon_class' => 'icon-large',
							'title' => __('Blog', 'cosonix'),
							'desc' => __('<p class="description">Blog Settings</p>', 'cosonix'),
							'fields' => array(

													array(
																'id' => 'blog_sidebar_pos',
																'type' => 'radio',
																'title' => __('Sidebar Position', 'cosonix'),
																'options' => array('1' => 'Right Sidebar', '2' => 'Left Sidebar'), // Must provide key => value pairs for radio options
																'std' => '1'
													),
													array(
																'id' => 'blog_meta_switch',
																'type' => 'checkbox',
																'title' => __('Post Meta for Blog pages', 'cosonix'), 
																'sub_desc' => __('Show/Hide Post date, Number of comments and Tags.', 'cosonix'),
																'switch' => true,
																'std' => '1' // 1 = checked | 0 = unchecked
													),
													array(
																'id' => 'single_meta_switch',
																'type' => 'checkbox',
																'title' => __('Post Meta for Single Post', 'cosonix'), 
																'sub_desc' => __('Show/Hide Post date, Number of comments and Tags.', 'cosonix'),
																'switch' => true,
																'std' => '1' // 1 = checked | 0 = unchecked
													),
							)
						);
						
		//section for Footer
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'columns',
							'icon_class' => 'icon-large',
							'title' => __('Footer', 'cosonix'),
							'desc' => __('<p class="description">This is options for footer.</p>', 'cosonix'),
							'fields' => array(

											array(
												'id' => 'footerlogo_url',
												'type' => 'upload',
												'title' => __('Upload Footer Logo', 'cosonix'),
												'sub_desc' => __('This is the footer logo', 'cosonix'),
											),
											
											array(
												'id' => 'copy_text',
												'type' => 'textarea',
												'title' => __('Copyright Text', 'cosonix'),
												'sub_desc' => __('Enter your Copyright text here', 'cosonix'),
												'std' => '',
											),

											array(
												'id' => 'bottom_footer_bg',
												'type' => 'color',
												'title' => __('Bottom Footer Background Color', 'cosonix'),
												'sub_desc' => __('Choose Bottom Footer background color from here.', 'cosonix'),
												'std' => ''
											),
											
											array(
												'id' => 'top_footer_section',
												'type' => 'checkbox',
												'title' => __('Top Footer Section', 'cosonix'),
												'sub_desc' => __('Show/Hide Top Footer Section.', 'cosonix'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'top_footer_bg',
												'type' => 'color',
												'title' => __('Top Footer Background Color', 'cosonix'),
												'sub_desc' => __('Choose Top Footer background color from here.', 'cosonix'),
												'std' => ''
											),																						

											array(
												'id' => 'footer_column_title',
												'type' => 'color',
												'title' => __('Footer Column Titles Color', 'cosonix'),
												'std' => ''
											),
											
													array(
																'id' => 'footer_title1',
																'type' => 'text',
																'title' => __('Title of First Column (Quick Links Column) of the Footer', 'cosonix'), 
																'sub_desc' => '',
																'std' => '',
													),
													
													array(
																'id' => 'footer_title2',
																'type' => 'text',
																'title' => __('Title of Second Column (Social Media Column) of the Footer', 'cosonix'), 
																'sub_desc' => __('Redirect page url for already subscribed users of Aweber', 'cosonix'),
																'std' => '',
													),
													
													array(
																'id' => 'footer_title3',
																'type' => 'text',
																'title' => __('Title of Third Column (News Updates Column) of the Footer', 'cosonix'), 
																'sub_desc' => '',
																'std' => '',
													),
													
													array(
																'id' => 'footer_title4',
																'type' => 'text',
																'title' => __('Title of Fourth Column (Newsletter Column) of the Footer', 'cosonix'), 
																'sub_desc' => '',
																'std' => '',
													),
											
											array(
												'id' => 'footer_title',
												'type' => 'color',
												'title' => __('Footer Titles Color', 'cosonix'),
												'std' => ''
											),
											
											array(
												'id' => 'footer_blog',
												'type' => 'checkbox',
												'title' => __('Latest Articles/News Updates Column', 'cosonix'),
												'sub_desc' => __('Show/Hide News Updates column in the footer.', 'cosonix'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'footer_newsletter',
												'type' => 'checkbox',
												'title' => __('Newsletter Column', 'cosonix'),
												'sub_desc' => __('Show/Hide newsletter column in the footer.', 'cosonix'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),																																
											
							)
						);					

                        

	$tabs = array();

		$theme_data = wp_get_theme();
		$item_uri = $theme_data->get('ThemeURI');
		$description = $theme_data->get('Description');
		$author = $theme_data->get('Author');
		$author_uri = $theme_data->get('AuthorURI');
		$version = $theme_data->get('Version');
		$tags = $theme_data->get('Tags');

	
	$item_info = '<div class="redux-opts-section-desc">';
	$item_info .= '<p class="redux-opts-item-data description item-uri">' . __('<strong>Theme URL:</strong> ', 'cosonix') . '<a href="' . esc_url( $item_uri ) . '" target="_blank">' . $item_uri . '</a></p>';
	$item_info .= '<p class="redux-opts-item-data description item-author">' . __('<strong>Author:</strong> ', 'cosonix') . ($author_uri ? '<a href="' . esc_url( $author_uri ) . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-version">' . __('<strong>Version:</strong> ', 'cosonix') . $version . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-description">' . $description . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-tags">' . __('<strong>Tags:</strong> ', 'cosonix') . implode(', ', $tags) . '</p>';
	$item_info .= '</div>';

	$tabs['item_info'] = array(
		'icon' => 'info-sign',
		'icon_class' => 'icon-large',
		'title' => __('Theme Information', 'cosonix'),
		'content' => $item_info
	);

	global $Redux_Options;
	$Redux_Options = new Redux_Options($sections, $args, $tabs);
}
add_action('init', 'fthemes_setup_framework_options', 0);