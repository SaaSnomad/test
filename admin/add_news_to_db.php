<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO news (news_title, news_summary, news_date_posted, news_source, news_link) VALUES (:news_title, :news_summary, :news_date_posted, :news_source, :news_link)");

// Bind Values

$db->bind(':news_title', $_POST['news_title']);
$db->bind(':news_summary', $_POST['news_summary']); 
$db->bind(':news_date_posted', $_POST['news_date_posted']); 
$db->bind(':news_source', $_POST['news_source']);
$db->bind(':news_link', $_POST['news_link']);

if($db->execute()){
    echo "Congrats! News has been successfully saved in DB.";
} else {
    echo "Sorry! Could not process your request. Please try again later.";
}
?>