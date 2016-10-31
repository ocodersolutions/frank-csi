<?php
function fthemes_styles_custom() {
?>

<!-- Custom CSS Codes
========================================================= -->
	
<style id="custom-style">
	/* Global Color ------------------------------------------------------------------------ */
	<?php if(fthemes_get_option('three_colors') == '2') { ?>
	#back-to-top, #header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a,
	.btn-common .wrap-icon i, .wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more, .wrap-block-f-col .wrap-icon .inner-icon,
	.feature-list li .wrap-icon, .icons-block .wrap-icon,
	.wrap-content h3, .copyright a, .categories-list li a:hover,
	.theme_tag:hover, .comments-list li .wrap-comment .comment-time,
	.carousel .carousel-control, .detail-comments .comments-list li .reply,
	.page-navigation a, #wp-calendar td a, .rss-date, .categories-list cite,
	a, a:focus, a:hover{color:#01A9F4;}

	.theme_tag:hover, .comments-list li:hover, .btn-common:hover{border-color:#01A9F4;}
	
	#back-to-top{border:2px solid #01A9F4;}
	
	.btn-common{border:3px solid #01A9F4;}
	
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a{border-bottom: 2px solid #01A9F4;}
	
	#wrap-nav-list li:hover ul{border-top: 2px solid #01A9F4;}
	
	.btn-common, .wrap-block-f-col:hover .wrap-icon .inner-icon,
	.book-block label, .in-service:hover h3, .in-service:hover .btn-sign-up,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.btn-common:hover, .newsletter-frm input[type="submit"]:hover
	{background-color:#01A9F4;}
	
	#header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common .wrap-icon i,
	.wrap-block-f-col .wrap-icon .inner-icon,
	.wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more,
	.icons-block .wrap-icon,
	.feature-list li .wrap-icon,
	.tabtile .light-text:after,
	#back-to-top,
	.copyright a,
	.checkbox input[type=checkbox]:checked + label:after{
		color: #01A9F4;
	}
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common,.btn-common:hover,
	#back-to-top{
		border-color: #01A9F4;
	}
	.main-nav #wrap-nav-list .nav-list li ul{
	border-top: #01A9F4 2px solid;
	}

	.btn-common,.btn-common:hover,
	.wrap-block-f-col:hover .wrap-icon .inner-icon,
	.in-service:hover h3,
	.in-service:hover .btn-sign-up,
	.template-block, .econtainer .textbox,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.newsletter-frm input[type="submit"]:hover,
	.chosen-container .chosen-results li.highlighted {
		background-color: #01A9F4;

	}

	.tabtile:before,
	.in-m-chapter .top:before{
		background-color: rgba(33,150,243,0.5);
	}
	
	.radio input[type=radio]:checked + label:after{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#2090e9+16,548bb7+92,548bb7+92 */
    background: #2090e9; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMTYlIiBzdG9wLWNvbG9yPSIjZDkxYzVjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-radial-gradient(center, ellipse cover,  #2090e9 16%, #548bb7 92%, #548bb7 92%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(16%,#2090e9), color-stop(92%,#548bb7), color-stop(92%,#548bb7)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #2090e9 16%,#548bb7 92%,#548bb7 92%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #2090e9 16%,#548bb7 92%,#548bb7 92%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #2090e9 16%,#548bb7 92%,#548bb7 92%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #2090e9 16%,#548bb7 92%,#548bb7 92%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2090e9', endColorstr='#548bb7',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

	}
	<?php } ?>
	
	<?php if(fthemes_get_option('three_colors') == '3') { ?>
	#back-to-top, #header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a,
	.btn-common .wrap-icon i, .wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more, .wrap-block-f-col .wrap-icon .inner-icon,
	.feature-list li .wrap-icon, .icons-block .wrap-icon,
	.wrap-content h3, .copyright a, .categories-list li a:hover,
	.theme_tag:hover, .comments-list li .wrap-comment .comment-time,
	.carousel .carousel-control, .detail-comments .comments-list li .reply,
	.page-navigation a, #wp-calendar td a, .rss-date, .categories-list cite,
	a, a:focus, a:hover {color:#019589;}

	.theme_tag:hover, .comments-list li:hover, .btn-common:hover{border-color:#019589;}
	
	#back-to-top{border:2px solid #019589;}
	
	.btn-common{border:3px solid #019589;}
	
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a{border-bottom: 2px solid #019589;}
	
	#wrap-nav-list li:hover ul{border-top: 2px solid #019589;}
	
	.btn-common, .wrap-block-f-col:hover .wrap-icon .inner-icon,
	.book-block label, .in-service:hover h3, .in-service:hover .btn-sign-up,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.btn-common:hover, .newsletter-frm input[type="submit"]:hover
	{background-color:#019589;}
	
	#header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common .wrap-icon i,
	.wrap-block-f-col .wrap-icon .inner-icon,
	.wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more,
	.icons-block .wrap-icon,
	.feature-list li .wrap-icon,
	.tabtile .light-text:after,
	#back-to-top,
	.copyright a,
	.checkbox input[type=checkbox]:checked + label:after{
		color: #019589;
	}
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common,.btn-common:hover,
	#back-to-top{
		border-color: #019589;
	}
	.main-nav #wrap-nav-list .nav-list li ul{
	border-top: #019589 2px solid;
	}

	.btn-common,.btn-common:hover,
	.wrap-block-f-col:hover .wrap-icon .inner-icon,
	.in-service:hover h3,
	.in-service:hover .btn-sign-up,
	.template-block, .econtainer .textbox,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.newsletter-frm input[type="submit"]:hover,
	.chosen-container .chosen-results li.highlighted {
		background-color: #019589;

	}

	.tabtile:before,
	.in-m-chapter .top:before{
		background-color: rgba(0,128,0,0.5);
	}
	
	.radio input[type=radio]:checked + label:after{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000+16,#000+92,#000+92 */
    background: #000; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMTYlIiBzdG9wLWNvbG9yPSIjZDkxYzVjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-radial-gradient(center, ellipse cover,  #000 16%, #000 92%, #000 92%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(16%,#000), color-stop(92%,#000), color-stop(92%,#000)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #000 16%,#000 92%,#000 92%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000', endColorstr='#000',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

	}
	<?php } ?>
	
	<?php if(fthemes_get_option('three_colors') == '4') { ?>
	#back-to-top, #header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a,
	.btn-common .wrap-icon i, .wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more, .wrap-block-f-col .wrap-icon .inner-icon,
	.feature-list li .wrap-icon, .icons-block .wrap-icon,
	.wrap-content h3, .copyright a, .categories-list li a:hover,
	.theme_tag:hover, .comments-list li .wrap-comment .comment-time,
	.carousel .carousel-control, .detail-comments .comments-list li .reply,
	.page-navigation a, #wp-calendar td a, .rss-date, .categories-list cite,
	a, a:focus, a:hover {color:#e91e63;}

	.theme_tag:hover, .comments-list li:hover, .btn-common:hover{border-color:#e91e63;}
	
	#back-to-top{border:2px solid #e91e63;}
	
	.btn-common{border:3px solid #e91e63;}
	
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a{border-bottom: 2px solid #e91e63;}
	
	#wrap-nav-list li:hover ul{border-top: 2px solid #e91e63;}
	
	.btn-common, .wrap-block-f-col:hover .wrap-icon .inner-icon,
	.book-block label, .in-service:hover h3, .in-service:hover .btn-sign-up,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.btn-common:hover, .newsletter-frm input[type="submit"]:hover
	{background-color:#e91e63;}
	
	#header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common .wrap-icon i,
	.wrap-block-f-col .wrap-icon .inner-icon,
	.wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more,
	.icons-block .wrap-icon,
	.feature-list li .wrap-icon,
	.tabtile .light-text:after,
	#back-to-top,
	.copyright a,
	.checkbox input[type=checkbox]:checked + label:after{
		color: #e91e63;
	}
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common,.btn-common:hover,
	#back-to-top{
		border-color: #e91e63;
	}
	.main-nav #wrap-nav-list .nav-list li ul{
	border-top: #e91e63 2px solid;
	}

	.btn-common,.btn-common:hover,
	.wrap-block-f-col:hover .wrap-icon .inner-icon,
	.in-service:hover h3,
	.in-service:hover .btn-sign-up,
	.template-block, .econtainer .textbox,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.newsletter-frm input[type="submit"]:hover,
	.chosen-container .chosen-results li.highlighted {
		background-color: #e91e63;

	}

	.tabtile:before,
	.in-m-chapter .top:before{
		background-color: rgba(233,30,99,0.5);
	}
	
	.radio input[type=radio]:checked + label:after{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#e91e63+16,b5174d+92,b5174d+92 */
    background: #e91e63; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMTYlIiBzdG9wLWNvbG9yPSIjZDkxYzVjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-radial-gradient(center, ellipse cover,  #e91e63 16%, #b5174d 92%, #b5174d 92%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(16%,#e91e63), color-stop(92%,#b5174d), color-stop(92%,#b5174d)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #e91e63 16%,#b5174d 92%,#b5174d 92%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #e91e63 16%,#b5174d 92%,#b5174d 92%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #e91e63 16%,#b5174d 92%,#b5174d 92%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #e91e63 16%,#b5174d 92%,#b5174d 92%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e91e63', endColorstr='#b5174d',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

	}
	<?php } ?>
	
	<?php if(fthemes_get_option('custom_color') != '') { ?>
	#back-to-top, #header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a,
	.btn-common .wrap-icon i, .wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more, .wrap-block-f-col .wrap-icon .inner-icon,
	.feature-list li .wrap-icon, .icons-block .wrap-icon,
	.wrap-content h3, .copyright a, .categories-list li a:hover,
	.theme_tag:hover, .comments-list li .wrap-comment .comment-time,
	.carousel .carousel-control, .detail-comments .comments-list li .reply,
	.page-navigation a, #wp-calendar td a, .rss-date, .categories-list cite,
	a, a:focus, a:hover {color:<?php echo fthemes_get_option('custom_color'); ?>;}

	.theme_tag:hover, .comments-list li:hover, .btn-common:hover{border-color:<?php echo fthemes_get_option('custom_color'); ?>;}
	
	#back-to-top{border:2px solid <?php echo fthemes_get_option('custom_color'); ?>;}
	
	.btn-common{border:3px solid <?php echo fthemes_get_option('custom_color'); ?>;}
	
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.current_page_item a{border-bottom: 2px solid <?php echo fthemes_get_option('custom_color'); ?>;}
	
	#wrap-nav-list li:hover ul{border-top: 2px solid <?php echo fthemes_get_option('custom_color'); ?>;}
	
	.btn-common, .wrap-block-f-col:hover .wrap-icon .inner-icon,
	.book-block label, .in-service:hover h3, .in-service:hover .btn-sign-up,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.btn-common:hover, .newsletter-frm input[type="submit"]:hover
	{background-color:<?php echo fthemes_get_option('custom_color'); ?>;}
	
	#header .toggle-menu[aria-expanded="true"],
	#header .toggle-menu[aria-expanded="true"]:hover,
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common .wrap-icon i,
	.wrap-block-f-col .wrap-icon .inner-icon,
	.wrap-block-f-col:hover h3,
	.wrap-block-f-col:hover .read-more,
	.icons-block .wrap-icon,
	.feature-list li .wrap-icon,
	.tabtile .light-text:after,
	#back-to-top,
	.copyright a,
	.checkbox input[type=checkbox]:checked + label:after{
		color: <?php echo fthemes_get_option('custom_color'); ?>;
	}
	#header .main-nav .nav-list li a:hover,
	#header .main-nav .nav-list li.active a,
	.btn-common,.btn-common:hover,
	#back-to-top{
		border-color: <?php echo fthemes_get_option('custom_color'); ?>;
	}
	.main-nav #wrap-nav-list .nav-list li ul{
	border-top: <?php echo fthemes_get_option('custom_color'); ?> 2px solid;
	}

	.btn-common,.btn-common:hover,
	.wrap-block-f-col:hover .wrap-icon .inner-icon,
	.in-service:hover h3,
	.in-service:hover .btn-sign-up,
	.template-block, .econtainer .textbox,
	.footer-block-title span,
	.newsletter-frm input[type="submit"],
	.newsletter-frm input[type="submit"]:hover,
	.chosen-container .chosen-results li.highlighted {
		background-color: <?php echo fthemes_get_option('custom_color'); ?>;

	}

	.tabtile:before,
	.in-m-chapter .top:before{
		background-color: <?php echo fthemes_get_option('custom_color'); ?>;
		opacity: 0.5;
	}
	
	.radio input[type=radio]:checked + label:after{
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000+16,#000+92,#000+92 */
    background: #000; /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPHJhZGlhbEdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IjUwJSIgcj0iNzUlIj4KICAgIDxzdG9wIG9mZnNldD0iMTYlIiBzdG9wLWNvbG9yPSIjZDkxYzVjIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICAgIDxzdG9wIG9mZnNldD0iOTIlIiBzdG9wLWNvbG9yPSIjYjUxNzRkIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L3JhZGlhbEdyYWRpZW50PgogIDxyZWN0IHg9Ii01MCIgeT0iLTUwIiB3aWR0aD0iMTAxIiBoZWlnaHQ9IjEwMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-radial-gradient(center, ellipse cover,  #000 16%, #000 92%, #000 92%); /* FF3.6+ */
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(16%,#000), color-stop(92%,#000), color-stop(92%,#000)); /* Chrome,Safari4+ */
    background: -webkit-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* Chrome10+,Safari5.1+ */
    background: -o-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* Opera 12+ */
    background: -ms-radial-gradient(center, ellipse cover,  #000 16%,#000 92%,#000 92%); /* IE10+ */
    background: radial-gradient(ellipse at center,  #000 16%,#000 92%,#000 92%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000', endColorstr='#000',GradientType=1 ); /* IE6-8 fallback on horizontal gradient */

	}
	<?php } ?>
	
	/* Blog Color ------------------------------------------------------------------------ */
	.article-block h2 a:hover, .article-block .article-info span,
	.article-block .article-info span a, .article-block > .article-img >a >.wrap-icon
	{color:<?php echo fthemes_get_option('custom_blog_color'); ?>;}
	
	.article-block .read-more:hover, .article-block > .article-img >a >.wrap-icon, .article-block .article-img:hover .article-img-mask, .article-block .article-img a .wrap-icon
	{background-color:<?php echo fthemes_get_option('custom_blog_color'); ?>;}
	
	/* Header ------------------------------------------------------------------------ */
	<?php if(fthemes_get_option('fixed_header') == '0') { ?>
	#header{
    position: static;
	}
	<?php } ?>
	<?php if(fthemes_get_option('header_bg') != '') { ?>
	#header{
    background-color: <?php echo fthemes_get_option('header_bg'); ?>;
	}
	<?php } ?>
	/* Footer Logo ------------------------------------------------------------------------ */
	<?php if(fthemes_get_option('footerlogo_url') != '') { ?>
	.footer-logo{
     background-image: url(<?php echo esc_url( fthemes_get_option('footerlogo_url') ); ?>);
	}
	<?php } ?>
	<?php if(fthemes_get_option('top_footer_bg') != '') { ?>
	.top-footer {
    background-color: <?php echo fthemes_get_option('top_footer_bg'); ?>;
	}
	<?php } ?>
	<?php if(fthemes_get_option('bottom_footer_bg') != '') { ?>
	.bottom-footer {
    background-color: <?php echo fthemes_get_option('bottom_footer_bg'); ?>;
	}
	<?php } ?>
	<?php if(fthemes_get_option('footer_column_title') != '') { ?>
	.footer-block-title {
    color: <?php echo fthemes_get_option('footer_column_title'); ?>;
	}
	<?php } ?>
	<?php if(fthemes_get_option('footer_title') != '') { ?>
	.newsletter-title, .article-list li h3 a, .social-list li a, .quick-link-list li a {
    color: <?php echo fthemes_get_option('footer_title'); ?>;
	}
	<?php } ?>
	<?php echo fthemes_get_option('textarea_csscode'); //Load Custom CSS from Theme-Options ?>
	
</style>
<?php }
add_action( 'wp_head', 'fthemes_styles_custom', 100 );
?>