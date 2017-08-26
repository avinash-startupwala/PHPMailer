<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('avinashpawar059@gmail.com', 'Avinash Pawar');
$mail->addAddress('avinash.pawar@startupwala.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
