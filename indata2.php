<?php

// include './PHPMailer/src/Exception.php';
// include './PHPMailer/src/PHPMailer.php';
// include './PHPMailer/src/SMTP.php';
include '../rudri/PHPMailer/src/Exception.php';
include '../rudri/PHPMailer/src/PHPMailer.php';
include '../rudri/PHPMailer/src/SMTP.php';

$con=mysqli_connect("localhost", "root", "", "router");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

session_start();
error_reporting(0);

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$mess = $_POST['message'];

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'routerealm@gmail.com'; // SMTP username
    $mail->Password = 'vvkairbogvbggxek'; // SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('routerealm@gmail.com', 'Team Route Realm');
    $mail->addAddress($email); // Add a recipient

    //Content
    $query = "INSERT INTO `contact`(`fname`, `lname`, `email`, `phone`, `message`) VALUES ('$fname','$lname','$email','$phone','$mess')";
    $mail->isHTML(true); // Set email format to HTML    
    $mail->Subject = ' Information on Inquiry from Route Realm!';
    $mail->Body = "Dear $fname $lname,We got your message : $mess phone number: $phone our team will shortly contact you...!! Also Great news! Your subscription to  is now active, unlocking exclusive updates tailored just for you!. Here's what's in store: Stay tuned for valuable insights to make your tour and travel elegantly decorated! Warm regards, Route Realm Team.";
    $mail->AltBody = "Dear $name,We got your inquiry our team will shortly contact you...!! Also Great news! Your subscription to  is now active, unlocking exclusive updates tailored just for you!. Here's what's in store: Stay tuned for valuable insights to make your tour and travel elegantly decorated! Warm regards, Route Realm Team.";
    $mail->send();
    // echo $query;
    if(mysqli_query($con, $query)){
        echo "New record created successfully";
        header('Location: home.php?type=success');
    }else{
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }   
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // header('Location: home.php?type=fail');
    echo $e;
}  
?>