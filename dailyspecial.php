
        <?php
//included from dailyspecial.php on index.php
        $daily = "SELECT * FROM dailyspecial ORDER BY dailyspecial_id ASC";
        $result = mysqli_query($conn, $daily);
        while($row = mysqli_fetch_array($result)) {

        if ($row['day'] == "monday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 1){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p class='pblurb'>" . $row['blurb'] . "</p><br>";
            echo "<img src='/img/$row[img]'/>";
        };};
        if ($row['day'] == "tuesday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 2){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p class='pblurb'>" . $row['blurb'] . "</p><br>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
        };};
        if ($row['day'] == "wednesday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 3){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
        };};
        if ($row['day'] == "thursday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 4){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
        };};
        if ($row['day'] == "friday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 5){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
        };};
        if ($row['day'] == "saturday"){
        $todaysdate = date('Y-m-d');
        $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 6){
                echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
        };};
            if ($row['day'] == "sunday"){
       $todaysdate = date('Y-m-d');
       $inputDate = $todaysdate;
        $inputDateArray = explode('-', $inputDate);
        if(date('N', mktime (0, 0 , 0, $inputDateArray[1], $inputDateArray[2], $inputDateArray[0])) == 7){
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<p>" . $row['blurb'] . "</p>";
            echo "<img src='/img/$row[img]' class='dailyimg'/>";
                };
        };}
       ?>
