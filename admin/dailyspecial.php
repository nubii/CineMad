<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php define( "TITLE", "Orderdetails | CineMad"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Edit</em> Daily special</h2>
            <div class="row box-2">
                <h3><a href="createdish.php">Create a new daily special</a></h3>

        <?php

        $daily = "SELECT * FROM dailyspecial ORDER BY dailyspecial_id ASC";
        $result = mysqli_query($conn, $daily);
        while($row = mysqli_fetch_array($result)) 
        { ?>
             <div class="grid_4">
                            <div class="img">
                                <div class="lazy-img" style="padding-bottom: 76.21621621621622%;"> <a href="daily.php?item=<?php echo $row['dailyspecial_id']; ?>">
                                    <img class="lazy-loaded" data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>">
                                    </a></div>
                            </div>
                            <p><a href="dish.php?item=<?php echo $row['blurbl']; ?>" class="btn"><?php echo $row['title']; ?></a></p>
                            </div>
                        <?php
        }
        ?>
            </div>
        </div>
    </section>
</main>


<?php include( 'includes/footer.php'); ?>