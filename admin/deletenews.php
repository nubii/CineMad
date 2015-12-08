<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>
<?php
$id= trim(htmlspecialchars(mysqli_real_escape_string($_GET['id'])));
$query = "SELECT * FROM news WHERE news_id='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');

mysqli_query($connection, "DELETE FROM news WHERE news_id='$id'");
	while ($row = mysqli_fetch_array($result)){
	$file = "../img/".	$row["filename"];
	}
    unlink ($file);

mysqli_close($connection);

// Redirect to delete.php.
header("location:news.php");

?>
