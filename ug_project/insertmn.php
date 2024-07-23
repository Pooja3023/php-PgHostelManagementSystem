<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h1>Enter Employee Details</h1>

<form method="post" action="">
Employee Number:<input type="text" name="t1" /><br /><br />
Employee Name: <input type="text" name="t2" /><br /><br />
	Gender:<select id="acc" name="acc" >
	  <option value="">Choose Here</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Others">Others</option>
  </select><br><br>

Designation:<input type="text" name="t4" /><br /><br />
Salary:<input type="text" name="t5" /><br /><br />
Date of Joining:<input type="date" name="t6" /><br /><br />
Phone number:<input type="text" name="t7" /><br /><br />
Address:<input type="text" name="t8" /><br /><br />
<input type="submit" name="insert" value="INSERT">
<input type="reset" value="CLEAR">
</form>
<form action="empDetails.php" method="POST">
<input type="submit" name="insert" value="BACK">
</form>
</center>
<?php
if(isset($_POST["insert"]))
{
$eeno=$_POST["t1"];
$ename=$_POST["t2"];
$gen=$_POST["acc"];
$des=$_POST["t4"];
$sal=$_POST["t5"];
$dat=$_POST["t6"];
$pho=$_POST["t7"];
$add=$_POST["t8"];
$q="insert into man values ('$eeno','$ename','$gen','$des','$sal','$dat','$pho','$add')";
$con=mysqli_connect("localhost","root","","pooja");	
$res=mysqli_query($con,$q);

if($res)
{
  header("Location: empDetails.php");
  exit;
}
}
?>
</body>
</html>
