<?php
include("functions/init.php");
if(!isset($_GET['id'])) {

echo "Error 404!";
} else {
      
$data =  $_GET['id'];

$sl = "SELECT sum(sn) as snt FROM students WHERE `Class` = '$data'";
$ww = query($sl);
$rw = mysqli_fetch_array($ww);

$s = "SELECT * FROM staff WHERE `staffclass` = '$data'";
$w = query($s);
$q = mysqli_fetch_array($w);
}
?>

<!-- right column -->
<div class="col-md-12">
    <div class="card card-dark">
        <div class="card-header">
            <h3 class="card-title">Class Size .: <span class="badge badge-info right"><?php echo $rw['snt']; ?></span>
                <br /><br /> Class Name.: <?php echo $data ?><br /><br />

                <?php
                if (row_count($w) == "" || row_count($w) == null) {
                  
                  echo "Class Teacher.: <span style='color: red'>No class teacher assigned for this class</span>";

                } else {
                  $name = $q['title']." ".$q['surname']." ".$q['firstname']." ".$q['othername'];
                echo '
               Class Teacher.: '.$name;
             }
             ?>
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
                                            <th>Admission No. </th>
                                            <th>First Name </th>
                                            <th>Last Name</th>
                                            <th>Fee Status </th>
                                            <th>Dad No. </th>
                                            <th>Mum No. </th>
                                            <th>Gender </th>
                                            <th>More</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
 $sql="SELECT * FROM students WHERE class= '$data' ORDER BY `surName` asc";
 $result_set=query($sql);
  while($row= mysqli_fetch_array($result_set))
 {
  ?>
                                        <tr>
                                            <td><?php echo $row['AdminID'] ?></td>
                                            <td><?php echo $row['SurName'] ?></td>
                                            <td><?php echo $row['Middle Name'] ?></td>
                                            <td><?php echo $row['fee'] ?></td>
                                            <td><?php echo $row['Telephone1'] ?></td>
                                            <td><?php echo $row['Telephone2'] ?></td>
                                            <td><?php echo $row['Gender'] ?></td>
                                            <?php echo '
                                                    <td ><a href="./more?id='.$row['AdminID'].'">View Full Profile</a></td>';
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