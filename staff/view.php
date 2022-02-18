<?php include("functions/top.php");

//get staff class
$sql="SELECT * from staff WHERE `staffid` = '".$_SESSION['staff_id']."'";
$result_set=query($sql);
$row= mysqli_fetch_array($result_set);

$_SESSION['ws'] = $row['staffclass'];
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Uploaded Assignment</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Uploaded Assignment</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section id="preview" class="content">
        <!-- right column -->
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Assignment Uploaded</h3>

                    <div class="card-tools">
                        <button type="button" id="del" data-toggle="modal" data-target="#modal-delete"
                            data-toggle="tooltip" title="Delete a result" class="btn btn-tool"><i
                                class="fas fa-trash"></i>
                        </button>
                        <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool"
                            data-card-widget="maximize"><i class="fas fa-expand"></i>
                        </button>
                        <button type="button" data-toggle="tooltip" title="Minimize" class="btn btn-tool"
                            data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap table-bordered table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>Name</th>
                                <th>Admission Number</th>
                                <th>Assignment file</th>
                                <th>Date Uploaded</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
 $data = $_SESSION['ws'];
 $sql= "SELECT * FROM `upassignment` WHERE `class` = '$data'";
 $result_set=query($sql);
 
 if(row_count($result_set) == '') {

    echo "No records found";
 } else {
  while($row= mysqli_fetch_array($result_set))
 {
  ?>

                            <tr class="text-center">
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['adminid'] ?></td>
                                <td><?php echo $row['file'] ?>

                                    <a style="color: red;" target="_blank"
                                        href="<?php echo $call['stud'] ?>/upload/assignment/<?php echo $row['file'] ?>"><br />Download</a>
                                </td>
                                <td><?php echo  date('D, M d, Y - h:i:sa', strtotime($row['date'])) ?></td>



                            </tr>
                            <?php
 }
                  }
                  ?>
                        </tbody>
                    </table>
                </div>
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

<!---modal reset--->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete all uploaded Assignment</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-grey">Resetting will clear off all uploaded result(s) for the above named person.</p>
                    <p class="text-grey">Are you sure you want to continue?</p>
                    <p id="clss"><?php echo $_SESSION['ws'] ?></p>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">No! Cancel</button>
                <button type="button" id="assreseted" class="btn btn-outline-light">Yes! Continue</button>
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

</body>

</html>