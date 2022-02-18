<?php
session_start();
$con = mysqli_connect("localhost","root","","paradise school cms");

$cons = mysqli_query($con,"SELECT `firstTerm` from `results` where `AdmID` = '".$_SESSION['AdminID']."'");
while ($row = mysqli_fetch_array($cons)) {
		 $x = $row['firstTerm'];
		 echo $x;
		 header("location: ../staff/upload/results/'".$x."'");
	}	
?>