<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<body>
<?php
$sql = "SELECT * FROM tnt";
$result = mysqli_query($con, $sql);
?>
<h1>Thirupathiripuliyur Tenant</h1>
<table border=2 CELLPADDING=15>
  <tr bgcolor=#ff9a9a>
   <th>Tenant Number</th>
    <th>Tenant Name</th>
    <th>Email ID</th>
    <th>Mobile Number</th>
	<th>Address</th>
	<th>Date of Joining</th>
	<th>Accomodation Type</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Tenant_no']; ?></td>
      <td><?php echo $row['Tenant_name']; ?></td>
      <td><?php echo $row['Email_ID']; ?></td>
      <td><?php echo $row['Mobile_no']; ?></td>
	  <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Acc_type']; ?></td>
    </tr>
  <?php } ?>
</table><br>
<form action="tnth.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="INSERT"></form>
<form action="tntdh.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="DELETE">
</form><br><br><br>
<?php
$sql = "SELECT * FROM tntot";
$result = mysqli_query($con, $sql);
?>
<h1>Old Town Tenant</h1>
<table border=2 CELLPADDING=15>
  <tr bgcolor=#ff9a9a>
   <th>Tenant Number</th>
    <th>Tenant Name</th>
    <th>Email ID</th>
    <th>Mobile Number</th>
	<th>Address</th>
	<th>Date of Joining</th>
	<th>Accomodation Type</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Tenant_no']; ?></td>
      <td><?php echo $row['Tenant_name']; ?></td>
      <td><?php echo $row['Email_ID']; ?></td>
      <td><?php echo $row['Mobile_no']; ?></td>
	  <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Acc_type']; ?></td>
    </tr>
  <?php } ?>
</table><br>
<form action="tntot.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="INSERT"></form>
<form action="tntdot.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="DELETE" >
</form><br><br><br>

<?php
$sql = "SELECT * FROM tntmn";
$result = mysqli_query($con, $sql);
?>
<h1>Manjakuppam Tenant</h1>
<table border=2 CELLPADDING=15>
  <tr bgcolor=#ff9a9a>
   <th>Tenant Number</th>
    <th>Tenant Name</th>
    <th>Email ID</th>
    <th>Mobile Number</th>
	<th>Address</th>
	<th>Date of Joining</th>
	<th>Accomodation Type</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Tenant_no']; ?></td>
      <td><?php echo $row['Tenant_name']; ?></td>
      <td><?php echo $row['Email_ID']; ?></td>
      <td><?php echo $row['Mobile_no']; ?></td>
	  <td><?php echo $row['Address']; ?></td>
      <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Acc_type']; ?></td>
    </tr>
  <?php } ?>
</table><br>
<form action="tntmn.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="INSERT"></form>
<form action="tntdmn.php" method="POST" style="display: inline-block; margin-left:20px">
<input type="submit" name="insert" value="DELETE" >
</form>

</body>
</html>
                                   