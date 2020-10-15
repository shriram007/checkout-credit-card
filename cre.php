<?php
include 'database.php';
$itemn=$_POST['itemn'];
$shopn=$_POST['shopn'];
$quantityn=$_POST['quantityn'];
$pricet=$_POST['pricet'];
$cardno=$_POST['cardno'];
$cardna=$_POST['cardna'];
$exm=$_POST['exm'];
$exyear=$_POST['exyear'];
$cvvv=$_POST['cvvv'];

$sql="INSERT INTO `creditcarddetails` (`Item Name`, `shop Name`, `Quantity`, `Price`, `Card Number`, `Card Name`, `Exp Month`, `Exp Year`, `cvv`) VALUES ('$itemn','$shopn','$quantityn','$pricet','$cardno','$cardna','$exm','$exyear','$cvvv')";
$rs =mysqli_query($connection,$sql);
if($rs){
	echo '<script> alert("entered successfully");</script>';

}else{ echo "Registerations Failed"; } ?>

