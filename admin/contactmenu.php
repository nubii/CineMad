<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Images | Admin Panel"); include( 'includes/header.php'); ?>
<main>
    <section class="well well__offset-3">
        <div class="container">
            <h2><em>Edit</em> contact information</h2>
            <div class="row box-2">
                <h3 style="margin-bottom: 20px;"><a href="createcontact.php">Create new contact information</a></h3>
<?php
$result=mysqli_query($connection, "SELECT * FROM contact ORDER BY id DESC");
$rows = array();
while($row = mysqli_fetch_array($result))
    { ?>
     <div class ="contacts">
         <h3><a href="contact.php?item=<?php echo $row['id']; ?>">Change this contact information</a></h3>
                        <p><?php echo $row["content"]; ?></p>
                        <address class="address-2">
                            <div class="address_container"><p><?php echo $row["address"]; ?></p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd><?php echo $row["telefone"]; ?></dd><br>
                                <dt>FAX:</dt> <dd><?php echo $row["fax"]; ?></dd><br>
                                <dt>E-mail:</dt> <dd><a href="<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></dd><br>
                                <dt>Hours:</dt> <dd><?php echo $row["hours"]; ?></dd>
                                
                                </div>
                                
    <?php
    }
    ?>


                    
    </div>
        </div>
    </section>
</main>
<?php include( 'includes/footer.php'); ?>
<?php
mysqli_close($connection);
?> 
</body>
</html>

<style>
    
        .decoration:before {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  left: 0;
  right: 50%;
  margin-right: 0;
  margin-left: 3px;
  background: #6c6860;
}
.decoration:after {
  content: '';
  position: absolute;
  height: 1px;
  top: 10px;
  right: 0;
  left: 50%;
  margin-left: 0;
  margin-right: 3px;
  background: #6c6860;
}

.contacts {
    width: 400px;
    position: relative;
    float: left;
    border: 2px;
    border-style: groove;
    margin-right: 25px;
    padding-bottom: 25px;
}

.address-2 dl {
    position: absolute;
    right: 0;
}


</style>