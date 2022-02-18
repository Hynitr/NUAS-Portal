<?php include("functions/top.php"); ?>
<?php
if(!isset($_GET['id']) && !isset($_GET['cls']) && !isset($_GET['term']) && !isset($_GET['ses'])) {
  header("location: ../opps");
}

$data = $_GET['id'];
$cls  = $_GET['cls'];
$term = $_GET['term'];
$ses  = $_GET['ses'];


//get student name from admission no.
$sl = "SELECT * FROM students WHERE `AdminID` = '$data'";
$res = query("$sl");
$rower = mysqli_fetch_array($res);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Upload Result for <?php echo $term ?></h1>
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

    <?php
 $sql= "SELECT * FROM `result` WHERE `admno` = '$data' AND `term` = '$term' AND `ses` = '$ses'";
 $result_set = query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
  if(row_count($result_set) == "") {
            
          } else {
          ?>


    <section id="preview" class="content">
        <!-- right column -->
        <div class="col-md-12">
            <div class="card card-dark">
                <div class="card-header">
                    <h3 class="card-title">Preview <?php echo $term ?> Result for
                        <?php echo $rower['SurName']." ".$rower['Middle Name']." ".$rower['Last Name'] ?></h3>

                    <div class="card-tools">
                        <button type="button" id="del" data-toggle="modal" data-target="#modal-reset"
                            data-toggle="tooltip" title="Reset this result" class="btn btn-tool"><i
                                class="fas fa-recycle"></i>
                        </button>
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

                        <tr class="text-center">
                            <th>Subject</th>
                            <th>Test 1</th>
                            <th>Test 2</th>
                            <th>Test 3 </th>
                            <th>Exam</th>
                            <th>Total</th>
                            <th>Grade</th>
                            <th>Position</th>
                            <th>Remark</th>

                        </tr>
                        </thead>

                        <tbody>
                            <?php
 $sql= "SELECT * FROM `result` WHERE `admno` = '$data' AND `term` = '$term' AND `ses` = '$ses'";
 $result_set=query($sql);
  while($row= mysqli_fetch_array($result_set))
 {

        echo '

        
        <tr class="text-center">
        <td>'.$row['subject'].' 
<a style="color: red;" href="./edit?id='.$data.'&sbj='.$row['subject'].'&tm='.$term.'&cls='.$cls.'&ses='.$ses.'"><br/>Edit</a>
                            </td>
                            <td>'.$row['test'].'</td>
                            <td>'.$row['ass'].'</td>
                            <td>'.$row['classex'].'</td>
                            <td>'.$row['exam'].'</td>
                            <td>'.$row['total'].'</td>
                            <td>'.$row['grade'].'</td>
                            <td>'.$row['position'].'</td>
                            <td>'.$row['remark'].'</td>


                            </tr>

                            ';
                            } 
                            if(row_count($result_set) == 0) {

                            echo "<span style='color:red'>No records found</span>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
    <?php
}
}
?>



    <!-- Main content -->
    <section class="content">
        <!-- right column -->
        <div class="col-md-12">
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Upload Result for <strong>
                            <?php echo $rower['SurName']." ".$rower['Middle Name']." ".$rower['Last Name'] ?></strong> -
                        <?php echo $term ?> (<?php echo $ses ?> session) </h3>
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
                            <input type="text" class="form-control" id="stsbj"
                                placeholder="Mathematics, English, Chemistry">
                        </div>

                        <div class="form-group">
                            <div class="row">


                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Test 1(10) .:</label>
                                    <input type="number" name="date" id="test" placeholder="Test 1(10)"
                                        class="form-control">
                                </div>
                                <!-- /.input group -->
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Test 2(10).:</label>
                                    <input type="number" name="month" id="ass" placeholder="Test 2(10)"
                                        class="form-control">
                                </div>


                                <!-- /.input group -->
                                <div class="form-group col-md-3">
                                    <label for="exampleInputEmail1">Test 3(10).:</label>
                                    <input type="number" name="year" id="exc" placeholder="Test 3(10)"
                                        class="form-control">
                                </div>
                                <!-- /.input group -->
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Exam(70) .:</label>
                                    <input type="number" name="year" id="exam" placeholder="Exam(70)"
                                        class="form-control">
                                </div>

                                <!-- /.input group -->
                                <div class="form-group col-md-2">
                                    <label for="exampleInputEmail1">Position in Class .:</label>
                                    <input type="text" name="year" id="position" placeholder="1st, 2nd, 3rd e.t.c"
                                        class="form-control">

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

                        <button type="button" id="ressl" class="btn float-left btn-danger btn-outline-light">Upload
                            Subject Result</button>
                        <button type="button" id="done" class="btn float-right btn-primary btn-outline-light">Next step
                            >>></button>

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
                    <input type="text" value="<?php echo $ses; ?>" id="ses" hidden>
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











<!---modal delete--->
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-danger">
            <div class="modal-header">
                <h4 class="modal-title">Delete a Subject Result <span id="msg"></span></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <p class="text-grey">Deleting a subject result will delete all records for that subject result and
                        also the the subject. <br>If you are not sure about this, kindly contact the school ICT or
                        cancel this dialog.</p>

                    <form name="deleting">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Subject Uploaded</span>
                            </div>
                            <select id="position" class="form-control">
                                <?php
                 
 $sql= "SELECT * FROM `result` WHERE `admno` = '$data' AND `term` = '$term' AND `ses` = '$ses'";;
 $result_set=query($sql);
 while($row= mysqli_fetch_array($result_set))
 {
          ?>
                                <option id="sbjjr"><?php echo $row['subject']; ?></option>

                                <?php
                  }
                  ?>
                            </select>
                            <input type="text" value="<?php echo $data; ?>" id="subbr" hidden>
                            <input type="text" value="<?php echo $term; ?>" id="trmr" hidden>
                            <input type="text" value="<?php echo $cls; ?>" id="ccsr" hidden>
                            <input type="text" value="<?php echo $ses; ?>" id="ses" hidden>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                <button type="button" id="movedel" class="btn btn-outline-light">Continue</button>
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

<?php


//notification for deleted

if(isset($_SESSION['del'])) {
   echo "<script>$(toastr.error('Subject Result Deleted Successfully'));</script>";
 
}


//notification for upload result
if(isset($_SESSION['upup'])) {
   echo "<script>$(toastr.error('Result uploaded sucessfully'));</script>";

}


//notification for reset result
if(isset($_SESSION['res'])) {
   echo "<script>$(toastr.error('Result resetted sucessfully'));</script>";

}

//notification for update result
if(isset($_SESSION['upupl'])) {
   echo "<script>$(toastr.error('Result updated sucessfully'));</script>";

}

?>
<!-- page script -->
</body>

</html>