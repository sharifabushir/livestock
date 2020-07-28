<?php
include("../conn.php");
//vet
if(isset($_POST['btnvet'])){
$filetmp=$_FILES["photo"]["tmp_name"];
$filename=$_FILES["photo"]["name"];
$filetype=$_FILES["photo"]["type"];
$filepath="../Uploaded/".$filename;

$a=$_POST['name'];
$b=$_POST['phone'];
$c=$_POST['location'];
$d=$_POST['email'];
$e=$_POST['username'];
$f=$_POST['password'];
$g=$_POST['gender'];

$uch=$pdo->query("select *from user where userName='$e'");
$n=$uch->num_rows;
if ($n==1){
	header ('location:../add/Reg_vet.php');
}else{
$uqr="insert into user(userName,password,roles) values('$e','$f','Staff')";
if($u=mysqli_query($pdo,$uqr)){
$us=$pdo->query("select user_ID from user where userName='$e'");
$uf=mysqli_fetch_array($us);
$uid=$uf[0];
$q="insert into vet(user_ID,vetName,Gender,phone,address,email,image,status) Values('$uid','$a','$g','$b','$c','$d','$filename','Active')";
if($exc=mysqli_query($pdo,$q) or die(mysqli_error())){
move_uploaded_file($filetmp,$filepath);

	header('location:../Views/VetReport.php');
}else{
	header ('location:../add/Reg_vet.php');
	}
}
}
}

//Farmer
if(isset($_POST['btnfarmer'])){
$a=$_POST['name'];
$b=$_POST['phone'];
$c=$_POST['location'];
$d=$_POST['username'];
$e=$_POST['password'];
$f=$_POST['gender'];

$usq=$pdo->query("select *from user where userName='$d'");
$row=$usq->num_rows;
if ($row==1){
	header ('location:../add/Farmer.php');
}else{
$usr="insert into user(userName,password,roles) values('$d','$e','farmer')";
if($u=mysqli_query($pdo,$usr)){
$ufr=$pdo->query("select user_ID from user where userName='$d'");
$ud=mysqli_fetch_array($ufr);
$sid=$ud[0];
$qry="insert into farmer(user_ID,FName,gender,location,phone) Values('$sid','$a','$f','$c','$b')";
if($exc=mysqli_query($pdo,$qry) or die(mysqli_error()))
     header('location:../Views/FarmerRep.php');
}else{
       header('locaion:../add/Farmer.php');
}
}
}

?>



