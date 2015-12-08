<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$title = trim(htmlspecialchars(mysqli_real_escape_string($_POST['title'])));
$content = trim(htmlspecialchars(mysqli_real_escape_string($_POST['content'])));

?>

<?php
$query = "INSERT INTO `examserver49_dk_db`.`news` (`news_id`, `title`, `desc`, `img`) VALUES (NULL, '$title', '$content', '')";
$result = mysqli_query($connection, $query) or die('Error, query failed');




mysqli_close($connection);

// Redirect to menu.php.
header("location:news.php");
?>
