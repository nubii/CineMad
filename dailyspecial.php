<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php define( "TITLE", "Orderdetails | CineMad"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
        <div class="container">

        <?php

        $daily = "SELECT * FROM dailyspecial ORDER BY dailyspecial_id ASC";
        $result = mysqli_query($conn, $daily);
        while($row = mysqli_fetch_array($result)) {

        if ($row['day'] == "monday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 1){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]'/>";
        };};
        if ($row['day'] == "tuesday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 2){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
        };};
        if ($row['day'] == "wednesday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 3){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
        };};
        if ($row['day'] == "thursday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 4){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
        };};
        if ($row['day'] == "friday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 5){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
        };};
        if ($row['day'] == "saturday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 6){
                echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
        };};
            if ($row['day'] == "sunday"){
       $todaysdate = date('Y-m-d');
       $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 7){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
                };
        };}
        /*
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 2){
            echo "<h2>Tuesday's Special</h2>";
            echo "<p>Caramelized Bananas � Rum raisin ice cream, caramelized bananas on top.</p>";



        }; ?>   <?php
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 3){
            echo "<h2>Wednesday's Special</h2>";
            echo "<p>Garlic bread � Crunchy but with strong taste.</p>";

        }; ?>
        <?php
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 4){
            echo "<h2>Thursday's Special</h2>";
            echo "<p>Cheesy Spinach Baked Penne � Delicious melted parmesan with sprinkled mozzarella, with a sauce that taste like Italy and soft pasta plates.</p>";

        }; ?>
        <?php
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 5){
            echo "<h2>Friday's Special</h2>";
            echo "<p>Belgian Chocolate Cake - Core of liquid chocolate with strawberry sauce and soft ice cream next.</p>";

        }; ?>
        <?php
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 6){
            echo "<h2>Saturday's Special</h2>";
            echo "<p>Cheesy baked tortellini � This bake beauty is what you need if you love little things in life.</p>";

        }; ?>
        <?php
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 7){
            echo "<h2>Sunday's Special</h2>";
            echo "Nachos � Crispy Mexican chips with grated cheese, salsa, strong jalapenjos and mild guacamole. As a starter or a light main meal.";

        };*/?>
        </div>
    </section>
</main>
