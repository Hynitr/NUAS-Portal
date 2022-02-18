<?php
include("functions/init.php");
if (isset($_SESSION['staffid'])) {

 
$sql ="SELECT * FROM staff WHERE `staffid` = '".$_SESSION["staffid"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['staffid'];
    $pass = str_replace('/', '', $data);
    $fname = "upload/IdCard/$pass.php";

    $hand = fopen($fname, 'w');


    $sqll = "UPDATE staff SET `idcard` = '$fname' WHERE `staffid` = '".$_SESSION["staffid"]."'";
    $re   = query($sqll);
    file_put_contents($fname, ob_get_contents());
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school']?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!-- Main content -->
<section class="content row" id="printableArea">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pt-4">
        <div style="width: 227px; background-color: gold;" class="card">
            <div class="card-header text-center border-bottom-0">
                <div class="ribbon-wrapper">
                    <div style="padding: 0px;" class="ribbon bg-black">
                        <span style="font-size: 6px; text-transform: none;">Govt.
                            &nbsp;Approved</span>
                    </div>
                </div>
                <img src="dist/img/logo.png" width="28px" height="28px">
                <h2 style="font-size: 14px;"><b><?php echo strtoupper($call['school'])?></b><br />
                    <small style="font-size: 9px;"><?php echo $call['addr']?></small>
                    <small style="font-size: 9x;">&nbsp;&nbsp; Tel: <?php echo $call['tel']?></small>
                </h2>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b><?php echo $row['surname']." ".$row['firstname']; ?></b></h2>
                        <p class="text-sm">Gender: <b><?php echo $row['gender']; ?></b>
                            <span class="row" style=""><?php echo $row['staffid']; ?></span>
                        </p>
                        <?php echo '
                     <img width="150px" height="150px" src="upload/QRCard/'.$row['qrcode'].'">'
                     ?>

                    </div>
                    <div class="col-5 text-center">
                        <?php echo '
                      <img width="85px" height="90px" src="upload/staffDP/'.$row['passport'].'" alt="" class="img-circle ">';
                      ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--back leave-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pt-4">
        <div style="width: 227px; background-color: black;" class="card">
            <div class="row">
                <div class="col-14 pt-3">
                    <ul style="list-style-type:disc; color: white" class="text-sm">
                        <li style="font-size: 11px;">This identity card is an official<br /> document and relates to the
                            person described.</li>
                        <br />
                        <li style="font-size: 11px;">Impersonation, alteration, destruction <br />or transfer of the
                            authorized holder to another person is a penal offence.</li>
                        <br />
                        <li style="font-size: 11px;">If found, kindly return to the address<br /> stated below;</li>
                    </ul>
                    <div class="card-header text-center pt-0">
                        <img src="dist/img/logo.png" width="28px" height="28px">
                        <h2 style="font-size: 14px; color: white"><b><?php echo strtoupper($call['school'])?></b><br />
                            <small style="font-size: 10px;"><?php echo $call['addr']?></small>
                            <small style="font-size: 10px;">&nbsp;Tel: <?php echo $call['tel']?></small>
                            <small style="font-size: 8px;">&nbsp;Website: <?php echo $call['website']?></small>
                        </h2>
                    </div>

                </div>
            </div>
            <div class="card-footer pr-0 pl-0 pb-0 mt-0">
                <div class="text-center pt-3">
                    <p style="background-color: gold; font-size: 14px"><i><?php echo $call['tagline']?>
                        </i></p>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript">
window.addEventListener("load", window.print());
</script>
</body>

</html>
<?php
 } else {
   if (!isset($_GET['id'])) {

     redirect("./appoint");
     
   }


$sql ="SELECT * FROM staff WHERE `staffid` = '".$_GET["id"]."'";
    $result = query($sql);
    if(row_count($result) == 1) {
    $row = mysqli_fetch_array($result);
    $data = $row['staffid'];
    $pass = str_replace('/', '', $data);
    $fname = "upload/IdCard/$pass.php";

    $hand = fopen($fname, 'w');


    $sqll = "UPDATE staff SET `idcard` = '$fname' WHERE `staffid` = '".$_GET["id"]."'";
    $re   = query($sqll);
    file_put_contents($fname, ob_get_contents());
}
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo strtoupper($call['school'])?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/ico" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!-- Main content -->
<section class="content row" id="printableArea">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pt-4">
        <div style="width: 227px; background-color: gold;" class="card">
            <div class="card-header text-center border-bottom-0">
                <div class="ribbon-wrapper">
                    <div style="padding: 0px;" class="ribbon bg-black">
                        <span style="font-size: 6px; text-transform: none;">Govt. &nbsp;Approved</span>
                    </div>
                </div>
                <img src="dist/img/logo.png" width="28px" height="28px">
                <h2 style="font-size: 14px;"><b><?php echo strtoupper($call['school'])?></b><br />
                    <small style="font-size: 9px;"><?php echo $call['addr']?></small>
                    <small style="font-size: 9px;">&nbsp;&nbsp; Tel: <?php echo $call['tel']?></small>
                </h2>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-7">
                        <h2 class="lead"><b><?php echo $row['surname']." ".$row['firstname']; ?></b></h2>
                        <p class="text-sm">Gender: <b><?php echo $row['gender']; ?></b>
                            <span class="row" style=""><?php echo $row['staffid']; ?></span>
                        </p>
                        <?php echo '
                     <img width="150px" height="150px" src="upload/QRCard/'.$row['qrcode'].'">'
                     ?>

                    </div>
                    <div class="col-5 text-center">
                        <?php echo '
                      <img width="85px" height="90px" src="upload/staffDP/'.$row['passport'].'" alt="" class="img-circle ">';
                      ?>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--back leave-->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="pt-4">
        <div style="width: 227px; background-color: black;" class="card">
            <div class="row">
                <div class="col-14 pt-3">
                    <ul style="list-style-type:disc; color: white" class="text-sm">
                        <li style="font-size: 11px;">This identity card is an official<br /> document and relates to the
                            person described.</li>
                        <br />
                        <li style="font-size: 11px;">Impersonation, alteration, destruction <br />or transfer of the
                            authorized holder to another person is a penal offence.</li>
                        <br />
                        <li style="font-size: 11px;">If found, kindly return to the address<br /> stated below;</li>
                    </ul>
                    <div class="card-header text-center pt-0">
                        <img src="dist/img/logo.png" width="28px" height="28px">
                        <h2 style="font-size: 14px; color: white"><b><?php echo strtoupper($call['school'])?></b><br />
                            <small style="font-size: 10px;"><?php echo $call['addr']?></small>
                            <small style="font-size: 10px;">&nbsp;Tel: <?php echo $call['tel']?></small>
                            <small style="font-size: 8px;">&nbsp;Website: <?php echo $call['website']?></small>
                        </h2>
                    </div>

                </div>
            </div>
            <div class="card-footer pr-0 pl-0 pb-0 mt-0">
                <div class="text-center pt-3">
                    <p style="background-color: gold; font-size: 14px"><i><?php echo $call['tagline']?>
                        </i></p>

                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script type="text/javascript">
window.addEventListener("load", window.print());
</script>
</body>

</html>
<?php
  }
?>