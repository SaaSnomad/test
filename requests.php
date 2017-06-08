<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO requests (request_name, request_email, request_country, request_id) VALUES (:request_name, :request_email, :request_country, :request_id)");

// Bind Values

$db->bind(':request_name', $_POST['request_name']);
$db->bind(':request_email', $_POST['request_email']); 
$db->bind(':request_country', $_POST['request_country']);
$db->bind(':request_id', $_POST['request_id']);


if($db->execute()){
    echo json_encode(["title"=>"Congrats!", "message"=>"You have successfully requested Seller's contact. We will get back to you within 24 hours."]);
} else {
    echo json_encode(["title"=>"Sorry!", "message"=>"Could not process your request. Please try again later."]);
}
?>