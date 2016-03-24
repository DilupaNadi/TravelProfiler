<?php

session_start();
$_SESSION["logged"] = "false";
session_destroy();
if(isset($_GET['passch'])){
    header('Location: ../index.php?psc=1');
} else {
header('Location: ../index.php');
}
