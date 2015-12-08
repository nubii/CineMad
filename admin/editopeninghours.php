<?php
include('includes/header.php');
/*$conn = mysqli_connect("localhost","root","pwd");
if(!$conn){
    die("could not connect: ". mysqli_connect_error($conn));
}
mysqli_select_db($conn, "restaurant");
*/
if(isset($_POST['submit'])){
    if(!empty($_POST['check_list'])) {

        //Counting number of checked checkboxes
        $checked_count = count($_POST['check_list']);

        echo "You have selected following ".$checked_count." option(s): <br/>";

        //Loop to store and display values of individual checked checkbox
        foreach($_POST['check_list'] as $selected) {
            echo "<p>".$selected ."</p>";
            $data = $selected;
            list($tday, $ttime, $truefalse) = explode(" ", $data);
            echo $ttime;
             echo " ";// foo
            echo $tday; // *
            echo " ";
            echo $truefalse;
//            $sql = 'UPDATE tider SET openhours=["yayyy"] WHERE tday=$tday AND tid=$ttime';
//            $sql = "UPDATE tider SET openhours='something'
 //           WHERE tday='.$tday.' AND tid='.$ttime.'";
            $sql = "UPDATE tider SET openhours='".$truefalse."'
            WHERE tday='".$tday."' AND tid='".$ttime."'";

            if (mysqli_query($conn, $sql)) {
    echo "succes". $tday . $ttime;
}
else {
    echo "error";
}

        }
        echo "<br/><b>Note :</b> <span>Similarily, You Can Also Perform CRUD Operations using These Selected Values.</span>";
    }
    else{
        echo "<b>Please Select Atleast One Option.</b>";
    }
}
mysqli_error($conn);


mysqli_close($conn);
/*
if(!$conn){
    die("could not connect: ". mysqli_connect_error($conn));
}
mysqli_select_db($conn, "restaurant");
$sql = "UPDATE tider
SET openhours="true"
WHERE tider=$_post['check_list']";
if (mysqli_query($conn, $sql)) {
    echo "succes";
}
else {
    echo "error";
}
mysqli_error($conn);


mysqli_close($conn);
*/

/*

if(isset($_POST['submit'])){//to run PHP script on submit
    if(!empty($_POST['opentime'])){
// Loop to store and display values of individual checked checkbox.
        foreach($_POST['opentime'] as $selected){
            echo $selected."</br>";
        }
    }}
if ($_POST['work2'] == true){
    $letmebe = yay;
}
if ($_POST['opentime[]'] == true){
    $letmebe = yay;
}
echo $letmebe;
echo $_POST['opontime[]'];
if(isset($_POST['submit'])&&$_POST['submit']=='add'){
    $time_string = $_POST['opentime'];
    print_r($time_string);
}*/
/*
$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_connect_error($conn));
}
mysqli_select_db($conn, "restaurant");
$sql = "UPDATE tider
SET openhours='true'
WHERE tider=$_post[tid]";
if (mysqli_query($conn, $sql)) {
    echo "succes";
}
else {
    echo "error";
}
mysqli_error($conn);


mysqli_close($conn);
*/