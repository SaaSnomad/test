
$(document).ready(function() {

	// process the form
	showNews();

	// Add News
	$(document).on('submit', '#add-news', function() {
// preloader 


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		$.post("add_news_to_db.php", $(this).serialize())
			.done(function(data){
				console.log(data);
				$('#add-news-modal').removeAttr( "open");
				$('#add-news-modal').attr("closed");
				showNews();
			});
			return false;
		});
}); 

function showNews(){
	console.log('Showing news...');
    $('#page-content').load('news.php');
}