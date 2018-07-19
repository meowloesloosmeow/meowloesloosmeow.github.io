<?php
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Er mist informatie in de request. Probeer het opnieuw door het formulier volledig in te vullen.";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = 'klaasjanloosmanwerk@gmail.com';
$email_subject = "Website Contact Formulier:  $name";
$email_body = "Je hebt een nieuw bericht vanaf je website.\n\n"."Details:\n\nNaam: $name\n\nE-mailadres: $email_address\n\nTelefoonnummer: $phone\n\nBericht:\n$message";
$headers = "From: noreply@marloesloosman.me\n";
$headers .= "Reply-To: $email_address";
echo "<pre>";
var_dump($_POST);
echo "</pre>";
die;

return mail($to,$email_subject,$email_body,$headers);
