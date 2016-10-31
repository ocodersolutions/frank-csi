/* Retina Images JS */
/*----------------------------------------------------------*/
(function($) {

"use strict";

jQuery(document).ready(function($){
//displays retina images
    $(function(){
        if (window.devicePixelRatio > 1) {
            var lowresImages = $('img');
            lowresImages.each(function(i) {
                var lowres = $(this).attr('src');
                var n = lowres.lastIndexOf(".");
                var str1 = lowres.substring(0,n);
                var str2 = lowres.substring(n+1,lowres.length);
                var highres = str1.concat("@2x.".concat(str2));
                $(this).attr('src', highres);
            });
        }
    });
});
}(jQuery));