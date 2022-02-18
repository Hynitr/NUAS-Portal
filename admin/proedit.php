<?php
include("functions/top.php");
if (!isset($_GET['id'])) {
  
  redirect("./404");

} else {

  $data = $_GET['id'];

  $sql = "SELECT * FROM students WHERE `AdminID` = '$data'";
  $res = query($sql);
  $row = mysqli_fetch_array($res);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Student Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit Student</li>
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
                                <h3 class="card-title">Edit Student Details</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date dd/mm/yyyy -->
                                <div class="form-group">
                                    <label>Surname.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" id="surname" value="<?php echo $row['SurName'] ?>"
                                            name="surname" class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>First Name.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" value="<?php echo $row['Middle Name'] ?>" id="firstname"
                                            name="firstname" class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Other Names.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" value="<?php echo $row['Last Name'] ?>" id="lastname"
                                            class="form-control" name="lastname" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Date of Birth.:</label>
                                    <div class="row">
                                        <div class="input-group col-md-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                            </div>
                                            <input type="text" name="date" id="date" value="<?php echo $row['Date'] ?>"
                                                class="form-control" data-inputmask='"mask": "99"' data-mask required>
                                        </div>
                                        <!-- /.input group -->
                                        <div class="input-group col-md-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                            </div>
                                            <input type="text" name="month" id="month"
                                                value="<?php echo $row['Month'] ?>" class="form-control"
                                                data-inputmask='"mask": "99"' data-mask required>
                                        </div>
                                        <!-- /.input group -->
                                        <div class="input-group col-md-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar"></i></span>
                                            </div>
                                            <input type="text" name="year" id="year" value="<?php echo $row['Year'] ?>"
                                                class="form-control" data-inputmask='"mask": "9999"' data-mask required>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Gender.:</label>
                                    <select name="gender" id="gender" value="<?php echo $row['Gender'] ?>"
                                        class="custom-select">
                                        <option name="gender" id="gender"><?php echo $row['Gender'] ?></option>
                                        <option name="gender" id="gender">Male</option>
                                        <option name="gender" id="gender">Female</option>
                                    </select>
                                </div>
                                <!-- /.input group -->

                                <div class="form-group">
                                    <label>School Last Attended.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" name="schlst" id="schlst"
                                            value="<?php echo $row['schlst'] ?>" class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Present Class.:</label>
                                    <select name="class" id="class" value="<?php echo $row['Class'] ?>"
                                        class="custom-select">
                                        <option name="class" id="class"><?php echo $row['Class'] ?></option>
                                        <option name="class" id="class">Creche</option>
                                        <option name="class" id="class">KG 1</option>
                                        <option name="class" id="class">KG 2</option>
                                        <option name="class" id="class">Nursery 1</option>
                                        <option name="class" id="class">Nursery 2</option>
                                        <option name="class" id="class">Primary 1</option>
                                        <option name="class" id="class">Primary 2</option>
                                        <option name="class" id="class">Primary 3</option>
                                        <option name="class" id="class">Primary 4</option>
                                        <option name="class" id="class">Primary 5</option>
                                        <option name="class" id="class">J.S.S 1</option>
                                        <option name="class" id="class">J.S.S 2</option>
                                        <option name="class" id="class">J.S.S 3</option>
                                        <option name="class" id="class">S.S.S 1</option>
                                        <option name="class" id="class">S.S.S 2</option>
                                        <option name="class" id="class">S.S.S 3</option>
                                    </select>
                                </div>
                                <!-- /.input group -->

                                <div class="form-group">
                                    <label>Department.:</label>
                                    <select name="dept" id="dept" value="<?php echo $row['Department'] ?>"
                                        class="custom-select">
                                        <option name="dept" id="dept"><?php echo $row['Department'] ?></option>
                                        <option name="dept" id="dept">Null</option>
                                        <option name="dept" id="dept">Art</option>
                                        <option name="dept" id="dept">Science</option>
                                        <option name="dept" id="dept">Commercial</option>

                                    </select>
                                </div>
                                <!-- /.input group -->

                                <div class="form-group">
                                    <label>Name of Parent/Guardian.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <input type="text" name="parent" id="parent"
                                            value="<?php echo $row['parent'] ?>" class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Parent/Guardian Relation to Student.:</label>
                                    <select name="relation" id="relation" value="<?php echo $row['relation'] ?>"
                                        class="custom-select">
                                        <option name="relation" id="relation"><?php echo $row['relation'] ?></option>
                                        <option name="relation" id="relation">Guardian</option>
                                        <option name="relation" id="relation">Parent</option>

                                    </select>
                                </div>
                                <!-- /.input group -->

                                <div class="form-group">
                                    <label>Parent/Guardian Occupation.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-"></i></span>
                                        </div>
                                        <input name="occupation" id="occupation" type="text"
                                            value="<?php echo $row['occupation'] ?>" class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Parent/Guardian Residential Address.:</label>

                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-home"></i></span>
                                        </div>
                                        <input type="text" name="add" id="add" value="<?php echo $row['Address 1'] ?>"
                                            class="form-control" required>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Parent/Guardian Telephone Number.:</label>
                                    <div class="row">
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" name="dnum" id="dnum" class="form-control"
                                                value="<?php echo $row['Telephone1'] ?>" required>
                                        </div>
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input type="number" name="mnum" id="mnum" class="form-control"
                                                value="<?php echo $row['Telephone2'] ?>">
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Admission Cost.:</label>
                                    <div class="row">
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">NGN</span>
                                            </div>
                                            <input type="number" name="pword" id="pword" class="form-control"
                                                value="<?php echo $row['suF'] ?>" required>
                                        </div>
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">NGN</span>
                                            </div>
                                            <input type="number" name="rpword" id="rpword" class="form-control"
                                                value="<?php echo $row['cbk'] ?>" required>
                                        </div>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <br />
                                <!-- phone mask -->
                                <div class="form-group">
                                    <label>Input Admission Fee Below.:</label>
                                    <div class="row">
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">NGN</span>
                                            </div>
                                            <input type="number" name="acf" id="acf" class="form-control"
                                                value="<?php echo $row['AcF'] ?>" required>
                                        </div>
                                        <div class="input-group col-md-6">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">NGN</span>
                                            </div>
                                            <input type="number" name="schf" id="schf" class="form-control"
                                                value="<?php echo $row['SchF'] ?>" required>
                                        </div>

                                    </div>
                                    <!-- /.input group -->
                                </div>
                                <!-- /.form group -->

                                <div class="form-group">
                                    <label>Fee Status.:</label>
                                    <select name="feestat" id="feestat" value="<?php echo $row['fee'] ?>"
                                        class="custom-select">
                                        <option name="feestat" id="feestat"><?php echo $row['fee'] ?></option>
                                        <option name="feestat" id="feestat">paid</option>
                                        <option name="feestat" id="feestat">unpaid</option>

                                    </select>
                                </div>

                            </div>
                            <input type="text" id="idn" value="<?php echo $data ?>" hidden>
                            <div class="card-footer">
                                <button type="button" name="submit" id="denroll" class="btn btn-primary">Next</button>
                            </div>
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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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
<script src="ajax.js"></script>
</body>

</html>