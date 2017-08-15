
$(document).ready(function() {
	var form = $('#ninja-plan-waitlist');
	// ninjacess the form
	$(form).submit(function(event) {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData =  form.serialize(); 
		// ninjacess the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-power-plan-waitlist.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,
			success: function (msg) { 
				$("#ninja-plan-header").hide();
	        	$(form).hide();
	        	$("#preloader6").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader6").css('display','none');
	        		$("#ninja-plan-success").css('display','block');
	        		$("#ninja-plan-success-title").html(msg['title']);
                    $("#ninja-plan-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$("#ninja-plan-header").hide();
	        	$(form).hide();
	        	$("#preloader6").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader6").css('display','none');
	        		$("#ninja-plan-error").css('display','block');
	        		$("#ninja-plan-error-title").html(msg['title']);
                    $("#ninja-plan-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
	    });

		
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});