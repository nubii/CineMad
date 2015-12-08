<link rel="stylesheet" href="css/style.css" type="text/css">
<?php define( "TITLE", "Time | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">

<?php
// post check ---------------------------------------------------------- ordernr  odate  oantal  otid  oname  ophone  tid  otimestamp
if ($_POST == true){
    $vdate = "$_POST[odate]";
    $vtid = "$_POST[otid]";
    $vantal = "$_POST[oantal]";
} else { echo "error";}// later add a return to main page if no valid post
echo $vdate. " " .$vtid . " " .$vantal;
//print out--------------------------------------------------------------
?><div id="visualtable"> <img src="img/tables.jpg" alt="tables" id="ordertablebg">
<?php
/*$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "restaurant");*/
// check date ----------------------------------------------------
$o1 = 0;
$o2 = 0;
$o3 = 0;
$o4 = 0;
$o5 = 0;
$o6 = 0;
$o7 = 0;
$o8 = 0;
$p1 = 0;
$p2 = 0;
$p3 = 0;
$p4 = 0;
$q1 = 0;
$q2 = 0;
/*
$tablestaken = "SELECT * FROM bestilling WHERE odate='$_POST[odate]' ORDER BY ordernr DESC";
$result = mysqli_query($conn, $tablestaken);
$stack = array();

while($row = mysqli_fetch_array($result)) {    ?>

    <div class="holdtarget"> <?php
    //   echo $row['odate'] . " " . $row['obord'] . " " . $row['otid'] . " " . $row['otidto'] . " " . $row['oname'];

    if((strpos($vtid,$row['otid']) !== false) || (strpos($vtid,$row['otidto']) !== false) && $vdate == $row['odate']){
        ?><div class="target"><?php echo "<br>overlap time on same day" .$row['odate'] . " " . $row['obord'] . " " . $row['otid'] . " " . $row['otidto'] . " " . $row['oname'];
        ?> </div>
        <?php

        array_push($stack, $row['obord']);

    }
    ?> </div><?php }

print_r($stack);
*/
//create vtidto from input

if ($vtid == "T01"){
    $vtidet = "T01";
    $vtidto = "T02";
    $vtid = "T01, T02";
}
elseif ($vtid == "T02") {
    $vtidet = "T02";
    $vtidto = "T03";
    $vtid = "T02, T03";
}
elseif ($vtid == "T03") {
    $vtidet = "T03";
    $vtidto = "T04";
    $vtid = "T03, T04";
}

elseif ($vtid == "T04") {
    $vtidet = "T04";
    $vtidto = "T05";
    $vtid = "T04, T05";
}

elseif ($vtid == "T05") {
    $vtidet = "T05";
    $vtidto = "T06";
    $vtid = "T05, T06";
}

elseif ($vtid == "T06") {
    $vtidet = "T06";
    $vtidto = "T07";
    $vtid = "T06, T07";
}

elseif ($vtid == "T07") {
    $vtidet = "T07";
    $vtidto = "T08";
    $vtid = "T07, T08";
}

elseif ($vtid == "T08") {
    $vtidet = "T08";
    $vtidto = "T09";
    $vtid = "T08, T09";
}

elseif ($vtid == "T09") {
    $vtidet = "T09";
    $vtidto = "T10";
    $vtid = "T09, T10";
}

elseif ($vtid == "T10") {
    $vtidet = "T10";
    $vtidto = "T11";
    $vtid = "T10, T11";
}

elseif ($vtid == "T11") {
    $vtidet = "T11";
    $vtidto = "T12";
    $vtid = "T11, T12";
}

elseif ($vtid == "T12") {
    $vtidet = "T12";
    $vtidto = "T13";
    $vtid = "T12, T13";
}

elseif ($vtid == "T13") {
    $vtidet = "T13";
    $vtidto = "T14";
}

// check date end ----------------------------------------------------
/*$result = mysqli_query($conn, $tablestaken);
$bestillingArray = array();
$index = 0;
while($row = $result->fetch_assoc())
{
    $bestillingArray[$index] = $row;
    $index++;
}

print_r($bestillingArray);*/
/*if(strpos($row['odate'],$vdate) !== false) {
    echo 'true';
}else{ echo "";}
*/
//print out bestilling
/*$bord = "SELECT * FROM borde ORDER BY obord DESC";
$result = mysqli_query($conn, $bord);


while($row = mysqli_fetch_array($result)) {    ?>
    <div class="choose">
    <?php
echo $row['obord'] . " " . $row['aplads'] . " " . $row['nabo'];
?>

<!-- select table -->
<form class="chooseButton" method="post" action="">
    <input type="hidden" name="did" value="<?php print $row['obord']; ?>"/>
    <input type="submit" value="x" class="select"/>

</form></div><br> <?php }
*/
//check oantal to see what tables are needed

/*$query = "SELECT bestilling.oname,bestilling.obord
FROM bestilling
LEFT JOIN borde
ON bestilling.obord=borde.obord
WHERE aplads='2'
ORDER BY bestilling.oname;";*/
/*$query = "SELECT bestilling.ordernr,bestilling.obord
FROM bestilling
INNER JOIN borde
ON bestilling.obord=borde.obord
WHERE aplads='2';";*/



//if I check all an amount of times I will need a second check to see if an item is there the same ammount of times
//I have 3 obord and print out where it joins so I print $a1 $a2 $a3
//then I run a strpos to check if the string is there more than 2 times and print all that are

/*

$alleborde = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a1 = "A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a2 = "A1, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a3 = "A1, A2, A4, A5, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a4 = "A1, A2, A3, A5, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a5 = "A1, A2, A3, A4, A6, A7, A8, B1, B2, B3, B4, C1, C2";
$a6 = "A1, A2, A3, A4, A5, A7, A8, B1, B2, B3, B4, C1, C2";
$a7 = "A1, A2, A3, A4, A5, A6, A8, B1, B2, B3, B4, C1, C2";
$a8 = "A1, A2, A3, A4, A5, A6, A7, B1, B2, B3, B4, C1, C2";
$b1 = "A1, A2, A3, A4, A5, A6, A7, A8, B2, B3, B4, C1, C2";
$b2 = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B3, B4, C1, C2";
$b3 = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B4, C1, C2";
$b4 = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, C1, C2";
$c1 = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, C2";
$c2 = "A1, A2, A3, A4, A5, A6, A7, A8, B1, B2, B3, B4, C1";

*/
/*
$a1 = "A2, A3, A4, A5, A6, A7, A8";
$a2 = "A1, A3, A4, A5, A6, A7, A8";
$a3 = "A1, A2, A4, A5, A6, A7, A8";
$a4 = "A1, A2, A3, A5, A6, A7, A8";
$a5 = "A1, A2, A3, A4, A6, A7, A8";
$a6 = "A1, A2, A3, A4, A5, A7, A8";
$a7 = "A1, A2, A3, A4, A5, A6, A8";
$a8 = "A1, A2, A3, A4, A5, A6, A7";


$b1 = "B2, B3, B4";
$b2 = "B1, B3, B4";
$b3 = "B1, B2, B4";
$b4 = "B1, B2, B3";


$c1 = "C2";
$c2 = "C1";

*/

//another solution might be to seperate it into a1-a8, b1-b4, c1-c2 and count each char and number after
// like the other if I have 3 obord with 2 ammount then I check every number towards the array string
//so if 1-8 is there 3 times I print it out


mysqli_select_db($conn, "examserver49_dk_db");

/* ------------------------TEST OF a1-a8-----------------------------------*/
//nt substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )
$a1 = "A2, A3, A4, A5, A6, A7, A8";
$a2 = "A1, A3, A4, A5, A6, A7, A8";
$a3 = "A1, A2, A4, A5, A6, A7, A8";
$a4 = "A1, A2, A3, A5, A6, A7, A8";
$a5 = "A1, A2, A3, A4, A6, A7, A8";
$a6 = "A1, A2, A3, A4, A5, A7, A8";
$a7 = "A1, A2, A3, A4, A5, A6, A8";
$a8 = "A1, A2, A3, A4, A5, A6, A7";







$query = "SELECT bestilling.obord,borde.obord, bestilling.otid, bestilling.otidto, bestilling.odate
FROM bestilling
LEFT JOIN borde
ON borde.obord=bestilling.obord
WHERE aplads='2' AND odate='$_POST[odate]'
ORDER BY bestilling.obord;";

$result3 = mysqli_query($conn, $query);
if (!$result3) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if ($vantal <= 2) {
    $p1++;
    $p2++;
    $p3++;
    $p4++;
    $q1++;
    $q2++;

    while ($row3 = mysqli_fetch_array($result3)) {

        if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {

            if ((strpos($a1, $row3['obord']) !== false)) {

            } else {

                $o1++;
            }
            if ((strpos($a2, $row3['obord']) !== false)) {

            } else {

                $o2++;
            }
            if ((strpos($a3, $row3['obord']) !== false)) {

            } else {

                $o3++;
            }
            if ((strpos($a4, $row3['obord']) !== false)) {

            } else {

                $o4++;
            }
            if ((strpos($a5, $row3['obord']) !== false)) {

            } else {

                $o5++;
            }
            if ((strpos($a6, $row3['obord']) !== false)) {

            } else {

                $o6++;
            }
            if ((strpos($a7, $row3['obord']) !== false)) {

                /*?> <div class="choose">

                    <!-- too see the print of the buttons -->
                    <form class="chooseButton" method="post" action="">
                        <input type="hidden" name="did" value="A7"/>
                        <input type="submit" value="A7" class="select"/>

                    </form></div><br>       <?php*/
            } else {

                $o7++;
            }


            if ((strpos($a8, $row3['obord']) !== false)) {


            } else {

                $o8++;
            }
        }
    }
}

    /* ------------------------TEST OF a1-a8-----------------------------------*/


    /* ------------------------TEST OF b1-b4-----------------------------------*/
//nt substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )
    $b1 = "B2, B3, B4";
    $b2 = "B1, B3, B4";
    $b3 = "B1, B2, B4";
    $b4 = "B1, B2, B3";



    $query = "SELECT bestilling.obord,borde.obord, bestilling.otid, bestilling.otidto, bestilling.odate
FROM bestilling
LEFT JOIN borde
ON borde.obord=bestilling.obord
WHERE aplads='4' AND odate='$_POST[odate]'
ORDER BY bestilling.obord;";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
if ($vantal > 2 && $vantal <= 4) {
    $o1 ++;
    $o2 ++;
    $o3 ++;
    $o4 ++;
    $o5 ++;
    $o6 ++;
    $o7 ++;
    $o8 ++;
    $q1 ++;
    $q2 ++;
    while ($row3 = mysqli_fetch_array($result)) {

        if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {


            if ((strpos($b1, $row3['obord']) !== false)) {

            } else {

                $p1++;
            }
            if ((strpos($b2, $row3['obord']) !== false)) {

            } else {

                $p2++;
            }
            if ((strpos($b3, $row3['obord']) !== false)) {

            } else {

                $p3++;
            }
            if ((strpos($b4, $row3['obord']) !== false)) {

            } else {

                $p4++;
            }
        }
    }
}


/* ------------------------TEST OF c1-c2-----------------------------------*/
//nt substr_count ( string $haystack , string $needle [, int $offset = 0 [, int $length ]] )
$c1 = "C2";
$c2 = "C1";




$query = "SELECT bestilling.obord,borde.obord, bestilling.otid, bestilling.otidto, bestilling.odate
FROM bestilling
LEFT JOIN borde
ON borde.obord=bestilling.obord
WHERE aplads='8' AND odate='$_POST[odate]'
ORDER BY bestilling.obord;";

$result3 = mysqli_query($conn, $query);
if (!$result3) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}

