<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

require "vendor/autoload.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;

//smtp settings
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = 'pham.thuongn22@gmail.com';
$mail->Password = 'rvrpxgaejbzzppao';

//email settings
$mail->isHTML(true);
$mail->setFrom($email, $name);
$mail->addAddress('pham.thuongn22@gmail.com');
$mail->Subject = 'New email from your website';
$mail->Body = $message;

$mail->send();
echo "Email Sent!";
?>

<!--use PHPMailer\PHPMailer\PHPMailer;
e PHPMailer\PHPMailer\Exception;
e PHPMailer\PHPMailer\SMTP;

require './phpmailer\src\Exception.php';
require './phpmailer\src\PHPMailer.php';
require './phpmailer\src\SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);

    // Configure the PHPMailer instance
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pham.thuongn22@gmail.com';
    $mail->Password = 'rvrpxgaejbzzppao';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 465;

    // Set the sender, recipient, subject, and body of the message 
    $mail->setFrom('pham.thuongn22@gmail.com');
    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);
    $mail->Subject = 'New email from your website';
    $mail->Body = $_POST["message"];

    // Send the message
    $mail->send();
    echo
    "
    <script>
    alert('Sent Successfully');
    document.location.href = 'index.html';
    </script>
    ";
  }
else {
  echo "Message cannot be sent";
}-->