<?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$menu = "SELECT * FROM  contact";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
?>


<?php
$mymail = $row['email'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$regexp = "/^[^0-9][A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";

if (!preg_match($regexp,$_POST['email']))
	  {
		  header("https://limitless-brushlands-5886.herokuapp.com/contact.php?error=1");}
 elseif (empty($email) || empty($message) || empty($subject)) 
	{
		header("Location:https://limitless-brushlands-5886.herokuapp.com/contact.php?error=2");}

 elseif ($_POST['submit'])
{
	$body = "$message\n\nE-mail: $email";
	mail($mymail,$subject,$body,"From: $email\n");

		header("Location:https://limitless-brushlands-5886.herokuapp.com/contact.php?done=1");;
}
?>