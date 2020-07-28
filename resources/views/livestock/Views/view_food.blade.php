<?php include('../layouts/top.html')?>
    <div class="col-lg-12">
                    <h1 class="page-header">Food</h1>
                </div>
                <!--End Page Header -->
            </div>
 <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        	<?php
				include("../conn.php");
				$q="select *from food";
				$qr=mysqli_query($pdo,$q) or die(mysqli_error());
				;
				$sn=1;
				?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Farmer Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                            <th>Type</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
									while($row=mysqli_fetch_array($qr)){
									?>
                                        <tr class="gradeX">
                                            <td><?=$sn++ ?></td>
                                            <td><?= $row['FName'];?></td>
                                            <td><?= $row['location'];?></td>
                                            <td class="center"><?= $row['phone'];?></td>
                                            <td class="center"><?= $row['atype'];?></td>
                                            <td class="center"><?= $row['age'];?></td>
                                            <td class="center"><?= $row['gender'];?></td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
<?php include('../layouts/down.html')?>