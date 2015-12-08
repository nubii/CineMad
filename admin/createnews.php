<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Create News | Admin Panel"); include( 'includes/header.php'); ?>

<?php
?>
    <main>
        <section class="well well__offset-3">
         <form action="insertnews.php" method="post">

        <ul>
          <li>
            <label for="title">News Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the news item" required autofocus maxlength="255" value="" />
          </li>
          
          <li>
            <label for="content">News Content</label>
            <textarea name="content" id="content" placeholder="The content of the news item" required maxlength="100000" style="height: 30em; width: 250px;"></textarea>
          </li>
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="New news item" />
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
       