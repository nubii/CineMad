<?php define( "TITLE", "Menu | CineMad"); include( 'includes/header.php'); ?>
<!--========================================================
                              CONTENT
    =========================================================-->
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Our</em>Menu</h2>
            <div class="row box-2">
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img01.jpg" alt=""></div>
                    </div>
                    <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img02.jpg" alt=""></div>
                    </div>
                    <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                    <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img03.jpg" alt=""></div>
                    </div>
                    <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="row box-2">
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img04.jpg" alt=""></div>
                    </div>
                    <h3>Onteger convallis orci vel mi nelaoreet, at ornare lorem consequate. </h3>
                    <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequa.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img05.jpg" alt=""></div>
                    </div>
                    <h3>Fenteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Vestibulum volutp turpis ut massa commodo, quis aliquam massa facilisis.Vestibulum volutpat turpis ut massa commodo, quis aliquam massa facilisis.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img06.jpg" alt=""></div>
                    </div>
                    <h3>Dernteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem conseasellus era nisl. </p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            <div class="row box-2">
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img07.jpg" alt=""></div>
                    </div>
                    <h3>Anteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Vestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequat.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img08.jpg" alt=""></div>
                    </div>
                    <h3>Genteger convallis orci vel mi nelaoreet, at ornare lorem consequat.</h3>
                    <p>Meestibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequatre. </p>
                    <a href="#" class="btn">Read more</a>
                </div>
                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"><img data-src="images/page-4_img09.jpg" alt=""></div>
                    </div>
                    <h3>Ternteger convallis orci vel mi nelaoreet, at ornare lorem consequat. </h3>
                    <p>Testibulum volutpatturpis ut massa commodo, quis aliquam massa facilisis.Integer convavel miberto merlonelaoreet, at ornare lorem consequ.</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
            
            <?php $numDish = count($menuItems); $numRows=ceil($numDish / 3); $j=1 ; $a=- 3; $b=0 ; ?>
            <?php while ($j <= $numDish) { $yarr=array_slice($menuItems, $a, $b); ?>
            
            <?php for ($x=0 ; $x <=10; $x++) { echo "The number is: $x <br>"; } ?>
            
            <div class="row box-2">
                <?php foreach($yarr as $dish=> $item ) { ?>

                <div class="grid_4">
                    <div class="img">
                        <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"> <a href="dish.php?item=<?php echo $dish; ?>"><img data-src="images/<?php echo $item[img];?>.jpg" alt="<?php echo $item[name]; ?>"></a></div>
                    </div>
                    <h3><a href="dish.php?item=<?php echo $dish; ?>" class="btn"><?php echo $item[title]; ?></a></h3>
                    <a href="dish.php?item=<?php echo $dish; ?>" class="btn">Read more about <?php echo $item[title]; ?></a>
                </div>

                <?php } ?>
            </div>
            <?php $j++; 
            $a=$a+3; 
            $b=$b+3; 
            }?>

        </div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>