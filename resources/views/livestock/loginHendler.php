<?php
include("conn.php");
if(isset($_POST['log'])){
$user=$_POST['User'];
$Pass=$_POST['pass'];
$stm="select *from user where userName='$user' and password='$Pass'";
//var_dump($stm);
//exit();
$qry=mysqli_query($pdo,$stm);
$n=mysqli_num_rows($qry);
    if($n==1){
		session_start();
		$row=mysqli_fetch_array($qry);
		$_SESSION["id"]=$row['user_ID'];
		$_SESSION["roles"]=$row['roles'];
		$_SESSION["userName"]=$row['userName'];
  header("location:layouts/layout.php");

}
else{
    echo "username and password not correct";

}
}
?>
