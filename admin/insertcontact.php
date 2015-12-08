<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$fax = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['fax'])));
$address = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['address'])));
$telefone = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['telefone'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['content'])));
$email = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email'])));
$hours = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['hours'])));
$id = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['id'])));


?>

<?php
$query = "INSERT INTO `examserver49_dk_db`.`contact` SET `content` = '$content', `address` = '$address', `telefone` = '$telefone', `fax` = '$fax', `email` = '$email', `hours` = '$hours'";
$result = mysqli_query($connection, $query) or die('Error, query failed');




mysqli_close($connection);

// Redirect to menu.php.
header("location:contactmenu.php");
?>
