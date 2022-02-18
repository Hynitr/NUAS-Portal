<?php include("functions/top.php");

$sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
$result_set=query($sql);
$row= mysqli_fetch_array($result_set);
 ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Preview Result</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Preview Result</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form method="POST" name="printres" role="form" enctype="multipart/form-data">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Preview Report Sheet for <?php echo $row['staffclass'] ?></h3>
                            </div>
                            <div class="card-body">

                                <!-- /.form group -->

                                <label>Select a Student.:</label>
                                <select name="std" id="std" class="custom-select">
                                    <?php
$ws = $row['staffclass'];
 $sql2="SELECT * from students WHERE `Class` = '$ws' ORDER BY `surName` asc";
 $result_set2=query($sql2);
 if (row_count($result_set2) < 1) { 
  echo '<option name="class" id="class">No Student Available for this class</option>';
 } else {
 while($row2= mysqli_fetch_array($result_set2)){   
 ?> <optgroup label="<?php echo $row2['SurName']." ".$row2['Middle Name']." ".$row2['Last Name'] ?>">
                                        <option name="std" id="std"><?php echo $row2['AdminID'] ?></option>
                                    </optgroup>
                                    <?php
}
 }
 ?>

                                </select>

                                <input type="text" id="class" value="<?php echo $ws ?>" hidden>


                                <br /><br />

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Select a Session .:</label>
                                    <select name="ses" id="ses" class="form-control">

                                        <?php
$sl = "SELECT * FROM `sessions` ORDER BY `id` desc";
$ww = query($sl);
while ($rw = mysqli_fetch_array($ww)) {
 ?>
                                        <option name="class" id="ses"><?php echo $rw['ses'] ?></option>
                                        <?php
                                }
                                ?>
                                    </select>
                                </div>

                                <label>Select a Term.:</label>
                                <select name="class" id="term" class="custom-select">

                                    <option id="term">1st Term</option>
                                    <option id="term">2nd Term</option>
                                    <option id="term">3rd Term</option>
                                </select>
                                <br /><br />
                                <button type="button" name="submit" id="prev" class="btn btn-primary">Preview
                                    Result</button>

                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col (left) -->

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
        </section>
    </form>
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
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Page script -->
<script src="plugins/sweetalert2/sweetalert2.min.js">
</script>
<script src="ajax.js"></script>
<script src="plugins/toastr/toastr.min.js"></script>
<script type="text/javascript">
$(function() {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
});
</script>
</body>

</html>