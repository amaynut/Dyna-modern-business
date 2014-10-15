<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
       echo "Tous les champs sont obligatoires";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'said.guerrab@gmail.com';
$email_subject = "Email via Dynagroup-tech.com :  $name";
$email_body = "Vous avez un nouveau message via le formulaire de contact sur Dynagroup-tech.com .\n\n"
    . "Voici son contenu:\n\nName: $name\n\nTéléphone: $phone\n\nEmail: $email_address\n\nMessage:\n$message";
$headers = "From: $email_address\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>