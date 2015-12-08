<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "News | Admin Panel"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Edit</em> News items</h2>
            <div class="row box-2">
                <h3><a href="createnews.php">Create a new news item</a></h3>
<?php
$result=mysqli_query($connection, "SELECT * FROM news ORDER BY news_id DESC");
$rows = array();
while($row = mysqli_fetch_array($result))
{ ?>
                <div class="news">
                <div class="grid_6">
                    <div class="img img__border">
                        <div class="lazy-img" style="padding-bottom: 63.0282%;"> <a href="newsitem.php?item=<?php echo $row['news_id']; ?>"><img data-src="http://examserver49.dk/img/<?php echo $row[img];?>" alt="<?php echo $row[title]; ?>"></a></div>
                    </div>
                    
                    <h2><?php echo $row[title]; ?></h3>
                    <p class="center indents-1"><?php echo $row[desc]; ?></p>
                </div>
                </div>

                <?php } ?>
            </div>
            
            </div>


                    
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

.container .grid_6 {
    width: 570px;
    margin-top: 20px;
}
</style>