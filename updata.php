<?php
// Include PHPMailer classes
include '../rudri/PHPMailer/src/Exception.php';
include '../rudri/PHPMailer/src/PHPMailer.php';
include '../rudri/PHPMailer/src/SMTP.php';

$con = mysqli_connect("localhost", "root", "", "router");
if (mysqli_connect_errno()) {
    echo "Connection Failed: " . mysqli_connect_error();
    exit();
}

// Start session and error reporting
session_start();
error_reporting(0);

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data and sanitize inputs
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $on_or_around = mysqli_real_escape_string($con, $_POST['onoraround']);
    $days_to_stay = isset($_POST['daytostay']) ? (int)$_POST['daytostay'] : 0;
    $adults = isset($_POST['person']) ? (int)$_POST['person'] : 0;
    $children = isset($_POST['child']) ? (int)$_POST['child'] : 0;
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $interested_places = isset($_POST['interested_place']) ? implode(", ", $_POST['interested_place']) : '';

    // Insert data into the database
    $query = "INSERT INTO travel_plans (name, email, phone, city, interested_places, on_or_around, days_to_stay, adults, children, travel_plan)
              VALUES ('$name', '$email', '$phone', '$city', '$interested_places', '$on_or_around', $days_to_stay, $adults, $children, '$message')";

    if (mysqli_query($con, $query)) {
        // Record inserted, now send the email
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';               // SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'routerealm@gmail.com';     // SMTP username
            $mail->Password = 'vvkairbogvbggxek';         // SMTP password
            $mail->SMTPSecure = 'ssl';                    // Enable SSL encryption
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('routerealm@gmail.com', 'Route Realm Team');
            $mail->addAddress($email, $name);             // Recipient

            // Email content
            $mail->isHTML(true);                          // Set email format to HTML
            $mail->Subject = 'Thank you for your considering us!';
            $mail->Body = "Dear $name,<br>We have received your inquiry. Our team will contact you shortly!<br><br>"
                        . "Here's what you've shared:<br>"
                        . "Phone: $phone<br>"
                        . "City: $city<br>"
                        . "Places of Interest: $interested_places<br>"
                        . "Stay Duration: $days_to_stay days<br>"
                        . "<br>Warm regards,<br>Route Realm Team";
            $mail->AltBody = "Dear $name,\nWe have received your inquiry. Our team will contact you shortly!"
                           . "\n\nWarm regards,\nRoute Realm Team";

            // Send the email
            $mail->send();
            exit();
        } catch (Exception $e) {
            echo "Error in sending email: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
