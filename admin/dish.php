<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Dish | Admin Panel"); include( 'includes/header.php'); ?>

<?php
$dish = trim(htmlspecialchars(mysqli_real_escape_string($connection, $_GET['item'])));
$menu = "SELECT * FROM  menuItems WHERE menu_url ='$dish' ";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
$id = $row['menu_id'];
?>
    <main>
        <section class="well well__offset-3">
         <form action="dishedit.php" method="post">

        <ul>
          <li>
            <label for="title">Dish Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the dish" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $row['title'] )?>" />
          </li>
          
          <li>
            <label for="price">Dish Price</label>
            <input type="text" name="price" id="price" placeholder="0" required maxlength="255" value="<?php echo htmlspecialchars( $row['price'] )?>" />
          </li>
          
           <li>
            <label for="suggested">Suggested beverage</label>
            <input type="text" name="suggested" id="suggested" placeholder="Maybe coke?" required maxlength="255" value="<?php echo htmlspecialchars( $row['drink'] )?>" />
          </li>
          
 
          <li>
            <label for="content">Dish Content</label>
            <textarea name="content" id="content" placeholder="The content of the dish" required maxlength="100000" style="height: 30em; width: 250px;"><?php echo htmlspecialchars( $row['blurb'])?></textarea>
          </li>
          
          <input type="hidden" name="menu_id" id="menu_id" value="<?php echo $row['menu_id']; ?>">
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>
      
      
 
      <p><a href="deletedish.php?id=<?php echo $row['menu_url'] ?>" onclick="return confirm('Are you sure you want to delete this dish?')">Delete this dish</a></p>
 

        </section>
        <div class="dish">
            <h2>Change image</h2>
        <div class="grid_4">
        <div class="img"><div class="img lazy-img lazy-loaded" style="padding-bottom: 76.21621621621622%;"><a href="image.php?item=<?php echo $row['menu_url']; ?>"><img class="lazy-loaded" data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>"></a></div></div>
        </div></div></div>
    </main>
    
  <?php include('includes/footer.php'); ?>  
    
    <style>
        .well__offset-3 {
    padding: 131px 0px 129px 0px;
    margin-right: auto;
    margin-left: auto;
    position: relative;
    width: 500px;
    min-height: 400px;
}

        .well__offset-3 li {
    margin-top: 5px;
}
input[type="text"], textarea {
    float: right;
}

.button {
    margin-top: 20px;

}

.lazy-img .lazy-loaded {
    opacity: 1;
}
        
    </style>
       