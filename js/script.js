
// Counter
var oldDate = $('#oldDate').html();
var numItems = $('.rowsCount').length;
var result = parseInt(oldDate) + parseInt(numItems);
$('#getTotalApplications').html(result);
$('#getTotalApplications').number( true ); 



// Empty Seller's and Buyer's Form After Close button clicked

$("#sellerModal .close").click(function () {
    setTimeout(function () {
    $("#seller-success").fadeOut();
    $("#sellers").fadeIn();
    $('#sellers input[name=seller_name]').val('');
    $('#sellers input[name=seller_email]').val('');
    $('#sellers .chosen-single').addClass('chosen-default');
    $('#sellers .chosen-default span').html('Industry');
    document.getElementById('seller_mrr').value="";
    $("#seller-header").fadeIn();
	}, 1000);
});    
$("#buyerModal .close").click(function () {
	setTimeout(function () {
	    $("#buyer-success").fadeOut();
	    $("#buyers").fadeIn();
	    $('#buyers input[name=buyer_name]').val('');
	    $('#buyers input[name=buyer_email]').val(''); 
	    $("#buyer-header").fadeIn();
	}, 1000);
});         