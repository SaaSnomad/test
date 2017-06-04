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
			success: function (msg) {$(form).hide();
	        	$(".sorry-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$(form).fadeIn();
                    $(form).html("<blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding: 0;'><p class='bq-title' style='padding-left: 0;'>Congrats!</p></blockquote><p style='margin-bottom:2rem;'>You have successfully subscribed to get notified about new feature. We will get back to you as soon as it is done.</p></blockquote><a href='index.html' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>"); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$(".sorry-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$(form).fadeIn();
                	$(form).html("<blockquote class='blockquote bq-warning' style='border-left: none;padding: 0;'><p class='bq-title' style='padding-left: 0;'>Sorry!</p></blockquote><p style='margin-bottom:2rem;'>Could not process your request. Please try again later.</p></blockquote><a href='index.html' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a>"); 
	        	}, 2000);
	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			