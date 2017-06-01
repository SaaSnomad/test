// magic.js
$(document).ready(function() {
	var form = $('#subscribers-for-news');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'news_email'	    : $('input[name=news_email]').val(),
			'news_country'     : $('input[name=news_country]').val() 	
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'news-subscribers.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) {  
	           $(form).html("You have successfully subscribed to get notified. We will get back to you within 24 hours."); 
	        }, 
	        error: function (msg) {	        	
	        	$("#subscribe-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
				setTimeout(function () {	        	
					$("#preloader").css('display','none');
					$(form).fadeIn();
	            	$(form).html("<blockquote class='blockquote bq-primary' style='border-right: none;text-align: left;padding: 0;'><p class='bq-title' style='padding-left: 0;'>Congrats!</p></blockquote><p>You have successfully subscribed for the latest articles on SaaS M&A. We will send it to you weekly. Enjoy!</p></blockquote>"); 
                }, 2000);
 

	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			