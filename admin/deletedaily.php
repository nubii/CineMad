<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>
<?php
$id=$_GET['id'];
$query = "SELECT * FROM dailyspecial WHERE dailyspecial_id='$id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');

mysqli_query($connection, "DELETE FROM dailyspecial WHERE dailyspecial_id='$id'");
	while ($row = mysqli_fetch_array($result)){
	$file = "../img/".	$row["filename"];
	}
    unlink ($file);

mysqli_close($connection);

// Redirect to delete.php.
header("location:dailyspecial.php");

?>
