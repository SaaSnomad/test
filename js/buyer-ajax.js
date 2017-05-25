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
			'buyer_country'     : $('input[name=buyer_country]').val(),
			'buyer_company' 	: $('input[name=buyer_company]').val(),
			'buyer_industry' 	: $('select#buyer_industry option:selected').text()			
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'add-buyer.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true 

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});

//
//			