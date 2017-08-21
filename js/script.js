$( document ).ready(function() {
        $("#right-side").delay(1000).fadeIn(500); 
});  


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
$("#proPlanModal .close").click(function () {
    setTimeout(function () {
    $("#pro-plan-success").fadeOut();
    $("#pro-plan-error").fadeOut();
    $("#pro-plan-waitlist").fadeIn();
    $('#pro-plan-waitlist input[name=pro_plan_name]').val('');
    $('#pro-plan-waitlist input[name=pro_plan_email]').val(''); 
    $("#pro-plan-header").fadeIn();
    }, 1000);
});  
$("#ninjaPlanModal .close").click(function () {
    setTimeout(function () {
    $("#ninja-plan-success").fadeOut();
    $("#ninja-plan-error").fadeOut();
    $("#ninja-plan-waitlist").fadeIn();
    $('#ninja-plan-waitlist input[name=ninja_plan_name]').val('');
    $('#ninja-plan-waitlist input[name=ninja_plan_email]').val('');  
    $("#ninja-plan-header").fadeIn();
    }, 1000);
});   
 









