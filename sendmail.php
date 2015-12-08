<?php
$mymail = "nubii123@gmail.com";
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$regexp = "/^[^0-9][A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";

if (!preg_match($regexp,$_POST['email']))
	  {
		  header("Location:http://cinemad2-nubii123.c9.io/contact.php?error=1");}
elseif (empty($email) || empty($message) || empty($subject)) 
	{
		header("Location:http://cinemad2-nubii123.c9.io/contact.php?error=2");}

else
{
	$body = "$message\n\nE-mail: $email";
	mail($mymail,$subject,$body,"From: $email\n");

	header("Location: http://cinemad2-nubii123.c9.io/contact.php?done=1");;
}
?>
