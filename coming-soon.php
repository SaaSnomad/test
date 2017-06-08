<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO coming_soon_subscribers (coming_soon_email, coming_soon_country) VALUES (:coming_soon_email, :coming_soon_country)");

// Bind Values

$db->bind(':coming_soon_email', $_POST['coming_soon_email']);
$db->bind(':coming_soon_country', $_POST['coming_soon_country']); 

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You have successfully subscribed to get notified about new SaaSNomad feature. We will get back to you as soon as it is done.']);
} else {
	echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);}
?>