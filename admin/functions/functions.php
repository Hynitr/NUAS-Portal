<?php
/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}

function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}



function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}

function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}

function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div class="alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}



/************************validate user login functions**********/

if(isset($_POST['password'])) {


			$admission       = "admin";
			$password   	 = md5($_POST['password']);

            login_admin($admission, $password);

			
} //function


/************************ user login functions**********/

function login_admin($admission, $password) {

$sql 	= "SELECT `Password` FROM `admin` WHERE `Admin No.` = '".escape($admission)."'";
$result = query($sql);

if(row_count($result) == 1) {
	$row = mysqli_fetch_array($result);

	$user_password = $row['Password'];

	if($password == $user_password) {

		$_SESSION['Admin No.'] = $admission;

		 echo 'Loading.. Please wait';	
		 echo '<script>window.location.href ="./"</script>';

} else {

	echo "Incorrect Password";
}
} else {

	echo "Wrongly typed password";
}
}





//------------------------ enroll students ---------------//

if(isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['schlst']) && isset($_POST['classr']) && isset($_POST['dept']) && isset($_POST['parent']) && isset($_POST['relation']) && isset($_POST['occupation']) && isset($_POST['add']) && isset($_POST['dnum']) && isset($_POST['mnum']) && isset($_POST['pword']) && isset($_POST['rpword']) && isset($_POST['acf']) && isset($_POST['schf'])) {


		$surname 			= clean($_POST['surname']);
		$firstname 			= clean($_POST['firstname']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['month'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$class 				= clean($_POST['classr']);
		$dept 				= clean($_POST['dept']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
		$pword 				= clean($_POST['pword']);
		$rpword 			= clean($_POST['rpword']);
		$schf 				= clean($_POST['schf']);
		$acf    			= clean($_POST['acf']);

enrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $schf, $acf);
}


//enroll
function enrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $schf, $acf) {

	$sname 				= escape($surname);
	$fname 				= escape($firstname);
	$lname 				= escape($lastname);
	$day 				= $date;
	$mont 				= $month;
	$yea 				= $year;
	$gend 	 			= escape($gender);
	$schl 				= escape($schlst);
	$cls 				= escape($class);
	$dep 				= escape($dept);
	$paren 				= escape($parent);
	$rel 				= escape($relation);
	$occ 				= escape($occupation); 				
	$ad 				= escape($add);
	$dnu 				= escape($dnum);
	$mnu 				= escape($mnum);
	$pwor 				= escape($pword);
	$rpwor 				= escape($rpword);
	$sh 				= escape($schf);
	$ac 				= escape($acf);

	$datereg = date("Y-m-d h:i:s");

	/*$sql = "SELECT * FROM students";
	$res = query($sql);
	while($row = mysqli_fetch_array($res)){

		$x = $row['Admission No.'];
	}*/

			
	$e = rand(0, 9999);

	$sch = $_SESSION['cal']['adm'];;
	$cat = "STUD";
	$year = date("Y");
	$admcode = "$sch/$cat/$year/";
	$code = $admcode.$e;
	$d = md5($code);

	//send message to new parent
	$c = "Dear ".$paren.", welcome to ".$_SESSION['cal']['school']." Thank you for entrusting your child's education with us";
	$f = $_SESSION['cal']['blksmsname'];
	  
	$z = $dnu." ".$mnu;
   
   /*$a = urlencode('adelankeboluwaji@gmail.com'); //Note: urlencodemust be added forusernameand
   $b = urlencode('Oluwatosin'); // passwordas encryption code for security purpose.
   
   $url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$f."&mobiles=".$z;
   $ch = curl_init();
   curl_setopt($ch,CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   $resp = curl_exec($ch);
   curl_close($ch);

   $result  = file_get_contents($url);

   $result  = json_decode($result);
   
   if(isset($result->status) && strtoupper($result->status) == 'OK')
{
    // Message sent successfully, do anything here

    echo 'Message sent at N'.$result->price;

}
else if(isset($result->error))
{
     // Message failed, check reason.

   echo 'Message failed - error: '.$result->error;
}
else
{
    // Could not determine the message response.

    echo 'Unable to process request';
}*/

$sql2 = "INSERT INTO students(`Admincode`, `AdminID`, `Admission No.`, `sn`, `SurName`, `Middle Name`, `Last Name`, `cbk`, `suF`, `Date`, `Month`, `Year`, `Gender`, `schlst`, `parent`, `relation`, `occupation`, `Telephone1`, `Address 1`, `Telephone2`, `Datereg`, `Class`, `Department`, `Active`, `SchF`, `AcF`, `qrid`, `fee`, `2ndfee`, `3rdfee`)";
$sql2.= " VALUES('$admcode', '$code', '$e', '1', '$sname', '$fname', '$lname', '$rpwor', '$pwor', '$day', '$mont', '$yea', '$gend', '$schl', '$paren', '$rel', '$occ', '$dnu', '$ad', '$mnu', '$datereg', '$cls', '$dep', '0', '$sh', '$ac', '$d', 'unpaid', 'unpaid', 'unpaid')";
$result = query($sql2);

$_SESSION['code'] = $code;	
echo '<script>window.location.href ="./enrollupload?id='.$code.'"</script>';
}





//---------- upload student image ------//

if (!empty($_FILES["file"]["name"])) {
	
			$target_dir = "../upload/studentDP/";
			$target_file =  basename($_FILES["file"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    echo "Sorry, this passport is already registered on the database. Kindly rename your file and try again later.";
			    $uploadOk = 0;
			} else {

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, the passport was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
			   img_stud($target_file);
   			
		}
	}	    	
}
}


