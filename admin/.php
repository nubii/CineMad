<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>


<?php
$title = $_POST['title'];
$price = $_POST['price'];
$suggested = $_POST['suggested'];
$content = $_POST['content'];
$menu_id = $_POST['menu_id'];
?>

<?php
$query = "UPDATE `examserver49_dk_db`.`menuItems` SET `title` = '$title', `price` = '$price', `blurb` = '$content', `drink` = '$suggested' WHERE `menuItems`.`menu_id` = '$menu_id'";
$result = mysqli_query($connection, $query) or die('Error, query failed');



mysqli_close($connection);

// Redirect to delete.php.
header("location:menu.php");

?>
