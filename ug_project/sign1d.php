<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h1>Enter Details</h1>
<form method="post" action="">
User Mobile Number:<input type="text" name="t1" />
<input type="submit" name="delete" value="DELETE">
</form>
<form action="sign1.php" method="POST">
<input type="submit" name="insert" value="BACK">
</form>
<?php
if(isset($_POST["delete"]))
{
$eeno=$_POST["t1"];
$q="delete from sign where Phone=$eeno";
$con=mysqli_connect("localhost","root","","pooja");	
$res=mysqli_query($con,$q);
}
?>
</center>
</body>
</html>