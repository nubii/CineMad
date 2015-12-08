<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "New User | Admin Panel"); include( 'includes/header.php'); ?>



<main>
    <section class="well well__offset-3">
    	<?php
// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
	$errors = array();

	// perform validations on the form data
	$username = trim(mysqli_real_escape_string($connection, $_POST['user']));
	$password = trim(mysqli_real_escape_string($connection, $_POST['pass']));
	$level = trim(mysqli_real_escape_string($connection, $_POST['level']));
    $iterations = ['cost' => 15];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT, $iterations);

	$query = "INSERT INTO `users` (user, pass, access) VALUES ('{$username}', '{$hashed_password}', '{$level}')";
	$result = mysqli_query($connection, $query);
		if ($result) {
			$message = "<h2>User Created</h2>";
		} else {
			$message = "User could not be created.";
			$message .= "<br />" . mysql_error();
		}
}

if (!empty($message)) {echo "<p>" . $message . "</p>";}
?>
<h2>Create New User</h2>
<div class="wrapper">
<form action="" method="post">
Username:
<input type="text" name="user" maxlength="30" value="" />
<br>
Password:
<input type="password" name="pass" maxlength="30" value="" />
<br>
Level:
<input type="text" name="level" maxlength="10" placeholder="0 or 1" />
<br><br><br>
<input type="submit" name="submit" value="Create" />
</form>
</div>
 </section>
</main>
</body>
</html>
<style>
    .wrapper {
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}

input[type="text"], input[type="password"] {
    float: right;
}

</style>
<?php
if (isset($connection)){mysqli_close($connection);}
?>
