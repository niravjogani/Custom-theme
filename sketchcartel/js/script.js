// $( document ).ready(function() {
    /**Sticky Header */
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 90) {
            jQuery('header').addClass('fixed');
            jQuery(".nav").css({"margin-top": "8px"});
            jQuery("header").css({"margin-top": "0px"});
        } else {
            jQuery('header').removeClass('fixed');
            jQuery(".nav").css({"margin-top": "35px"});
        }
    });
    
    /**Back to Top Button */
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 500) {
            jQuery('.bottom-to-top').addClass('on');
        } else {
            jQuery('.bottom-to-top').removeClass('on');
        }
    });
// });
