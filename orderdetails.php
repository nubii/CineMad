<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php define( "TITLE", "Orderdetails | CineMad"); include( 'includes/header.php'); ?>
<?php require_once("admin/includes/connection.php"); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">

<?php
if ($_POST == true){
$vdate = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['odate'])));
$vtidet = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otidet'])));
$vtidto = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otidto'])));
$vantal = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['oantal'])));
$vbord = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['obord'])));

} else { echo "error";}


if ($vantal == 1){
    $personer = "person";
}
else {
    $personer = "personer";
}
?>
De ønsker at spise den <?php echo "$_POST[odate]" . " " . "$_POST[oantal]" . " " . $personer ." ved bord " . $vbord  ?>
<br>
    Indtast venligst deres navn og telefon nummer herunder:
      <form class="chooseButton" method="post" action="insert.php">
          Navn:<input type="text" name="oname" value=""/>
          Telefon:<input type="text" name="ophone" value=""/>
            <input type="hidden" name="odate" value="<?php echo $vdate; ?>"/>
            <input type="hidden" name="oantal" value="<?php echo $vantal; ?>"/>
            <input type="hidden" name="obord" value="<?php echo $vbord; ?>"/>
            <input type="hidden" name="otid" value="<?php echo $vtidet; ?>"/>
            <input type="hidden" name="otidto" value="<?php echo $vtidto; ?>"/>
            <input type="submit" value="Order this table" class="select"/>
          </form>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>