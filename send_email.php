<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php file of PHPMailer

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Email recipient
$recipient = "cseaiml37@gmail.com"; // Replace with your email address

// Instantiate PHPMailer
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cseaiml37@gmail.com'; // Your Gmail email address
    $mail->Password = 'cseaiml@3742.in'; // Your Gmail password
    $mail->SMTPSecure = 'tls'; // Enable TLS encryption
    $mail->Port = 587; // TCP port to connect to

    // Sender and recipient settings
    $mail->setFrom($email, $name);
    $mail->addAddress($recipient);

    // Email content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    // Send email
    $mail->send();
    echo "<p>Your message has been sent successfully. Thank you for contacting us!</p>";
} catch (Exception $e) {
    echo "<p>Oops! Something went wrong and we couldn't send your message. Please try again later.</p>";
    // Uncomment the following line for debugging purposes
    // echo "Error: " . $mail->ErrorInfo;
}

?>
