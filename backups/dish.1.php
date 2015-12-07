<?php
	
	define("TITLE", "Dish | CineMad");
	
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
	
	// Calculate suggested tip
	function suggestedTip($price, $tip) {
		$totalTip = $price * $tip;
		echo money_format('%.2n', $totalTip);
	}
	
?>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><?php echo $dish["title"]; ?> <span class="price"><sup>$</sup><?php echo $dish["price"]; ?></span></h2>
                <div class="row box-2">
                    <div class="dish">
                    <div class="grid_4">
                        <div class="img"><div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/<?php echo $dish[img];?>.jpg" alt="<?php echo $dish[name]; ?>"></div></div>
                        <p><?php echo $dish["blurb"]; ?></p>
                        <p><strong>Suggested beverage: <?php echo $dish["drink"]; ?></strong></p>
		                <p><em>Suggested tip: <sup>$</sup><?php suggestedTip($dish["price"], 0.20); ?></em></p>
		                <br>
		                <a href="menu.php" class="button previous">&laquo; Back to Menu</a>
            </div>
            </div>
        </section>
    </main>
			
<?php include('includes/footer.php'); ?>
