<?php
/*
Plugin Name: The Cosonix Shortcodes
Plugin URI: http://themeforest.net
Description: Add Cosonix theme's shortcodes
Version: 2.0.2
Author: Fluent-Themes
Author URI: http://themeforest.net/user/fluent-themes
*/

/*-----------------------------------------------------------------------------------*/
/* Creating Shortcodes in order to use in the Visual Composer Page builder plugin */
/*-----------------------------------------------------------------------------------*/
/******
Buttons
******/
function fthemes_buttons_shortcode( $atts, $content = null ) {
	$a = shortcode_atts(array(
	'type' => 'button-icon',
	'url'  => '',
	'icon' => 'check',
	'bg_color' => '#ecae1a',
	'maxwidth' => '',
	'button_text' => '',
	'target' => '',
	'plane_name'      => '',
	'email' => '',
	'currency' => '',
	'amount' => '',
	'return_url' => '',
	), $atts );
	
	$a['target'] = ($a['target']) ? ' target="_blank"' : '';

	switch($a['type']) {
        case 'submit':
		$buttons = '<button class="btn-common" style="background-color: '.esc_attr( $a['bg_color'] ).'; border: 3px solid '.esc_attr( $a['bg_color'] ).'; max-width: '.esc_attr( $a['maxwidth'] ).';" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-'.esc_attr( $a['icon'] ).'" style="color: '.esc_attr( $a['bg_color'] ).';"></i></span></span>'.esc_attr( $a['button_text'] ).'</button>';
		break;
		case 'button-icon':
		$buttons ='<a class="btn-common" style="background-color: '.esc_attr( $a['bg_color'] ).'; border: 3px solid '.esc_attr( $a['bg_color'] ).'; max-width: '.esc_attr( $a['maxwidth'] ).';" href="'.esc_attr( $a['url'] ).'" '.esc_attr( $a['target'] ).'><span class="wrap-icon"><span class="inner-icon"><i style="color: '.esc_attr( $a['bg_color'] ).';" class="fa fa-'.esc_attr( $a['icon'] ).'"></i></span></span>'.esc_attr( $a['button_text'] ).'</a>';
		break;
		case 'button-without-icon':
		$buttons ='<a href="'.esc_attr( $a['url'] ).'" '.esc_attr( $a['target'] ).' class="btn-sign-up" style="background-color: '.esc_attr( $a['bg_color'] ).'; max-width: '.esc_attr( $a['maxwidth'] ).'; border: 0 none;">'.esc_attr( $a['button_text'] ).'</a>';
		break;
		case 'button-with-paypal':
		$buttons ='<form method="post" action="https://www.paypal.com/cgi-bin/webscr">
						<input type="hidden" value="_xclick" name="cmd">
						<input type="hidden" value="'.esc_attr( $a['email'] ).'" name="business">
						<input type="hidden" value="'.esc_attr( $a['plane_name'] ).'" name="item_name">
						<input type="hidden" value="'.esc_attr( $a['currency'] ).'" name="currency_code">
						<input type="hidden" value="'.esc_attr( $a['amount'] ).'" name="amount">
						<input type="hidden" value="'.esc_url( $a['return_url'] ).'" name="return">
						<input class="btn-sign-up" type="image" border="0" style="background-color: '.esc_attr( $a['bg_color'] ).'; max-width: '.esc_attr( $a['maxwidth'] ).'; border: 0 none;" alt="'.esc_attr( $a['button_text'] ).'" name="submit">
					</form>';
		break;
        default: 
            $buttons ='<a class="btn-common" href="'.esc_attr( $a['url'] ).'" '.esc_attr( $a['target'] ).'><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-'.esc_attr( $a['icon'] ).'"></i></span></span>'.esc_attr( $a['button_text'] ).'</a>';
        }
		
	
	$output = $buttons;
	
	return $output;
}

add_shortcode('custom_button', 'fthemes_buttons_shortcode');

/**********
Icon Events
**********/
function fthemes_fawesome_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'title' => '',
	'text' => ''
	), $atts ) );
				
	$output = '<div class="row icons-block">
						<div class="col-xs-3">
							<span class="wrap-icon first"><i class="fa fa-'.esc_attr( $icon ).'"></i></span>
						</div>
						<div class="col-xs-9">
							<h3>'.esc_attr( $title ).'</h3>
							<p>'.$text.'</p>
						</div>
                </div>';
	
	return $output;
}

add_shortcode('ft_icon_features', 'fthemes_fawesome_shortcode');

