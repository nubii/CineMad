<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$title = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['title'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['content'])));
$news_id = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['news_id'])));
?>

<?php
$query = "UPDATE `examserver49_dk_db`.`news` SET `title` = '$title', `desc` = '$content' WHERE `news`.`news_id` = '$news_id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');


mysqli_close($connection);

// Redirect to delete.php.
header("location:news.php");

?>
