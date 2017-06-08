<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO news_subscribers (news_email, news_country) VALUES (:news_email, :news_country)");

// Bind Values

$db->bind(':news_email', $_POST['news_email']); 
$db->bind(':news_country', $_POST['news_country']);

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You have successfully subscribed for the latest articles on SaaS M&A. We will send it to you weekly. Enjoy!']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>