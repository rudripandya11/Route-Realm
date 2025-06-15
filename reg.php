<?php

	// variables for sql connection 
	include('assets/includes/dbconnection.php');

	// establish sql connection

	// retrieve all details from POST array
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$mail = $_POST['email'];
	$num = $_POST['phone_num'];
	$sex = $_POST['gender'];
	$dob = $_POST['DOBYear']. "-". $_POST['DOBMonth'] ."-". $_POST['DOBDay'];
	$country = $_POST['country'];
	$uname = $_POST['username'];
	$pass = $_POST['password'];

	// insert user details in the database
	$sql = "INSERT INTO info(fName, lName, email, phonenum, sex, dob, Country, username, password, online) VALUES('$fname','$lname','$mail','$num','$sex','$dob','$country', '$uname','$pass',0);";

	// if insertion is successful then return true
	if($con->query($sql) === TRUE)
	{
		echo "true";
	}else{
		// echo "Error: " . $sql . "<br>" . $con->error;
		echo "false";
	}
	// close sql connection
	$con->close();

?>