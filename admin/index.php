<?php
include("functions/top.php");
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="fas fa-graduation-cap"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">All Students</span>
                            <?php
                 
 $sql="SELECT SUM(sn) AS total from students";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
 $_SESSION['ts'] = $row['total'];
         ?>
                            <span class="info-box-number"><?php echo $_SESSION['ts']; ?></span>
                            <?php
             }
             ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="fas fa-calendar"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><?php echo $call['session']?></span>
                            <span class="info-box-number"><a href="./updtses">Update Session</a> </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">All Staffs</span>
                            <?php
                 
 $sql="SELECT SUM(sn) AS total from staff";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  $_SESSION['tss'] = $row['total'];
         ?>
                            <span class="info-box-number"><?php echo $_SESSION['tss']; ?></span>
                            <?php
              }
              ?>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-danger"><i class="far fa-edit"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Entrance Applicants</span>
                            <span class="info-box-number"></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- TABLE: LATEST ORDERS -->

            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Student Today`s Birthday</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <?php
 $r = date("d");
 $s = date("m");
 $sql="SELECT * FROM students WHERE `Date`= '$r' AND `Month` = '$s'";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
                        <div class="card-body">
                            <a class="title" href="#"><?php echo $row['SurName'] ?> <?php echo $row['Last Name'] ?>
                                <?php echo $row['Middle Name'] ?></a>
                            <p>Admission No.: <?php echo $row['AdminID'] ?><br />
                                Present Class.: <?php echo $row['Class'] ?><br />
                                Dad No..: <?php echo $row['Telephone1'] ?><br />
                                Mum No..: <?php echo $row['Telephone2'] ?><br />
                                Department.: <?php echo $row['Department'] ?>
                            </p>
                        </div>
                        <?php
            }
            ?>

                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-4">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Student Absent Today</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <?php
 $sql="SELECT * FROM students WHERE active= 0";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
                        <div class="card-body">
                            <a class="title" href="#"><?php echo $row['SurName'] ?> <?php echo $row['Last Name'] ?>
                                <?php echo $row['Middle Name'] ?></a>
                            <p>Admission No.: <?php echo $row['AdminID'] ?><br />
                                Present Class.: <?php echo $row['Class'] ?><br />
                                Dad No..: <?php echo $row['Telephone1'] ?><br />
                                Mum No..: <?php echo $row['Telephone2'] ?><br />
                                Department.: <?php echo $row['Department'] ?>
                            </p>
                        </div>
                        <?php
            }
            ?>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-md-4">
                    <div class="card card-green">
                        <div class="card-header">
                            <h3 class="card-title">Staff Absent Today</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                                        class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <?php
 $sql="SELECT * FROM staff WHERE active = 0";
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  ?>
                        <div class="card-body">
                            <p><?php echo date("d-m-y") ?></p>
                            <p><?php echo $row['title'] ?></p>
                            <div>
                                <a href="#"><?php echo $row['surname'] ?> <?php echo $row['firstname'] ?></a>
                                <p>Staff_ID.: <b><?php echo $row['staffid'] ?></b><br />
                                    Residential Address.: <b><?php echo $row['radd'] ?></b><br />
                                    Telephone.: <b><?php echo $row['tel1'].", ".$row['tel2']; ?></b><br />
                                    Gender.: <b><?php echo $row['gender'] ?> </b><br />
                                </p>

                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->
                        </div>
                        <?php
            }
            ?>
                    </div>
                    <!-- /.row (main row) -->

                </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include("include/footer.php"); ?>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script>
    if ('serviceWorker' in navigator) {
      console.log("Will the service worker register?");
      navigator.serviceWorker.register('service-worker.js')
        .then(function(reg){
          console.log("Yes, it did.");
        }).catch(function(err) {
          console.log("No it didn't. This happened: ", err)
        });
    }
  </script>
  <script src="service-worker.js">
          // Service worker for Progressive Web App
      if ('serviceWorker' in navigator) {
          navigator.serviceWorker.register('service-worker.js', {
              scope: '.' // THIS IS REQUIRED FOR RUNNING A PROGRESSIVE WEB APP FROM A NON_ROOT PATH
          }).then(function(registration) {
              // Registration was successful
              console.log('ServiceWorker registration successful with scope: ', registration.scope);
          }, function(err) {
              // registration failed :(
              console.log('ServiceWorker registration failed: ', err);
          });
      }
  </script>
</body>

</html>