/*************
Home Block - 1
*************/
function fthemes_homeblock_shortcode( $atts ) {
	$output = $image = '';
	extract( shortcode_atts( array(
	'title' => '',
	'title_color' => '',
	'text' => '',
	'text_color' => '',
	'button_text' => '',
	'image' => $image,
	'height' => ''
	), $atts ) );
	
	$img_id = preg_replace( '/[^\d]/', '', $image );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'full', 'class' => 'img-responsive home_img' ) );
			} else {
			$img = '';
			}
	
	//if ( $img == NULL ) $img['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/newsletter-img.png" class="img-responsive home_img" />';

	$output = '<div class="sign-up-block"'; if ( $height != '' ) { $output .= ' style="max-height:'.esc_attr( $height ).';"'; } $output .='>
        <div class="row col-md-7 sign-up-text">
                <h2 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $title ).'</h2>
                <p style="color:'.esc_attr( $text_color ).';">'.$text.'</p>'; 
	if((fthemes_get_option('mailchimp_apikey') != '') && (fthemes_get_option('ft_aweber_listid') == '')) {
	$output .='<form id="home_signup" class="frm-common" action="'.esc_url( get_template_directory_uri() ).'/subscribe.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" name="ffname" id="hfname" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" name="femail" id="hfemail" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>'; 
	} elseif((fthemes_get_option('ft_aweber_listid') != '') && (fthemes_get_option('mailchimp_apikey') == '')) {
	$output .='<form class="frm-common" method="post" action="https://www.aweber.com/scripts/addlead.pl">
					<div class="row">
						<input type="hidden" name="listname" value="'.fthemes_get_option('ft_aweber_listid').'" />
						<input type="hidden" name="redirect" value="'.esc_url( fthemes_get_option('aweber_redirectpage') ).'" />
						<input type="hidden" name="meta_redirect_onlist" value="'.esc_url( fthemes_get_option('aweber_redirectpage_old') ).'" />
						<input type="hidden" name="meta_message" value="1" /> 
						<input type="hidden" name="meta_required" value="name,email" />
						<div class="col-md-6">
							<input required placeholder="'.__('Your Name', 'cosonix').'" type="text" name="name" class="form-control" value="" />
						</div>
						<div class="col-md-6"> 
							<input required placeholder="'.__('Your Email Address', 'cosonix').'" type="text" name="email" class="form-control" value="" />
						</div>
						<div class="col-xs-12">
                            <button class="btn-common" name="submit" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                        </div> 
					</div>
				</form>';
	} else {
	$output .='<form class="frm-common">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>';
	}
	$output .='<div id="home_response" class="result"></div>
        </div>
            
        <div class="col-md-5 hidden-xs hidden-sm">';
		if ( $img != '' ) {
    $output .=  ''.$img['thumbnail'].'';
		}
    $output .='</div>
		</div>';
	
	return $output;
}
add_shortcode('home_block', 'fthemes_homeblock_shortcode');

/*************
Home Block - 2
*************/
function fthemes_homeblocktwo_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'title' => '',
	'title_color' => '',
	'text' => '',
	'text_color' => '',
	'button_text' => '',
	'height' => ''
	), $atts ) );

	$output = '<div class="sign-up-block home-block-two"'; if ( $height != '' ) { $output .= ' style="max-height:'.esc_attr( $height ).';"'; } $output .='>
        <div class="row col-sm-6 sign-up-text">
                <h2 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $title ).'</h2>
                <p style="color:'.esc_attr( $text_color ).';">'.$text.'</p>';
	if((fthemes_get_option('mailchimp_apikey') != '') && (fthemes_get_option('ft_aweber_listid') == '')) {
	$output .='<form id="home_signup" class="frm-common" action="'.esc_url( get_template_directory_uri() ).'/subscribe.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" name="ffname" id="hfname" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" name="femail" id="hfemail" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>'; 
	} elseif((fthemes_get_option('ft_aweber_listid') != '') && (fthemes_get_option('mailchimp_apikey') == '')) {
	$output .='<form class="frm-common" method="post" action="https://www.aweber.com/scripts/addlead.pl">
					<div class="row">
						<input type="hidden" name="listname" value="'.fthemes_get_option('ft_aweber_listid').'" />
						<input type="hidden" name="redirect" value="'.esc_url( fthemes_get_option('aweber_redirectpage') ).'" />
						<input type="hidden" name="meta_redirect_onlist" value="'.esc_url( fthemes_get_option('aweber_redirectpage_old') ).'" />
						<input type="hidden" name="meta_message" value="1" /> 
						<input type="hidden" name="meta_required" value="name,email" />
						<div class="col-md-6">
							<input required placeholder="'.__('Your Name', 'cosonix').'" type="text" name="name" class="form-control" value="" />
						</div>
						<div class="col-md-6"> 
							<input required placeholder="'.__('Your Email Address', 'cosonix').'" type="text" name="email" class="form-control" value="" />
						</div>
						<div class="col-xs-12">
                            <button class="btn-common" name="submit" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                        </div> 
					</div>
				</form>';
	} else {
	$output .='<form class="frm-common">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>';
	}
	$output .='<div id="home_response" class="result"></div>
        </div>
            
        <div class="col-sm-6 hidden-xs"></div>
		</div>';
	
	return $output;
}
add_shortcode('home_block_two', 'fthemes_homeblocktwo_shortcode');

