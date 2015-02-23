<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments provided! go back to the <a href=\"http://www.isabelsyachts.pt\">main page</a>.";
	return false;
   }
	
require_once 'swift/lib/swift_required.php';

// parse input
$name = $_POST['name'];
$email_from = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to_email='isabelsyachts@gmail.com';
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
  ->setUsername($to_email)
  ->setPassword('isabels01');

$mailer = Swift_Mailer::newInstance($transport);

// Create the email and send the message
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_from\n\nPhone: $phone\n\nMessage:\n$message";
mail($to,$email_subject,$email_body,$headers);

$message = Swift_Message::newInstance($email_subject)
  ->setFrom(array($email_from => $name))
  ->setTo(array($to_email))
  ->setBody($email_body);

/*$date.timezone = ;*/
date_default_timezone_set('Europe/Lisbon');
$result = $mailer->send($message);

return true;			
?>