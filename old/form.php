<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
if (isset($_GET['error'])){
  $error = $_GET['error'];
  if($error==1){
    echo "Insert correct email";
  }
  elseif ($error==2) {
    echo "a field were empty";
  }}
elseif(isset($_GET['done'])) {
  $done = $_GET['done'];
  if ($done==1) {
    echo "Thank you, we will respond within 48 hours";
  }
}

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post" action="sendmail.php">
  Email:
  <input type="text" name="email" />
  <br />
  Subject:
  <input type="text" name="subject" />
  <br />
  Message:<br />
  <textarea name="message" rows="15" cols="40">
</textarea>
  <br />
  <input name="submit" type="submit" value="Submit" />
</form>
</body>
</html>