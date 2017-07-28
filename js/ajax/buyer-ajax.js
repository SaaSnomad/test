// magic.js
$(document).ready(function() {
	var form = $('#buyers');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'buyer_email'	    : $('input[name=buyer_email]').val(),
			'buyer_country'     : $('input[name=buyer_country]').val() 	
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-buyer.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
	        	$("#buyer-header").hide();
	        	$("#buyer-subheader").hide();
	        	$(form).hide();
	        	$("#preloader2").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader2").css('display','none');
	        		$("#buyer-success").css('display','block');
	        		$("#buyer-success-title").html(msg['title']);
                    $("#buyer-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$("#buyer-header").hide();
	        	$("#buyer-subheader").hide();
	        	$(form).hide();
	        	$("#preloader2").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader2").css('display','none');
	        		$("#buyer-error").css('display','block');
	        		$("#buyer-error-title").html(msg['title']);
                    $("#buyer-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
		}); 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			