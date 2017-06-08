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
	        	$("#subscribe-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
				setTimeout(function () {	        	
					$("#preloader").css('display','none');
					$("#news-success").css('display','block');
	        		$("#news-success-title").html(msg['title']);
                    $("#news-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {	 
	        	$("#subscribe-msg").hide();
	        	$(form).hide();
	        	$("#preloader").css('display','block');
				setTimeout(function () {	        	
					$("#preloader").css('display','none');
					$("#news-error").css('display','block');
	        		$("#news-error-title").html(msg['title']);
                    $("#news-error-message").html(msg['message']); 
	                }, 2000);
 
	        }
		});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			