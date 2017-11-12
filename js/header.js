$(window).load(function() {
  var $header = $('.main-header');
  var $window = $(window);
  var startOffset = $header.offset().top;

  $window.on('scroll', function() {
    var scrollTop = $window.scrollTop();
    if(startOffset - scrollTop <= 0) {
      $header.addClass('fixed-header');
    }
    else {
      $header.removeClass('fixed-header');
    }
  });
});