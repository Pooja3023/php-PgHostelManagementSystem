<html>
<body>
<center><h1>Enter Employee Details</h1>
<form method="post" action="ins.php">
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
</body>
</html>