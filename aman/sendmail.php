<?php
// Load PHPMailer library
require_once 'phpmailer/PHPMailerAutoload.php';

// Get form data
$name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$subject = $_POST['contactSubject'];
$message = $_POST['contactMessage'];

// Create PHPMailer object
$mail = new PHPMailer;

// Set up SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'vidhyathakur1976@gmail.com';
$mail->Password = '@Vidhya1976';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set up email message
$mail->setFrom($email, $name);
$mail->addAddress('vidhyathakur1976@gmail.com');
$mail->Subject = $subject;
$mail->Body = $message;

// Send email
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}
?>
