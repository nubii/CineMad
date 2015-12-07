<?php
define("DB_SERVER", "mysql31.unoeuro.com");
define("DB_USER", "examserver4_dk8");
define("DB_PASS", "4pf3kmta");
define("DB_NAME", "examserver49_dk_db");

	$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
	if (mysqli_connect_errno($connection))
  {
  die ("Failed to connect to MySQL: " . mysqli_connect_error());
  }
?>
