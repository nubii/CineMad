<style>
    #flotte {
        width: 20%;
        margin-left: auto;
        margin-right: auto;
    }

    p {
        text-align: center;
        text-decoration: underline;
    }
</style>

<div class="flotte">
    <p><a href="guestbook.php">
<?php

$conn = mysqli_connect("localhost", "root", "123456");
if (!$conn) {
    die("Could not connect: ". mysqli_error($conn));
}

mysqli_select_db($conn, "guestbook");
$sql = "INSERT INTO guestbooken (fname, lname, message) VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[message]')";


if (empty($_POST['firstname'])) {
    echo "Did you remember to add your first name?";
}

elseif (empty($_POST['lastname'])) {
    echo "Did you remember to add your last name?";
}

elseif (empty($_POST['message'])) {
    echo "Did you remember to write a sweet message about us";
}

elseif (mysqli_query($conn, $sql)) {
    echo "We have successfully received your message";
}
else {
    echo "The was an error. It's not you it's me, sorry";
    mysqli_error($conn);


}
?>
 </a>
    </p>
        </div>

<div class=""></div>

