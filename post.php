<?php
 use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
                                                                   //Server settings
    $mail->isSMTP();                                              // Send using SMTP
    $mail->Host       = 'smtp.sendgrid.net';                     // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'johnluic';                            // SMTP username
    $mail->Password   = 'rootmaster44';                       // SMTP password
    $mail->SMTPSecure = 'tls';                               // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                                                          //Recipients
    $mail->setFrom('darkbox@gmail.com', 'Darkbox');      // senter email ...
    $mail->addAddress('maxsadzone@gmail.com' );         // Add a recipient-> your email
                                                       // Name is optional

                                                     // Content
    $mail->isHTML(true);                            // Set email format to HTML
    $mail->Subject = 'Message';
    $mail->Body    = "Name: " . $_POST['name'] . " Email: " . $_POST['email'] . "\n Message : " . $_POST['msg'];
  

    $mail->send();
    header("Location: contact.php");
    $smg = "Thanku...";
    exit();
    } catch (Exception $e) {
      echo  $emg = "Message Not Send...";
}

?>