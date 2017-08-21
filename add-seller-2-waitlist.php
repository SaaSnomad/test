<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO sellers_2_waitlist (waitlist2_email, waitlist2_country) VALUES (:waitlist2_email, :waitlist2_country)");

// Bind Values

$db->bind(':waitlist2_email', $_POST['waitlist2_email']);
$db->bind(':waitlist2_country', $_POST['waitlist2_country']);

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You are successfully added to Wait List.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>