<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school'] ?> | Student Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $call['school'] ?> | Student Portal">
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
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="dist/img/logo.png" type="image/png" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
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
                    <a href="<?php echo $call['website'] ?>" class="nav-link">Website</a>
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
            <a href="<?php echo $call['website'] ?>" class="brand-link">
                <img src="dist/img/logo.png" alt="user profile picture" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo $call['alias'] ?> Student Portal</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?php
                 
 $sql="SELECT * from students WHERE `AdminId` = '".$_SESSION['AdminID']."'";
 $result_set=query($sql);
 $row= mysqli_fetch_array($result_set);

 $_SESSION['name'] = $row['SurName']." ".$row['Middle Name'];
  ?>
                        <?php echo'
          <img style="width: 60px; height: 60px;" src="'.$call['admn'].'/upload/studentDP/'.$row['Passport'].'" class="img-circle elevation-2" alt="Profile Picture">';
          ?>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $row['SurName']." ".$row['Middle Name']; ?></a>
                        <small style="color: white"><?php echo $row['AdminID']; ?></small>
                    </div>
                </div>
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
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Results
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./fst" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>1st Term Result</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./fst" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>2nd Term Result</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./fst" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>3rd Term Result</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <br />
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-download"></i>
                                <p>
                                    Download
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a target="_blank" href="medical form.pdf" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Medical Form</p>
                                    </a>
                                </li>

                                <?php
                 
 $sql="SELECT * from students WHERE `AdminID` = '".$_SESSION['AdminID']."'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
   $data = $row['AdminID'];
   $pass = str_replace('/', '', $data);
 {
  ?>
                                <li class="nav-item">
                                    <?php echo '
                 <a target="_blank" href="'.$call['admn'].'/admissionletter?id='.$_SESSION['AdminID'].'" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admission Letter</p>
                </a>
              </li>
               <li class="nav-item">
                 <a target="_blank" href="'.$call['admn'].'/atcard-print?id='.$_SESSION['AdminID'].'" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ID Card</p>
                </a>';
                ?>
                                </li>
                                <?php
            }
            ?>

                            </ul>
                        </li>
                        <br />

                        <li class="nav-item has-treeview">
                            <a href="./assignment" class="nav-link">
                                <i class="nav-icon far fa-credit-card"></i>
                                <p>
                                    Assignments
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
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