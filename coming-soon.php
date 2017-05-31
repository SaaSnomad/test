<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;

// Run Query
$db->query("INSERT INTO coming_soon (coming_soon_email, coming_soon_country) VALUES (:coming_soon_email, :coming_soon_country)");

// Bind Values

$db->bind(':coming_soon_email', $_POST['coming_soon_email']);
$db->bind(':coming_soon_country', $_POST['coming_soon_country']); 

if($db->execute()){
    echo "You are subscribed";
} else {
    echo "Could not process your info";
}
?>