<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('avinashpawar059@gmail.com', 'Avinash Pawar');
$mail->addAddress('avinash.pawar@startupwala.com', 'My Friend');
$mail->IsSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'avinashpawar059@gmail.com';
$mail->Password = 'Myyahoo321';
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
