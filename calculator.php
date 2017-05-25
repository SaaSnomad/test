<?php

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['calculatorIndustry']))
		$errors['calculatorIndustry'] = 'Industry is required.';

	if (empty($_POST['calculatorMrr']))
		$errors['calculatorMrr'] = 'MRR is required.'; 

	if (empty($_POST['calculatorMrrGrowth']))
		$errors['calculatorMrrGrowth'] = 'MRR Growth is required.';

	if (empty($_POST['calculatorEmployees']))
		$errors['calculatorEmployees'] = 'Employees number is required.'; 

	if (empty($_POST['calculatorEmail']))
		$errors['calculatorEmail'] = 'Email number is required.'; 

	if (empty($_POST['rangeFrom']))
		$errors['rangeFrom'] = '.'; 

	if (empty($_POST['rangeTo']))
		$errors['rangeTo'] = '.'; 

	if (empty($_POST['calculatorLocation']))
		$errors['calculatorLocation'] = '.'; 

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {

		// if there are no errors process our form, then return a message

		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

		include('core/init.php');


		// Create DB Object
		$db = new Database;

		// Run Query
		$db->query("INSERT INTO calculator (calculatorIndustry, calculatorMrr, calculatorMrrGrowth, calculatorEmployees, calculatorEmail, rangeFrom, rangeTo, calculatorLocation) VALUES (:calculatorIndustry, :calculatorMrr, :calculatorMrrGrowth, :calculatorEmployees, :calculatorEmail, :rangeFrom, :rangeTo, :calculatorLocation)");

		// Bind Values

		$db->bind(':calculatorIndustry', $_POST['calculatorIndustry']);
		$db->bind(':calculatorMrr', $_POST['calculatorMrr']); 
		$db->bind(':calculatorMrrGrowth', $_POST['calculatorMrrGrowth']); 
		$db->bind(':calculatorEmployees', $_POST['calculatorEmployees']);  
		$db->bind(':calculatorEmail', $_POST['calculatorEmail']); 
		$db->bind(':rangeFrom', $_POST['rangeFrom']); 
		$db->bind(':rangeTo', $_POST['rangeTo']);  
		$db->bind(':calculatorLocation', $_POST['calculatorLocation']);  

		


		if($db->execute()){
		    echo "You are subscribed";
		} else {
		    echo "Could not process your info";
		}
	


		// show a message of success and provide a true success variable
		$data['success'] = true;
		$data['message'] = 'Success!';
	}

	// return all our data to an AJAX call
	echo json_encode($data);