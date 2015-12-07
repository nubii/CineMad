<?php
    $companyName = "CineMad";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo TITLE; ?></title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>

    <!--[if lt IE 9]>
    <html class="lt-ie9">
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a> 
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
 
    <script src='js/device.min.js'></script> 
</head>

<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->
    <header>
        
                <div class="camera_container">
            <div id="camera" class="camera_wrap">
<?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$menu = "SELECT * FROM SliderHeader ORDER BY Slider_id ASC";
$result = mysqli_query($conn, $menu);
$rows = array();
while($row = mysqli_fetch_array($result))
{ ?>

                 <div data-thumb="images/<?php echo  $row['Thumbnail'];?>.jpg" data-src="images/<?php echo  $row['Image'];?>.jpg">
                    <div class="camera_caption fadeIn">
                    </div>
                </div>
               
<?php
}
?>


                 <!-- Max 9 slides -->
                
            </div>

            <div class="brand wow fadeIn">
                <h1 class="brand_name">
                    <a href="./"><?php echo $companyName; ?></a>
                </h1>
            </div>
        </div>
        
        <div class="toggle-menu-container">
            <nav class="nav">
                <div class="nav_title"></div>
                <a class="sf-menu-toggle fa fa-bars" href="#"></a>
                <ul class="sf-menu">
                    <?php include('includes/nav.php'); ?>
                </ul>
            </nav>            
        </div>

    </header>