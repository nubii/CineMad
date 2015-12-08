<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Create Drink | Admin Panel"); include( 'includes/header.php'); ?>

<?php
?>
    <main>
        <section class="well well__offset-3">
         <form action="insertdrink.php" method="post">

        <ul>
          <li>
            <label for="title">Drink Title</label>
            <input type="text" name="title" id="title" placeholder="Name of the drink" required autofocus maxlength="255" value="" />
          </li>
          
          <li>
            <label for="price">Drink Price</label>
            <input type="text" name="price" id="price" placeholder="0" required maxlength="255" value="" />
          </li>
          
           <li>
            <label for="suggested">Suggested dish</label>
            <input type="text" name="suggested" id="suggested" placeholder="Maybe mac and cheese?" required maxlength="255" value="" />
          </li>
          
          <li>
            <label for="menu_url">Drink URL</label>
            <input type="text" name="drink_url" id="drink_url" placeholder="name_of_drink" required maxlength="255" value="" />
          </li>
          
 
          <li>
            <label for="content">Drink Content</label>
            <textarea name="content" id="content" placeholder="The content of the drink" required maxlength="100000" style="height: 30em; width: 250px;"></textarea>
          </li>
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="New drink" />
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
       