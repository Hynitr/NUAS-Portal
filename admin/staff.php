<?php
include("functions/init.php");
if(!isset($_GET['id'])) {

echo "Error 404!";
} else {
      
$data =  $_GET['id'];

$sl = "SELECT sum(sn) as snt FROM staff WHERE `category` = '$data'";
$ww = query($sl);
$rw = mysqli_fetch_array($ww);

$s = "SELECT * FROM staff WHERE `category` = '$data'";
$w = query($s);
$q = mysqli_fetch_array($w);
}
?>

<!-- right column -->
<div class="col-md-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Class Teachers.: <span
                    class="badge badge-info right"><?php echo $rw['snt']; ?></span>

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
                                            <th>Staff ID. </th>
                                            <th>First Name </th>
                                            <th>Last Name</th>
                                            <th>Other Name </th>
                                            <th>Class Taught</th>
                                            <th>Tel</th>
                                            <th>Discipline</th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
 $sql="SELECT * FROM staff WHERE `category`= '$data' ORDER BY `surname` asc";
 $result_set=query($sql);
  while($row= mysqli_fetch_array($result_set))
 {
  ?>
                                        <tr>
                                            <td><?php echo $row['staffid'] ?></td>
                                            <td><?php echo $row['surname'] ?></td>
                                            <td><?php echo $row['firstname'] ?></td>
                                            <td><?php echo $row['othername'] ?></td>
                                            <td><?php echo $row['staffclass'] ?></td>
                                            <td><?php echo $row['tel1'] ?></td>
                                            <td><?php echo $row['discipline'] ?></td>
                                            <?php echo '
                                                    <td ><a href="./staffmore?id='.$row['staffid'].'">View Full Profile</a></td>';
                                                    ?>

                                        </tr>
                                        <?php
                  }
                  if(row_count($result_set) == 0) {

  echo "<span style='color:red'>No records found</span>";
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