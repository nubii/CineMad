<?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$nav = "SELECT * FROM nav_items ORDER BY nav_id ASC";
$result = mysqli_query($conn, $nav);
$rows = array();
while($row = mysqli_fetch_array($result)){
    
    ?>
    
    <li><a href="<?php echo $row['slutty']; ?>.php"><?php echo $row['title']; ?></a></li>
        
        
        
    <?php    
        }
?>
