<?php
include("functions/init.php");

if(!isset($_SESSION['secured'])) {
	redirect("./invalid");
} else {
	
	if(!isset($_GET['id'])) {
		redirect("./invalid");
	} else {

		$data = $_GET['id'];
	}

	$sql = "SELECT * from `students` WHERE `qrid` = '$data'";
	$cons = query($sql);
	while ($row = mysqli_fetch_array($cons)) {
	    $z = $row['qrid'];
		$y = date("a");
		$r = $row['parent'];
		$m = $row['Middle Name'];
		$x = $row['Telephone1']." ".$row['Telephone2'];
        $j = date("h:i:a");
	}

	

			/***contact SMS API***/
			
			/**Update DB***/

			if($y == "am") {

		$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		$c = "Dear parent , Your child - ".$m." resumed school ".$j." Thank you!";
		$d = $_SESSION['cal']['blksmsname'];
		$e = $x;
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;
		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);

		$result = json_decode($resp);

		$errc =  $result->errno;

		if($errc == 150) {

			echo "BulkSMS Credit Exhausted";
		} else {

			
		
		$sl = "UPDATE students set `Active` = '1' WHERE `qrid` = '$data'";
		$re = query($sl);

				// notification message
		echo '

			<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title> '.$call["school"].' | Student Portal</title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="description" content="'.$call["school"].'">
		  <meta name="keywords" content="'.$call["school"].'">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		  <link rel="icon" href="dist/img/logo.png" type="image/png" />
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="dist/css/adminlte.min.css">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		</head>
		<body class="hold-transition lockscreen">
		<!-- Automatic element centering -->
		<div class="lockscreen-wrapper">
		  <div class="lockscreen-logo">
		    <a href="'.$call["website"].'"><b>'.$call["school"].'</b></a>
		  </div>
		  <!-- User name -->
		  <div class="lockscreen-name">Child now in School.</div>
		  <!-- START LOCK SCREEN ITEM -->
		  <div class="lockscreen-item">
		    <!-- lockscreen image -->
		   
		    <!-- /.lockscreen-image -->

		    <!-- lockscreen credentials (contains the form) -->

		  </div>
		  <!-- /.lockscreen-item -->
		  <div class="help-block text-center">

		  </div>
		  
		  <div class="lockscreen-footer text-center">
		    Copyright &copy; '.date("Y").' <b><a href="'.$call["website"].'" class="text-black">'.$call["school"].'</a></b><br>
		    Developed by <a target="_blank" href="https://doteightplus.com" class="text-black"> DotEightPlus</a>
		  </div>
		</div>
		<!-- /.center -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
		</html>


		';
		$err = curl_error($ch);


		curl_close($ch);
		}
		}else {


		$a = urlencode('Greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		$c = "Dear parent, Your child - ".$m." left the school at ".$j.". Please inspect the assignment(s) given. Thank you!";
		$d = $_SESSION['cal']['blksmsname'];
		$e = $x;
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$e;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);

		$result = json_decode($resp);

		$errc =  $result->errno;

		if($errc == 150) {

			echo "BulkSMS Credit Exhausted";
		} else {
		
		$l = "UPDATE students set `Active` = '0' WHERE `qrid` = '$data'";
		$e = mysqli_query($con, $l);

		// notification message
		echo '

			<!DOCTYPE html>
		<html>
		<head>
		  <meta charset="utf-8">
		  <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <title>'.$call["school"].' | Student Portal Demo</title>
		  <!-- Tell the browser to be responsive to screen width -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="description" content="'.$call["school"].'">
		  <meta name="keywords" content="'.$call["school"].'">
		  <!-- Font Awesome -->
		  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
		  <link rel="icon" href="dist/img/logo.png" type="image/png" />
		  <!-- Ionicons -->
		  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		  <!-- Theme style -->
		  <link rel="stylesheet" href="dist/css/adminlte.min.css">
		  <!-- Google Font: Source Sans Pro -->
		  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
		</head>
		<body class="hold-transition lockscreen">
		<!-- Automatic element centering -->
		<div class="lockscreen-wrapper">
		  <div class="lockscreen-logo">
		    <a href="'.$call["website"].'"><b>'.$call["school"].'</b></a>
		  </div>
		  <!-- User name -->
		  <div class="lockscreen-name">Child now out of school.</div>
		  <!-- START LOCK SCREEN ITEM -->
		  <div class="lockscreen-item">
		    <!-- lockscreen image -->
		   
		    <!-- /.lockscreen-image -->

		    <!-- lockscreen credentials (contains the form) -->

		  </div>
		  <!-- /.lockscreen-item -->
		  <div class="help-block text-center">

		  </div>
		  
		  <div class="lockscreen-footer text-center">
		    Copyright &copy; '.date("Y").' <b><a href="'.$call["website"].'" class="text-black">'.$call["school"].'</a></b><br>
		   Developed by <a target="_blank" href="https://doteightplus.com" class="text-black"> DotEightPlus</a>
		  </div>
		</div>
		<!-- /.center -->

		<!-- jQuery -->
		<script src="plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		</body>
		</html>


		';

		$err = curl_error($ch);


		curl_close($ch);	
		}
	}

			/***end update**/
	}		

?>