<?php
//define the receiver of the email
$to = 'jamesbrnhll@gmail.com';
//define the subject of the email
$subject = $_POST['subject'];
$sender = $_POST['email']; 
//define the message to be sent. Each line should be separated with \n
$message = $_POST['message'];
 //define the headers we want passed. Note that they are separated with \r\n
$headers = "From: $sender\r\nReply-To: $sender";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//send the email
$mail_sent = @mail( $to, $subject, $message, $headers );
//if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
if($subject != "")
echo $mail_sent;

?>


<html>
<body>
<form action="contact_form.php" method="post">
Your email address: <br /><input name="email"></input><br />
Subject:<br /> <input name="subject"></input><br />
Message: <br /><textarea cols="50" rows="10" name="message"></textarea>
</form>