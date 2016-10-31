(function($) {

"use strict";

$(document).ready(function() {
	// set default state
	$('.home_img, .wrap-block-f-col, .in-testimonial, .in-service').addClass('opacity-zero');
	// animations
	$('.home_img').removeClass('opacity-zero').addClass('animated slideInUp');
	$('.img-block, .book-block img').removeClass('opacity-zero');

	$('#features').waypoint( function(){
		$('.wrap-block-f-col').each(function(i){
			$(this).css({
          'animation-delay' : (i * 0.3) + "s",
          '-webkit-animation-delay' : (i * 0.3) + "s",
          '-moz-animation-delay' : (i * 0.3) + "s",
          '-ms-animation-delay' : (i * 0.3) + "s",
          '-o-animation-delay' : (i * 0.3) + "s"
			});
		});
		$('.wrap-block-f-col')
			.removeClass('opacity-zero')
			.addClass('animated flipInY opacity-one');

	}, {offset: 750});

	$('#reviews').waypoint( function(){
		$('.in-testimonial').each(function(i){
			$(this).css({
          'animation-delay' : (i * 0.2) + "s",
          '-webkit-animation-delay' : (i * 0.2) + "s",
          '-moz-animation-delay' : (i * 0.2) + "s",
          '-ms-animation-delay' : (i * 0.2) + "s",
          '-o-animation-delay' : (i * 0.2) + "s"
			});
		});
		$('.in-testimonial')
			.removeClass('opacity-zero')
			.addClass('animated flipInY opacity-one');

	}, {offset: 550});

	$('#pricing').waypoint( function(){
		$('.in-service').each(function(i){
			$(this).css({
          'animation-delay' : (i * 0.2) + "s",
          '-webkit-animation-delay' : (i * 0.2) + "s",
          '-moz-animation-delay' : (i * 0.2) + "s",
          '-ms-animation-delay' : (i * 0.2) + "s",
          '-o-animation-delay' : (i * 0.2) + "s"
			});
		});

		$('.in-service')
			.removeClass('opacity-zero')
			.addClass('animated slideInLeft opacity-one');
			
	}, {offset: 600});

});
}(jQuery));

function resetAnimation(element, time, i){
	element.css({
		'animation-delay' : (i * time) + "s",
		'-webkit-animation-delay' : (i * time) + "s",
		'-moz-animation-delay' : (i * time) + "s",
		'-ms-animation-delay' : (i * time) + "s",
		'-o-animation-delay' : (i * time) + "s"
	});
}
