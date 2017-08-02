<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO ninja_plan_waitlist (ninja_plan_name, ninja_plan_email, ninja_plan_country) VALUES (:ninja_plan_name, :ninja_plan_email, :ninja_plan_country)");

// Bind Values

$db->bind(':ninja_plan_name', $_POST['ninja_plan_name']); 
$db->bind(':ninja_plan_email', $_POST['ninja_plan_email']);
$db->bind(':ninja_plan_country', $_POST['ninja_plan_country']);

if($db->execute()){
    echo json_encode(['title'=>'Congrats!', 'message'=>'You are successfully added to Wait List.']);
} else {
    echo json_encode(['title'=>'Sorry!', 'message'=>'Could not process your request. Please try again later.']);
}
?>