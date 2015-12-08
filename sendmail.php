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
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$message = $_POST['message'];

$regexp = "/^[^0-9][A-z0-9_-]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_-]+)*[.][A-z]{2,4}$/";

if (!preg_match($regexp,$mymail))
	  {
		  header("Location: http://cinemad2-nubii123.c9.io/contact.php?error=1");
		 }
 elseif (empty($firstname) || empty($message) || empty($lastname)) 
	{
		header("Location: http://cinemad2-nubii123.c9.io/contact.php?error=2&'$lastname'");
	}

 elseif ($_POST['submit'])
{
	echo "hallojsa3";
	$body = "$message\n\nName: $firstname $lastname";
	mail($mymail,$subject,$body,"From: $email\n");

		header("Location: http://cinemad2-nubii123.c9.io/contact.php?done=1");;
}
?>