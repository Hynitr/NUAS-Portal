<?php
include("functions/top.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student(s) Absent Today</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Student(s) Absent</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

                  <div class="col-md-12">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Student(s) Absent Today</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
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
                <a class="title" href="#"><?php echo $row['SurName'] ?> <?php echo $row['Last Name'] ?> <?php echo $row['Middle Name'] ?></a>
                        <p>Admission No.: <?php echo $row['AdminID'] ?><br/>
                           Present Class.: <?php echo $row['Class'] ?><br/>  
                           Dad No..: <?php echo $row['Telephone1'] ?><br/>
                           Mum No..: <?php echo $row['Telephone2'] ?><br/>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
</body>
</html>