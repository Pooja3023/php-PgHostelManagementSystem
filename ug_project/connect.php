<?php
$server="localhost";
$mysqluser = "root";
$mysqlpass="";
$db="pooja";
$con = mysqli_connect($server,$mysqluser,$mysqlpass,$db);
if($con==false)
{
	echo "<p>Not Connected</p>";
	$err = mysqli_connect_error();
	echo "<p>$err</p>";
	exit();
}
?>