<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<?php 
		include('assets/includes/header.php');
		$uname = $_SESSION['uName'];

		// variables for sql connection 
		include('assets/includes/dbconnection.php');
	
		// select first name, last name of user 
		$sql = "select fName, lName from info where username = '$uname';";
	
		// run and save query
		$result = $con->query($sql);
	
		if($result->num_rows == 1)
		{
			// update fname and lname if any changes were made
			while($row = $result->fetch_assoc())
			{
				$_SESSION['fName'] = $row["fName"];
				$_SESSION['lName'] = $row["lName"];
			}
		}
	
		// close sql connection
		$con->close();
	
		// retrieve first name and last name of user from session array
		$fname = $_SESSION['fName'];
		$lname = $_SESSION['lName'];
	?>
				<!-- favicon img -->
				<!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css"/> -->
		<link rel="stylesheet" type="text/css" href="css/style1.css"/>
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />


		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--animate.css-->
		<link rel="stylesheet" href="assets/css/animate.css" />

		<!--hover.css-->
		<link rel="stylesheet" href="assets/css/hover-min.css">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="assets/css/datepicker.css" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

		<!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="assets/css/bootsnav.css"/>

		<!--style.css-->
		<link rel="stylesheet" href="assets/css/style.css" />

		<!--responsive.css-->
		<link rel="stylesheet" href="assets/css/responsive.css" />

		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/chat.js"></script>

	</head>
	<body id="chatPage">
		

		<div id="container">
			<div id="online"></div>
			<div id="chatbox" onmouseover="disableAutoScroll()" onmouseout="enableAutoScroll()"></div>
		</div>

		<div id="chatContainer">
			<form id="message" action="">
				<input type="text" id="chat" name="chat" placeholder="Enter your message here..." />
				<input type ="submit" id="submit" name="submit" value="Send" />
			</form>
		</div>

		<div id="img-upload">
			<form id="uploader" action="" method="post" enctype="multipart/form-data">
				<label for="fileToUpload">
				    <img src="images/upload_img_btn.png">
				</label>
			    <input type="file" name="fileToUpload" id="fileToUpload">
			    <input type="submit" value="Upload" id="upload">
			</form>
			<br />
			<span id="fileDetails">Please select a file (< 2MB)</span>
		</div>

		<br />
		<br />
		<br />
		
		<?php include('assets/includes/footer.php');?>
	</body>
</html>