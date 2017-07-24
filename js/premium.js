$(document).ready(function() {
	if ($('.premium-banner').attr('data-status')) {
      $(".premium-banner").css('display','block');
    } else {
      $(".premium-banner").css('display','none');
    } 
});