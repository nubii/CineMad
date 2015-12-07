<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>

<?php
$contact = $_GET['item'];
$menu = "SELECT * FROM  contact WHERE id ='$contact' ";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
$id = $row['id'];
?>
    <main>
        <section class="well well__offset-3">
         <form action="editcontact.php" method="post">

        <ul>
          <li>
            <label for="fax">Fax</label>
            <input type="text" name="fax" id="fax" placeholder="Fax number" required autofocus maxlength="255" value="<?php echo htmlspecialchars( $row['fax'] )?>" />
          </li>
          
          <li>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" placeholder="0" required maxlength="255" value="<?php echo htmlspecialchars( $row['address'] )?>" />
          </li>
          
           <li>
            <label for="telefone">Telefone number</label>
            <input type="text" name="telefone" id="telefone" placeholder="Maybe coke?" required maxlength="255" value="<?php echo htmlspecialchars( $row['telefone'] )?>" />
          </li>
          
          <li>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="E-mail" required maxlength="255" value="<?php echo htmlspecialchars( $row['email'] )?>" />
          </li>
          
          <li>
            <label for="hours">Hours</label>
            <input type="text" name="hours" id="hours" placeholder="Hours" required maxlength="255" value="<?php echo htmlspecialchars( $row['hours'] )?>" />
          </li>
          
 
          <li>
            <label for="content">About this restaurant</label>
            <textarea name="content" id="content" placeholder="About this restaurant" required maxlength="100000" style="height: 30em; width: 250px;"><?php echo htmlspecialchars( $row['content'])?></textarea>
          </li>
          
          <input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
         
        </ul>
 
 
        <div class="buttons">
          <input type="submit" name="saveChanges" value="Save Changes" />
          <input type="submit" formnovalidate name="cancel" value="Cancel" />
        </div>
 
      </form>
      
      
 
      <p><a href="deletecontact.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this contact information?')">Delete this contact information</a></p>
 

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
       