///sql update product image
function img_stud($target_file) {

	$code     = $_SESSION['code'];

	$sql 	  = "UPDATE students SET `Passport` = '$target_file' WHERE `AdminID` = '$code'";
	$res 	  = query($sql);

	echo 'Loading.. Please wait';

	echo '<script>window.location.href ="./register"</script>';
}



//--------------- edit student details -----------//
if(isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['date']) && isset($_POST['mth']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['schlst']) && isset($_POST['classr']) && isset($_POST['dept']) && isset($_POST['parent']) && isset($_POST['relation']) && isset($_POST['occupation']) && isset($_POST['add']) && isset($_POST['dnum']) && isset($_POST['mnum']) && isset($_POST['pword']) && isset($_POST['rpword']) && isset($_POST['acf']) && isset($_POST['schf']) && isset($_POST['adm']) && isset($_POST['feestat'])) {


		$surname 			= clean($_POST['surname']);
		$firstname 			= clean($_POST['firstname']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['mth'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$class 				= clean($_POST['classr']);
		$dept 				= clean($_POST['dept']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
		$pword 				= clean($_POST['pword']);
		$rpword 			= clean($_POST['rpword']);
		$schf 				= clean($_POST['schf']);
		$acf    			= clean($_POST['acf']);
		$data    			= clean($_POST['adm']);
		$feestat			= clean($_POST['feestat']);

uenrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $schf, $acf, $data, $feestat);
}


//enroll
function uenrol($surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $class, $dept, $parent, $relation, $occupation, $add, $dnum, $mnum, $pword, $rpword, $schf, $acf, $data, $feestat) {

	$sname 				= escape($surname);
	$fname 				= escape($firstname);
	$lname 				= escape($lastname);
	$day 				= $date;
	$mont 				= $month;
	$yea 				= $year;
	$gend 	 			= escape($gender);
	$schl 				= escape($schlst);
	$cls 				= escape($class);
	$dep 				= escape($dept);
	$paren 				= escape($parent);
	$rel 				= escape($relation);
	$occ 				= escape($occupation); 				
	$ad 				= escape($add);
	$dnu 				= escape($dnum);
	$mnu 				= escape($mnum);
	$pwor 				= escape($pword);
	$rpwor 				= escape($rpword);
	$sh 				= escape($schf);
	$ac 				= escape($acf);

	

	$sql2 = "UPDATE students SET  `SurName` = '$sname', `Middle Name` = '$fname', `Last Name` = '$lname', `cbk` =  '$rpwor' ='$pwor', `suF` = '$pwor', `Date` = '$day', `Month` = '$mont', `Year`= '$yea', `Gender`='$gend', `schlst` = '$schl', `parent` = '$paren', `relation`= '$rel', `occupation` = '$occ', `Telephone1`= '$dnu', `Address 1` = '$ad', `Telephone2` = '$mnu', `Class` = '$cls', `Department`= '$dep', `Active` = '0', `SchF` = '$sh', `AcF` =  '$ac', `fee` = '$feestat' WHERE `AdminID` = '$data'";
$rews = query($sql2);

$_SESSION['dcer'] = $data;

 echo 'Loading.. Please wait';	
 echo '<script>window.location.href ="./uenrollupload?id='.$data.'"</script>';
}






//---------- update student image ------//

if (!empty($_FILES["fle"]["name"])) {
	
			$target_dir = "../upload/studentDP/";
			$target_file =  basename($_FILES["fle"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, the passport was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["fle"]["tmp_name"], $targetFilePath);
			   img_ustud($target_file);
   			
		
	}	    	
}
}


///sql update product image
function img_ustud($target_file) {

	$code     = $_SESSION['dcer'];

	$sql 	  = "UPDATE students SET `Passport` = '$target_file' WHERE `AdminID` = '$code'";
	$res 	  = query($sql);

	echo 'Loading.. Please wait';
	echo '<script>window.location.href ="./more?id='.$code.'"</script>';

}



//------- delete student -------//
if (isset($_POST['delst'])) {
	
	$adm             =  escape($_POST['delst']);
	$data 			 =  $_SESSION['ddr'];

	$ssl  = "SELECT * from students WHERE `AdminID`= '$adm'";
	$cons = query($ssl);
	$row = mysqli_fetch_array($cons);
	$x = $row['Passport'];	


	

	$sql = "DELETE FROM `students` WHERE `AdminID`= '$adm'";
	$result = query($sql);
	
	$clradm 		 = str_replace('/', '', $adm);
	$clradmqr 		 = "../upload/QRCard/$clradm.png";
	$clradmltr       = "../upload/admissionletter/$clradm.pdf";
	$clradmidcd 	 = "../upload/IdCard/$clradm.php";

	unlink($clradmqr);
	unlink($clradmidcd);
	unlink($clradmltr);
	unlink("../upload/studentDP/$x");	

	echo 'Loading.. Please wait';
	$_SESSION['del']  = "Student Deleted Successfully";
	echo '<script>window.location.href ="./delstud?id='.$data.'"</script>';
}







//--------------------- appoint staff ----------------------//

if (isset($_POST['title']) && isset($_POST['surname']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['schlst']) && isset($_POST['lass']) && isset($_POST['disc']) && isset($_POST['cat']) && isset($_POST['classr']) && isset($_POST['dept']) && isset($_POST['post']) && isset($_POST['subj']) && isset($_POST['parent']) && isset($_POST['relation']) && isset($_POST['occupation']) && isset($_POST['add']) && isset($_POST['add2']) && isset($_POST['dnum']) && isset($_POST['mnum']) && isset($_POST['bsm']) && isset($_POST['tam']) && isset($_POST['mall'])) {


		$title 				= clean($_POST['title']);
		$surname 			= clean($_POST['surname']);
		$firstname 			= clean($_POST['firstname']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['month'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$lass 				= clean($_POST['lass']);
		$disc 				= clean($_POST['disc']);
		$cat 				= clean($_POST['cat']);
		$classr				= clean($_POST['classr']);
		$dept 				= clean($_POST['dept']);
		$post 				= clean($_POST['post']);
		$subj 				= clean($_POST['subj']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$addd 				= clean($_POST['add2']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
		$bsm 				= clean($_POST['bsm']);
		$tam 				= clean($_POST['tam']);
		$mall 				= clean($_POST['mall']);



appoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $lass, $disc, $cat, $classr, $dept, $post, $subj, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $bsm, $tam, $mall);	
	
}


//appoint
function appoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $lass, $disc, $cat, $classr, $dept, $post, $subj, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $bsm, $tam, $mall) {


	$datereg = date("Y-m-d h:i:s");

	if($bsm == '') {
		$bsm = 0;
	} 
	if($tam == '') {
		$tam = 0;
	}
	if($mall == ''){
		$mall = 0;
	}
	
	$gross   = $bsm + $tam + $mall;


	/*$sql = "SELECT * from staff";
	$result = query($sql);
	while($row = mysqli_fetch_array($result)) {
	
		$x = $row['staffno'];		
	}*/
	
		
	$e = rand(0, 9999);

	$sch = $_SESSION['cal']['adm'];
	$cat2 = "STAFF";
	$year = date("Y");
	$admcode = "$sch/$cat2/$year/";
	$code = $admcode.$e;
	$d = md5($code);


$sql2 = "INSERT INTO `staff` (`sn`, `staffcode`, `staffno`, `staffid`, `title`, `surname`, `firstname`, `othername`, `date`, `month`, `year`, `gender`, `tertiary`, `discipline`, `category`, `staffpost`, `staffclass`, `subject`, `qual`, `marital`, `nok`, `relation`, `nokocc`, `radd`, `nokradd`, `tel1`, `tel2`, `salary`, `transport`, `medical`, `gross`, `datereg`, `active`, `qrid`)"; 
$sql2.= "VALUES ('1', '$admcode', '$e', '$code', '$title', '$surname', '$firstname', '$lastname', '$date', '$month', '$year', '$gender', '$schlst', '$disc', '$cat', '$post', '$classr', '$subj', '$lass', '$dept', '$parent', '$relation', '$occupation', '$add', '$addd', '$dnum', '$mnum', '$bsm', '$tam', '$mall', '$gross', '$datereg', '0', '$d')";


$result2 = query($sql2);
$_SESSION["staffid"] = $code;

echo 'Loading.. Please wait';	
echo '<script>window.location.href ="./uploadstaff?id='.$code.'"</script>';
}





//---------- upload staff image ------//

if (!empty($_FILES["stfile"]["name"])) {
	
			$target_dir = "../upload/staffDP/";
			$target_file =  basename($_FILES["stfile"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    echo "Sorry, this passport is already registered on the database. Kindly rename your file and try again later.";
			    $uploadOk = 0;
			} else {

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, the passport was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["stfile"]["tmp_name"], $targetFilePath);
			   img_staff($target_file);
   			
		}
	}	    	
}
}


///sql upload staff image
function img_staff($target_file) {

	$code     = $_SESSION['staffid'];

	$sql 	  = "UPDATE staff SET `passport` = '$target_file' WHERE `staffid` = '$code'";
	$res 	  = query($sql);

	echo 'Loading.. Please wait';
	echo '<script>window.location.href ="./appointed"</script>';
}





//--------------------- edit staff ----------------------//

if (isset($_POST['title']) && isset($_POST['sur']) && isset($_POST['first']) && isset($_POST['lastname']) && isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender']) && isset($_POST['schlst']) && isset($_POST['lass']) && isset($_POST['disc']) && isset($_POST['cat']) && isset($_POST['classr']) && isset($_POST['dept']) && isset($_POST['post']) && isset($_POST['subj']) && isset($_POST['parent']) && isset($_POST['relation']) && isset($_POST['occupation']) && isset($_POST['add']) && isset($_POST['add2']) && isset($_POST['dnum']) && isset($_POST['mnum']) && isset($_POST['bsm']) && isset($_POST['tam']) && isset($_POST['mall']) && isset($_POST['data'])) {


		$title 				= clean($_POST['title']);
		$surname 			= clean($_POST['sur']);
		$firstname 			= clean($_POST['first']);
		$lastname 			= clean($_POST['lastname']);
		$date 				= $_POST['date'];
		$month 				= $_POST['month'];
		$year 				= $_POST['year'];
		$gender 			= clean($_POST['gender']);
		$schlst 			= clean($_POST['schlst']);
		$lass 				= clean($_POST['lass']);
		$disc 				= clean($_POST['disc']);
		$cat 				= clean($_POST['cat']);
		$classr				= clean($_POST['classr']);
		$dept 				= clean($_POST['dept']);
		$post 				= clean($_POST['post']);
		$subj 				= clean($_POST['subj']);
		$parent 			= clean($_POST['parent']);
		$relation 			= clean($_POST['relation']);
		$occupation 		= clean($_POST['occupation']);
		$add 				= clean($_POST['add']);
		$addd 				= clean($_POST['add2']);
		$dnum 				= clean($_POST['dnum']);
		$mnum 				= clean($_POST['mnum']);
		$bsm 				= clean($_POST['bsm']);
		$tam 				= clean($_POST['tam']);
		$mall 				= clean($_POST['mall']);
		$data 				= $_POST['data'];



upappoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $lass, $disc, $cat, $classr, $dept, $post, $subj, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $bsm, $tam, $mall, $data);	
	
}


