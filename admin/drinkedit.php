<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$title = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['title'])));
$price = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['price'])));
$suggested = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['suggested'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['content'])));
$drink_id = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['drink_id'])));


?>

<?php
$query = "UPDATE `examserver49_dk_db`.`drinkItems` SET `title` = '$title', `price` = '$price', `blurb` = '$content', `dish` = '$suggested' WHERE `drinkItems`.`drink_id` = '$drink_id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_close($connection);

// Redirect to drinkmenu.php.
header("location:drinkmenu.php");

?>
