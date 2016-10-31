<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(' | ', true, 'right'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Favicon -->
	<?php if ( function_exists('wp_site_icon') ) echo wp_site_icon(); ?>
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <link rel="shortcut icon" href="<?php echo fthemes_get_option('cosonix_favicon'); ?>">
	<?php } ?>
    <!-- For iPhone, iPod Touch, and Android devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo fthemes_get_option('cosonix_appletouch'); ?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ).'/js/'; ?>html5shiv.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ).'/js/'; ?>respond.min.js"></script>
    <![endif]-->
		
	<?php
	if ( is_admin_bar_showing() ) { ?>
    <style type="text/css" media="screen">
	#header{top:30px !important}
	</style>
	<?php } ?>
<!--Adding loading gif start-->
<style type="text/css" media="screen">
.no-js #loader { display: none; }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.fthemes-loading {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url("<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>Preloader_41.gif") center no-repeat #fff;
}
</style>
	<?php wp_head(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script language="javascript" type="text/javascript">
     jQuery(window).load(function() {
     jQuery(".fthemes-loading").fadeOut("slow");
  });
</script>
<!--Adding loading gif end-->
</head>

<body <?php body_class(); ?>>
<!--Adding loading gif start-->
<div class="fthemes-loading"></div>
<!--Adding loading gif end-->
<div id="back-to-top"><i class="fa fa-arrow-up"></i></div>
<!--Header block-->
<header id="header" class="has-shadow">
    <div class="container">
        <div class="row">
            <!--logo-->
            <div class="col-sm-3">
				<a class="logo-wrap" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo img-responsive" src="<?php if(fthemes_get_option('logo_url') != '') { ?><?php echo esc_url( fthemes_get_option('logo_url') ); ?><?php } else { ?><?php echo esc_url( get_template_directory_uri() ).'/images/cosonix-logo.png'; ?><?php } ?>" alt="logo" /></a>
                <a class="btn toggle-menu" role="button" data-toggle="collapse" href="#wrap-nav-list" aria-expanded="false" aria-controls="wrap-nav-list">Menu <i class="fa fa-bars"></i></a>
            </div>
            <!--end logo-->

            <!--main navigation-->
            <div class="col-sm-9 dif-toggle-bg">
                <nav class="main-nav" style="visibility: hidden;">
                    <div class="collapse" id="wrap-nav-list">
                        <ul class="nav-list">
                            <?php
								wp_nav_menu(array(
								'theme_location' 	=>'primary_menu', 'container' => '', 'items_wrap' => '%3$s'
								)); 
							?>
                        </ul>
                    </div>
                </nav>
            </div>
            <!--end main navigation-->
        </div>
    </div>
</header>
<!--End header block-->