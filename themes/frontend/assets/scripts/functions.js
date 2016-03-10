(function($) {
    "use strict";

    // Menu Items Limit

    var maxItems = 10; // Change Number of Items here
    var totalItems = jQuery('.navigation>ul').find('>li').length;
    if (totalItems > maxItems) {
        jQuery('.navigation>ul>li:nth-child(' + maxItems + ') ~ li').wrapAll('<li></li>').wrapAll('<ul class="sub-dropdown"></ul>');
        jQuery('.navigation>ul>li:last-child').prepend('<a href="#">More</a>');
    }

    // Responsive Menu

    jQuery(document).ready(function() {
        jQuery('.navigation>ul').slicknav();

    // JPlatyer

        if (jQuery('#jquery_jplayer_1').length != '') {
            new jPlayerPlaylist({
                jPlayer: "#jquery_jplayer_1",
                cssSelectorAncestor: "#jp_container_1"
            }, 
            song_list
            , {
                swfPath: "../../dist/jplayer",
                supplied: "oga, mp3",
                wmode: "window",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true
            });
        }
    });

    jQuery(window).load(function() {
   if(jQuery('.flexslider').length != ''){
      jQuery('.flexslider').flexslider({
       slideshowSpeed: 4000,
       animationDuration: 1100,
       animation: 'slide',
       directionNav: false,
       controlNav: false,
       pausePlay: false,
	    
        start: function(slider) {
              jQuery('.flexslider').removeClass('px-loading');
              jQuery('.flexslider').find('.loader').remove();
          }
   });
   }
});
})(jQuery);



