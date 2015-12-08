<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/admin.php"); ?>
<?php confirm_logged_in(); ?>
<?php define( "TITLE", "Opening Hours | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
<div class="container">
<!--  ----------------------------- time select checkbox  ------------------------------------------------ -->
    <h2>Opening Hours</h2><br>
<form method="post" action="editopeninghours.php" style="width: 1180px;">
<?php 
 $tider = "SELECT * FROM tider ORDER BY timeid ASC";
$result = mysqli_query($conn, $tider);

while($row = mysqli_fetch_array($result)) {
    if ($row['tid'] == "T01"){
        echo  '<div class="timeCheckDay">' . $row['tday'] . "<br>";
        }
   ?><?php    echo  $row['tider']?>:00
    <input type="hidden" name="check_list[]" value="<?php print $row['tday'] . " " . $row['tid'] . " false"; ?>"/>
    <input type="checkbox" name="check_list[]" value="<?php echo $row['tday'] . " " . $row['tid'] . " true";?>"
    <?php if ($row['openhours'] == "true"){echo "checked='checked'";} ?> /><?php echo $row['tday']. " " . $row['tid']. " <br>";
    if ($row['tid'] == "T13"){
    echo "</div>";
        }

} ?>
  <input type="submit" name="submit" value="submit">
</form>

<?php

if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {

        //Counting number of checked checkboxes
        $checked_count = count($_POST['check_list']);

        echo "You have selected following ".$checked_count." option(s): <br/>";

        //Loop to store and display values of individual checked checkbox
        foreach($_POST['check_list'] as $selected) {
            echo "<p>".$selected ."</p>";
        }
    }
    else{
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
?></div></section></main>