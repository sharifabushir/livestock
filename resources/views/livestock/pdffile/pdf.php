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

$pdf->cell(180,10,"FARMER REPORT",0,1,"C");
$pdf->cell(180,10,"Information About Treatment.",0,1,"C");
$pdf->ln(10);

//foreach($rw as $print){
//$pdf->cell(30,8,$print['Date'],0,1);
$pdf->cell(180,10,"Information About Owner",0,1,"L");
$pdf->ln(5);
$pdf->cell(10,5,"Farmer Name:",0,0,"L");
//$pdf->cell(165,-5,$rw['spon_name'],0,1,"R");
$pdf->cell(150,5,"Address:",0,1,"R");
//$pdf->cell(149,-25,$rw['gender'],0,1,"R");
$pdf->cell(10,5,"Phone Number:",0,1,"L");
//$pdf->cell(160,-45,$rw['phone'],0,1,"R");

$pdf->ln(24);
$pdf->cell(180,10,"Information About Animal",0,1,"L");
$pdf->ln(5);
$pdf->cell(10,5,"Type",0,0,"L");
//$pdf->cell(165,-5,$rw['spon_name'],0,1,"L");
$pdf->cell(150,5,"Birth Date",0,1,"R");
//$pdf->cell(149,-25,$rw['gender'],0,1,"L");
$pdf->cell(10,5,"Weight",0,0,"L");
//$pdf->cell(160,-45,$rw['phone'],0,1,"L");
$pdf->cell(150,5,"Location",0,1,"R");
//$pdf->cell(160,-45,$rw['phone'],0,1,"L");
$pdf->cell(10,5,"Gender",0,0,"L");
//$pdf->cell(160,-45,$rw['phone'],0,1,"R");
$pdf->cell(150,5,"Species",0,1,"R");
//$pdf->cell(160,-45,$rw['phone'],0,1,"R");
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

$pdf->cell(32,8,"Vet Name",1,0,'C',0);
$pdf->cell(32,8,"Disease",1,0,'C',0);
$pdf->cell(32,8,"Date Start",1,0,'C',0);
$pdf->cell(32,8,"Date End",1,0,'C',0);
$pdf->cell(32,8,"Treatment",1,0,'C',0);
$pdf->cell(32,8,"Details",1,0,'C',0);

/*while ($row=mysqli_fetch_array($qer)){
$pdf->cell(38,8,$row['st_name'],1,0,'C',0);
$pdf->cell(38,8,$row['Start_date'],1,0,'C',0);
$pdf->cell(38,8,$row['cat_name'],1,0,'C',0);
$pdf->cell(38,8,$row['total'],1,0,'C',0);
$pdf->cell(38,8,$row['End_date'],1,1,'C',0);
}*/
$pdf->output();



?>
