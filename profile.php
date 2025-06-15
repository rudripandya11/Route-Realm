<?php

	// start session
	session_start();

	include "assets/includes/header.php";
	include "assets/includes/dbconnection.php";

	// retrieve username, first and last name of user from session array
	$uname = $_SESSION['uName'];
	$fname = $_SESSION['fName'];
	$lname = $_SESSION['lName'];
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
	</head>
	<body id="chatPage">
		<div id="bar">
			<span class="right">
				<div class="dropdown">
					<span class="droplink" style="color:white;"><?php echo "$fname $lname"; ?></span>
					<div class="dropdown-content">
						<a href="chat.php">Public Chat</a>
						<a href="home.php">Back to Home</a>
						<a href="logout1.php">Logout</a>
					</div>
				</div>
			</span>
		</div>
		<br />
		<?php
			// select all data of current user
			$sql = "select * from info where username = '$uname'";

			// run and save query
			$result = $con->query($sql);

			// If exactly 1 record is returned, then update the session array accordingly
			if($result->num_rows == 1)
			{
				while($row = $result->fetch_assoc())
				{
					$_SESSION["email"]   = $row["email"];
					$_SESSION["pnum"]    = $row["phonenum"];
					$_SESSION["sex"]     = $row["sex"];
					$_SESSION["dob"]     = $row["dob"];
					$_SESSION["country"] = $row["Country"];
				}
			}

			// print all the data in a table with option to update
			echo "<table id=\"tbl\" align=\"center\"><tr>";
			echo "<th colspan=\"2\">Profile</th></tr><tr>";
			echo "<td><b>Username:</b> </td><td>$uname</td></tr><tr>";
			echo "<td><b>First Name:</b> </td><td>$fname</td></tr><tr>";
			echo "<td><b>Last Name:</b> </td><td>$lname</td></tr><tr>";
			echo "<td><b>Email:</b> </td><td>" . $_SESSION["email"] . "</td></tr><tr>";
			echo "<td><b>Phone no.:</b> </td><td>" . $_SESSION["pnum"] . "</td></tr><tr>";
			echo "<td><b>Sex:</b> </td><td>" . $_SESSION["sex"] . "</td></tr><tr>";
			echo "<td><b>DOB:</b> </td><td>" . $_SESSION["dob"] . "</td></tr><tr>";
			echo "<td><b>Country:</b> </td><td>" . $_SESSION["country"] . "</td></tr><tr>";
			echo "<td colspan=\"2\" align=\"center\"><br /><br /><span class=\"link\"><a href=\"edit.php\">Edit Profile</a></span></td></tr></table>";
		?>

<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "router");
if (mysqli_connect_errno()) {
    echo "Connection Failed: " . mysqli_connect_error();
    exit();
}

// Fetch all records from the travel_plans table
$query = "SELECT * FROM travel_plans";
$result = mysqli_query($con, $query);
?>

<table style="height:300px;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>City</th>
                <th>Interested Places</th>
                <th>On or Around</th>
                <th>Days to Stay</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Travel Plan</th>
                <th>Submitted On</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                // Output each row from the database
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['phone'] . "</td>
                            <td>" . $row['city'] . "</td>
                            <td>" . $row['interested_places'] . "</td>
                            <td>" . $row['on_or_around'] . "</td>
                            <td>" . $row['days_to_stay'] . "</td>
                            <td>" . $row['adults'] . "</td>
                            <td>" . $row['children'] . "</td>
                            <td>" . $row['travel_plan'] . "</td>
                            <td>" . $row['created_at'] . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No travel plans found</td></tr>";
            }
            ?>
        </tbody>
    </table>


	</body>
</html>