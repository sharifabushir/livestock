<?php
include("../conn.php");
//food
if(isset($_POST['btnfood'])){
$a=$_POST['fname'];
$b=$_POST['type'];
$c=$_POST['manufacture'];
$d=$_POST['qnty'];

$qr="insert into food (F_Name,manufacturer,quantity,type) values ('$a','$c','$d','$b')";
if($qry=mysqli_query($pdo,$qr)){
	header('location:../add/food.php');
}else{
	header ('location:../index.php');
	}
	}
}

?>



