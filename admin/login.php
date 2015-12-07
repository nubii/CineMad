<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
		if (logged_in()) {
		redirect_to("index.php");
	}
    $companyName = "CineMad";
    
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$username = trim(mysqli_real_escape_string($connection, $_POST['user']));
		$password = trim(mysqli_real_escape_string($connection,$_POST['pass']));

		$query = "SELECT id, user, pass FROM users WHERE user = '{$username}' LIMIT 1";
		$result = mysqli_query($connection, $query);
			
			if (mysqli_num_rows($result) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysqli_fetch_array($result);
                if(password_verify($password, $found_user['pass'])){
				    $_SESSION['user_id'] = $found_user['id'];
				    $_SESSION['user'] = $found_user['user'];
				    $_SESSION['user_name'] = $username;
				    redirect_to("index.php");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}}
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
	}
if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>


﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contact-form.css">

    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='../js/device.min.js'></script> 
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./"><?php echo $companyName; ?></a>
                    </h1>
                </div>

                
            </div>
        </div>

    </header>
 


<h2>Please login</h2>
<div class="login">
<form action="" method="post">
<p>Username:</p>
<input type="text" name="user" maxlength="30" value="" />
<p>Password:</p>
<input type="password" name="pass" maxlength="30" value="" />
<p></p>
<input type="submit" name="submit" value="Login" />
</div>
</form>


</body>
</html>
<?php
if (isset($connection)){mysqli_close($connection);}
?>

<style>
	
	.login {
    width: 150px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}

p {
    color: black;
}
</style>