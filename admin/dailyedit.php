<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$title = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['title'])));
$day = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['day'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['content'])));
$dailyspecial_id = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['dailyspecial_id'])));

?>

<?php
$query = "UPDATE `examserver49_dk_db`.`dailyspecial` SET `title` = '$title', `blurb` = '$content', `day` = '$day' WHERE `dailyspecial`.`dailyspecial_id` = '$dailyspecial_id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_close($connection);

// Redirect to delete.php.
header("location:dailyspecial.php");

?>
