<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>

<?php
?>
    <main>
        <section class="well well__offset-3">
         <form action="insertdaily.php" method="post">

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
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="New daily special" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>

 

        </section>
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
       