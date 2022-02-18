<?php
include("functions/init.php"); 

    $ses  = $call['session'];	

	//get classes
	$ssl  = "SELECT * FROM `admin` WHERE `session` = '$ses'";
	$rls  = query($ssl);
	$row  = mysqli_fetch_array($rls);

	//calculate next session values
	$a = str_split($ses,4);
	$b = $a[0] + 1;
	$c = str_split($ses,5);
	$d = $c[1] + 1;

	$aca = $b."/".$d;	

    echo $aca;


    //update admin table
    $sql = "UPDATE `admin` SET `session` = '$aca'";
    $res = query($sql);
	
	$qrl = "SELECT * FROM staff WHERE `bday` = '' OR `bday` = '1'";
	$rrl = query($qrl);
	
	while($rws = mysqli_fetch_array($rrl)){

		//update to zero
		$mnmn = "UPDATE staff SET `bday` = '0'";
		$mrs  = query($mnmn);
	}

	//update student bdayss
	$stt = "SELECT * FROM students WHERE `bday` = '' OR `bday` = '1'";
	$sds = query($stt);
	
	while($pos = mysqli_fetch_array($sds)){

		$psd = "UPDATE students SET `bday` = '0'";
		$pss = query($psd);
		
	}
	
	//insert record into session table
	$ses = "INSERT INTO `sessions`(`ses`)";
	$ses .= "VALUES('$aca')";
	$sfr = query($ses);

    redirect("./");
?>