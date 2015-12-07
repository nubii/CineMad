<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>

<?php
$daily = $_GET['item'];
$menu = "SELECT * FROM  dailyspecial WHERE dailyspecial_id ='$daily' ";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
?>
    <main>
        <section class="well well__offset-3">
         <form action="dailyedit.php" method="post">

        <ul>
          <li>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title of the dailyspecial" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $row['title'] )?>" />
          </li>
          
           <li>
            <label for="day">Day</label>
            <input type="text" name="day" id="day" placeholder="day of the week" required maxlength="255" value="<?php echo htmlspecialchars( $row['day'] )?>" />
          </li>
          
 
          <li>
            <label for="content">Content</label>
            <textarea name="content" id="content" placeholder="The content of the dailyspecial" required maxlength="100000" style="height: 30em; width: 250px;"><?php echo htmlspecialchars( $row['blurb'])?></textarea>
          </li>
          
          <input type="hidden" name="dailyspecial_id" id="dailyspecial_id" value="<?php echo $row['dailyspecial_id']; ?>">
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>
      
      
 
      <p><a href="deletedaily.php?id=<?php echo $row['dailyspecial_id'] ?>" onclick="return confirm('Are you sure you want to delete this daily special?')">Delete this daily special</a></p>
 

        </section>
        <div class="dish">
            <h2>Change image</h2>
        <div class="grid_4">
        <div class="img"><div class="img lazy-img lazy-loaded" style="padding-bottom: 76.21621621621622%;"><a href="dailyimage.php?item=<?php echo $row['dailyspecial_id']; ?>"><img class="lazy-loaded" data-src="http://examserver49.dk/img/<?php echo  $row['img'];?>" alt="<?php echo $row['title']; ?>"></a></div></div>
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
       