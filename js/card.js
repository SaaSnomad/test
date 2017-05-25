$(document).ready(function(){

	$('.card-container1').mouseup(function(e) {
	  if (e.which != 1) return false;

	  $('.card--front1').toggleClass('card--front--flip');
	  $('.card--back1').toggleClass('card--back--flip');
	});

	$('.card-container2').mouseup(function(e) {
	  if (e.which != 1) return false;

	  $('.card--front2').toggleClass('card--front--flip');
	  $('.card--back2').toggleClass('card--back--flip');
	});

	$('.card-container3').mouseup(function(e) {
	  if (e.which != 1) return false;

	  $('.card--front3').toggleClass('card--front--flip');
	  $('.card--back3').toggleClass('card--back--flip');
	});


	$('a').mouseup(function(e) {
	  e.stopPropagation();
	});
});