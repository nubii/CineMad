<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
<h1 align="center" style="font-size: 30px;">Delete image</h1>

<?php
$result=mysqli_query($connection, "SELECT * FROM img_upload ORDER BY ID DESC");

while($row=mysqli_fetch_array($result)){
echo "<b>Id :</b> $row[ID] <br/>";
echo "<b>Image:</b> $row[filename] <br /> <img src=\"http://examserver49.dk/img/$row[filename]\" width=\"200\" > <br/>";

echo '<a href="deletepro.php?id='.$row['ID'].'"'; ?>
 onclick="return confirm('Are you sure you want to delete this image? \nNotice: the image will be completely gone, and will have to be re-uploaded.');"
 <?php echo ' >Delete this image</a>';
 
echo "<hr>";
}

mysqli_close($connection);
?> 
</section>
</main>
</body>
</html>