<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html>
<style>
button {
    background-color: #FFF1ED;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
input[type="checkbox"] {
  transform: scale(1.5); 
}

</style>
<body bgcolor=#fff1ed style=" background-image:url('ad1.jpg');  background-size: cover; background-repeat: no-repeat;">
<?php
$user=$_SESSION['Email'];
$sql = "SELECT * FROM sign where Email like'%$user%'";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {?>
<center><font size=10>Welcome <?php echo $row['Username'] ?> </font><br><br><br>
<table border=10 cellpadding=30 style="background-color: #ececec; font-size:25px; border-color:#ff9a9a;" >
<tr><th>USERNAME</th><td><?php echo $row['Username']; ?></td></tr>
<tr><th>LOCALITY</th><td><?php echo $row['Locality']; ?></td></tr>
<tr><th>ACCOMMODATION TYPE</th><td><?php echo $row['Acc_type']; ?></td></tr>
<tr><th>SEATS AVAILABLE</th><td>
<?php 
if($row['Locality']=='Thirupathiripuliyur' && $row['Acc_type']=='Private Room'){
$sql = "SELECT count(*) FROM room where Room_type='Private Room'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Thirupathiripuliyur' && $row['Acc_type']=='Double Sharing'){
$sql = "SELECT count(*) FROM room where Room_type='Double Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Thirupathiripuliyur' && $row['Acc_type']=='Triple Sharing'){
$sql = "SELECT count(*) FROM room where Room_type='Triple Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Old Town' && $row['Acc_type']=='Private Room'){
$sql = "SELECT count(*) FROM room1 where Room_type='Private Room'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Old Town' && $row['Acc_type']=='Double Sharing'){
$sql = "SELECT count(*) FROM room1 where Room_type='Double Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Old Town' && $row['Acc_type']=='Triple Sharing'){
$sql = "SELECT count(*) FROM room1 where Room_type='Triple Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Manjakuppam' && $row['Acc_type']=='Private Room'){
$sql = "SELECT count(*) FROM room2 where Room_type='Private Room'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Manjakuppam' && $row['Acc_type']=='Double Sharing'){
$sql = "SELECT count(*) FROM room2 where Room_type='Double Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
elseif($row['Locality']=='Manjakuppam' && $row['Acc_type']=='Triple Sharing'){
$sql = "SELECT count(*) FROM room2 where Room_type='Triple Sharing'";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_array($result);
echo $count[0];
}
?>
</td></tr><b>
<?php } ?>
</table><br><br>
<form action="tq.php" method="post" style="color: white; display: inline-block;">
  <label style="font-size:30px;"><input type="checkbox" name="interest" value="yes" size=5>I'm interested</label>
  <button type="submit" name="sub" style="display:inline-block; color:black; width:90px; margin-right:360px;">Submit</button>
</form>
<form action="main.php" method="post" style=" display: inline-block;">
  	<button type="submit" name="sub" style="display:inline-block; color:black; width:90px; margin-left:10px;">Logout</button>
</form>

</center>
</body>
</html>