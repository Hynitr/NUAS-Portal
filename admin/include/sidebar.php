<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $call['school']?> | Admin Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $call['school']?> website">
    <meta name="keywords" content="<?php echo $call['school']?>, School">
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
    <link rel="icon" href="dist/img/logo.png" type="image/ico" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <link rel="manifest" href="manifest.json">
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
                    <a href="<?php echo $call['website']?>" class="nav-link">Website</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="https://hynitr.com/contact" target="_blank" class="nav-link">Portal Help</a>
                </li>
                <a id="google_translate_element" href="#"></a>
            </ul>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./" class="brand-link">
                <img src="dist/img/logo.png" alt="<?php echo $call['school']?>"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?php echo $call['alias']?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                    </div>
                    <div class="info">
                        <a href="#"><?php echo $call['session']?> Session</a>
                        <a href="#" class="d-block">School Admin Portal</a>
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
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    Students
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./view" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all Student</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Delete a Student</p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="./delstud?id=Creche" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Creche</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=KG 1" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>KG 1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=KG 2" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>KG 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Nursery 1" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Nursery 1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Nursery 2" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Nursery 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Primary 1" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Primary 1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Primary 2" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Primary 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Primary 3" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Primary 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Primary 4" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Primary 4</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=Primary 5" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>Primary 5</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=J.S.S 1" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>J.S.S 1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=J.S.S 2" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>J.S.S 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=J.S.S 3" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>J.S.S 3</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=S.S.S 1" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>S.S.S 1</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=S.S.S 2" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>S.S.S 2</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./delstud?id=S.S.S 3" class="nav-link">
                                                <i class="far fa-dot-circle nav-icon"></i>
                                                <p>S.S.S 3</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="./enroll" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Enroll New Student</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <br />
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Staffs
                                    <i class="right fas fa-angle-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./viewstaff" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View all Staffs</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./delstaff" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Delete a Staff</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./appoint" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Appoint New Staff</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br />
                        <li class="nav-item has-treeview">
                            <a href="./results" class="nav-link">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>
                                    View Results
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>

                        </li>
                        <br />
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Absentees
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./abstaff" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Staff Absent Today</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./abstud" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Student Absent Today</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <br />

                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Send SMS
                                    <i class="fas fa-angle-right right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./parent" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>To Parents</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="./staffs" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>To Staffs</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <br />
                        <li class="nav-item has-treeview">
                            <a target="_blank" href="https://dashboard.flutterwave.com/dashboard/overview/total"
                                class="nav-link">
                                <i class="nav-icon far fa-credit-card"></i>
                                <p>
                                    Payment History
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