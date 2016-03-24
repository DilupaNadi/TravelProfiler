<?php
include_once 'includes/db_connect.php';
session_start();

if ($_SESSION["logged"] != "true") {
    header("Location: index.php?log=1");
}

//echo date('M Y'); 
$userid = $_SESSION["userid"];
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id='$userid'");
$row = mysqli_fetch_assoc($result);

if (isset($_POST['changepass'])) {
    $newpass = $_POST['password'];
    mysqli_query($mysqli, "UPDATE users SET password='$newpass' WHERE id='$userid'");
    header("Location: includes/logout.php?passch=1");
}

if (isset($_POST['changeemail'])) {
    $newpass = $_POST['email'];
    mysqli_query($mysqli, "UPDATE users SET email='$newemail' WHERE id='$userid'");
    header("Location: includes/logout.php?passch=1");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Travel Profiler | Profile</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/skin-black-light.min.css">

    </head>
    <body class="hold-transition skin-black-light sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="home.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>T</b>P</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Travel</b>Profiler</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="users/images/<?php echo htmlentities($_SESSION['userid']) ?>/<?php echo htmlentities($_SESSION['username']) ?>.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?php echo htmlentities($_SESSION['username']); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="users/images/<?php echo htmlentities($_SESSION['userid']) ?>/<?php echo htmlentities($_SESSION['username']) ?>.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            <?php echo htmlentities($_SESSION['username']); ?>
                                            <small>Member since <?php echo htmlentities($_SESSION['userdate']); ?></small>
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="includes/logout.php" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="users/images/<?php echo htmlentities($_SESSION['userid']) ?>/<?php echo htmlentities($_SESSION['username']) ?>.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo htmlentities($_SESSION['username']); ?></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>

                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Home</span> 
                            </a>
                        </li>
                        <li class=""><a href="report.php"><i class="fa fa-circle-o text-aqua"></i> <span>Search Places</span></a></li>
                        <li class="active"><a href="Places.php"><i class="fa fa-circle-o text-aqua"></i> <span>Know your Places</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Profile
                        <small> </small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Profile</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="col-lg-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-sm-3" style="color: blue">Username</div>
                                    <div class="col-sm-3"> <?php echo htmlentities($_SESSION['username']); ?> </div>
                                    <div class="col-sm-3" style="color: blue">Country</div>
                                    <div class="col-sm-3"> <?php echo $row['country']; ?> </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3" style="color: blue">E-Mail</div>
                                    <div class="col-sm-3"> <?php echo htmlentities($_SESSION['email']); ?> </div>
                                    <div class="col-sm-3" style="color: blue">Gender</div>
                                    <div class="col-sm-3"> <?php echo $row['gender']; ?> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post">
                        <div class="col-lg-6">
                            <div class="box">
                                <div class="box-title"><h4 style="padding-left: 20px">Change Password</h4></div>
                                <div class="box-body"> <br>
                                    <div class="row">
                                        <div class="col-sm-4">Currant Password</div>
                                        <div class="col-sm-8"> <input name="curpass" class="form-control" type="password" id="tpass"> </div>
                                        <input id="curpass" type="hidden" value="<?php echo $row['password']; ?>">
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm-4">New Password</div>
                                        <div class="col-sm-8"> <input name="pass" class="form-control" type="password" id="newpass" required=""> </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">Confirm Password</div>
                                        <div class="col-sm-8"> <input name="password" class="form-control" type="password" id="confpass"> </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm-4">Email</div>
                                        <div class="col-sm-8"> <input name="email" class="form-control" type="email" id="confpass"> </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm-9"></div>
                                        <div class="col-sm-3"> <input class="btn btn-primary" type="submit" value="Update" name="changepass" required=""> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="col-lg-6">
                        <div class="box">
                            <div class="box-title"><h4 style="padding-left: 20px">Change Profile Image</h4></div>
                            <form method="post" action="includes/image_upload.php" enctype="multipart/form-data">
                                <div class="box-body"> <br>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-6"> <img width="50%" src="users/images/<?php echo htmlentities($_SESSION['userid']) ?>/<?php echo htmlentities($_SESSION['username']) ?>.jpg" class="img-thumbnail" alt="User Image"> </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm-4"></div>
                                        <div class="col-sm-4"> <input type="file" name="userpic" required="" id="userpic"> </div>
                                    </div> <br>
                                    <div class="row">
                                        <div class="col-sm-9"></div>
                                        <div class="col-sm-3"> <input class="btn btn-primary" type="submit" value="Update" name="changeimage"> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div style="height: 500px;"></div>

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
<!--            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://nexify.lk">Nexify Systems</a>.</strong> All rights reserved.
            </footer>-->


            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <script>

            function checkPassword() {
                var cpass = document.getElementById("curpass");
                var tpass = document.getElementById("tpass");
                if (cpass.value != tpass.value) {
                    tpass.setCustomValidity("Currant Pasword is Invalid");
                } else {
                    tpass.setCustomValidity('');
                }
            }
            tpass.onkeyup = checkPassword;

            var password = document.getElementById("newpass")
                    , confirm_password = document.getElementById("confpass");
            function validatePassword() {
                if (password.value != confirm_password.value) {
                    confirm_password.setCustomValidity("Passwords Don't Match");
                } else {
                    confirm_password.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            confirm_password.onkeyup = validatePassword;
        </script>
        <!-- jQuery 2.1.4 -->
        <script src="js/jQuery-2.1.4.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.5 -->
        <script src="js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
    </body>
</html>
