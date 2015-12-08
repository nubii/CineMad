<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$fax = trim(htmlspecialchars(mysqli_real_escape_string($_POST['fax'])));
$address = trim(htmlspecialchars(mysqli_real_escape_string($_POST['address'])));
$telefone = trim(htmlspecialchars(mysqli_real_escape_string($_POST['telefone'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($_POST['content'])));
$email = trim(htmlspecialchars(mysqli_real_escape_string($_POST['email'])));
$hours = trim(htmlspecialchars(mysqli_real_escape_string($_POST['hours'])));
$id = trim(htmlspecialchars(mysqli_real_escape_string($_POST['id'])));


?>

<?php
$query = "UPDATE `examserver49_dk_db`.`contact` SET `content` ='$content', `telefone` = '$telefone', `fax` = '$fax', `email` = '$email', `hours` = '$hours' WHERE `contact`.`id` = '$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_close($connection);

// Redirect to delete.php.
header("location:contactmenu.php");

?>