<?php

include 'assets/includes/dbconnection.php';

// start session
session_start();

// get username from session array
$user = $_SESSION['uName'];



// set user's online status to 0
$update = "update info set online = 0 where username = '$user';";

// run the update query
$con->query($update);

// select the users who are online
$sql = "select username from info where online = 1;";

// run and save the query
$result = $con->query($sql);

// if no users are online then overwrite chat log file
if($result->num_rows == 0)
{
    $src = "assets/data/log.txt";
    file_put_contents($src, "");
}

// close sql connection
$con->close();

// unset all session variables
$_SESSION = array();

// destroy the session
session_destroy();

// redirect to index
header("location: index.php");

?>