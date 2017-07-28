
$(document).ready(function() {
	var form = $('#contact-form');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData =  form.serialize(); 
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-msg.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
	        	$(form).hide();
	        	$("#preloader3").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader3").css('display','none');
	        		$("#msg-success").css('display','block');
	        		$("#msg-success-title").html(msg['title']);
                    $("#msg-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$(form).hide();
	        	$("#preloader3").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader3").css('display','none');
	        		$("#msg-error").css('display','block');
	        		$("#msg-error-title").html(msg['title']);
                    $("#msg-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
	    });

		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});