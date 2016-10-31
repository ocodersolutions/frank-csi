<?php
/*-----------------------------------------------------------------------------------*/
/* Start Using Cosonix Shortcodes in the Visual Composer */
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'fthemes_vc_shortcodes' );
function fthemes_vc_shortcodes() {
/*************
Home Block - 1
*************/
   vc_map( array(
      "name" => __("Cosonix- Home Block Variation 1", 'cosonix'),
      "base" => "home_block",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Home-Block section variation one', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play title color", 'cosonix'),
            "param_name" => "title_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play text color", 'cosonix'),
            "param_name" => "text_color",
            "value" => '',
            "description" => ''            
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("SignUp Form Button Text", 'cosonix'),
            "param_name" => "button_text",
            "value" => '',
            "description" => __('Sign up form button text', 'cosonix')
         ),
          array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Right Side Image", 'cosonix'),
            "param_name" => "image",
            "value" => '',
            "description" => __('Attach the right side image of this block', 'cosonix')
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Section Height", 'cosonix'),
            "param_name" => "height",
            "value" => '',
            "description" => __('Default height is 650px', 'cosonix')
         ),
      )
   )
);

/*************
Home Block - 2
*************/
   vc_map( array(
      "name" => __("Cosonix- Home Block Variation 2", 'cosonix'),
      "base" => "home_block_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Home-Block section variation two', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play title color", 'cosonix'),
            "param_name" => "title_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play text color", 'cosonix'),
            "param_name" => "text_color",
            "value" => '',
            "description" => ''            
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("SignUp Form Button Text", 'cosonix'),
            "param_name" => "button_text",
            "value" => '',
            "description" => __('Sign up form button text', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Section Height", 'cosonix'),
            "param_name" => "height",
            "value" => '',
            "description" => __('Default height is 750px', 'cosonix')
         ),
      )
   )
);

/********
Portfolio
********/
   vc_map( array(
      "name" => __("Cosonix- Portfolio Image", 'cosonix'),
      "base" => "ft_portfolio",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Portfolio Project Image', 'cosonix'),
      "params" => array(
         array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Project Image", 'cosonix'),
            "param_name" => "project_image",
            "value" => '',
            "description" => __('Attach the project image. Try to use same size images for all the projects of the portfolio to get the best view.', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Project Category Name", 'cosonix'),
            "param_name" => "project_category",
            "value" => '',
            "description" => __('Project category name', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Category text Color", 'cosonix'),
            "param_name" => "project_category_color",
            "value" => '#ffffff',
            "description" => ''            
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Project Title", 'cosonix'),
            "param_name" => "project_title",
            "value" => '',
            "description" => __('Project title', 'cosonix')
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Title text Color", 'cosonix'),
            "param_name" => "project_title_color",
            "value" => '#ffffff',
            "description" => ''            
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Project URL", 'cosonix'),
            "param_name" => "project_url",
            "value" => '',
            "description" => __('Details Page URL of the Project', 'cosonix')
         ),
		 array(
		   "type" => "checkbox",
		   "class" => "",
		   "heading" => __("Target",'cosonix'),
		   "param_name" => "target",
		   "value" => array(
						"" => "false"
				   ),
			"description" => __('Open link in new tab?', 'cosonix')
		),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Mouse Over Background Color", 'cosonix'),
            "param_name" => "project_bg_color",
            "value" => '#3C3C3C',
            "description" => ''            
         ),
      )
   )
);

