<?php
include_once 'includes/db_connect.php';
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE email='$email'");
    $row = mysqli_fetch_assoc($result);
    $dbpass = $row['password'];

    if ($dbpass == $password) {
        $_SESSION["logged"] = "true";
        $_SESSION["username"] = $row['username'];
        $_SESSION["userid"] = $row['id'];
        $_SESSION["userdate"] = $row['joined_date'];
        $_SESSION["email"] = $row['email'];
        header("Location: home.php");
    } else {
        header("Location: index.php?error=1");
    }
}
$msg ="";
if (isset($_GET['error'])) {
    $msg = 'Invalid username or password';
}
if (isset($_GET['log'])) {
    $msg = 'Please login with your username & password';
}
if (isset($_GET['psc'])) {
    $msg = 'Password changed, Please sign in';
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travel Profiler - Sign In</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/animate.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    </head>

    <body>
        <div class="container">
            <div class="top">
<!--			<h1 id="title" class="hidden"><span id="logo">Daily <span>UI</span></span></h1>-->
<!--                <h1 id="title" class="hidden"><span id="logo"></span></h1>-->
                <div id="title" class="hidden" style="text-align: center"><a href="index.php"><img id="logo" src="images/logo.png"></a></div>
            </div>
            <form method="post" name="login_form">
                <div class="login-box animated fadeInUp">
                    <div class="box-header">
                        <h2>Log In</h2>
                    </div>
                    <label for="email">E-Mail</label>
                    <br/>
                    <input name="email" type="text" id="username" required="">
                    <br/>
                    <label for="password">Password</label>
                    <br/>
                    <input name="password" type="password" id="password" required="">
                    <br/>
                    <!--                <button type="submit">Sign In</button>-->
                    <input type="submit" name="submit" value="Sign In" />

                    <div style="text-align: center; color: red;"><?php echo $msg; ?></div>
                    <a href="register.php"><p class="small">Create New Account</p></a>
                </div>
            </form>
        </div>
    </body>

    <script>
//        $(document).ready(function () {
//            $('#logo').addClass('animated fadeInDown');
//            $("input:text:visible:first").focus();
//        });
//        $('#username').focus(function () {
//            $('label[for="username"]').addClass('selected');
//        });
//        $('#username').blur(function () {
//            $('label[for="username"]').removeClass('selected');
//        });
//        $('#password').focus(function () {
//            $('label[for="password"]').addClass('selected');
//        });
//        $('#password').blur(function () {
//            $('label[for="password"]').removeClass('selected');
//        });
    </script>

</html>