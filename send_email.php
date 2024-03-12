<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require './phpmailer\src\Exception.php';
require './phpmailer\src\PHPMailer.php';
require './phpmailer\src\SMTP.php';

if (isset($_POST["Send"])) {
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
}
?>