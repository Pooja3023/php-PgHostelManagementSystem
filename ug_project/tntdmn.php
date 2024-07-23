<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h1>Enter Tenant Details</h1>
<form method="post" action="" style="display: inline-block; ">
Employee Number:<input type="text" name="t1" /><br><br><br>
Accommodation Type: <select id="acc" name="acc" required>
						<option value="">Choose Here</option>
						<option value="Private Room">Private Room</option>
						<option value="Double Sharing">Double Sharing</option>
						<option value="Triple Sharing">Triple Sharing</option>
					</select><br><br><br>
<input type="submit" name="delete" value="DELETE">
</form>
<form action="tntDetails.php" method="POST" style="display: inline-block; ">
<input type="submit" name="insert" value="BACK">
</form>
<?php
if(isset($_POST["delete"]))
{
$eeno=$_POST["t1"];
$q="delete from tntmn where Tenant_no=$eeno";
$con=mysqli_connect("localhost","root","","pooja");	
$res=mysqli_query($con,$q);
if($res)
{
  header("Location: tntDetails.php");
  exit;
}
}
if(isset($_POST["delete"]))
{
$acc=$_POST["acc"];
$q = "INSERT INTO room2 (Room_type) VALUES ('$acc')";
$con=mysqli_connect("localhost","root","","pooja");	
$res=mysqli_query($con,$q);
if($res)
{
  header("Location: tntDetails.php");
  exit;
}
}
?>
</center>
</body>
</html>