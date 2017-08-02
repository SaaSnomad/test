<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO pro_plan_waitlist (pro_plan_name, pro_plan_email, pro_plan_country) VALUES (:pro_plan_name, :pro_plan_email, :pro_plan_country)");

// Bind Values

$db->bind(':pro_plan_name', $_POST['pro_plan_name']); 
$db->bind(':pro_plan_email', $_POST['pro_plan_email']);
$db->bind(':pro_plan_country', $_POST['pro_plan_country']);

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You are successfully added to Wait List.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>