/******************
Features with Icons
******************/
function fthemes_features_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'title' => '',
	'text' => '',
	'readmore'  => 'More >',
	'read_more'  => ''
	), $atts ) );

	$output = '<div class="wrap-block-f-col text-center">
                    <span class="wrap-icon"><span class="inner-icon"><i class="fa fa-'.esc_attr( $icon ).'"></i></span></span>
                    <h3>'.esc_attr( $title ).'</h3>
                    <p>'.$text.'</p>';
					if($read_more != '') {
    $output .=      '<a href="'.esc_url( $read_more ).'" class="read-more">'.esc_attr( $readmore ).'</a>';
					}
    $output .=  '</div>';
	
	return $output;
}
add_shortcode('iconic_features', 'fthemes_features_shortcode');

/***************
NewsLetter Block
***************/
function fthemes_newsletter_shortcode( $atts ) {
	$output = $image_one = $image_two = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'price' => '',
	'currency' => '',
	'title' => '',
	'text' => '',
	'button_text' => ''	
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive img-block' ) );
				} else {
				$img_one = '';
				}
	if ( $img_one == NULL ) $img_one['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/newsletter-img.png" class="img-responsive img-block" />';
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_two = '';
				}
	//if ( $img_two == NULL ) $img_two['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/book.jpg" class="img-responsive" />';

	$output = '<div class="row">
            <div class="col-lg-6 img-block hidden-xs visible-lg feature" style="padding-top:35px">'.$img_one['thumbnail'].'</div>
            <div class="col-xs-12 col-lg-6">';
			if ( $img_two != '' ) {
    $output .='            <div class="book-block feature">
                    '.$img_two['thumbnail'].'';
				if ( $price != '' ) {	
    $output .='                <label><span class="currency">'.esc_attr( $currency ).'</span>'.esc_attr( $price ).'</label>';
				}
    $output .='            </div>';
				}
			if ( $img_two == '' ) {
	$output .='<div class="newsletter-block-text" style="margin-top:100px;">';
			} else {
	$output .='<div class="newsletter-block-text" style="margin-top:30px;">';		
			}
    $output .='                    <h2>'.esc_attr( $title ).'</h2>
                    <p>'.$text.'</p>';
	if((fthemes_get_option('mailchimp_apikey') != '') && (fthemes_get_option('ft_aweber_listid') == '')) {
	$output .='<form id="signup" class="frm-common" action="'.esc_url( get_template_directory_uri() ).'/subscribe.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" name="ffname" id="fname" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" name="femail" id="email" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>'; 
	} elseif((fthemes_get_option('ft_aweber_listid') != '') && (fthemes_get_option('mailchimp_apikey') == '')) {
	$output .='<form class="frm-common" method="post" action="https://www.aweber.com/scripts/addlead.pl">
					<div class="row">
						<input type="hidden" name="listname" value="'.fthemes_get_option('ft_aweber_listid').'" />
						<input type="hidden" name="redirect" value="'.esc_url( fthemes_get_option('aweber_redirectpage') ).'" />
						<input type="hidden" name="meta_redirect_onlist" value="'.esc_url( fthemes_get_option('aweber_redirectpage_old') ).'" />
						<input type="hidden" name="meta_message" value="1" /> 
						<input type="hidden" name="meta_required" value="name,email" />
						<div class="col-md-6">
							<input required placeholder="'.__('Your Name', 'cosonix').'" type="text" name="name" class="form-control" value="" />
						</div>
						<div class="col-md-6"> 
							<input required placeholder="'.__('Your Email Address', 'cosonix').'" type="text" name="email" class="form-control" value="" />
						</div>
						<div class="col-xs-12">
                            <button class="btn-common" name="submit" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                        </div> 
					</div>
				</form>';
	} else {
	$output .='<form class="frm-common">
                <div class="row">
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Name', 'cosonix').'" type="text" class="form-control"/>
                    </div>
                    <div class="col-md-6">
                        <input required placeholder="'.__('Your Email Address', 'cosonix').'" type="email" class="form-control"/>
                    </div>
                    <div class="col-xs-12">
                        <button class="btn-common" type="submit"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span>'.esc_attr( $button_text ).'</button>
                    </div>
                </div>
			</form>';
	}
	$output .='<div id="response" class="result"></div>
                </div>
            </div>
        </div>';
	
	return $output;
}
add_shortcode('ft_newsletter', 'fthemes_newsletter_shortcode');

