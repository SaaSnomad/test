<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO buyers (buyer_name, buyer_email, buyer_country) VALUES (:buyer_name, :buyer_email, :buyer_country)");

// Bind Values

$db->bind(':buyer_name', $_POST['buyer_name']);
$db->bind(':buyer_email', $_POST['buyer_email']); 
$db->bind(':buyer_country', $_POST['buyer_country']);

if($db->execute()){
    echo "You are subscribed";
} else {
    echo "Could not process your request";
}
?>