<?php
require 'functions.php';

$fromname = 'PhpMyPassion.com';
$from = 'support@phpmypassion.com'; 
$to = 'to@gmail.com';
$cc = 'cc@gmail.com';

$subject = 'Hi!,<br/><br/>';
$subject .="Thanks for shopping with us, your box of good health is on it's way to you. Stay Healthy!.";
$thanksemail = "user@gmail.com"; // it could be frontend user mail id. who is filling form
$message2 = 'Thanks for your order for a box of good health';
$res = sendemail1($to, $from, $cc, $fromname, $subject, $message);
$res1 = sendemail($thanksemail, $from, $fromname, $subject, $message2);
?>
