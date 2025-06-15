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

<!DOCTYPE html>
<html lang="en">
<head>
<?php

	// start session
	session_start();

	include "header.php";
	include "assets/includes/dbconnection.php";

	// retrieve username, first and last name of user from session array
	$uname = $_SESSION['uName'];
	$fname = $_SESSION['fName'];
	$lname = $_SESSION['lName'];
?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Travel Plans</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


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
    <?php include('assets/includes/footer.php');?>
<?php
// Close the database connection
mysqli_close($con);
?>