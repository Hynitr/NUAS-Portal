<?php
include("functions/top.php");
if (!isset($_GET['id']) && !isset($_GET['cls']) && !isset($_GET['term'])) {
 
 redirect("./frn");
} else {

  $data = $_GET['id'];
  $cls  = $_GET['cls'];
  $ws   = $_GET['term'];
 
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">View Result</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Result</li>
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
                            <label for="exampleInputPassword1">Select a Student/Pupil .:</label>
                            <select name="ressbj" id="ressbj" class="form-control">
                                <option></option>
                                <?php
 $sql2="SELECT * from students WHERE `Class` = '$cls'";
 $result_set2=query($sql2);
 if (row_count($result_set2) < 1) { 
  echo '<option name="class" id="class">No Student Available for this class</option>';
 } else {
 while($row2= mysqli_fetch_array($result_set2)){   
 ?> <optgroup label="<?php echo $row2['SurName']." ".$row2['Middle Name']." ".$row2['Last Name'] ?>">
                                    <option name="class" id="class"><?php echo $row2['AdminID'] ?></option>
                                </optgroup>
                                <?php
}
 }
 ?>
                            </select>
                        </div>
                        <input type="text" id="tms" value="<?php echo $ws ?>" hidden>
                        <input type="text" id="cls" value="<?php echo $cls ?>" hidden>
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
document.getElementById('ressbj').addEventListener('click', getResult);

function getResult() {
    var x = document.forms["printres"]["ressbj"].value;
    var y = document.forms["printres"]["tms"].value;
    var z = document.forms["printres"]["cls"].value;

    if (x == null || x == "") {

        return false;
    }
    var xhr = new XMLHttpRequest();
    $(toastr.error('Loading... Please wait'));
    xhr.open('GET', './class?id=' + x + '&tms=' + y + '&cls=' + z, true);

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