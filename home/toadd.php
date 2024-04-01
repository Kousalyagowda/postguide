<?php
include '../config.php';
$admin = new Admin();
// Get the user id
$user_id = $_REQUEST['user_id'];

// Database connection


if ($user_id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	

    $stmt=$admin->ret("SELECT * FROM `postoffice` WHERE `pincode`='$user_id'");


	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	// Get the first name
	$first_name = $row['address'];

	// Get the first name
	$last_name = $row['postbranch'];
}

// Store it in a array
$result = array("$first_name", "$last_name");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>