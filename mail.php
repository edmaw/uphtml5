<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "info@gebnet.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<center>Thank You!" . " We will be in touch soon" . "<br><a href='index.html' style='
		position: relative;
		display: inline-block;
		border-radius: 0.35em;
		color: #fff !important;
		text-decoration: none;
		padding: 0.75em 2.5em 0.75em 2.5em;
		background-color: #8ebebc;
		border: 0;
		cursor: pointer;
		-moz-transition: background-color 0.35s ease-in-out;
		-webkit-transition: background-color 0.35s ease-in-out;
		-ms-transition: background-color 0.35s ease-in-out;
		transition: background-color 0.35s ease-in-out;'> Return Home</a>";
?>