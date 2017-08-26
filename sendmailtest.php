<?php
require 'PHPMailerAutoload.php';

$mail = new PHPMailer();  // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->Username = 'avinashpawar059@gmail.com';  
    $mail->Password = 'Myyahoo321';           
    $mail->SetFrom('avinashpawar059@gmail.com', 'Avinash Pawar');
    $mail->Subject = 'Regarding PHP Mailer Test';
    $mail->Body = 'Kindly check is it working or not';
    $mail->AddAddress('cooldudester7276@gmail.com');
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo; 
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
?>
