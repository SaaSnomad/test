<?php 

/* Get # of Seller Applications */

function applicationsCount($id){
	$db = new Database;
	$db->query('SELECT * FROM sellers WHERE id = :id');
	$db->bind(':id', $id);
	$rows = $db->resultset();
	// Fet Count
	return $db->rowCount();
}