if ($vantal > 4 && $vantal <= 8) {
    $o1--;
    $o2--;
    $o3--;
    $o4--;
    $o5--;
    $o6--;
    $o7--;
    $o8--;
    $p1++;
    $p2++;
    $p3++;
    $p4++;

    while ($row3 = mysqli_fetch_array($result3)) {

        if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {

            if ((strpos($c1, $row3['obord']) !== false)) {

            } else {

                $q1++;

            }
            if ((strpos($c2, $row3['obord']) !== false)) {

            } else {

                $q2++;

            }
        }
    }
}

    /* ------------------------TEST OF c1-c2-----------------------------------*/
if ($vantal > 8 && $vantal <= 16) {
    $o1--;
    $o2--;
    $o3--;
    $o4--;
    $o5--;
    $o6--;
    $o7--;
    $o8--;
    $p1++;
    $p2++;
    $p3++;
    $p4++;
    $q1++;
    $q2++;

    while ($row3 = mysqli_fetch_array($result3)) {

        if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {

            if ((strpos($c1, $row3['obord']) !== false)) {

            } else {

                $q1++;

            }
            if ((strpos($c2, $row3['obord']) !== false)) {

            } else {

                $q2++;

            }
        }
    }
}

     if ($vantal > 16) {
        echo "That sure is a big party, please call us at 8888-8888 so we can find a solution for you";
    }
