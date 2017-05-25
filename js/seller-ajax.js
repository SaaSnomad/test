// magic.js
$(document).ready(function() {
	var form = $('#sellers');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'seller_name' 		: $('input[name=seller_name]').val(),
			'seller_email'	    : $('input[name=seller_email]').val(),
			'seller_country'     : $('input[name=seller_country]').val(),
			//'sellerIndustry' 	: $('select#sellerIndustry option:selected').text(),
			'seller_mrr' 	    : $('input[name=seller_mrr]').val() 
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-seller.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true, 
			success: function (msg) {  
	           $(form).html("Your application has been successfully sent for review. We will get back to you within 24 hours. "); 
	        }, 
	        error: function (msg) {
	        	$(form).fadeOut();
	        	$("#preloader").fadeIn();
	        	setTimeout(function () {
	        		$("#preloader").css('display','none');
	        		$(form).show();
                    $(form).html("Your application has been successfully sent for review. We will get back to you within 24 hours."); 
                }, 4000); 

	           
	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			