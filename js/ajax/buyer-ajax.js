// magic.js
$(document).ready(function() {
	var form = $('#buyers');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'buyer_name' 		: $('input[name=buyer_name]').val(),
			'buyer_email'	    : $('input[name=seller_email]').val(),
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
	            $(form).hide();
	        	$("#buyer-header").html('');
	        	$("#buyer-subheader").hide();
	        	$("#preloader2").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader2").css('display','none');
	        		$("#buyer-header").html("<blockquote class='blockquote bq-primary text-center' style='border-right: none;text-align: left;'><p class='bq-title' style='padding-left: 0;'>Congrats!</p></blockquote>");
	        		$(form).fadeIn();
                    $(form).html("<div class='text-center' style='margin-top:20px;'><p>You have successfully subscribed to get notified about latest featured SaaS offers.</p></div>"); 
                }, 2000); 
	        }, 
	        error: function (msg) {
	        	$("#buyer-header").hide();
	        	$("#buyer-subheader").hide();
	        	$(form).hide();
	        	$("#preloader2").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader2").css('display','none');
	        		$(form).fadeIn();
	        		$(form).html("<blockquote class='blockquote bq-warning text-center' style='border-left: none;padding: 0;'><p class='bq-title' style='padding-left: 0;'>Sorry!</p></blockquote><p>Could not process your request. Please try again later.</p></blockquote>"); 
	        	}, 2000);            
	        }
		}); 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			