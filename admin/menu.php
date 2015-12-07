<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Edit</em> Food Menu</h2>
            <div class="row box-2">
                <h3><a href="createdish.php">Create a new dish</a></h3>
<?php
$result=mysqli_query($connection, "SELECT * FROM menuItems ORDER BY menu_id DESC");
$rows = array();
while($row = mysqli_fetch_array($result))
{ ?>
     <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"> <a href="dish.php?item=<?php echo $row['menu_url']; ?>">
                            <img class="lazy-loaded" data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>">
                            </a></div>
                    </div>
                    <h3><a href="dish.php?item=<?php echo $row['menu_url']; ?>" class="btn"><?php echo $row['title']; ?></a></h3>
                    <a href="dish.php?item=<?php echo $row['menu_url']; ?>" class="btn">Read more about <?php echo $row['title']; ?></a>
                </div>
                <?php
}
?>


                    
    </div>
        </div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>
<?php
mysqli_close($connection);
?> 
</body>
</html>

<style>
    
        .decoration:before {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  left: 0;
  right: 50%;
  margin-right: 0;
  margin-left: 3px;
  background: #6c6860;
}
.decoration:after {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  right: 0;
  left: 50%;
  margin-left: 0;
  margin-right: 3px;
  background: #6c6860;
}
</style>