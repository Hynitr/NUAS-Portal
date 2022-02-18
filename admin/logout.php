<?php
include("functions/init.php");

session_destroy();
header("location: ./login");

// redirect("login.php");
?>