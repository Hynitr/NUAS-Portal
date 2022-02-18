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
                    <h1>Update Attendance</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item active">Upload Result</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <form method="POST" enctype="multipart/form-data">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12">

                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Upload Report Sheet for <?php echo $row['staffclass'] ?></h3>
                            </div>
                            <div class="card-body">

                                <!-- /.form group -->

                                <label>Select a Student.:</label>
                                <select name="class" id="class" class="custom-select">
                                    <?php
$ws = $row['staffclass'];
 $sql2="SELECT * from students WHERE `Class` = '$ws'";
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

                                <input type="text" id="cls" value="<?php echo $ws ?>" hidden>


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
                                <button type="button" name="submit" id="upl" class="btn btn-primary">Upload
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








<!---modal basic school--->
<div class="modal fade" id="modal-basic">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title">Upload result for <span id="stud" style="color: yellow;"> </span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form name="uploadquestion" role="form">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Select a Class .:</label>
                            <select id="catclass" class="form-control">
                                <option id="catclass">Basic one</option>
                                <option id="catclass">Basic Two</option>
                                <option id="catclass">Basic Three</option>
                                <option id="catclass">Basic Four</option>
                                <option id="catclass">Basic Five</option>
                                <option id="catclass">Basic Six</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Create a subject .:</label>
                            <input type="text" placeholder="e.g Mathematics, English, Basic Science e.t.c" id="subject"
                                name="subject" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Time Allowed - Hours .:</label>
                                <select id="hour" class="form-control">
                                    <?php
                        $x = 0;

                        while($x <= 24) {
                            echo '

   
                          <option style="font-size: 20px" id="hour">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputPassword1">Time Allowed - Minutes .:</label>
                                <select id="minutes" class="form-control">
                                    <?php
                        $x = 1;

                        while($x <= 60) {
                            echo '

   
                          <option style="font-size: 20px" id="minutes">'.$x.' </option>
                       

                          <br>';
                          $x++;
                      }
                      ?>

                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                <button type="button" id="next" class="btn btn-outline-light">Continue</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--- end of code for basic modal -->










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
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
<script>
$(function() {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

})
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