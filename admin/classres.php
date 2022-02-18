<?php
include("functions/init.php");
if(!isset($_GET['id']) && !isset($_GET['term']) && !isset($_GET['ses'])) {

echo "Error 404!";
} else {
      
$data =  $_GET['id'];
$tms  =  $_GET['term'];
$ses  =  $_GET['ses'];

?>

<!-- right column -->
<div class="col-md-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Class Name .: <?php echo $data ?><br /><br />

            </h3>

            <div class="card-tools">
                <button type="button" onclick="window.print();" id="prin" data-toggle="tooltip" title="Print Result"
                    class="btn btn-tool"><i class="fas fa-print"></i>
                </button>
                <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool"
                    data-card-widget="maximize"><i class="fas fa-expand"></i>
                </button>

            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">

                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Admission No.</th>
                                            <th>Mark Possible</th>
                                            <th>Mark Obtained</th>
                                            <th>Percentage</th>
                                            <th>Total Grade</th>
                                            <th>Teacher Comment</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
$sl = "SELECT * FROM motor WHERE `class` = '$data' AND `term` = '$tms' AND `ses` = '$ses'";
$ww = query($sl);
if(row_count($ww) == 0) {

  echo "<span class='text-center' style='color:red; font-size: 50px'>No result found</span>";
} else {
while ($rw = mysqli_fetch_array($ww)) {
 ?>
                                        <tr>
                                            <td><?php echo $rw['admno'] ?></td>
                                            <td><?php echo $rw['mrkpos'] ?></td>
                                            <td><?php echo $rw['mrkobt'] ?></td>
                                            <td><?php echo round($rw['perc'], 1) ?></td>
                                            <td><?php echo $rw['totgra'] ?></td>
                                            <td><?php echo ucwords($rw['principal']) ?></td>
                                            <?php echo '
                                                    <td ><a href="./moreres?id='.$rw['admno'].'&cls='.$data.'&term='.$tms.'&ses='.$ses.'">View Full Result</a></td>';
                                                    ?>

                                        </tr>
                                        <?php
             }
               }
               ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<script type="text/javascript">
document.getElementById('prin').addEventListener('click', myfun);

function myfun() {
    window.print();
}
</script>
<?php
}
?>