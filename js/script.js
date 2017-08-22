$( document ).ready(function() {
        $("#right-side").delay(1000).fadeIn(500); 
});  

if($(window).width() < 767)
{
    $("#calculator .to-number").attr('type', 'number');
    $("#calculator .to-number").attr('max', '9999999');
    $("#calculator .to-number").attr('min', '0');
}  

// Counter
var oldDate = $('#oldDate').html();
var numItems = $('.rowsCount').length;
var result = parseInt(oldDate) + parseInt(numItems);
$('#getTotalApplications').html(result);
$('#getTotalApplications').number( true ); 



// Empty Form in Modal After Close button clicked

$("#sellerModal .close").click(function () {
    setTimeout(function () {
    $("#seller-success").fadeOut();
    $("#seller-error").fadeOut();
    $("#sellers").fadeIn();
    $('#sellers input[name=seller_name]').val('');
    $('#sellers input[name=seller_email]').val('');
    $('#sellers .chosen-single').addClass('chosen-default');
    $('#sellers .chosen-default span').html('Industry');
    document.getElementById('seller_mrr').value="";
    $("#seller-header").fadeIn();
	}, 1000);
});    
$("#waitlist1Modal .close").click(function () {
    setTimeout(function () {
    $("#waitlist1-success").fadeOut();
    $("#waitlist1-error").fadeOut();
    $("#waitlist1-waitlist").fadeIn();
    $('#waitlist1-waitlist input[name=pro_plan_name]').val('');
    $('#waitlist1-waitlist input[name=pro_plan_email]').val(''); 
    $("#waitlist1-header").fadeIn();
    }, 1000);
});  
$("#waitlist2Modal .close").click(function () {
    setTimeout(function () {
    $("#waitlist2-success").fadeOut();
    $("#waitlist2-error").fadeOut();
    $("#waitlist2-waitlist").fadeIn();
    $('#waitlist2-waitlist input[name=ninja_plan_name]').val('');
    $('#waitlist2-waitlist input[name=ninja_plan_email]').val('');  
    $("#waitlist2-header").fadeIn();
    }, 1000);
});   
 









