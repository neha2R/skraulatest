<?php
$to = "muskan.verma@neologicx.com";
$subject = "test mail";


$message = "this is a test mail";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$mail_sent = @mail( $to, $subject, $message, $headers );
echo $mail_sent ? "Mail sent" : "Mail failed";


  ?>
