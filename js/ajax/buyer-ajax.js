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
	           $(form).html("You have successfully subscribed to get notified. We will get back to you within 24 hours."); 
	        }, 
	        error: function (msg) {
	        	$(form).hide();
	        	$("#buyer-header").html('');
	        	$(".privacy").hide();
	        	$("#preloader2").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader2").css('display','none');
	        		$("#buyer-header").html("<blockquote class='blockquote bq-success text-center' style='border-left: none;'><p class='bq-title' style='padding-left: 0;'>Congrats!</p></blockquote>");
	        		$(form).fadeIn();
                    $(form).html("<div class='text-center' style='margin-top:20px;'><p>You have successfully subscribed to get notified about latest featured SaaS offers. We will get back to you within 24 hours.</p></div>"); 
                }, 2000); 
                
	        }
		}) 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			