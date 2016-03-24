<?php

include_once './db_connect.php';
session_start();

if ($_SESSION["logged"] != "true") {
    header("Location: index.php?log=1");
}

$userid = $_SESSION["userid"];
$username = $_SESSION['username'];

if (isset($_POST['changeimage'])) {

    $target_dir = "../users/images/$userid/";

    $filea = $_FILES['userpic'];
    $path = $_FILES['userpic']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    $newname = $username."." . $ext;

    if ($ext == "jpg") {
        move_uploaded_file($filea['tmp_name'], $target_dir . $newname);
         echo "<script>
alert('Image successfully updated');
window.location.href='../profile.php';
</script>";
    } else {
        echo "<script>
alert('Invalid image format, Please use only JPG images');
window.location.href='../profile.php';
</script>";
    }
}

