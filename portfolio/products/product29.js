$(function() {
  $('.panel-item').click(function() {
    var $answer = $(this).find('.answer');
    if($answer.hasClass('open')) {
      $answer.removeClass('open');
      $answer.slideUp();

    } else {
      $answer.addClass('open');
      $answer.slideDown();
    }
  });
});
