<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers (seller_email, seller_country, seller_industry, seller_mrr, seller_employees) VALUES (:seller_email, :seller_country, :seller_industry, :seller_mrr, :seller_employees)");

// Bind Values

$db->bind(':seller_email', $_POST['seller_email']); 
$db->bind(':seller_country', $_POST['seller_country']); 
$db->bind(':seller_industry', $_POST['seller_industry']);
$db->bind(':seller_mrr', $_POST['seller_mrr']);
$db->bind(':seller_employees', $_POST['seller_employees']); 


if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'Your application has been successfully sent for review. We will get back to you within 24 hours.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>