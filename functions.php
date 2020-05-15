<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

#send mail function
function sendemail($to, $from, $fromName, $subject, $body) {

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'smtpout.secureserver.net';
  $mail->Port = 80;
  $mail->SMTPAuth = true;
  $mail->Username = 'your@mail.com'; // it should be your gmail id or ur domain specific mail id
  $mail->Password = 'abcnn232'; 
  $mail->setFrom($from, $fromName);
  $mail->addAddress($to);
  $mail->Subject = $subject;
  $mail->isHTML(true);
  $mail->Body = $body;
  if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
  } else {
    return true;
  }
}


#send mail function
function sendemail1($to, $from, $cc, $fromName, $subject, $body) {

  $mail = new PHPMailer;
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'smtpout.secureserver.net';
  $mail->Port = 80;
  $mail->SMTPAuth = true;
  $mail->Username = 'your@mail.com'; // it should be your gmail id or ur domain specific mail id
  $mail->Password = 'abcnn232'; 
  $mail->setFrom($from, $fromName);
  $mail->addAddress($to);
  $mail->AddCC($cc);
  $mail->Subject = $subject;
  $mail->isHTML(true);
  $mail->Body = $body;
  if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    return false;
  } else {
    return true;
  }
}


