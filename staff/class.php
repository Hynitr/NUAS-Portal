<?php
include("functions/init.php");
if(!isset($_GET['id'])) {

echo "Error 404!";
} else {
      
$data =  $_GET['id'];
$tms  =  $_GET['tms'];
$cls  =  $_GET['cls'];

$sl = "SELECT * FROM motor WHERE `admno` = '$data' AND `class` = '$cls' AND `term` = '$tms'";
$ww = query($sl);

$sql = "SELECT * FROM students WHERE `AdminID` = '$data'";
$ress = query($sql);
$row = mysqli_fetch_array($ress);

if(row_count($ww) == 0) {

  echo "<span class='text-center' style='color:red; font-size: 50px'>No result found</span>";
} else {

  if(row_count($ress) == 0) {

  echo "<span class='text-center' style='color:red; font-size: 50px'>No result found</span>";
} else {

  $rw = mysqli_fetch_array($ww);

}
?>
        
          <!-- right column -->
          <div class="col-md-12">
              <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Name .: <?php echo $row['SurName']." ".$row['Middle Name']." ".$row['Last Name'] ?><br/><br/>

             </h3>

               <div class="card-tools">
                  <button type="button" onclick="window.print();" id="prin" data-toggle="tooltip" title="Print Result" class="btn btn-tool"><i class="fas fa-print"></i>
                  </button>
                  <button type="button" data-toggle="tooltip" title="Maximize" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i>
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
                      <th >Admission No.</th>
                            <th >Mark Possible</th>
                            <th >Mark Obtained</th>
                            <th >Percentage</th>
                            <th >Total Grade</th>
                            <th >Teacher Comment</th>
                            <th ></th>
                    </tr>
                  </thead>
                  <tbody>

                    <tr>
                      <td><?php echo $rw['admno'] ?></td>
                                                    <td><?php echo $rw['mrkpos'] ?></td>
                                                    <td><?php echo $rw['mrkobt'] ?></td>
                                                    <td><?php echo $rw['perc'] ?></td>
                                                    <td><?php echo $rw['totgra'] ?></td>
                                                    <td><?php echo $rw['principal'] ?></td>
                                                    <?php echo '
                                                    <td ><a href="./moreres?id='.$rw['admno'].'&cls='.$cls.'&term='.$tms.'">View Full Result</a></td>';
                                                    ?>
                                                    
                    </tr>
                    
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
}
?>