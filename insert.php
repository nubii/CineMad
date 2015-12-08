<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
//INSERT----------------------------------------------------------------
include('includes/header.php');

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


    $sql = "SELECT * FROM bestilling WHERE odate = '$_POST[odate]' AND otid = '$_POST[otid]' AND obord = '$_POST[obord]'";
    $result = mysqli_query($conn, $sql);
if($row = mysqli_fetch_array($result)){

    echo "this has already been ordered";

}
elseif ($_POST[obord] == C3){
    $obord1 = C1;
    $obord2 = C2;
    $sql = "INSERT INTO bestilling (odate, oantal, otid, otidto, oname, ophone, obord, otimestamp )
VALUES ('$_POST[odate]', '$_POST[oantal]', '$_POST[otid]', '$_POST[otidto]', '$_POST[oname]', '$_POST[ophone]', '$obord1', '$myDate')
,('$_POST[odate]', '$_POST[oantal]', '$_POST[otid]', '$_POST[otidto]', '$_POST[oname]', '$_POST[ophone]', '$obord2', '$myDate')";
    if (mysqli_query($conn, $sql)) {
        echo "succes";
    }
}
else{
    $sql = "INSERT INTO bestilling (odate, oantal, otid, otidto, oname, ophone, obord, otimestamp )
VALUES ('$_POST[odate]', '$_POST[oantal]', '$_POST[otid]', '$_POST[otidto]', '$_POST[oname]', '$_POST[ophone]', '$_POST[obord]', '$myDate')";
    if (mysqli_query($conn, $sql)) {
        echo "succes";
        //echo("<script>location.href = 'index.php';</script>");
    }}
echo $myDate;
//INSERT END----------------------------------------------------------
/*
$query = "SELECT `email` FROM `tblUser` WHERE email=?";

if ($stmt = $dbl->prepare($query)){

        $stmt->bind_param("s", $email);

        if($stmt->execute()){
            $stmt->store_result();

            $email_check= "";
            $stmt->bind_result($email_check);
            $stmt->fetch();

            if ($stmt->num_rows == 1){

            echo "That Email already exists.";
            exit;

            }
        }
    }*/
