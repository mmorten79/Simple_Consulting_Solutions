<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent= "From: $name \n Message: $message";
$recipient = "simplecs4m@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$errors = '';

	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
		echo "\n Error: all of the boxes are required  \n Please try again .";
	}



	if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email)){

		echo "\n Error: Invalid email address";
	}
	else{
	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	header('Location: contact-form-thank-you.html');
         }
	?>
