<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php define( "TITLE", "Orderdetails | CineMad"); include( 'includes/header.php'); ?>
<?php require_once("admin/includes/connection.php"); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
<div class="container">
<?php
if ($_POST == true){
$vdate = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['odate'])));
$vtidet = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otid'])));
$vtidto = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['otidto'])));
$vantal = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['oantal'])));
$vbord = trim(htmlspecialchars(mysqli_real_escape_string($conn, $_POST['obord'])));

} else { echo "error";}


if ($vantal == 1){
    $personer = "person";
}
else {
    $personer = "people";
}
?>
You wish to eat the <?php echo "$_POST[odate]" . " " . "$_POST[oantal]" . " " . $personer ." at table " . $vbord  ?>
<br>
   Please input your name an phone number below:
      <form class="chooseButton" method="post" action="insert.php">
          Name:<input type="text" name="oname" value=""/>
          Phone:<input type="text" name="ophone" value=""/>
            <input type="hidden" name="odate" value="<?php echo $vdate; ?>"/>
            <input type="hidden" name="oantal" value="<?php echo $vantal; ?>"/>
            <input type="hidden" name="obord" value="<?php echo $vbord; ?>"/>
            <input type="hidden" name="otidet" value="<?php echo $vtidet; ?>"/>
            <input type="hidden" name="otidto" value="<?php echo $vtidto; ?>"/>
            <input type="submit" value="Order this table" class="select"/>
          </form></div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>