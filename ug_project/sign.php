<?php
include('connect.php');
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<style>	
.container {
    width: 1000px;
    margin: 0 auto;
    padding: 20px;
    background-color: #FF9A9A;
    border-radius: 10px;
	height: 840px;
	overflow: auto;
	}
.container1 {
    padding-left: 20px;
	font-size: 20px;
	scroll
}
button {
    background-color: #FFF1ED;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
button:hover {
    opacity: 0.8;
}
</style>
</head>
<body>
	<div class="container">
		<img src="signgirl1.jpg" style="float: left; width: 50%; height:100%">
		<div style="width: 50%; float: right;">
			<form action="" method="POST" >
				<div class="container1">
					<center><h1>Sign Up</h1></center>
					<hr>
					<label for="fname"><b>Username</b></label><br>
						<input type="text"  name="fname" id="fname" style="width: 400px; height: 25px;" required><br><br>
					<label for="email"><b>Email</b></label><br>
						<input type="text"  name="email" id="email" style="width: 400px; height: 25px;" required><br><br>
					<label for="cno"><b>Mobile Number</b></label><br>
						<input type="text"  name="cno" id="cno" style="width: 400px; height: 25px;" required><br><br>
					<label for="psw"><b>Password</b></label><br>
						<input type="password"  name="psw" id="psw" style="width: 400px; height: 25px;" required>
						<span id = "message1" style="color:red"> </span><br><br>
					<label for="psw-repeat"><b>Retype Password</b></label><br>
						<input type="password"  name="psw-repeat" id="psw-repeat" style="width: 400px; height: 25px;" required>
						<span id = "message2" style="color:red"> </span><br><br>
					<label for="loc"><b>Locality</b></label>
					<select id="plc" name="plc" style="width: 410px; height: 32px;" required>
						<option value="">Choose Here</option>
						<option value="Thirupathiripuliyur">Thirupathiripuliyur</option>
						<option value="Old Town">Old Town</option>
						<option value="Manjakuppam">Manjakuppam</option>
					</select><br><br>
					<label for="loc"><b>Accommodation Type</b></label>
					<select id="acc" name="acc" style="width: 410px; height: 32px;" required>
						<option value="">Choose Here</option>
						<option value="Private Room">Private Room</option>
						<option value="Double Sharing">Double Sharing</option>
						<option value="Triple Sharing">Triple Sharing</option>
					</select><br><br>
					<label for="loc"><b>Role</b></label><br>
					<select id="role" name="role" style="width: 410px; height: 32px;" required>
						<option value="">Choose Here</option>
						<option value="User">User</option>
					</select><br>
					<label>
					<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>
					<p>By creating an account you agree to our <a href="#id01" style="color:dodgerblue">Terms & Privacy</a>.</p>
					<p>Already have an account <a href="main.php">Login</a></p>
					<button type="submit" name="sub" style="display:inline-block;color:black; width:90px;">Sign Up</button>
			</form>
			<form action="main.php" method="POST" style="display:inline-block; width:290px;">
				<button type="submit"  style='color:black;'>Cancel</button>
			</form>
				</div>
		</div>
    </div>
<?php
if(isset($_POST['sub'])) {
    $email = $_POST['email'];
    $phone = $_POST['cno'];
    $sql_email = "SELECT * FROM sign WHERE Email='$email'";
    $result_email = mysqli_query($con, $sql_email);
    $sql_phone = "SELECT * FROM sign WHERE phone='$phone'";
    $result_phone = mysqli_query($con, $sql_phone);
    if (mysqli_num_rows($result_email) > 0 && mysqli_num_rows($result_phone) > 0) {
        echo '<script>alert("Email ID or Phone number already exists.")</script>';
    }
    else{
		$password =$_POST['psw'];
		$confirm_password = $_POST['psw-repeat'];
		if($password !== $confirm_password) {
			echo '<script>alert("Password and confirm password do not match.")</script>';
		}
		else{
			$fname=$_POST["fname"];
			$email=$_POST["email"];
			$pno=$_POST["cno"];
			$pass=$_POST["psw"];
			$plc=$_POST["plc"];
			$acc=$_POST["acc"];
			$role=$_POST["role"];
			$q="insert into sign values ('$fname','$email','$pno','$pass','$plc','$acc','$role')";
			$res=mysqli_query($con,$q);
			echo '<script>alert("Successfully Registered")</script>';
		}
	}
	
}
?>
</body>
</html>