//edit appoint
function upappoint($title, $surname, $firstname, $lastname, $date, $month, $year, $gender, $schlst, $lass, $disc, $cat, $classr, $dept, $post, $subj, $parent, $relation, $occupation, $add, $addd, $dnum, $mnum, $bsm, $tam, $mall, $data) {


	$gross   = $bsm + $tam + $mall;

	
$sql2 = "UPDATE `staff` SET `sn` = '1', `title` = '$title', `surname` = '$surname', `firstname` = '$firstname', `othername` = '$lastname', `date` = '$date', `month` = '$month', `year` = '$year', `gender` = '$gender', `tertiary` = '$schlst', `discipline` = '$disc', `category`= '$cat', `staffpost` = '$post', `staffclass` = '$classr', `subject` = '$subj', `qual` = '$lass', `marital` = '$dept', `nok` = '$parent', `relation` = '$relation', `nokocc` = '$occupation', `radd` = '$add', `nokradd` = '$addd', `tel1` = '$dnum', `tel2` = '$mnum', `salary` = '$bsm', `transport` = '$tam', `medical` = '$mall', `gross` = '$gross', `active` = '0' WHERE `staffid` = '$data'"; 

$result2 = query($sql2);
$_SESSION["ustd"] = $data;

echo 'Loading.. Please wait';	
echo '<script>window.location.href ="./edituploadstaff?id='.$data.'"</script>';
}



