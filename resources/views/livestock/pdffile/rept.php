<?php
//include("config.php");
include("pdf/fpdf.php");

/*$id = $_GET['id'];
$name = '';
$sql = "select * from client,invoice where client.ClientID = invoice.ClientID and InvoiceID = $id";
$stmt = $db->prepare($sql);
$stmt->execute();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count = 1;
$total = 0;*/

$pdf=new FPDF();
$pdf->addPage();
$pdf->setSubject("invoice");
$pdf->setTitle("invoice");
$pdf->ln(10);
$pdf->setFont("Arial","B",10);
//$pdf->image("zanzibit_logo.png",25,25,70,"C"); 
$pdf->ln(40);

//foreach ($row as $print){

$pdf->cell(160,15,"RECEIPT",0,1,"R");
$pdf->cell(155,8,"Date:",0,0,"R");
//$pdf->cell(30,8,$print['Date'],0,1);
$pdf->cell(165,8,"Receipt No:",0,0,"R");
//$pdf->cell(30,8,$print['InvoiceNumber'],0,1);
$pdf->cell(152,8,"Tin:",0,0,"R");
$pdf->cell(30,8,"034879967",0,1);


$pdf->ln(-38);

$pdf->cell(80,8,"CHARITY SCHOOL BWEJUU",0,1,"C");	
$pdf->cell(55,8,"P.O.BOX: #",0,1,"C");
$pdf->cell(67,8,"ZANZIBAR,TANZANIA",0,1,"C");
$pdf->cell(62,8,"Mobile:0776825230",0,1,"C");
$pdf->cell(73,8,"Email:#",0,1,"C");
$pdf->cell(62,8,"www#",0,1,"C");
$pdf->cell(90,8,"",0,1,"C");
$pdf->ln(-5);

$pdf->cell(35,8,"RECEIVED From",0,1,"C");
$pdf->cell(30,8,"Student Name",0,0,"C");
//$pdf->cell(1,8,$print['CompanyName'],0,1,"C");
$pdf->cell(50,8,"Class:",0,0,"C");
//$pdf->cell(38,8,$print['Address'],0,1,"C");
$pdf->cell(50,8,"Address:",0,0,"C");
//$pdf->cell(47,8,$print['Contact'],0,1,"C");
$pdf->cell(50,8,"Phone:",0,0,"C");
//$pdf->cell(35,8,$print['EmailAddress'],0,1,"C");
//$pdf->cell(58,8,"Email Address:",0,0,"C");


$pdf->ln(6);

/*$pdf->cell(46,8,"RECEIVED PERSON",1,0,'C',0);
$pdf->cell(45,8,"JOB",1,0,'C',0);
$pdf->cell(45,8,"PAYMENT",1,0,'C',0);
$pdf->cell(45,8,"VALID TILL",1,1,'C',0);
$pdf->cell(46,8,$print['SalesPerson'],1,0,'C',0);
$pdf->cell(45,8,$print['Job'],1,0,'C',0);
$pdf->cell(45,8,$print['Payment'],1,0,'C',0);
$pdf->cell(45,8,$print['ValidTill'],1,0,'C',0);

$name = $print['InvoiceNumber'];

}

$sql1 = "select * from client,invoice where client.ClientID = invoice.ClientID and InvoiceNumber = $name and Status = 'Pending'";
$stmt1 = $db->prepare($sql1);
$stmt1->execute();
$row1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
*/
$pdf->ln(20);

$pdf->cell(30,8,"SN",1,0,'C',0);
$pdf->cell(38,8,"DISCRIPTIONS",1,0,'C',0);
$pdf->cell(38,8,"MONTH",1,0,'C',0);
$pdf->cell(38,8,"MONTH PRICE",1,0,'C',0);
$pdf->cell(38,8,"TOTAL PRICE",1,1,'C',0);

/*foreach ($row1 as $print1){

$pdf->cell(30,8,$count,1,0,'C',0);
$pdf->cell(38,8,$print1['Description'],1,0,'C',0);
$pdf->cell(38,8,$print1['Quantity'],1,0,'C',0);
$pdf->cell(38,8,$print1['UnitPrice'],1,0,'C',0);
$pdf->cell(38,8,$print1['Total'],1,1,'C',0);

$count++;
$total+=$print1['Total'];
}
*/
$pdf->cell(30,8," ",0,0,'C',0);
$pdf->cell(38,8," ",0,0,'C',0);
$pdf->cell(38,8," ",0,0,'C',0);
$pdf->cell(38,8,"TOTAL",1,0,'C',0);
//$pdf->cell(38,8,$total,1,0,'C',0);


$pdf->output();
?>