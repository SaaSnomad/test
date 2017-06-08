// magic.js
$(document).ready(function() {
	var form = $('#coming_soon_subscribers');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'coming_soon_email'	    : $('input[name=coming_soon_email]').val(),
			'coming_soon_country'     : $('input[name=coming_soon_country]').val() 	
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'coming-soon.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) {
	        	$(".sorry-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$("#coming-soon-success").css('display','block');
	        		$("#coming-soon-success-title").html(msg['title']);
                    $("#coming-soon-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$(".sorry-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$("#coming-soon-error").css('display','block');
	        		$("#coming-soon-error-title").html(msg['title']);
                    $("#coming-soon-error-message").html(msg['message']); 
                }, 2000);
	        }
		});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			