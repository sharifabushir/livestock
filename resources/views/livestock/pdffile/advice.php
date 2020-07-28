<?php
include("../conn.php");
include("../pdf/fpdf.php");

$id = $_GET['id'];
//$name='';
$q="select *from vet v,complain c where v.vet_ID=c.vet_ID and comp_Id=$id";
//where sp.spon_ID=d.spon_ID and st.st_ID=d.st_ID and ct.cat_ID=d.cat_ID and dona_ID=$id";
$qe=mysqli_query($pdo,$q) or die(mysqli_error());
$rw=mysqli_fetch_assoc($qe);
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
//Gender,address,image

$pdf->cell(10,10,"Vet Name:",0,0,"L");
$pdf->cell(20,10,$rw['vetName'],0,0,"R");
$pdf->cell(100,10,"Phone:",0,0,"R");
$pdf->cell(20,10,$rw['phone'],0,1,"R");
$pdf->cell(10,10,"email:",0,0,"L");
$pdf->cell(30,10,$rw['email'],0,0,"R");
$pdf->cell(90,10,"status:",0,0,"R");
$pdf->cell(15,10,$rw['status'],0,1,"R");
$v=$rw['comp_ID'];
$q1="select *from farmer f,animal a,complain c where f.F_ID=a.F_ID and a.animal_ID=c.animal_ID and c.comp_ID=$v";
//where sp.spon_ID=d.spon_ID and st.st_ID=d.st_ID and ct.cat_ID=d.cat_ID and dona_ID=$id";
$qe1=mysqli_query($pdo,$q1) or die(mysqli_error());
$row=mysqli_fetch_assoc($qe1);

$pdf->cell(180,10,"Farmer Information",0,1,"L");
$pdf->ln(5);
$pdf->cell(10,10,"Farmer Name:",0,0,"L");
$pdf->cell(45,10,$row['FName'],0,0,"R");
$pdf->cell(77,10,"Gender:",0,0,"R");
$pdf->cell(10,10,$row['gender'],0,1,"R");
$pdf->cell(104,10,"Location:",0,0,"L");
$pdf->cell(30,10,$row['location'],0,0,"R");
$pdf->cell(130,10,"status:",0,0,"R");
$pdf->cell(20,10,$row['phone'],0,1,"R");

$pdf->cell(180,10,"Animal Information",0,1,"L");
$pdf->ln(5);
$pdf->cell(10,10,"Type:",0,0,"L");
$pdf->cell(15,10,$row['atype'],0,0,"R");
$pdf->cell(108,10,"Gender:",0,0,"R");
$pdf->cell(10,10,$row['gender'],0,1,"R");
$pdf->cell(10,10,"Species:",0,0,"L");
$pdf->cell(25,10,$row['species'],0,0,"R");
$pdf->cell(100,10,"Location:",0,0,"R");
$pdf->cell(15,10,$row['location'],0,1,"R");
$pdf->cell(10,10,"Age:",0,0,"L");
$pdf->cell(30,10,$row['age'],0,1,"R");

//}
$pdf->ln(24);
$pdf->cell(180,5,"Feeding Plan Information",0,1,"C");
$an=$row['animal_ID'];
//var_dump($name);
//exit;
$qr="select * from treatment t,advice a,animal l,complain c
 where t.treat_ID=a.treat_ID and c.comp_ID=t.comp_ID and l.animal_ID=c.animal_ID
 and l.animal_ID=$an";
$qer=mysqli_query($pdo,$qr) or die(mysqli_error());
$pdf->ln(5);

$pdf->cell(65,8,"Treatment",1,0,'C',0);
$pdf->cell(65,8,"Date",1,0,'C',0);
$pdf->cell(63,8,"Details",1,1,'C',0);


while ($row=mysqli_fetch_array($qer)){
$pdf->cell(65,8,$row['ttype'],0,0,'C',0);
$pdf->cell(65,8,$row['tdate'],0,0,'C',0);
$pdf->cell(65,8,$row['details'],0,0,'C',0);
}
$pdf->output();



?>