/************
Pricing Table
************/
function fthemes_pricing_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'plane_name'      => '',
	'price'      => '',
	'button_text'      => '',
    'button_url'      => '',
    'features' => '',
	'paypal' => '',
	'email' => '',
	'currency' => '',
	'amount' => '',
	'return_url' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<ul class="feature-list">';
      $features = !empty($features) ? explode("\n", trim($features)) : array(); 
      foreach($features as $feature) {
        $output .= '<li><span class="wrap-icon"><i class="fa fa-check"></i></span>'.htmlspecialchars_decode($feature).'</li>';
      }
      $output .= '</ul>';
      $content = $output;
    }

	$out = '<div class="in-service">
                    <h3>'.esc_attr( $plane_name ).' <span class="price">'.esc_attr( $price ).'</span></h3>
                    '.do_shortcode($content).'
					<div class="feature-list" style="margin-top:-30px;">';
				if ( $paypal != true ) {	
	$out .= '<a href="'.esc_url( $button_url ).'" class="btn-sign-up">'.esc_attr( $button_text ).'</a>';				
				} else {	
	$out .= '		<form method="post" action="https://www.paypal.com/cgi-bin/webscr">
						<input type="hidden" value="_xclick" name="cmd">
						<input type="hidden" value="'.esc_attr( $email ).'" name="business">
						<input type="hidden" value="'.esc_attr( $plane_name ).'" name="item_name">
						<input type="hidden" value="'.esc_attr( $currency ).'" name="currency_code">
						<input type="hidden" value="'.esc_attr( $amount ).'" name="amount">
						<input type="hidden" value="'.esc_url( $return_url ).'" name="return">
						<input class="btn-sign-up" type="submit" value="'.esc_attr( $button_text ).'" name="submit">
					</form>';
					}
	$out .='		</div>
            </div>';
    return $out;
}
add_shortcode('ft_pricing', 'fthemes_pricing_shortcode');

/**********
Testimonial
**********/
function fthemes_testimonial_shortcode( $atts ) {
	$output = $client_image = '';
	extract( shortcode_atts( array(
	'client_image' => $client_image,
	'text' => '',
	'quote' => '',
	'client_name' => '',
	'client_designation'  => '',
	'bg_color' => ''
	), $atts ) );
	
	$img_id = preg_replace( '/[^\d]/', '', $client_image );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'thumbnail', 'class' => '' ) );
			} else {
			$img = '';
			}
	if ( $img == NULL ) $img['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/client-avatar.png" />';

	$output = '<div class="in-testimonial text-center" style="background-color:'.esc_attr( $bg_color ).'; border-color:'.esc_attr( $bg_color ).';">
                    <p><span class="wrap-icon">' . $img['thumbnail'] . '</span></p>';
					if( $quote == true ) {
    $output .=      '<q>'.$text.'</q>';
					} else {
	$output .=      '<p class="no_quote">'.$text.'</p>';
					}
    $output .=      '<p class="user">'.esc_attr( $client_name ).'<br /><span class="position">'.esc_attr( $client_designation ).'</span></p>
                </div>';
	
	return $output;
}
add_shortcode('ft_testimonial', 'fthemes_testimonial_shortcode');

/***************
Quick Peak Block
***************/
function fthemes_quickpeak_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'title' => '',
	'text' => '',
	'sub_title_one'  => '',
	'sub_text_one'  => '',
	'sub_text_icon_one'  => '',
	'sub_title_two'  => '',
	'sub_text_two'  => '',
	'sub_text_icon_two'  => '',
	'sub_title_three'  => '',
	'sub_text_three'  => '',
	'sub_text_icon_three'  => '',
	'bg_color' => '',
	'title_color' => '',
	'text_color' => '',
	'icon_color' => '',
	'button_text' => '',
	'button_url' => ''
	), $atts ) );

	$output = '<div class="book-introduce-block purchase-block" style="background-color:'.esc_attr( $bg_color ).';">
                    <h2 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $title ).'</h2>
                    <p style="color:'.esc_attr( $text_color ).';">'.$text.'</p>';
					if($sub_title_one != '') {
    $output .=      '<ul class="purchase-list">
                        <li>
                            <span class="wrap-icon" style="border-color:'.esc_attr( $icon_color ).'; color:'.esc_attr( $icon_color ).';"><i class="fa fa-'.esc_attr( $sub_text_icon_one ).'"></i></span>
                            <h3 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $sub_title_one ).'</h3>
                            <p style="color:'.esc_attr( $text_color ).';">'.$sub_text_one.'</p>
                        </li>';
						if($sub_title_two != '') {
    $output .=	        '<li>
                            <span class="wrap-icon" style="border-color:'.esc_attr( $icon_color ).'; color:'.esc_attr( $icon_color ).';"><i class="fa fa-'.esc_attr( $sub_text_icon_two ).'"></i></span>
                            <h3 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $sub_title_two ).'</h3>
                            <p style="color:'.esc_attr( $text_color ).';">'.$sub_text_two.'</p>
                        </li>';
						} if($sub_title_three != '') {
	$output .=			'<li>
                            <span class="wrap-icon" style="border-color:'.esc_attr( $icon_color ).'; color:'.esc_attr( $icon_color ).';"><i class="fa fa-'.esc_attr( $sub_text_icon_three ).'"></i></span>
                            <h3 style="color:'.esc_attr( $title_color ).';">'.esc_attr( $sub_title_three ).'</h3>
                            <p style="color:'.esc_attr( $text_color ).';">'.$sub_text_three.'</p>
                        </li>';
						}
    $output .=      '</ul>';
					} if($button_text != '') {
    $output .=      '<a class="btn-common" href="'.esc_url( $button_url ).'"><span class="wrap-icon"><span class="inner-icon"><i class="fa fa-check"></i></span></span><span class="price">'.esc_attr( $button_text ).'</span></a>';
					}
    $output .=  '</div>';
	
	return $output;
}
add_shortcode('quickpeak', 'fthemes_quickpeak_shortcode');

