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
$q="insert into thiru values ('$eeno','$ename','$gen','$des','$sal','$dat','$pho','$add')";
$con=mysqli_connect("localhost","root","","pooja");	
$res=mysqli_query($con,$q);
if($res)
{
  header("Location: empDetails.php");
  exit;
}
}
?>