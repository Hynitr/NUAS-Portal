<?php
include("functions/init.php");
$dat  = md5("securitysecured");

$sql = "INSERT INTO security(`identifier`)";
$sql.= "VALUES('$dat')";
$rws = query($sql);
?>