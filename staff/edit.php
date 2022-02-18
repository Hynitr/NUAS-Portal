<?php include("functions/top.php"); ?>
<?php
if(!isset($_GET['id']) && !isset($_GET['cls']) && !isset($_GET['tm']) && !isset($_GET['sbj']) && isset($_GET['ses'])) {
  header("location: ../opps");
}

$data = $_GET['id'];
$cls  = $_GET['cls'];
$term = $_GET['tm'];
$sbj  = $_GET['sbj'];
$ses  = $_GET['ses'];


//get student name from admission no.
$sl = "SELECT * FROM students WHERE `AdminID` = '$data'";
$res = query("$sl");
$rower = mysqli_fetch_array($res);


//get previous data
$sql = "SELECT * FROM result WHERE `class` = '$cls' AND `term` = '$term' AND `subject` = '$sbj' AND `admno` = '$data' AND `ses` = '$ses'";
$resu = query($sql);
$row  = mysqli_fetch_array($resu);

//get total number of students
$dql = "SELECT sum(sn) AS tot FROM students WHERE `Class` = '$cls'";
$ress = query($dql);
$wsa = mysqli_fetch_array($ress);

$hrt = $wsa['tot'];


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Result </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">Upload Result</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->





    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Result <?php echo $sbj." ".$term ?> Result for
                        <?php echo $rower['SurName']." ".$rower['Middle Name']." ".$rower['Last Name'] ?></h3>
                    <div class="card-tools">
                        <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool"
                            data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form name="uploadQuestionaire" role="form">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Input Subject .:</label>
                            <input type="text" value="<?php echo $sbj; ?>" class="form-control" id="stsbj"
                                placeholder="Mathematics, English, Chemistry">
                        </div>



                        <div class="form-group">
                            <div class="row">
                                <?php
                       
                            echo '


                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Test 1(10) .:</label>
                                <input type="number" name="date" id="test" value="'.$row['test'].'"
                                placeholder="Test 1(10)" class="form-control">
                            </div>
                            <!-- /.input group -->
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Test 2(10).:</label>
                                <input type="number" name="month" id="ass" value="'.$row['ass'].'"
                                placeholder="Test 2(10)" class="form-control">
                            </div>
                            <!-- /.input group -->
                            <div class="for-group col-md-3">
                                <label for="exampleInputEmail1">Test 3(10).:</label>
                                <input type="number" name="year" id="exc" value="'.$row['classex'].'"
                                placeholder="Test 3(10)" class="form-control">
                            </div>
                            <!-- /.input group -->
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Exam(70) .:</label>
                                <input type="number" name="year" id="exam" min="1" max="70"
                                    value="'.$row['exam'].'" placeholder="Exam(70)" class="form-control">
                            </div>

                            ';

                            ?>

                                <!-- /.input group -->
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Position in Class .:</label>
                                    <input type="text" name="year" id="position" placeholder="1st, 2nd, 3rd e.t.c"
                                        class="form-control" value="<?php echo $row['position']; ?>">


                                </div>

                            </div>
                        </div>



                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $data; ?>" id="admis" hidden>
                            <input type="text" class="form-control"
                                value="<?php echo $rower['SurName']." ".$rower['Middle Name']." ".$rower['Last Name'] ?>"
                                id="name" hidden>
                            <input type="text" class="form-control" value="<?php echo $cls; ?>" id="cla" hidden>
                            <input type="text" class="form-control" value="<?php echo $term; ?>" id="term" hidden>
                            <input type="text" class="form-control" value="<?php echo $ses; ?>" id="ses" hidden>
                        </div>

                        <p class="text-danger">Make sure you recheck all details typed in before uploading</p>

                        <button type="button" id="upressl" class="btn float-left btn-danger btn-outline-light">Update
                            Result</button>

                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->

        </div>
        <!--/.col (right) -->
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




<!---modal reset--->
<div class="modal fade" id="modal-reset">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Reset
                    <?php echo $rower['SurName']." ".$rower['Middle Name']." ".$rower['Last Name']. " ".$term ?>
                    Result(s)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-grey">Resetting will clear off all uploaded result(s) for the above named person.</p>
                    <p class="text-grey">Are you sure you want to continue?</p>
                    <input type="text" value="<?php echo $data; ?>" id="subb" hidden>
                    <input type="text" value="<?php echo $term; ?>" id="trm" hidden>
                    <input type="text" value="<?php echo $cls; ?>" id="ccs" hidden>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No! Cancel</button>
                <button type="button" id="reseted" class="btn btn-outline-light">Yes! Continue</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<script src="ajax.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
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



<!-- page script -->
</body>

</html>