function checkIfValidDate($date){
    return (bool)strtotime($date);
}
if (!checkIfValidDate($vdate)) {
    echo "<div class='error content'>please choose a date, you will be returned to chose in 5 seconds</div>";

    Header("refresh:5;url=index.php");
}
//if (){
  //
    //
   // }

/* ------------------------------ CHECK IF PRINT -------------------------------------------------------*/
if ($vantal <= 2){ ?> <div id="a">
    <?php }
if ($o1 == 0) {
    ?>
    <div class="choose a1">

        <!-- too see the print of the buttons -->
        <form class="chooseButton" method="post" action="orderdetails.php">
            <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
            <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
            <input type="hidden" name="obord" value="A1"/>
            <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
            <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A1" class="select"/>

        </form>
    </div>       <?php }


if ($o2 == 0) {
    ?>
    <div class="choose a2">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A2"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A2" class="select"/>

        </form>
    </div>       <?php }


if ($o3 == 0) {
    ?>
    <div class="choose a3">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A3"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A3" class="select"/>

        </form>
    </div>       <?php }


if ($o4 == 0) {
    ?>
    <div class="choose a4">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A4"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A4" class="select"/>

        </form>
    </div>       <?php }


if ($o5 == 0) {
    ?>
    <div class="choose a5">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A5"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A5" class="select"/>

        </form>
    </div>       <?php }


