// magic.js
$(document).ready(function() {
	var form = $('#requests');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'request_name'	    : $('input[name=request_name]').val(),
			'request_email'     : $('input[name=request_email]').val(),
			'request_country'   : $('input[name=request_country]').val(),
			'request_id'        : $('input[name=request_id]').val(),
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'requests.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
				$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () { 
	        		$("#preloader").css('display','none');
	        		$("#request-success").css('display','block');
	        		$("#request-success").css('padding-top', '82px');
	        		$("#request-success-title").html(msg['title']);
                    $("#request-success-message").html(msg['message']); 
	            	}, 2000);
	        }, 
	        error: function (msg) {
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$("#request-error").css('padding-top', '82px');
	        		$("#request-error-title").html(msg['title']);
                    $("#request-error-message").html(msg['message']);
                }, 2000); 
	        }
		});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			