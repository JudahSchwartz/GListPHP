<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'tls';//ssl tls
$mail->SMTPAuth = true;
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;//465 587
$mail->Username = 'judahschspam@gmail.com';
$mail->Password = 'hoopdyloopdy';
$mail->setFrom('judahschspam@gmail.com');
$mail->addAddress('judahschspam@gmail.com');
$mail->Subject = 'Hello from PHPMailer!';
$mail->Body = 'This is a test.';
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}

