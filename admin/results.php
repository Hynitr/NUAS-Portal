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
                    <h1 class="m-0 text-dark">View Students Results<sup><span
                                class="badge badge-info right"></span></sup></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Students</li>
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
                    <h3 class="card-title"></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form name="printres" role="form">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Select a Class .:</label>
                            <select name="ressbj" id="res" class="form-control">
                                <option name="class" id="res">Reception</option>
                                <option name="class" id="res">Transition</option>
                                <option name="class" id="res">Kindergarten</option>
                                <option name="class" id="res">Nursery 1</option>
                                <option name="class" id="res">Nursery 2</option>
                                <option name="class" id="res">Grade 1</option>
                                <option name="class" id="res">Grade 2</option>
                                <option name="class" id="res">Grade 3</option>
                                <option name="class" id="res">Grade 4</option>
                                <option name="class" id="res">Grade 5</option>
                                <option name="class" id="res">J.S.S 1</option>
                                <option name="class" id="res">J.S.S 2</option>
                                <option name="class" id="res">J.S.S 3</option>
                                <option name="class" id="res">S.S.S 1</option>
                                <option name="class" id="res">S.S.S 2</option>
                                <option name="class" id="res">S.S.S 3</option>
                            </select>
                        </div>


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



                        <div class="form-group">
                            <label for="exampleInputPassword1">Select a Term .:</label>
                            <select name="ressbj" id="term" class="form-control">
                                <option name="class" id="term">1st Term</option>
                                <option name="class" id="term">2nd Term</option>
                                <option name="class" id="term">3rd Term</option>
                            </select>
                        </div>



                        <button type="button" class="btn btn-danger" id="view">View Result</button>


                    </form>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->

        </div>
        <section id="displayres" class="content">

        </section>
        <!--/.col (right) -->
</div>
<!-- /.row -->
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
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

<script>
//filter
document.getElementById('view').addEventListener('click', getResult);

function getResult() {
    var x = document.forms["printres"]["res"].value;
    var y = document.forms["printres"]["term"].value;
    var z = document.forms["printres"]["ses"].value;

    if (x == null || x == "") {

        return false;
    }

    var xhr = new XMLHttpRequest();
    $(toastr.error('Loading.. Please wait'));
    xhr.open('GET', './classres?id=' + x + '&term=' + y + '&ses=' + z, true);

    xhr.onload = function() {
        if (xhr.status == 200) {
            //document.write(this.responseText);
            document.getElementById('displayres').innerHTML = xhr.responseText;
        } else {

            $(toastr.error('No file found'));
        }
    }

    xhr.send();
}
</script>


</body>

</html>