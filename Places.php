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
$usercat = $row['user_category'];

////$parts = explode(",", $usercat);
////$count = count($parts);
//
//$result1 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result2 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result3 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result4 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result5 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result6 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result7 = mysqli_query($mysqli, "SELECT * FROM blank");
//$result8 = mysqli_query($mysqli, "SELECT * FROM blank");
//
//if (isset($_POST['search'])) {
//
//
//
//    if (isset($_POST['category'])) {
////    print_r($_POST['checkboxvar']); 
//        $cat = implode(',', $_POST['category']);
//        $parts = explode(",", $cat);
//        $count = count($parts);
//
//        if ($count == 1) {
//            $cat1 = $parts[0];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//        }
//        if ($count == 2) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//        }
//        if ($count == 3) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//        }
//        if ($count == 4) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//            $cat4 = $parts[3];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//            $result4 = mysqli_query($mysqli, "SELECT * FROM $cat4");
//        }
//        if ($count == 5) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//            $cat4 = $parts[3];
//            $cat5 = $parts[4];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//            $result4 = mysqli_query($mysqli, "SELECT * FROM $cat4");
//            $result5 = mysqli_query($mysqli, "SELECT * FROM $cat5");
//        }
//        if ($count == 6) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//            $cat4 = $parts[3];
//            $cat5 = $parts[4];
//            $cat6 = $parts[5];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//            $result4 = mysqli_query($mysqli, "SELECT * FROM $cat4");
//            $result5 = mysqli_query($mysqli, "SELECT * FROM $cat5");
//            $result6 = mysqli_query($mysqli, "SELECT * FROM $cat6");
//        }
//        if ($count == 7) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//            $cat4 = $parts[3];
//            $cat5 = $parts[4];
//            $cat6 = $parts[5];
//            $cat7 = $parts[6];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//            $result4 = mysqli_query($mysqli, "SELECT * FROM $cat4");
//            $result5 = mysqli_query($mysqli, "SELECT * FROM $cat5");
//            $result6 = mysqli_query($mysqli, "SELECT * FROM $cat6");
//            $result7 = mysqli_query($mysqli, "SELECT * FROM $cat7");
//        }
//        if ($count == 8) {
//            $cat1 = $parts[0];
//            $cat2 = $parts[1];
//            $cat3 = $parts[2];
//            $cat4 = $parts[3];
//            $cat5 = $parts[4];
//            $cat6 = $parts[5];
//            $cat7 = $parts[6];
//            $cat8 = $parts[7];
//
//            $result1 = mysqli_query($mysqli, "SELECT * FROM $cat1");
//            $result2 = mysqli_query($mysqli, "SELECT * FROM $cat2");
//            $result3 = mysqli_query($mysqli, "SELECT * FROM $cat3");
//            $result4 = mysqli_query($mysqli, "SELECT * FROM $cat4");
//            $result5 = mysqli_query($mysqli, "SELECT * FROM $cat5");
//            $result6 = mysqli_query($mysqli, "SELECT * FROM $cat6");
//            $result7 = mysqli_query($mysqli, "SELECT * FROM $cat7");
//            $result8 = mysqli_query($mysqli, "SELECT * FROM $cat8");
//        }
//    }
//}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Travel Profiler | Report</title>
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

        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

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
                        <li class="active"><a href="report.php"><i class="fa fa-circle-o text-aqua"></i> <span>Search Places</span></a></li>
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
                        Know
                        <small>your places</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Know your places</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="col-lg-12">
                        <div class="row">
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

                        <div class="row">
                            <form method="post">
                                <div class="box">
                                    <div class="box-body">
                                        <!--                                        <div class="col-sm-3">Categories that your prefer</div>-->
                                        <!--                                        <div class="col-sm-5">
                                                                                    <select class="form-control" name="country" required="" tabindex=3 id="country">
                                                                                        <option>Select Country</option>
                                                                                        <option>Afghanistan</option>
                                                                                        <option>Åland Islands</option>
                                                                                        <option>Albania</option>
                                                                                        <option>Algeria</option>
                                                                                        <option>American Samoa</option>
                                                                                        <option>Andorra</option>
                                                                                        <option>Angola</option>
                                                                                        <option>Anguilla</option>
                                                                                        <option>Antarctica</option>
                                                                                        <option>Antigua and Barbuda</option>
                                                                                        <option>Argentina</option>
                                                                                        <option>Armenia</option>
                                                                                        <option>Aruba</option>
                                                                                        <option>Australia</option>
                                                                                        <option>Austria</option>
                                                                                        <option>Azerbaijan</option>
                                                                                        <option>Bahamas</option>
                                                                                        <option>Bahrain</option>
                                                                                        <option>Bangladesh</option>
                                                                                        <option>Barbados</option>
                                                                                        <option>Belarus</option>
                                                                                        <option>Belgium</option>
                                                                                        <option>Belize</option>
                                                                                        <option>Benin</option>
                                                                                        <option>Bermuda</option>
                                                                                        <option>Bhutan</option>
                                                                                        <option>Bolivia, Plurinational State of</option>
                                                                                        <option>Bonaire, Sint Eustatius and Saba</option>
                                                                                        <option>Bosnia and Herzegovina</option>
                                                                                        <option>Botswana</option>
                                                                                        <option>Bouvet Island</option>
                                                                                        <option>Brazil</option>
                                                                                        <option>British Indian Ocean Territory</option>
                                                                                        <option>Brunei Darussalam</option>
                                                                                        <option>Bulgaria</option>
                                                                                        <option>Burkina Faso</option>
                                                                                        <option>Burundi</option>
                                                                                        <option>Cambodia</option>
                                                                                        <option>Cameroon</option>
                                                                                        <option>Canada</option>
                                                                                        <option>Cape Verde</option>
                                                                                        <option>Cayman Islands</option>
                                                                                        <option>Central African Republic</option>
                                                                                        <option>Chad</option>
                                                                                        <option>Chile</option>
                                                                                        <option>China</option>
                                                                                        <option>Christmas Island</option>
                                                                                        <option>Cocos (Keeling) Islands</option>
                                                                                        <option>Colombia</option>
                                                                                        <option>Comoros</option>
                                                                                        <option>Congo</option>
                                                                                        <option>Congo, the Democratic Republic of the</option>
                                                                                        <option>Cook Islands</option>
                                                                                        <option>Costa Rica</option>
                                                                                        <option>Côte d'Ivoire</option>
                                                                                        <option>Croatia</option>
                                                                                        <option>Cuba</option>
                                                                                        <optionCuraçao</option>
                                                                                            <option>Cyprus</option>
                                                                                            <option>Czech Republic</option>
                                                                                            <option>Denmark</option>
                                                                                            <option>Djibouti</option>
                                                                                            <option>Dominica</option>
                                                                                            <option>Dominican Republic</option>
                                                                                            <option>Ecuador</option>
                                                                                            <option>Egypt</option>
                                                                                            <option>El Salvador</option>
                                                                                            <option>Equatorial Guinea</option>
                                                                                            <option>Eritrea</option>
                                                                                            <option>Estonia</option>
                                                                                            <option>Ethiopia</option>
                                                                                            <option>Falkland Islands (Malvinas)</option>
                                                                                            <option>Faroe Islands</option>
                                                                                            <option>Fiji</option>
                                                                                            <option>Finland</option>
                                                                                            <option>France</option>
                                                                                            <option>French Guiana</option>
                                                                                            <option>French Polynesia</option>
                                                                                            <option>French Southern Territories</option>
                                                                                            <option>Gabon</option>
                                                                                            <option>Gambia</option>
                                                                                            <option>Georgia</option>
                                                                                            <option>Germany</option>
                                                                                            <option>Ghana</option>
                                                                                            <option>Gibraltar</option>
                                                                                            <option>Greece</option>
                                                                                            <option>Greenland</option>
                                                                                            <option >Grenada</option>
                                                                                            <option >Guadeloupe</option>
                                                                                            <option >Guam</option>
                                                                                            <option >Guatemala</option>
                                                                                            <option>Guernsey</option>
                                                                                            <option>Guinea</option>
                                                                                            <option >Guinea-Bissau</option>
                                                                                            <option>Guyana</option>
                                                                                            <option>Haiti</option>
                                                                                            <option>Heard Island and McDonald Islands</option>
                                                                                            <option >Holy See (Vatican City State)</option>
                                                                                            <option >Honduras</option>
                                                                                            <option >Hong Kong</option>
                                                                                            <option >Hungary</option>
                                                                                            <option >Iceland</option>
                                                                                            <option>India</option>
                                                                                            <option>Indonesia</option>
                                                                                            <option>Iran, Islamic Republic of</option>
                                                                                            <option>Iraq</option>
                                                                                            <option>Ireland</option>
                                                                                            <option>Isle of Man</option>
                                                                                            <option>Israel</option>
                                                                                            <option>Italy</option>
                                                                                            <option>Jamaica</option>
                                                                                            <option>Japan</option>
                                                                                            <option>Jersey</option>
                                                                                            <option>Jordan</option>
                                                                                            <option>Kazakhstan</option>
                                                                                            <option>Kenya</option>
                                                                                            <option>Kiribati</option>
                                                                                            <option>Korea, Democratic People's Republic of</option>
                                                                                            <option>Korea, Republic of</option>
                                                                                            <option>Kuwait</option>
                                                                                            <option>Kyrgyzstan</option>
                                                                                            <option>Lao People's Democratic Republic</option>
                                                                                            <option>Latvia</option>
                                                                                            <option>Lebanon</option>
                                                                                            <option>Lesotho</option>
                                                                                            <option>Liberia</option>
                                                                                            <option>Libya</option>
                                                                                            <option>Liechtenstein</option>
                                                                                            <option>Lithuania</option>
                                                                                            <option>Luxembourg</option>
                                                                                            <option>Macao</option>
                                                                                            <option>Macedonia, the former Yugoslav Republic of</option>
                                                                                            <option>Madagascar</option>
                                                                                            <option>Malawi</option>
                                                                                            <option>Malaysia</option>
                                                                                            <option>Maldives</option>
                                                                                            <option>Mali</option>
                                                                                            <option>Malta</option>
                                                                                            <option>Marshall Islands</option>
                                                                                            <option>Martinique</option>
                                                                                            <option>Mauritania</option>
                                                                                            <option>Mauritius</option>
                                                                                            <option>Mayotte</option>
                                                                                            <option >Mexico</option>
                                                                                            <option>Micronesia, Federated States of</option>
                                                                                            <option >Moldova, Republic of</option>
                                                                                            <option >Monaco</option>
                                                                                            <option >Mongolia</option>
                                                                                            <option >Montenegro</option>
                                                                                            <option >Montserrat</option>
                                                                                            <option >Morocco</option>
                                                                                            <option >Mozambique</option>
                                                                                            <option >Myanmar</option>
                                                                                            <option >Namibia</option>
                                                                                            <option >Nauru</option>
                                                                                            <option >Nepal</option>
                                                                                            <option>Netherlands</option>
                                                                                            <option>New Caledonia</option>
                                                                                            <option>New Zealand</option>
                                                                                            <option>Nicaragua</option>
                                                                                            <option>Niger</option>
                                                                                            <option >Nigeria</option>
                                                                                            <option>Niue</option>
                                                                                            <option >Norfolk Island</option>
                                                                                            <option >Northern Mariana Islands</option>
                                                                                            <option>Norway</option>
                                                                                            <option>Oman</option>
                                                                                            <option >Pakistan</option>
                                                                                            <option >Palau</option>
                                                                                            <option >Palestinian Territory, Occupied</option>
                                                                                            <option>Panama</option>
                                                                                            <option >Papua New Guinea</option>
                                                                                            <option >Paraguay</option>
                                                                                            <option >Peru</option>
                                                                                            <option >Philippines</option>
                                                                                            <option >Pitcairn</option>
                                                                                            <option >Poland</option>
                                                                                            <option >Portugal</option>
                                                                                            <option >Puerto Rico</option>
                                                                                            <option >Qatar</option>
                                                                                            <option >Réunion</option>
                                                                                            <option >Romania</option>
                                                                                            <option >Russian Federation</option>
                                                                                            <option >Rwanda</option>
                                                                                            <option >Saint Barthélemy</option>
                                                                                            <option >Saint Helena, Ascension and Tristan da Cunha</option>
                                                                                            <option >Saint Kitts and Nevis</option>
                                                                                            <option >Saint Lucia</option>
                                                                                            <option >Saint Martin (French part)</option>
                                                                                            <option >Saint Pierre and Miquelon</option>
                                                                                            <option >Saint Vincent and the Grenadines</option>
                                                                                            <option >Samoa</option>
                                                                                            <option >San Marino</option>
                                                                                            <option >Sao Tome and Principe</option>
                                                                                            <option >Saudi Arabia</option>
                                                                                            <option >Senegal</option>
                                                                                            <option >Serbia</option>
                                                                                            <option >Seychelles</option>
                                                                                            <option >Sierra Leone</option>
                                                                                            <option >Singapore</option>
                                                                                            <option >Sint Maarten (Dutch part)</option>
                                                                                            <option >Slovakia</option>
                                                                                            <option >Slovenia</option>
                                                                                            <option>Solomon Islands</option>
                                                                                            <option >Somalia</option>
                                                                                            <option >South Africa</option>
                                                                                            <option >South Georgia and the South Sandwich Islands</option>
                                                                                            <option>South Sudan</option>
                                                                                            <option >Spain</option>
                                                                                            <option>Sri Lanka</option>
                                                                                            <option>Sudan</option>
                                                                                            <option>Suriname</option>
                                                                                            <option>Svalbard and Jan Mayen</option>
                                                                                            <option>Swaziland</option>
                                                                                            <option>Sweden</option>
                                                                                            <option>Switzerland</option>
                                                                                            <option>Syrian Arab Republic</option>
                                                                                            <option>Taiwan, Province of China</option>
                                                                                            <option>Tajikistan</option>
                                                                                            <option>Tanzania, United Republic of</option>
                                                                                            <option>Thailand</option>
                                                                                            <option>Timor-Leste</option>
                                                                                            <option>Togo</option>
                                                                                            <option >Tokelau</option>
                                                                                            <option>Tonga</option>
                                                                                            <option>Trinidad and Tobago</option>
                                                                                            <option >Tunisia</option>
                                                                                            <option >Turkey</option>
                                                                                            <option>Turkmenistan</option>
                                                                                            <option >Turks and Caicos Islands</option>
                                                                                            <option>Tuvalu</option>
                                                                                            <option>Uganda</option>
                                                                                            <option>Ukraine</option>
                                                                                            <option>United Arab Emirates</option>
                                                                                            <option >United Kingdom</option>
                                                                                            <option >United States</option>
                                                                                            <option >United States Minor Outlying Islands</option>
                                                                                            <option>Uruguay</option>
                                                                                            <option >Uzbekistan</option>
                                                                                            <option>Vanuatu</option>
                                                                                            <option>Venezuela, Bolivarian Republic of</option>
                                                                                            <optionViet Nam</option>
                                                                                                <option>Virgin Islands, British</option>
                                                                                                <option>Virgin Islands, U.S.</option>
                                                                                                <option>Wallis and Futuna</option>
                                                                                                <option>Western Sahara</option>
                                                                                                <option>Yemen</option>
                                                                                                <option>Zambia</option>
                                                                                                <option>Zimbabwe</option>
                                                                                                </select>
                                                                                                </div>-->
                    <label for="category">Category</label>
                    <br/>
                    <input name="category" type="category" id="category">
                    <br/> <br> <br> 
