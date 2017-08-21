
$(document).ready(function() {
	var form = $('#waitlist-2');
	// ninjacess the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData =  form.serialize(); 
		// ninjacess the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-seller-2-waitlist.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
				$("#waitlist-2-header").hide();
	        	$(form).hide();
	        	$("#preloader6").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader6").css('display','none');
	        		$("#waitlist2-success").css('display','block');
	        		$("#waitlist2-success-title").html(msg['title']);
                    $("#waitlist2-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$("#waitlist-2-header").hide();
	        	$(form).hide();
	        	$("#preloader6").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader6").css('display','none');
	        		$("#waitlist2-error").css('display','block');
	        		$("#waitlist2-error-title").html(msg['title']);
                    $("#waitlist2-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
	    });

		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});