<?php include('core/init.php'); ?>

<?php
// Create DB Object
$db = new Database;
// Run Query
$db->query("INSERT INTO calculator (calculator_region, calculator_mrr, calculator_mrr_growth, calculator_margin, calculator_burn, calculator_email, range_from, range_to, calculator_location) VALUES (:calculator_region, :calculator_mrr, :calculator_mrr_growth, :calculator_margin, :calculator_burn, :calculator_email, :range_from, :range_to, :calculator_location)");
// Bind Values
$db->bind(':calculator_region', $_POST['calculator_region']);
$db->bind(':calculator_mrr', $_POST['calculator_mrr']); 
$db->bind(':calculator_mrr_growth', $_POST['calculator_mrr_growth']); 
$db->bind(':calculator_margin', $_POST['calculator_margin']);  
$db->bind(':calculator_burn', $_POST['calculator_burn']); 
$db->bind(':calculator_email', $_POST['calculator_email']); 
$db->bind(':range_from', $_POST['range_from']); 
$db->bind(':range_to', $_POST['range_to']);  
$db->bind(':calculator_location', $_POST['calculator_location']);  


if($db->execute()){
    echo "Congrats!";
} else {
    echo "Sorry!";
}
?>