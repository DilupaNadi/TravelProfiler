<?php

include_once './db_connect.php';
session_start();

$nowdate = date('M Y');

if (isset($_POST['submit'])) {

    
    $username = $_POST['username'];
    
    mysqli_query($mysqli, 'INSERT INTO users (username, email, password, country, gender, access_fb, fb_link, joined_date) values ("' . $_POST['username'] . '", "' . $_POST['email'] . '", "' . $_POST['password'] . '", "' . $_POST['country'] . '", "' . $_POST['gender'] . '", "' . $_POST['access_fb'] . '", "' . $_POST['fb_link'] . '", "' . $nowdate . '" )');
    $userid = mysqli_insert_id($mysqli);

    mkdir("../users/images/$userid");
    $target_dir = "../users/images/$userid/";

    $filea = $_FILES['userpic'];
    $path = $_FILES['userpic']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);

    $newname = $username . "." . $ext;
    
    if ($ext == "jpg") {
        move_uploaded_file($filea['tmp_name'], $target_dir . $newname);
        echo "<script>
alert('User successfully registered');
window.location.href='../index.php';
</script>";
    } else {
        echo "<script>
alert('User successfully registered, Invalid user image format');
window.location.href='../index.php';
</script>";
    }
}