/***************
Newsletter Block
***************/
   vc_map( array(
      "name" => __("Cosonix- NewsLetter Block", 'cosonix'),
      "base" => "ft_newsletter",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('NewsLetter Block with Signup form and Images', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("SignUp Button Text", 'cosonix'),
            "param_name" => "button_text",
            "value" => '',
            "description" => __('SignUp button text', 'cosonix')
         ),
          array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Left Side Image", 'cosonix'),
            "param_name" => "image_one",
            "value" => '',
            "description" => __('Attach the left side desktop-view image of this block', 'cosonix')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Right Side Book Image", 'cosonix'),
            "param_name" => "image_two",
            "value" => '',
            "description" => __('Attach the right side book image of this block', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Book Price", 'cosonix'),
            "param_name" => "price",
            "value" => '',
            "description" => __('Input book price', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Price Currency", 'cosonix'),
            "param_name" => "currency",
            "value" => '',
            "description" => __('Input currency of the book price, e.g., $', 'cosonix')
         ),
      )
   )
);
/*******
Features
*******/
vc_map( array(
      "name" => __("Cosonix- Features with Icon", 'cosonix'),
      "base" => "iconic_features",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Displays Features with FontAwesome Icons', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Icon name", 'cosonix'),
            "param_name" => "icon",
            "value" => '',
            "description" => __('Icon list - ', 'cosonix').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Read More Text", 'cosonix'),
            "param_name" => "readmore",
            "value" => 'More >',
            "description" => __('Place the Read More Text - Default is More >', 'cosonix')
         ),
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Read More URL", 'cosonix'),
            "param_name" => "read_more",
            "value" => '',
            "description" => __('Place the Read More url', 'cosonix')
         ),
      )
   )
);
/************
Pricing Table
************/
vc_map( array(
      "name" => __("Cosonix- Pricing table", 'cosonix'),
      "base" => "ft_pricing",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'description' => __('Displays pricing table plan', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Pracing plan name", 'cosonix'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => __('Pracing plan name', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Price", 'cosonix'),
            "param_name" => "price",
			"value" => '',
            "description" => __('Price with Currency (e.g. $99)', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Features", 'cosonix'),
            "param_name" => "features",
            "description" => __('Start each feature on new line','cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button Label", 'cosonix'),
            "param_name" => "button_text",
			"value" => '',
            "description" => __('Button label', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button URL", 'cosonix'),
            "param_name" => "button_url",
			"value" => '',
            "description" => __('Button url field. Leave it blank if you want to use Paypal.', 'cosonix')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => __("Want to use Paypal?", 'cosonix'),
            "param_name" => "paypal",
			"value" => array(
				  "" => "true"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("PayPal Business Email ID", 'cosonix'),
            "param_name" => "email",
			"value" => '',
			'dependency' => array(
               'element'=>'paypal',
               'value' => 'true'
            ),
            "description" => __('Your PayPal Business Email ID', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Currency", 'cosonix'),
            "param_name" => "currency",
			"value" => 'USD',
			'dependency' => array(
               'element'=>'paypal',
               'value' => 'true'
            ),
            "description" => __('Currency', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Payment Amount", 'cosonix'),
            "param_name" => "amount",
			"value" => '',
			'dependency' => array(
               'element'=>'paypal',
               'value' => 'true'
            ),
            "description" => __('Payment Amount', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Return URL", 'cosonix'),
            "param_name" => "return_url",
			"value" => '',
			'dependency' => array(
               'element'=>'paypal',
               'value' => 'true'
            ),
            "description" => __('The URL of Thank You Page.', 'cosonix')
         ),
      )
   )
);
/**********
Testimonial
**********/
vc_map( array(
      "name" => __("Cosonix- Testimonial", 'cosonix'),
      "base" => "ft_testimonial",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Testimonial', 'cosonix'),
      "params" => array(
          array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Client Image", 'cosonix'),
            "param_name" => "client_image",
            "value" => '',
            "description" => __('Attach 84x84 size client image', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("What Cient Says", 'cosonix'),
            "param_name" => "text"
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => __("Want to have quoted text?", 'cosonix'),
            "param_name" => "quote",
			"value" => array(
				  "" => "true"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Client Name", 'cosonix'),
            "param_name" => "client_name"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Client Designation", 'cosonix'),
            "param_name" => "client_designation"
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play background color", 'cosonix'),
            "param_name" => "bg_color",
            "value" => '',
            "description" => ''            
         ),
      )
   )
);
/***************
Quick Peak Block
***************/
vc_map( array(
      "name" => __("Cosonix- Quick Peak Block", 'cosonix'),
      "base" => "quickpeak",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Displays some important features', 'cosonix'),
      "params" => array(
         array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play background color", 'cosonix'),
            "param_name" => "bg_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play titles color", 'cosonix'),
            "param_name" => "title_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play text color", 'cosonix'),
            "param_name" => "text_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play icons color", 'cosonix'),
            "param_name" => "icon_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Sub-Title 1", 'cosonix'),
            "param_name" => "sub_title_one",
            "value" => '',
            "description" => __('Sub-Title 1', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Sub-Text 1", 'cosonix'),
            "param_name" => "sub_text_one",
            "value" => '',
            "description" => __('Text under the Sub-Title 1', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Icon 1", 'cosonix'),
            "param_name" => "sub_text_icon_one",
            "value" => '',
            "description" => __('Icon name for the Sub-section 1. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Sub-Title 2", 'cosonix'),
            "param_name" => "sub_title_two",
            "value" => '',
            "description" => __('Sub-Title 2', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Sub-Text 2", 'cosonix'),
            "param_name" => "sub_text_two",
            "value" => '',
            "description" => __('Text under the Sub-Title 2', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Icon 2", 'cosonix'),
            "param_name" => "sub_text_icon_two",
            "value" => '',
            "description" => __('Icon name for the Sub-section 2. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Sub-Title 3", 'cosonix'),
            "param_name" => "sub_title_three",
            "value" => '',
            "description" => __('Sub-Title 3', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Sub-Text 3", 'cosonix'),
            "param_name" => "sub_text_three",
            "value" => '',
            "description" => __('Text under the Sub-Title 3', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Icon 3", 'cosonix'),
            "param_name" => "sub_text_icon_three",
            "value" => '',
            "description" => __('Icon name for the Sub-section 3. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>'
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button Label", 'cosonix'),
            "param_name" => "button_text",
            "value" => '',
            "description" => __('Button Text', 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button URL", 'cosonix'),
            "param_name" => "button_url",
            "value" => '',
            "description" => __('Button link', 'cosonix')
         ),
      )
   )
);
/*********
Author Bio
*********/
vc_map( array(
      "name" => __("Cosonix- Author Block", 'cosonix'),
      "base" => "ft_author",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Author Bio Block', 'cosonix'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Author Name", 'cosonix'),
            "param_name" => "author_name"
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Author Name color", 'cosonix'),
            "param_name" => "author_name_color",
            "value" => '',
            "description" => ''            
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Author Image", 'cosonix'),
            "param_name" => "author_image",
            "value" => '',
            "description" => __('Attach 128x128 size author image', 'cosonix')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Author Signature Image", 'cosonix'),
            "param_name" => "author_sign",
            "value" => '',
            "description" => __('Attach an image of author signature. Transparent background is recommended.', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("About Author", 'cosonix'),
            "param_name" => "about_author"
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Text color", 'cosonix'),
            "param_name" => "text_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play section border color", 'cosonix'),
            "param_name" => "border_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Facebook URL", 'cosonix'),
            "param_name" => "fb"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Twitter URL", 'cosonix'),
            "param_name" => "tw"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Google+ URL", 'cosonix'),
            "param_name" => "gp"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Pinterest URL", 'cosonix'),
            "param_name" => "pn"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Instagram URL", 'cosonix'),
            "param_name" => "in"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Youtube URL", 'cosonix'),
            "param_name" => "utube"
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play Social Icons Background color", 'cosonix'),
            "param_name" => "icon_bg_color",
            "value" => '',
            "description" => ''            
         ),
      )
   )
);
/*******
Chapters
*******/
vc_map( array(
      "name" => __("Cosonix- Chapters Block", 'cosonix'),
      "base" => "ft_chapters",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Chapters Block', 'cosonix'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter One Caption Title", 'cosonix'),
            "param_name" => "chapter_one_main_title"
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter One Title", 'cosonix'),
            "param_name" => "chapter_one_title"
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Chapter One Description", 'cosonix'),
            "param_name" => "chapter_one_description"
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Chapter One Image", 'cosonix'),
            "param_name" => "chapter_one_img",
            "value" => '',
            "description" => __('Image Width and Height ratio 1 : 2.8 is the best for the Chapters section.', 'cosonix')
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Two Caption Title", 'cosonix'),
            "param_name" => "chapter_two_main_title"
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Two Title", 'cosonix'),
            "param_name" => "chapter_two_title"
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Chapter Two Description", 'cosonix'),
            "param_name" => "chapter_two_description"
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Chapter Two Image", 'cosonix'),
            "param_name" => "chapter_two_img",
            "value" => '',
            "description" => __('Image Width and Height ratio 1 : 2.8 is the best for the Chapters section.', 'cosonix')
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Three Caption Title", 'cosonix'),
            "param_name" => "chapter_three_main_title"
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Three Title", 'cosonix'),
            "param_name" => "chapter_three_title"
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Chapter Three Description", 'cosonix'),
            "param_name" => "chapter_three_description"
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Chapter Three Image", 'cosonix'),
            "param_name" => "chapter_three_img",
            "value" => '',
            "description" => __('Image Width and Height ratio 1 : 2.8 is the best for the Chapters section.', 'cosonix')
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Four Caption Title", 'cosonix'),
            "param_name" => "chapter_four_main_title"
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Chapter Four Title", 'cosonix'),
            "param_name" => "chapter_four_title"
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Chapter Four Description", 'cosonix'),
            "param_name" => "chapter_four_description"
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Chapter Four Image", 'cosonix'),
            "param_name" => "chapter_four_img",
            "value" => '',
            "description" => __('Image Width and Height ratio 1 : 2.8 is the best for the Chapters section.', 'cosonix')
         ),
      )
   )
);
/************
Vertical Tabs
************/
vc_map( array(
      "name" => __("Cosonix- Vertical Tabs", 'cosonix'),
      "base" => "ft_vtab",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Vertical Tabs', 'cosonix'),
      "params" => array(
          array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => __("Number of Tabs", 'cosonix'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               __('One', 'cosonix')=>'1',
			   __('Two', 'cosonix')=>'2', 
			   __('Three', 'cosonix')=>'3',
			   __('Four', 'cosonix')=>'4',
			   __('Five', 'cosonix')=>'5', 
			   __('Six', 'cosonix')=>'6',
			   __('Seven', 'cosonix')=>'7',
			   __('Eight', 'cosonix')=>'8', 
			   __('Nine', 'cosonix')=>'9',
			   __('Ten', 'cosonix')=>'10',
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-1 Title", 'cosonix'),
            "param_name" => "title1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-1 Icon", 'cosonix'),
            "param_name" => "icon1",
			"description" => __('Icon name for the tab-1. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-1 Sub-Title", 'cosonix'),
            "param_name" => "sub_title1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-1 Text", 'cosonix'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-1 Image", 'cosonix'),
            "param_name" => "image1",
            "value" => '',
            "description" => __('Attach Tab 1 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-2 Title", 'cosonix'),
            "param_name" => "title2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-2 Icon", 'cosonix'),
            "param_name" => "icon2",
			"description" => __('Icon name for the tab-2. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-2 Sub-Title", 'cosonix'),
            "param_name" => "sub_title2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-2 Text", 'cosonix'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-2 Image", 'cosonix'),
            "param_name" => "image2",
            "value" => '',
            "description" => __('Attach Tab 2 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-3 Title", 'cosonix'),
            "param_name" => "title3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-3 Icon", 'cosonix'),
            "param_name" => "icon3",
			"description" => __('Icon name for the tab-3. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-3 Sub-Title", 'cosonix'),
            "param_name" => "sub_title3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-3 Text", 'cosonix'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-3 Image", 'cosonix'),
            "param_name" => "image3",
            "value" => '',
            "description" => __('Attach Tab 3 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-4 Title", 'cosonix'),
            "param_name" => "title4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-4 Icon", 'cosonix'),
            "param_name" => "icon4",
			"description" => __('Icon name for the tab-4. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-4 Sub-Title", 'cosonix'),
            "param_name" => "sub_title4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-4 Text", 'cosonix'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-4 Image", 'cosonix'),
            "param_name" => "image4",
            "value" => '',
            "description" => __('Attach Tab 4 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-5 Title", 'cosonix'),
            "param_name" => "title5",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-5 Icon", 'cosonix'),
            "param_name" => "icon5",
			"description" => __('Icon name for the tab-5. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-5 Sub-Title", 'cosonix'),
            "param_name" => "sub_title5",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-5 Text", 'cosonix'),
            "param_name" => "text5",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-5 Image", 'cosonix'),
            "param_name" => "image5",
            "value" => '',
            "description" => __('Attach Tab 5 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-6 Title", 'cosonix'),
            "param_name" => "title6",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-6 Icon", 'cosonix'),
            "param_name" => "icon6",
			"description" => __('Icon name for the tab-6. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-6 Sub-Title", 'cosonix'),
            "param_name" => "sub_title6",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-6 Text", 'cosonix'),
            "param_name" => "text6",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-6 Image", 'cosonix'),
            "param_name" => "image6",
            "value" => '',
            "description" => __('Attach Tab 6 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-7 Title", 'cosonix'),
            "param_name" => "title7",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-7 Icon", 'cosonix'),
            "param_name" => "icon7",
			"description" => __('Icon name for the tab-7. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-7 Sub-Title", 'cosonix'),
            "param_name" => "sub_title7",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-7 Text", 'cosonix'),
            "param_name" => "text7",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-7 Image", 'cosonix'),
            "param_name" => "image7",
            "value" => '',
            "description" => __('Attach Tab 7 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-8 Title", 'cosonix'),
            "param_name" => "title8",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-8 Icon", 'cosonix'),
            "param_name" => "icon8",
			"description" => __('Icon name for the tab-8. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-8 Sub-Title", 'cosonix'),
            "param_name" => "sub_title8",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-8 Text", 'cosonix'),
            "param_name" => "text8",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-8 Image", 'cosonix'),
            "param_name" => "image8",
            "value" => '',
            "description" => __('Attach Tab 8 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-9 Title", 'cosonix'),
            "param_name" => "title9",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-9 Icon", 'cosonix'),
            "param_name" => "icon9",
			"description" => __('Icon name for the tab-9. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-9 Sub-Title", 'cosonix'),
            "param_name" => "sub_title9",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-9 Text", 'cosonix'),
            "param_name" => "text9",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-9 Image", 'cosonix'),
            "param_name" => "image9",
            "value" => '',
            "description" => __('Attach Tab 9 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-10 Title", 'cosonix'),
            "param_name" => "title10",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Tab-10 Icon", 'cosonix'),
            "param_name" => "icon10",
			"description" => __('Icon name for the tab-10. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-10 Sub-Title", 'cosonix'),
            "param_name" => "sub_title10",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Tab-10 Text", 'cosonix'),
            "param_name" => "text10",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => __("Tab-10 Image", 'cosonix'),
            "param_name" => "image10",
            "value" => '',
            "description" => __('Attach Tab 10 image', 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
      )
   )
);
/********
Accordion
********/
vc_map( array(
      "name" => __("Cosonix- Accordion", 'cosonix'),
      "base" => "ft_accordion",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Displays Awesome Accordion', 'cosonix'),
      "params" => array(
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play titles color", 'cosonix'),
            "param_name" => "ac_title_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play text color", 'cosonix'),
            "param_name" => "ac_text_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play border color", 'cosonix'),
            "param_name" => "ac_border_color",
            "value" => '',
            "description" => ''            
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play icon color", 'cosonix'),
            "param_name" => "ac_icon_color",
            "value" => '#969696',
            "description" => __('Choose plus/minus icon color', 'cosonix'),
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => __("Number of Accordion", 'cosonix'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               __('One', 'cosonix')=>'1',
			   __('Two', 'cosonix')=>'2', 
			   __('Three', 'cosonix')=>'3',
			   __('Four', 'cosonix')=>'4',
			   __('Five', 'cosonix')=>'5', 
			   __('Six', 'cosonix')=>'6',
			   __('Seven', 'cosonix')=>'7',
			   __('Eight', 'cosonix')=>'8', 
			   __('Nine', 'cosonix')=>'9',
			   __('Ten', 'cosonix')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion one title", 'cosonix'),
            "param_name" => "title1",
            "value" => '',
            "description" => __("Type Accordion one title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion one text", 'cosonix'),
            "param_name" => "text1",
            "value" => '',
            "description" => __("Type Accordion one text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion two title", 'cosonix'),
            "param_name" => "title2",
            "value" => '',
            "description" => __("Type Accordion two title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion two text", 'cosonix'),
            "param_name" => "text2",
            "value" => '',
            "description" => __("Type Accordion two text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion three title", 'cosonix'),
            "param_name" => "title3",
            "value" => '',
            "description" => __("Type Accordion three title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion three text", 'cosonix'),
            "param_name" => "text3",
            "value" => '',
            "description" => __("Type Accordion three text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion four title", 'cosonix'),
            "param_name" => "title4",
            "value" => '',
            "description" => __("Type Accordion four title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion four text", 'cosonix'),
            "param_name" => "text4",
            "value" => '',
            "description" => __("Type Accordion four text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion five title", 'cosonix'),
            "param_name" => "title5",
            "value" => '',
            "description" => __("Type Accordion five title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion five text", 'cosonix'),
            "param_name" => "text5",
            "value" => '',
            "description" => __("Type Accordion five text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion six title", 'cosonix'),
            "param_name" => "title6",
            "value" => '',
            "description" => __("Type Accordion six title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion six text", 'cosonix'),
            "param_name" => "text6",
            "value" => '',
            "description" => __("Type Accordion six text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion seven title", 'cosonix'),
            "param_name" => "title7",
            "value" => '',
            "description" => __("Type Accordion seven title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion seven text", 'cosonix'),
            "param_name" => "text7",
            "value" => '',
            "description" => __("Type Accordion seven text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion eight title", 'cosonix'),
            "param_name" => "title8",
            "value" => '',
            "description" => __("Type Accordion eight title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion eight text", 'cosonix'),
            "param_name" => "text8",
            "value" => '',
            "description" => __("Type Accordion eight text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion nine title", 'cosonix'),
            "param_name" => "title9",
            "value" => '',
            "description" => __("Type Accordion nine title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion nine text", 'cosonix'),
            "param_name" => "text9",
            "value" => '',
            "description" => __("Type Accordion nine text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Accordion ten title", 'cosonix'),
            "param_name" => "title10",
            "value" => '',
            "description" => __("Type Accordion ten title", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Accordion ten text", 'cosonix'),
            "param_name" => "text10",
            "value" => '',
            "description" => __("Type Accordion ten text", 'cosonix'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
   )
)
);

/**********
Icon Events
**********/
vc_map( array(
      "name" => __("Cosonix- Icon Events", 'cosonix'),
      "base" => "ft_icon_features",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('FontAwesome Icon Events', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'I am the title, edit me',
            "description" => __('Title text', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Text", 'cosonix'),
            "param_name" => "text",
            "value" => 'I am dummy text, edit me',
            "description" => __('Text under the Title', 'cosonix')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Icon name", 'cosonix'),
            "param_name" => "icon",
            "value" => '',
            "description" => __('Icon list - ', 'cosonix').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>'
         ),
      )
   )
);

/********
Buttons
********/
vc_map( array(
      "name" => __("Cosonix- Buttons", 'cosonix'),
      "base" => "custom_button",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Custom Buttons', 'cosonix'),
      "params" => array(
         array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => __("Button Type", 'cosonix'),
            "param_name" => "type",
            'admin_label' => true,
            "value" => array(
               __('Submit type button', 'cosonix')=>'submit',
			   __('Button with icon', 'cosonix')=>'button-icon', 
			   __('Button without icon', 'cosonix')=>'button-without-icon',
			   __('Paypal button', 'cosonix')=>'button-with-paypal',
            ),
            "description" => __("Select Button type.", 'cosonix')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button URL", 'cosonix'),
            "param_name" => "url",
            "value" => '',
            "description" => __("Insert button URL", 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => array('button-icon',
								'button-without-icon'
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button Icon", 'cosonix'),
            "param_name" => "icon",
            "value" => '',
            "description" => __('Input icon name. Icon list - ').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.__('refer here', 'cosonix').'</a>',
			'dependency' => array(
               'element'=>'type',
               'value' => array('button-icon',
								'submit'
						)
            )
         ),
		 array(
            "type" => "colorpicker",            
            "class" => "",
            "heading" => __("Play button color", 'cosonix'),
            "param_name" => "bg_color",
            "value" => '#ecae1a',
            "description" => ''            
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button Width", 'cosonix'),
            "param_name" => "maxwidth",
            "value" => '',
            "description" => __("Set button width in pixel", 'cosonix')        
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Button Text", 'cosonix'),
            "param_name" => "button_text",
            "value" => 'I am button',
            "description" => __('Button Text', 'cosonix')
         ),
         array(
		   "type" => "checkbox",
		   "class" => "",
		   "heading" => __("Target",'cosonix'),
		   "param_name" => "target",
		   "value" => array(
						"" => "false"
				   ),
			"description" => __('Open link in new tab?', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => array('button-icon',
								'button-without-icon'
						)
            )
		),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Item Name", 'cosonix'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => __('Item name for which the payment will be made.', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => 'button-with-paypal'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("PayPal Business ID", 'cosonix'),
            "param_name" => "email",
            "value" => '',
            "description" => __('Your Paypal business email id.', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => 'button-with-paypal'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Currency", 'cosonix'),
            "param_name" => "currency",
            "value" => 'USD',
            "description" => __('Currency.', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => 'button-with-paypal'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Payment Amount", 'cosonix'),
            "param_name" => "amount",
            "value" => '',
            "description" => __('Payment amount.', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => 'button-with-paypal'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Return URL", 'cosonix'),
            "param_name" => "return_url",
            "value" => '',
            "description" => __('Your Thank You page URL.', 'cosonix'),
			'dependency' => array(
               'element'=>'type',
               'value' => 'button-with-paypal'
            )
         ),
		
   )
)
);

/***********
Contact Form
***********/
vc_map( array(
      "name" => __("Cosonix Contact Form", 'cosonix'),
      "base" => "ft_contact",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => __('by Fluent-Themes Shortcodes', 'cosonix'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => __('Custom Contact Form. Messages will be sent to the admin email.', 'cosonix'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => __("Form Title", 'cosonix'),
            "param_name" => "title",
            "value" => 'Contact Us',
            "description" => __('Form Title', 'cosonix')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => __("Form Text", 'cosonix'),
            "param_name" => "sub_title",
            "value" => '',
            "description" => __('Form Text below the Title', 'cosonix')
         ),
   )
)
);
}
?>