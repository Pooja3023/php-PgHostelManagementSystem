<?php
include ('connect.php');
?>
<!DOCTYPE html>
<html>
<body>

<?php
$sql = "SELECT * FROM thiru";
$result = mysqli_query($con, $sql);
?>
<h1>Thirupathiripuliyur Employees</h1>
<table border=2 CELLPADDING=10>
  <tr bgcolor=#ff9a9a>
   <th>Employee Number</th>
    <th>Employee Name</th>
    <th>Gender</th>
    <th>Designation</th>
	<th>Salary</th>
	<th>Date of Joining</th>
	<th>Phone Number</th>
	<th>Address</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Employee_no']; ?></td>
      <td><?php echo $row['Employee_name']; ?></td>
      <td><?php echo $row['Gender']; ?></td>
      <td><?php echo $row['Designation']; ?></td>
	  <td><?php echo $row['Salary']; ?></td>
	   <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Phone_number']; ?></td>
      <td><?php echo $row['Address']; ?></td>
    </tr>
  <?php } ?>
</table>
<form action="inserth.php" method="POST">
<input type="submit" name="insert" value="INSERT"></form>
<form action="delth.php" method="POST">
<input type="submit" name="insert" value="DELETE">
</form>

<?php
$sql = "SELECT * FROM ot";
$result = mysqli_query($con, $sql);
?>
<h1>Old Town Employees</h1>
<table border=2 CELLPADDING=10>
  <tr bgcolor=#ff9a9a>
   <th>Employee Number</th>
    <th>Employee Name</th>
    <th>Gender</th>
    <th>Designation</th>
	<th>Salary</th>
	<th>Date of Joining</th>
	<th>Phone Number</th>
	<th>Address</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Employee_no']; ?></td>
      <td><?php echo $row['Employee_name']; ?></td>
      <td><?php echo $row['Gender']; ?></td>
      <td><?php echo $row['Designation']; ?></td>
	  <td><?php echo $row['Salary']; ?></td>
	   <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Phone_number']; ?></td>
      <td><?php echo $row['Address']; ?></td>
    </tr>
  <?php } ?>
</table>
<form action="insertot.php" method="POST">
<input type="submit" name="insert1" value="INSERT"></form>
<form action="delot.php" method="POST">
<input type="submit" name="insert" value="DELETE">
</form>

<?php
$sql = "SELECT * FROM man";
$result = mysqli_query($con, $sql);
?>
<h1>Manjakuppam Employees</h1>
<table border=2 CELLPADDING=10>
  <tr bgcolor=#ff9a9a>
   <th>Employee Number</th>
    <th>Employee Name</th>
    <th>Gender</th>
    <th>Designation</th>
	<th>Salary</th>
	<th>Date of Joining</th>
	<th>Phone Number</th>
	<th>Address</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr bgcolor=#fff1ed>
	  <td><?php echo $row['Employee_no']; ?></td>
      <td><?php echo $row['Employee_name']; ?></td>
      <td><?php echo $row['Gender']; ?></td>
      <td><?php echo $row['Designation']; ?></td>
	  <td><?php echo $row['Salary']; ?></td>
	   <td><?php echo $row['DOJ']; ?></td>
      <td><?php echo $row['Phone_number']; ?></td>
      <td><?php echo $row['Address']; ?></td>
    </tr>
  <?php } ?>
</table>
<form action="insertmn.php" method="POST">
<input type="submit" name="insert2" value="INSERT"></form>
<form action="delmn.php" method="POST">
<input type="submit" name="insert" value="DELETE">
</form>

</body>
</html>
                                   