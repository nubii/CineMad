<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?><?php
include('includes/header.php');
//print out--------------------------------------------------------------
$id = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_POST['did'])));
$sql = "DELETE FROM bestilling WHERE ordernr = '$id'";
if (mysqli_query($conn, $sql))
{        echo("<script>location.href = 'index.php';</script>");}
mysqli_close($conn);
