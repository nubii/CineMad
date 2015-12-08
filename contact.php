<?php 
    define("TITLE", "Contacts | CineMad");
    include('includes/header.php');
?>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Our</em>Contacts</h2>
               <div class="row box-3">
                    <div class="grid_5">
                        <h2>Send us an email</h2>
                        <form id="contact-form" class='contact-form' form action="sendmail.php" method="post">
                            <fieldset>
                                <label class="name">
                                    Email:
                                    <input type="text" name="email" placeholder="" value=""/>
                                </label>
								
								<label class="name">
                                    Subject:
                                    <input type="text" name="subject" placeholder="" value=""/>
                                </label>
                
               
                
                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder=""></textarea>
                                </label>
                
                                <div class="btn-wr">
									<input type="submit"/>
                                </div>
							</fieldset>
						</form>
                    </div>    
                    <div class="preffix_1 grid_6">
                        <h2>Contacts Information</h2>
        <?php $conn = mysqli_connect("mysql31.unoeuro.com","examserver4_dk8","4pf3kmta");

if(!$conn){
    die("could not connect: ". mysqli_error($conn));
}
mysqli_set_charset($conn, "utf8");
mysqli_select_db($conn, "examserver49_dk_db");
$menu = "SELECT * FROM  contact";
$result = mysqli_query($conn, $menu);
$row = mysqli_fetch_array($result);
?>

                        <p><?php echo $row["content"]; ?></p>
                        <address class="address-2">
                            <div class="address_container"><p><?php echo $row["address"]; ?></p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd><?php echo $row["telefone"]; ?></dd><br>
                                <dt>FAX:</dt> <dd><?php echo $row["fax"]; ?></dd><br>
                                <dt>E-mail:</dt> <dd><a href="<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></dd><br>
                                <dt>Hours:</dt> <dd><?php echo $row["hours"]; ?></dd><br>
                            </dl> 
                        </address>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php 
    include('includes/footer.php');
?>