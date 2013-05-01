// Generated by CoffeeScript 1.6.1
/*
 * Requires jquery.responsiveText.js
*/

jQuery(function() {
  return jQuery('.responsive').not('table').each(function(index, object) {
    var $this, compression, max, min, scrollReset, scrollTime;
    compression = 10;
    min = 10;
    max = 200;
    scrollTime = 650;
    scrollReset = 200;
    compression = parseFloat(jQuery(this).attr('data-compression') || compression);
    min = parseFloat(jQuery(this).attr('data-min') || min);
    max = parseFloat(jQuery(this).attr('data-max') || max);
    jQuery(object).responsiveText({
      compressor: compression,
      minSize: min,
      maxSize: max
    });
    $this = jQuery(this);
    return jQuery(this).hover((function() {
      var difference;
      difference = $this.get(0).scrollWidth - $this.width();
      console.log(difference);
      if (difference > 0) {
        return $this.stop().animate({
          "text-indent": -difference
        }, scrollTime);
      }
    }), function() {
      return $this.stop().animate({
        "text-indent": 0
      }, scrollReset);
    });
  });
});
