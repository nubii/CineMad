<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact-form.css">

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

        <div id="stuck_container" class="stuck_container">
            <div class="container">

                <div class="brand">
                    <h1 class="brand_name">
                        <a href="./">Cafe</a>
                    </h1>
                </div>

                <nav class="nav">
                    <ul class="sf-menu">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="index-1.html">About</a>
                            <ul>
                                <li>
                                    <a href="#">Quisque nulla</a>
                                </li>
                                <li>
                                    <a href="#">Vestibulum libero</a>
                                    <ul>
                                        <li>
                                            <a href="#">Lorem</a>
                                        </li>
                                        <li>
                                            <a href="#">Dolor</a>
                                        </li>
                                        <li>
                                            <a href="#">Sit amet</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Vivamus eget nibh</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">What We Do</a>
                        </li>
                        <li>
                            <a href="index-3.html">Menu</a>
                        </li>
                        <li class="active">
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well well__offset-3">
            <div class="container">
                <h2><em>Our</em>Contacts</h2>
                <div class="map">
                  <div id="google-map" class="map_model"></div>
                  <ul class="map_locations">
                    <li data-x="-73.9874068" data-y="40.643180">
                      <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                    </li>
                  </ul>
                </div>
                <div class="row box-3">
                    <div class="grid_5">
                        <h2>GuestBook</h2>
                        <form id="contact-form" class='contact-form' form action="guest.php" method="post">
                            <fieldset>
                                <label class="name">
                                    First Name:
                                    <input type="text" name="firstname" placeholder="" value=""
                                           data-constraints="@Required @JustLetters"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>
								
								<label class="name">
                                    Last Name:
                                    <input type="text" name="lastname" placeholder="" value=""
                                           data-constraints="@Required @JustLetters"/>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*This is not a valid name.</span>
                                </label>
                
               
                
                                <label class="message">
                                    Message:
                                    <textarea name="message" placeholder=""
                                              data-constraints='@Required @Length(min=20,max=999999)'></textarea>                
                                    <span class="empty-message">*This field is required.</span>
                                    <span class="error-message">*The message is too short.</span>
                                </label>
                
                                <div class="btn-wr">
									<input type="submit" />
                                </div>
							</fieldset>
						</form>
                    </div>    
                    <div class="preffix_1 grid_6">
                        <h2>Contacts Information</h2>
                        <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consectetur orci sed Curabitur vel lorem sit amet nulla ullamcorper fermentum. In vitae varius augue, eu consectetur ligula. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym.<br><br>Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique rhoncuseri tym. Etiam dui eros, laoreet sit amet est vel, commodo venenatis eros.Lamus at magna non nunc tristique.</p>
                        <address class="address-2">
                            <div class="address_container"><p>The Company Name Inc. 9870 St Vincent Place, Glasgow, DC 45 Fr 45.</p></div>
                            <dl>
                                <dt>Telphone:</dt> <dd>+1 800 603 6035</dd><br>
                                <dt>FAX:</dt> <dd>+1 800 899 9898</dd><br>
                                <dt>E-mail:</dt> <dd><a href="mailto:mail@demolink.org">mail@demolink.org</a></dd>
                            </dl>                        
                        </address>
                    </div>
                </div>
				<?php
					$conn = mysqli_connect("localhost", "root", "123456");
					if (!$conn) {
						die("Could not connect: ". mysqli_error($conn));
					}

					mysqli_set_charset($conn, "utf8");
					mysqli_select_db($conn, "guestbook");
					$sql = "SELECT * FROM guestbooken ORDER BY id";
					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_array($result))
						echo "<div class=\"ideren\">ID: ".$row['ID']."</div>"." "
							."<div class=\"entryen\">Date: ".substr($row['Entry'],0,16)."</div>"." "
							."<div class=\"fname\">First name: ".$row['fName']."</div>"." "
							."<div class=\"lname\">Last name: " .$row['lName']."</div>"." "
							."<div class=\"message\">Message: ".$row['message']."</div>". "<br>";
					mysqli_close($conn);
					?>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <div class="container">
            <ul class="socials">
                <li><a href="#" class="fa fa-facebook"></a></li>
                <li><a href="#" class="fa fa-tumblr"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
            </ul>
            <div class="copyright">© <span id="copyright-year"></span> |
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="tm"><a href="#"><img src="images/TM_logo.png" alt=""></a></div>
    </footer>
</div>



<script src="js/script.js"></script>
</body>
</html>