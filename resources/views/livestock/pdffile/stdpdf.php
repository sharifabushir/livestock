<?php
include("../connect.php");
include("../pdf/fpdf.php");

/*$id = $_GET['id'];*/
$id = $_GET['id'];
$name='';
$q="select * from students s,parents p where p.pt_ID=s.pt_ID and s.st_ID=$id";
$qe=mysqli_query($conn,$q) or die(mysqli_error());
$rw=mysqli_fetch_array($qe);

$pdf=new FPDF();
$pdf->addPage();
$pdf->setSubject("Sponsor");
$pdf->setTitle("SPONSOR");
$pdf->ln(10);
$pdf->setFont("Arial","B",10);

$pdf->cell(180,10,"STUDENT SPONSORSHIP REPORT",0,1,"C");
$pdf->cell(180,10,"Information About Student.",0,1,"C"); 
$pdf->ln(10);

//foreach($row as $print){

$pdf->cell(138,5,"Student Name:",0,1,"R");
$pdf->cell(165,-5,$rw['st_name'],0,1,"R");
$pdf->cell(137,25,"Parent Mobile:",0,1,"R");
$pdf->cell(160,-25,$rw['pphone'],0,1,"R");
//$pdf->cell(30,8,$print['Date'],0,1);
$pdf->cell(140,45,"Student Gender:",0,1,"R");
$pdf->cell(150,-45,$rw['stgender'],0,1,"R");
$pdf->ln(-24);

$pdf->cell(30,55,"Reg Number:ST",0,1);
$pdf->cell(65,-55,$rw['st_ID'],0,1,"C");	
$pdf->cell(30,75,"Student Address:",0,1);
$pdf->cell(79,-75,$rw['staddress'],0,1,"C");
$pdf->cell(30,95,"Reletive Email:",0,1);
$pdf->cell(95,-95,$rw['pemail'],0,1,"C");
$pdf->cell(30,8,"",0,1,"C");
$pdf->ln(-5);

$pdf->cell(180,115,"Information about Sponsorship",0,1,"C");
$name=$rw['st_ID'];
$qr="select * from sponsors sp,donation d,students st,dona_cat ct 
where sp.spon_ID=d.spon_ID and st.st_ID=d.st_ID and ct.cat_ID=d.cat_ID and d.spon_ID=$name";
$qer=mysqli_query($conn,$qr) or die(mysqli_error());
$pdf->ln(-50);

$pdf->cell(38,8,"Sponsor Name",1,0,'C',0);
$pdf->cell(38,8,"Donation Date",1,0,'C',0);
$pdf->cell(38,8,"Kind Sponsor",1,0,'C',0);
$pdf->cell(38,8,"Amount",1,0,'C',0);
$pdf->cell(38,8,"End Sponsor",1,1,'C',0);
while ($row=mysqli_fetch_array($qer)){
$pdf->cell(38,8,$row['spon_name'],1,0,'C',0);
$pdf->cell(38,8,$row['Start_date'],1,0,'C',0);
$pdf->cell(38,8,$row['cat_name'],1,0,'C',0);
$pdf->cell(38,8,$row['total'],1,0,'C',0);
$pdf->cell(38,8,$row['End_date'],1,1,'C',0);

}
$pdf->output();



?>