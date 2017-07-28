<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO contact_us (contact_msg, contact_role, contact_email, contact_country) VALUES (:contact_msg, :contact_role, :contact_email, :contact_country)");

// Bind Values

$db->bind(':contact_msg', $_POST['contact_msg']); 
$db->bind(':contact_role', $_POST['contact_role']);
$db->bind(':contact_email', $_POST['contact_email']);
$db->bind(':contact_country', $_POST['contact_country']);

if($db->execute()){
    echo json_encode(['title'=>'Thank you!', 'message'=>'We have received your enquiry and will respond to you within 24 hours.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>