/********
Accordion
********/
function fthemes_accordion_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
		'ac_title_color' => '',
		'ac_text_color' => '',
		'ac_border_color' => '',
		'ac_icon_color' => '#969696',
        'number_of_tabs' => '',
    ),$atts);

	$output ='<div class="introduction-block left" style="border-color:'.$a['ac_border_color'].';">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$text =$b['text'.$c.''];

	$output .='<div class="panel" style="border-bottom-color:'.$a['ac_border_color'].';">
					<div class="panel-heading" role="tab" id="heading'.$c.'">
						<h4 class="panel-title">
							<a '; if ($c==1){$output .='class=""';} else {$output .='class="collapsed"';} $output .=' role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse'.$c.'"'; if ($c==1){$output .=' aria-expanded="true"';} else {$output .=' aria-expanded="false"';} $output .=' aria-controls="collapse'.$c.'" style="color:'.$a['ac_title_color'].';">
								'.esc_attr( $title ).' <span class="indicator" style="color:'.$a['ac_icon_color'].';"></span>
							</a>
						</h4>
					</div>
					<div id="collapse'.$c.'" class="panel-collapse collapse'; if ($c==1){$output .=' in';} $output .='" role="tabpanel" aria-labelledby="heading'.$c.'">
						<div class="panel-body">
							<p style="color:'.$a['ac_text_color'].';">'.$text.'</p>
						</div>
					</div>
			   </div>';
$i++;
}
	$output .='	</div>
		   </div>';
	
	return $output;
}
add_shortcode('ft_accordion','fthemes_accordion_shortcode');

