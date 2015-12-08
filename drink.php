<?php
	
	define("TITLE", "Drink | CineMad");
	
	include('includes/header.php');
	
	// Strip bad characters function
	// Learn more about preg_replace: http://php.net/manual/en/function.preg-replace.php
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
		return $output;
	}
	
	if(isset($_GET['item'])) {
		$menuItem = strip_bad_chars( $_GET['item'] );
		$dish = $menuItems[$menuItem];
	}
	
?>




    <!--========================================================
                              CONTENT
    =========================================================-->
    <?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
$dish = $_GET['item'];
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$menu = "SELECT * FROM  drinkItems WHERE drink_url ='$dish' ";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
?>
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><?php echo $row["title"]; ?> <span class="price"><sup>$</sup><?php echo $row["price"]; ?></span></h2>
                <div class="row box-2">
                    <div class="dish">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>"></div></div>
                        <p><?php echo $row["blurb"]; ?></p>
                        <p><strong>Suggested dish: <?php echo $row["dish"]; ?></strong></p>
		                <br>
		                <a href="drinks.php" class="button previous">&laquo; Back to the drinks menu</a>
            </div>
            </div>

        </section>
    </main>
			
<?php include('includes/footer.php'); ?>