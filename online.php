<?php 

	// variables for sql connection 
	include('assets/includes/dbconnection.php');

	// select all online users
	$sql = "select username from info where online = 1;";

	// run and save the query
	$result = $con->query($sql);
	
	// if at least 1 user is online then return the username
	if($result->num_rows > 0)
	{
		echo "<div class=\"title\">Online:</div>";
		// output data of each row
	    while($row = $result->fetch_assoc()) 
	    {
	        echo "<span class=\"onlineUser\">" . $row["username"] . "</span>";
	        echo "<br />";
	    }
	}

	// close sql connection
	$con->close();
?>