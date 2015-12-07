<?php define( "TITLE", "Menu | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Our</em>Menu</h2>
            <div class="row box-2">
<?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$menu = "SELECT * FROM menuItems ORDER BY menu_id ASC";
$result = mysqli_query($conn, $menu);
$rows = array();
while($row = mysqli_fetch_array($result))
{ ?>
     <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"> <a href="dish.php?item=<?php echo $row['menu_url']; ?>"><img data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>"></a></div>
                    </div>
                    <h3><a href="dish.php?item=<?php echo $row['menu_url']; ?>" class="btn"><?php echo $row['title']; ?></a></h3>
                    <a href="dish.php?item=<?php echo $row['menu_url']; ?>" class="btn">Read more about <?php echo $row['title']; ?></a>
                </div><?php
}
?>


    </div>

        </div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>


<style>
    .container .grid_4 {
  width: 370px;
  margin-top: 30px;
}
</style>