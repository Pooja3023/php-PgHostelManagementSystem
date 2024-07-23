<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h1>Enter Employee Details</h1>

<form method="post" action="">
Employee Number:<input type="text" name="t1" />
<input type="submit" name="delete" value="DELETE">
</form>
<form action="emp.php" method="POST">
<input type="submit" name="insert" value="BACK">
</form>
<?php
if(isset($_POST["delete"]))
{
$eeno=$_POST["t1"];

$q="delete from ot where Employee_no=$eeno";

$con=mysqli_connect("localhost","root","","pooja");	

$res=mysqli_query($con,$q);
if($res)
    {
        header("Location: empDetails.php");
        exit;
    }
}
?>
</center>
</body>
</html>