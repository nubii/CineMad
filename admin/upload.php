<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/admin.php"); ?>

<?php define( "TITLE", "Image Upload | Admin Panel"); include( 'includes/header.php'); ?>
<?php
define ("MAX_SIZE","10240");

function getExt($str){
    //hu.llo.oo!&-+.jpg
    $file_name = explode(".",$str);
    $ext = $file_name[count($file_name)-1];
    return $ext;
}

$errors=false;
if(isset($_POST['Submit']))
{
    $image=$_FILES['image']['name'];
    if ($image)
    {
        $filename = stripslashes($_FILES['image']['name']);
        $extension = getExt($filename);
        $extension = strtolower($extension);
        if(!in_array($extension, array("jpg","jpeg","png","gif")))
        {
            echo '<h1>Unknown filetype!</h1>';
            $errors=true;
        }
        else
        {
            $size=filesize($_FILES['image']['tmp_name']);

            if ($size > MAX_SIZE*1024)
            {
                echo '<h1>Image is to big: Max 10 mb!</h1>';
                $errors=true;
            }else{

            $newname = "../img/".$image;
            $copied = copy($_FILES['image']['tmp_name'], $newname);
            if (!$copied)
            {
                echo '<h1>Copy unsuccessfull!</h1>';
                $errors=true;
            }
            }
        }
    }
    if(!$errors)
    {
        $query = "INSERT INTO img_upload (filename
						) VALUES ('{$image}'
						)";
        $result = mysqli_query($connection, $query);

        echo "<h1>Image succesfully uploaded!</h1>";
    }else{
        $image = "";
    }
}

?>
<main>
    <section class="well well__offset-3">
<form name="upload" method="post" enctype="multipart/form-data"  action="">
    <h2>upload an image</h2>
    <div class="wrapper">
    <b>Image:</b> <input type="file" name="image" value=""><br />
    <input name="Submit" type="submit" value="Submit">
    </div>
</form>
    </section>
</main>
</body>
</html>

<style>
    .wrapper {
    width: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
}
</style>