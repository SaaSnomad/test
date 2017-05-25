<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers (seller_name, seller_email, seller_country, seller_industry, seller_mrr) VALUES (:seller_name, :seller_email, :seller_country, :seller_industry, :seller_mrr)");

// Bind Values

$db->bind(':seller_name', $_POST['seller_name']);
$db->bind(':seller_email', $_POST['seller_email']); 
$db->bind(':seller_country', $_POST['seller_country']); 
$db->bind(':seller_industry', $_POST['seller_industry']);
$db->bind(':seller_mrr', $_POST['seller_mrr']); 

if($db->execute()){
    echo "Your application has been successfully sent for review. We will get back to you within 24 hours. ";
} else {
    echo "Could not add your offer";
}
?>