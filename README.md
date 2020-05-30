# phpmailer
This repository is for sending mail using php mailer


# Clone this repository 
git clone https://github.com/phpmypassion/phpmailer.git

# Run
Composer update

# funtion.php has send_mail function
you have to change below perameters.
 * $mail->Host
 * $mail->Username
 * $mail->Password

# Now just include this url anywhere in your project and call below function
sendemail1($to, $from, $cc, $fromname, $subject, $message);
