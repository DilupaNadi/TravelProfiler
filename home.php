<?php
session_start();

if ($_SESSION["logged"] != "true") {
    header("Location: index.php?log=1");
}
//echo date('M Y');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Travel Profiler | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/hover.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="dist/css/skins/skin-black-light.min.css">
        <link href="path-to-file/social-sharing.css" rel="stylesheet">


        <!-- Start WOWSlider.com HEAD section -->
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
        <script type="text/javascript" src="engine1/jquery.js"></script>
        <!-- End WOWSlider.com HEAD section -->
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
                                        <div class="container">
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
                        <li class="active treeview">
                            <a href="home.php">
                                <i class="fa fa-dashboard"></i> <span>Home</span> 
                            </a>
                        </li>
                        <li><a href="report.php"><i class="fa fa-circle-o text-aqua"></i> <span>Search Places</span></a></li>
                        <li><a href="Places.php"><i class="fa fa-circle-o text-aqua"></i> <span>Know your Places</span></a></li>                                   
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
<!--                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Control panel</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>-->

                <!-- Main content -->
                <section class="content">

                    <div class="box">
                        <div class="box-header" style="text-align: center">
                            <img width="15%" height="10%" src="images/logo_black.png">
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Start WOWSlider.com BODY section -->
                                    <div id="wowslider-container1">
                                        <div class="ws_images"><ul>
                                                <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
                                               <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
                                                <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_2"/></li>
<!--                                                <li><img src="data1/images/2.jpg" alt="4" title="4" id="wows1_3"/></li>
                                                <li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_4"/></li>-->
                                            </ul></div>
                                        <div class="ws_script" style="position:absolute;left:-99%"></div>
                                        <div class="ws_shadow"></div>
                                    </div>	
                                    <script type="text/javascript" src="engine1/wowslider.js"></script>
                                    <script type="text/javascript" src="engine1/script.js"></script>
                                    <!-- End WOWSlider.com BODY section -->
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px">
                                <div class="col-sm-3">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="images/culture.jpg" alt="">
                                        <div class="overlay">
                                            <h2>CULTURE</h2>
                                            <!--                                            <a class="info" href="#">link here</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="images/thrills.jpg" alt="">
                                        <div class="overlay">
                                            <h2>SPORTS</h2>
                                            <!--                                            <a class="info" href="#">link here</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="images/religious.jpg" alt="">
                                        <div class="overlay">
                                            <h2>RELIGIOUS</h2>
                                            <!--                                            <a class="info" href="#">link here</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="images/pristine.jpg" alt="">
                                        <div class="overlay">
                                            <h2>PLEASURE</h2>
                                            <!--                                            <a class="info" href="#">link here</a>-->
                                        </div>
                                    </div>
                                </div>                      
                            </div>  
                            <br>
                            
            <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <div class="fb-share-button" data-href="https://web.facebook.com/TravelProfilerSL/" data-layout="button_count"></div>
            <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
            <a href="http://www.stumbleupon.com/submit?url=" title="Share on StumbleUpon" target="_blank" data-placement="top" class="btn btn-stumbleupon"><i class="fa fa-stumbleupon"></i> Stumbleupon</a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                            
                            <!--                            <div class="row" style="margin-top: 20px">
                                                            <div class="col-sm-3">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="images/scenic.jpg" alt="">
                                                                    <div class="overlay">
                                                                        <h2>SCENIC</h2>
                                                                                                                    <a class="info" href="#">link here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="images/essence.jpg" alt="">
                                                                    <div class="overlay">
                                                                        <h2>ESSENCE</h2>
                                                                                                                    <a class="info" href="#">link here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="images/bliss.jpg" alt="">
                                                                    <div class="overlay">
                                                                        <h2>BLISS</h2>
                                                                                                                    <a class="info" href="#">link here</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="hovereffect">
                                                                    <img class="img-responsive" src="images/festival.jpg" alt="">
                                                                    <div class="overlay">
                                                                        <h2>FESTIVE</h2>
                                                                                                                    <a class="info" href="#">link here</a>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                        </div>

                        <!--                            <div class="row" style="margin-top: 20px">
                                                        <div class="col-lg-12">
                                                            <p>
                                                                Most modern holiday discovery applications use metadata regarding the users and
                                                                holidays to enhance the user experience. Examples would be automatically extracting
                                                                user location, as well as using tags that categorize holiday locations by potential activity
                                                                type such as adventure, beach to provide more tailored search results. In most cases the
                                                                metadata is manually generated by tagging/configuring, is coarse grained and remain
                                                                static for long periods which limit their accuracy and usefulness.
                        
                                                            </p>
                        
                                                            <p>
                                                                The main objective of this project is to build an application which will suggest trending travel location which the users may be interested in visiting. The applications uses social media data feeds such as twitter, Facebook, foursquare to calculate trending locations and user specific feelings like Facebook status updates to create user profiles. 
                                                                The application basically consists following components. 
                        
                                                            <ul>
                                                                <li>Travel related social data filter. </li>
                                                                <li>Travel related social data formatter.  </li>
                                                                <li>Travel related data extractor  </li>
                                                                <li>Travel trends identifier.  </li>
                                                                <li>Knowledge base. </li>
                                                            </ul>
                        
                                                            </p>
                                                        </div>
                                                    </div>-->

                    </div>
            </div>

           
<!--            <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
            <a href="http://www.stumbleupon.com/submit?url=" title="Share on StumbleUpon" target="_blank" data-placement="top" class="btn btn-stumbleupon"><i class="fa fa-stumbleupon"></i> Stumbleupon</a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>-->
     

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!--      <footer class="main-footer">
            <div class="pull-right hidden-xs">
              <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2014-2015 <a href="http://nexify.lk">Nexify Systems</a>.</strong> All rights reserved.
          </footer>-->


    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg">
        <a href="http://twitter.com/home?status=" title="Share on Twitter" target="_blank" class="btn btn-twitter"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=" title="Share on Facebook" target="_blank" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="https://plus.google.com/share?url=" title="Share on Google+" target="_blank" class="btn btn-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
            <a href="http://www.stumbleupon.com/submit?url=" title="Share on StumbleUpon" target="_blank" data-placement="top" class="btn btn-stumbleupon"><i class="fa fa-stumbleupon"></i> Stumbleupon</a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=" title="Share on LinkedIn" target="_blank" class="btn btn-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
    </div>
</div><!-- ./wrapper -->

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
<div id="fb-root"></div>
<!--<div id="timer"></div>-->
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</html>