/*********
Author Bio
*********/
function fthemes_author_shortcode( $atts ) {
	$output = $author_image = $author_sign = '';
	extract( shortcode_atts( array(
	'author_image' => $author_image,
	'author_name' => '',
	'author_name_color' => '',
	'about_author'  => '',
	'text_color'  => '',
	'border_color' => '',
	'author_sign' => $author_sign,
	'fb' => '',
	'tw' => '',
	'gp' => '',
	'pn' => '',
	'in' => '',
	'utube' => '',
	'icon_bg_color' => ''
	), $atts ) );
	
	$img_id = preg_replace( '/[^\d]/', '', $author_image );
	$sign_id = preg_replace( '/[^\d]/', '', $author_sign );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'thumbnail', 'class' => '' ) );
			} else {
			$img = '';
			}
	if ( $img == NULL ) $img['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/author-avatar.png" />';
	
			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$sign = wpb_getImageBySize( array( 'attach_id' => $sign_id, 'thumb_size' => 'full', 'class' => 'signature' ) );
			} else {
			$sign = '';
			}
	//if ( $sign == NULL ) $sign['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/signature.png" class="signature" />';

	$output = '<div class="introduction-block right ninety" style="border-color:'.esc_attr( $border_color ).'">
                        <span class="wrap-icon hidden-xs visible-lg" style="background-color:'.esc_attr( $border_color ).'; border-color:'.esc_attr( $border_color ).'"><span class="inner-icon">'.$img['thumbnail'].'</span></span>
                        <div class="introduction-title">
                            <span class="text" style="color:'.esc_attr( $author_name_color ).';">'.esc_attr( $author_name ).'</span>
                            <ul class="social-list">';
                                if ($fb != ''){$output .='<li><a href="'.esc_url( $fb ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-facebook"></i></span></a></li>';}
                                if ($tw != ''){$output .='<li><a href="'.esc_url( $tw ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-twitter"></i></span></a></li>';}
                                if ($gp != ''){$output .='<li><a href="'.esc_url( $gp ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-google-plus"></i></span></a></li>';}
                                if ($pn != ''){$output .='<li><a href="'.esc_url( $pn ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-pinterest"></i></span></a></li>';}
                                if ($in != ''){$output .='<li><a href="'.esc_url( $in ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-instagram"></i></span></a></li>';}
                                if ($utube != ''){$output .='<li><a href="'.esc_url( $utube ).'"><span class="wrap-icon" style="background-color:'.esc_attr( $icon_bg_color ).'"><i class="fa fa-youtube"></i></span></a></li>';}
    $output .=              '</ul>
                        </div>
                        <p style="color:'.esc_attr( $text_color ).';">'.$about_author.'</p>';
						if ( $sign != '' ) {
    $output .=          ''.$sign['thumbnail'].'';
						}
    $output .= '</div>';
	
	return $output;
}
add_shortcode('ft_author', 'fthemes_author_shortcode');

/*******
Chapters
*******/
function fthemes_chapters_shortcode($atts, $content = null) {

   $output = $chapter_one_img = $chapter_two_img = $chapter_three_img = $chapter_four_img = '';
	extract( shortcode_atts( array(
	'chapter_one_img' => $chapter_one_img,
	'chapter_two_img' => $chapter_two_img,
	'chapter_three_img' => $chapter_three_img,
	'chapter_four_img' => $chapter_four_img,
	'chapter_one_main_title' => '',
	'chapter_two_main_title' => '',
	'chapter_three_main_title' => '',
	'chapter_four_main_title' => '',
	'chapter_one_title' => '',
	'chapter_two_title' => '',
	'chapter_three_title' => '',
	'chapter_four_title' => '',
	'chapter_one_description' => '',
	'chapter_two_description' => '',
	'chapter_three_description' => '',
	'chapter_four_description' => '',
	), $atts ) );
	
	$chapter_one_img_id = preg_replace( '/[^\d]/', '', $chapter_one_img );
	$chapter_two_img_id = preg_replace( '/[^\d]/', '', $chapter_two_img );
	$chapter_three_img_id = preg_replace( '/[^\d]/', '', $chapter_three_img );
	$chapter_four_img_id = preg_replace( '/[^\d]/', '', $chapter_four_img );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img_one = wpb_getImageBySize( array( 'attach_id' => $chapter_one_img_id, 'thumb_size' => 'full', 'class' => '' ) );
			} else {
			$img_one = '';
			}
	if ( $img_one == NULL ) $img_one['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/chapters/chapter-1.jpg" />';
	
			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img_two = wpb_getImageBySize( array( 'attach_id' => $chapter_two_img_id, 'thumb_size' => 'full', 'class' => '' ) );
			} else {
			$img_two = '';
			}
	if ( $img_two == NULL ) $img_two['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/chapters/chapter-2.jpg" />';
	
			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img_three = wpb_getImageBySize( array( 'attach_id' => $chapter_three_img_id, 'thumb_size' => 'full', 'class' => '' ) );
			} else {
			$img_three = '';
			}
	if ( $img_three == NULL ) $img_three['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/chapters/chapter-3.jpg" />';
	
			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img_four = wpb_getImageBySize( array( 'attach_id' => $chapter_four_img_id, 'thumb_size' => 'full', 'class' => '' ) );
			} else {
			$img_four = '';
			}
	if ( $img_four == NULL ) $img_four['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/chapters/chapter-4.jpg" />';

	$output ='<!-- START TABION -->
                    <ul class="tabion">

                        <!-- Start Tab 1 -->
                        <li class="active">

                            <!-- Start Tab Tile -->
                            <label for="tab11" class="tabtile">
                                '.$img_one['thumbnail'].'
                                <span class="light-text">'.esc_attr( $chapter_one_main_title ).'</span>
                            </label>

                            <input type="radio" name="tabion" id="tab11" checked>
                            <!-- End Tab Tile -->

                            <!-- Start Tab Content -->
                            <div class="tabion-content animated tab-rotateInUpLeft pos-left-1">
                                <p class="title">'.esc_attr( $chapter_one_main_title ).'</p>
								<p class="description">'.esc_attr( $chapter_one_title ).'</p>
                                <p>'.$chapter_one_description.'</p>
                            </div>
                            <!-- End Tab Content -->
                        </li>
                        <!-- End Tab 1 -->


                        <!-- Start Tab 2 -->
                        <li>
                            <!-- Start Tab Button -->
                            <label for="tab12" class="tabtile pos-top-2">
                                '.$img_two['thumbnail'].'
                                <span class="light-text">'.esc_attr( $chapter_two_main_title ).'</span>
                            </label>

                            <input type="radio" name="tabion" id="tab12">
                            <!-- End Tab Button -->

                            <!-- Start Tab Content -->
                            <div class="tabion-content animated tab-bounceIn pos-left-2">
                                <p class="title">'.esc_attr( $chapter_two_main_title ).'</p>
								<p class="description">'.esc_attr( $chapter_two_title ).'</p>
                                <p>'.$chapter_two_description.'</p>
                            </div>
                            <!-- End Tab Content -->
                        </li>
                        <!-- End Tab 2 -->

                        <!-- Start Tab 3 -->
                        <li>
                            <!-- Start Tab Button -->
                            <label for="tab13" class="tabtile pos-top-3">
                                '.$img_three['thumbnail'].'
                                <span class="light-text">'.esc_attr( $chapter_three_main_title ).'</span>
                            </label>

                            <input type="radio" name="tabion" id="tab13">
                            <!-- End Tab Button -->

                            <!-- Start Tab Content -->
                            <div class="tabion-content animated tab-flipInY pos-left-3">
                                <p class="title">'.esc_attr( $chapter_three_main_title ).'</p>
								<p class="description">'.esc_attr( $chapter_three_title ).'</p>
								<p>'.$chapter_three_description.'</p>
							</div>
                            <!-- End Tab Content -->
                        </li>
                        <!-- End Tab 3 -->


                        <!-- Start Tab 4 -->
                        <li>
                            <!-- Start Tab Button -->
                            <label for="tab14" class="tabtile pos-top-4">
                                '.$img_four['thumbnail'].'
                                <span class="light-text">'.esc_attr( $chapter_four_main_title ).'</span>
                            </label>

                            <input type="radio" name="tabion" id="tab14">
                            <!-- End Tab Button -->

                            <!-- Start Tab Content -->
                            <div class="tabion-content animated tab-lightSpeedIn pos-left-4">
                                <p class="title">'.esc_attr( $chapter_four_main_title ).'</p>
								<p class="description">'.esc_attr( $chapter_four_title ).'</p>
								<p>'.$chapter_four_description.'</p>
							</div>
                            <!-- End Tab Content -->
                        </li>
                        <!-- End Tab 4 -->

                    </ul>
                    <!-- END TABION -->
                    <!--chapter mobile-->
                    <div class="m-chapter">
                        <div class="in-m-chapter">
                            <div class="top">
                                '.$img_one['thumbnail'].'
                                <p class="title">'.esc_attr( $chapter_one_main_title ).'</p>
                            </div>
                            <p class="description">'.esc_attr( $chapter_one_title ).'</p>
                            <p>'.$chapter_one_description.'</p>
                        </div>
                    </div>
                    <div class="m-chapter">
                        <div class="in-m-chapter">
                            <div class="top">
                                '.$img_two['thumbnail'].'
                                <p class="title">'.esc_attr( $chapter_two_main_title ).'</p>
                            </div>
                            <p class="description">'.esc_attr( $chapter_two_title ).'</p>
                            <p>'.$chapter_two_description.'</p>
                        </div>
                    </div>
                    <div class="m-chapter">
                        <div class="in-m-chapter">
                            <div class="top">
                                '.$img_three['thumbnail'].'
                                <p class="title">'.esc_attr( $chapter_three_main_title ).'</p>
                            </div>
                            <p class="description">'.esc_attr( $chapter_three_title ).'</p>
                            <p>'.$chapter_three_description.'</p>
                        </div>
                    </div>
                    <div class="m-chapter">
                        <div class="in-m-chapter">
                            <div class="top">
                                '.$img_four['thumbnail'].'
                                <p class="title">'.esc_attr( $chapter_four_main_title ).'</p>
                            </div>
                            <p class="description">'.esc_attr( $chapter_four_title ).'</p>
                            <p>'.$chapter_four_description.'</p>
                        </div>
                    </div>
                    <!--end chapter mobile-->
						';
	
	return $output;
}
add_shortcode('ft_chapters','fthemes_chapters_shortcode');

/************
Vertical Tabs
************/
function fthemes_vtab_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="wrap-tabs">';
	$output .='<div class="col-md-4">
                <ul class="nav nav-tabs" role="tablist">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
        'icon'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$icon =$b['icon'.$c.''];
			$output .='<li role="presentation"'; if ($c==2){$output .=' class="active"';} $output .='><a href="#'.$c.'" aria-controls="'.$c.'" role="tab" data-toggle="tab"><span class="wrap-icon"><i class="fa fa-'.esc_attr( $icon ).'"></i></span><span>'.esc_attr( $title ).'</span></a></li>';			
	$i++;
	}
	$output .='	</ul>
              </div>';
			  
	$output .='<div class="col-md-8 wrap-content tab-content">';

	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
		'sub_title'.$c.'' => '',
		'image'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$sub_title =$b['sub_title'.$c.''];
	$image =$b['image'.$c.''];
	$text =$b['text'.$c.''];
	
	$img_id = preg_replace( '/[^\d]/', '', $image );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'full', 'class' => 'half-width' ) );
			} else {
			$img = '';
			}
	if ( $img == NULL ) $img['thumbnail'] = '<img src="'.esc_url( get_template_directory_uri() ).'/images/articles/macbook.png" class="half-width" />';

	$output .='<div role="tabpanel" class="tab-pane'; if ($c==2){$output .=' active';} $output .='" id="'.$c.'">
                                    <div class="wrapper">
                                        <div class="half-width">
                                            <h3>'.esc_attr( $title ).'</h3>
                                            <h4>'.$sub_title.'</h4>
                                        </div>
                                        '.$img['thumbnail'].'
                                    </div>
                                    <p>'.$text.'</p>
                                </div>';
$i++;
}
	$output .='</div>';
	$output .='	</div>';
	
	return $output;
}
add_shortcode('ft_vtab','fthemes_vtab_shortcode');

/***********
Contact form
***********/
function fthemes_contact_shortcode($atts, $content = null) {

	$a = shortcode_atts(array(
        'title' => 'Contact Us',
		'sub_title' => ''
    ),$atts);

    $output = '<div class="row contact-us">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h2 class="center-title-b">'.esc_attr( $a['title'] ).'</h2>
                <p>'.$a['sub_title'].'</p>				
                <form action="'.esc_url( get_template_directory_uri() ).'/contact.php" method="get" id="contact-form" class="contact-us-frm">
                    <div class="row">
                        <div class="col-md-6"><input name="contact-name" id="contact-name" placeholder="'.__('*Your Name...', 'cosonix').'" type="text" class="required-field form-control"/></div>
                        <div class="col-md-6"><input name="contact-email" id="contact-email" placeholder="'.__('*Your Email Address...', 'cosonix').'" type="email" class="required-field form-control"/></div>
                    </div>
                    <input name="contact-subject" id="contact-subject" placeholder="'.__('Subject...', 'cosonix').'" type="text" class="form-control"/>
                    <textarea name="contact-msg" id="contact-msg" placeholder="'.__('*Your Message Here...', 'cosonix').'" cols="30" rows="10" class="required-field form-control"></textarea>
                    <input type="hidden" name="contact-submit" id="contact-submit" value="true" />
					<span class="spinner">'.__('Sending...', 'cosonix').'</span>
					<div id="contactsMsgs"></div>
					<button name="submit" id="submit" type="submit" class="btn-common"><span class="wrap-icon"><span
                            class="inner-icon"><i class="fa fa-paper-plane-o"></i></span></span>'.__('Send Message', 'cosonix').'</button>                
				</form>				
            </div>
            <div class="col-sm-3"></div>
        </div>';
	
	return $output;
}
add_shortcode('ft_contact', 'fthemes_contact_shortcode');

/********
Portfolio
********/
function fthemes_portfolio_shortcode($atts) {
	$output = $project_image = '';
	extract( shortcode_atts( array(
	'project_image' => $project_image,
	'project_category' => '',
	'project_category_color' => '',
	'project_title' => '',
	'project_title_color' => '',
	'project_url' => '',
	'target' => '',
	'project_bg_color' => '',
	), $atts ) );
	
	$target = ($target) ? ' target="_blank"' : '';
	$project_image_id = preg_replace( '/[^\d]/', '', $project_image );
	
	if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $project_image_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
			} else {
			$img = '';
			}
	
	$output = '<div class="econtainer">
					<a href="'.esc_url( $project_url ).'" '.esc_attr( $target ).'>';
					if ( $img != '' ) {
    $output .=  ''.$img['thumbnail'].'';
		}
	$output .=	'	<div class="textbox" style="background-color:'.esc_attr( $project_bg_color ).';">';
						if ( $project_category != '' ) {
	$output .= '		<p class="text_cat" style="color:'.esc_attr( $project_category_color ).';">'.esc_attr( $project_category ).'</p>';
						} if ( $project_title != '' ) {
	$output .= '		<p class="text_project" style="color:'.esc_attr( $project_title_color ).';">'.esc_attr( $project_title ).'</p>';
						}
	$output .= '	</div>
					</a>
				</div>';
	
	return $output;
}
add_shortcode('ft_portfolio', 'fthemes_portfolio_shortcode');

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once('vc_shortcodes.php');
}