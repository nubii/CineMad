
<?php require_once("admin/includes/connection.php"); ?>
<?php define( "TITLE", "Time | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <?php



$day = date("N");
$vantal = 4;

if ($_POST == true){ 
    $vdate = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['cdate'])));
    $vdate = "$_POST[cdate]";
} else {$vdate = date("d-m-Y"); $vtid = "T5, T6";}



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
        <?php //checks if the date input from

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