<link rel="stylesheet" href="CSS/style.css" type="text/css">
<?php require_once("admin/includes/connection.php"); ?>
<?php define( "TITLE", "Time | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <?php
/*$conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
*/
//local -------------------------------------------------------------
/*$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "restaurant");*/
//print out bestilling
    //print out end--------------------------------------------------------------

//sdate= selected date
//alt med o+ord er fra bestilling
//vdate= chosen date
//$sdate = "$_POST[sdate]";

/*$conn = mysqli_connect("localhost","root","pwd");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_select_db($conn, "table");

$sql = "UPDATE guestbook SET comment ='$_POST[ucomment]' WHERE id = '$_POST[uid]'";
if (mysqli_query($conn, $sql)) {
    {header('Location: ' . $_SERVER['HTTP_REFERER']);}
}
*/

//Check for tables available today at 18:00 (tid and dato)


$day = date("N");
$vantal = 4;
//$day = date("N");
//$vtid = "T5";
//echo $vdate. " " .$vtid . " " .$day. "<br>";
if ($_POST == true){ 
    $vdate = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['cdate'])));
    $vdate = "$_POST[cdate]";
} else {$vdate = date("d-m-Y"); $vtid = "T5, T6";}
//$vdate = "$_POST[sdate]";

//echo $vdate. " " .$vtid . " " .$day. " " . $vantal;
//after that check (tid and date) where vtid and vdate is === to each other

//if not available set


?>
 <main>
        <section class="well well__offset-3">
            <div class="container">
    What time do you wish to eat?
    <!-- ---------------------- find table submit ----------------------------- -->
<form action="reservation.php" method="post">
    Date: <?php echo $vdate; ?> <input type="hidden" value="<?php echo $vdate; ?>" name="odate">
    Time:<select name="otid">
        <option value="errortid" name="otid">Please select a time</option>
        <?php //checks if the date input from !!!! LACKS UPDATE ON CLICK JS or something like that when date is clicked or maybe socket input

        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 1){
            echo "monday";
            $opentimes = "SELECT * FROM tider WHERE tday='Monday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>   <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 2){
            echo "tuesday";
            $opentimes = "SELECT * FROM tider WHERE tday='Tuesday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo "tirs".$row['tider']; ?>:00</option>

                <?php
            }
        }; ?>   <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 3){
            echo "wednesday";
            $opentimes = "SELECT * FROM tider WHERE tday='Wednesday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>
        <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 4){
            echo "thursday";
            $opentimes = "SELECT * FROM tider WHERE tday='Thursday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>
        <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 5){
            echo "friday";
            $opentimes = "SELECT * FROM tider WHERE tday='Friday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>
        <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 6){
            echo "saturday";
            $opentimes = "SELECT * FROM tider WHERE tday='Saturday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>
        <?php
        $inputDate = $_POST['cdate'];
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 7){
            echo "sunday";
            $opentimes = "SELECT * FROM tider WHERE tday='Sunday' && openhours='true' ORDER BY timeid ASC";
            $result = mysqli_query($conn, $opentimes);

            while($row = mysqli_fetch_array($result)) {

                ?><option value="<?php echo $row['tid']; ?>" name="otid"><?php echo $row['tider']; ?>:00</option>

                <?php
            }
        }; ?>
    </select>
    Antal:<select name="oantal">
        <option value="1" name="oantal">1</option>
        <option value="2" name="oantal">2</option>
        <option value="3" name="oantal">3</option>
        <option value="4" name="oantal">4</option>
        <option value="5" name="oantal">5</option>
        <option value="6" name="oantal">6</option>
        <option value="7" name="oantal">7</option>
        <option value="8" name="oantal">8</option>
        <option value="9" name="oantal">9</option>
        <option value="10" name="oantal">10</option>
        <option value="11" name="oantal">11</option>
        <option value="12" name="oantal">12</option>
        <option value="13" name="oantal">13</option>
        <option value="14" name="oantal">14</option>
        <option value="15" name="oantal">15</option>
        <option value="16" name="oantal">16</option>
    </select>

    <input type="submit">

</form>
</div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>

    <!-- ---------------------- find table submit end ----------------------------- -->
    <!-- ---------------------- order table submit ----------------------------- -->
    <!-- ordernr  odate  oantal  otid  oname  ophone  tid  otimestamp -->
    <!-- ---------------------- order table submit end ----------------------------- -->


<!--

<div class="borde">






    //ordernr  odate  oantal  otid  oname  ophone  tid  otimestamp
    //if day time and ammount of people is available
    $id = 1;
    while ($id <= 10):
        echo $id;
        $id++;
    endwhile;
    ?>
</div>
-->


<?php


?>