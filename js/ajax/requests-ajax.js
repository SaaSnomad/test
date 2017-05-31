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
	           $(form).html("You have successfully requested Seller's contact. We will get back to you within 24 hours with an answer."); 
	        }, 
	        error: function (msg) {
	        	$(form).hide();
	        	$("#preloader").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$(form).fadeIn();
                    $(form).html("<blockquote class='blockquote bq-success' style='border-left: none;'><p class='bq-title'>Congrats!</p><p>You have successfully requested Seller's contact. We will get back to you within 24 hours with an answer.</br></br></br><a href='../index.html' class='custom-link'><i class='fa fa-arrow-left' aria-hidden='true' style='margin-top: 2px;'></i> Go back to website</a></p></blockquote>"); 
                }, 2000); 
                
	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			