if ($o6 == 0) {
    ?>
    <div class="choose a6">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A6"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A6" class="select"/>

        </form>
    </div>       <?php }

if ($o7 == 0) {
    ?>
    <div class="choose a7">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="A7"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A7" class="select"/>

        </form>
    </div>       <?php }

    if ($o8 == 0) {
        ?>
        <div class="choose a8">

        <!-- too see the print of the buttons -->
        <form class="chooseButton" method="post" action="orderdetails.php">
            <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
            <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
            <input type="hidden" name="obord" value="A8"/>
            <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
            <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="A8" class="select"/>

        </form>
        </div><?php }


    if ($vantal <= 2){ ?>
</div>
<?php }

if ($vantal > 2 && $vantal <= 4){ ?>
<div id="b">
    <?php }

if ($p1 == 0) {
    ?>
    <div class="choose b1">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B1"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="B1" class="select"/>

        </form>
    </div>       <?php }


if ($p2 == 0) {
    ?>
    <div class="choose b2">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B2"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="B2" class="select"/>

        </form>
    </div>       <?php }


if ($p3 == 0) {
    ?>
    <div class="choose b3">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B3"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="B3" class="select"/>

        </form>
    </div>       <?php }


if ($p4 == 0) {
    ?>
    <div class="choose b4">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B4"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="B4" class="select"/>

        </form>
    </div>      <?php }
    if ($vantal > 2 && $vantal <= 4){  ?> </div>
<?php }
if ($vantal > 4 && $vantal <= 8){ ?>
<div id="c">
    <?php }
if ($q1 == 0){
    ?> <div class="choose c1">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="C1"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="C1" required autofocus class="select"/>

        </form></div>       <?php }


if ($q2 == 0){
    ?> <div class="choose c2">

        <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="C2"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="C2" class="select"/>

        </form></div>       <?php }
    if ($vantal > 4 && $vantal <= 8){  ?></div> <?php }
//if all 2 people tables are not available then print 4 people tables ----------------------------------------------------


if ($o1+$o2+$o3+$o4+$o5+$o6+$o7+$o8 > 7){

    $query = "SELECT bestilling.obord,borde.obord, bestilling.otid, bestilling.otidto, bestilling.odate
FROM bestilling
LEFT JOIN borde
ON borde.obord=bestilling.obord
WHERE aplads='4' AND odate='$_POST[odate]'
ORDER BY bestilling.obord;";

    $result = mysqli_query($conn, $query);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    while ($row3 = mysqli_fetch_array($result)) {

        if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {

            if ((strpos($b1, $row3['obord']) !== false)) {

            } else {

                $p1++;

            }
            if ((strpos($b2, $row3['obord']) !== false)) {

            } else {

                $p2++;

            }
            if ((strpos($b3, $row3['obord']) !== false)) {

            } else {

                $p3++;

            }
            if ((strpos($b4, $row3['obord']) !== false)) {

            } else {

                $p4++;

            }
        }
    }


if ($p1 == 1 || $p2 == 1 || $p3 == 1 || $p4 == 1){
    ?><div id="b"><?php
}
    if ($p1 == 1) {
        ?>

        <div class="choose b1">

            <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B1"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                <input type="submit" value="B1" class="select"/>

            </form>
        </div>       <?php }


    if ($p2 == 1) {
        ?>
        <div class="choose b2">

            <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B2"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                <input type="submit" value="B2" class="select"/>

            </form>
        </div>       <?php }


    if ($p3 == 1) {
        ?>
        <div class="choose b3">

            <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B3"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                <input type="submit" value="B3" class="select"/>

            </form>
        </div>       <?php }


    if ($p4 == 1) {
        ?>
        <div class="choose b4">

            <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="B4"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                <input type="submit" value="B4" class="select"/>

            </form>
        </div>      <?php }if ($p1 == 1 || $p2 == 1 || $p3 == 1 || $p4 == 1){
    ?><div id="b"><?php
        }
}
// -------------------------------------- 2 people end ----------------------------------------------------------
// -------------------------------------- if no 4 people start ----------------------------------------------------------



