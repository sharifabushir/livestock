<?php
//include("../connect.php");
include("../pdf/fpdf.php");

//$id = $_GET['id'];
//$name='';
//$q="select *from sponsors sp,donation d,students st,dona_cat ct
//where sp.spon_ID=d.spon_ID and st.st_ID=d.st_ID and ct.cat_ID=d.cat_ID and dona_ID=$id";
//$qe=mysqli_query($conn,$q) or die(mysqli_error());
//$rw=mysqli_fetch_assoc($qe);
$pdf=new FPDF();
$pdf->addPage();
$pdf->setSubject("vet");
$pdf->setTitle("Veterinarian");
$pdf->ln(10);
$pdf->setFont("Arial","B",10);

$pdf->cell(180,10,"VETERINARIAN REPORT",0,1,"C");
$pdf->cell(180,10,"Information About Treatment.",0,1,"C");
$pdf->ln(10);

//foreach($rw as $print){
//$pdf->cell(30,8,$print['Date'],0,1);
$pdf->cell(180,10,"Veterinarian Information",0,1,"L");
$pdf->ln(5);
$pdf->cell(10,5,"Vet Name:",0,0,"L");
//$pdf->cell(165,-5,$rw['vet name'],0,1,"R");
$pdf->cell(150,5,"Phone:",0,1,"R");
//$pdf->cell(149,-25,$rw['phone'],0,1,"R");
$pdf->cell(10,5,"email:",0,0,"L");
//$pdf->cell(160,-45,$rw['email'],0,1,"R");
$pdf->cell(150,5,"status:",0,1,"R");
//$pdf->cell(160,-45,$rw['status'],0,1,"R");


//}
$pdf->ln(24);
$pdf->cell(180,5,"Monitoring Information",0,1,"C");
//$name=$rw['spon_ID'];
//var_dump($name);
//exit;
//$qr="select * from sponsors sp,donation d,students st,dona_cat ct
//where sp.spon_ID=d.spon_ID and st.st_ID=d.st_ID and ct.cat_ID=d.cat_ID";
//$qer=mysqli_query($conn,$qr) or die(mysqli_error());
$pdf->ln(5);

$pdf->cell(27,8,"Farmer Name",1,0,'C',0);
$pdf->cell(27,8,"Phone",1,0,'C',0);
$pdf->cell(27,8,"Animal Type",1,0,'C',0);
$pdf->cell(27,8,"Disease",1,0,'C',0);
$pdf->cell(27,8,"Treatment",1,0,'C',0);
$pdf->cell(27,8,"Details",1,0,'C',0);
$pdf->cell(27,8,"Date",1,0,'C',0);

/*while ($row=mysqli_fetch_array($qer)){
$pdf->cell(38,8,$row['st_name'],1,0,'C',0);
$pdf->cell(38,8,$row['Start_date'],1,0,'C',0);
$pdf->cell(38,8,$row['cat_name'],1,0,'C',0);
$pdf->cell(38,8,$row['total'],1,0,'C',0);
$pdf->cell(38,8,$row['End_date'],1,1,'C',0);
}*/
$pdf->output();



?>
