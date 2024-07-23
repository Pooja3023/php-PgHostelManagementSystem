<?php
if(isset($_POST["insert"]))
{
$tno=$_POST["t1"];
$tname=$_POST["t2"];
$eid=$_POST["t3"];
$mno=$_POST["t4"];
$add=$_POST["t5"];
$loc=$_POST["t6"];
$acc=$_POST["t7"];
$q="insert into tntot values ('$tno','$tname','$eid','$mno','$add','$loc','$acc')";

$con=mysqli_connect("localhost","root","","pooja");	

$res=mysqli_query($con,$q);

}
if(isset($_POST["insert"]))
{

$acc=$_POST["t7"];
$q="delete from room1 where Room_type='$acc' LIMIT 1";

$con=mysqli_connect("localhost","root","","pooja");	

$res=mysqli_query($con,$q);
if($res)
{
  header("Location: tntDetails.php");
  exit;
}
}
?>
