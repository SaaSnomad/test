
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
			'seller_country'    : $('input[name=seller_country]').val(),
			'seller_industry' 	: $('select#seller_industry option:selected').text(),
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
	        	$("#seller-header").hide();
	        	$(form).hide();
	        	$("#preloader1").css('display','block');
	        	setTimeout(function () {
	        		$("#preloader1").css('display','none');
	        		$("#seller-success").css('display','block');
	        		$("#seller-success-title").html(msg['title']);
                    $("#seller-success-message").html(msg['message']); 
                }, 2000);
	        }, 
	        error: function (msg) {
	        	$("#seller-header").hide();
	        	$(form).hide();
	        	$("#preloader1").css('display','block'); 
	        	setTimeout(function () {
	        		$("#preloader1").css('display','none');
	        		$("#seller-error").css('display','block');
	        		$("#seller-error-title").html(msg['title']);
                    $("#seller-error-message").html(msg['message']); 
	        	}, 2000);         
	        }
	    });
		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});