//---------- update staff image ------//

if (!empty($_FILES["sfle"]["name"])) {
	
			$target_dir = "../upload/staffDP/";
			$target_file =  basename($_FILES["sfle"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, the passport was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["sfle"]["tmp_name"], $targetFilePath);
			   img_usaff($target_file);
   			
		
	}	    	
}
}


///sql update product image
function img_usaff($target_file) {

	$code     = $_SESSION['ustd'];

	$sql 	  = "UPDATE staff SET `passport` = '$target_file' WHERE `staffid` = '$code'";
	$res 	  = query($sql);

	echo 'Loading.. Please wait';
	echo '<script>window.location.href ="./staffmore?id='.$code.'"</script>';

}



//------- delete staff -------//
if (isset($_POST['delstf'])) {
	
	$adm             =  escape($_POST['delstf']);

	$ssl  = "SELECT * from staff WHERE `staffid`= '$adm'";
	$cons = query($ssl);
	if(row_count($cons) == 0) {
		
		echo "Invalid Staff ID";
	} else {
	$row = mysqli_fetch_array($cons);
	$x = $row['passport'];	


	

	$sql = "DELETE FROM `staff` WHERE `staffid`= '$adm'";
	$result = query($sql);
	
	$clradm 		 = str_replace('/', '', $adm);
	$clradmqr 		 = "../upload/QRCard/$clradm.png";
	$clradmltr       = "../upload/employ/$clradm.pdf";
	$clradmidcd 	 = "../upload/IdCard/$clradm.php";

	unlink($clradmqr);
	unlink($clradmidcd);
	unlink($clradmltr);
	unlink("../upload/staffDP/$x");	

	echo 'Loading.. Please wait';
	$_SESSION['del']  = "Staff Deleted Successfully";
	echo '<script>window.location.href ="./delstaff"</script>';
}
}


