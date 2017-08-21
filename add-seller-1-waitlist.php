<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers_1_waitlist (waitlist1_email, waitlist1_country) VALUES (:waitlist1_email, :waitlist1_country)");

// Bind Values

$db->bind(':waitlist1_email', $_POST['waitlist1_email']);
$db->bind(':waitlist1_country', $_POST['waitlist1_country']);

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You are successfully added to Wait List.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>