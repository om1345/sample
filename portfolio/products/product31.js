$(function() {
  $('#form').submit(function() {
    var selectItem = $('#select-form').val();
    var textItem = $('#text-form').val();
    if (textItem == '') {
      $('#error-message').text('理由を記入してください');
    } else {
      $('#error-message').text('');
    }
    $('#output-select').text(selectItem);
    $('#output-text').text(textItem);
    return false;
  });

  $('.option-btn').click(function() {
    var optionText = $(this).text();
    var clickedOption = $(this).attr('data-option');

    $('#text-form').val(optionText + 'が好きな理由は、');
    $('#select-form').val(clickedOption);

  });
});