//--------------- send parent sms ---------------//

if (isset($_POST['msg'])) {

  $c = $_POST['msg'];
  $d = $_SESSION['cal']['blksmsname'];
	
  $sql = "SELECT * from students GROUP BY `Telephone1`, `Telephone2`";
  $res = query($sql);
  while ($row = mysqli_fetch_array($res)) {
  $x = $row['Telephone1']." ".$row['Telephone2'];
 
  $a = urlencode('adelankeboluwaji@gmail.com'); //Note: urlencodemust be added forusernameand
  $b = urlencode('Oluwatosin'); // passwordas encryption code for security purpose.

$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$x;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
$resp = curl_exec($ch);
curl_close($ch);

$result  = file_get_contents($url);

$result  = json_decode($result);

if(isset($result->status) && strtoupper($result->status) == 'OK')
{
 // Message sent successfully, do anything here

 echo 'Message sent at N'.$result->price;

 echo 'Loading.. Please wait';
 $_SESSION['msgs'] = "Message sent successfully";
 echo '<script>window.location.href ="./parent"</script>';

}
else if(isset($result->error))
{
  // Message failed, check reason.

echo 'Message failed - error: '.$result->error;
}
else
{
 // Could not determine the message response.

 echo 'Unable to process request';
}

}
}




//------- send staff sms -----//

