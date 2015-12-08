<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//INSERT----------------------------------------------------------------
include('includes/header.php'); ?> 
<main>
    <section class="well well__offset-3">
<div class="container"><?php

/*$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_connect_error($conn));
}

    mysqli_select_db($conn, "restaurant");*/
   $myDate = date("Y-m-d H:i:s");
/*$result = mysqli_query($conn,"SELECT 1 FROM bestilling WHERE obord='$_POST[obord]' LIMIT 1");
if (mysqli_fetch_row($result)) {
    return 'Assigned';
    echo "someting";
} else {
    return 'Available';
    echo "cakes";
}*/

$vdate = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['odate'])));
$vtidet = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otidet'])));
$vtidto = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otidto'])));
$vantal = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['oantal'])));
$vbord = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['obord'])));
$vname = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['oname'])));
$vphone = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['ophone'])));

    $sql = "SELECT * FROM bestilling WHERE odate = '$vdate' AND otid = '$vtidet' AND obord = '$vbord'";
    $result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($result)){

    echo "Sorry this table has already been ordered at this time, <a href='date.php'>please order another table here</a>";

}
elseif ($_POST[obord] == C3){
    $obord1 = C1;
    $obord2 = C2;
    $sql = "INSERT INTO bestilling (odate, oantal, otid, otidto, oname, ophone, obord, otimestamp )
VALUES ('$vdate', '$vantal', '$vtidet', '$vtidto', '$vname', '$vphone', '$obord1', '$myDate')
,('$vdate', '$vantal', '$vtidet', '$vtidto', '$vname', '$vphone', '$obord2', '$myDate')";
    if (mysqli_query($conn, $sql)) {
        echo "Succes you have ordered the table the . $myDate .<br> <a href='index.php'>or go back to our front page here</a>";
        
    }
}
else{
    $sql = "INSERT INTO bestilling (odate, oantal, otid, otidto, oname, ophone, obord, otimestamp )
VALUES ('$vdate', '$vantal', '$vtidet', '$vtidto', '$vname', '$vphone', '$vbord', '$myDate')";
    if (mysqli_query($conn, $sql)) {
       echo "Succes you have ordered the table the $myDate <br> <a href='index.php'>or go back to our front page here</a>";
        
    }}
?>
</div></section></main>