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
$menu_url = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['menu_url'])));


?>

<?php
$query = "INSERT INTO `examserver49_dk_db`.`menuItems` (`menu_id`, `title`, `price`, `blurb`, `drink`, `img`, `menu_url`) VALUES (NULL, '$title', '$price', '$content', '$suggested', '', '$menu_url')";
$result = mysqli_query($connection, $query) or die('Error, query failed');




mysqli_close($connection);

// Redirect to menu.php.
header("location:menu.php");
?>
