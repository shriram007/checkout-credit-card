<?php
session_start();

include 'database.php';

$email=$_POST['femail'];
$password=$_POST['fpass'];

$sql="select * from info where email='$email' and password='$password'";
$result=mysqli_query($connection,$sql);
if(mysqli_fetch_row($result)>0){
	echo "Login Success";
	$_SESSION['password']=$password;
	header("Location:shoplist.html");
}else{
	echo "Login failed";
}

?>

