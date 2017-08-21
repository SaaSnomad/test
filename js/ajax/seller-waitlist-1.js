
$(document).ready(function() {
	var form = $('#waitlist-1');
	// process the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData =  form.serialize(); 
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-seller-1-waitlist.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
				$("#waitlist-1-header").hide();
	        	$(form).hide();
	        	$("#preloader5").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader5").css('display','none');
	        		$("#waitlist1-success").css('display','block');
	        		$("#waitlist1-success-title").html(msg['title']);
                    $("#waitlist1-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$("#waitlist-1-header").hide();
	        	$(form).hide();
	        	$("#preloader5").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader5").css('display','none');
	        		$("#waitlist1-error").css('display','block');
	        		$("#waitlist1-error-title").html(msg['title']);
                    $("#waitlist1-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
	    });

		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});