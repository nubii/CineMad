<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?><?php
include('includes/header.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {

        //Counting number of checked checkboxes
        $checked_count = count($_POST['check_list']);


        //Loop to store and display values of individual checked checkbox
        foreach($_POST['check_list'] as $selected) {
            $data = $selected;
            list($tday, $ttime, $truefalse) = explode(" ", $data);
         

            $sql = "UPDATE tider SET openhours='".$truefalse."'
            WHERE tday='".$tday."' AND tid='".$ttime."'";

            if (mysqli_query($conn, $sql)) {
    
}
else {
    echo "error";
}

        }
        header('Location: '.'openinghours.php');
    }
    else{
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
mysqli_error($conn);


mysqli_close($conn);