<!--                                        <div class="col-sm-7">
                                            <p> <input type="checkbox" name="category[]" value="recreation_tourism">&nbsp; Recreation Tourism 
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="cultural_tourism">&nbsp; Cultural Tourism
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="nature_tourism">&nbsp; Nature Tourism 
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="pleasure_tourism">&nbsp; Pleasure Tourism </p>

                                            <p> <input type="checkbox" name="category[]" value="sports_tourism">&nbsp; Sports Tourism 
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="religious_tourism">&nbsp; Religious Tourism
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="medical_or_health_tourism">&nbsp; Medical or health tourism 
                                                &nbsp;&nbsp;<input type="checkbox" name="category[]" value="adventure_tourism">&nbsp; Adventure Tourism </p>
                                        </div>-->
                                        <div class="col-sm-1" style="text-align: right"><input class="btn btn-primary" name="search" type="submit" value="Search"><input name="count" type="hidden" value="<?php echo $count; ?>"</div><!--
                                    </div>-->
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Place</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
<!--                                    <tbody>
                                        <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                                            <tr>
                                                <td><?php echo $row1['place'] ?></td>
                                                <td><?php echo $row1['description'] ?></td>
                                                <td><?php echo $row1['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php while ($row2 = mysqli_fetch_assoc($result2)) { ?>
                                            <tr>
                                                <td><?php echo $row2['place'] ?></td>
                                                <td><?php echo $row2['description'] ?></td>
                                                <td><?php echo $row2['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php while ($row3 = mysqli_fetch_assoc($result3)) { ?>
                                            <tr>
                                                <td><?php echo $row3['place'] ?></td>
                                                <td><?php echo $row3['description'] ?></td>
                                                <td><?php echo $row3['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                        <?php while ($row4 = mysqli_fetch_assoc($result4)) { ?>
                                            <tr>
                                                <td><?php echo $row4['place'] ?></td>
                                                <td><?php echo $row4['description'] ?></td>
                                                <td><?php echo $row4['category'] ?></td>
                                            </tr>
                                        <?php } ?>

                                        <?php while ($row5 = mysqli_fetch_assoc($result5)) { ?>
                                            <tr>
                                                <td><?php echo $row5['place'] ?></td>
                                                <td><?php echo $row5['description'] ?></td>
                                                <td><?php echo $row5['category'] ?></td>
                                            </tr>
                                        <?php } ?>

                                        <?php while ($row6 = mysqli_fetch_assoc($result6)) { ?>
                                            <tr>
                                                <td><?php echo $row6['place'] ?></td>
                                                <td><?php echo $row6['description'] ?></td>
                                                <td><?php echo $row6['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                            
                                            <?php while ($row7 = mysqli_fetch_assoc($result7)) { ?>
                                            <tr>
                                                <td><?php echo $row7['place'] ?></td>
                                                <td><?php echo $row7['description'] ?></td>
                                                <td><?php echo $row7['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                            
                                            <?php while ($row8 = mysqli_fetch_assoc($result8)) { ?>
                                            <tr>
                                                <td><?php echo $row8['place'] ?></td>
                                                <td><?php echo $row8['description'] ?></td>
                                                <td><?php echo $row8['category'] ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>-->
                                    <tfoot>
                                        <tr>
                                            <th>Place</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                        </tr>
                                    </tfoot>
                                </table>                            
<!--                                <div class="col-sm-1" style="text-align: right"><input class="btn btn-primary" name="search" type="submit" value="Search"> <input name="count" type="hidden" value="<?php echo $count; ?>"</div>
                                    </div>-->
                            </div>
<!--                            <div class="col-sm-1" style="text-align: right"><input class="btn btn-primary" name="search" type="submit" value="Search"> <input name="count" type="hidden" value="<?php echo $count; ?>"</div>
                                    </div>-->
                        </div>
                        
<!--                   <div class="col-sm-1" style="text-align: right"><input class="btn btn-primary" name="search" type="submit" value="Print"><input name="count" type="hidden" value="<?php echo $count; ?>"</div>
                    <a href="Places.php"><p class="small">Know your places</p></a>
                    </div>-->
                    </div>
                        
<!--                        <div class="fb-share-button" data-href="http://localhost/Travel_profiler/Places.php" data-layout="button_count"></div> -->
                        <button onclick="myFunction()">Print</button>
            </div>



        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <!--                                                        <footer class="main-footer">
                                                                <div class="pull-right hidden-xs">
                                                                    <b>Version</b> 1.0.0
                                                                </div>
                                                                <strong>Copyright &copy; 2014-2015 <a href="http://nexify.lk">Nexify Systems</a>.</strong> All rights reserved.
                                                            </footer>-->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $(".example1").DataTable({
            fixedHeader: {
                footer: true
            }

        });


        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
<script type="text/javascript">
    document.getElementById('country').value = "<?php echo $_POST['country']; ?>";
</script>
</body>
<div id="fb-root"></div>
<!--<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>-->
<script>
function myFunction() {
    window.print();
}
</script>
</html>