if (isset($_POST['msgr'])) {

  $c = $_POST['msgr'];
  $d = $_SESSION['cal']['blksmsname'];
	
  $sql = "SELECT * from staff GROUP BY `tel1`";
  $res = query($sql);
  while ($row = mysqli_fetch_array($res)) {
   
  $x = $row['tel1'];
 
  $a = urlencode('adelankeboluwaji@gmail.com'); //Note: urlencodemust be added forusernameand
  $b = urlencode('Oluwatosin'); // passwordas encryption code for security purpose.

$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$x;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
$resp = curl_exec($ch);
curl_close($ch);

$result  = file_get_contents($url);

$result  = json_decode($result);

if(isset($result->status) && strtoupper($result->status) == 'OK')
{
 // Message sent successfully, do anything here

 echo 'Message sent at N'.$result->price;

 echo 'Loading.. Please wait';
$_SESSION['msgs'] = "Message sent successfully";
echo '<script>window.location.href ="./staffs"</script>';
}
else if(isset($result->error))
{
  // Message failed, check reason.

echo 'Message failed - error: '.$result->error;
}
else
{
 // Could not determine the message response.

 echo 'Unable to process request';
}

}
}


//birthday alert 
function birthday_alert() {

	/*$r = date("d");
	$s = date("m");
	
	$sql="SELECT * FROM students WHERE `bday` = '0' OR `bday` = ''";
	$result_set=query($sql);
	while($row= mysqli_fetch_array($result_set))
	{
		$h = $row['Date'];
		$g = $row['Month'];
	
		if($h == $r && $s == $g) {
			
		$admno = $row['AdminID'];
	
	   //update table bday
	   $ssl = "UPDATE students SET `bday` = '1' WHERE `AdminID` = '$admno'";
	   $rrr = query($ssl);
	
	  //alert bday
	  $c = "Happy Birthday Dear ".$row['SurName']. " ".$row['Middle Name']. " .Wishing you more years in good health and wisdom ahead.";
	  $d = $_SESSION['cal']['blksmsname'];
		
	  $x = $row['Telephone1']." ".$row['Telephone2'];
	 
	$a = urlencode('greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
	$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
	
	$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$x;
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$resp = curl_exec($ch);
	curl_close($ch);
	
	$result = json_decode($resp);
	
	$errc =  $result->errno;
	
	if($errc == 150) {
	
	 echo "BulkSMS Credit Exhausted";
	} else {
	
	
	}	
	} else {
		
	}
	}*/
	}
	
	
	
	function staffbday() {
	
		/*$r = date("d");
		$s = date("m");
		
		$sql="SELECT * FROM staff WHERE `date`= '$r' AND `month` = '$s' AND `bday` = '0' OR `bday` = ''";
		$result_set=query($sql);
		while($row= mysqli_fetch_array($result_set))
		{
	
			$h = $row['date'];
			$g = $row['month'];
		
			if($h == $r && $s == $g) {
	
			$admno = $row['staffid'];
	
	   //update table bday
	   $ssl = "UPDATE staff SET `bday` = '1' WHERE `staffid` = '$admno'";
	   $rrr = query($ssl);
		
			//alert bday
		  $c = "Happy Birthday Dear ".$row['surname']. " ".$row['firstname']. " .Wishing you more years in good health and wisdom ahead.";
		  $d = $_SESSION['cal']['blksmsname'];
			
		  $x = $row['tel1'];
		 
		$a = urlencode('greatnessabolade@outlook.com'); //Note: urlencodemust be added forusernameand
		$b = urlencode('securemelikekilode'); // passwordas encryption code for security purpose.
		
		$url = "https://portal.nigeriabulksms.com/api/?username=".$a."&password=".$b."&message=".$c."&sender=".$d."&mobiles=".$x;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$resp = curl_exec($ch);
		curl_close($ch);
	
		$result = json_decode($resp);
	
	$errc =  $result->errno;
	
	if($errc == 150) {
	
	 echo "BulkSMS Credit Exhausted";
	} else {
	
	
	}	
		
		} else {
			
		}
		}*/
			
		}
?>