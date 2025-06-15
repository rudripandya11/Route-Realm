<?php

	// start session
	session_start();

	// if either username or password field is empty then return false
	if(!isset($_POST['username']) || !isset($_POST['password'])) 
	{
		echo "false";
	}
	// otherwise do the following
	else
	{
		// variables for sql conection 
		include('assets/includes/dbconnection.php');

		// establish sql conection

		// retrieve username and password from POST array
		$uname = $_POST['username'];
		$pass = $_POST['password'];

		// select first name, last name and online status of user
		$sql = "select fName, lName, online from info where username = '$uname' and password = '$pass';";

		// run and save query
		$result = $con->query($sql);

		// if result contains single row then retrieve the first name, last name and online status of user
		//alter nate version of if($result->num_rows == 1)
		if($result->num_rows == 1)
		{
			while($row = $result->fetch_assoc()) 
		    {
		        $fname  = $row["fName"];
		        $lname  = $row["lName"];
		    	$online	= $row["online"];
		    }
		    // if user is already logged in (i.e. online = 1), then return online
		    if($online == 1){
		    	echo "online";
		    }else{
		    	$_SESSION["fName"] = $fname;
		    	$_SESSION["lName"] = $lname;
		    	$_SESSION["uName"] = $uname;
				$update = "update info set online = 1 where username = '$uname'";
				$con->query($update);
				
				echo "true";
		    }
		}
		// return false if query does not return a single row
		else
			echo "false";
			
	}
	
	// close sql conection
	$con->close();
?>