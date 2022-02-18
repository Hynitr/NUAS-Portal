<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school'] ?> | Staff Portal </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $call['school'] ?> | Staff Portal">
    <meta name="keywords" content="<?php echo $call['school'] ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="icon" href="dist/img/logo.png" type="image/png" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <link rel="manifest" href="manifest.json">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://hynitr.com/" class="nav-link">Website</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a target="_blank" href="https://hynitr.com/contact" class="nav-link">Portal Help</a>
                </li>
                <a id="google_translate_element" href="#"></a>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/logo.png" alt="<?php echo $call['school'] ?>"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo $call['alias'] ?> Staff Portal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <?php
                 
 $sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
                            <?php echo'
          <img style="width: 70px; height: 90px" src="'.$call['admn'].'/upload/staffDP/'.$row['passport'].'" class="img-circle img-fluid elevation-2" alt="Profile Picture">';
          ?>
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $row['surname']."<br/>".$row['firstname']; ?></a>
                            <small style="color: white"><?php echo $row['staffid']; ?></small>
                        </div>
                    </div>
                    <?php
}
?>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a href="./" class="nav-link">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right fas fa-angle-down"></i>
                                    </p>
                                </a>

                            </li>
                            <br />
                            <li class="nav-item has-treeview">
                                <a href="./frn" class="nav-link">
                                    <i class="nav-icon fas fa-upload"></i>
                                    <p>
                                        Upload Result
                                        <i class="fas fa-angle-right right"></i>
                                    </p>
                                </a>

                            </li>
                            <br />
                            <!----
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
               Upload Files
                <i class="right fas fa-angle-right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./bill" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>School Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./lbk" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Of Book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./news" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Newsletter</p>
                </a>
              </li>
            </ul>
          </li>
          <br/>---->
                            <li class="nav-item has-treeview">
                                <a href="./preview" class="nav-link">
                                    <i class="nav-icon fas fa-eye"></i>
                                    <p>
                                        Preview Result
                                        <i class="fas fa-angle-right right"></i>
                                    </p>
                                </a>

                            </li>
                            <br />
                            <li class="nav-item has-treeview">
                                <a href="./attd" class="nav-link">
                                    <i class="nav-icon fas fa-edit"></i>
                                    <p>
                                        Update Attendance
                                        <i class="fas fa-angle-right right"></i>
                                    </p>
                                </a>

                            </li>
                            <br />
                            <li class="nav-item has-treeview">
                                <a href="./assignment" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Upload Assignment
                                        <i class="fas fa-angle-right right"></i>
                                    </p>
                                </a>
                            </li> <br />
                            <li class="nav-item has-treeview">
                                <a href="./view" class="nav-link">
                                    <i class="nav-icon fas fa-eye"></i>
                                    <p>
                                        View Assignment
                                        <i class="fas fa-angle-right right"></i>
                                    </p>
                                </a>
                            </li>
                            <br />
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-download"></i>
                                    <p>
                                        Downloads
                                        <i class="right fas fa-angle-right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <?php
                 
 $sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
   $data = $row['staffid'];
   $pass = str_replace('/', '', $data);
 {
  ?>
                                    <li class="nav-item">
                                        <?php echo '
                <a target="_blank" href="'.$call['admn'].'/empl?id='.$_SESSION['staff_id'].'" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employment Letter</p>
                </a>
              </li>
              <li class="nav-item">
                <a target="_blank" href="'.$call['admn'].'/atcard?id='.$_SESSION['staff_id'].'" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Staff ID Card</p>
                </a>
              </li>';
              ?>
                                </ul>
                                <?php
          }
          ?>
                            </li>
                            <br />

                            <li class="nav-item has-treeview">
                                <a href="./logout" class="nav-link">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>
                                        Logout

                                    </p>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
        </aside>