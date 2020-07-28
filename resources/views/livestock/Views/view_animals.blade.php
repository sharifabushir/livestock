<?php include('../layouts/top.html');?>

  <h1 class="page-header">Animal View</h1>
<?php
				include('../conn.php');
				$q="select *from farmer f,complain c,animal a,vet v where f.F_ID=a.F_ID and a.animal_ID=c.animal_ID and v.vet_ID=c.vet_ID";
				$qr=mysqli_query($pdo,$q) or die(mysqli_error());
				;
				$sn=1;
				?>
<div class="row">
    <div class="col-lg-12">
      <!-- Advanced Tables -->
      <div class="panel panel-default">
          <div class="panel-heading">
               Advanced Tables
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                             <tr>
                                            <th>Sno</th>
                                            <th>Animal Type</th>
                                            <th>Gender</th>
                                            <th>Age</th>
                                            <th>Weight</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       	<?php 
									while($rw=mysqli_fetch_array($qr)){
									?>
                                        <tr class="gradeX">
                                            <td><?=$sn++ ?></td>
                                            <td><?=$rw['atype']?></td>
                                            <td><?=$rw['gender']?></td>
                                            <td class="center"><?=$rw['age']?></td>
                                            <td class="center"><?=$rw['weight']?></td>
                                          
                                      </tr>
									<?php
									}
									?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->


<?php include('../layout/down.html');?>
