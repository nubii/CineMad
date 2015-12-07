<?php
spl_autoload_register(function ($class)
{include"".$class.".php";});
define ("MAX_SIZE","30000");
$upmsg = array();
if(isset($_POST['Submit']))
{
    if ($_FILES['image']['name'])
    {
        $imageName = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];
        $image_type = getimagesize($file);

        if ((image_type == IMAGETYPE_JPEG || image_type == IMAGETYPE_GIF || image_type == IMAGETYPE_PNG))
        {
            $size=filesize($_FILES['image']['tmp_name']);

            if ($size < MAX_SIZE*1024)
            {
                $prefix = uniqid();
                $iName = $prefix."_".$imageName;
                $newName="img/".$iName;
                $resOBJ = new imageResizer();
                $resOBJ ->load($file);

                 //  $width = 126;
                 //  $height = 126;
                 //   $resOBJ ->resize($width,$height);
                 //   array_push($upmsg, "Image resized to thumbnail size");
                    
                    $height = 126;
                    $resOBJ ->resizeToHeight($height);
                    array_push($upmsg, "Image resized to thumbnail size");


            }else{
                array_push($upmsg, "Image is to big: Max 30 Mb!");
            }
        }else{
            array_push($upmsg, "Unknown filetype!");
        }
    $resOBJ ->save($newName);
    $mysqli = new mysqli("localhost", "nubii123", "123456", "cinemad");
    $mysqli->query ("INSERT INTO img_thumb (filename) VALUES ('".$iName."')");
    array_push($upmsg, "Image successfully uploaded!");
    }else{
        array_push($upmsg, "ERROR: You need to select an image!");
    }
}
?>
<html>
<body>
<?php
foreach ($upmsg as $msg)
{
echo "<h1>".$msg."</h1>";
}
?>
<form name="imgup" method="post" enctype="multipart/form-data"  action="">
    <h1>Image upload</h1>
    <h2>Here you can upload an image!</h2>
    <b>Image:</b> <input type="file" name="image" value=""><br />

    <input name="Submit" type="submit" value="Submit">
</form>
</body>
</html>