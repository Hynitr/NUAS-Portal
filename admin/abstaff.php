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
                    <h1>Staffs Absent Today</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Staffs Absent</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="col-md-12">
            <div class="card card-danger">
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
                    </a>
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