(function($,sr){

  // debouncing function from John Hann
  // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
  var debounce = function (func, threshold, execAsap) {
      var timeout;

      return function debounced () {
          var obj = this, args = arguments;
          function delayed () {
              if (!execAsap)
                  func.apply(obj, args);
              timeout = null;
          };

          if (timeout)
              clearTimeout(timeout);
          else if (execAsap)
              func.apply(obj, args);

          timeout = setTimeout(delayed, threshold || 100);
      };
  }
	// smartresize
	jQuery.fn[sr] = function(fn){  return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr); };

})(jQuery,'smartresize');



;(function (jQuery) {
    "use strict";
    
  
// Video background parent
  function resize_background_video() {
    jQuery('.section .bg-video').each(function () {
      var $vid = jQuery(this), 
          $section = $vid.parent(), 
          windowWidth = $section.width(), 
          windowHeight = $section.outerHeight(), 
          r_w = windowHeight / windowWidth, 
          i_w = $vid.width(), 
          i_h = $vid.height(), 
          r_i = i_h / i_w, new_w, new_h;
      if (r_w > r_i) {
        new_h = windowHeight;
        new_w = windowHeight / r_i;
      } else {
        new_h = windowWidth * r_i;
        new_w = windowWidth;
      }
      $vid.css({
        width : new_w,
        height : new_h,
        left : (windowWidth - new_w) / 2,
        top : (windowHeight - new_h) / 2
      });
    });
  }
  
// Video Background 
  jQuery('.section .bg-video').load();
  jQuery('.section .bg-video').on("loadedmetadata", function () {
    jQuery(this).css({
      width: this.videoWidth,
      height: this.videoHeight
    });
    resize_background_video();
    jQuery(this).css('display', 'block');
  });
  
  jQuery(window).smartresize(function () {
    resize_background_video();       
  });
  
}(jQuery));