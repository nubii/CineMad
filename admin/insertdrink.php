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
$menu_id = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['drink_id'])));
$menu_url = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['drink_url'])));



?>

<?php
$query = "INSERT INTO `examserver49_dk_db`.`drinkItems` (`drink_id`, `title`, `price`, `blurb`, `dish`, `img`, `drink_url`) VALUES (NULL, '$title', '$price', '$content', '$suggested', '', '$menu_url')";
$result = mysqli_query($connection, $query) or die('Error, query failed');




mysqli_close($connection);

// Redirect to menu.php.
header("location:drinkmenu.php");
?>
