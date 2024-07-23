<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<body>
<?php
$sql = "SELECT * FROM sign";
$result = mysqli_query($con, $sql);
?>
<table border=2 CELLPADDING=10>
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
</table>
<form action="sign1d.php" method="POST">
<input type="submit" name="insert" value="DELETE">
</form>
</body>
</html>