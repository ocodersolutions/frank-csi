/* Template: Cosonix Theme | Author: Fluent-Themes */
/*----------------------------------------------------------*/
(function($) {

"use strict";
    var callback = function (){

        jQuery('.chosen-container.chosen-container-single').innerWidth("100%");

    };
    jQuery(document).ready(callback);

$(window).resize(callback);//responsive width
jQuery(document).ready(function($){
    setTimeout(function () {
        jQuery('.main-nav').css('visibility', 'visible');
        //set full height
        setFullHeight();
    }, 500);
	 //fixMainMenu();
    // Contact Form ajax

    var eForm = jQuery('#contact-form');
    var spinner = jQuery('.spinner');

    eForm.find('#submit').on('click', function(e){
        e.preventDefault();
        jQuery('#contactsMsgs').html('');
        spinner.show();
        var errmsg;
        errmsg = '';

        if(errmsg){
            jQuery('#contactsMsgs').html('<p class="nc-response">' + errmsg + '</p>');
            spinner.hide();
        }else{
            
            var url = eForm.attr('action');
            
            var data = eForm.serialize();
                   
            jQuery.ajax({
                url: url,
                method: 'POST',
                data: data,
                error: function(data) {
					var $error_while_ajax_request = prefix_object_name.error_while_ajax_request;
                    jQuery('#contactsMsgs').html('<p class="nc-response">'+ $error_while_ajax_request +'</p>');
                    spinner.hide();
                },
                success : function(data){
					var $thank_you_your_email_has_been_sent = prefix_object_name.thank_you_your_email_has_been_sent;
					var $please_try_again = prefix_object_name.please_try_again;
                    if (data.status == 'success') {
                        jQuery('#contactsMsgs').html('<p class="icon-ok mc-response">'+ $thank_you_your_email_has_been_sent +'</p>');
                        eForm.find("input[type=text], textarea").val("");
                    }else{
						jQuery('#contactsMsgs').html('<p class="nc-response">'+ $please_try_again +'</p>');
                    }
                    spinner.hide();
                    //closeParentBtn();
                }
            });
            
        }

    });
	
	//tabion
    $(function(){
        $('.tabion .tabtile').on('click', function(){
            $(this).parents('ul').find('.active').removeClass('active');
            $(this).parents('li').addClass('active');
        });
    });
	
	//Styling sidebar widgets
	jQuery('.sidebar-block > ul').addClass('categories-list');
	
	//Styling select box
	$('select').chosen({
        "disable_search": true
    });
	
	//add style for contact form 7 wp
    var $frm7 = $('.wpcf7-form');
    if ($frm7.length) {
        $frm7.addClass('frm-common');
        $frm7.children().wrapAll('<div class="row"></div>');
        var $btnI = $('.wpcf7-submit');

        $('.wpcf7-form-control-wrap').each(function(){
            var $this = $(this),
                $class = $this.attr('class'),
                $row = $class.indexOf('menu')>-1||$class.indexOf('submit')>-1||$class.indexOf('checkbox')>-1||$class.indexOf('textarea')>-1;
            if ($row) {
                $this.wrapAll('<div class="col-xs-12"></div>');
            }
            if ($class.indexOf('radio')>-1) {
                $this.wrapAll('<div class="col-xs-12 row-radios"></div>');
            }
            if ($class.indexOf('text-')>-1||$class.indexOf('email')>-1||$class.indexOf('date')>-1||$class.indexOf('number')>-1||$class.indexOf('wpcf7-quiz')>-1||$class.indexOf('tel')>-1){
                $this.children().addClass('form-control');
                $this.wrapAll('<div class="col-md-6"></div>');
            }
			if ($class.indexOf('textarea')>-1){
                $this.children().addClass('form-control');
            }
        });
        $btnI.each(function(){
            var $this = $(this),
                $class = $this.attr('class'),
                $row = $class.indexOf('submit')>-1;
            if ($row) {
                $this.wrapAll('<div class="col-xs-12"></div>');
            }
        });

        $btnI.each(function(){
            var $ico = '<span class="wrap-icon"><span class="inner-icon"><i class="fa fa-paper-plane-o"></i></span>';
            var $btnN = '<button class="btn-common '+$(this).attr('class')+'"' + ' type="submit">' + $(this).val()+ $ico + '</button>';
            $(this).before($btnN);
            $(this).remove();
        });

        $('.wpcf7-checkbox').each(function(){
            var $id_check = 'checkbox-'+Math.floor((Math.random() * 1000) + 1);
            $(this).find('input').attr('id',$id_check);
            $(this).children('.wpcf7-list-item').children().wrapAll('<div class="wrap-check label"></div>');
            $(this).find('input').wrapAll('<span class="checkbox"></span>');
            $(this).find('.checkbox').append('<label for="'+$id_check+'"></label>');
        });

        $('.wpcf7-radio .wpcf7-list-item').each(function(){
            var $id_radio = 'radio-'+Math.floor((Math.random() * 1000) + 1);;
            $(this).find('input').attr('id',$id_radio);
            $(this).wrapAll('<div class="wrap-radio label"></div>');
            $(this).find('input').wrapAll('<span class="radio"></span>');
            $(this).find('.radio').append('<label for="'+$id_radio+'"></label>');
        });
    }

    //balance height
    setAllToMaxHeight('.introduction-block.left','.introduction-block.right');
    setAllToMaxHeight('.wrap-tabs .nav','.wrap-tabs .wrap-content');
    $(window).on('resize', function(e)
    {
        setAllToMaxHeight('.introduction-block.left','.introduction-block.right');
        setAllToMaxHeight('.wrap-tabs .nav','.wrap-tabs .wrap-content');
        setFullHeight();
    });

    //form action
    function formResult(element,data) {
        $('#'+element).next('.result').html(data);
        $('#'+element+' input').val('');
    }

    function onSubmit(element) {
        $('#'+element).submit(function() {
            var action = $(this).attr('action');
            loading();
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    email: $('#'+element+' input[type="email"]').val(),
                    name: $('#'+element+' input[type="text"]').val()
                },
                success: function(data) {
                    formResult(data);
                },
                error: function(data) {
                    formResult(data);
                }
            });
            return false;
        });
    }
    onSubmit('sign-up-frm');
    onSubmit('newsletter-frm');

    /* Header
     ------------------*/
    var topMenu = $('#wrap-nav-list'),
        topMenuHeight = topMenu.outerHeight(), // include padding&margin, if .outerHeight(true), only padding
        menuItems = topMenu.find('a[href*="#"]'),
        scrolledItems = menuItems.map( function() {
            var item = $( $(this).attr('href') );
            if ( item.length ) { return item; }
        });
        // Scroll to section
    menuItems.on('click', function( e ) {

        var hrefVal = $(this).attr('href'),
            offsetTop = hrefVal === '#' ? 0 : $(hrefVal).offset().top - topMenu.outerHeight();

        // mobile
        var w = $(window).width();
        if ( w < 768 ){
            offsetTop = hrefVal === '#' ? 0 : $(hrefVal).offset().top - 65;
        }

        $('html, body').stop().animate({ scrollTop: offsetTop }, 800);

        // close mobile menu when item is clicked
		if ( $(window).width() < 1200 ) {
            $('.toggle-menu').trigger("click");
        }

    }); // menuItems.on('click', function( e )

    $(window).scroll( function() {
        // Scale down header

        // Change .active menu item on scroll
        var fromTop = $(this).scrollTop() + topMenuHeight,

        // return menu item as object when scrolled into view
            itemsScrolled = scrolledItems.map( function(){
                if ( $(this).offset().top - 1 < fromTop ) // -1 so that menuItem detects using click event
                    return this;
            });
        // return menu item as object when scrolled into view

        var scrolledItem = itemsScrolled[itemsScrolled.length - 1]; // index starts from 0...

        var id = scrolledItem && scrolledItem.length ? scrolledItem[0].id : '';

        menuItems
            .parent().removeClass('current_page_item')
            .end()
            .filter('[href="#' + id + '"]').parent().addClass('current_page_item');
        // Scale down header
        if ( $(this).scrollTop() < 500 ) {
            $('#header').removeClass('scaled-down');
        } else {
            $('#header').addClass('scaled-down');
        }

        //back to top

        if ( $(window).scrollTop() < 300 ) {
            $('#back-to-top').fadeOut();
        } else {
            $('#back-to-top').fadeIn();
        }

    }); // $(window).scroll( function()

    $("#back-to-top").on("click",function () {
        //1 second of animation time

        $("html, body").animate({scrollTop: 0}, 1000);
    });
    //crop image presentation section on mobile
    cropImagePresentationSection();
    $(window).on("resize", function(){
        cropImagePresentationSection();
    });
});
}(jQuery));

