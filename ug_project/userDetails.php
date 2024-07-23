<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<body style="background-image: url('ad1.jpg'); background-repeat: no-repeat; background-size: cover;">
<center>
<h1> User Details </h1>
<?php
$sql = "SELECT * FROM sign";
$result = mysqli_query($con, $sql);
?>
<table border=2 CELLPADDING=15 style="border-color:black;">
  <tr bgcolor=#ff9a9a>
	<th>Username</th>
    <th>Email Id</th>
    <th>Phone</th>
    <th>Password</th>
	<th>Locality</th>
    <th>Accommodation Type</th>
	<th>Role</th>
	</tr>
<?php 
while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Username']; ?></td>
      <td><?php echo $row['Email']; ?></td>
	  <td><?php echo $row['Phone']; ?></td>
      <td><?php echo $row['Password']; ?></td>
      <td><?php echo $row['Locality']; ?></td>
	  <td><?php echo $row['Acc_type']; ?></td>
	  <td><?php echo $row['Role']; ?></td>
    </tr>
<?php } ?>
</table><br>
<form action="userDetails.php" method="POST">
<input type="submit" name="insert" value="DELETE">
</form>


</center>
</body>
</html>




