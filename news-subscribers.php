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
    echo "You are subscribed";
} else {
    echo "Could not process your info";
}
?>