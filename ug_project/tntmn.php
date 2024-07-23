<!DOCTYPE html>
<html>
<head>
</head>
<body>
<center><h1>Enter Tenant Details</h1>
<form method="post" action="ins3.php">
Tenant Number:<input type="text" name="t1" /><br /><br />
Tenant Name: <input type="text" name="t2" /><br /><br />
Email ID:  <input type="text" name="t3" /><br /><br />
Mobile Number:<input type="text" name="t4" /><br /><br />
Address:<input type="text" name="t5" /><br /><br />
Date of Joining:<input type="datetime-local" name="t6" /><br /><br />
Accomodation:<select id="acc" name="t7"  required>
						<option value="">Choose Here</option>
						<option value="Private Room">Private Room</option>
						<option value="Double Sharing">Double Sharing</option>
						<option value="Triple Sharing">Triple Sharing</option>
					</select><br /><br />
<input type="submit" name="insert" value="INSERT">
<input type="reset" value="CLEAR">
</form>
<form action="tnt.php" method="POST">
<input type="submit" name="insert" value="BACK">
</form>
</center>

</body>
</html>
