<?php
$mymail = "fake@mail.com";
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$regexp = "/^[^0-9][A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";

if (!preg_match($regexp,$_POST['email']))
	  {
		  header("Location:http://tbinger.dk/wd/index-5.php?error=1");}
elseif (empty($email) || empty($message) || empty($subject)) 
	{
		header("Location:http://tbinger.dk/wd/index-5.php?error=2");}

elseif ($_POST['submit'])
{
	$body = "$message\n\nE-mail: $email";
	mail($mymail,$subject,$body,"From: $email\n");

	header("Location: http://tbinger.dk/wd/index-5.php?done=1");;
}
?>
