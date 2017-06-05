$(document).ready(function() {
	var form = $('#calculator');
	// process the form
	$(form).submit(function(event) {


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'calculator_region' 	: $('select#calculator_region option:selected').text(),
			'calculator_mrr	' 		: $('input[name=calculator_mrr	]').val(),
			'calculator_mrr_growth'	: $('input[name=calculator_mrr_growth]').val(),
			'calculator_margin'     : $('input[name=calculator_margin]').val(),
			'calculator_burn' 	    : $('input[name=calculator_burn]').val(),
			'calculator_email' 	    : $('input[name=calculator_email]').val(),
			'range_from' 			: $('input[name=range_from]').val(),
			'range_to' 				: $('input[name=range_to]').val(),
			'calculator_location' 	: $('input[name=calculator_location]').val()
		};
		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'calculator.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true
		})  

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});