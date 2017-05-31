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
	           $(form).html("You have successfully subscribed to get notified. We will get back to you within 24 hours."); 
	        }, 
	        error: function (msg) {
	        	$(form).hide();
	        	$(".sorry-msg").hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$(form).fadeIn();
                    $(form).html("<blockquote class='blockquote bq-success' style='border-left: none;padding: 0;'><p class='bq-title' style='padding-left: 0;'>Congrats!</p></blockquote><p>You have successfully subscribed to get notified about new feature. We will get back to you as soon as it is done.</p></blockquote>"); 
                }, 2000); 
                
	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			