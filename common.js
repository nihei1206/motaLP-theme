//

$(function() {
    $('.open-btn').on('click', function() {
      if( $(this).children().is('.open') ) {
        $(this).html('<p class="close">閉じる</p>').addClass('close-btn');
      }
    });
  });