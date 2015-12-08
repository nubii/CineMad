<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?><?php
include('includes/header.php');
//print out--------------------------------------------------------------
/*$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_select_db($conn, "restaurant");*/
$sql = "DELETE FROM bestilling WHERE ordernr = '$_POST[did]'";
if (mysqli_query($conn, $sql))
{        echo("<script>location.href = 'index.php';</script>");}
mysqli_close($conn);
