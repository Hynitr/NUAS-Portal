<?php ob_start();
session_start();

date_default_timezone_set('Africa/Lagos');

include("db.php");
include("functions.php");

//get school name
$sql = "SELECT * FROM `admin`";
$rsl = query($sql);
$GLOBALS['call'] = mysqli_fetch_array($rsl);

//get school details
$sql = "SELECT * FROM `admin`";
$rsl = query($sql);
$_SESSION['cal'] = mysqli_fetch_array($rsl);

staffbday();
birthday_alert();
?>