<?php include('../layouts/top.html')
//$q="select *from vet v,farmer f,animal a,complain c,symptoms s,disease d where 
				//v.vet_ID=$id and c.vet_ID=$id and a.animal_ID=c.animal_ID and f.F_ID=a.F_ID and a.animal_ID=s.animal_ID and s.symp_ID=d.symp_ID";?>
    <div class="col-lg-12">
                    <h1 class="page-header">INFORMATION</h1>
                </div>
				       	<?php
				include("../conn.php");
				$id=$_GET['id'];
				$q="select *from vet v where v.vet_ID=$id ";
				$qr=mysqli_query($pdo,$q) or die(mysqli_error());
				$rw=mysqli_fetch_assoc($qr);
				;
				$sn=1;
				?>
                <!--End Page Header -->


			 
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
                                            <th>Farmer Name</th>
                                            <th>Animal</th>
                                            <th>Complain</th>
                                            <th>Symptoms</th>
                                            <th>Treatement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
									 $d=$rw['vet_ID'];
									 $qx="select *from farmer f,animal a,complain c,symptoms s where
									 a.animal_ID=c.animal_ID and f.F_ID=a.F_ID and s.symp_ID=c.symp_ID and c.vet_ID=$d";
									 $qxr=mysqli_query($pdo,$qx) or die(mysqli_error());
									while($row=mysqli_fetch_array($qxr)){
									
									?>
                                        <tr class="">
                                            <td><?=$sn++ ?></td>
                                            <td><?= $row['FName'];?></td>
                                            <td><?= $row['atype'];?></td>
                                            <td><?= $row['title'];?></td>
                                            <td><?= $row['details'];?></td>
                                            <td class="center">
  												<a class="success" href="../pdffile/medicine.php?id=<?php echo $row['comp_ID']; ?> "><i class="btn btn-inverse btn btn-inverse fa fa-medkit">Medical</i></a>
												<a class="success" href="../pdffile/food.php?id=<?php echo $row['comp_ID']; ?>"><i class="btn btn-inverse fa fa-user">Food</i> </a>
												<a class="success" href="../pdffile/advice.php?id=<?php echo $row['comp_ID']; ?>"><i class="btn btn-inverse fa fa-user-md fa-fw ">Advice</i> </a>
											</td>
                                        </tr>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
<?php include('../layouts/down.html')?>