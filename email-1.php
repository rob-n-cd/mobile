<?php
$to = 'dist@gmail.com';
$subject = 'My test email';
$message = 'Hi, my message!';
$headers = 'From: Angamaly@depaul.edu.in' . "\r\n" .
'MIME-Version: 1.0' . "\r\n" .
'Content-type: text/html; charset=utf-8';
if(mail($to,$subject,$message,$headers))
echo "Email sent";
else
echo "Email sending failed";
?>  