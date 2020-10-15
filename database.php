<?php
$servername="localhost";
$username="root";
$password="";
$dbname="creditcardprocesssing";

$connection=mysqli_connect($servername,$username,$password,$dbname);

if ($connection==false) {
	echo "database not connected";
}
else
{
	echo "database connected";
}

?>