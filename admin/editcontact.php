<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$fax = $_POST['fax'];
$address = $_POST['address'];
$telefone = $_POST['telefone'];
$content = $_POST['content'];
$email = $_POST['email'];
$hours = $_POST['hours'];
$id = $_POST['id'];
?>

<?php
$query = "UPDATE `examserver49_dk_db`.`contact` SET `content` ='$content', `telefone` = '$telefone', `fax` = '$fax', `email` = '$email', `hours` = '$hours' WHERE `contact`.`id` = '$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_close($connection);

// Redirect to delete.php.
header("location:contactmenu.php");

?>