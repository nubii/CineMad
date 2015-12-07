        <?php
        $userName = $_SESSION['user_name'];
        $query = "SELECT * FROM users WHERE user = '$userName'";
		$result = mysqli_query($connection, $query);
		
		while($row = mysqli_fetch_array($result)) {
		
			
		if	($row['access'] == 0) {
			    redirect_to("bordbestilling.php");

			}
		}
?>