if ($p1+$p2+$p3+$p4 > 7 ){
    $query = "SELECT bestilling.obord,borde.obord, bestilling.otid, bestilling.otidto, bestilling.odate
FROM bestilling
LEFT JOIN borde
ON borde.obord=bestilling.obord
WHERE aplads='8' AND odate='$_POST[odate]'
ORDER BY bestilling.obord;";

    $result3 = mysqli_query($conn, $query);
    if (!$result3) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }


        while ($row3 = mysqli_fetch_array($result3)) {

            if ((strpos($vtid, $row3['otid']) !== false) || (strpos($vtid, $row3['otidto']) !== false) && $vdate == $row3['odate']) {

                if ((strpos($c1, $row3['obord']) !== false)) {

                } else {

                    $q1++;

                }
                if ((strpos($c2, $row3['obord']) !== false)) {

                } else {

                    $q2++;

                }
            }
        }

    if ($q1 == 1) {
        ?>
    <div class="choose c1">

            <!-- too see the print of the buttons -->
            <form class="chooseButton" method="post" action="orderdetails.php">
                <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                <input type="hidden" name="obord" value="C1"/>
                <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                <input type="submit" required autofocus value="C1" class="select"/>

            </form>
        </div>       <?php }


if ($q2 == 1) {
    ?>
    <div class="choose c2">

        <!-- too see the print of the buttons -->
        <form class="chooseButton" method="post" action="orderdetails.php">
            <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
            <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
            <input type="hidden" name="obord" value="C2"/>
            <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
            <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
            <input type="submit" value="C2" class="select"/>

        </form>
    </div>       <?php }

}
// ------------------------------------- 4 borde slut ---------------------------------------------------------
            if ($vantal >= 9){ ?> <div id="c">
                <?php }
                if ($q1 == 1 && $q2 == 1 && $vantal > 8) {
                    ?>
                    <div class="choose c3">

                        <!-- too see the print of the buttons -->
                        <form class="chooseButton" method="post" action="orderdetails.php">
                            <input type="hidden" name="odate" value="<?php echo $vdate ?>"/>
                            <input type="hidden" name="oantal" value="<?php echo $vantal ?>"/>
                            <input type="hidden" name="obord" value="C3"/>
                            <input type="hidden" name="otid" value="<?php echo $vtidet ?>"/>
                            <input type="hidden" name="otidto" value="<?php echo $vtidto ?>"/>
                            <input type="submit" value="C1+C2" class="select"/>

                        </form>
                    </div>       <?php }
elseif ($vantal > 8){
    echo "Sorry please select another time";
}




                if ($vantal <= 2){ ?>
            </div>
        <?php }
if ($q1+$q2 > 3){
    echo "We are booked up";
}

if ($o8 == 0 && $o7 == 0 && $o6 == 0 && $o5 == 0 && $o4 == 0 && $o3 == 0 && $o2 == 0 && $o1 == 0 && $p1 > 0 && $p2 > 0 && $p3 > 0 && $p4 > 0 && $q1 > 0 && $q2 > 0) {
    echo "please select another time";
}

if ($o8 > 0 && $o7 > 0 && $o6 > 0 && $o5 > 0 && $o4 > 0 && $o3 > 0 && $o2 > 0 && $o1 > 0 && $p1 > 0 && $p2 > 0 && $p3 > 0 && $p4 > 0 && $q1 > 0 && $q2 > 0) {
    echo "please select another time";
}

if ($o8 > 0 && $o7 > 0 && $o6 > 0 && $o5 > 0 && $o4 > 0 && $o3 > 0 && $o2 > 0 && $o1 > 0 && $p1 > 0 && $p2 > 0 && $p3 > 0 && $p4 > 0 && $q1 > 0 && $q2 > 0) {
    echo "please select another time";
}
?>
</div><br>
        </section>
        </main>
        <?php include( 'includes/footer.php'); ?>