var setAllToMaxHeight = function(element1,element2){
    jQuery(element1).outerHeight('auto');
    jQuery(element2).outerHeight('auto');
    if (jQuery(window).width()>767) {
        var $max = Math.max(jQuery(element1).outerHeight(),jQuery(element2).outerHeight());
        jQuery(element1).outerHeight($max);
        jQuery(element2).outerHeight($max);
    }
}

function setFullHeight(){
    if (jQuery(document).width()>991){
        jQuery('.full-height').each(function(){
            jQuery(this).children().outerHeight(jQuery(this).parent().outerHeight() + 60 + 40);
        });
    }
}

//process menu
/*function fixMainMenu(){	
    var $item = jQuery('.main-nav .nav-list li'),
        /*$itemMobile = jQuery('.mm-listview li'),*/
/*        $is_home = jQuery('.main-nav .nav-list li:first-child').hasClass('current_page_item'),
        $last_menu_it = !jQuery('.main-nav .nav-list li:last-child').hasClass('current-menu-item'),
        $is_single = jQuery('#blog-section').length!= 0,
        $is_404 = jQuery('.search-style').length!=0;
	if ($is_home){
		jQuery('.main-nav .nav-list li').removeClass('current_page_item');
		jQuery('.main-nav .nav-list li:first-child').addClass('current_page_item');

	}
    setTimeout(function(){
        if(jQuery('.page-container-content').length){
            jQuery('.main-nav .nav-list li').not('.main-nav .nav-list li:first-child, .main-nav .nav-list li:last-child').each(function(){
                var $href =  jQuery('.main-nav .nav-list li:first-child a').attr('href'),
                    $cur = jQuery(this).children('a').attr('href');
                jQuery(this).children('a').attr('href', $href + $cur);
            });
        }
    },500);
	if ($is_single || $is_404){ return;}
    else if ($last_menu_it){
        $item.not('.main-nav .nav-list li:first-child ,.main-nav .nav-list li:last-child').each(function(){
            var $href = jQuery(this).children('a').attr('href'),
                $n = $href.lastIndexOf('#'),
                $new_href= $href.substring($n, $href.length);
            jQuery(this).children('a').attr('href',$new_href);
        });
    }
};*/

function cropImagePresentationSection(){
    if (window.innerWidth < 768){
        var $box = jQuery('.in-m-chapter .top');
        $box.innerHeight($box.width());
    }
}